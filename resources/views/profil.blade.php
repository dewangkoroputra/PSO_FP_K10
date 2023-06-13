@extends('layout')
{{-- Judul --}}
@section('RanmITS', 'Profil')

{{-- Content --}}
@section('content')

    <body class="max-w-xl px-8 pt-8 mx-auto bg-slate-100 h-max">
        <div class="pt-2 pb-8 inline-flex space-x-1.5 items-center justify-start w-full">
            <p class="flex-1 text-2xl font-poppins font-semibold leading-9 text-gray-800">Profil</p>
            <button class="flex space-x-2 items-center justify-start px-4 py-1.5 bg-red-50 border rounded-lg border-red-300">
                <p class="text-xs font-poppins font-medium leading-none text-red-700">Keluar Akun</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-700 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                  </svg>
            </button>
        </div>
        <p class="pb-4 text-lg font-poppins font-medium leading-relaxed text-gray-600">Data Akun</p>
        <div class="inline-flex flex-col space-y-1 items-start justify-start w-full">
            <p class="text-sm leading-tight text-gray-500">Nama</p>
            <div class="inline-flex items-start justify-start w-full p-3 bg-white border rounded-lg border-gray-300">
                <p class="flex-1 text-xs leading-none text-gray-700">{{ Auth::user()->name }}</p>
            </div>
        </div>
        <div class="pb-8 inline-flex flex-col space-y-1 items-start justify-start w-full">
            <p class="text-sm leading-tight text-gray-500">Alamat Email</p>
            <div class="inline-flex items-start justify-start w-full p-3 bg-white border rounded-lg border-gray-300">
                <p class="flex-1 text-xs leading-none text-gray-700">{{ Auth::user()->email }}</p>
            </div>
        </div>


        <!--Laporan Anda-->
        <p class="pb-4 text-lg font-medium leading-relaxed text-gray-600">Laporan Anda</p>
        @foreach ($data as $post )
        <div class="flex max-w-xl px-8 pb-6 items-center justify-center">
            <div class="w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="w-full h-44 object-cover object-center rounded-t-lg" src="{{ url('/storage/uploads/'.$post->foto_kendaraan) }}"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-poppins font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->plat_nomor }}</h5>
                    </a>
                    <div class="inline-flex flex-col space-y-2 items-start justify-start w-48 pt-2 pb-6">
                        <div class="flex flex-col space-y-0.5 items-start justify-start pb-2">
                            <div class="inline-flex space-x-1.5 items-center justify-start text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p class="text-xs font-poppins leading-none text-gray-400">Deskripsi Kendaraan</p>
                            </div>
                            <p class="text-xs font-poppins font-medium leading-none text-gray-600">{{$post->model_kendaraan}} |
                                {{$post->warna}} | {{$post->tahun_keluaran}}</p>
                        </div>
                        <div class="flex flex-col space-y-0.5 items-start justify-start pb-2">
                            <div class="inline-flex space-x-1.5 items-center justify-start text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-xs font-poppins leading-none text-gray-400">Waktu Kejadian</p>
                            </div>
                            <p class="text-xs font-poppins font-medium leading-none text-gray-600">{{$post->tanggal_kejadian}} |
                                {{$post->waktu_kejadian}}</p>
                        </div>
                        <div class="flex flex-col space-y-0.5 items-start justify-start">
                            <div class="inline-flex space-x-1.5 items-center justify-start text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>

                                <p class="text-xs font-poppins leading-none text-gray-400">Terakhir Terlihat</p>
                            </div>
                            <p class="text-xs font-poppins font-medium leading-none text-gray-600">{{$post->lokasi_kejadian}}</p>
                        </div>
                    </div>

                    <a href="/kehilangan/destroy/{{$post->id }}"
                        class="inline-flex space-x-2 items-center justify-center h-9 px-4 py-2 bg-red-600 rounded-lg text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-3.5 h-3.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <p class="text-sm font-poppins font-regular leading-none text-white">Hapus Laporan</p>
                    </a>

                </div>
            </div>
        </div>
        @endforeach
    </body>

@endsection
