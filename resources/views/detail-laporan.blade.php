<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Detail Laporan</title>

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
            <a href="{{ url('/') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>

            </a>
            <p class="text-xl font-poppins font-semibold text-gray-700">Detail Laporan</p>
        </div>
    </nav>
    <div class="max-w-xl mx-auto bg-slate-100">
        <img class="w-full h-56 object-cover object-center" src="{{asset('storage/uploads/'.$post->foto_kendaraan)}}" alt="" />
        <div class="min-h-screen max-w-xl px-4 pt-8">
            <div class="inline-flex flex-col px-2 w-full">
                <h5 class="mb-4 text-3xl font-poppins font-bold tracking-tight text-gray-900 dark:text-white">W 1234 PL</h5>
                <div class="inline-flex flex-col space-y-2 items-start justify-start pt-2 pb-6">
                    <div class="flex flex-col space-y-2 items-start justify-start pb-3">
                        <div class="inline-flex space-x-2 items-center justify-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>
                            <p class="text-sm font-poppins leading-none text-gray-400">Deskripsi Kendaraan</p>
                        </div>
                        <p class="text-sm font-poppins font-medium leading-none text-gray-600"> | {{$post->warna}} | {{$post->tahun_keluaran}}</p>
                    </div>
                    <div class="flex flex-col space-y-2 items-start justify-start pb-3">
                        <div class="inline-flex space-x-2 items-center justify-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm font-poppins leading-none text-gray-400">Waktu Kejadian</p>
                        </div>
                        <p class="text-sm font-poppins font-medium leading-none text-gray-600">{{$post->tanggal_kejadian}} | {{$post->waktu_kejadian}} WIB</p>
                    </div>
                    <div class="flex flex-col space-y-2 items-start justify-start pb-3">
                        <div class="inline-flex space-x-2 items-center justify-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <p class="text-sm font-poppins leading-none text-gray-400">Terakhir Terlihat</p>
                        </div>
                        <p class="text-sm font-poppins font-medium leading-none text-gray-600">{{$post->lokasi_kejadian}}</p>
                    </div>
                    <div class="flex flex-col space-y-2 items-start justify-start pb-4">
                        <div class="inline-flex space-x-2 items-center justify-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                              </svg>


                            <p class="text-sm font-poppins leading-none text-gray-400">Deskripsi Tambahan</p>
                        </div>
                        <p class="text-sm font-poppins font-medium leading-none text-gray-600">{{$post->deskripsi}}</p>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/{{$post->kontak}}" class="inline-flex space-x-2 mb-6 mx-auto px-2 items-center justify-center w-full h-11 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-3.5 h-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
            <p class="text-base font-poppins font-regular leading-none text-white">Hubungi Pemilik</p>
        </a>

        </div>
    </div>
</body>

</html>
