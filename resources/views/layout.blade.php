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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

</head>

<!--Navbar Section-->

<body>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    @if (Route::has('login'))
        @auth
            <?php $user_id = Auth::user()->id; ?>
            <script>
                $(document).ready(function() {
                    $('#btn-call').click(function() {
                        var data = {
                            "_token": $('#token').val(),
                            "user_id": {{ Js::from($user_id) }}
                        };
                        $.ajax({
                            type: 'POST',
                            url: '/savepanggilan',
                            data: data
                        });
                    });
                });
            </script>
        @endauth
    @endif
    <nav
        class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center">
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
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 p-4">
                    <li>
                        <a href="{{ url('/') }}"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ url('/tentang') }}"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Tentang
                            Produk</a>
                    </li>
                    <li>
                        <a href="{{ url('/laporkehilangan') }}"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Lapor
                            Kehilangan</a>
                    </li>
                    <li>
                        <a href="#" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Panggil
                            Petugas</a>
                    </li>
                    <li>
                        <a href="{{ url('/profile') }}"
                            class="flex w-full justify-end py-4 pl-3 pr-4 font-poppins text-lg text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Profil</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                            @auth
                                <div class="flex justify-end">
                                    <div
                                        class="max-w-2xl inline-flex w-80 items-center justify-end space-x-4 rounded-xl border border-gray-300 py-3 pr-3">
                                        <div class="inline-flex flex-col items-end justify-center space-y-0.5">
                                            <p class="text-md font-semibold leading-tight text-gray-700">
                                                {{ Auth::user()->name }}</p>
                                            <p class="text-xs leading-none text-gray-400">{{ Auth::user()->email }}</p>
                                        </div>
                                        <div class="flex items-center justify-center rounded-full bg-gray-300 p-3.0">
                                            <div
                                                class="relative overflow-hidden text-grey-700 bg-gray-100 rounded-full dark:bg-gray-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="inline-flex flex-col w-full space-y-1 justify-end pt-8">
                                    <a href="{{ route('login') }}"
                                        class="text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Masuk
                                        Akun</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-center py-2.5 px-5 mr-2 mb-2 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Buat
                                            Akun</a>
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
            <a href=# data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                class="font-poppins text-base font-medium leading-snug text-white mt-2 mb-2">Panggil Petugas</a>
            <a href=# class="font-poppins text-base font-medium leading-snug text-white mt-2 mb-12">Tentang Produk</a>
        </div>
        <div class="container inline-flex flex-col items-center justify-center px-5 py-5 bg-gray-800">
            <p class="font-poppins text-xs font-medium leading-none text-white">Created by erbepeel a © 2023</p>
        </div>
    </footer>

    <div id="popup-modal" tabindex="-1"
        class="bg-grey-900/50 fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <div class="inline-flex space-x-2 text-gray-700 items-start justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <p class="text-md font-poppins font-medium leading-large text-gray-700">Peringatan</p>
                    </div>
                    <h3 class="mt-3 mb-5 text-sm font-poppins font-normal text-gray-500 dark:text-gray-400">Dengan
                        menekan “Lanjutkan”, anda akan menyalakan fitur Panggil Petugas yang terhubung dengan petugas
                        keamanan</h3>
                    @if (Route::has('login'))
                        @auth
                            <a id="btn-call" data-modal-hide="popup-modal" type="button"
                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                href="tel:+6281232816403">Lanjutkan</a>
                        @else
                            <a data-modal-hide="popup-modal" type="button"
                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                href="{{ route('login') }}">Lanjutkan</a>
                        @endauth
                    @endif
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
