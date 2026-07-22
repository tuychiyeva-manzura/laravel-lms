@extends('layouts.app')

@section('title', 'LML - Bosh Sahifa')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    LML Dasturiga Xush Kelibsiz
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Sizning biznesingiz uchun eng yaxshi yechimlar
                </p>
                <div class="space-x-4">
                    <a href="/#" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 inline-block">
                        Bog'lanish
                    </a>
                    <a href="/about" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 inline-block">
                        Batafsil
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Bizning afzalliklarimiz</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-semibold mb-2">Tezkor</h3>
                    <p class="text-gray-600">Loyihalaringiz qisqa muddatda amalga oshiriladi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">💡</div>
                    <h3 class="text-xl font-semibold mb-2">Innovatsion</h3>
                    <p class="text-gray-600">Eng zamonaviy texnologiyalar va yechimlar</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-semibold mb-2">Ishonchli</h3>
                    <p class="text-gray-600">Sifat va xavfsizlik kafolatlangan</p>
                </div>
            </div>
        </div>
    </section>
@endsection