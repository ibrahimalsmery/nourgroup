@extends('layout.master')

@section('content')
    <div class="min-h-screen bg-gray-50" dir="rtl">
        <section class="bg-gradient-to-l from-blue-900 to-blue-700 text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    نحو قرارات أدق... من خلال أبحاث ودراسات مبنية على الأدلة
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed">
                    في مجموعة النور الاستشارية، نقدّم منظومة متكاملة من خدمات الأبحاث والدراسات
                    التي تُمكّن المؤسسات والجهات الفاعلة من اتخاذ قرارات مستنيرة مبنية على البيانات
                    في مختلف القطاعات التنموية والاقتصادية والاجتماعية في فلسطين.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="bg-gold-500 hover:bg-gold-600 text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300">
                        ابدأ مشروعك البحثي معنا
                    </button>

                    <a href="#request_consulting"
                        class="border-2 border-white hover:bg-white hover:text-blue-900 font-bold py-3 px-8 rounded-lg text-lg transition duration-300 inline-block">
                        اطلب استشارة الآن
                    </a>
                </div>
            </div>
        </section>


        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    خبرة تحليلية... رؤية استراتيجية
                </h2>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            نؤمن في مجموعة النور أن البحث العلمي ليس غاية بحد ذاته، بل وسيلة لصنع أثر مجتمعي حقيقي.
                            نستخدم أدوات بحث متقدمة لجمع وتحليل البيانات، ونعتمد على فرق متخصصة تجمع بين الخبرة
                            الأكاديمية والميدانية لضمان نتائج موثوقة وذات أثر.
                        </p>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                                <span class="text-2xl">📊</span>
                                <span class="font-semibold">بحث كمي</span>
                            </div>

                            <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                                <span class="text-2xl">🎯</span>
                                <span class="font-semibold">بحث نوعي</span>
                            </div>

                            <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                                <span class="text-2xl">📈</span>
                                <span class="font-semibold">تحليل بيانات</span>
                            </div>

                            <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg">
                                <span class="text-2xl">🚀</span>
                                <span class="font-semibold">مخرجات استراتيجية</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 rounded-2xl p-8">
                        <img src="{{ asset('public/consulting-hero.jpg') }}" alt="منهجية البحث"
                            class="rounded-lg w-full h-96 object-cover" />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50" x-data="{ selectedService: null }">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نقدّم لك حزمة متكاملة من خدمات البحث والتحليل
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Loop through services --}}
                    @foreach ([
            ['id' => 'baseline', 'icon' => '📊', 'title' => 'إعداد دراسات خط الأساس', 'description' => 'جمع وتحليل بيانات لتحديد الوضع الحالي للمشاريع والبرامج.'],
            ['id' => 'feasibility', 'icon' => '💰', 'title' => 'دراسات الجدوى الاقتصادية والفنية', 'description' => 'تقييم شامل لجدوى المشاريع من الجوانب الاقتصادية والفنية.'],
            ['id' => 'needs', 'icon' => '🎯', 'title' => 'دراسات تقييم الاحتياجات', 'description' => 'مساعدة المؤسسات على تحديد أولوياتها واستراتيجياتها.'],
            ['id' => 'market', 'icon' => '📈', 'title' => 'دراسات السوق', 'description' => 'تحليل الاتجاهات والمنافسة وسلوك المستهلك لدعم القرارات التسويقية.'],
            ['id' => 'field', 'icon' => '🔍', 'title' => 'الأبحاث الميدانية والمسحية', 'description' => 'جمع بيانات كمية ونوعية لدعم اتخاذ القرار.'],
            ['id' => 'risk', 'icon' => '⚠️', 'title' => 'دراسات تقييم المخاطر', 'description' => 'تحديد وتحليل وإدارة المخاطر المحتملة.'],
            ['id' => 'policy', 'icon' => '📄', 'title' => 'أوراق الحقائق والموقف', 'description' => 'إعداد تقارير مختصرة ومرجعية تدعم صناع القرار.'],
        ] as $service)
                        <div
                            class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border border-gray-200">
                            <div class="text-3xl mb-4">{{ $service['icon'] }}</div>
                            <h3 class="text-xl font-bold text-blue-900 mb-3">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $service['description'] }}</p>

                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <section class="py-16 bg-white" x-data="{ selectedSector: 'all' }">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نغطي جميع القطاعات التي تصنع مستقبل فلسطين
                </h2>

                <div class="space-y-6">
                    {{-- القطاعات الاقتصادية والتنموية --}}
                    <div class="border-2 rounded-2xl p-6 bg-green-100 border-green-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">🏢</span>
                            <h3 class="text-2xl font-bold text-gray-800">القطاعات الاقتصادية والتنموية</h3>
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach (['الأنشطة التجارية والخدمية', 'القطاع الصناعي', 'القطاع الزراعي والثروة الحيوانية والسمكية', 'قطاع الطاقة والكهرباء', 'قطاع المصارف والتأمين والأوراق المالية'] as $item)
                                <div class="flex items-center gap-2 p-3 bg-white rounded-lg">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                                    <span class="text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- قطاعات البنية التحتية والخدمات --}}
                    <div class="border-2 rounded-2xl p-6 bg-blue-100 border-blue-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">🏗️</span>
                            <h3 class="text-2xl font-bold text-gray-800">قطاعات البنية التحتية والخدمات</h3>
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach (['قطاع الإنشاءات والبناء', 'قطاع النقل والمواصلات', 'قطاع الموارد المائية والصرف الصحي', 'قطاع البيئة'] as $item)
                                <div class="flex items-center gap-2 p-3 bg-white rounded-lg">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                                    <span class="text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- القطاعات الاجتماعية والخدمية --}}
                    <div class="border-2 rounded-2xl p-6 bg-purple-100 border-purple-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">👥</span>
                            <h3 class="text-2xl font-bold text-gray-800">القطاعات الاجتماعية والخدمية</h3>
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach (['القطاع الصحي', 'قطاع التعليم والتدريب المهني والتقني', 'قطاع المرأة والطفل', 'قطاع الأشخاص ذوي الإعاقة وكبار السن', 'قطاع الثقافة والترفيه', 'المجتمع المحلي'] as $item)
                                <div class="flex items-center gap-2 p-3 bg-white rounded-lg">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                                    <span class="text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- القطاعات الإدارية والحكومية --}}
                    <div class="border-2 rounded-2xl p-6 bg-red-100 border-red-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">🏛️</span>
                            <h3 class="text-2xl font-bold text-gray-800">القطاعات الإدارية والحكومية</h3>
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach (['قطاع البلديات والسلطات المحلية', 'القطاع العام', 'قطاع الأمن العام'] as $item)
                                <div class="flex items-center gap-2 p-3 bg-white rounded-lg">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                                    <span class="text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- القطاعات التقنية والمعرفية --}}
                    <div class="border-2 rounded-2xl p-6 bg-indigo-100 border-indigo-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">💻</span>
                            <h3 class="text-2xl font-bold text-gray-800">القطاعات التقنية والمعرفية</h3>
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach (['قطاع الاتصالات وتكنولوجيا المعلومات', 'قطاع السياحة والنشاط الفندقي'] as $item)
                                <div class="flex items-center gap-2 p-3 bg-white rounded-lg">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                                    <span class="text-gray-700">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gradient-to-l from-blue-50 to-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُحوّل البيانات إلى معرفة... والمعرفة إلى قرارات
                </h2>

                <div class="max-w-4xl mx-auto">
                    <div class="relative">
                        {{-- الخط الواصل بين المراحل --}}
                        <div
                            class="absolute top-1/2 left-0 right-0 h-1 bg-blue-200 transform -translate-y-1/2 hidden md:block">
                        </div>

                        {{-- المراحل --}}
                        <div class="grid md:grid-cols-5 gap-6 relative text-center">
                            @php
                                $methodology = [
                                    [
                                        'step' => 1,
                                        'title' => 'تحديد أهداف البحث',
                                        'description' => 'فهم الاحتياجات وتحديد الأهداف بوضوح',
                                    ],
                                    [
                                        'step' => 2,
                                        'title' => 'جمع البيانات',
                                        'description' => 'استخدام أدوات بحث متقدمة لجمع البيانات',
                                    ],
                                    [
                                        'step' => 3,
                                        'title' => 'التحليل',
                                        'description' => 'تحليل البيانات باستخدام منهجيات علمية',
                                    ],
                                    [
                                        'step' => 4,
                                        'title' => 'التوصيات',
                                        'description' => 'تقديم توصيات عملية قابلة للتطبيق',
                                    ],
                                    [
                                        'step' => 5,
                                        'title' => 'المتابعة والتقييم',
                                        'description' => 'متابعة التنفيذ وتقييم الأثر',
                                    ],
                                ];
                            @endphp

                            @foreach ($methodology as $step)
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-4 relative z-10">
                                        {{ $step['step'] }}
                                    </div>
                                    <h3 class="font-bold text-lg text-blue-900 mb-2">{{ $step['title'] }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $step['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- الاقتباس --}}
                    <div class="mt-12 bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                        <p class="text-xl text-center text-gray-700 italic leading-relaxed">
                            "في مجموعة النور، نؤمن أن البحث العلمي ليس غاية بحد ذاته، بل وسيلة لصنع أثر مجتمعي حقيقي."
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-16 bg-blue-900 text-white text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    هل تحتاج إلى دراسة تدعم قرارك القادم؟
                </h2>

                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    تواصل مع فريقنا من الخبراء لبدء مشروعك البحثي اليوم
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <button
                        class="border-2 border-white hover:bg-white hover:text-blue-900 font-bold py-3 px-8 rounded-lg text-lg transition duration-300">
                        ابدأ مشروعك البحثي معنا
                    </button>
                </div>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-6 text-sm">
                    <div class="flex items-center gap-2">
                        <span>📧</span>
                        <span>research@al-nourgroup.com</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>📞</span>
                        <span>+970 599 000 000</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 bg-gray-100 text-center">
            <div class="container mx-auto px-4">
                <h3 class="text-2xl font-bold text-blue-900 mb-6">
                    تابع قسم الدراسات والأبحاث في مجموعة النور
                </h3>

                <div class="flex justify-center gap-4 mb-6">

                    @foreach ($service->links ?? [] as $link)
                        @switch($link['key'])
                            @case('l/inkedin')
                                <a href="{{ $link['value'] }}"
                                    class="bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center text-lg hover:opacity-90 transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            @break

                            @case('x')
                                <a href="{{ $link['value'] }}"
                                    class="bg-black text-white w-12 h-12 rounded-full flex items-center justify-center text-lg hover:opacity-90 transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            @break

                            @case('facebook')
                                <a href="{{ $link['value'] }}"
                                    class="bg-blue-500 text-white w-12 h-12 rounded-full flex items-center justify-center text-lg hover:opacity-90 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            @break

                            @case('youtube')
                                <a href="{{ $link['value'] }}"
                                    class="bg-red-600 text-white w-12 h-12 rounded-full flex items-center justify-center text-lg hover:opacity-90 transition duration-300">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            @break

                            @default
                        @endswitch
                    @endforeach


                </div>

                <p class="text-gray-600">
                    تابع آخر الإصدارات والنتائج على وسائل التواصل الاجتماعي
                </p>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-4">
                    خبراؤنا... شركاؤك في النجاح
                </h2>
                <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                    في مجموعة النور الاستشارية، يقف خلف كل خدمة فريق من الخبراء والاستشاريين ذوي الخبرات المتنوعة
                    في مجالات الاقتصاد، التنمية، التعليم، التكنولوجيا، وإدارة الموارد البشرية.
                </p>

                <!-- الخبراء -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-1">
                    @foreach ($service_experts as $expert)
                        <div
                            class="bg-white  shadow overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer">
                            <a href="{{ route('experts.public.show', ['expert' => $expert->id]) }}">
                                <div class="p-6">
                                    <div class="flex justify-center items-center gap-4 mb-4">
                                        <img src="{{ asset($expert->image) }}" alt="{{ $expert->name }}"
                                            class="w-40 h-40 rounded-full object-cover " />

                                    </div>
                                    <p class="text-center text-3xl">{{ $expert->name }}</p>
                                    <p class="text-center text-md">{{ $expert->current_position }}</p>
                                    <hr class="my-2 w-1/2 mx-auto">
                                    <p class="text-center text-sm text-gray-600">{{ $expert->experience }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <!-- قيم الفريق -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mt-12">
                    <h3 class="text-2xl font-bold text-center text-blue-900 mb-6">قيم فريقنا</h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 text-center">
                        @foreach (['المهنية', 'الشفافية', 'العمل الجماعي', 'الابتكار', 'الأثر المستدام'] as $value)
                            <div class="p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-300">
                                <span class="font-semibold text-blue-900">{{ $value }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    مقالات ومعارف من خبرائنا
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($service_posts as $post)
                        <article class="bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                            <a href="{{ route('posts.public.show', ['post' => $post->id]) }}">
                                <img src="{{ asset('public/' . $post->image) }}" class="w-full h-48 object-cover" />
                                <div class="p-6">
                                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                        <span class="font-bold">{{ $post->name }}</span>
                                        <span>•</span>
                                        <span>{{ $post->created_at->format('Y-m-d') }}</span>
                                    </div>
                                    <h3 class="font-bold text-lg text-blue-900 mb-3 leading-tight">
                                        {{ $post->title ?? 'no title' }}</h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        {{ Str::limit($post->content, 80) }}
                                    </p>
                                    <button
                                        class="text-gold-600 hover:text-gold-700 font-semibold text-sm flex items-center gap-2">
                                        اقرأ المقال
                                        <span>→</span>
                                    </button>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>


        <section id="request_consulting" x-data="{ activeTab: 'individuals' }" class="py-16 px-4 bg-blue-900 text-white">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                    طلب استشارة
                </h2>

                {{-- Tab Navigation --}}
                <div class="flex justify-center mb-8">
                    <div class="bg-white rounded-lg p-1 flex">
                        <button @click="activeTab = 'individuals'"
                            :class="activeTab === 'individuals' ? 'bg-gold-500 text-black border-2' :
                                'text-blue-900 hover:bg-blue-50'"
                            class="px-6 py-3 rounded-md font-semibold transition-colors">
                            للأفراد
                        </button>
                        <button @click="activeTab = 'companies'"
                            :class="activeTab === 'companies' ? 'bg-gold-500 text-black border-2' :
                                'text-blue-900 hover:bg-blue-50'"
                            class="px-6 py-3 rounded-md font-semibold transition-colors">
                            للمؤسسات
                        </button>
                    </div>
                </div>

                {{-- Forms --}}
                <div class="bg-white rounded-lg p-8">
                    {{-- Individuals Form --}}
                    <div x-show="activeTab === 'individuals'" x-transition class="text-right">
                        <form action="{{ route('research.client.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" name="name" placeholder="الاسم الكامل"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                                <input type="email" name="email" placeholder="البريد الإلكتروني"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="tel" name="phone" placeholder="Whatsapp رقم الجوال"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                                <select name="type" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"
                                    required>
                                    <option value="">نوع الدارسة</option>
                                    <option value="إعداد دراسات خط الأساس">إعداد دراسات خط الأساس</option>
                                    <option value="دراسات الجدوى الاقتصادية والفنية">دراسات الجدوى الاقتصادية والفنية
                                    </option>
                                    <option value="دراسات تقييم الاحتياجات">دراسات تقييم الاحتياجات</option>
                                    <option value="دراسات السوق">دراسات السوق</option>
                                    <option value="الأبحاث الميدانية والمسحية">الأبحاث الميدانية والمسحية</option>
                                    <option value="دراسات تقييم المخاطر">دراسات تقييم المخاطر</option>
                                    <option value="أوراق الحقائق والموقف">أوراق الحقائق والموقف</option>
                                    <option value="اخرى">اخرى</option>
                                </select>
                            </div>
                            <textarea name="message" placeholder="رسالة مختصرة" rows="4"
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>

                            <button type="submit"
                                class="w-full py-3 px-6 bg-gold-500 text-black font-bold rounded-lg text-lg">
                                إرسال الطلب
                            </button>
                        </form>
                    </div>

                    {{-- Companies Form --}}
                    <div x-show="activeTab === 'companies'" x-transition class="text-right">
                        <h3 class="text-2xl font-bold text-blue-900 mb-6">المؤسسات - الشركات</h3>
                        <form action="{{ route('research.company.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" name="name" placeholder="الاسم الكامل"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                                <input type="email" name="email" placeholder="البريد الإلكتروني"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="tel" name="phone" placeholder="Whatsapp رقم الجوال"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                                <select name="type" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"
                                    required>
                                    <option value="">نوع الدارسة</option>
                                    <option value="إعداد دراسات خط الأساس">إعداد دراسات خط الأساس</option>
                                    <option value="دراسات الجدوى الاقتصادية والفنية">دراسات الجدوى الاقتصادية والفنية
                                    </option>
                                    <option value="دراسات تقييم الاحتياجات">دراسات تقييم الاحتياجات</option>
                                    <option value="دراسات السوق">دراسات السوق</option>
                                    <option value="الأبحاث الميدانية والمسحية">الأبحاث الميدانية والمسحية</option>
                                    <option value="دراسات تقييم المخاطر">دراسات تقييم المخاطر</option>
                                    <option value="أوراق الحقائق والموقف">أوراق الحقائق والموقف</option>
                                    <option value="اخرى">اخرى</option>
                                </select>
                            </div>
                            <textarea name="message" placeholder="رسالة مختصرة" rows="4"
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>
                            <button type="submit"
                                class="w-full py-3 px-6 bg-gold-500 text-black font-bold rounded-lg text-lg">
                                إرسال الطلب
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
