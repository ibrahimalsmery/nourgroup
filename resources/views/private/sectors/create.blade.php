@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة القطاعات</p>
                <h2 class="fw-bold mb-0">{{ isset($sector) ? 'تعديل القطاع' : 'إضافة قطاع جديدة' }}</h2>
            </div>
            <a href="{{ route('dashboard.sectors.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ isset($sector) ? route('dashboard.sectors.update', $sector) : route('dashboard.sectors.store') }}"
                    method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @if (isset($sector))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label class="form-label fw-semibold">الاسم</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $sector->name ?? '') }}"
                            required placeholder="اسم القطاع">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-check"></i>
                            <span>{{ isset($sector) ? 'تحديث القطاع' : 'حفظ القطاع' }}</span>
                        </button>
                        <a href="{{ route('dashboard.sectors.index') }}" class="btn btn-outline-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
