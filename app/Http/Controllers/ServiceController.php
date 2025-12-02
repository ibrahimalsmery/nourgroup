<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Post;
use App\Models\Service;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // عرض جميع الخدمات
    public function index()
    {
        $services = Service::orderBy('id')->search(request('search'))->paginate(10);
        return view('private.services.index', compact('services'));
    }

    // عرض صفحة إنشاء خدمة جديدة
    public function create()
    {
        return view('private.services.create');
    }

    // تخزين خدمة جديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'links' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'page_sections' => "nullable|string"
        ]);
        // رفع الصورة إذا تم تحميلها
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }
        $service = Service::create($data);

        $sections = json_decode($request->page_sections);
        foreach ($sections as $sec) {
            $service->page_sections()->create((array)$sec);
        }


        return redirect()->route('dashboard.services.index')->with('success', 'تم إنشاء الخدمة بنجاح.');
    }

    // عرض تفاصيل خدمة معينة
    public function show($service)
    {

        $service = Service::findOrFail($service);
        $service_experts = $service->experts;
        $service_posts = $service->posts()->whereNotNull("actived_at")->get();
        $title = $service->title;
        if ($service->custom_view) {
            return view($service->custom_view, compact('service','title', 'service_experts', 'service_posts'));
        }
        $service->load('page_sections');
        return view('new.service', compact('service','title', 'service_experts', 'service_posts'));
    }

    // عرض صفحة تعديل الخدمة
    public function edit(Service $service)
    {
        $service->load("page_sections");
        return view('private.services.edit', compact('service'));
    }

    // تحديث بيانات خدمة موجودة
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'links' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'page_sections' => "nullable|string"

        ]);


        // حذف الصورة القديمة إذا تم رفع صورة جديدة
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        $sections = json_decode($request->page_sections);

        $sections  = array_map(fn($r) => (array)$r, $sections);

        $service->page_sections()->delete();

        $service->page_sections()->createMany($sections);

        return redirect()->route('dashboard.services.index')->with('success', 'تم تحديث الخدمة بنجاح.');
    }

    // حذف خدمة
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard.services.index')->with('success', 'تم حذف الخدمة بنجاح.');
    }

    function service_posts(Service $service)  {
        $service->load(['posts' => function($query){
            $query->whereNotNull('actived_at')->latest();
        }]);
        return view('new.service-posts',compact('service'));
    }
}
