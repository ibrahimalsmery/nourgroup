@extends('layout.master')

@section('content')
    <main class="max-w-6xl mx-auto px-4 py-12 space-y-12">
        <section class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="relative h-72">
                @if ($service->getImageUrl())
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('{{ $service->getImageUrl() }}')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                @else
                    <div class="absolute inset-0 bg-slate-200"></div>
                @endif
                <div class="absolute inset-0 p-8 flex flex-col justify-end text-white gap-3">
                    <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">خدمة</p>
                    <h1 class="text-3xl md:text-4xl font-bold">{{ $service->title }}</h1>
                    @if ($service->subtitle)
                        <p class="text-lg text-white/90">{{ $service->subtitle }}</p>
                    @endif
                </div>
            </div>

            @if ($service->description || (isset($service->page_sections) && count($service->page_sections)))
                <div class="p-8 space-y-10">
                    @if ($service->description)
                        <div class="prose max-w-none text-slate-700">
                            {!! nl2br(e($service->description)) !!}
                        </div>
                    @endif

                    @isset($service->page_sections)
                        <div class="grid gap-8">
                            @foreach ($service->page_sections as $sec)
                                <section class="border border-slate-100 rounded-xl p-5 bg-slate-50">
                                    <h2 class="text-2xl font-semibold mb-3 text-[var(--text-color)]">{{ $sec->title }}</h2>
                                    <p class="text-lg leading-relaxed text-slate-700">{{ $sec->content }}</p>
                                </section>
                            @endforeach
                        </div>
                    @endisset
                </div>
            @endif
        </section>

        <section>
            <div class="flex items-center justify-between mb-6">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">مقالات مرتبطة</p>
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-900">المقالات الخاصة بـ {{ $service->title }}</h2>
                </div>
                <a href="{{ route('posts.public.create') }}" class="text-[var(--second-color)] font-semibold hover:underline">أضف مقالة جديدة</a>
            </div>

            @if ($service_posts && $service_posts->count())
                <div class="grid gap-6 md:grid-cols-2">
                    @foreach ($service_posts as $post)
                        <article class="border border-slate-100 rounded-2xl overflow-hidden shadow-sm bg-white flex flex-col">
                            @if ($post->image)
                                <a href="{{ route('posts.public.show', $post) }}" class="relative h-48 block overflow-hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
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
                                <div class="mt-auto">
                                    <a href="{{ route('posts.public.show', $post) }}" class="text-[var(--second-color)] font-semibold inline-flex items-center gap-2">
                                        اقرأ المزيد
                                        <span class="transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="border border-dashed border-slate-200 rounded-xl p-6 text-center text-slate-500 bg-white">
                    لا توجد مقالات مرتبطة بهذه الخدمة حالياً.
                </div>
            @endif
        </section>
    </main>
@endsection
