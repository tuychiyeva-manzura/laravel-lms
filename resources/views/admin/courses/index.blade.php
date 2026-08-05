@extends('layouts.admin')

@section('title', 'Barcha Kurslar')

@section('content')

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">
    <!-- Success Message -->
    @if(session('success'))
        <div class="m-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-2xl flex items-center gap-3 animate-fadeIn">
            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="text-green-800 font-semibold">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-8 border-b border-gray-100 gap-4">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Kurslar Ro'yxati</h1>
            <p class="text-gray-500 mt-1 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Jami: <span class="font-bold text-indigo-600">{{ $courses->count() }} ta kurs</span>
            </p>
        </div>
        <a href="{{ route('admin.courses.create') }}"
           class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-0.5 transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Yangi Kurs Qo'shish
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gradient-to-r from-gray-50 to-slate-50 border-b-2 border-gray-200">
                    <th class="text-left p-5 font-semibold text-gray-700 uppercase text-sm tracking-wider">Rasm</th>
                    <th class="text-left p-5 font-semibold text-gray-700 uppercase text-sm tracking-wider">Kurs Nomi</th>
                    <th class="text-left p-5 font-semibold text-gray-700 uppercase text-sm tracking-wider">Narxi</th>
                    <th class="text-left p-5 font-semibold text-gray-700 uppercase text-sm tracking-wider">Holat</th>
                    <th class="text-center p-5 font-semibold text-gray-700 uppercase text-sm tracking-wider">Amallar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($courses as $course)
                    <tr class="hover:bg-blue-50/50 transition-colors duration-200 group">
                        <!-- Rasm -->
                        <td class="p-5">
                            <div class="relative">
                                <img src="{{ $course->image ? asset('images/'.$course->image) : asset('images/no-image.png') }}"
                                     class="w-24 h-16 rounded-xl object-cover shadow-md group-hover:shadow-lg transition-shadow">
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 rounded-xl transition-colors"></div>
                            </div>
                        </td>
                        
                        <!-- Nomi -->
                        <td class="p-5">
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg">{{ $course->title }}</h3>
                                <p class="text-gray-500 text-sm mt-1">{{ Str::limit($course->description, 50) }}</p>
                            </div>
                        </td>
                        
                        <!-- Narxi -->
                        <td class="p-5">
                            <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 px-3 py-1.5 rounded-full font-bold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ number_format($course->price) }} so'm
                            </span>
                        </td>
                        
                        <!-- Holat -->
                        <td class="p-5">
                            <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-3 py-1.5 rounded-full font-medium text-sm">
                                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                                Faol
                            </span>
                        </td>
                        
                        <!-- Amallar -->
                        <td class="p-5">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.courses.edit', $course->id) }}"
                                   class="inline-flex items-center gap-1.5 bg-amber-50 hover:bg-amber-100 text-amber-700 px-4 py-2 rounded-xl font-medium border border-amber-200 hover:border-amber-300 transition-all duration-200"
                                   title="Tahrirlash">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Tahrirlash
                                </a>
                                
                                <form action="{{ route('admin.courses.destroy', $course->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Haqiqatan ham bu kursni o\'chirmoqchimisiz? Bu amal qaytarilmaydi!')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center gap-1.5 bg-red-50 hover:bg-red-100 text-red-700 px-4 py-2 rounded-xl font-medium border border-red-200 hover:border-red-300 transition-all duration-200"
                                            title="O'chirish">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        O'chirish
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-16 text-center">
                            <div class="max-w-sm mx-auto">
                                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-700 mb-2">Hali Kurs Mavjud Emas</h3>
                                <p class="text-gray-500 mb-6">Yangi kurs qo'shish orqali platformangizni boyiting</p>
                                <a href="{{ route('admin.courses.create') }}"
                                   class="inline-flex items-center gap-2 bg-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-indigo-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                    </svg>
                                    Birinchi Kursni Qo'shish
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($courses->hasPages())
        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
            {{ $courses->links() }}
        </div>
    @endif
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.5s ease-out;
}
</style>

@endsection