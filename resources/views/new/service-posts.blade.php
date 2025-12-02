@extends('layout.master')
@section('content')
    <div class="max-w-6xl mx-auto px-4 py-12 space-y-10">
        <header class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">خدمة</p>
                <h1 class="text-3xl font-bold text-slate-900">مقالات {{ $service->title }}</h1>
                <p class="text-slate-600 mt-1">عرض جميع المقالات المرتبطة بهذه الخدمة.</p>
            </div>
            <a href="{{ route('posts.public.create') }}"
                class="inline-flex items-center gap-2 bg-[var(--second-color)] text-white px-4 py-3 rounded-lg font-semibold hover:bg-[var(--second-color)]/90 transition">
                <i class="fa-solid fa-plus"></i>
                <span>أضف مقالة جديدة</span>
            </a>
        </header>

        @if ($service->posts->count())
            <div class="grid gap-6 md:grid-cols-2">
                @foreach ($service->posts as $post)
                    <article class="border border-slate-100 rounded-2xl overflow-hidden shadow-sm bg-white flex flex-col">
                        @if ($post->image)
                            <a href="{{ route('posts.public.show', $post) }}" class="relative h-48 block overflow-hidden">
                                <img src="{{ asset('public/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/35 via-black/10 to-transparent"></div>
                            </a>
                        @endif
                        <div class="p-5 flex flex-col gap-3 flex-grow">
                            <div class="flex items-center gap-2 text-xs text-slate-500">
                                <i class="fa-regular fa-calendar"></i>
                                <span>{{ optional($post->created_at)->format('Y/m/d') }}</span>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">
                                <a href="{{ route('posts.public.show', $post) }}" class="hover:text-[var(--second-color)]">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-slate-600 leading-relaxed line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}
                            </p>
                            <div class="mt-auto flex items-center gap-2 text-[var(--second-color)] font-semibold">
                                <a href="{{ route('posts.public.show', $post) }}" class="inline-flex items-center gap-2">
                                    اقرأ المزيد
                                    <span class="transition group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="border border-dashed border-slate-200 rounded-2xl p-8 bg-white text-center text-slate-500">
                لا توجد مقالات مرتبطة بهذه الخدمة حتى الآن.
            </div>
        @endif
    </div>
@endsection
