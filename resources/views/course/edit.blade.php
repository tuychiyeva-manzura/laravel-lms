@extends('layouts.app')

@section('title','Kursni tahrirlash')

@section('content')

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-6">
        Kursni tahrirlash
    </h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-5">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('course.update',$course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="font-semibold">Kurs nomi</label>
            <input
                type="text"
                name="title"
                value="{{ old('title',$course->title) }}"
                class="w-full border rounded-lg p-3 mt-2">
        </div>

        <div class="mb-4">
            <label class="font-semibold">Tavsif</label>
            <textarea
                name="description"
                rows="5"
                class="w-full border rounded-lg p-3 mt-2">{{ old('description',$course->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="font-semibold">Narx</label>
            <input
                type="number"
                name="price"
                value="{{ old('price',$course->price) }}"
                class="w-full border rounded-lg p-3 mt-2">
        </div>

        <div class="mb-4">
            <label class="font-semibold">Joriy rasm</label><br>

            @if($course->image)
                <img src="{{ asset('images/'.$course->image) }}"
                     class="w-48 rounded-lg my-3">
            @endif

            <input type="file" name="image">
        </div>

        <div class="flex gap-3 mt-6">
            <a href="{{ route('courses') }}"
               class="px-5 py-3 bg-gray-300 rounded-lg">
                Bekor qilish
            </a>

            <button
                type="submit"
                class="px-5 py-3 bg-blue-600 text-white rounded-lg">
                Yangilash
            </button>
        </div>

    </form>

</div>

@endsection
