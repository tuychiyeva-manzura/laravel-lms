<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white">

        <div class="p-6 border-b border-slate-700">
            <h1 class="text-2xl font-bold">
                Manzura LMS
            </h1>

            <p class="text-slate-400 text-sm">
                Admin Panel
            </p>
        </div>

        <nav class="mt-6">

            <a href="#"
               class="block px-6 py-3 hover:bg-slate-800">
                Dashboard
            </a>

       <a href="{{ route('admin.courses.index') }}"
   class="block px-6 py-3 hover:bg-slate-800">
    Kurslar
</a>
            <a href="#"
               class="block px-6 py-3 hover:bg-slate-800">
                O'quvchilar
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-slate-800">
                O'qituvchilar
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-slate-800">
                To'lovlar
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-slate-800">
                Sozlamalar
            </a>

        </nav>

    </aside>

    <!-- Main -->
    <div class="flex-1">

        <!-- Header -->
        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <h2 class="text-2xl font-bold">
                @yield('title')
            </h2>

            <div>
                Admin
            </div>

        </header>

        <!-- Content -->
        <main class="p-8">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>