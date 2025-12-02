@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة الطلبات</p>
                <h2 class="fw-bold mb-0">طلبات تطوير الأعمال</h2>
            </div>
            <a href="{{ route('dashboard.orders.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
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
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>رقم الجوال</th>
                                <th>اسم المؤسسة</th>
                                <th>القطاع</th>
                                <th>نوع الخدمة</th>
                                <th>الرسالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bs_orders as $client)
                                <tr>
                                    <td class="fw-semibold">{{ $client->name }}</td>
                                    <td class="text-muted small">{{ $client->email }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->company }}</td>
                                    <td>{{ $client->sector }}</td>
                                    <td>{{ $client->service }}</td>
                                    <td>{{ Str::limit($client->message, 80) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="text-muted small">
                @if (method_exists($bs_orders, 'firstItem'))
                    عرض {{ $bs_orders->firstItem() }} - {{ $bs_orders->lastItem() }} من {{ $bs_orders->total() }}
                @endif
            </div>
            <div>
                {{ $bs_orders->links() }}
            </div>
        </div>

    </div>
@endsection
