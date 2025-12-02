@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة المحتوى</p>
                <h2 class="fw-bold mb-0">الخدمات</h2>
            </div>
            <a href="{{ route('dashboard.services.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-plus"></i>
                <span>أضف خدمة جديدة</span>
            </a>
        </div>
        <div class="mb-3">
            @include('private.parts.search-form')
        </div>
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>الصورة</th>
                                <th>العنوان</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>
                                        @if ($service->getImageUrl())
                                            <img src="{{ $service->getImageUrl() }}" alt="صورة الخدمة"
                                                style="width: 120px; height: 120px; object-fit: cover;" class="rounded border">
                                        @else
                                            <span class="text-muted small">لا توجد صورة</span>
                                        @endif
                                    </td>
                                    <td class="fw-semibold">{{ $service->title }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-wrap gap-2">
                                            <a href="{{ route('dashboard.services.show', $service) }}"
                                                class="btn btn-outline-info btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-eye"></i><span>عرض</span>
                                            </a>
                                            <a href="{{ route('dashboard.services.edit', $service) }}"
                                                class="btn btn-outline-warning btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-pen-to-square"></i><span>تعديل</span>
                                            </a>
                                            <form action="{{ route('dashboard.services.destroy', $service) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger btn-sm d-inline-flex align-items-center gap-1"
                                                    onclick="return confirm('هل أنت متأكد من حذف هذه الخدمة؟')">
                                                    <i class="fa-solid fa-trash"></i><span>حذف</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="text-muted small">
                @if (method_exists($services, 'firstItem'))
                    عرض {{ $services->firstItem() }} - {{ $services->lastItem() }} من {{ $services->total() }}
                @endif
            </div>
            <div>
                {{ $services->links() }}
            </div>
        </div>
    </div>
@endsection
