@extends('layout')

@section('RanmITS', 'Homepage')

@section('content')
<body class="min-h-screen max-w-xl mx-auto bg-slate-100">
    <img src="/assets/shield-illustration-nobg.png" class="w-56 h-56 flex justify-center mx-auto" alt="illustration">
    <p class="text-3xl font-poppins font-semibold leading-9 justify-center text-center text-neutral-900">Temukan Kembali <br>Kendaraan yang Hilang <br> dengan <span class="text-blue-600">Mudah</span></p>

    <!--Button Lapor Kehilangan-->
    <div class="pt-3 pb-3 flex items-center justify-center">
        <a href="#" class="text-center inline-flex justify-center items-center text-white font-poppins font-medium rounded-lg text-sm px-5 py-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 dark:focus:ring-blue-600/55">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
            </svg>
            Laporkan Kehilangan
        </a>
    </div>

    <!--Banner-->
    <div class="px-6 pb-4">
        <div class="inline-flex space-x-4 items-center justify-center p-6 bg-blue-50 border rounded-xl border-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"/>
            </svg>
            <p class="flex text-sm font-poppins font-medium leading-normal text-blue-800">Selalu letakkan kendaraan anda pada tempat parkir yang sesuai dan gunakan kunci ganda sebelum meninggalkan kendaraan</p>
        </div>
    </div>

    <div class="max-w-xl px-6">
        <p class="text-xl font-poppins font-semibold leading-normal text-gray-700 pb-2">Yuk! Perhatikan Keamanan Kendaraanmu</p>
        <p class="text-sm font-poppins leading-normal text-gray-400 pb-4">Berikut kami hadirkan data kejadian kehilangan kendaraan sebagai upaya meningkatkan kewaspadaan anda!</p>
    </div>


</body>
@endsection
