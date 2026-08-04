<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manzura LMS - Kurslar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4F46E5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        sidebar: '#0F172A',
                        success: '#16A34A',
                        danger: '#DC2626',
                        warning: '#F59E0B',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-sans antialiased">

    <!-- Asosiy konteyner -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- ==================== SIDEBAR ==================== -->
        <aside class="hidden lg:flex lg:flex-col w-72 bg-sidebar text-white">
            
            <!-- Logo -->
            <div class="flex items-center gap-3 px-6 py-6 border-b border-slate-700/50">
                <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-xl flex items-center justify-center shadow-lg shadow-primary-500/25">
                    <i class="fas fa-graduation-cap text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold tracking-tight">Manzura LMS</h1>
                    <p class="text-xs text-slate-400">Ta'lim boshqaruvi</p>
                </div>
            </div>

            <!-- Menu -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-th-large w-5 text-center"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary-600 text-white shadow-lg shadow-primary-500/25 transition-all duration-200">
                    <i class="fas fa-book-open w-5 text-center"></i>
                    <span>Kurslar</span>
                    <span class="ml-auto bg-white/20 text-white text-xs px-2 py-0.5 rounded-full">24</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-user-graduate w-5 text-center"></i>
                    <span>O'quvchilar</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-chalkboard-teacher w-5 text-center"></i>
                    <span>O'qituvchilar</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-calendar-alt w-5 text-center"></i>
                    <span>Darslar</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-credit-card w-5 text-center"></i>
                    <span>To'lovlar</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-cog w-5 text-center"></i>
                    <span>Sozlamalar</span>
                </a>
            </nav>

            <!-- Admin profil -->
            <div class="p-4 border-t border-slate-700/50">
                <div class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-slate-800 transition-all duration-200 cursor-pointer group">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold">
                        A
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium truncate">Admin</p>
                        <p class="text-xs text-slate-400 truncate">admin@manzura.uz</p>
                    </div>
                    <a href="#" class="text-slate-400 hover:text-red-400 transition-colors">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </aside>

        <!-- ==================== ASOSIY KONTENT ==================== -->
        <main class="flex-1 overflow-y-auto bg-slate-50">
            
            <!-- Top bar -->
            <header class="bg-white border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Kurslar</h2>
                        <p class="text-sm text-gray-500 mt-1">Barcha kurslar ro'yxati va boshqaruvi</p>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <!-- Qidiruv -->
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Qidirish..." 
                                   class="w-64 pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm 
                                          focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        </div>
                        
                        <!-- Bildirishnoma -->
                        <button class="relative p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-xl transition-all">
                            <i class="fas fa-bell text-lg"></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                    </div>
                </div>
            </header>

            <div class="p-6 space-y-6">
                
                <!-- ==================== STATISTIKA KARTALARI ==================== -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Kurslar -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Kurslar</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">24</p>
                            </div>
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center group-hover:bg-primary-200 transition-colors">
                                <i class="fas fa-book-open text-primary-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-4 text-sm">
                            <span class="text-green-600 font-medium">+12%</span>
                            <span class="text-gray-400">o'tgan oydan</span>
                        </div>
                    </div>

                    <!-- O'quvchilar -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">O'quvchilar</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">350</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center group-hover:bg-green-200 transition-colors">
                                <i class="fas fa-user-graduate text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-4 text-sm">
                            <span class="text-green-600 font-medium">+25%</span>
                            <span class="text-gray-400">o'tgan oydan</span>
                        </div>
                    </div>

                    <!-- Daromad -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Daromad</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">5 mln</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-4 text-sm">
                            <span class="text-green-600 font-medium">+18%</span>
                            <span class="text-gray-400">o'tgan oydan</span>
                        </div>
                    </div>

                    <!-- O'qituvchilar -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 font-medium">O'qituvchilar</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">8</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                                <i class="fas fa-chalkboard-teacher text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-4 text-sm">
                            <span class="text-gray-400">Faol</span>
                        </div>
                    </div>
                </div>

                <!-- ==================== KURSLAR JADVALI ==================== -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    
                    <!-- Header -->
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900">Barcha kurslar</h3>
                        <button class="flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white px-5 py-2.5 rounded-xl 
                                       font-medium transition-all duration-200 shadow-lg shadow-primary-500/25 hover:shadow-xl 
                                       hover:shadow-primary-500/30 transform hover:scale-[1.02]">
                            <i class="fas fa-plus text-sm"></i>
                            Yangi kurs
                        </button>
                    </div>

                    <!-- Jadval -->
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-100">
                                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">Rasm</th>
                                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">Nomi</th>
                                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">Narxi</th>
                                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">Sana</th>
                                    <th class="text-right px-6 py-4 text-sm font-semibold text-gray-500">Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- 1-qator -->
                                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-primary-400 to-primary-600 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-code text-white"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-gray-900">Laravel</p>
                                        <p class="text-sm text-gray-500">Veb dasturlash</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-900">500 000</span>
                                        <span class="text-gray-500 text-sm"> so'm</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-500">31.07.2026</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="p-2 text-danger hover:bg-red-50 rounded-lg transition-colors">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 2-qator -->
                                <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-code text-white"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-gray-900">PHP</p>
                                        <p class="text-sm text-gray-500">Backend dasturlash</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-900">300 000</span>
                                        <span class="text-gray-500 text-sm"> so'm</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-500">30.07.2026</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="p-2 text-danger hover:bg-red-50 rounded-lg transition-colors">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 3-qator -->
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-paint-brush text-white"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-gray-900">UI/UX Dizayn</p>
                                        <p class="text-sm text-gray-500">Grafik dizayn</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-900">450 000</span>
                                        <span class="text-gray-500 text-sm"> so'm</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-500">29.07.2026</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-2 text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="p-2 text-danger hover:bg-red-50 rounded-lg transition-colors">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer -->
                    <div class="flex items-center justify-between px-6 py-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">Jami: 24 ta kurs</p>
                        <div class="flex items-center gap-2">
                            <button class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Oldingi</button>
                            <button class="px-3 py-1.5 text-sm bg-primary-600 text-white rounded-lg">1</button>
                            <button class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">2</button>
                            <button class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">3</button>
                            <button class="px-3 py-1.5 text-sm border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Keyingi</button>
                        </div>
                    </div>
                </div>

                <!-- ==================== YANGI KURS QO'SHISH FORMASI ==================== -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                            <i class="fas fa-plus-circle text-primary-600"></i>
                            Yangi kurs yaratish
                        </h3>
                    </div>

                    <form class="p-6 space-y-5">
                        <!-- Kurs nomi -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kurs nomi *</label>
                            <input type="text" 
                                   class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl 
                                          focus:ring-2 focus:ring-primary-500 focus:border-transparent 
                                          transition-all duration-200 placeholder-gray-400"
                                   placeholder="Kurs nomini kiriting">
                        </div>

                        <!-- Tavsif -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tavsif *</label>
                            <textarea rows="4" 
                                      class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl 
                                             focus:ring-2 focus:ring-primary-500 focus:border-transparent 
                                             transition-all duration-200 placeholder-gray-400 resize-none"
                                      placeholder="Kurs haqida batafsil ma'lumot..."></textarea>
                        </div>

                        <!-- Narxi va rasm -->
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Narxi *</label>
                                <div class="relative">
                                    <input type="number" 
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl 
                                                  focus:ring-2 focus:ring-primary-500 focus:border-transparent 
                                                  transition-all duration-200 placeholder-gray-400"
                                           placeholder="500000">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">so'm</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Rasm</label>
                                <div class="relative">
                                    <input type="file" accept="image/*" class="hidden" id="course-image">
                                    <label for="course-image" 
                                           class="flex items-center justify-center gap-2 w-full px-4 py-3 
                                                  border-2 border-dashed border-gray-300 rounded-xl 
                                                  hover:border-primary-400 hover:bg-primary-50/30 
                                                  transition-all cursor-pointer bg-gray-50 text-gray-500">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <span>Rasm tanlang</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Tugmalar -->
                        <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-100">
                            <button type="button" 
                                    class="px-6 py-2.5 border-2 border-gray-200 text-gray-700 font-semibold rounded-xl 
                                           hover:bg-gray-50 transition-all duration-200">
                                <i class="fas fa-times mr-2"></i>
                                Bekor qilish
                            </button>
                            <button type="submit" 
                                    class="px-8 py-2.5 bg-success hover:bg-green-600 text-white font-bold rounded-xl 
                                           transition-all duration-200 shadow-lg shadow-green-500/25 
                                           hover:shadow-xl hover:shadow-green-500/30 transform hover:scale-[1.02]">
                                <i class="fas fa-save mr-2"></i>
                                Saqlash
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </main>
    </div>

</body>
</html>