@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة المحتوى</p>
                <h2 class="fw-bold mb-0">إضافة خبير جديد</h2>
            </div>
            <a href="{{ route('dashboard.experts.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('dashboard.experts.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">الاسم</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="اسم الخبير">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">اللقب / المسمى الوظيفي</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required placeholder="المسمى الوظيفي">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">التخصص</label>
                            <input type="text" name="specialization" class="form-control" value="{{ old('specialization') }}"
                                required placeholder="مجال التخصص">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">المنصب الحالي</label>
                            <input type="text" name="current_position" class="form-control" value="{{ old('current_position') }}"
                                required placeholder="منصب/جهة العمل">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="name@example.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">صورة الخبير</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <small class="text-muted">يفضل صورة مربعة بوضوح جيد.</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">الخبرة</label>
                            <textarea name="experience" class="form-control" rows="3" placeholder="ملخص الخبرة">{{ old('experience') }}</textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">اقتباس / شعار</label>
                            <textarea name="quote" class="form-control" rows="2" placeholder="عبارة قصيرة">{{ old('quote') }}</textarea>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">LinkedIn</label>
                            <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin') }}" placeholder="رابط LinkedIn">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">X (تويتر سابقاً)</label>
                            <input type="text" name="x" class="form-control" value="{{ old('x') }}" placeholder="رابط X">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}" placeholder="رابط Facebook">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">TikTok</label>
                            <input type="text" name="tiktok" class="form-control" value="{{ old('tiktok') }}" placeholder="رابط TikTok">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">YouTube</label>
                            <input type="text" name="youtube" class="form-control" value="{{ old('youtube') }}" placeholder="رابط YouTube">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}" placeholder="رابط Instagram">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">الموقع</label>
                            <input type="text" name="website" class="form-control" value="{{ old('website') }}" placeholder="رابط الموقع الشخصي أو جهة العمل">
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">المؤهلات العلمية (كل سطر مؤهل)</label>
                        <textarea name="qualifications[]" class="form-control" rows="3" placeholder="مثال:\nماجستير إدارة أعمال\nبكالوريوس تقنية معلومات">{{ old('qualifications') ? implode("\n", old('qualifications')) : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">القطاعات (كل سطر قطاع)</label>
                        <textarea name="sectors[]" class="form-control" rows="3" placeholder="مثال:\nالتعليم\nالصحة">{{ old('sectors') ? implode("\n", old('sectors')) : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">الإنجازات (كل سطر إنجاز)</label>
                        <textarea name="achievements[]" class="form-control" rows="3" placeholder="أبرز الإنجازات المهنية">{{ old('achievements') ? implode("\n", old('achievements')) : '' }}</textarea>
                    </div>

                    <hr class="my-4">

                    <div class="mb-3">
                        <h5 class="fw-bold mb-2">الخدمات المرتبطة</h5>
                        <small class="text-muted">اختر الخدمات التي يساهم فيها الخبير</small>
                    </div>
                    <div class="row g-3">
                        @foreach (\App\Models\Service::all() as $service)
                            <div class="col-md-4">
                                <div class="form-check border rounded px-3 py-2 h-100">
                                    <input id="ser-{{ $service->id }}" type="checkbox" class="form-check-input ms-2" name="services[]" value="{{ $service->id }}"
                                        {{ is_array(old('services')) && in_array($service->id, array_map('intval', old('services'))) ? 'checked' : '' }}>
                                    <label class="form-check-label w-100" for="ser-{{ $service->id }}">
                                        <span class="fw-semibold d-block">{{ $service->title }}</span>
                                        <small class="text-muted">ربط الخبير بهذه الخدمة</small>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-success d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-check"></i>
                            <span>حفظ</span>
                        </button>
                        <a href="{{ route('dashboard.experts.index') }}" class="btn btn-outline-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
