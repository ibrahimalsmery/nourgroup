@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة الطلبات</p>
                <h2 class="fw-bold mb-0">طلبات التوظيف (شركات)</h2>
            </div>
            <a href="{{ route('dashboard.orders.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span>عودة</span>
            </a>
        </div>
                @include('private.parts.search-form')
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">

        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>اسم الشركة</th>
                    <th>المسؤول</th>
                    <th>البريد الالكتروني</th>
                    <th>الجوال</th>
                    <th>القطاع</th>
                    <th>نوع الخدمة</th>
                    <th>الوصف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffing_company_orders as $client)
                    <tr>
                        <td class="fw-semibold">{{ $client->company }}</td>
                        <td>{{ $client->general_manger }}</td>
                        <td class="text-muted small">{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->sector }}</td>
                        <td>{{ $client->service_type }}</td>
                        <td>{{ Str::limit($client->description, 80) }}</td>

                        {{-- <td>
                            <a href="{{ route('dashboard.posts.show', $post) }}" class="btn btn-info btn-sm">عرض</a>
                            <a href="{{ route('dashboard.posts.edit', $post) }}" class="btn btn-warning btn-sm">تعديل</a>
                            <form action="{{ route('dashboard.posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="text-muted small">
                @if (method_exists($staffing_company_orders, 'firstItem'))
                    عرض {{ $staffing_company_orders->firstItem() }} - {{ $staffing_company_orders->lastItem() }} من {{ $staffing_company_orders->total() }}
                @endif
            </div>
            <div>
                {{$staffing_company_orders->links()}}
            </div>
        </div>

    </div>
@endsection
