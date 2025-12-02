@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">حسابي</p>
                <h2 class="fw-bold mb-0">الملف الشخصي</h2>
            </div>
            <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة للوحة التحكم</span>
            </a>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">معلومات الحساب</h5>
                        <form action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">الاسم</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">الصورة الشخصية</label>
                                <input type="file" name="profile_image" class="form-control" accept="image/*">
                                <small class="text-muted">يفضل صورة مربعة بوضوح جيد.</small>
                                @php
                                    $useInitial = mb_substr($user->name ?? 'ا', 0, 1);
                                @endphp
                                <div class="mt-2">
                                    @if ($user->profile_image)
                                        <img src="{{ asset('public/' . $user->profile_image) }}" alt="الصورة الشخصية" style="width: 120px; height: 120px; object-fit: cover;" class="rounded border">
                                    @else
                                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center border" style="width: 120px; height: 120px; font-size: 2.5rem;">
                                            {{ $useInitial }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary d-inline-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <span>حفظ التعديلات</span>
                                </button>
                                <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">إلغاء</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">تغيير كلمة المرور</h5>
                        <form action="{{ route('dashboard.profile.password') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">كلمة المرور الحالية</label>
                                <input type="password" name="current_password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">كلمة المرور الجديدة</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">تأكيد كلمة المرور الجديدة</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success d-inline-flex align-items-center gap-2">
                                <i class="fa-solid fa-rotate"></i>
                                <span>تحديث كلمة المرور</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
