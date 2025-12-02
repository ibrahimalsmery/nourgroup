@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة الوظائف</p>
                <h2 class="fw-bold mb-0">{{ isset($job) ? 'تعديل إعلان التوظيف' : 'إضافة إعلان جديدة' }}</h2>
            </div>
            <a href="{{ route('dashboard.jobs.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ isset($job) ? route('dashboard.jobs.update', $job) : route('dashboard.jobs.store') }}"
                    method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @if (isset($job))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label class="form-label fw-semibold">العنوان</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $job->title ?? '') }}"
                            required placeholder="عنوان الإعلان">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">الرابط</label>
                        <input type="text" name="url" class="form-control" value="{{ old('url', $job->url ?? '') }}"
                            required placeholder="رابط التقديم أو التفاصيل">
                        <small class="text-muted">ضع رابط نموذج التقديم أو صفحة الوظيفة.</small>
                    </div>
                    <!-- زر الحفظ -->
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-check"></i>
                            <span>{{ isset($job) ? 'تحديث الاعلان' : 'حفظ الاعلان' }}</span>
                        </button>
                        <a href="{{ route('dashboard.jobs.index') }}" class="btn btn-outline-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
