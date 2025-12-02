@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <div class="min-h-screen bg-gray-50 mb-10">

        {{-- القسم الأول: البانر (Hero Section) --}}
        <section class="text-center bg-gradient-to-b from-blue-100 to-white py-12 mb-10 shadow-sm">
            <div class="flex flex-col items-center">
                <img src="{{ asset($expert->image) }}" alt="{{ $expert->name }}"
                    class="w-40 h-40 rounded-full object-cover shadow-lg border-4 border-white mb-4">

                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $expert->name }}</h1>
                <p class="text-lg text-gray-500 mb-4">{{ $expert->title }}</p>

                {{-- روابط السوشيال ميديا --}}
                {{-- روابط السوشيال ميديا --}}
                <div class="flex space-x-4 rtl:space-x">
                    @if ($expert->linkedin)
                        <a href="{{ $expert->linkedin }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    @endif
                    @if ($expert->x)
                        <a href="{{ $expert->x }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    @endif
                    @if ($expert->facebook)
                        <a href="{{ $expert->facebook }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-facebook"></i>
                        </a>
                    @endif
                    @if ($expert->tiktok)
                        <a href="{{ $expert->tiktok }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    @endif
                    @if ($expert->youtube)
                        <a href="{{ $expert->youtube }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-youtube"></i>
                        </a>
                    @endif
                    @if ($expert->instagram)
                        <a href="{{ $expert->instagram }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-instagram"></i>
                        </a>
                    @endif
                    @if ($expert->website)
                        <a href="{{ $expert->website }}" target="_blank"
                            class="text-gray-600 hover:text-blue-600 text-2xl transition">
                            <i class="bi bi-globe"></i>
                        </a>
                    @endif

                </div>
            </div>
        </section>

        {{-- القسم الثاني: المقال والخدمات --}}
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- محتوى المقال --}}
            <div class="md:col-span-2">
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800 border-b pb-2">عن الخبير</h2>
                    <div class="prose prose-lg text-gray-600 leading-relaxed">


                        <h4 class="card-title">{{ $expert->name }}</h4>
                        <p class="card-text"><strong>اللقب / المسمى الوظيفي:</strong> {{ $expert->title }}</p>
                        <p class="card-text"><strong>التخصص:</strong> {{ $expert->specialization }}</p>
                        <p class="card-text"><strong>المنصب الحالي:</strong> {{ $expert->current_position }}</p>
                        <p class="card-text"><strong>الخبرة:</strong> {{ $expert->experience }}</p>
                        <p class="card-text"><strong>اقتباس / شعار:</strong> "{{ $expert->quote }}"</p>

                        @if ($expert->email)
                            <a class="card-text" href="mailto:{{ $expert->email }}"><strong>البريد الإلكتروني:</strong> {{ $expert->email }}</a>
                        @endif


                        {{-- القوائم --}}
                        @if ($expert->qualifications)
                            <p><strong>المؤهلات العلمية:</strong></p>
                            <ul>
                                @foreach ($expert->qualifications as $q)
                                    <li>{{ $q }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if ($expert->sectors)
                            <p><strong>القطاعات:</strong></p>
                            <ul>
                                @foreach ($expert->sectors as $s)
                                    <li>{{ $s }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if ($expert->achievements)
                            <p><strong>الإنجازات:</strong></p>
                            <ul>
                                @foreach ($expert->achievements as $a)
                                    <li>{{ $a }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @isset($expert->services)
                            <p><strong>الخدمات:</strong></p>
                            <ul>
                                @foreach ($expert->services as $service)
                                    <li>{{ $service->title }}</li>
                                @endforeach
                            </ul>
                        @endisset
                    </div>
                </div>
            </div>

            {{-- قائمة الخدمات --}}
            <aside>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 text-blue-700">الخدمات التابعة</h3>
                    @if ($expert->services->count())
                        <ul class="space-y-2">
                            @foreach ($expert->services as $service)
                                <li>
                                    <a href="{{ route('service.show', $service->id) }}"
                                        class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg text-gray-700 hover:text-blue-800 transition">
                                        {{ $service->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500 text-sm">لا توجد خدمات لهذا الخبير.</p>
                    @endif
                </div>
            </aside>

        </div>

    </div>
@endsection
