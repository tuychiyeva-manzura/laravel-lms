<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <title>Yangi kurs · Yangi Kurs</title>
  <!-- Tailwind CSS (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Qo'shimcha rang sozlamalari (index sahifasiga mos ko‘k) -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              light: '#bfdbfe', // blue-200
              DEFAULT: '#2563eb', // blue-600
              dark: '#1e40af', // blue-800
            }
          }
        }
      }
    }
  </script>
  <!-- Font Awesome ikonkalar uchun (CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4 md:p-6 font-sans antialiased">

  <!-- Asosiy karta · shadow-xl, oq fon, yumshoq burchaklar -->
  <div class="w-full max-w-2xl bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300">
    
    <!-- Sarlavha qismi · ko‘k gradient, index sahifasiga mos -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-5 md:px-8">
      <div class="flex items-center gap-3">
        <div class="bg-white/20 p-2 rounded-lg backdrop-blur-sm">
          <i class="fas fa-book-open text-white text-xl"></i>
        </div>
        <h2 class="text-white font-bold text-xl md:text-2xl tracking-tight">
          📚 Yangi Kurs
        </h2>
      </div>
      <p class="text-blue-100 mt-1 text-sm md:text-base ml-12">
        Yangi kurs ma'lumotlarini kiriting
      </p>
    </div>

    <!-- Forma qismi -->
    <form action="{{ route('course.store') }}" 
    method="POST"
     enctype="multipart/form-data" class="p-6 md:p-8 space-y-6 bg-white">
      @csrf
      <!-- Kurs nomi -->
      <div class="space-y-2">
        <label class="flex items-center gap-2 text-gray-700 font-semibold text-sm md:text-base">
          <i class="fas fa-pen text-blue-500 w-5 text-center"></i>
          Kurs nomi
        </label>
        <div class="relative">
          <input 
            type="text" 
            name="title"
            value="{{ old('title') }}"
            placeholder="Masalan: Python asoslari" 
            class="w-full pl-4 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all 
                   shadow-sm hover:shadow-md text-sm md:text-base"
          >
          @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <!-- Tavsif -->
      <div class="space-y-2">
        <label class="flex items-center gap-2 text-gray-700 font-semibold text-sm md:text-base">
          <i class="fas fa-align-left text-blue-500 w-5 text-center"></i>
          Tavsif
        </label>
     <textarea
    rows="4"
    name="description"
    placeholder="Kurs haqida qisqacha ma'lumot..."
    class="w-full pl-4 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all shadow-sm hover:shadow-md resize-none text-sm md:text-base"
>{{ old('description') }}</textarea>
      </div>

      <!-- Narx va Davomiyligi (2 ustunli) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <!-- Narxi -->
        <div class="space-y-2">
          <label class="flex items-center gap-2 text-gray-700 font-semibold text-sm md:text-base">
            <i class="fas fa-tag text-blue-500 w-5 text-center"></i>
            Narxi
          </label>
          <div class="relative">
            <input 
              type="number" 
              name="price"
              value="{{ old('price') }}"
              placeholder="500 000 so'm" 
              class="w-full pl-4 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 
                     focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all 
                     shadow-sm hover:shadow-md text-sm md:text-base"
            >
          </div>
        </div>
      </div>
        <!-- Kurs rasmi (Chiroyli file upload) -->
      <div class="space-y-2">
        <label class="flex items-center gap-2 text-gray-700 font-semibold text-sm md:text-base">
          <i class="fas fa-image text-blue-500 w-5 text-center"></i>
          Kurs rasmi
        </label>
        
        <!-- Maxsus fayl yuklash dizayni -->
        <div class="relative w-full">
          <input 
            type="file" 
            name="image"
            id="course-image" 
            accept="image/*"
            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
          >
          <!-- Vizual fayl yuklash maydoni -->
          <div class="w-full border-2 border-dashed border-gray-300 rounded-xl bg-gray-50 p-6 flex flex-col items-center justify-center 
                      transition-all hover:border-blue-400 hover:bg-blue-50/30 shadow-sm hover:shadow-md group">
            <div class="bg-blue-100 text-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-3 group-hover:bg-blue-200 transition-colors">
              <i class="fas fa-cloud-upload-alt text-xl"></i>
            </div>
            <p class="text-gray-600 font-medium text-sm md:text-base">
              <span class="text-blue-600 font-semibold">Rasm tanlang</span> yoki sudrab olib keling
            </p>
            <p class="text-gray-400 text-xs mt-1">PNG, JPG yoki JPEG (max 5MB)</p>
            <p id="file-name" class="text-blue-700 text-sm mt-2 font-medium hidden"></p>
          </div>
        </div>
        <!-- Fayl nomini ko'rsatish uchun skript (ixtiyoriy) -->
        <script>
          document.getElementById('course-image').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            const display = document.getElementById('file-name');
            if (fileName) {
              display.textContent = '📎 ' + fileName;
              display.classList.remove('hidden');
            } else {
              display.classList.add('hidden');
            }
          });
        </script>
      </div>

      <!-- Tugmalar qatori (Ortga va Saqlash) -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-gray-100">
        <!-- Ortga tugmasi -->
     <a href="{{ route('courses') }}"
   class="...">
    Bekor qilish
</a>

        <!-- Saqlash tugmasi (ko‘k, indeksga mos) -->
        <button 
          type="submit" 
          class="w-full sm:w-auto order-1 sm:order-2 flex items-center justify-center gap-2 bg-blue-600 
                 text-white font-bold py-3 px-8 rounded-xl hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 
                 transition-all shadow-lg hover:shadow-xl active:scale-[0.98] text-sm md:text-base"
        >
          <i class="fas fa-save"></i>
          Saqlash
        </button>
      </div>

    </form>
  </div>

  <!-- Responsive uchun kichik ekranda foydalanuvchi qulayligi uchun pastki bo'shliq -->
  <div class="block sm:hidden h-8"></div>

</body>
</html>