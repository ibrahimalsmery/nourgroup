{{-- resources/views/clients.blade.php --}}

@extends('layout.master')

@section('content')
<main class="max-w-4xl h-screen mx-auto px-4 py-12">
    <section id="clients" class="mb-16">
        <h2 class="text-3xl font-bold mb-6 text-[var(--text-color)]">عملاؤنا</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="mb-6">
                عملت النور كاستشاري استراتيجي لمؤسسات حكومية, دولية أهلية وقطاع خاص منها على سبيل المثال لا الحصر:
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/palestine-unversity.png') }}" alt="جامعة فلسطين" class="h-12 w-auto">
                    </div>
                    <p>جامعة فلسطين</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/iug.png') }}" alt="الجامعة الإسلامية" class="h-12 w-auto">
                    </div>
                    <p>الجامعة الإسلامية</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/education-ministry.jpg') }}" alt="وزارة التربية والتعليم" class="h-12 w-auto">
                    </div>
                    <p>وزارة التربية والتعليم</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/unrwa.jpg') }}" alt="وكالة غوث اللاجئين" class="h-12 w-auto">
                    </div>
                    <p>وكالة غوث اللاجئين</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/palestine-bank.png') }}" alt="بنك فلسطين" class="h-12 w-auto">
                    </div>
                    <p>بنك فلسطين</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/jawwal.jpg') }}" alt="شركة جوال" class="h-12 w-auto">
                    </div>
                    <p>شركة جوال</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/world-vision.jpg') }}" alt="مؤسسة الرؤية العالمية" class="h-12 w-auto">
                    </div>
                    <p>مؤسسة الرؤية العالمية</p>
                </div>

                <div class="p-4 border border-gray-200 rounded-lg text-center">
                    <div class="h-16 mb-2 flex items-center justify-center">
                        <img src="{{ asset('public/save-the-children.png') }}" alt="مؤسسة انقاذ الطفل" class="h-12 w-auto">
                    </div>
                    <p>مؤسسة انقاذ الطفل</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
