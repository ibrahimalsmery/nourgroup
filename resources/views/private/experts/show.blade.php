@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">تفاصيل الخبير</p>
                <h2 class="fw-bold mb-0">{{ $expert->name }}</h2>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <a href="{{ route('dashboard.experts.edit', $expert) }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>تعديل</span>
                </a>
                <a href="{{ route('dashboard.experts.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span>عودة</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    @if ($expert->image)
                        <div class="text-center mt-3">
                            <img src="{{ asset($expert->image) }}" alt="صورة الخبير"
                                style="max-width: 240px; height: 240px; object-fit: cover; border-radius: 12px;" class="border">
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-3 text-muted small mb-3">
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-briefcase"></i>
                                <strong>{{ $expert->title }}</strong>
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>{{ $expert->specialization }}</span>
                            </span>
                            <span class="d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-building"></i>
                                <span>{{ $expert->current_position }}</span>
                            </span>
                        </div>

                        <div class="mb-3">
                            <h5 class="fw-bold mb-2">الخبرة</h5>
                            <p class="text-muted">{{ $expert->experience }}</p>
                        </div>

                        @if ($expert->quote)
                            <div class="mb-3 p-3 bg-light rounded border">
                                <span class="text-muted small">اقتباس</span>
                                <div class="fw-semibold">"{{ $expert->quote }}"</div>
                            </div>
                        @endif

                        @if ($expert->email || $expert->linkedin)
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">تواصل</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    @if ($expert->email)
                                        <span class="badge bg-light text-dark border d-inline-flex align-items-center gap-1">
                                            <i class="fa-solid fa-envelope"></i>{{ $expert->email }}
                                        </span>
                                    @endif
                                    @if ($expert->linkedin)
                                        <a class="badge bg-primary text-white text-decoration-none d-inline-flex align-items-center gap-1" href="{{ $expert->linkedin }}" target="_blank">
                                            <i class="fa-brands fa-linkedin"></i>LinkedIn
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                @if ($expert->services->count())
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">الخدمات المرتبطة</h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($expert->services as $service)
                                    <span class="badge bg-light text-dark border">{{ $service->title }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if ($expert->qualifications)
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">المؤهلات العلمية</h6>
                            <ul class="mb-0 ps-3">
                                @foreach ($expert->qualifications as $q)
                                    <li>{{ $q }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if ($expert->sectors)
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">القطاعات</h6>
                            <ul class="mb-0 ps-3">
                                @foreach ($expert->sectors as $s)
                                    <li>{{ $s }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if ($expert->achievements)
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">الإنجازات</h6>
                            <ul class="mb-0 ps-3">
                                @foreach ($expert->achievements as $a)
                                    <li>{{ $a }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
