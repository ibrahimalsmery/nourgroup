@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة الوظائف</p>
                <h2 class="fw-bold mb-0">إعلانات التوظيف</h2>
            </div>
            <a href="{{ route('dashboard.jobs.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-plus"></i>
                <span>إنشاء إعلان توظيف</span>
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
                            <th>العنوان</th>
                            <th>الرابط</th>
                            <th class="text-center">الحالة</th>
                            <th class="text-center">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            <tr>
                                <td class="fw-semibold">{{ $job->title }}</td>
                                <td class="text-muted small">{{ $job->url }}</td>
                                <td class="text-center">

                                    @if ($job->actived_at)
                                        <span class="badge bg-success px-3 py-2 d-inline-flex align-items-center gap-1">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span>فعال</span>
                                        </span>
                                        <a href="{{ route('dashboard.jobs.active', $job) }}" class="btn btn-outline-danger btn-sm ms-2">
                                            إلغاء التفعيل
                                        </a>
                                    @else
                                        <span class="badge bg-secondary px-3 py-2 d-inline-flex align-items-center gap-1">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                            <span>غير فعال</span>
                                        </span>
                                        <a href="{{ route('dashboard.jobs.active', $job) }}" class="btn btn-outline-success btn-sm ms-2">
                                            تفعيل
                                        </a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                        <a href="{{ route('dashboard.jobs.edit', $job) }}" class="btn btn-outline-warning btn-sm d-inline-flex align-items-center gap-1">
                                            <i class="fa-solid fa-pen-to-square"></i><span>تعديل</span>
                                        </a>
                                        <form action="{{ route('dashboard.jobs.destroy', $job) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm d-inline-flex align-items-center gap-1" onclick="return confirm('هل أنت متأكد؟')">
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
                @if (method_exists($jobs, 'firstItem'))
                    عرض {{ $jobs->firstItem() }} - {{ $jobs->lastItem() }} من {{ $jobs->total() }}
                @endif
            </div>
            <div>
                {{ $jobs->links() }}
            </div>
        </div>

    </div>
@endsection
