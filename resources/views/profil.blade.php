@extends('layout')
{{-- Judul --}}
@section('RanmITS', 'Profil')

{{-- Content --}}
@section('content')

    <body class="min-h-screen max-w-xl mx-auto bg-slate-100">
        <div class="px-6 pt-4">
            <div class="pt-2 pb-8 inline-flex space-x-1.5 items-center justify-start w-full">
                <p class="flex-1 text-3xl font-poppins font-semibold leading-9 text-gray-800">Profil</p>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex space-x-2 items-center justify-start px-4 py-1.5 bg-red-50 border rounded-lg border-red-300">
                    <p class="text-sm font-poppins font-medium leading-regular text-red-700" >Keluar Akun</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-red-700 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>

            <p class="pb-4 text-xl font-poppins font-medium leading-relaxed text-gray-600">Data Akun</p>

            <div class="pb-2 inline-flex flex-col space-y-2 items-start justify-start w-full">
                <p class="text-sm font-poppins font-regular leading-tight text-gray-500">Nama</p>
                <div class="inline-flex items-start justify-start w-full p-3 bg-white border rounded-lg border-gray-300">
                    <p class="text-sm font-poppins font-medium leading-tight text-gray-700">{{ Auth::user()->name }}</p>
                </div>
            </div>

            <div class="pb-8 inline-flex flex-col space-y-2 items-start justify-start w-full">
                <p class="text-sm font-poppins font-regular leading-tight text-gray-500">Alamat Email</p>
                <div class="inline-flex items-start justify-start w-full p-3 bg-white border rounded-lg border-gray-300">
                    <p class="text-sm font-poppins font-medium leading-tight text-gray-700">{{ Auth::user()->email }}</p>
                </div>
            </div>


            <!--Laporan Anda-->
            <p class="pb-4 text-xl font-poppins font-medium leading-relaxed text-gray-600">Laporan Anda</p>
            @foreach ($data as $post)
                <div class="flex max-w-xl px-8 pb-6 items-center justify-center">
                    <div
                        class="w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="w-full h-44 object-cover object-center rounded-t-lg"
                                src="{{ url('/storage/uploads/' . $post->foto_kendaraan) }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-2xl font-poppins font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->plat_nomor }}</h5>
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
                                    <p class="text-xs font-poppins font-medium leading-none text-gray-600">
                                        {{ $post->model_kendaraan }} |
                                        {{ $post->warna }} | {{ $post->tahun_keluaran }}</p>
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
                                    <p class="text-xs font-poppins font-medium leading-none text-gray-600">
                                        {{ $post->tanggal_kejadian }} |
                                        {{ $post->waktu_kejadian }}</p>
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
                                    <p class="text-xs font-poppins font-medium leading-none text-gray-600">
                                        {{ $post->lokasi_kejadian }}</p>
                                </div>
                            </div>

                            <div data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="inline-flex space-x-2 items-center justify-center h-9 px-4 py-2 bg-red-600 rounded-lg text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                                <p class="text-sm font-poppins font-regular leading-none text-white">Hapus Laporan</p>
                            </div>

                            <div id="popup-modal" tabindex="-1"
                                class="bg-grey-900/50 fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="popup-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <div class="inline-flex space-x-2 text-gray-700 items-start justify-start">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                </svg>
                                                <p class="text-md font-poppins font-medium leading-large text-gray-700">
                                                    Peringatan</p>
                                            </div>
                                            <h3 class="mt-3 mb-5 text-sm font-poppins font-normal text-gray-500 dark:text-gray-400"> Apakah anda yakin akan menghapus laporan kehilangan ini?</h3>
                                            <button data-modal-hide="popup-modal" type="button"
                                                class="text-red-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none focus:ring-red-200 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 mr-2 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-600">Batal</button>
                                            <a href="/kehilangan/destroy/{{$post->id }}" data-modal-hide="popup-modal" type="button"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                                >Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </body>

@endsection
