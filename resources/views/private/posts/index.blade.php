@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <p class="text-muted small mb-1">إدارة المحتوى</p>
                <h2 class="fw-bold mb-0">المقالات</h2>
            </div>
            <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-plus"></i>
                <span>أضف مقالة جديدة</span>
            </a>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <p class="text-muted mb-1 small">إجمالي المقالات (هذه الصفحة)</p>
                        <h4 class="mb-0 fw-bold">{{ $posts->count() }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @php
                    $activeCount = $posts->filter(fn($p) => $p->actived_at)->count();
                @endphp
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <p class="text-muted mb-1 small">مفعلة</p>
                        <h4 class="mb-0 fw-bold text-success">{{ $activeCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <p class="text-muted mb-1 small">غير مفعلة</p>
                        <h4 class="mb-0 fw-bold text-danger">{{ $posts->count() - $activeCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="mb-3">
                    @include('private.parts.search-form')
                </div>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>العنوان</th>
                                <th>الكاتب</th>
                                <th>البريد الإلكتروني</th>
                                <th>الخدمات المرتبطة</th>
                                <th>تاريخ الإنشاء</th>
                                <th class="text-center">الحالة</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td class="fw-semibold">{{ Str::limit($post->title, 60) }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td class="text-muted small">{{ $post->email }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-1">
                                            @forelse ($post->services as $service)
                                                <span class="badge bg-light text-dark border">{{ Str::limit($service->title, 16) }}</span>
                                            @empty
                                                <span class="text-muted small">لا توجد خدمات مرتبطة</span>
                                            @endforelse
                                        </div>
                                    </td>
                                    <td class="text-muted small">{{ optional($post->created_at)->format('Y/m/d') }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
                                            @if ($post->actived_at)
                                                <span class="badge bg-success px-3 py-2 d-inline-flex align-items-center gap-1">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <span>فعال</span>
                                                </span>
                                                <a href="{{ route('dashboard.posts.toggle-active', ['post' => $post->id]) }}"
                                                    class="btn btn-outline-danger btn-sm">إلغاء التفعيل</a>
                                            @else
                                                <span class="badge bg-secondary px-3 py-2 d-inline-flex align-items-center gap-1">
                                                    <i class="fa-solid fa-circle-xmark"></i>
                                                    <span>غير فعال</span>
                                                </span>
                                                <a href="{{ route('dashboard.posts.toggle-active', ['post' => $post->id]) }}"
                                                    class="btn btn-outline-success btn-sm">تفعيل المقال</a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-wrap gap-2">
                                            <a href="{{ route('dashboard.posts.show', $post) }}"
                                                class="btn btn-outline-info btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-eye"></i><span>عرض</span>
                                            </a>
                                            <a href="{{ route('dashboard.posts.edit', $post) }}"
                                                class="btn btn-outline-warning btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-pen-to-square"></i><span>تعديل</span>
                                            </a>
                                            <form action="{{ route('dashboard.posts.destroy', $post) }}" method="POST"
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
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">لا توجد مقالات حالياً.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="text-muted small">
                        @if (method_exists($posts, 'firstItem'))
                            عرض {{ $posts->firstItem() }} - {{ $posts->lastItem() }} من {{ $posts->total() }}
                        @endif
                    </div>
                    <div>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
