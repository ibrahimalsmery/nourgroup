@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة الطلبات</p>
                <h2 class="fw-bold mb-0">طلبات التدريب</h2>
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
                                <th>نوع التدريب</th>
                                <th>القطاع</th>
                                <th>الرسالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($traning_orders as $client)
                                <tr>
                                    <td class="fw-semibold">{{ $client->name }}</td>
                                    <td>{{ $client->type }}</td>
                                    <td>{{ $client->sector }}</td>
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
                @if (method_exists($traning_orders, 'firstItem'))
                    عرض {{ $traning_orders->firstItem() }} - {{ $traning_orders->lastItem() }} من {{ $traning_orders->total() }}
                @endif
            </div>
            <div>
                {{ $traning_orders->links() }}
            </div>
        </div>

    </div>
@endsection
