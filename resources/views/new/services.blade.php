@php
    $services = App\Models\Service::orderBy('id')->get();
@endphp
@extends('layout.master')


@section('content')
    <main class="max-w-6xl mx-auto px-4 py-12">
        <section id="services" class="mb-12">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-6">
                <div>
                    <p class="text-sm text-[var(--muted)] mb-1">خدماتنا</p>
                    <h1 class="text-3xl md:text-4xl font-bold text-[var(--text-color)]">حلول متكاملة تدعم أعمالك</h1>
                    <p class="text-[var(--muted)] mt-2 max-w-3xl leading-relaxed">استكشف باقة خدماتنا التي تغطي التدريب، الاستشارات، التطوير، التعليم الرقمي، والتوظيف، مع خبرة عملية وفريق متخصص.</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[var(--card-bg)] text-[var(--text-color)] shadow-sm">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>{{ $services->count() }} خدمة</span>
                    </span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    <a href="{{ route('service.show', $service->id) }}" class="group block h-full">
                        <div class="relative h-80 rounded-2xl overflow-hidden shadow-md">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('{{ $service->getImageUrl() }}')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute inset-0 p-6 flex flex-col justify-end">
                                <h3 class="text-2xl font-bold text-white mb-3">{{ $service->title }}</h3>
                                <p class="text-sm text-gray-100/90 leading-relaxed line-clamp-3">{{ \Illuminate\Support\Str::limit($service->description, 160) }}</p>
                                <div class="mt-4 flex items-center gap-2 text-white font-semibold">
                                    <span class="text-sm">التفاصيل</span>
                                    <i class="fa-solid fa-arrow-left group-hover:translate-x-1 transition-transform"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </main>
@endsection
