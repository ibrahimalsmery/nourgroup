@php
    $numbers = [
        [
            'color' => 'bg-danger',
            'url' => route('dashboard.orders.research.client'),
            'title' => 'طلبات الدرسات والابحاث (افراد)',
            'number' => $research_client_number,
        ],
        [
            'color' => 'bg-success',
            'url' => route('dashboard.orders.research.company'),
            'title' => 'طلبات الدرسات والابحاث (شركات)',
            'number' => $research_company_number,
        ],
        [
            'color' => 'bg-primary',
            'url' => route('dashboard.orders.traning'),
            'title' => 'طلبات التدريب',
            'number' => $traning_number,
        ],
        [
            'color' => 'bg-warning',
            'url' => route('dashboard.orders.bs-dev'),
            'title' => 'طلبات تطوير المشاريع',
            'number' => $bs_dev_number,
        ],
        [
            'color' => 'bg-info',
            'url' => route('dashboard.orders.elearning'),
            'title' => 'طلبات الاستثمار في التعليم',
            'number' => $elearning_number,
        ],
        [
            'color' => 'bg-danger',
            'url' => route('dashboard.orders.staffing.client'),
            'title' => 'طلبات التوظيف (افراد)',
            'number' => $staffing_client_number,
        ],
        [
            'color' => 'bg-success',
            'url' => route('dashboard.orders.staffing.company'),
            'title' => 'طلبات التوظيف (الشركات)',
            'number' => $staffing_company_number,
        ],
    ];
@endphp
@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <p class="text-muted small mb-1">إدارة الطلبات</p>
                <h2 class="fw-bold mb-0">لوحة الطلبات</h2>
            </div>
        </div>

        <div class="row g-3">
            @foreach ($numbers as $n)
                <div class="col-md-4 col-xl-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <p class="text-muted small mb-1">{{ $n['title'] }}</p>
                                    <h4 class="fw-bold d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-layer-group text-primary"></i>
                                        <span>{{ $n['number'] }}</span>
                                    </h4>
                                </div>
                                <span class="badge {{ $n['color'] }} text-white">{{ $n['number'] }}</span>
                            </div>
                            <a href="{{ $n['url'] }}" class="btn btn-outline-primary btn-sm mt-3 d-inline-flex align-items-center gap-2">
                                <i class="fa-solid fa-eye"></i>
                                <span>عرض الطلبات</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
