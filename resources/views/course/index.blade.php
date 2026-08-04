@extends('layouts.app')

@section('title', 'LMS | O\'quv Markaz Kurslari')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">

    <!-- Header -->
    <div class="bg-white/80 backdrop-blur-sm border-b sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 py-6">

            <div class="flex justify-between items-center">

                <div>
                    <h1 class="text-3xl font-bold text-indigo-600">
                        O'quv Markaz Kurslari
                    </h1>

                    <p class="text-gray-500 mt-1">
                        Barcha mavjud kurslar ro'yxati
                    </p>
                </div>


                <a href="{{ route('course.create') }}"
                   class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl">
                    + Yangi Kurs
                </a>

            </div>

        </div>
    </div>



    <!-- Statistika -->

    <div class="max-w-7xl mx-auto px-4 py-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-500">
                    Jami kurslar
                </p>

                <h2 class="text-3xl font-bold">
                    {{ $course->total() }}
                </h2>

            </div>


            <div class="bg-white p-6 rounded-xl shadow">

                <p class="text-gray-500">
                    O'quv markaz
                </p>

                <h2 class="text-3xl font-bold">
                    LMS
                </h2>

            </div>


            <div class="bg-white p-6 rounded-xl shadow">

                <p class="text-gray-500">
                    Holati
                </p>

                <h2 class="text-3xl font-bold text-green-600">
                    Faol
                </h2>

            </div>


        </div>


    </div>




    <!-- Kurslar -->


    <div class="max-w-7xl mx-auto px-4 pb-12">


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">


            @forelse($course as $item)


            <div class="bg-white rounded-2xl shadow overflow-hidden">


                <div class="h-48 bg-cover bg-center"
                     style="background-image:url('{{ $item->image 
                     ? asset('images/'.$item->image) 
                     : asset('images/no-image.png') }}')">

                </div>



                <div class="p-6">


                    <h3 class="text-xl font-bold mb-2">
                        {{ $item->title }}
                    </h3>


                    <p class="text-gray-600 mb-4">
                        {{ $item->description }}
                    </p>


                   <div class="flex justify-between items-center">

    <span class="text-indigo-600 font-bold">
        {{ $item->price }} so'm
    </span>


    <div class="flex gap-2">

        <a href="{{ route('course.edit', $item->id) }}"
           class="bg-yellow-500 text-white px-3 py-2 rounded-lg">
            Edit
        </a>


      <form action="{{ route('course.destroy', $item->id) }}"
      method="POST">

    @csrf
    @method('DELETE')

    <button 
        onclick="return confirm('Kursni o‘chirmoqchimisiz?')"
        class="bg-red-600 text-white px-3 py-2 rounded-lg">

        Delete

    </button>

</form>

    </div>

</div>


                </div>


            </div>


            @empty


            <div>
                Kurslar mavjud emas
            </div>


            @endforelse


        </div>



        <div class="mt-8">
            {{ $course->links() }}
        </div>


    </div>


</div>


@endsection