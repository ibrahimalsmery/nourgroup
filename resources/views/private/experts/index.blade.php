@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة المحتوى</p>
                <h2 class="fw-bold mb-0">الخبراء</h2>
            </div>
            <a href="{{ route('dashboard.experts.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-user-plus"></i>
                <span>أضف خبير جديد</span>
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
                                <th>الاسم</th>
                                <th>اللقب / المسمى الوظيفي</th>
                                <th>التخصص</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($experts as $expert)
                                <tr>
                                    <td>
                                        @if ($expert->image)
                                            <img src="{{ asset($expert->image) }}" alt="صورة الخبير"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                        @else
                                            <span class="text-muted small">لا توجد صورة</span>
                                        @endif
                                    </td>
                                    <td class="fw-semibold">{{ $expert->name }}</td>
                                    <td>{{ $expert->title }}</td>
                                    <td>{{ $expert->specialization }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-wrap gap-2">
                                            <a href="{{ route('dashboard.experts.show', $expert) }}" class="btn btn-outline-info btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-eye"></i><span>عرض</span>
                                            </a>
                                            <a href="{{ route('dashboard.experts.edit', $expert) }}"
                                                class="btn btn-outline-warning btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-pen-to-square"></i><span>تعديل</span>
                                            </a>
                                            <form action="{{ route('dashboard.experts.destroy', $expert) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger btn-sm d-inline-flex align-items-center gap-1"
                                                    onclick="return confirm('هل أنت متأكد؟')">
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
                @if (method_exists($experts, 'firstItem'))
                    عرض {{ $experts->firstItem() }} - {{ $experts->lastItem() }} من {{ $experts->total() }}
                @endif
            </div>
            <div>
                {{ $experts->links() }}
            </div>
        </div>
    </div>
@endsection
