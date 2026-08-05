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
                    <span class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium mb-4">
                        Eng Mashhur Kurs
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-2">{{ $course->title }}</h1>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8 md:p-12">
                <!-- Course Info Grid -->
                <div class="grid md:grid-cols-4 gap-6 mb-10 p-6 bg-gray-50 rounded-2xl">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-1">4</div>
                        <div class="text-gray-600 text-sm">Oylik Kurs</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-1">24</div>
                        <div class="text-gray-600 text-sm">Video Dars</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-1">5</div>
                        <div class="text-gray-600 text-sm">Loyiha</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-1">✓</div>
                        <div class="text-gray-600 text-sm">Sertifikat</div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Kurs Haqida</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed text-lg">
                        {{ $course->description }}
                    </div>
                </div>

                <!-- What You'll Learn -->
                <div class="mb-10 p-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Nimalarni O'rganasiz?</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Asosiy fundamentallar</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Amaliy loyihalar</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Zamonaviy texnologiyalar</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Portfolio yaratish</span>
                        </div>
                    </div>
                </div>

                <!-- Price & Action -->
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 p-8 bg-gradient-to-r from-slate-800 to-slate-900 rounded-2xl text-white">
                    <div>
                        <div class="text-gray-400 text-sm mb-1">Kurs Narxi</div>
                        <div class="text-4xl font-extrabold">{{ number_format($course->price, 0, ',', ' ') }} <span class="text-xl">so'm</span></div>
                    </div>
                    <button class="w-full md:w-auto bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-10 py-4 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl hover:shadow-blue-500/30 transform hover:-translate-y-1 transition-all duration-300">
                        Ro'yxatdan O'tish
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection