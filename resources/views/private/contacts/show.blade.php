@extends('private.layouts.app')

@section('title', 'عرض الرسالة')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">تفاصيل الرسالة</p>
                <h2 class="fw-bold mb-0">رسالة من {{ $contact->name }}</h2>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                @if (!$contact->is_read)
                    <form action="{{ route('dashboard.contacts.markAsRead', $contact->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <span>تحديد كمقروء</span>
                        </button>
                    </form>
                @endif
                <a href="{{ route('dashboard.contacts.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span>عودة للقائمة</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3 text-muted small">
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-user"></i>
                                <strong>{{ $contact->name }}</strong>
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-envelope"></i>
                                <span>{{ $contact->email }}</span>
                            </span>
                            @if ($contact->phone)
                                <span class="d-inline-flex align-items-center gap-1">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>{{ $contact->phone }}</span>
                                </span>
                            @endif
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-regular fa-calendar"></i>
                                <span>{{ $contact->created_at->format('Y-m-d H:i') }}</span>
                            </span>
                            @if ($contact->is_read)
                                <span class="badge bg-success d-inline-flex align-items-center gap-1">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>تمت القراءة</span>
                                </span>
                            @else
                                <span class="badge bg-warning text-dark d-inline-flex align-items-center gap-1">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <span>غير مقروء</span>
                                </span>
                            @endif
                        </div>

                        <div class="border rounded p-3 bg-light">
                            <div class="fw-semibold mb-2">محتوى الرسالة</div>
                            <p class="mb-0">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3">إجراءات</h6>
                        <div class="d-flex flex-wrap gap-2">
                            @if (!$contact->is_read)
                                <form action="{{ route('dashboard.contacts.markAsRead', $contact->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success btn-sm d-inline-flex align-items-center gap-2">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                        <span>تحديد كمقروء</span>
                                    </button>
                                </form>
                            @endif

                            <form action="{{ route('dashboard.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm d-inline-flex align-items-center gap-2" onclick="return confirm('هل أنت متأكد من حذف هذه الرسالة؟')">
                                    <i class="fa-solid fa-trash"></i>
                                    <span>حذف الرسالة</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
