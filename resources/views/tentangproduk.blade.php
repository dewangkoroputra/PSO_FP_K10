@extends('layout')

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
@section('content')

    <body class="max-w-xl mx-auto bg-slate-100">
        <div class="px-6 pt-6 pb-12">
            <div class="inline-flex flex-col space-y-1.5 items-start justify-start pb-6">
                <div class="inline-flex space-x-2.5 items-center justify-end w-28 h-1/2">
                    <img src="/assets/vertical-logo-text.png">
                </div>
                <p class="text-xs font-medium leading-none text-gray-700">Platform pencarian kendaraan hilang</p>
            </div>
            <div class="flex flex-col space-y-4 items-start justify-center pb-9">
                <div class="inline-flex space-x-2 items-center justify-start w-full text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <p class="text-lg font-poppins font-medium leading-relaxed text-gray-700">Tentang Produk</p>
                </div>
                <p class="w-full font-poppins font-regular text-sm text-justify leading-regular text-gray-500">RanmITS
                    merupakan platform berbasis website yang dikembangkan untuk membantu masyarakat dan juga petugas
                    keamanan untuk mencegah dan menangani fenomena pencurian kendaraan bermotor yang sedang kerap terjadi
                    belakangan ini yang tentunya sangat meresahkan masyarakat.</p>
            </div>
            <div class="inline-flex flex-col space-y-4 items-start justify-center">
                <div class="inline-flex space-x-2 items-center justify-start w-full text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <p class="text-lg font-poppins font-medium leading-relaxed text-gray-700">Tentang Pengembang</p>
                </div>
                <p class="w-full font-poppins font-regular text-sm text-justify leading-regular text-gray-500">RanmITS
                    dikembangkan sebagai final project mata kuliah Rancang Bangun Perangkat Lunak/Software Engineering prodi
                    S1 Sistem Informasi ITS. RanmITS dikembangkan oleh tim yang terdiri dari Naufal Firjatulloh
                    Fano-5026211011, Zada Alfarras Rasendriya-5026211088, Evanriza Safiq Ariadi-5026211139, Rafi Arian
                    Yusuf-5026211177, dan Laode Shaldan Falih-5026211178.</p>
            </div>
        </div>

    </body>
@endsection
