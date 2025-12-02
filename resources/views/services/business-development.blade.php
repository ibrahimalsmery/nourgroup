@extends('layout.master')

@section('content')
    <div class="min-h-screen bg-white">
        <section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-20 px-4">
            <div class="container mx-auto max-w-6xl text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    نساعدك على النمو... بخطط ذكية وشراكات فاعلة
                </h1>

                <p class="text-xl md:text-2xl mb-8 leading-relaxed max-w-4xl mx-auto">
                    في مجموعة النور الاستشارية، نعمل مع الشركات والمؤسسات لتمكينها من تحقيق نمو مستدام
                    ومؤثر من خلال حلول تطوير أعمال مبنية على التحليل، الابتكار، والتخطيط الاستراتيجي.
                    نُسهم في بناء شركات أقوى، أكثر كفاءة، وأكثر قدرة على التنافس في السوق الفلسطيني والإقليمي.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-gold-500 hover:bg-gold-600 text-white font-bold py-3 px-8 rounded-lg text-lg">
                        ابدأ تطوير عملك الآن
                    </button>

                    <a href="#contact"
                        class="border border-white bg-white text-blue-900 hover:bg-blue-50 font-bold py-3 px-8 rounded-lg text-lg">
                        احجز استشارتك المجانية
                </a>
                </div>
            </div>
        </section>

        @php
            $developmentCycle = [
                ['step' => 1, 'title' => 'التحليل السوقي', 'description' => 'دراسة السوق والمنافسين'],
                ['step' => 2, 'title' => 'التخطيط الاستراتيجي', 'description' => 'وضع خطة النمو'],
                ['step' => 3, 'title' => 'التنفيذ', 'description' => 'تطبيق الاستراتيجيات'],
                ['step' => 4, 'title' => 'التحالفات', 'description' => 'بناء الشراكات الاستراتيجية'],
                ['step' => 5, 'title' => 'النمو', 'description' => 'تحقيق التوسع المستدام'],
            ];
        @endphp

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُعزّز النمو عبر الرؤية والابتكار والشراكة
                </h2>

                <div class="grid grid-cols-1 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            تجمع مجموعة النور بين المنهج العلمي والخبرة الميدانية لتطوير استراتيجيات تُمكّن
                            المؤسسات من التكيّف مع التغيرات السوقية وتحقيق النمو الفعّال.
                            نؤمن أن تطوير الأعمال لا يعني فقط زيادة الأرباح، بل بناء منظمات قادرة على التجديد والاستدامة.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="flex  flex-col md:flex-row gap-3  justify-between items-center">
                            @foreach ($developmentCycle as $item)
                                <div class="text-center ">
                                    <div
                                        class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mb-2 mx-auto">
                                        {{ $item['step'] }}
                                    </div>
                                    <h4 class="font-semibold text-blue-900">{{ $item['title'] }}</h4>
                                    <p class="text-sm text-gray-600 mt-1">{{ $item['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="absolute top-8 left-8 right-8 h-0.5 bg-blue-200 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $services = [
                [
                    'icon' => '🚀',
                    'title' => 'استراتيجيات النمو المبتكرة',
                    'description' =>
                        'تصميم استراتيجيات تسويقية وتنافسية قائمة على تحليل البيانات والاتجاهات السوقية لدعم التوسع والنمو المستدام.',
                ],
                [
                    'icon' => '💡',
                    'title' => 'دعم الشركات الناشئة',
                    'description' =>
                        'مرافقة الشركات في مراحلها الأولى عبر الإرشاد، دراسات الجدوى، نمذجة الأعمال، وبناء القدرات الإدارية والمالية.',
                ],
                [
                    'icon' => '🤝',
                    'title' => 'الشراكات والتحالفات الاستراتيجية',
                    'description' =>
                        'تمكين الشركات من بناء علاقات تعاون وشراكات مع جهات محلية ودولية لتعزيز التوسع والتأثير.',
                ],
                [
                    'icon' => '🏛️',
                    'title' => 'التمكين المؤسسي',
                    'description' =>
                        'تطوير الهيكل الإداري، العمليات الداخلية، وثقافة الأداء لضمان جاهزية المؤسسة للنمو.',
                ],
                [
                    'icon' => '💎',
                    'title' => 'إدارة الابتكار وريادة الأعمال',
                    'description' => 'مساعدة المؤسسات على تطوير منتجات وخدمات جديدة وتبني نماذج أعمال مبتكرة.',
                ],
                [
                    'icon' => '📊',
                    'title' => 'التخطيط الاستراتيجي والتشغيلي',
                    'description' => 'إعداد خطط متكاملة لتحقيق أهداف النمو وفق مؤشرات أداء واقعية وقابلة للقياس.',
                ],
                [
                    'icon' => '🔍',
                    'title' => 'تحليل الأسواق وتطوير المنتجات',
                    'description' =>
                        'إجراء دراسات سوقية لتحديد فرص جديدة وتحسين المنتجات الحالية بما يتناسب مع احتياجات السوق.',
                ],
            ];
        @endphp

        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نقدّم لك حزمة متكاملة من حلول تطوير الأعمال
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($services as $service)
                        <div
                            class="p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col bg-white rounded-lg border">
                            <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                            <h3 class="text-xl font-semibold text-blue-900 mb-3">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 flex-grow">{{ $service['description'] }}</p>
                            <button
                                class="px-4 py-2 border border-blue-900 text-blue-900 rounded-lg text-sm hover:bg-blue-50 transition">
                                احجز استشارة
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @php
            $sectors = [
                [
                    'category' => 'القطاعات الاقتصادية والإنتاجية',
                    'color' => 'green',
                    'description' => 'تحليل السوق وتطوير خطط النمو',
                    'examples' => [
                        'الصناعة والتحويل الغذائي',
                        'الزراعة والأمن الغذائي',
                        'الطاقة والمياه',
                        'التجارة والخدمات',
                    ],
                ],
                [
                    'category' => 'القطاعات الريادية والشركات الصغيرة والمتوسطة',
                    'color' => 'blue',
                    'description' => 'بناء الشراكات وتمكين المؤسسات',
                    'examples' => [
                        'الشركات الناشئة',
                        'ريادة الأعمال الاجتماعية',
                        'الحاضنات والمسرّعات',
                        'مؤسسات التمويل الأصغر',
                    ],
                ],
                [
                    'category' => 'القطاعات الداعمة',
                    'color' => 'purple',
                    'description' => 'تطوير استراتيجيات التوسع',
                    'examples' => [
                        'المصارف وشركات التمويل',
                        'قطاع السياحة والنشاط الفندقي',
                        'قطاع الاتصالات وتكنولوجيا المعلومات',
                        'مؤسسات المجتمع المدني التنموي',
                    ],
                ],
            ];

            $colorMap = [
                'green' => 'bg-green-50 border-green-200 text-green-800',
                'blue' => 'bg-blue-50 border-blue-200 text-blue-800',
                'purple' => 'bg-purple-50 border-purple-200 text-purple-800',
            ];
        @endphp

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    ندعم جميع القطاعات التي تصنع الاقتصاد الفلسطيني
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($sectors as $sector)
                        <div
                            class="border-2 rounded-lg p-6 {{ $colorMap[$sector['color']] }} transition-transform hover:scale-105">
                            <h3 class="text-xl font-semibold mb-3">{{ $sector['category'] }}</h3>
                            <p class="text-sm text-gray-600 mb-4">{{ $sector['description'] }}</p>
                            <ul class="space-y-2">
                                @foreach ($sector['examples'] as $example)
                                    <li class="flex items-start text-sm">
                                        <span class="ml-2 text-gold-600">•</span>
                                        <span>{{ $example }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        @php
            $methodologySteps = [
                [
                    'step' => '1',
                    'title' => 'تحليل الواقع التجاري',
                    'description' => 'جمع بيانات السوق، سلوك العملاء، والمنافسين.',
                ],
                [
                    'step' => '2',
                    'title' => 'تحديد الفرص والتحديات',
                    'description' => 'رسم خريطة للفرص الممكنة للنمو في البيئة الفلسطينية.',
                ],
                [
                    'step' => '3',
                    'title' => 'تصميم الحلول الاستراتيجية',
                    'description' => 'بناء نموذج عمل وخطة تنفيذية قصيرة ومتوسطة المدى.',
                ],
                [
                    'step' => '4',
                    'title' => 'تنفيذ ومتابعة التقدم',
                    'description' => 'تقديم الدعم الفني أثناء التطبيق وقياس الأثر.',
                ],
                [
                    'step' => '5',
                    'title' => 'التقييم والتحسين المستمر',
                    'description' => 'متابعة الأداء وتعديل الاستراتيجية بناءً على النتائج.',
                ],
            ];
        @endphp

        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُحوّل التحديات إلى فرص قابلة للنمو
                </h2>

                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        @foreach ($methodologySteps as $step)
                            <div class="flex items-start space-x-6 space-x-reverse">
                                <div
                                    class="m-0 ml-1 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    {{ $step['step'] }}
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-900 mb-2">{{ $step['title'] }}</h3>
                                    <p class="text-gray-600 leading-relaxed">{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-12 p-6 bg-blue-50 rounded-lg border-r-4 border-gold-500">
                        <p class="text-lg text-blue-800 text-center font-semibold">
                            "نقيس نجاحنا بقدرتنا على تحويل المؤسسات من وضع الاستقرار إلى وضع النمو المتسارع."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        @php
            $stories = [
                [
                    'title' => 'دعم 10 شركات ناشئة في قطاع التكنولوجيا',
                    'challenge' => 'شركات ناشئة تحتاج إلى تطوير استراتيجيات النمو',
                    'solution' => 'توفير إرشاد استراتيجي وبناء شراكات استثمارية',
                    'results' => 'نمو إيرادات الشركات بنسبة 200% في سنة واحدة',
                ],
                [
                    'title' => 'إعداد خطة نمو لشركة زراعية تصديرية',
                    'challenge' => 'شركة زراعية تسعى للتوسع في الأسواق الإقليمية',
                    'solution' => 'تحليل الأسواق وتطوير استراتيجية تصدير شاملة',
                    'results' => 'زيادة حجم الصادرات بنسبة 150% خلال 6 أشهر',
                ],
                [
                    'title' => 'تحالف استثماري بين شركات فلسطينية وخليجية',
                    'challenge' => 'بحث عن شركاء استراتيجيين للتوسع الإقليمي',
                    'solution' => 'وساطة وتنسيق لإنشاء تحالف استثماري مشترك',
                    'results' => 'تأسيس تحالف برأس مال 5 ملايين دولار',
                ],
                [
                    'title' => 'برنامج تمكين مؤسسي لقطاع الخدمات المالية',
                    'challenge' => 'مؤسسات مالية تحتاج إلى تحديث أنظمتها الإدارية',
                    'solution' => 'تطوير هياكل تنظيمية وتبني تقنيات متقدمة',
                    'results' => 'تحسين الكفاءة التشغيلية بنسبة 40%',
                ],
            ];
        @endphp

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    شراكات تبني المستقبل
                </h2>

                <div class="grid md:grid-cols-2 gap-8">
                    @foreach ($stories as $story)
                        <div class="p-6 border rounded-lg shadow-sm hover:shadow-lg transition-shadow">
                            <div class="flex items-start space-x-4 space-x-reverse mb-4">
                                <div
                                    class="m-0 ml-3 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                    ✓
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-900">{{ $story['title'] }}</h3>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-1">التحدي:</h4>
                                    <p class="text-gray-600 text-sm">{{ $story['challenge'] }}</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-700 mb-1">الحل:</h4>
                                    <p class="text-gray-600 text-sm">{{ $story['solution'] }}</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gold-600 mb-1">النتائج:</h4>
                                    <p class="text-gold-700 text-sm font-semibold">{{ $story['results'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    منصتنا في مجتمع الأعمال
                </h2>

                {{-- Latest Posts --}}
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold text-center text-blue-800 mb-6">
                        آخر منشوراتنا على وسائل التواصل
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        @php
                            $latestPosts = [
                                [
                                    'platform' => 'LinkedIn',
                                    'content' => 'تقرير جديد: 5 اتجاهات ستؤثر على نمو الشركات الفلسطينية في 2025',
                                    'link' => '#',
                                ],
                                [
                                    'platform' => 'Instagram',
                                    'content' => 'إنفوغرافيك: كيف تبني شراكات استراتيجية ناجحة',
                                    'link' => '#',
                                ],
                            ];
                        @endphp

                        @foreach ($latestPosts as $post)
                            <div class="border rounded-lg p-6 shadow hover:shadow-lg transition">
                                <div class="flex items-center space-x-3 space-x-reverse mb-3">
                                    <span class="text-2xl">
                                        @if ($post['platform'] === 'LinkedIn')
                                            <i class="fa-brands fa-linkedin"></i>
                                        @else
                                            <i class="fa-brands fa-instagram"></i>
                                        @endif
                                    </span>
                                </div>
                                <p class="text-gray-700 mb-4">{{ $post['content'] }}</p>
                                <a href="{{ $post['link'] }}" class="text-gold-600 hover:text-gold-700 font-semibold">
                                    اقرأ المزيد →
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Social Platforms --}}
                @php
                    $socialPlatforms = [
                        [
                            'name' => 'LinkedIn',
                            'icon' => 'fa-linkedin',
                            'purpose' => 'المنصة الأساسية لخدمة تطوير الأعمال',
                            'content' => 'تقارير قصيرة عن المشاريع، قصص نجاح، تحليلات نمو السوق',
                        ],
                        [
                            'name' => 'Facebook',
                            'icon' => 'fa-facebook',
                            'purpose' => 'التفاعل المجتمعي وبناء الثقة المحلية',
                            'content' => 'صور من الدورات، لقاءات ميدانية، احتفالات توقيع شراكات',
                        ],
                        [
                            'name' => 'Instagram',
                            'icon' => 'fa-instagram',
                            'purpose' => 'محتوى بصري وتسويقي جذاب',
                            'content' => 'إنفوغرافيك نصائح تطوير الأعمال، فيديوهات قصيرة لرواد أعمال',
                        ],
                        [
                            'name' => 'X (Twitter)',
                            'icon' => 'fa-x-twitter',
                            'purpose' => 'نشر رؤى سريعة ومؤشرات اقتصادية',
                            'content' => 'تغريدات تحتوي على حقائق سوقية، روابط للتقارير',
                        ],
                        [
                            'name' => 'YouTube',
                            'icon' => 'fa-youtube',
                            'purpose' => 'منصة التعليم والتأثير',
                            'content' => 'فيديوهات قصيرة لبرامج تطوير الأعمال، مقابلات مع خبراء',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($socialPlatforms as $platform)
                        <div class="border rounded-lg p-6 text-center shadow hover:shadow-lg transition">
                            <div class="text-4xl mb-4"><i class="fa-brands {{ $platform['icon'] }}"></i></div>
                            <h3 class="text-xl font-semibold text-blue-900 mb-3">{{ $platform['name'] }}</h3>
                            <p class="text-gray-600 mb-2 font-semibold">{{ $platform['purpose'] }}</p>
                            <p class="text-gray-500 text-sm">{{ $platform['content'] }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- Call to Follow --}}
                <div class="text-center mt-12 p-6 bg-blue-50 rounded-lg">
                    <h3 class="text-2xl font-semibold text-blue-900 mb-4">
                        انضم إلى شبكتنا لتتعرف على أحدث الفرص، المشاريع، والشراكات
                    </h3>
                    <div class="flex justify-center space-x-6  text-4xl">
                        <a href="#" class="text-blue-600 hover:text-blue-800" title="LinkedIn">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Facebook">
                            <i class="fa-brands fa-facebook"></i>

                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>

                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>

                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800" title="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                    <p class="text-gray-600 mt-4">
                        تابع قسم تطوير الأعمال في مجموعة النور لتتعرف على أحدث البرامج، الفرص، والمشاريع الريادية في فلسطين.
                    </p>
                </div>
            </div>
        </section>


        <section id="contact" class="py-16 px-4 bg-blue-900 text-white">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-6">
                    هل ترغب في توسيع أعمالك أو تأسيس مشروعك القادم؟
                </h2>
                <p class="text-xl text-center text-blue-200 mb-12 max-w-2xl mx-auto">
                    تواصل معنا لنساعدك على بناء خطة نمو متكاملة، وتطوير شراكات استراتيجية تحقق طموحاتك.
                </p>

                <div class="bg-white rounded-lg p-8">
                    <form action="{{ route('bs-dev.store') }}" method="POST" class="space-y-6 text-right">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2">الاسم الكامل</label>
                                <input type="text" name="name"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                                <input type="email" name="email"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2">رقم الجوال</label>
                                <input type="tel" name="phone"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">اسم المؤسسة</label>
                                <input type="text" name="company"
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2">القطاع</label>
                                <select name="sector" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800">
                                    <option value="">اختر القطاع</option>
                                    <option value="اقتصادي وإنتاجي">اقتصادي وإنتاجي</option>
                                    <option value="ريادي وشركات صغيرة">ريادي وشركات صغيرة</option>
                                    <option value="قطاعات داعمة">قطاعات داعمة</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">نوع الخدمة المطلوبة</label>
                                <select name="service" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800">
                                    <option value="">اختر الخدمة</option>
                                    <option value="استراتيجيات النمو">استراتيجيات النمو</option>
                                    <option value="دعم الشركات الناشئة">دعم الشركات الناشئة</option>
                                    <option value="الشراكات الاستراتيجية">الشراكات الاستراتيجية</option>
                                    <option value="التمكين المؤسسي">التمكين المؤسسي</option>
                                    <option value="إدارة الابتكار">إدارة الابتكار</option>
                                    <option value="التخطيط الاستراتيجي">التخطيط الاستراتيجي</option>
                                    <option value="تحليل الأسواق">تحليل الأسواق</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2">الرسالة</label>
                            <textarea name="message" rows="4" placeholder="أخبرنا عن احتياجاتك وتطلعاتك..."
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full p-4 bg-gold-500 text-white font-semibold rounded-lg hover:bg-gold-600 transition">
                            ابدأ الآن / احجز استشارة تطوير أعمال
                        </button>
                    </form>
                </div>

                {{-- Contact Channels --}}
                <div class="text-center mt-8">
                    <p class="text-blue-200 mb-4">قنوات التواصل:</p>
                    <div class="flex justify-center space-x-6  text-blue-200 ">
                        <span>✉️ البريد الإلكتروني</span>
                        <span>📞 الهاتف</span>
                        <span>💬 نموذج تواصل مباشر</span>
                        <span><i class="fa-brands fa-whatsapp text-green-400"></i> WhatsApp للأعمال</span>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
