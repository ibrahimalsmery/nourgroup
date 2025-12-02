@extends('layout.master')

@section('content')
    <div class="min-h-screen bg-white">

        <section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-20 px-4">
            <div class="container mx-auto max-w-6xl text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    نُنمّي القدرات... لنصنع مستقبلًا أكثر كفاءة
                </h1>

                <p class="text-xl md:text-2xl mb-8 leading-relaxed max-w-4xl mx-auto">
                    في مجموعة النور الاستشارية، نقدّم حلولًا تدريبية شاملة مصممة لتلبية احتياجات المؤسسات
                    والأفراد في مختلف القطاعات الفلسطينية. برامجنا تجمع بين الخبرة العملية والمحتوى المحدث
                    وأحدث أساليب التدريب لضمان تطوير حقيقي للأداء وبناء قدرات مستدامة.
                </p>

                <a href="#contact"
                    class="inline-block bg-yellow-400 text-blue-900 font-semibold py-3 px-6 rounded-lg text-lg
                  hover:bg-yellow-300 transition duration-300">
                    احجز تدريبك الآن أو اطلب برنامجك المخصص
                </a>
            </div>
        </section>

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُحوّل التعلم إلى تغيير حقيقي في الأداء
                </h2>

                <div class="grid grid-cols-1 gap-12 items-center">
                    {{-- النص التعريفي --}}
                    <div>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            نؤمن أن التدريب ليس مجرد نقل معرفة، بل عملية تطوير متكاملة تبدأ بفهم الاحتياج
                            وتنتهي بقياس الأثر. برامجنا التدريبية تعتمد على مبادئ المشاركة، التطبيق العملي،
                            والتفاعل الواقعي، لتزويد الأفراد والمؤسسات بمهارات عملية قابلة للتنفيذ في بيئات العمل
                            الفلسطينية.
                        </p>
                    </div>

                    {{-- دورة التدريب --}}
                    <div class="relative">
                        <div class="flex  gap-3 flex-col md:flex-row justify-between items-center">
                            @php
                                $trainingCycle = [
                                    ['step' => 1, 'title' => 'تحليل الاحتياج', 'description' => 'تحديد فجوات الأداء'],
                                    [
                                        'step' => 2,
                                        'title' => 'تصميم البرنامج',
                                        'description' => 'إعداد خطة تدريبية مرنة',
                                    ],
                                    [
                                        'step' => 3,
                                        'title' => 'تنفيذ تفاعلي',
                                        'description' => 'استخدام تقنيات التعلم النشط',
                                    ],
                                    ['step' => 4, 'title' => 'تقييم', 'description' => 'قياس الأثر والتقدم'],
                                    ['step' => 5, 'title' => 'متابعة ودعم', 'description' => 'دعم مستمر بعد التدريب'],
                                ];
                            @endphp

                            @foreach ($trainingCycle as $item)
                                <div class="text-center">
                                    <div
                                        class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mb-2 mx-auto">
                                        {{ $item['step'] }}
                                    </div>
                                    <h4 class="font-semibold text-blue-900">{{ $item['title'] }}</h4>
                                    <p class="text-sm text-gray-600 mt-1">{{ $item['description'] }}</p>
                                </div>
                            @endforeach
                        </div>

                        {{-- الخط الزمني بين الدوائر --}}
                        <div class="absolute top-8 left-8 right-8 h-0.5 bg-blue-200 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُقدّم التدريب... بالطريقة التي تناسبك
                </h2>

                @php
                    $programTypes = [
                        [
                            'icon' => '🎯',
                            'title' => 'برامج تدريبية متخصصة',
                            'description' =>
                                'تصميم برامج متعمقة تستهدف مهارات محددة في مجالات الإدارة، التنمية، التكنولوجيا، والقطاعات الفنية.',
                        ],
                        [
                            'icon' => '👥',
                            'title' => 'التدريب الوجاهي (حضوري)',
                            'description' =>
                                'جلسات تدريبية عملية داخل القاعات أو في مواقع العمل، تركز على التفاعل المباشر والممارسة الواقعية.',
                        ],
                        [
                            'icon' => '💻',
                            'title' => 'التدريب الأونلاين (عن بُعد)',
                            'description' =>
                                'برامج إلكترونية مرنة تتيح الوصول إلى المحتوى من أي مكان عبر منصات تفاعلية.',
                        ],
                        [
                            'icon' => '🔄',
                            'title' => 'التدريب المدمج',
                            'description' =>
                                'مزيج متكامل بين التدريب الحضوري والإلكتروني لضمان المرونة والتطبيق العملي.',
                        ],
                        [
                            'icon' => '📚',
                            'title' => 'تطوير المواد التدريبية',
                            'description' =>
                                'تصميم مواد تعليمية وأدلة تدريبية مخصصة للمؤسسات والجهات المانحة وفق أحدث المعايير.',
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'التدريب حسب الطلب',
                            'description' => 'برامج مصممة خصيصًا بناءً على احتياجات المؤسسة بعد دراسة تحليلية دقيقة.',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($programTypes as $program)
                        <div class="bg-white rounded-xl shadow-sm text-center p-6 hover:shadow-lg transition-shadow">
                            <div class="text-4xl mb-4">{{ $program['icon'] }}</div>
                            <h3 class="text-xl font-semibold text-blue-900 mb-3">{{ $program['title'] }}</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $program['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    برامجنا تغطي جميع القطاعات التي تبني المجتمع الفلسطيني
                </h2>

                @php
                    $sectors = [
                        [
                            'category' => 'القطاعات الاقتصادية والتنموية',
                            'color' => 'green',
                            'programs' => [
                                'برامج إدارة المشاريع الصغيرة والمتوسطة',
                                'التخطيط المالي وإدارة الأعمال',
                                'الزراعة الذكية والأمن الغذائي',
                                'الطاقة المتجددة وكفاءة الموارد',
                            ],
                        ],
                        [
                            'category' => 'قطاعات البنية التحتية والخدمات',
                            'color' => 'blue',
                            'programs' => [
                                'السلامة المهنية وإدارة المخاطر',
                                'التشغيل والصيانة الحديثة',
                                'التخطيط العمراني والإدارة البيئية',
                            ],
                        ],
                        [
                            'category' => 'القطاعات الاجتماعية والإنسانية',
                            'color' => 'purple',
                            'programs' => [
                                'تنمية مهارات العاملين في القطاع الصحي',
                                'برامج التمكين الاقتصادي للمرأة والشباب',
                                'مهارات التواصل وإدارة المبادرات المجتمعية',
                            ],
                        ],
                        [
                            'category' => 'القطاعات التعليمية والتدريبية',
                            'color' => 'orange',
                            'programs' => [
                                'تطوير مهارات المعلمين',
                                'التعليم المهني والتقني الحديث',
                                'برامج القيادة الأكاديمية',
                            ],
                        ],
                        [
                            'category' => 'القطاعات التقنية والمعرفية',
                            'color' => 'gray',
                            'programs' => [
                                'التحول الرقمي في المؤسسات',
                                'مهارات استخدام تكنولوجيا المعلومات',
                                'الأمن السيبراني وإدارة البيانات',
                            ],
                        ],
                    ];

                    $colorMap = [
                        'green' => 'bg-green-100 border-green-300 text-green-800',
                        'blue' => 'bg-blue-100 border-blue-300 text-blue-800',
                        'purple' => 'bg-purple-100 border-purple-300 text-purple-800',
                        'orange' => 'bg-orange-100 border-orange-300 text-orange-800',
                        'gray' => 'bg-gray-100 border-gray-300 text-gray-800',
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($sectors as $sector)
                        <div
                            class="border-2 rounded-lg p-6 transition-transform hover:scale-105 {{ $colorMap[$sector['color']] }}">
                            <h3 class="text-xl font-semibold mb-4">{{ $sector['category'] }}</h3>
                            <ul class="space-y-2">
                                @foreach ($sector['programs'] as $program)
                                    <li class="flex items-start">
                                        <span class="ml-2">•</span>
                                        <span>{{ $program }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    من الفكرة إلى الأثر... تدريب يصنع فرقًا
                </h2>

                @php
                    $methodologySteps = [
                        [
                            'step' => '1',
                            'title' => 'تحليل الاحتياجات التدريبية (TNA)',
                            'description' => 'تحديد فجوات الأداء بالتعاون مع المؤسسة.',
                        ],
                        [
                            'step' => '2',
                            'title' => 'تصميم البرنامج والمحتوى',
                            'description' => 'إعداد خطة تدريبية مرنة تتناسب مع أهداف الجهة المستفيدة.',
                        ],
                        [
                            'step' => '3',
                            'title' => 'التنفيذ التفاعلي',
                            'description' => 'استخدام تقنيات التعلم النشط، ودراسة الحالات الواقعية.',
                        ],
                        [
                            'step' => '4',
                            'title' => 'التقييم وقياس الأثر',
                            'description' => 'تطبيق نماذج تقييم متعددة (مثل نموذج كيركباتريك).',
                        ],
                        [
                            'step' => '5',
                            'title' => 'المتابعة والاستدامة',
                            'description' => 'تقديم تقارير مفصلة وتوصيات للتحسين المستمر.',
                        ],
                    ];
                @endphp

                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        @foreach ($methodologySteps as $step)
                            <div class="flex items-start space-x-6 space-x-reverse">
                                <div
                                    class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
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
                            "نقيس النجاح بمدى تطور أداء المشاركين والمؤسسات بعد التدريب، وليس بعدد الساعات التدريبية."
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    تجارب ناجحة... أثرها مستمر
                </h2>

                @php
                    $stories = [
                        [
                            'title' => 'برنامج تطوير القيادات الشابة في البلديات',
                            'impact' => 'تأهيل 50 قائد شاب في 15 بلدية محلية',
                            'quote' => 'ساعدنا البرنامج على تطوير مهارات القيادة واتخاذ القرارات الاستراتيجية.',
                        ],
                        [
                            'title' => 'تدريب النساء الرياديات في المشاريع الصغيرة',
                            'impact' => 'تمكين 100 امرأة ريادية في قطاع غزة والضفة الغربية',
                            'quote' => 'اكتسبت مهارات إدارية ومحاسبية ساعدتني في تطوير مشروعي الصغير.',
                        ],
                        [
                            'title' => 'برنامج التحول الرقمي للهيئات المحلية',
                            'impact' => 'رقمنة عمليات 20 هيئة محلية',
                            'quote' => 'التحول الرقمي ساهم في رفع كفاءة الخدمات المقدمة للمواطنين.',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($stories as $story)
                        <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6 text-center">
                            <div
                                class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-2xl mb-4 mx-auto">
                                ✓
                            </div>
                            <h3 class="text-xl font-semibold text-blue-900 mb-3">{{ $story['title'] }}</h3>
                            <p class="text-gold-600 font-semibold mb-4">{{ $story['impact'] }}</p>
                            <p class="text-gray-600 italic border-r-4 border-gold-500 pr-4">
                                "{{ $story['quote'] }}"
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="contact" class="py-16 px-4 bg-blue-900 text-white">
            <div class="container mx-auto max-w-4xl text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    هل ترغب بتطوير مهارات فريقك؟
                </h2>

                {{-- Contact Form --}}
                <div class="bg-white rounded-lg p-8 max-w-2xl mx-auto mt-8">
                    <form action="{{ route('traning.store') }}" method="POST" class="space-y-4 text-right">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="اسم الجهة"
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400" />

                            <select name="type"
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400">
                                <option selected disabled>نوع التدريب</option>
                                <option value="وجاهي">وجاهي</option>
                                <option value="أونلاين">أونلاين</option>
                                <option value="مدمج">مدمج</option>
                            </select>
                        </div>

                        <select name="sector"
                            class="w-full p-3 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400">
                            <option selected disabled>القطاع</option>
                            <option value="اقتصادي وتنموي">اقتصادي وتنموي</option>
                            <option value="بنية تحتية">بنية تحتية</option>
                            <option value="اجتماعي وإنساني">اجتماعي وإنساني</option>
                            <option value="تعليمي وتدريبي">تعليمي وتدريبي</option>
                            <option value="تقني ومعرفي">تقني ومعرفي</option>
                        </select>

                        <textarea name="message" placeholder="رسالة مختصرة" rows="4"
                            class="w-full p-3 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400"></textarea>

                        <button type="submit"
                            class="w-full bg-gold-500 hover:bg-gold-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                            اطلب برنامجًا تدريبيًا مخصصًا
                        </button>
                    </form>
                </div>

                {{-- Social Links --}}
                <div class="mt-8 flex justify-center text-2xl space-x-3">
                    <a href="#" class="hover:text-gold-400"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="hover:text-gold-400"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="hover:text-gold-400"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="hover:text-gold-400"><i class="fa-brands fa-instagram"></i></a>
                </div>

                <p class="mt-6 text-blue-200">
                    تابع قسم التدريب في مجموعة النور لتتعرف على أحدث البرامج والفرص التطويرية.
                </p>
            </div>
        </section>


    </div>
@endsection
