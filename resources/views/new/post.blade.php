@extends('layout.master') {{-- Layout عام يستخدم Tailwind --}}

@section('content')
    <div class="max-w-6xl mx-auto p-6">

        {{-- Hero Section --}}
        <div class="relative bg-gray-100 rounded-lg overflow-hidden shadow mb-8">
            @if ($post->image)
                <img src="{{ asset('public/' . $post->image) }}" class="w-full h-[500px] object-cover" alt="{{ $post->title }}">
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end items-start text-white p-6 gap-3">
                <h1 class="text-4xl font-bold bg-black/40 px-2 py-1 rounded">{{ $post->title }}</h1>
                <div class="flex flex-wrap items-center gap-3 text-sm">
                    <span class="inline-flex items-center gap-2 bg-black/40 rounded px-3 py-1">
                        <i class="fa-solid fa-user"></i>
                        <span>{{ $post->name }}</span>
                    </span>
                    <span class="inline-flex items-center gap-2 bg-black/40 rounded px-3 py-1">
                        <i class="fa-solid fa-envelope"></i>
                        <span>{{ $post->email }}</span>
                    </span>
                    @if ($post->created_at)
                        <span class="inline-flex items-center gap-2 bg-black/40 rounded px-3 py-1">
                            <i class="fa-regular fa-calendar"></i>
                            <span>{{ $post->created_at->format('Y/m/d') }}</span>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        {{-- Main Content Section --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Left/Main Article --}}
            <div class="md:col-span-2 space-y-4">
                <div class="bg-white rounded-lg shadow p-6 prose max-w-none">
                    {!! $post->content !!}
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-3 text-slate-800">بيانات المقال</h3>
                    <div class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-[var(--second-color)]"></i>
                            <span>{{ $post->name }}</span>
                        </div>
                        <div class="flex items-center gap-2 break-all">
                            <i class="fa-solid fa-envelope text-[var(--second-color)]"></i>
                            <span>{{ $post->email }}</span>
                        </div>
                        @if ($post->created_at)
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[var(--second-color)]"></i>
                                <span>{{ $post->created_at->format('Y/m/d H:i') }}</span>
                            </div>
                        @endif
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-[var(--second-color)]"></i>
                            <span>{{ $post->actived_at ? 'مفعل' : 'غير مفعل' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Sidebar / Services --}}
               <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 text-blue-700">الخدمات التابعة</h3>
                    @if ($post->services->count())
                        <ul class="space-y-2">
                            @foreach ($post->services as $service)
                                <li>
                                    <a href="{{ route('service.show', $service->id) }}"
                                        class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg text-gray-700 hover:text-blue-800 transition">
                                        {{ $service->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500 text-sm">لا توجد خدمات مرتبطة بهذه المقالة.</p>
                    @endif
                </div>
        </div>
    </div>
@endsection
