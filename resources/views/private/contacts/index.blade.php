@extends('private.layouts.app')

{{-- @section('title', 'إدارة الرسائل') --}}

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <p class="text-muted small mb-1">إدارة الرسائل</p>
                <h2 class="fw-bold mb-0">قائمة الرسائل الواردة</h2>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-success d-inline-flex align-items-center gap-1">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <span>{{ $contacts->where('is_read', true)->count() }} مقروءة</span>
                </span>
                <span class="badge bg-warning text-dark d-inline-flex align-items-center gap-1">
                    <i class="fa-solid fa-envelope"></i>
                    <span>{{ $contacts->where('is_read', false)->count() }} غير مقروءة</span>
                </span>
            </div>
        </div>

        <div class="mb-3">
            @include('private.parts.search-form')
        </div>

        @if ($contacts->count())
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>رقم الهاتف</th>
                                    <th>الرسالة</th>
                                    <th class="text-center">الحالة</th>
                                    <th>تاريخ الإرسال</th>
                                    <th class="text-center">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr class="{{ $contact->is_read ? '' : 'table-warning' }}">
                                        <td>{{ $loop->iteration + ($contacts->currentPage() - 1) * $contacts->perPage() }}</td>
                                        <td class="fw-semibold">{{ $contact->name }}</td>
                                        <td class="text-muted small">{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td title="{{ $contact->message }}">{{ Str::limit($contact->message, 40) }}</td>
                                        <td class="text-center">
                                            @if ($contact->is_read)
                                                <span class="badge bg-success px-3 py-2 d-inline-flex align-items-center gap-1">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <span>مقروء</span>
                                                </span>
                                            @else
                                                <span class="badge bg-warning text-dark px-3 py-2 d-inline-flex align-items-center gap-1">
                                                    <i class="fa-solid fa-circle-exclamation"></i>
                                                    <span>غير مقروء</span>
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-muted small">{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center flex-wrap gap-2">
                                                <a href="{{ route('dashboard.contacts.show', $contact->id) }}"
                                                    class="btn btn-outline-primary btn-sm d-inline-flex align-items-center gap-1">
                                                    <i class="fa-solid fa-eye"></i><span>عرض</span>
                                                </a>
                                                <form action="{{ route('dashboard.contacts.destroy', $contact->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm d-inline-flex align-items-center gap-1"
                                                        onclick="return confirm('هل أنت متأكد من حذف هذه الرسالة؟')">
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

            <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="text-muted small">
                    @if (method_exists($contacts, 'firstItem'))
                        عرض {{ $contacts->firstItem() }} - {{ $contacts->lastItem() }} من {{ $contacts->total() }}
                    @endif
                </div>
                <div>
                    {{ $contacts->links() }}
                </div>
            </div>
        @else
            <div class="alert alert-info">
                لا توجد رسائل بعد.
            </div>
        @endif
    </div>
@endsection
