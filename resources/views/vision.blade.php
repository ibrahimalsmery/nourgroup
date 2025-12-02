{{-- resources/views/vision.blade.php --}}

@extends('layout.master')


@section('content')
<main class="max-w-4xl h-screen mx-auto px-4 py-12">
    <section id="vision" class="mb-16">
        <h2 class="text-3xl font-bold mb-6 text-[var(--text-color)]">الرؤية والرسالة</h2>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- الرؤية --}}
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4 text-[var(--text-color)]">الرؤية</h3>
                <p>
                    أن تكون النور المؤسسة الرائدة في تقديم الحلول التدريبية، البحثية، والاستشارية المتكاملة في فلسطين والمنطقة، مع التميز في توظيف الكفاءات المتميزة، الابتكار الرقمي، والالتزام بأعلى معايير الجودة الدولية، لتكون شريكًا موثوقًا في تمكين الأفراد وتعزيز الأداء المؤسسي ودعم التنمية المستدامة.
                </p>
            </div>

            {{-- الرسالة --}}
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4 text-[var(--text-color)]">الرسالة</h3>
                <p>
                    المساهمة في تنمية وتطوير وبناء قدرات مؤسسات المجتمع وأفراده للوصول إلى تحقيق الإدارة السليمة المتكاملة للنمو والحماية والاستمرارية، عبر بناء وتطوير السياسات، وإعداد الخطط والدراسات، وبناء القدرات وفق نظم الجودة العالمية، من خلال الاعتماد على المشاركة التفاعلية.
                </p>
            </div>
        </div>

        {{-- القيم الجوهرية --}}
        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-bold mb-4 text-[var(--text-color)]">القيم الجوهرية</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">المعرفة</h4>
                    <p>المعرفة حق طبيعي لكل إنسان</p>
                </div>
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">المسؤولية</h4>
                    <p>نلتزم بتحقيق النتائج المرجوة وتحمل مسؤولية قراراتنا</p>
                </div>
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">النزاهة وأخلاقيات العمل</h4>
                    <p>نتسم بالشفافية ونلتزم دائمًا بالنزاهة وأخلاقيات العمل</p>
                </div>
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">الاحترام</h4>
                    <p>نحترم الجميع أيًا كانت خلفياتهم وآرائهم المتنوعة</p>
                </div>
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">الابتكار</h4>
                    <p>نحاكي المفاهيم والأفكار الرائدة وننفذها</p>
                </div>
                <div class="p-4 border border-blue-200 rounded-lg">
                    <h4 class="font-bold mb-2">الالتزام</h4>
                    <p>نلتزم بتوفير خدمات على أعلى مستوى من الجودة</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
