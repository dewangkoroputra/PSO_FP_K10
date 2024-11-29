@extends('layout')

@section('RanmITS', 'RanmITS-Beranda')

@section('content')

    <body class="min-h-screen max-w-xl mx-auto bg-slate-100">
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

        <img src="/assets/shield-illustration-nobg.png" class="w-56 h-56 flex justify-center mx-auto" alt="illustration">
        <p class="text-3xl font-poppins font-semibold leading-9 justify-center text-center text-neutral-900">Temukan Kembali
            <br>Kendaraan yang Hilang <br> dengan <span class="text-blue-600">Mudah</span>
        </p>

        <!--Button Lapor Kehilangan-->
        <div class="pt-10 pb-16 flex items-center justify-center">
            <a href="{{ url('/laporkehilangan') }}"
                class="px-8 text-center inline-flex justify-center items-center text-white font-poppins font-medium rounded-lg text-sm py-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 dark:focus:ring-blue-600/55">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-3 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
                Laporkan Kehilangan
            </a>
        </div>

        <!--Banner-->
        <div class="px-6 pb-16">
            <div
                class="inline-flex space-x-4 items-center justify-center px-6 py-3 bg-blue-50 border rounded-xl border-blue-300 text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-14 h-14">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                </svg>
                <p class="flex text-sm font-poppins font-medium leading-normal text-blue-800">Jangan lupa kunci ganda kendaraan kalian!</p>
            </div>
        </div>

        <div class="max-w-xl px-6">
            <p class="text-xl font-poppins font-semibold leading-normal text-gray-700 pb-2">Yuk! Perhatikan Keamanan
                Kendaraanmu</p>
            <p class="text-sm font-poppins leading-normal text-gray-400">Berikut kami hadirkan data kejadian kehilangan
                kendaraan sebagai upaya meningkatkan kewaspadaan anda!</p>
        </div>

        <!--Infografis-->
        <div class="flex justify-center items-center p-8">
            <div
                class="inline-flex flex-col space-y-6 items-center justify-center w-80 max-w-xl p-4 bg-white shadow rounded-lg">
                <div class="flex flex-col space-y-1.5 items-start justify-start w-full">
                    <p class="text-xs font-poppins font-medium leading-none text-gray-400">Data Kejadian Kehilangan
                        Kendaraan</p>
                    <p class="text-lg font-poppins font-semibold leading-relaxed text-gray-700">April 2023</p>
                </div>
                <div class="inline-flex space-x-6 items-center justify-center w-full">
                    <div
                        class="inline-flex flex-col space-y-0.5 items-start justify-center flex-1 p-3 bg-gradient-to-tr from-blue-700 via-blue-600 to-blue-500 rounded-xl">
                        <p class="text-2xl font-poppins font-semibold leading-9 text-white">6</p>
                        <p class="text-xs font-poppins font-medium leading-none text-white">Kejadian</p>
                    </div>
                    <div class="flex space-x-2 items-center justify-start px-4 py-1.5 bg-red-200 text-red-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                        <p class="text-xs font-poppins font-semibold leading-none text-red-600">Kasus Meningkat</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-xl px-6 pb-1">
            <p class="text-base font-poppins font-semibold leading-normal text-gray-700 pb-2">Daftar Laporan Kendaraan
                Hilang</p>
        </div>

        <!--Selector-->
        <div class="card-link px-6 pb-4">
            <div class="inline-flex rounded-md shadow-sm">
                <a href="{{ route('post.index') }}" data-jenis="semua"
                    class="kategori-link px-4 py-2 text-sm font-poppins font-medium text-blue-700 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">Semua</a>
                <a href="{{ route('post.sortByJenis', ['jenis' => 'sepedamotor']) }}" data-jenis="sepedamotor"
                    class="kategori-link px-4 py-2 text-sm font-poppins font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">Sepeda
                    Motor</a>
                <a href="{{ route('post.sortByJenis', ['jenis' => 'mobil']) }}" data-jenis="mobil"
                    class="kategori-link px-4 py-2 text-sm font-poppins font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">Mobil</a>
            </div>
        </div>

        <!--Card-->
        <div class="card-container">
            @foreach ($post as $posts)
                <div class="flex max-w-xl px-8 pb-12 items-center justify-center">
                    <div
                        class="w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('show', ['id' => $posts]) }}">
                            <img class="w-full h-44 object-cover object-center rounded-t-lg"
                                src="{{ url('/storage/uploads/' . $posts->foto_kendaraan) }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="{{ route('show', ['id' => $posts]) }}">
                                <h5
                                    class="mb-2 text-2xl font-poppins font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $posts->plat_nomor }}</h5>
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
                                        {{ $posts->model_kendaraan }} | {{ $posts->warna }} |
                                        {{ $posts->tahun_keluaran }}
                                    </p>
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
                                        {{ $posts->tanggal_kejadian }} | {{ $posts->waktu_kejadian }}WIB</p>
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
                                        {{ $posts->lokasi_kejadian }}</p>
                                </div>
                            </div>

                            <a href="https://wa.me/{{ $posts->kontak }}"
                                class="inline-flex space-x-2 items-center justify-center h-9 px-4 py-2 bg-blue-600 rounded-lg text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <p class="text-sm font-poppins font-regular leading-none text-white">Hubungi Pemilik</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!--Floating Button-->
        <div class="fixed bottom-4 right-4">
            <div data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                class="inline-flex space-x-2 items-center justify-start px-6 py-4 bg-red-600 shadow rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.348 14.651a3.75 3.75 0 010-5.303m5.304 0a3.75 3.75 0 010 5.303m-7.425 2.122a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.007H12V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <p class="text-sm font-poppins font-medium leading-tight text-white">Panggil Petugas</p>
            </div>
        </div>
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
@endsection
