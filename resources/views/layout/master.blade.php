<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
    @vite(['resources/css/tailwind.css', 'resources/js/master.js'])
</head>

<body class="bg-[var(--body-bg)]">
    <div dir="rtl">
        {{-- header --}}
        <header class="py-4 " x-data="{ isNavOpen: false }">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center">
                    <div class="mr-4">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('public/logo-crop.png') }}"  alt="شعار شركة النور" width="120px">
                        </a>
                    </div>
                </div>

                <!-- menu icon trigger -->
                <button @click="isNavOpen = !isNavOpen"
                    class="text-3xl md:hidden hover:text-[var(--text-color)] cursor-pointer">
                    📃القائمة
                </button>

                <!-- navigation -->
                <nav style='z-index:100' :class="{ 'fixed  top-0 left-0 h-screen bg-black/50 w-full': isNavOpen, 'hidden md:block': !isNavOpen }"
                    @click="isNavOpen = false">
                    <ul :class="{ 'bg-white flex flex-col w-1/2 h-screen pt-10': isNavOpen, 'flex space-x-6': !isNavOpen }"
                        class="md:flex md:space-x-6">
                        <li><a href="{{ url('/about') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">من
                                نحن</a></li>
                        <li><a href="{{ url('/vision') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">الرؤية
                                والرسالة</a></li>
                        <li><a href="{{ url('/services') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">خدماتنا</a>
                        </li>
                        <li><a href="{{ url('/clients') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">عملاؤنا</a>
                        </li>
                        <li><a href="{{ url('/contact') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">اتصل
                                بنا</a></li>

                        <li><a href="{{ url('/jobs') }}"
                                class="hover:underline hover:bg-gray-200 md:hover:bg-white py-5 px-1 block w-full">
                            اعلانات الوظائف
                            </a></li>

                        <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button @click.stop="open = !open"
                                class=" hover:bg-gray-200 md:hover:bg-white py-5 px-1 w-full text-right flex items-center justify-between gap-2">
                                <span>المدونة</span>
                                <span class="text-sm" :class="{ 'rotate-180': open }">▼</span>
                            </button>
                            <ul x-show="open" x-transition.origin-top @click.stop
                                class="md:absolute md:right-0 md:w-56 md:bg-white md:shadow-lg md:border md:rounded-lg md:py-2 md:space-y-1
                                       md:z-20 bg-gray-50 rounded-lg mt-2 space-y-2 px-3 py-2">
                                       <!-- list of services -->
                                        @foreach (App\Models\Service::all() as $service)
                                        <li><a href="{{ route('service.posts', ['service' => $service]) }}"
                                                class="block px-3 py-2 rounded hover:bg-gray-100">{{ $service->title }}</a></li>
                                        @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="max-w-4xl mx-auto mb-2">
            <!-- عرض رسائل النجاح -->
            @if (session('success'))
                <div class="p-4 rounded-md bg-green-100 text-green-800 mx-auto">
                    {{ session('success') }}
                </div>
            @endif

            <!-- عرض رسائل الفشل -->
            @if (session('error'))
                <div class="p-4 rounded-md bg-red-100 text-red-800 mx-auto">
                    {{ session('error') }}
                </div>
            @endif

            <!-- عرض أخطاء التحقق -->
            @if ($errors->any())
                <div class="p-4 rounded-md bg-red-100 text-red-800 mx-auto">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @yield('content')

        <!-- Footer -->
        <footer class="bg-[var(--footer-bg)] text-white py-8">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">شركة النور للدراسات والتدريب</h3>
                        <p>بيت الخبرة المتكامل في تقديم الحلول التدريبية، البحثية، والاستشارية المتكاملة</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-4">روابط سريعة</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/about') }}" class="hover:underline">من نحن</a></li>
                            <li><a href="{{ url('/vision') }}" class="hover:underline">الرؤية والرسالة</a></li>
                            <li><a href="{{ url('/services') }}" class="hover:underline">خدماتنا</a></li>
                            <li><a href="{{ url('/clients') }}" class="hover:underline">عملاؤنا</a></li>
                            <li><a href="{{ url('/contact') }}" class="hover:underline">اتصل بنا</a></li>
                            <li><a href="{{ route('posts.public.create') }}" class="hover:underline">أضف مقالة جديدة</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-4">اتصل بنا</h3>
                        <p>هاتف: 0599748739</p>
                        <p>بريد إلكتروني: ziyadmezher@gmail.com</p>
                    </div>
                </div>

                <div class="mt-8 pt-6 text-center">
                    <p>© {{ date('Y') }} شركة النور للدراسات والتدريب. جميع الحقوق محفوظة.</p>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
