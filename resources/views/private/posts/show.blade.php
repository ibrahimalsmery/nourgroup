@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">تفاصيل المقال</p>
                <h2 class="fw-bold mb-0">{{ $post->title }}</h2>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('dashboard.posts.edit', $post) }}"
                    class="btn btn-primary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>تعديل</span>
                </a>
                <a href="{{ route('dashboard.posts.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span>رجوع</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    @if ($post->image)
                        <img src="{{ asset('public/' . $post->image) }}" class="card-img-top" style="max-height: 420px; object-fit: cover"
                            alt="{{ $post->title }}">
                    @endif
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3 text-muted small">
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-user"></i>
                                <strong>{{ $post->name }}</strong>
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-envelope"></i>
                                <span>{{ $post->email }}</span>
                            </span>
                            @if ($post->created_at)
                                <span class="d-inline-flex align-items-center gap-1">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>{{ $post->created_at->format('Y/m/d') }}</span>
                                </span>
                            @endif
                            @if ($post->actived_at)
                                <span class="badge bg-success d-inline-flex align-items-center gap-1">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>فعال</span>
                                </span>
                            @else
                                <span class="badge bg-secondary d-inline-flex align-items-center gap-1">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    <span>غير فعال</span>
                                </span>
                            @endif
                        </div>

                        <div class="card-text lh-lg">{!! $post->content !!}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">الخدمات المرتبطة</h5>
                        @if ($post->services && $post->services->count())
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($post->services as $service)
                                <a href="{{route('service.show', $service)}}"  class="text-decoration-none">
                                    <span class="badge bg-light text-dark border">{{ $service->title }}</span>
                                </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-muted mb-0">لا توجد خدمات مرتبطة.</p>
                        @endif
                    </div>
                </div>

                @if ($post->tags && count($post->tags))
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">الوسوم</h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($post->tags as $tag)
                                    <span class="badge bg-primary">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
