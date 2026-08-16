@extends('layouts.app')

@section('title', 'EduSpace - Biz Haqimizda')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-indigo-900 to-blue-900">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-24 lg:py-32">
        <div class="text-center max-w-4xl mx-auto">
    <h1 class="text-5xl lg:text-6xl font-bold text-white mb-6">
    Biz Haqimizda
</h1>

<p class="text-xl text-blue-100/80 mb-10 max-w-3xl mx-auto leading-relaxed">
    EduSpace — bilim olish, rivojlanish va kelajak uchun yangi imkoniyatlar yaratadigan ta'lim platformasi.
</p>
        </div>
    </div>
</section>

<!-- Stats Section -->


<!-- Mission & Vision -->
<section class="bg-gradient-to-b from-gray-50 to-white py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 13l4-4 4 4 5-5"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Bizning Missiyamiz</h2>
                <p class="text-gray-600 leading-relaxed">
                    {{$about->description}}
                </p>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Amaliyotga yo'naltirilgan ta'lim</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Individual yondashuv</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Doimiy qo'llab-quvvatlash</span>
                    </li>
                </ul>
            </div>

            <!-- Vision -->
            <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Bizning Qarashlarimiz</h2>
                <p class="text-gray-600 leading-relaxed">
                    Markaziy Osiyodagi eng ilg'or onlayn ta'lim platformasiga aylanish. Biz 2030-yilgacha
                    100,000+ mutaxassis tayyorlashni va mintaqamizda raqamli iqtisodiyotni rivojlantirishni
                    maqsad qilganmiz.
                </p>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="text-purple-500">★</span>
                        <span class="text-gray-700">Innovatsion metodologiyalar</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-purple-500">★</span>
                        <span class="text-gray-700">Xalqaro hamkorlik</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-purple-500">★</span>
                        <span class="text-gray-700">Texnologik yetakchilik</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">
                Bizning <span class="text-blue-600">Qadriyatlarimiz</span>
            </h2>

            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Bizning faoliyatimizni boshqarib turadigan asosiy tamoyillar.
            </p>
        </div>

        @php
            $values = [
                [
                    'title' => "Sifatli Ta'lim",
                    'description' => "Eng yuqori standartlarga javob beradigan o'quv dasturlari",
                    'bg' => 'from-blue-50',
                    'iconBg' => 'bg-blue-600',
                    'icon' => '
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    ',
                ],
                [
                    'title' => 'Innovatsiya',
                    'description' => "Doimiy yangilanish va zamonaviy texnologiyalarni qo'llash",
                    'bg' => 'from-purple-50',
                    'iconBg' => 'bg-purple-600',
                    'icon' => '
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    ',
                ],
                [
                    'title' => 'Hamjamiyat',
                    'description' => "O'quvchilar va mentorlar o'rtasida mustahkam aloqalar",
                    'bg' => 'from-indigo-50',
                    'iconBg' => 'bg-indigo-600',
                    'icon' => '
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    ',
                ],
                [
                    'title' => 'Ishonch',
                    'description' => "Shaffoflik va halollik bizning asosiy tamoyilimiz",
                    'bg' => 'from-green-50',
                    'iconBg' => 'bg-green-600',
                    'icon' => '
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    ',
                ],
            ];
        @endphp

        <!-- Values -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach ($values as $value)

                <div class="text-center p-6 bg-gradient-to-b {{ $value['bg'] }} to-white rounded-2xl hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                    <!-- Icon -->
                    <div class="w-20 h-20 {{ $value['iconBg'] }} rounded-full flex items-center justify-center mx-auto mb-4">

                        <svg
                            class="w-10 h-10 text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            {!! $value['icon'] !!}
                        </svg>

                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        {{ $value['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600">
                        {{ $value['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>
</section>
<!-- Custom Animations -->
<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}
.animate-blob { animation: blob 7s infinite; }
.animation-delay-2000 { animation-delay: 2s; }
.animation-delay-4000 { animation-delay: 4s; }
</style>

@endsection