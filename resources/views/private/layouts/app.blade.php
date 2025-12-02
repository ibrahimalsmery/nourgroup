@php
    $dashboardLinks = [
        [
            'url' => route('dashboard.index'),
            'active' => request()->routeIs('dashboard.index'),
            'label' => ' ' . 'لوحة التحكم',
            'icon' => 'fa-solid fa-gauge-high',
            'authorized' => true,
        ],
        [
            'url' => route('dashboard.orders.index'),
            'active' => request()->routeIs('dashboard.orders.index'),
            'label' => ' ' . 'الطلبات',
            'icon' => 'fa-solid fa-gears',
            'authorized' => true,
        ],

        [
            'url' => route('dashboard.jobs.index'),
            'active' => request()->routeIs('dashboard.jobs.index'),
            'label' => ' ' . 'اعلانات الوظائف',
            'icon' => 'fa-solid fa-briefcase',
            'authorized' => true,
        ],
        [
            'url' => route('dashboard.contacts.index'),
            'active' => request()->routeIs('dashboard.contacts.index'),
            'label' => ' ' . 'الرسائل',
            'icon' => 'fa-solid fa-square-envelope',
            'authorized' => true,
        ],

        [
            'url' => route('dashboard.services.index'),
            'active' => request()->routeIs('dashboard.services.index'),
            'label' => ' ' . 'الخدمات',
            'icon' => 'fa-solid fa-gears',
            'authorized' => true,
        ],
        // [
        //     'url' => route('dashboard.sectors.index'),
        //     'active' => request()->routeIs('dashboard.sectors.index'),
        //     'label' => ' ' . 'القطاعات',
        //     'icon' => 'fa-solid fa-gears',
        //     'authorized' => true,
        // ],

        [
            'url' => route('dashboard.posts.index'),
            'active' => request()->routeIs('dashboard.posts.index'),
            'label' => ' ' . 'المقالات',
            'icon' => 'fa-solid fa-file-lines',
            'authorized' => true,
        ],
        [
            'url' => route('dashboard.experts.index'),
            'active' => request()->routeIs('dashboard.experts.index'),
            'label' => ' ' . 'الخبراء',
            'icon' => 'fa-solid fa-users',
            'authorized' => true,
        ],
    ];
    $authUser = auth()->user();
    $userInitial = $authUser ? mb_substr($authUser->name ?? 'ا', 0, 1) : '';
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="main-bg">
    <div id="app" class="d-flex">
        <aside class="bg-white border-end shadow-sm d-flex flex-column position-sticky top-0" style="min-width: 260px; max-width: 260px; height: 100vh; z-index: 1020;">
            <div class="p-3 border-bottom d-flex align-items-center gap-2">
                <a class="d-flex align-items-center gap-2 text-decoration-none" href="{{ route('dashboard.index') }}">
                    <img src="{{ asset('public/logo-crop.png') }}"  alt="شعار شركة النور" width="70px">
                    <div class="d-flex flex-column">
                        <span class="fw-bold text-primary">لوحة التحكم</span>
                        <small class="text-muted">إدارة المحتوى</small>
                    </div>
                </a>
            </div>
            <div class="p-3 border-bottom d-flex align-items-center gap-2">
                <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center overflow-hidden" style="width:42px; height:42px;">
                    @if ($authUser?->profile_image)
                        <img src="{{ asset('public/' . $authUser->profile_image) }}" alt="{{ $authUser->name }}" class="w-100 h-100 object-fit-cover">
                    @else
                        {{ $userInitial }}
                    @endif
                </span>
                <div>
                    <div class="fw-semibold">{{ $authUser?->name }}</div>
                    <a href="{{ route('dashboard.profile.edit') }}" class="small text-decoration-none">الملف الشخصي</a>
                </div>
            </div>
            <div class="flex-grow-1 overflow-auto">
                <ul class="nav flex-column">
                    @auth
                        @foreach ($dashboardLinks as $link)
                            @if ($link['authorized'])
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 px-3 py-2 {{ $link['active'] ? 'active fw-bold text-primary' : 'text-dark' }}"
                                        href="{{ $link['url'] }}">
                                        <i class="{{ $link['icon'] }}"></i><span>{{ $link['label'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endauth
                </ul>
            </div>
            <div class="p-3 border-top">
                @auth
                    <a class="btn btn-outline-secondary w-100" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        تسجيل الخروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </div>
        </aside>

        <main class="flex-grow-1 py-4">
            <div class="container">

                <!-- عرض رسائل النجاح -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-check-circle ms-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
                    </div>
                @endif

                <!-- عرض رسائل الفشل -->
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation ms-2"></i>{{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
                    </div>
                @endif

                <!-- عرض أخطاء التحقق -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
                    </div>
                @endif

            </div>
            @yield('content')
        </main>
    </div>
</body>

</html>
