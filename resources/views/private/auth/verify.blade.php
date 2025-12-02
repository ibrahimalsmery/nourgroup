@extends('private.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-xl-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold mb-1">تأكيد البريد الإلكتروني</h3>
                        <p class="text-muted mb-0 small">تحقق من بريدك لإكمال إنشاء الحساب</p>
                    </div>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            تم إرسال رابط تحقق جديد إلى بريدك الإلكتروني.
                        </div>
                    @endif

                    <p class="mb-3">
                        يرجى التحقق من بريدك الإلكتروني للعثور على رابط التحقق. إذا لم تصلك رسالة البريد الإلكتروني:
                    </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-envelope-circle-check"></i>
                            <span>إعادة إرسال الرابط</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
