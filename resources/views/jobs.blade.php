@extends('layout.master')

@section('content')
    <main class="max-w-4xl h-screen mx-auto px-4 py-12">
        <section id="vision" class="mb-16">
            <h2 class="text-3xl font-bold mb-6 text-[var(--text-color)]">اعلانات الوظائف</h2>
            @include('private.parts.search-form', ['classes' => ['block border-b-2  w-full p-3']])
            @foreach ($jobs as $job)
                <div class="shadow p-3 hover:bg-slate-200 mb-3">
                    <a href="{{ $job->url }}" class="underline block text-2xl" target="_blank">
                        <i class="fa-solid fa-link"></i> {{ $job->title }}
                    </a>
                </div>
            @endforeach
            <div class="block">
                {{ $jobs->links('pagination::tailwind') }}
            </div>
        </section>
    </main>
@endsection
