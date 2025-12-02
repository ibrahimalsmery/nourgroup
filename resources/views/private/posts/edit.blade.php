@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <p class="text-muted mb-1 small">إدارة المقالات</p>
                <h2 class="fw-bold mb-0">{{ isset($post) ? 'تعديل المقالة' : 'إضافة مقالة جديدة' }}</h2>
            </div>
            <a href="{{ route('dashboard.posts.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>رجوع</span>
            </a>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ isset($post) ? route('dashboard.posts.update', $post) : route('dashboard.posts.store') }}"
                            method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @if (isset($post))
                                @method('PUT')
                            @endif

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">الاسم</label>
                                    <input type="text" name="name" class="form-control" placeholder="اسم الكاتب أو الجهة"
                                        value="{{ old('name', $post->name ?? '') }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com"
                                        value="{{ old('email', $post->email ?? '') }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">العنوان</label>
                                    <input type="text" name="title" class="form-control" placeholder="عنوان واضح وجاذب"
                                        value="{{ old('title', $post->title ?? '') }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-semibold d-flex align-items-center gap-2">
                                        <span>الصورة الرئيسية</span>
                                        <span class="badge text-bg-light">{{ isset($post) ? 'اختياري عند التعديل' : 'مطلوب' }}</span>
                                    </label>
                                    <input type="file" name="image" class="form-control" accept="image/*"
                                        @if (!isset($post)) required @endif>
                                    <small class="text-muted">يفضل استخدام صورة أفقية (1200×630).</small>
                                    @if (isset($post) && $post->image ?? false)
                                        <div class="mt-2">
                                            <img src="{{ asset('public/' . $post->image) }}" alt="الصورة الحالية" class="img-fluid rounded border">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-semibold">المحتوى</label>
                                    <textarea name="content" class="form-control rich-text" rows="8" placeholder="اكتب نص المقالة بالتفصيل" required>{{ old('content', $post->content ?? '') }}</textarea>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <h5 class="fw-bold mb-1">الخدمات المرتبطة</h5>
                                        <small class="text-muted">حدد الصفحات التي سيظهر فيها المقال</small>
                                    </div>
                                    <span class="badge text-bg-info text-white">اختيار متعدد</span>
                                </div>
                            </div>

                            @php
                                $selectedServices = collect(old('services', isset($post) ? $post->services->pluck('id')->toArray() : []))->map(fn($id) => (int) $id);
                            @endphp

                            <div class="row g-3">
                                @foreach (\App\Models\Service::all() as $service)
                                    <div class="col-md-6">
                                        <div class="form-check border rounded px-3 py-2 h-100">
                                            <input class="form-check-input ms-2" type="checkbox" name="services[]" value="{{ $service->id }}"
                                                id="ser-{{ $service->id }}"
                                                {{ $selectedServices->contains($service->id) ? 'checked' : '' }}>
                                            <label class="form-check-label w-100" for="ser-{{ $service->id }}">
                                                <span class="fw-semibold d-block">{{ $service->title }}</span>
                                                <small class="text-muted">إظهار المقال ضمن صفحة {{ $service->title }}</small>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="d-flex gap-3 mt-4">
                                <button type="submit" class="btn btn-primary px-4 d-inline-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ isset($post) ? 'تحديث المقالة' : 'حفظ المقالة' }}</span>
                                </button>
                                <a href="{{ route('dashboard.posts.index') }}" class="btn btn-outline-secondary">
                                    إلغاء والعودة
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">نصائح قبل النشر</h5>
                        <ul class="list-unstyled text-muted small mb-0">
                            <li class="mb-2">استخدم عنواناً يوضح الفائدة للقارئ.</li>
                            <li class="mb-2">ضع صورة واضحة وجذابة تعبر عن المحتوى.</li>
                            <li class="mb-2">قسّم النص إلى فقرات قصيرة وسهلة القراءة.</li>
                            <li>اربط المقال بالخدمات المناسبة لتحسين ظهور المحتوى.</li>
                        </ul>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">حالة النموذج</h6>
                        <p class="mb-1 text-muted">تأكد من ملء الحقول الأساسية قبل الحفظ.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge text-bg-primary">العنوان</span>
                            <span class="badge text-bg-primary">المحتوى</span>
                            <span class="badge text-bg-primary">الصورة</span>
                            <span class="badge text-bg-primary">الخدمات</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
