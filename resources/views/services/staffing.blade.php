@extends('layout.master') {{-- Assuming you have a main layout --}}

@section('content')
    <div class="min-h-screen bg-white">
        <section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-20 px-4">
            <div class="container mx-auto max-w-6xl text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    نصل الكفاءات بفرص النجاح
                </h1>
                <p class="text-xl md:text-2xl mb-8 leading-relaxed max-w-4xl mx-auto">
                    في مجموعة النور الاستشارية، نؤمن أن النجاح المؤسسي يبدأ بالإنسان.
                    نوفّر حلولًا متكاملة في التوظيف وإدارة الموارد البشرية لمساعدة المؤسسات
                    على اختيار الكفاءات المناسبة، وتطوير فرق العمل، وبناء أنظمة تشغيل بشرية مرنة وفعّالة.
                </p>
                <a href="#contact"
                    class="inline-block bg-gold-500 hover:bg-gold-600 text-white font-semibold py-3 px-6 rounded-lg text-lg transition">
                    قدّم طلب توظيف أو اطلب كفاءات الآن
                </a>
            </div>
        </section>

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُعيد تعريف التوظيف... بمنهجية ذكية ترتكز على الكفاءة والملاءمة
                </h2>

                <div class="grid grid-cols-1 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            لا نبحث فقط عن "شاغر ووظيفة"، بل عن تناغم بين المهارات والأهداف التنظيمية.
                            تجمع مجموعة النور بين التحليل المهني والاختيار المبني على البيانات لضمان
                            توظيف مستدام وفعّال، سواء لمؤسسة صغيرة أو جهة حكومية كبرى.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="flex  gap-3 flex-col md:flex-row justify-between items-center">
                            @php
                                $recruitmentCycle = [
                                    [
                                        'step' => 1,
                                        'title' => 'التحليل الوظيفي',
                                        'description' => 'فهم احتياجات المنظمة',
                                    ],
                                    [
                                        'step' => 2,
                                        'title' => 'البحث والترشيح',
                                        'description' => 'استقطاب الكفاءات المناسبة',
                                    ],
                                    ['step' => 3, 'title' => 'المقابلات', 'description' => 'تقييم المهارات والملاءمة'],
                                    ['step' => 4, 'title' => 'التوظيف', 'description' => 'إتمام عملية التعيين'],
                                    [
                                        'step' => 5,
                                        'title' => 'المتابعة والتقييم',
                                        'description' => 'ضمان التكيف والاستمرارية',
                                    ],
                                ];
                            @endphp

                            @foreach ($recruitmentCycle as $item)
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
                        <div class="absolute top-8 left-8 right-8 h-0.5 bg-blue-200 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    حلول شاملة لإدارة الموارد البشرية وتوظيف الكفاءات
                </h2>

                @php
                    $services = [
                        [
                            'icon' => '🎯',
                            'title' => 'التوظيف المهني',
                            'description' =>
                                'البحث عن الكفاءات المهنية المتخصصة في مختلف القطاعات، عبر أساليب تقييم دقيقة واختبارات ملاءمة.',
                        ],
                        [
                            'icon' => '📝',
                            'title' => 'العقود المرنة',
                            'description' =>
                                'حلول تشغيل قصيرة أو مؤقتة أو بدوام جزئي لتلبية احتياجات المشاريع الموسمية أو الطارئة.',
                        ],
                        [
                            'icon' => '🏢',
                            'title' => 'إدارة الموارد البشرية بالوكالة',
                            'description' =>
                                'تولّي إدارة الموارد البشرية بالنيابة عن المؤسسات، بما يشمل الرواتب، السياسات، التدريب، والتطوير.',
                        ],
                        [
                            'icon' => '👨‍💼',
                            'title' => 'توفير الخبراء والاستشاريين',
                            'description' =>
                                'ربط المؤسسات بخبراء محليين ودوليين في المجالات التنموية، التقنية، والإدارية.',
                        ],
                        [
                            'icon' => '👥',
                            'title' => 'بناء فرق متخصصة',
                            'description' => 'تشكيل فرق جاهزة للانخراط في مشاريع محددة (إغاثية، تعليمية، هندسية...).',
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'التوظيف السريع',
                            'description' =>
                                'خدمات عاجلة لتعبئة الشواغر في فترات قصيرة باستخدام قاعدة بيانات النور الواسعة.',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($services as $service)
                        <div
                            class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow">
                            <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                            <h3 class="text-xl font-semibold text-blue-900 mb-3">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">{{ $service['description'] }}</p><button
                                class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اطلب
                                الخدمة الآن</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نوفّر الكفاءات لجميع القطاعات التي تنهض بفلسطين
                </h2>

                @php
                    $sectors = [
                        [
                            'category' => 'القطاعات الاقتصادية والإنتاجية',
                            'color' => 'green',
                            'examples' => [
                                'الأنشطة التجارية والخدمية',
                                'القطاع الصناعي',
                                'القطاع الزراعي والثروة الحيوانية والسمكية',
                                'قطاع الطاقة والكهرباء',
                                'قطاع المصارف والتأمين والأوراق المالية',
                            ],
                        ],
                        [
                            'category' => 'قطاعات البنية التحتية والخدمات',
                            'color' => 'blue',
                            'examples' => [
                                'الإنشاءات والبناء',
                                'النقل والمواصلات',
                                'الموارد المائية والصرف الصحي',
                                'قطاع البيئة',
                            ],
                        ],
                        [
                            'category' => 'القطاعات الاجتماعية والتعليمية',
                            'color' => 'purple',
                            'examples' => [
                                'القطاع الصحي',
                                'قطاع التعليم والتدريب المهني والتقني',
                                'قطاع المرأة والطفل',
                                'الأشخاص ذوي الإعاقة وكبار السن',
                            ],
                        ],
                        [
                            'category' => 'القطاعات الحكومية والإدارية',
                            'color' => 'orange',
                            'examples' => ['البلديات والسلطات المحلية', 'القطاع العام', 'قطاع الأمن العام'],
                        ],
                        [
                            'category' => 'القطاعات التقنية والمعرفية',
                            'color' => 'gray',
                            'examples' => ['الاتصالات وتكنولوجيا المعلومات', 'السياحة والنشاط الفندقي'],
                        ],
                    ];

                    $colorMap = [
                        'green' => 'bg-green-50 border-green-200 text-green-800',
                        'blue' => 'bg-blue-50 border-blue-200 text-blue-800',
                        'purple' => 'bg-purple-50 border-purple-200 text-purple-800',
                        'orange' => 'bg-orange-50 border-orange-200 text-orange-800',
                        'gray' => 'bg-gray-50 border-gray-200 text-gray-800',
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($sectors as $sector)
                        <div
                            class="border-2 rounded-lg p-6 {{ $colorMap[$sector['color']] }} transition-transform hover:scale-105">
                            <h3 class="text-xl font-semibold mb-4">{{ $sector['category'] }}</h3>
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

                <div class="mt-12 grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg border-r-4 border-gold-500">
                        <h4 class="font-semibold text-blue-900 mb-3">مثال تطبيقي للقطاع الصحي:</h4>
                        <p class="text-gray-600">
                            نوفّر كفاءات للقطاع الصحي تشمل الأطباء، الممرضين، ومديري المشاريع الصحية.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border-r-4 border-gold-500">
                        <h4 class="font-semibold text-blue-900 mb-3">مثال تطبيقي للقطاع التعليمي:</h4>
                        <p class="text-gray-600">
                            ندعم قطاع التعليم عبر توفير المدربين والمشرفين الفنيين.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    اختيار الكفاءة المناسبة... بالأسلوب العلمي المناسب
                </h2>

                @php
                    $methodologySteps = [
                        [
                            'step' => '1',
                            'title' => 'تحليل احتياجات الجهة الطالبة',
                            'description' => 'فهم المتطلبات الوظيفية والتنظيمية',
                        ],
                        [
                            'step' => '2',
                            'title' => 'الإعلان واستقطاب المرشحين',
                            'description' => 'الوصول إلى الكفاءات عبر المنصات المناسبة',
                        ],
                        [
                            'step' => '3',
                            'title' => 'فرز الملفات والاختبارات',
                            'description' => 'إجراء المقابلات والاختبارات التخصصية',
                        ],
                        [
                            'step' => '4',
                            'title' => 'الاختيار النهائي والتنسيق',
                            'description' => 'إتمام عملية التوظيف والتنسيق',
                        ],
                        [
                            'step' => '5',
                            'title' => 'متابعة ما بعد التعيين',
                            'description' => 'ضمان التكيف الوظيفي والاستمرارية',
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
                            "كل عملية توظيف هي مشروع نجاح نسعى لتحقيق أثره داخل المؤسسة."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
                    نُفاخر بشراكاتنا التي بنت فرصًا حقيقية
                </h2>

                @php
                    $stories = [
                        [
                            'title' => 'توفير 100 موظف في مشروع بنية تحتية',
                            'client' => 'مشروع ممول دوليًا',
                            'result' => 'إكمال المشروع ضمن الجدول الزمني',
                            'quote' => 'ساعدنا فريق النور في توفير الكفاءات المناسبة في الوقت المناسب.',
                        ],
                        [
                            'title' => 'تعاقد مع وزارة التربية',
                            'client' => 'وزارة التربية والتعليم',
                            'result' => 'توظيف مدربين مهنيين مؤهلين',
                            'quote' => 'الكفاءات التي وفرتها النور ساهمت في تطوير برامجنا التدريبية.',
                        ],
                        [
                            'title' => 'تشغيل خبراء طاقة',
                            'client' => 'مشروع تنمية مستدامة',
                            'result' => 'تنفيذ مشروع الطاقة المتجددة بنجاح',
                            'quote' => 'الخبراء الذين قدمتهم النور كانوا على أعلى مستوى من الاحترافية.',
                        ],
                        [
                            'title' => 'تعيين فريق إداري متكامل',
                            'client' => 'إحدى البلديات المحلية',
                            'result' => 'تحسين كفاءة العمليات الإدارية',
                            'quote' => 'الفريق الإداري ساهم في رفع أداء البلدية بشكل ملحوظ.',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 gap-8">
                    @foreach ($stories as $story)
                        <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
                            <div class="flex items-start space-x-4 space-x-reverse mb-4">
                                <div
                                    class="m-0 ml-2 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                    ✓
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-900">{{ $story['title'] }}</h3>
                                    <p class="text-gold-600 font-semibold">{{ $story['client'] }}</p>
                                </div>
                            </div>

                            <p class="text-gray-600 mb-4">{{ $story['result'] }}</p>
                            <p class="text-gray-700 italic border-r-4 border-gold-500 pr-4">
                                "{{ $story['quote'] }}"
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

      <section id="contact" x-data="{ activeTab: 'individuals' }" class="py-16 px-4 bg-blue-900 text-white">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
            هل تبحث عن كفاءات؟ أم عن فرصة عمل؟
        </h2>

        {{-- Tab Navigation --}}
        <div class="flex justify-center mb-8">
            <div class="bg-white rounded-lg p-1 flex">
                <button
                    @click="activeTab = 'individuals'"
                    :class="activeTab === 'individuals' ? 'bg-gold-500 text-black border-2' : 'text-blue-900 hover:bg-blue-50'"
                    class="px-6 py-3 rounded-md font-semibold transition-colors"
                >
                    للأفراد
                </button>
                <button
                    @click="activeTab = 'companies'"
                    :class="activeTab === 'companies' ? 'bg-gold-500 text-black border-2' : 'text-blue-900 hover:bg-blue-50'"
                    class="px-6 py-3 rounded-md font-semibold transition-colors"
                >
                    للمؤسسات
                </button>
            </div>
        </div>

        {{-- Forms --}}
        <div class="bg-white rounded-lg p-8">
            {{-- Individuals Form --}}
            <div x-show="activeTab === 'individuals'" x-transition class="text-right">
                <h3 class="text-2xl font-bold text-blue-900 mb-6">قدّم سيرتك الذاتية الآن</h3>
                <form action="{{ route('staffing.client.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="الاسم الكامل" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                        <input type="email" name="email" placeholder="البريد الإلكتروني" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="tel" name="phone" placeholder="رقم الجوال" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                        <select name="sector" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            <option value="">القطاع</option>
                            <option value="اقتصادي وإنتاجي">اقتصادي وإنتاجي</option>
                            <option value="بنية تحتية وخدمات">بنية تحتية وخدمات</option>
                            <option value="اجتماعي وتعليمي">اجتماعي وتعليمي</option>
                            <option value="حكومي وإداري">حكومي وإداري</option>
                            <option value="تقني ومعرفي">تقني ومعرفي</option>
                        </select>
                    </div>
                    <select name="job_type" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                        <option value="">نوع الوظيفة المطلوبة</option>
                        <option value="توظيف دائم">توظيف دائم</option>
                        <option value="عقد مرن">عقد مرن</option>
                        <option value="عمل عن بعد">عمل عن بعد</option>
                        <option value="عمل جزئي">عمل جزئي</option>
                    </select>
                    <textarea name="message" placeholder="رسالة مختصرة عن خبراتك وتطلعاتك" rows="4" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                        <p class="text-gray-600 mb-2">ارفع سيرتك الذاتية</p>
                        <input type="file" name="file" class="w-full" accept=".pdf,.doc,.docx" required>
                        <p class="text-sm text-gray-500 mt-2">PDF, DOC, DOCX (حتى 5MB)</p>
                    </div>
                    <button type="submit" class="w-full py-3 px-6 bg-gold-500 text-black font-bold rounded-lg text-lg">
                        إرسال الطلب
                    </button>
                </form>
            </div>

            {{-- Companies Form --}}
            <div x-show="activeTab === 'companies'" x-transition class="text-right">
                <h3 class="text-2xl font-bold text-blue-900 mb-6">اطلب مرشحين متخصصين</h3>
                <form action="{{ route('staffing.company.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" name="company" placeholder="اسم المؤسسة" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                        <input type="text" name="general_manger" placeholder="اسم المسؤول" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="email" name="email" placeholder="البريد الإلكتروني" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                        <input type="tel" name="phone" placeholder="رقم الجوال" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <select name="sector" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            <option value="">القطاع</option>
                            <option value="اقتصادي وإنتاجي">اقتصادي وإنتاجي</option>
                            <option value="بنية تحتية وخدمات">بنية تحتية وخدمات</option>
                            <option value="اجتماعي وتعليمي">اجتماعي وتعليمي</option>
                            <option value="حكومي وإداري">حكومي وإداري</option>
                            <option value="تقني ومعرفي">تقني ومعرفي</option>
                        </select>
                        <select name="service_type" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required>
                            <option value="">نوع الخدمة المطلوبة</option>
                            <option value="توظيف مهني">توظيف مهني</option>
                            <option value="عقود مرنة">عقود مرنة</option>
                            <option value="إدارة موارد بشرية">إدارة موارد بشرية</option>
                            <option value="توفير خبراء">توفير خبراء</option>
                            <option value="بناء فرق متخصصة">بناء فرق متخصصة</option>
                            <option value="توظيف سريع">توظيف سريع</option>
                        </select>
                    </div>
                    <textarea name="description" placeholder="وصف الوظيفة والمتطلبات" rows="4" class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>
                    <button type="submit" class="w-full py-3 px-6 bg-gold-500 text-black font-bold rounded-lg text-lg">
                        طلب كفاءات
                    </button>
                </form>
            </div>
        </div>

        {{-- Additional Resources --}}
        <div class="mt-8 text-center">
            <div class="flex flex-col gap-3 justify-center  mb-6">
                <a href="#" class="text-blue-200 hover:text-white underline">
                    تحميل نموذج طلب كفاءات (PDF)
                </a>
                <a href="#" class="text-blue-200 hover:text-white underline">
                    تحميل دليل خدمات التوظيف
                </a>
            </div>

            <div class="flex justify-center gap-3 text-blue-200 text-2xl">
                <span class="cursor-pointer hover:text-white"><i class="fa-brands fa-facebook"></i></span>
                <span class="cursor-pointer hover:text-white"><i class="fa-brands fa-linkedin"></i></span>
                <span class="cursor-pointer hover:text-white"><i class="fa-brands fa-x-twitter"></i></span>
                <span class="cursor-pointer hover:text-white"><i class="fa-brands fa-instagram"></i></span>
                <span class="cursor-pointer hover:text-white"><i class="fa-brands fa-youtube"></i></span>
            </div>

            <p class="mt-6 text-blue-200">
                تابع قسم التوظيف في مجموعة النور لتعرف أحدث الفرص والكفاءات.
            </p>
        </div>
    </div>
</section>


    </div>
@endsection
