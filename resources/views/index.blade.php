@extends('layout.master')
@section('content')
    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-slate-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-l from-slate-900/90 via-slate-900/70 to-slate-900/90"></div>
            <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image:url('{{ asset('/public/Business-Consulting-Services-50-50.png') }}')"></div>
        </div>
        <div class="relative container mx-auto px-4 py-20 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-2 items-center">
                <div class="space-y-6 text-center lg:text-right">
                    <p class="text-sm tracking-[0.3em] uppercase text-[var(--second-color)]">بيت الخبرة المتكامل</p>
                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight">
                        حلول متكاملة تعزز أداء أعمالك وتدعم نموك
                    </h1>
                    <p class="text-lg text-slate-200">
                        شركاؤك في التدريب، الدراسات، الاستشارات، التعليم الرقمي، التوظيف، وتطوير الأعمال مع فريق متخصص وخبرات
                        قطاعية متنوعة.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-end">
                        <a href="{{ url('contact') }}"
                            class="bg-[var(--second-color)] hover:bg-[var(--second-color)]/90 text-white px-6 py-3 rounded-lg transition font-semibold">
                            تواصل معنا الآن
                        </a>
                        <a href="#services"
                            class="border border-white/30 hover:border-[var(--second-color)] hover:text-[var(--second-color)] text-white px-6 py-3 rounded-lg transition font-semibold">
                            استكشف خدماتنا
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-end text-sm text-slate-200">
                        <span class="flex items-center gap-2 bg-white/5 px-3 py-2 rounded-full border border-white/10">خبراء
                            قطاعيون</span>
                        <span class="flex items-center gap-2 bg-white/5 px-3 py-2 rounded-full border border-white/10">حلول
                            قابلة للتنفيذ</span>
                        <span class="flex items-center gap-2 bg-white/5 px-3 py-2 rounded-full border border-white/10">دعم
                            مستمر</span>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div
                        class="aspect-[4/3] rounded-2xl overflow-hidden border border-white/10 shadow-2xl shadow-[var(--second-color)]/30 bg-cover bg-center" style="background-image:url('{{ asset('/public/Business-Consulting-Services-50-50.png') }}')">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section (loaded from DB) --}}
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">خدماتنا</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">منهج متكامل يصنع الفرق</h2>
                <p class="mt-3 text-slate-600">
                    نقدم حزمة متكاملة من الخدمات لدعم دورة حياة الأعمال من بناء القدرات وحتى التوسع والنمو.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @forelse ($services as $service)
                    <a href="{{ route('service.show', $service->id) }}"
                        class="group p-6 rounded-2xl border border-slate-100 shadow-sm hover:-translate-y-1 transition bg-white flex flex-col gap-4">
                        <div class="flex items-start justify-between gap-4">
                            <div class="w-12 h-12 rounded-full bg-[var(--second-color)]/10 text-[var(--second-color)] flex items-center justify-center font-bold">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </div>
                            @php
                                $image = $service->getImageUrl();
                            @endphp
                            @if ($image)
                                <div class="w-16 h-16 rounded-xl overflow-hidden border border-slate-100 shadow-sm">
                                    <img src="{{ $image }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
                                </div>
                            @endif
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-slate-900 group-hover:text-[var(--second-color)] transition">
                                {{ $service->title }}
                            </h3>
                            @if ($service->subtitle)
                                <p class="text-sm text-[var(--second-color)]">{{ $service->subtitle }}</p>
                            @endif
                            @if ($service->description)
                                <p class="text-slate-600 leading-relaxed line-clamp-2">
                                    {{ $service->description }}
                                </p>
                            @endif
                        </div>
                        <span class="text-[var(--second-color)] font-semibold flex items-center gap-2">
                            تعرف على المزيد
                            <span class="transition group-hover:translate-x-1">→</span>
                        </span>
                    </a>
                @empty
                    <div class="md:col-span-2 xl:col-span-3 text-center text-slate-500">
                        لا توجد خدمات متاحة حالياً.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Services Brief --}}
    <section class="py-14 bg-slate-50 border-t border-slate-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center space-y-4">
                <h3 class="text-2xl font-bold text-slate-900">لماذا تختار حلولنا؟</h3>
                <p class="text-lg text-slate-700 leading-relaxed">
                    نعمل بفريق متعدد الخبرات لنقدم خدمات مترابطة تجعل التحول أسهل والنتائج أسرع. نبدأ من فهم أهدافك، ثم
                    نبني خارطة طريق واضحة، ونرافقك بالتنفيذ والمتابعة حتى يتحقق الأثر المنشود.
                </p>
                <div class="flex flex-wrap gap-3 justify-center text-sm text-slate-600">
                    <span class="px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200">منهج تشاركي</span>
                    <span class="px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200">حلول قابلة للقياس</span>
                    <span class="px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200">دعم ما بعد التنفيذ</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Approach --}}
    <section class="py-16 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-grid-white"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-10">
                <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">منهجية العمل</p>
                <h2 class="text-3xl lg:text-4xl font-bold">رحلة متكاملة من الفكرة إلى التنفيذ</h2>
                <p class="mt-3 text-slate-200 max-w-3xl mx-auto">نعمل معك عبر مراحل واضحة تضمن فهم الاحتياج، تصميم الحل، التنفيذ، والمتابعة لضمان الأثر.</p>
            </div>
            <div class="grid gap-6 md:grid-cols-4">
                @php
                    $steps = [
                        ['icon' => 'fa-lightbulb', 'title' => 'اكتشاف الاحتياج', 'desc' => 'تحليل الوضع الحالي وتحديد الأهداف بوضوح.'],
                        ['icon' => 'fa-map', 'title' => 'تصميم الحل', 'desc' => 'بناء خارطة طريق قابلة للتنفيذ بموارد محددة.'],
                        ['icon' => 'fa-rocket', 'title' => 'التنفيذ', 'desc' => 'إطلاق الحلول وتقديم التدريب والدعم اللازم.'],
                        ['icon' => 'fa-chart-line', 'title' => 'التحسين المستمر', 'desc' => 'متابعة الأداء وضبط المسار لتحقيق النتائج.'],
                    ];
                @endphp
                @foreach ($steps as $step)
                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-[var(--second-color)]/60 transition">
                        <div class="w-12 h-12 rounded-full bg-[var(--second-color)]/20 text-[var(--second-color)] flex items-center justify-center text-xl mb-3">
                            <i class="fa-solid {{ $step['icon'] }}"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-white">{{ $step['title'] }}</h3>
                        <p class="text-slate-200 leading-relaxed text-sm">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Latest Active Posts --}}
    <section class="py-16 bg-white border-t border-slate-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-10">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-[var(--second-color)]">المدونة</p>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">أحدث المقالات </h2>
                    <p class="mt-2 text-slate-600">اطلع على أهم المواضيع والأفكار التي نشاركها حول التدريب، الاستشارات، والتعليم الرقمي.</p>
                </div>
                <a href="{{ route('dashboard.posts.index') }}" class="inline-flex items-center gap-2 text-[var(--second-color)] font-semibold border border-[var(--second-color)]/40 px-4 py-2 rounded-lg hover:bg-[var(--second-color)] hover:text-white transition">
                    عرض كل المقالات
                    <span class="transition group-hover:translate-x-1">→</span>
                </a>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post)
                    <article class="group border border-slate-100 rounded-2xl overflow-hidden shadow-sm hover:-translate-y-1 transition bg-white h-full flex flex-col">
                        @if ($post->image)
                            <a href="{{ route('posts.public.show', $post) }}" class="relative h-48 overflow-hidden block">
                                <img src="{{ asset('public/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
                            </a>
                        @endif
                        <div class="p-5 flex flex-col gap-3 flex-grow">
                            <div class="flex items-center gap-2 text-xs text-slate-500">
                                <span class="inline-flex items-center gap-1">
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ optional($post->created_at)->format('Y/m/d') }}
                                </span>
                                <!-- @if ($post->actived_at)
                                    <span class="inline-flex items-center gap-1 text-green-600">
                                        <i class="fa-solid fa-circle-check"></i> فعال
                                    </span>
                                @endif -->
                            </div>
                            <h3 class="text-xl font-semibold">
                                <a href="{{ route('posts.public.show', $post) }}" class="text-slate-900 group-hover:text-[var(--second-color)] transition">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <div class="flex items-center gap-2 text-xs text-slate-500">
                                <i class="fa-solid fa-user"></i>
                                <span>{{ $post->name }}</span>
                            </div>
                            <p class="text-slate-600 leading-relaxed line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}
                            </p>
                            @if ($post->services && $post->services->count())
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($post->services as $service)
                                    <a href="{{route('service.show',['id' => $service])}}">
                                        <span class="badge bg-slate-100 text-slate-700 border border-slate-200 rounded-full px-3 py-1 text-xs">
                                            {{ $service->title }}
                                        </span>
                                    </a>
                                    @endforeach
                                </div>
                            @endif
                            <div class="mt-auto flex items-center gap-2 text-[var(--second-color)] font-semibold">
                                <a href="{{ route('posts.public.show', $post) }}" class="flex items-center gap-2">
                                    اقرأ المزيد
                                    <span class="transition group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center text-slate-500">
                        لا توجد مقالات مفعّلة حالياً.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-14 bg-[var(--second-color)] text-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div>
                    <h3 class="text-3xl font-bold mb-2">لنبدأ مشروعك القادم</h3>
                    <p class="text-white/90 leading-relaxed">تواصل معنا لنبني معاً خطة واضحة تحقق أهدافك التدريبية أو الاستشارية أو الرقمية.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">
                    <a href="{{ url('contact') }}" class="bg-white text-[var(--second-color)] px-6 py-3 rounded-lg font-semibold shadow-sm hover:shadow transition">حجز استشارة</a>
                    <a href="#services" class="border border-white/60 text-white px-6 py-3 rounded-lg font-semibold hover:bg-white/10 transition">استعراض الخدمات</a>
                </div>
            </div>
        </div>
    </section>
@endsection
