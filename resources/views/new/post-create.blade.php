@extends('layout.master')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-10">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
            <div class="mb-6">
                <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)] mb-2">إنشاء مقالة</p>
                <h1 class="text-2xl md:text-3xl font-bold text-slate-900">أرسل مقالتك للنشر</h1>
                <p class="text-slate-600 mt-2">املأ البيانات التالية وسيتم مراجعة المقالة قبل النشر.</p>
            </div>

            <form action="{{ route('posts.public.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-slate-700 mb-1" for="name">الاسم</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:outline-none focus:border-[var(--second-color)]">
                    </div>
                    <div>
                        <label class="block text-sm text-slate-700 mb-1" for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:outline-none focus:border-[var(--second-color)]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm text-slate-700 mb-1" for="title">عنوان المقالة</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:outline-none focus:border-[var(--second-color)]">
                </div>

                <div>
                    <label class="block text-sm text-slate-700 mb-1" for="image">الصورة الرئيسية</label>
                    <input type="file" id="image" name="image"
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:outline-none focus:border-[var(--second-color)] bg-white">
                </div>

                <div>
                    <label class="block text-sm text-slate-700 mb-1" for="content">المحتوى</label>
                    <textarea id="content" name="content" rows="8"
                        class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:outline-none focus:border-[var(--second-color)]">{{ old('content') }}</textarea>
                </div>

                @if ($services->count())
                    <div>
                        <p class="block text-sm text-slate-700 mb-2">اختر الخدمات المرتبطة (اختياري)</p>
                        <div class="grid sm:grid-cols-2 gap-2">
                            @foreach ($services as $service)
                                <label class="flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 cursor-pointer hover:border-[var(--second-color)]">
                                    <input type="checkbox" name="services[]" value="{{ $service->id }}" class="text-[var(--second-color)]"
                                        {{ in_array($service->id, old('services', [])) ? 'checked' : '' }}>
                                    <span class="text-slate-700">{{ $service->title }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-[var(--second-color)] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[var(--second-color)]/90 transition">
                        إرسال المقالة
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
