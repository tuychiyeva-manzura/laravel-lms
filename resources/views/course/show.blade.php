@extends('layouts.app')

@section('title', $course->title . ' - EduSpace')

@section('content')

<!-- Course Detail -->
<section class="bg-gradient-to-br from-gray-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Back Button -->
        <a href="{{ route('courses') }}"
           class="inline-flex items-center gap-2 px-5 py-3 bg-white border border-gray-200 rounded-2xl shadow-sm
                  text-gray-700 font-medium hover:bg-blue-600 hover:text-white hover:border-blue-600
                  transition-all duration-300 hover:shadow-xl mb-8 group">
            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kurslarga Qaytish
        </a>

        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <!-- Image -->
            <div class="relative">
                <img src="{{ $course->image ? asset('images/'.$course->image) : asset('images/no-image.png') }}"
                     alt="{{ $course->title }}"
                     class="w-full h-[500px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                 
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-2">{{ $course->title }}</h1>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8 md:p-12">

                <!-- Description -->
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Kurs Haqida</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed text-lg">
                        {{ $course->description }}
                    </div>
                </div>

                <!-- Price & Action -->
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 p-8 bg-gradient-to-r from-slate-800 to-slate-900 rounded-2xl text-white">
                    <div>
                        <div class="text-gray-400 text-sm mb-1">Kurs Narxi</div>
                        <div class="text-4xl font-extrabold">{{ number_format($course->price, 0, ',', ' ') }} <span class="text-xl">so'm</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection