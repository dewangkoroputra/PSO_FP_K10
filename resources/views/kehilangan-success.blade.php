<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Lapor Kehilangan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--Timepicker-->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <nav
        class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl mx-auto p-4 inline-flex space-x-4 items-center justify-start">
            <p class="text-xl font-poppins font-semibold text-gray-700">Lapor Kehilangan</p>
        </div>
    </nav>
    <div class="min-h-screen max-w-xl px-8 pt-16 mx-auto bg-slate-100">
        <div class="max-w-md mx-auto items-center justify-center text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-center pt-12 pb-4">
                    <img class="items-center justify-center w-32 h-32 rounded-t-lg" src="/assets/tick-icon.png" alt="tick-icon" />
                </div>
            <div class="p-5">
                <h5 class="mb-4 text-xl font-poppins font-semibold tracking-tight text-neutral-900 dark:text-white">Laporan Berhasil Diunggah!</h5>
                <p class="mb-3 pb-4 text-sm font-poppins font-normal text-neutral-60 dark:text-gray-400">Laporan anda berhasil diunggah, semoga lekas menemukan kembali kendaraan anda!</p>
                <a href="{{ url('/') }}"
                    class="inline-flex items-center justify-center w-full h-11 text-base font-poppins font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Kembali ke Halaman Utama
                </a>
            </div>
        </div>

    </div>

</body>

</html>
