@extends('layouts.app')

@section('title', 'LMS - Bosh Sahifa')

@section('content')

<!-- Hero -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-7xl mx-auto px-4 py-24 text-center">

        <h1 class="text-5xl font-bold mb-6">
            Bilim olishni bugundan boshlang
        </h1>

        <p class="text-xl text-blue-100 mb-8">
            Zamonaviy onlayn kurslar orqali yangi kasb va ko'nikmalarni o'rganing.
        </p>

        <a href="/courses"
            class="bg-white text-blue-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
            Kurslarni ko'rish
        </a>

    </div>
</section>

<!-- Features -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        <h2 class="text-3xl font-bold text-center mb-12">
            Nima uchun bizni tanlashadi?
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-xl shadow">
                <div class="text-5xl mb-4">🎓</div>
                <h3 class="text-xl font-bold mb-3">
                    Sifatli Kurslar
                </h3>
                <p class="text-gray-600">
                    Tajribali ustozlar tomonidan tayyorlangan video darslar.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <div class="text-5xl mb-4">📚</div>
                <h3 class="text-xl font-bold mb-3">
                    Amaliy Mashg'ulotlar
                </h3>
                <p class="text-gray-600">
                    Nazariya bilan birga real loyihalar ustida ishlang.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <div class="text-5xl mb-4">🏆</div>
                <h3 class="text-xl font-bold mb-3">
                    Sertifikat
                </h3>
                <p class="text-gray-600">
                    Kursni muvaffaqiyatli tugatgan talabalar sertifikat oladi.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection