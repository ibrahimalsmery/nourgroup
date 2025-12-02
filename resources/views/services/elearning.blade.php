@extends('layout.master')

@section('content')
    <div class="min-h-screen bg-white">
        <section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-20 px-4">
            <div class="container mx-auto max-w-6xl text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">التعليم الرقمي... استثمار في المستقبل</h1>
                <p class="text-xl md:text-2xl mb-8 leading-relaxed max-w-4xl mx-auto">في مجموعة النور الاستشارية، نؤمن أن
                    التعليم الرقمي هو أحد أعمدة التنمية المستدامة، وركيزة أساسية لبناء اقتصاد المعرفة في فلسطين. نقود مشاريع
                    استثمارية مبتكرة في مجال تكنولوجيا التعليم (EdTech) تجمع بين المحتوى التربوي، الأدوات التقنية، والتدريب
                    التفاعلي.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center"><button
                        class="font-semibold rounded-lg transition-colors duration-200 bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-4 text-lg ">استثمر
                        في التعليم الرقمي معنا</button>
                        <a href="#contact"
                        class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-4 text-lg bg-white text-blue-900 hover:bg-blue-50">اكتشف
                        منصتنا التعليمية</a></div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">نحو تعليم فلسطيني رقمي مرن، شامل،
                    ومستدام</h2>
                <div class="grid grid-cols-1 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">تسعى مجموعة النور إلى جعل التحول الرقمي في
                            التعليم استثمارًا مجتمعيًا يُسهم في تمكين الأفراد والمؤسسات من الوصول إلى المعرفة بسهولة. نركز
                            على بناء حلول تعليمية رقمية تجمع بين التقنية والمحتوى والتمويل والشراكة.</p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-center"><span class="ml-2 text-gold-600">✓</span>دعم جودة التعليم وتحسين
                                مخرجاته</li>
                            <li class="flex items-center"><span class="ml-2 text-gold-600">✓</span>توسيع الوصول إلى التعلم
                                في المناطق النائية</li>
                            <li class="flex items-center"><span class="ml-2 text-gold-600">✓</span>تحفيز سوق عمل قائم على
                                المهارات الرقمية</li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="space-y-4">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto bg-blue-100 text-blue-800 text-xl font-bold">
                                1</div>
                            <h4 class="font-semibold text-blue-900">المحتوى</h4>
                            <p class="text-sm text-gray-600">مواد تعليمية تفاعلية مبنية على المناهج الفلسطينية</p>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto bg-yellow-100 text-yellow-800 text-xl font-bold">
                                2</div>
                            <h4 class="font-semibold text-blue-900">التكنولوجيا</h4>
                            <p class="text-sm text-gray-600">منصات وتطبيقات تعليمية مبتكرة وسهلة الاستخدام</p>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto bg-green-100 text-green-800 text-xl font-bold">
                                3</div>
                            <h4 class="font-semibold text-blue-900">الاستثمار</h4>
                            <p class="text-sm text-gray-600">شراكات استثمارية مستدامة لضمان استمرارية المشاريع</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">حلول متكاملة لبناء منظومة تعليم
                    رقمي فعّال</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">🖥️</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">تطوير المنصات التعليمية الرقمية</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">تصميم وإدارة منصات تعليمية تفاعلية مثل "افتح
                            يا سمسم – تعلم! مدرستي في جوالي" لتمكين التعليم الذاتي والمدرسي.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">تحليل الاستثمار في التعليم الرقمي</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">إعداد دراسات جدوى اقتصادية وتقنية لمشاريع
                            EdTech في السوق الفلسطيني.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">🎬</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">إنتاج المحتوى التعليمي الرقمي</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">تطوير مواد تفاعلية (فيديوهات، أنشطة،
                            تطبيقات) باللغتين العربية والإنجليزية، تراعي المناهج المحلية.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">🔄</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">التحول الرقمي للمؤسسات التعليمية</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">دعم المدارس والجامعات للتحول إلى بيئة رقمية
                            متكاملة من حيث الأنظمة والبنية التحتية.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">👨&zwj;🏫</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">تدريب المعلمين والمتخصصين</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">بناء قدرات التربويين في تصميم الدروس
                            التفاعلية، إدارة الفصول الافتراضية، وتقييم الطلبة إلكترونيًا.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                    <div
                        class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center hover:shadow-lg transition-shadow h-full flex flex-col">
                        <div class="text-4xl mb-4">🤝</div>
                        <h3 class="text-xl font-semibold text-blue-900 mb-3">الشراكات الاستثمارية في EdTech</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 flex-grow">تسهيل الربط بين المستثمرين والمشاريع
                            التعليمية الرقمية الناشئة، ودعم استدامة المبادرات.</p><button
                            class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 text-sm ">اكتشف
                            المزيد</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">نُحدث أثرًا في كل قطاع يرتبط
                    بالمعرفة</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg p-6 border-r-4 border-gold-500">
                        <div class="flex items-center space-x-4 space-x-reverse mb-4">
                            <div class="m-0 ml-2 text-3xl">🎓</div>
                            <h3 class="text-xl font-semibold text-blue-900">القطاع التعليمي والتدريبي</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-start text-gray-600"><span
                                    class="ml-2 text-gold-600">•</span><span>المدارس والمؤسسات التعليمية</span></li>
                            <li class="flex items-start text-gray-600"><span
                                    class="ml-2 text-gold-600">•</span><span>الجامعات ومراكز التعليم العالي</span></li>
                            <li class="flex items-start text-gray-600"><span class="ml-2 text-gold-600">•</span><span>مؤسسات
                                    التدريب المهني والتقني</span></li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg p-6 border-r-4 border-gold-500">
                        <div class="flex items-center space-x-4 space-x-reverse mb-4">
                            <div class="m-0 ml-2 text-3xl">🏛️</div>
                            <h3 class="text-xl font-semibold text-blue-900">القطاع الحكومي والإداري</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-start text-gray-600"><span class="ml-2 text-gold-600">•</span><span>وزارات
                                    التعليم، التنمية، والعمل</span></li>
                            <li class="flex items-start text-gray-600"><span
                                    class="ml-2 text-gold-600">•</span><span>البلديات والسلطات المحلية (للتدريب الإلكتروني
                                    للموظفين)</span></li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg p-6 border-r-4 border-gold-500">
                        <div class="flex items-center space-x-4 space-x-reverse mb-4">
                            <div class="m-0 ml-2 text-3xl">💼</div>
                            <h3 class="text-xl font-semibold text-blue-900">القطاع الخاص</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-start text-gray-600"><span
                                    class="ml-2 text-gold-600">•</span><span>الشركات والمؤسسات التي تستثمر في التعليم كجزء
                                    من مسؤوليتها المجتمعية (CSR)</span></li>
                            <li class="flex items-start text-gray-600"><span class="ml-2 text-gold-600">•</span><span>شركات
                                    التقنية وتكنولوجيا المعلومات (ICT)</span></li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg p-6 border-r-4 border-gold-500">
                        <div class="flex items-center space-x-4 space-x-reverse mb-4">
                            <div class="m-0 ml-2 text-3xl">🌍</div>
                            <h3 class="text-xl font-semibold text-blue-900">المنظمات غير الحكومية والدولية</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-start text-gray-600"><span
                                    class="ml-2 text-gold-600">•</span><span>المنظمات التنموية المهتمة بالالتعليم والتقنية
                                    والابتكار</span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <p class="text-lg text-gray-700">كل قطاع لديه فرصة استثمارية في التعليم الرقمي — من التطوير إلى التشغيل
                        إلى التوسّع</p>
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">من الفكرة إلى المنصة... ثم إلى
                    التعلّم الفعّال</h2>
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6 space-x-reverse">
                            <div
                                class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                1</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900 mb-2">تحليل الاحتياج التعليمي والتقني</h3>
                                <p class="text-gray-600 leading-relaxed">تحديد الفئة المستهدفة وأهداف التعلم</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 space-x-reverse">
                            <div
                                class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                2</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900 mb-2">تصميم الحلول الرقمية</h3>
                                <p class="text-gray-600 leading-relaxed">تحديد نوع المنصة، التكنولوجيا، ونموذج العمل</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 space-x-reverse">
                            <div
                                class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                3</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900 mb-2">إنتاج المحتوى وتجربة المستخدم</h3>
                                <p class="text-gray-600 leading-relaxed">تطوير دروس رقمية تفاعلية متوافقة مع السياق المحلي
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 space-x-reverse">
                            <div
                                class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                4</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900 mb-2">التشغيل والإطلاق التجريبي</h3>
                                <p class="text-gray-600 leading-relaxed">تشغيل المنصة ومتابعة الأداء الفني والتربوي</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 space-x-reverse">
                            <div
                                class="m-0 ml-3 flex-shrink-0 w-12 h-12 bg-gold-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                5</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900 mb-2">القياس والتوسع</h3>
                                <p class="text-gray-600 leading-relaxed">تقييم الأثر التربوي والاستثماري، وتحسين التجربة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 p-6 bg-blue-50 rounded-lg border-r-4 border-gold-500">
                        <p class="text-lg text-blue-800 text-center font-semibold">"نحو بيئة تعليمية رقمية فلسطينية قادرة
                            على النمو والتأثير."</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gradient-to-br from-blue-50 to-gold-50">
            <div class="container mx-auto max-w-6xl">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">منصة "افتح يا سمسم – تعلم! مدرستي في
                            جوالي"</h2>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">منصة "افتح يا سمسم" هي مبادرة تعليم رقمي من
                            تطوير مجموعة النور، تهدف إلى إتاحة تعلم ممتع وتفاعلي للأطفال والطلبة عبر الهواتف الذكية والأجهزة
                            اللوحية.</p>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-center"><span class="ml-3 text-gold-600 text-xl">✓</span><span
                                    class="text-gray-700">دروس قصيرة تفاعلية في القراءة، العلوم، والمهارات الحياتية</span>
                            </div>
                            <div class="flex items-center"><span class="ml-3 text-gold-600 text-xl">✓</span><span
                                    class="text-gray-700">واجهات استخدام سهلة ومناسبة لكل الأعمار</span></div>
                            <div class="flex items-center"><span class="ml-3 text-gold-600 text-xl">✓</span><span
                                    class="text-gray-700">أدوات للمعلمين لتتبع أداء الطلبة</span></div>
                            <div class="flex items-center"><span class="ml-3 text-gold-600 text-xl">✓</span><span
                                    class="text-gray-700">محتوى باللغة العربية مخصص للسياق الفلسطيني</span></div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4"><button
                                class="font-semibold rounded-lg transition-colors duration-200 bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-4 text-lg ">جرّب
                                المنصة الآن</button><button
                                class="font-semibold rounded-lg transition-colors duration-200 border border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-4 text-lg ">سجّل
                                كشريك أو داعم استثماري</button></div>
                        <div class="mt-6">
                            <p class="text-gray-700 mb-3 font-semibold">حمل التطبيق الآن:</p>
                            <div class="flex gap-2 space-x-reverse"><a href="#"
                                    class="flex items-center space-x-0 space-x-reverse bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                                    <span class="ml-3">
                                        <i class="fa-brands fa-google-play text-4xl"></i>
                                    </span>
                                    <div class="text-right">
                                        <div class="text-xs">حمله من</div>
                                        <div class="font-semibold">Google Play</div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex items-center space-x-0 space-x-reverse bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                                    <span class="ml-3">
                                        <i class="fa-brands fa-apple text-4xl"></i>
                                    </span>
                                    <div class="text-right">
                                        <div class="text-xs">حمله من</div>
                                        <div class="font-semibold">App Store</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-2xl p-8 shadow-xl inline-block">
                            <div
                                class="w-64 h-96 bg-gradient-to-b from-blue-400 to-blue-600 rounded-2xl mx-auto flex items-center justify-center">
                                <div class="text-white text-center">
                                    <div class="text-4xl mb-4">📱</div>
                                    <p class="font-semibold">تعلم! مدرستي في جوالي</p>
                                    <p class="text-sm mt-2">منصة التعليم الرقمي</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">استثمارات أحدثت فرقًا حقيقيًا
                </h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                        <div class="flex items-start space-x-4 space-x-reverse mb-4">
                            <div
                                class="m-0 ml-3 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                ✓</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900">مشروع رقمنة مدارس القرى النائية</h3>
                                <p class="text-gold-600 font-semibold">وزارة التربية والتعليم</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-1">الأثر:</h4>
                                <p class="text-gray-600 text-sm">وصول التعليم الرقمي لـ 50 مدرسة في المناطق النائية</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gold-600 mb-1">المستفيدون:</h4>
                                <p class="text-gold-700 text-sm font-semibold">5,000+ طالب وطالبة</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                        <div class="flex items-start space-x-4 space-x-reverse mb-4">
                            <div
                                class="m-0 ml-3 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                ✓</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900">تعاون مع وزارة التربية والتعليم</h3>
                                <p class="text-gold-600 font-semibold">وزارة التربية والتعليم</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-1">الأثر:</h4>
                                <p class="text-gray-600 text-sm">تدريب 500 معلم على استخدام المنصات الرقمية</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gold-600 mb-1">المستفيدون:</h4>
                                <p class="text-gold-700 text-sm font-semibold">20,000+ طالب مستفيد</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                        <div class="flex items-start space-x-4 space-x-reverse mb-4">
                            <div
                                class="m-0 ml-3 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                ✓</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900">إنتاج محتوى رقمي لمبادرة تعليمية</h3>
                                <p class="text-gold-600 font-semibold">منظمة دولية للتنمية</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-1">الأثر:</h4>
                                <p class="text-gray-600 text-sm">تطوير 100 درس تفاعلي باللغة العربية</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gold-600 mb-1">المستفيدون:</h4>
                                <p class="text-gold-700 text-sm font-semibold">10,000+ مستخدم</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                        <div class="flex items-start space-x-4 space-x-reverse mb-4">
                            <div
                                class="m-0 ml-3 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-xl">
                                ✓</div>
                            <div>
                                <h3 class="text-xl font-semibold text-blue-900">شراكة مع شركة تقنية ناشئة</h3>
                                <p class="text-gold-600 font-semibold">شركة EdTech ناشئة</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-1">الأثر:</h4>
                                <p class="text-gray-600 text-sm">تطوير تطبيق تعليمي مبتكر للرياضيات</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gold-600 mb-1">المستفيدون:</h4>
                                <p class="text-gold-700 text-sm font-semibold">3,000+ طالب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-6xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">تواصل مع مجتمع التعليم الرقمي
                </h2>
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold text-center text-blue-800 mb-6">آخر منشوراتنا على وسائل التواصل</h3>
                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                            <div class="flex items-center space-x-3 space-x-reverse mb-3"><i
                                    class="fa-brands fa-linkedin text-4xl"></i>
                            </div>
                            <p class="text-gray-700 mb-4">تقرير جديد: 5 اتجاهات ستؤثر على نمو الشركات الفلسطينية في 2025
                            </p><a href="#" class="text-gold-600 hover:text-gold-700 font-semibold">اقرأ المزيد
                                →</a>
                        </div>
                        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                            <div class="flex items-center space-x-3 space-x-reverse mb-3">
                                <i class="fa-brands fa-instagram text-4xl"></i>
                            </div>
                            <p class="text-gray-700 mb-4">إنفوغرافيك: كيف تبني شراكات استراتيجية ناجحة</p><a
                                href="#" class="text-gold-600 hover:text-gold-700 font-semibold">اقرأ المزيد →</a>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center">
                        <div class="text-4xl mb-4"><i class="fa-brands fa-linkedin"></i></div>
                        {{-- <h3 class="text-xl font-semibold text-blue-900 mb-3">LinkedIn</h3> --}}
                        <p class="text-gray-600 mb-2 font-semibold">منصة استثمارية موجهة للشركاء والممولين</p>
                        <p class="text-gray-500 text-sm">تقارير الأثر، قصص الشراكات، مقاطع من المشاريع، تحليلات سوق EdTech
                        </p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center">
                        <div class="text-4xl mb-4"><i class="fa-brands fa-facebook"></i></div>
                        {{-- <h3 class="text-xl font-semibold text-blue-900 mb-3">Facebook</h3> --}}
                        <p class="text-gray-600 mb-2 font-semibold">تفاعل مجتمعي مع المدارس والأهالي</p>
                        <p class="text-gray-500 text-sm">منشورات تعريفية بالمنصة، صور أنشطة ميدانية، بث مباشر عن التعليم
                            الرقمي</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center">
                        <div class="text-4xl mb-4"><i class="fa-brands fa-instagram"></i></div>
                        {{-- <h3 class="text-xl font-semibold text-blue-900 mb-3">Instagram</h3> --}}
                        <p class="text-gray-600 mb-2 font-semibold">محتوى بصري جذاب وممتع</p>
                        <p class="text-gray-500 text-sm">صور وفيديوهات للطلبة أثناء استخدام التطبيق، "نصيحة رقمية"،
                            اقتباسات تحفيزية</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center">
                        <div class="text-4xl mb-4"><i class="fa-brands fa-x-twitter"></i></div>
                        {{-- <h3 class="text-xl font-semibold text-blue-900 mb-3">X (Twitter)</h3> --}}
                        <p class="text-gray-600 mb-2 font-semibold">منصة الأخبار والتعليم السريع</p>
                        <p class="text-gray-500 text-sm">تغريدات عن المبادرات، الروابط للأبحاث، إحصاءات التعليم الرقمي</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 text-center">
                        <div class="text-4xl mb-4"><i class="fa-brands fa-youtube"></i></div>
                        {{-- <h3 class="text-xl font-semibold text-blue-900 mb-3">YouTube</h3> --}}
                        <p class="text-gray-600 mb-2 font-semibold">منصة المحتوى التعليمي الطويل</p>
                        <p class="text-gray-500 text-sm">دروس قصيرة من المنصة، مقابلات مع مطوري المحتوى، فيديوهات تعريفية
                            بالمشاريع</p>
                    </div>
                </div>
                <div class="text-center p-8 bg-blue-50 rounded-2xl">
                    <h3 class="text-2xl font-semibold text-blue-900 mb-4">انضم إلى مجتمع التعليم الرقمي</h3>
                    <p class="text-gray-600 mb-6 max-w-2xl mx-auto">تابع مبادرات التعليم الرقمي في مجموعة النور وكن جزءًا
                        من التحول التعليمي</p>
                    <div class="flex justify-center space-x-6 text-2xl mb-4"><a href="#"
                            class="text-blue-600 hover:text-blue-800 transition-colors" title="LinkedIn"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors" title="Facebook"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors"
                            title="Instagram"><i class="fa-brands fa-instagram"></i></a><a href="#"
                            class="text-blue-600 hover:text-blue-800 transition-colors" title="Twitter"><i
                                class="fa-brands fa-x-twitter"></i></a><a href="#"
                            class="text-blue-600 hover:text-blue-800 transition-colors" title="YouTube"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="flex justify-center space-x-4  text-sm text-gray-500">
                        <span>#تعليم_رقمي_النور</span><span>#AlNour_EdTech</span><span>#تعلم_مدرستي_في_جوالي</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="py-16 px-4 bg-blue-900 text-white">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-6">هل ترغب في أن تكون جزءًا من التحول الرقمي في
                    التعليم؟</h2>
                <p class="text-xl text-center text-blue-200 mb-12 max-w-2xl mx-auto">سواء كنت مؤسسة تعليمية، مستثمرًا، أو
                    جهة مانحة، يمكنك الانضمام إلينا في بناء مستقبل التعليم في فلسطين.</p>
                <div class="bg-white rounded-lg p-8">
                    <form action="{{route('elearning.store')}}" method="POST" class="space-y-6 text-right">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div><label class="block text-gray-700 mb-2">الاسم الكامل</label><input
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required=""
                                    type="text" value="" name="name"></div>
                            <div><label class="block text-gray-700 mb-2">البريد الإلكتروني</label><input
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required=""
                                    type="email" value="" name="email"></div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div><label class="block text-gray-700 mb-2">رقم الجوال</label><input
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" required=""
                                    type="tel" value="" name="phone"></div>
                            <div><label class="block text-gray-700 mb-2">اسم المؤسسة/الجهة</label><input
                                    class="w-full p-3 border border-gray-300 rounded-lg text-gray-800" type="text"
                                    value="" name="company"></div>
                        </div>
                        <div><label class="block text-gray-700 mb-2">مجال الاهتمام</label><select name="interest"
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800">
                                <option value="">اختر مجال اهتمامك</option>
                                <option value="investment">الاستثمار في التعليم الرقمي</option>
                                <option value="partnership">الشراكة في المشاريع</option>
                                <option value="platform">استخدام المنصة التعليمية</option>
                                <option value="consultation">استشارة في التحول الرقمي</option>
                                <option value="training">تدريب المعلمين</option>
                                <option value="content">إنتاج المحتوى التعليمي</option>
                            </select></div>
                        <div><label class="block text-gray-700 mb-2">الرسالة</label>
                            <textarea name="message" rows="4" placeholder="أخبرنا عن اهتمامك بالتعليم الرقمي وكيف يمكننا التعاون..."
                                class="w-full p-3 border border-gray-300 rounded-lg text-gray-800"></textarea>
                        </div><button
                            class="font-semibold rounded-lg transition-colors duration-200 bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-4 text-lg w-full"
                            type="submit">تواصل معنا للاستثمار في التعليم الرقمي</button>
                    </form>
                </div>
                <div class="text-center mt-8">
                    <div class="flex flex-col justify-center gap-3  mb-6"><a href="#"
                            class="text-blue-200 hover:text-white underline text-sm">تحميل كتيب "الاستثمار في التعليم
                            الرقمي – مجموعة النور (PDF)"</a><a href="#"
                            class="text-blue-200 hover:text-white underline text-sm">طلب عرض تقديمي مفصل</a></div>
                    <p class="text-blue-200">ابدأ شراكتك التعليمية اليوم وكن جزءًا من بناء مستقبل التعليم في فلسطين</p>
                </div>
            </div>
        </section>
    </div>
@endsection
