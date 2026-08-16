@extends('layouts.app')

@section('title', 'EduSpace - Kelajagingizni Biz bilan Bosing')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900">
    <!-- Animated Background -->
 

    <div class="relative max-w-7xl mx-auto px-4 py-28 lg:py-36">
        <div class="text-center max-w-4xl mx-auto">


            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 leading-tight">
                Kelajagingizni
                <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400 bg-clip-text text-transparent">
                    Bugundan
                </span>
                Boshlang
            </h1>

            <p class="text-xl text-blue-100/80 mb-10 max-w-2xl mx-auto leading-relaxed">
                Zamonaviy onlayn ta'lim platformasi orqali IT, Dizayn, Marketing va boshqa sohalarda
                tajribali mentorlardan o'rganing. Portfolio yarating va kariyerangizni o'zgartiring.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('courses') }}"
                   class="group relative inline-flex items-center gap-2 bg-white text-blue-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:shadow-blue-500/30 transform hover:-translate-y-1 transition-all duration-300">
                    Kurslarni Ko'rish
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="#features"
                   class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md text-white px-8 py-4 rounded-2xl font-semibold text-lg border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    Batafsil Ma'lumot
                </a>
            </div>
        </div>
    </div>
</section>

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