@extends('layouts.app')

@section('title', 'Barcha Kurslar - EduSpace')

@section('content')

<!-- Header -->
<section class="bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-20 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-extrabold text-white mb-4">Barcha Kurslar</h1>
        <p class="text-xl text-blue-100/80">O'z yo'nalishingizni tanlang va mutaxassisga aylaning</p>
    </div>
</section>

<!-- Courses Grid -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        @if(session('success'))
            <div class="mb-8 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-2xl p-4 flex items-center gap-3">
                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <span class="text-green-800 font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @if($courses->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($courses as $course)
                    <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-500 border border-gray-100">
                        <!-- Image -->
                        <div class="relative overflow-hidden">
                            <img src="{{ $course->image ? asset('images/'.$course->image) : asset('images/no-image.png') }}"
                                 class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <!-- Price Badge -->
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-blue-700 px-4 py-2 rounded-full font-bold shadow-lg">
                                {{ number_format($course->price) }} so'm
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                {{ $course->title }}
                            </h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {{ Str::limit($course->description, 120) }}
                            </p>

                            <!-- Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2 text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="text-sm">4 oy</span>
                                </div>
                                <a href="{{ route('course.show', $course->id) }}"
                                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-5 py-2.5 rounded-xl font-medium hover:shadow-lg hover:shadow-blue-500/30 transform hover:-translate-x-1 transition-all duration-300">
                                    Batafsil
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $courses->links() }}
            </div>
        @else
            <div class="bg-white rounded-3xl shadow-lg p-16 text-center">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Hozircha Kurs Mavjud Emas</h2>
                <p class="text-gray-500 text-lg">Tez orada yangi kurslar qo'shiladi. Bizni kuzatib boring!</p>
            </div>
        @endif
    </div>
</section>

@endsection