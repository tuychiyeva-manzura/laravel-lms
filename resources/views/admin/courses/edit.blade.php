@extends('layouts.admin')

@section('title','Kursni tahrirlash')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h1 class="text-2xl font-bold mb-6">
        Kursni tahrirlash
    </h1>

    <form action="{{ route('admin.courses.update',$course->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Kurs nomi
            </label>

            <input
                type="text"
                name="title"
                value="{{ old('title',$course->title) }}"
                class="w-full border rounded-xl p-3">
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Tavsif
            </label>

            <textarea
                name="description"
                rows="5"
                class="w-full border rounded-xl p-3">{{ old('description',$course->description) }}</textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Narxi
            </label>

            <input
                type="number"
                name="price"
                value="{{ old('price',$course->price) }}"
                class="w-full border rounded-xl p-3">
        </div>

        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Rasm
            </label>

            <input
                type="file"
                name="image">

        </div>

        <button
            class="bg-indigo-600 text-white px-6 py-3 rounded-xl">

            Yangilash

        </button>

    </form>

</div>

@endsection