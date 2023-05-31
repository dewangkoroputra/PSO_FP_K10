<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>@yield('RanmITS')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</head>

<!--Navbar Section-->
<body>
    <nav class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <img src="/assets/vertical-logo-text.png" class="h-9 mr-2" alt="RanmITS Logo">
            </a>
            <button data-collapse-toggle="navbar-hamburger" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full" id="navbar-hamburger">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 p-4">
                    <li>
                        <a href="#" class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Tentang
                            Produk</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Lapor
                            Kehilangan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Panggil
                            Petugas</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Profil</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                                @auth
                                <div class="flex justify-end">
                                    <div class="max-w-2xl inline-flex w-80 items-center justify-end space-x-4 rounded-xl border border-gray-300 py-3 pr-3">
                                        <div class="inline-flex flex-col items-end justify-center space-y-0.5">
                                            <p class="text-sm font-medium leading-tight text-gray-700">Andy Appleseed</p>
                                            <p class="text-xs leading-none text-gray-500">andy.appleseed@gmail.com</p>
                                        </div>
                                        <div class="flex items-center justify-center rounded-full bg-gray-300 p-3.0">
                                            <div class="relative overflow-hidden bg-gray-100 rounded-full dark:bg-gray-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="inline-flex flex-col w-full space-y-1 justify-end pt-8">
                                    <a href="{{ route('login') }}" class="text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Masuk Akun</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-center py-2.5 px-5 mr-2 mb-2 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Buat Akun</a>
                                    @endif
                                </div>
                                @endauth
                        @endif
                    </li>
                </ul>
            </div>
    </nav>

    <!--Content Section-->
    <div>
        @yield('content')
    </div>

    <!--Footer Section-->
    <footer class="max-w-xl mx-auto bg-gray-700">
        <div class="container inline-flex flex-col items-center justify-center">
            <img src="/assets/ranmits-footer.png" class="mt-12 mb-4 h-9 mr-2" alt="RanmITS Logo">
            <p class="font-poppins text-sm leading-none text-white mt-2 mb-2">Platform pencarian kendaraan hilang</p>
            <a href=# class="font-poppins text-base font-medium leading-snug text-white mt-6 mb-2">Lapor Kehilangan</a>
            <a href=# class="font-poppins text-base font-medium leading-snug text-white mt-2 mb-2">Panggil Petugas</a>
            <a href=# class="font-poppins text-base font-medium leading-snug text-white mt-2 mb-12">Tentang Produk</a>
        </div>
        <div class="container inline-flex flex-col items-center justify-center px-5 py-5 bg-gray-800">
            <p class="font-poppins text-xs font-medium leading-none text-white">Created by erbepeel a © 2023</p>
        </div>
    </footer>
</body>

</html>
