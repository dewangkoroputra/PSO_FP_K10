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
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
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
            <p class="text-xl font-poppins font-semibold text-gray-700">Lapor Kehilangan</p>
        </div>
    </nav>

    <div class="min-h-screen max-w-xl px-8 pt-8 mx-auto bg-slate-100">
        <form method="POST" enctype="multipart/form-data" action="/kehilangan">
            @csrf
            <section id="dataKendaraan">
                <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Data Kendaraan & Pemilik</p>
                <!--No.Handphone Pelapor-->
                <div class="mb-4 pt-6">
                    <label for="kontak"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">No.Handphone
                        Pelapor</label>
                    <input placeholder="Masukkan nomor handphone" required type="text" id="kontak" name="kontak"
                        class="font-poppins bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!--Jenis Kendaraan-->
                <div class="mb-4">
                    <label for="jenisKendaraan"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Jenis
                        Kendaraan</label>
                    <select placeholder="Pilih jenis kendaraan" required id="jenisKendaraan" name="jenisKendaraan"
                        class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih jenis kendaraan</option>
                        <option value="SepedaMotor">Sepeda Motor</option>
                        <option value="Mobil">Mobil</option>
                    </select>
                </div>

                <!--Model Kendaraan-->
                <div class="mb-4">
                    <label for="model_kendaraan"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Model
                        Kendaraan</label>
                    <input placeholder="Masukkan model kendaraan" required type="text" id="model_kendaraan"
                        name="model_kendaraan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!--Tahun Keluaran-->
                <div class="mb-4">
                    <label for="tahun_keluaran"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Tahun
                        Keluaran</label>
                    <input placeholder="Masukkan tahun keluaran" required type="text" id="tahun_keluaran"
                        name="tahun_keluaran"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!--Warna Kendaraan-->
                <div class="mb-4">
                    <label for="warna"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Warna
                        Kendaraan</label>
                    <input placeholder="Masukkan warna kendaraan" required type="text" id="warna" name="warna"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!--Plat Nomor Kendaraan-->
                <div class="mb-8">
                    <label for="plat_nomor"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Plat Nomor
                        Kendaraan</label>
                    <input placeholder="Masukkan plat nomor kendaraan" required type="text" id="plat_nomor"
                        name="plat_nomor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </section>

            <section id="fotoKendaraan">
                <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Foto Kendaraan</p>
                <div class="mb-8 pt-6">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto_kendaraan">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="foto_kendaraan" name="foto_kendaraan" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                        (MAX. 800x400px).</p>

                </div>
            </section>

            <section id="lokasiwaktuKejadian">
                <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Lokasi & Waktu Kejadian</p>

                <!--Tanggal Kejadian-->
                <div class="mb-4 min-w-xl">
                    <label for="tanggal_kejadian"
                        class="block mb-2 pt-6 text-sm font-poppins font-medium text-gray-900 dark:text-white">Tanggal
                        Kejadian</label>
                    <div class="hidden">
                        <div class="days">
                            <div
                                class="days-of-week grid grid-cols-7 mb-1 dow flex-1 leading-9 border-0 rounded-lg cursor-default text-center text-gray-900 font-semibold text-sm">
                            </div>
                            <div
                                class="datepicker-grid w-64 grid-cols-7 flex-1  border-0 rounded-lg cursor-default text-center  h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">
                            </div>
                        </div>
                        <div class="calendar-weeks">
                            <div class="days-of-week flex"><span
                                    class="dow h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400"></span>
                            </div>
                            <div
                                class="weeks week block flex-1 leading-9 border-0 rounded-lg cursor-default text-center text-gray-900 font-semibold text-sm">
                            </div>
                        </div>
                    </div>
                    <div class="relative max-w-xl">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" id="tanggal_kejadian"
                            name="tanggal_kejadian"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>
                </div>


                <!--Waktu Kejadian-->
                <div class="mb-4">
                    <label for="waktu_kejadian"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Waktu
                        Kejadian</label>
                    <input type="text" id="waktu_kejadian" name="waktu_kejadian"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>


                <!--Lokasi Kejadian-->
                <div class="mb-8">
                    <label for="lokasi_kejadian"
                        class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Lokasi
                        Kejadian</label>
                    <input placeholder="Masukkan lokasi kejadian" required type="text" id="lokasi_kejadian"
                        name="lokasi_kejadian"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </section>

            <section id="deskripsiPendukung" class="pb-4">
                <p class="text-lg pb-4 font-poppins font-medium leading-relaxed text-gray-600">Deskripsi Pendukung</p>
                <div class="inline-flex space-x-3.5 items-center justify-center p-4 bg-blue-50 text-blue-800 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>

                    <p class="flex-1 text-xs font-regular font-poppins leading-none text-blue-800">Deskripsi dapat berupa hal spesifik yang ada
                        pada kendaraan anda seperti stiker, part modif, ataupun bekas tabrakan.</p>
                </div>

                <label for="deskripsi" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                    Pendukung</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="block mb-6 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuliskan deskripsi pendukung disini..."></textarea>
            </section>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            {{-- Button Submit --}}
            <button type="submit" id="btn-submit"
                class="mb-6 items-center justify-center w-full h-11 bg-blue-600 hover:bg-blue-700 rounded-lg">
                <p class="text-sm font-poppins font-medium leading-tight text-center text-white">Buat Laporan</p>
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#waktu_kejadian', {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
        });
    </script>
</body>


</html>
