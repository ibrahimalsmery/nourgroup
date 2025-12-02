{{-- resources/views/services.blade.php --}}

@extends('layout.master')


@section('content')
<main class="max-w-4xl mx-auto px-4 py-12">

    {{-- Slider Section --}}
    {{-- <section>
        @include('components.services.slider', ['services' => [
            [
                'title' => "الدراسات والأبحاث",
                'description' => "نقدم مجموعة شاملة من خدمات الدراسات والأبحاث.",
                'image_url' => "/public/services/style-research.jpg"
            ],
            [
                'title' => "التدريب",
                'description' => "برامج تدريبية متخصصة لتطوير المهارات.",
                'image_url' => "/public/services/traning.jpg"
            ],
            [
                'title' => "تطوير الأعمال",
                'description' => "استراتيجيات مبتكرة لدعم نمو الأعمال.",
                'image_url' => "/public/services/business-development.webp"
            ],
            [
                'title' => "الاستثمار في التعليم الرقمي",
                'description' => "حلول تعليمية رقمية متكاملة.",
                'image_url' => "/public/services/edu-learn.jpg"
            ],
            [
                'title' => "التوظيف وتوفير الكفاءات",
                'description' => "خدمات توظيف مرنة ومهنية.",
                'image_url' => "/public/services/hr.webp"
            ]
        ]])
    </section> --}}

    {{-- Services Grid --}}
    <section id="services" class="mb-16">
        <h2 class="text-3xl font-bold mb-6 text-[var(--text-color)]">خدماتنا</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="{{ route('services.research') }}">
                <div class="card card-clickable h-80">
                    <h3 class="text-xl font-bold mb-3 text-[var(--text-color)]">الدراسات والأبحاث</h3>
                    <ul class="list-disc pr-5">
                        <li>إعداد دراسات خط الأساس</li>
                        <li>إجراء دراسات الجدوى الاقتصادية والفنية</li>
                        <li>دراسات تقييم الاحتياجات</li>
                        <li>دراسات السوق</li>
                        <li>الأبحاث المسحية والميدانية</li>
                        <li>دراسات تقييم المخاطر وتحليلها</li>
                    </ul>
                </div>
            </a>

            <a href="{{ route('services.traning') }}">
                <div class="card card-clickable h-80">
                    <h3 class="text-xl font-bold mb-3 text-[var(--text-color)]">التدريب</h3>
                    <ul class="list-disc pr-5">
                        <li>برامج تدريبية متخصصة</li>
                        <li>التدريب الوجاهي</li>
                        <li>التدريب الأونلاين</li>
                        <li>التدريب المدمج</li>
                        <li>تطوير المواد التدريبية والأدلة</li>
                        <li>التدريب حسب الطلب</li>
                    </ul>
                </div>
            </a>

            <a href="{{ route('services.business-development') }}">
                <div class="card card-clickable h-80">
                    <h3 class="text-xl font-bold mb-3 text-[var(--text-color)]">تطوير الأعمال</h3>
                    <ul class="list-disc pr-5">
                        <li>استراتيجيات النمو المبتكرة</li>
                        <li>دعم الشركات الناشئة</li>
                        <li>الشراكات والتحالفات الاستراتيجية</li>
                        <li>التمكين المؤسسي</li>
                    </ul>
                </div>
            </a>

            <a href="{{ route('services.elearning') }}">
                <div class="card card-clickable h-80">
                    <h3 class="text-xl font-bold mb-3 text-[var(--text-color)]">الاستثمار في التعليم الرقمي</h3>
                    <ul class="list-disc pr-5">
                        <li>منصة مدرستي في جوالي</li>
                        <li>منصات تعليمية رقمية متكاملة</li>
                        <li>حلول للتعليم في الطوارئ</li>
                    </ul>
                </div>
            </a>

            <a href="{{ route('services.staffing') }}">
                <div class="card card-clickable h-80">
                    <h3 class="text-xl font-bold mb-3 text-[var(--text-color)]">التوظيف وتوفير الكفاءات</h3>
                    <ul class="list-disc pr-5">
                        <li>التوظيف المهني</li>
                        <li>العقود المرنة</li>
                        <li>إدارة الموارد البشرية بالوكالة</li>
                        <li>توفير الخبراء والاستشاريين</li>
                        <li>بناء فرق متخصصة</li>
                        <li>التوظيف السريع</li>
                    </ul>
                </div>
            </a>

        </div>
    </section>

</main>
@endsection
