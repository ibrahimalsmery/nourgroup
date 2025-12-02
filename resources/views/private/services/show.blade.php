@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <p class="text-muted small mb-1">تفاصيل الخدمة</p>
                <h2 class="fw-bold mb-0">{{ $service->title }}</h2>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('dashboard.services.edit', $service) }}" class="btn btn-primary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>تعديل</span>
                </a>
                <a href="{{ route('dashboard.services.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span>عودة</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    @if($service->image)
                        <img src="{{ $service->getImageUrl() }}" alt="صورة الخدمة" class="card-img-top" style="max-height: 420px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge bg-light text-dark border">المعرف: {{ $service->slug }}</span>
                        </div>
                        <h5 class="fw-bold mb-2">{{ $service->subtitle }}</h5>
                        <p class="text-muted">{{ $service->description }}</p>

                        @if ($service->links && is_array($service->links) && count($service->links))
                            <div class="mt-4">
                                <h6 class="fw-bold mb-2">روابط ذات صلة</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($service->links as $key => $value)
                                        <a href="{{ $value }}" target="_blank" class="badge bg-primary text-white text-decoration-none px-3 py-2">
                                            {{ $key }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                @if ($service->page_sections && count($service->page_sections))
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">محتوى الصفحة</h6>
                            <div class="d-flex flex-column gap-3">
                                @foreach ($service->page_sections as $section)
                                    <div class="p-3 rounded border bg-light">
                                        <div class="fw-semibold mb-1">{{ $section['title'] ?? '' }}</div>
                                        <p class="text-muted mb-0">{{ $section['content'] ?? '' }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
