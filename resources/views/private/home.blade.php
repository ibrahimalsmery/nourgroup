@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <p class="text-muted small mb-1">مرحبا بك في لوحة التحكم</p>
                <h2 class="fw-bold mb-0">نظرة سريعة</h2>
            </div>
        </div>

        <div class="row g-3">
            <!-- الرسائل غير المقروءة -->
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-danger">الرسائل غير المقروءة</span>
                            <i class="fa-solid fa-square-envelope text-danger fs-4"></i>
                        </div>
                        <h4 class="fw-bold">{{ \App\Models\Contact::where('is_read', null)->count() }}</h4>
                        <a href="{{ route('dashboard.contacts.index') }}" class="btn btn-outline-danger btn-sm mt-3 d-inline-flex align-items-center gap-1">
                            <i class="fa-solid fa-eye"></i><span>عرض الرسائل</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- الخبراء -->
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-primary">الخبراء</span>
                            <i class="fa-solid fa-users text-primary fs-4"></i>
                        </div>
                        <h4 class="fw-bold">{{ \App\Models\Expert::count() }}</h4>
                        <a href="{{ route('dashboard.experts.index') }}" class="btn btn-outline-primary btn-sm mt-3 d-inline-flex align-items-center gap-1">
                            <i class="fa-solid fa-eye"></i><span>عرض الخبراء</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- الخدمات -->
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-warning text-dark">الخدمات</span>
                            <i class="fa-solid fa-gears text-warning fs-4"></i>
                        </div>
                        <h4 class="fw-bold">{{ \App\Models\Service::count() }}</h4>
                        <a href="{{ route('dashboard.services.index') }}" class="btn btn-outline-warning btn-sm mt-3 d-inline-flex align-items-center gap-1">
                            <i class="fa-solid fa-eye"></i><span>عرض الخدمات</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- المقالات -->
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-success">المقالات</span>
                            <i class="fa-solid fa-file-lines text-success fs-4"></i>
                        </div>
                        <h4 class="fw-bold">{{ \App\Models\Post::count() }}</h4>
                        <a href="{{ route('dashboard.posts.index') }}" class="btn btn-outline-success btn-sm mt-3 d-inline-flex align-items-center gap-1">
                            <i class="fa-solid fa-eye"></i><span>عرض المقالات</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
