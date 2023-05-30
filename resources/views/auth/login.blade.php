<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</head>
<nav
    class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl mx-auto p-4 inline-flex space-x-4 items-center justify-start">
        <a href="/" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#374151"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="text-md font-poppins font-semibold text-gray-700">Login</p>
    </div>
</nav>
<div class="container max-w-xl px-8 pt-8 mx-auto bg-slate-100">
    <p class="text-2xl font-poppins font-medium leading-relaxed text-center text-gray-600">Login</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!--Alamat Email-->
        <div class="mb-4 pt-4">
            <label for="default-input"
                class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Alamat Email</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan alamat email"
                autocomplete="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--Password-->
        <div class="mb-6">
            <label for="default-input"
                class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" name="password" required placeholder="Buat password baru"
                autocomplete="current-password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Button Submit --}}
        <button class="mb-6 items-center justify-center w-full h-11 bg-blue-600 hover:bg-blue-700 rounded-lg">
            <p class="text-sm font-medium leading-tight text-center text-white">Login</p>
        </button>

        <div class="mb-4">
            <p class="text-xs font-poppins font-medium leading-relaxed text-center text-gray-600">Belum punya akun? <a
                    href="/register" class="text-blue-600 underline">Buat Akun</a></p>
        </div>
    </form>
</div>

</html>
