@extends('layouts.app')
@section('title', 'Aloqa - EduSpace')
@section('content')
<section class="bg-gradient-to-br from-gray-50 to-blue-50 py-20">
    <div class="max-w-5xl mx-auto px-4">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                Biz bilan <span class="text-blue-600">bog'laning</span>
            </h1>

            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Savollaringiz yoki takliflaringiz bo'lsa, bizga xabar yuboring.
            </p>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Ismingiz
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Ismingizni kiriting"
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="example@gmail.com"
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Subject -->
                <div class="mb-6">
                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                        Mavzu
                    </label>

                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        value="{{ old('subject') }}"
                        placeholder="Xabar mavzusi"
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >

                    @error('subject')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message -->
                <div class="mb-6">
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                        Xabar
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Xabaringizni yozing..."
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >{{ old('message') }}</textarea>

                    @error('message')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl"
                >
                    Xabar yuborish
                </button>

            </form>
        </div>

    </div>
@endsection