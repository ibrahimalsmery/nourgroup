@extends('private.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <p class="text-muted small mb-1">إدارة القطاعات</p>
                <h2 class="fw-bold mb-0">القطاعات</h2>
            </div>
            <a href="{{ route('dashboard.sectors.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2">أضف قطاع جديد</a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>الاسم</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sectors as $sector)
                                <tr>
                                    <td class="fw-semibold">{{ $sector->name }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-wrap gap-2">
                                            <a href="{{ route('dashboard.sectors.edit', $sector) }}" class="btn btn-outline-warning btn-sm d-inline-flex align-items-center gap-1">
                                                <i class="fa-solid fa-pen-to-square"></i><span>تعديل</span>
                                            </a>
                                            <form action="{{ route('dashboard.sectors.destroy', $sector) }}" method="POST" class="d-inline">
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
    </div>
@endsection
