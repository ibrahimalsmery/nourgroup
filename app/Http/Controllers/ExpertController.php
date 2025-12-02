<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Service;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = Expert::orderBy('id')->search(request('search'))->paginate(10);
        return view('private.experts.index', compact('experts'));
    }

    public function create()
    {
        return view('private.experts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'specialization' => 'required|string',
            'image' => 'nullable|string',
            'current_position' => 'required|string',
            'qualifications' => 'nullable|array',
            'experience' => 'required|string',
            'sectors' => 'nullable|array',
            'achievements' => 'nullable|array',
            'quote' => 'required|string',
            'email' => 'nullable|email',
            'services' => 'nullable|array',
            'image' => 'nullable|image|max:2048',
            'linkedin' => 'nullable|string',
            'x' => 'nullable|string',
            'facebook' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'youtube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'website' => 'nullable|string',

        ], [
            'name.required' => 'الاسم مطلوب',
            'name.string' => 'الاسم يجب أن يكون نصًا',
            'title.required' => 'اللقب مطلوب',
            'title.string' => 'اللقب يجب أن يكون نصًا',
            'specialization.required' => 'التخصص مطلوب',
            'specialization.string' => 'التخصص يجب أن يكون نصًا',
            'image.image' => 'يجب أن يكون الملف صورة',
            'image.max' => 'حجم الصورة لا يجب أن يتجاوز 2 ميغابايت',
            'current_position.required' => 'المنصب الحالي مطلوب',
            'current_position.string' => 'المنصب الحالي يجب أن يكون نصًا',
            'qualifications.array' => 'المؤهلات يجب أن تكون مصفوفة',
            'experience.required' => 'الخبرة مطلوبة',
            'experience.string' => 'الخبرة يجب أن تكون نصًا',
            'sectors.array' => 'القطاعات يجب أن تكون مصفوفة',
            'achievements.array' => 'الإنجازات يجب أن تكون مصفوفة',
            'quote.required' => 'الاقتباس مطلوب',
            'quote.string' => 'الاقتباس يجب أن يكون نصًا',
            'email.email' => 'البريد الإلكتروني غير صالح',
            'services.array' => 'الخدمات يجب أن تكون مصفوفة',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('experts', 'public');
            $data['image'] =  '/public/' . $path;
        }

        $expert = Expert::create($data);

        $expert->services()->sync($data['services'] ?? []);

        return redirect()->route('dashboard.experts.index')->with('success', 'تم إنشاء الخبير بنجاح.');
    }

    public function show(Expert $expert)
    {
        return view('private.experts.show', compact('expert'));
    }

    public function edit(Expert $expert)
    {
        $expert->load('services');
        return view('private.experts.edit', compact('expert'));
    }

    public function update(Request $request, Expert $expert)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'specialization' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'current_position' => 'required|string',
            'qualifications' => 'nullable|array',
            'experience' => 'required|string',
            'sectors' => 'nullable|array',
            'achievements' => 'nullable|array',
            'quote' => 'required|string',
            'email' => 'nullable|email',
            'services' => 'nullable|array',
            'image' => 'nullable|image|max:2048',
            'linkedin' => 'nullable|string',
            'x' => 'nullable|string',
            'facebook' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'youtube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'website' => 'nullable|string',

        ], [
            'name.required' => 'الاسم مطلوب',
            'name.string' => 'الاسم يجب أن يكون نصًا',
            'title.required' => 'اللقب مطلوب',
            'title.string' => 'اللقب يجب أن يكون نصًا',
            'specialization.required' => 'التخصص مطلوب',
            'specialization.string' => 'التخصص يجب أن يكون نصًا',
            'image.image' => 'يجب أن يكون الملف صورة',
            'image.max' => 'حجم الصورة لا يجب أن يتجاوز 2 ميغابايت',
            'current_position.required' => 'المنصب الحالي مطلوب',
            'current_position.string' => 'المنصب الحالي يجب أن يكون نصًا',
            'qualifications.array' => 'المؤهلات يجب أن تكون مصفوفة',
            'experience.required' => 'الخبرة مطلوبة',
            'experience.string' => 'الخبرة يجب أن تكون نصًا',
            'sectors.array' => 'القطاعات يجب أن تكون مصفوفة',
            'achievements.array' => 'الإنجازات يجب أن تكون مصفوفة',
            'quote.required' => 'الاقتباس مطلوب',
            'quote.string' => 'الاقتباس يجب أن يكون نصًا',
            'email.email' => 'البريد الإلكتروني غير صالح',
            'services.array' => 'الخدمات يجب أن تكون مصفوفة',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('experts', 'public');
            $data['image'] =   '/public/' . $path;
        }


        $expert->update($data);

        $expert->services()->sync($data['services'] ?? []);

        return redirect()->route('dashboard.experts.index')->with('success', 'تم تحديث بيانات الخبير بنجاح.');
    }

    public function destroy(Expert $expert)
    {
        $expert->delete();
        return redirect()->route('dashboard.experts.index')->with('success', 'تم حذف الخبير بنجاح.');
    }

    public function show_public(Expert $expert)
    {
        return view('new.expert', compact('expert'));
    }
}
