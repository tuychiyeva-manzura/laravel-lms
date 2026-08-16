@extends('layouts.admin')

@section('title', 'Yangi Kurs Yaratish')

@section('content')

<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <a href="{{ route('admin.courses.index') }}"
           class="inline-flex items-center gap-2 text-gray-600 hover:text-indigo-600 font-medium mb-4 transition-colors group">
            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kurslarga Qaytish
        </a>
        <h1 class="text-3xl font-extrabold text-gray-900">Yangi Kurs Yaratish</h1>
        <p class="text-gray-500 mt-2">Platformaga yangi kurs qo'shing va o'quvchilaringiz sonini oshiring</p>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Validation Errors -->
            @if($errors->any())
                <div class="p-4 bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-2xl">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-red-800 font-bold">Xatoliklar mavjud</h3>
                    </div>
                    <ul class="list-disc list-inside text-red-700 space-y-1 ml-12">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Kurs Nomi -->
            <div>
                <label class="block mb-2.5 font-bold text-gray-700">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Kurs Nomi
                    </span>
                </label>
                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       placeholder="Masalan: Web Dasturlash Asoslari"
                       class="w-full border-2 border-gray-200 rounded-xl p-4 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all outline-none text-gray-700 font-medium"
                       required>
            </div>

            <!-- Tavsif -->
            <div>
                <label class="block mb-2.5 font-bold text-gray-700">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                        Kurs Tavsifi
                    </span>
                </label>
                <textarea name="description"
                          rows="6"
                          placeholder="Kurs haqida batafsil ma'lumot yozing..."
                          class="w-full border-2 border-gray-200 rounded-xl p-4 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all outline-none text-gray-700 font-medium resize-none"
                          required>{{ old('description') }}</textarea>
                <p class="text-gray-400 text-sm mt-1">Kurs mazmuni, maqsadi va o'quvchilar nimalarni o'rganishi haqida yozing</p>
            </div>

            <!-- Narx -->
            <div>
                <label class="block mb-2.5 font-bold text-gray-700">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Kurs Narxi (so'm)
                    </span>
                </label>
                <div class="relative">
                    <input type="number"
                           name="price"
                           value="{{ old('price') }}"
                           placeholder="500000"
                           class="w-full border-2 border-gray-200 rounded-xl p-4 pl-12 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition-all outline-none text-gray-700 font-bold text-lg"
                           required>
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">UZS</span>
                </div>
            </div>

            <!-- Rasm Yuklash -->
            <div>
                <label class="block mb-2.5 font-bold text-gray-700">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Kurs Rasmi
                    </span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-indigo-400 transition-colors cursor-pointer bg-gray-50/50"
                     onclick="document.getElementById('image').click()">
                    <input type="file"
                           name="image"
                           id="image"
                           class="hidden"
                           accept="image/*"
                           onchange="previewImage(event)">
                    <div id="uploadPlaceholder">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                        </svg>
                        <p class="text-gray-600 font-medium">Rasm yuklash uchun bosing</p>
                        <p class="text-gray-400 text-sm mt-1">PNG, JPG yoki WebP (max. 2MB)</p>
                    </div>
                    <img id="imagePreview" class="hidden max-h-64 mx-auto rounded-xl shadow-lg" src="#" alt="Preview">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center gap-4 pt-4">
                <button type="submit"
                        class="flex-1 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center justify-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Kursni Saqlash
                    </span>
                </button>
                <a href="{{ route('admin.courses.index') }}"
                   class="px-8 py-4 rounded-xl font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 transition-colors">
                    Bekor Qilish
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Image Preview Script -->
<script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            const placeholder = document.getElementById('uploadPlaceholder');
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            placeholder.classList.add('hidden');
        }
        reader.readAsDataURL(file);
    }
}
</script>

@endsection