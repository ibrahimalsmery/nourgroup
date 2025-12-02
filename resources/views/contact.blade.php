{{-- resources/views/contact.blade.php --}}

@extends('layout.master') {{-- Assuming you have a layout file --}}

@section('content')
<main class="max-w-4xl h-screen mx-auto px-4 py-12">
    <section id="contact" class="mb-16">
        <h2 class="text-3xl font-bold mb-6 text-[var(--text-color)]">اتصل بنا</h2>
        <div class="grid md:grid-cols-1 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4 text-[var(--text-color)]">أرسل رسالة</h3>
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block mb-1 font-bold">الاسم</label>
                        <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded" required />
                    </div>
                    <div>
                        <label class="block mb-1 font-bold">البريد الإلكتروني</label>
                        <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" required />
                    </div>
                    <div>
                        <label class="block mb-1 font-bold">الهاتف</label>
                        <input type="tel" name="phone" class="w-full p-2 border border-gray-300 rounded" />
                    </div>
                    <div>
                        <label class="block mb-1 font-bold">الرسالة</label>
                        <textarea name="message" rows="5" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                    </div>
                    <button type="submit" class="bg-[var(--second-color)] hover:bg-[var(--second-color)]/90 text-white px-6 py-2 rounded transition w-full">
                        إرسال
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
