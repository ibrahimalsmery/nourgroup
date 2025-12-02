<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('actived_at','desc')->search(request('search'))->paginate(10);
        return view('private.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('private.posts.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'required|image|max:10048',
            'title' => 'required|string',
            'content' => 'required|string',
            'services' => 'nullable|array',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'يجب إدخال بريد إلكتروني صحيح.',
            'image.required' => 'يجب رفع صورة.',
            'image.image' => 'الملف المرفوع يجب أن يكون صورة.',
            'title.required' => 'العنوان مطلوب.',
            'content.required' => 'المحتوى مطلوب.',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file("image")->store('posts', 'public');
        }



        $post = Post::create($data);

        $post->services()->sync($data['services'] ?? []);

        return redirect()->route('dashboard.posts.index')->with('success', 'تم إنشاء المقالة بنجاح.');
    }

    public function show(Post $post)
    {
        return view('private.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {

        $post->load('services');
        return view('private.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // إذا استلمنا tags كـ JSON string، نحوله لمصفوفة
        $request->merge([
            'tags' => json_decode($request->tags, true)
        ]);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|max:10048',
            'title' => 'required|string',
            'content' => 'required|string',
            'services' => 'nullable|array',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'image.image' => 'الملف المرفوع يجب أن يكون صورة.',
            'title.required' => 'العنوان مطلوب.',
            'content.required' => 'المحتوى مطلوب.',
        ]);


        if ($request->hasFile('image')) {
            $data['image'] = $request->file("image")->store('posts', 'public');
        } else {
            // احتفظ بالصورة القديمة إذا لم يتم رفع صورة جديدة
            $data['image'] = $post->image;
        }


        $post->update($data);

        $post->services()->sync($data['services'] ?? []);

        return redirect()->route('dashboard.posts.index')->with('success', 'تم تحديث المقالة بنجاح.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard.posts.index')->with('success', 'تم حذف المقالة بنجاح.');
    }

    public function show_public(Post $post)
    {
        $post->load('services');
        $title = $post->title;
        return view('new.post', compact('post','title'));
    }

    public function create_public()
    {
        $title = 'إضافة مقالة';
        $services = Service::orderBy('title')->get();
        return view('new.post-create', compact('services', 'title'));
    }

    public function store_public(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'required|image|max:10048',
            'title' => 'required|string',
            'content' => 'required|string',
            'services' => 'nullable|array',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        // تبقى المقالة غير مفعلة حتى يراجعها المسؤول
        $data['actived_at'] = null;

        $post = Post::create($data);
        $post->services()->sync($data['services'] ?? []);

        return redirect()->route('posts.public.show', $post)->with('success', 'تم إرسال المقالة للمراجعة.');
    }

    function toggle_active(Post $post)  {
        if($post->actived_at) {
            $post->actived_at = null;
        }else{
            $post->actived_at = now();
        }
        $post->save();
        return back();
    }
}
