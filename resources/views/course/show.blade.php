@extends('layouts.app')

@section('title', $course->title)

@section('content')

<div class="max-w-5xl mx-auto py-10">

<a href="{{ route('courses') }}"
   class="inline-flex items-center gap-2 px-5 py-3 bg-white border border-gray-200 rounded-xl shadow-sm
          text-gray-700 font-medium hover:bg-blue-600 hover:text-white hover:border-blue-600
          transition-all duration-300 hover:shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-5 h-5"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 19l-7-7 7-7"/>
    </svg>

    Kurslarga qaytish
</a>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden mt-5">

        <img
            src="{{ asset('images/'.$course->image) }}"
            alt="{{ $course->title }}"
            class="w-full h-96 object-cover">

        <div class="p-8">

            <h1 class="text-4xl font-bold">
                {{ $course->title }}
            </h1>

            <p class="text-gray-600 mt-5">
                {{ $course->description }}
            </p>

            <div class="mt-8 flex justify-between items-center">

                <span class="text-3xl font-bold text-indigo-600">
                    {{ number_format($course->price,0,',',' ') }} so'm
                </span>

                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl">
                    Ro'yxatdan o'tish
                </button>

            </div>

        </div>

    </div>

</div>

@endsection