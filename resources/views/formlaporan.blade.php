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

</head>
<nav
    class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl mx-auto p-4 inline-flex space-x-4 items-center justify-start">
        <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#374151"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="text-xl font-poppins font-semibold text-gray-700">Lapor Kehilangan</p>
    </div>
</nav>

<div class="min-h-screen max-w-xl px-8 pt-8 mx-auto bg-slate-100">
    <form method="POST" enctype="multipart/form-data" action="/kehilangan">
        <section id="dataKendaraan">
            <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Data Kendaraan & Pemilik</p>
            <!--No.Handphone Pelapor-->
            <div class="mb-4 pt-6">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">No.Handphone Pelapor</label>
                <input placeholder="Masukkan nomor handphone" required type="text" id="default-input" name="kontak" class="font-poppins bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Jenis Kendaraan-->
            <div class="mb-4">
                <label for="countries" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Jenis Kendaraan</label>
                <select placeholder="Pilih jenis kendaraan" required id="countries" name="jenisKendaraan" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih jenis kendaraan</option>
                    <option value="US">Sepeda Motor</option>
                    <option value="CA">Mobil</option>
                </select>
            </div>

            <!--Model Kendaraan-->
            <div class="mb-4">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Model Kendaraan</label>
                <input placeholder="Masukkan model kendaraan" required type="text" id="default-input" name="model_kendaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Tahun Keluaran-->
            <div class="mb-4">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Tahun Keluaran</label>
                <input placeholder="Masukkan tahun keluaran" required type="text" id="default-input" name="tahun_keluaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Warna Kendaraan-->
            <div class="mb-4">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Warna Kendaraan</label>
                <input placeholder="Masukkan warna kendaraan" required type="text" id="default-input" name="warna" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Plat Nomor Kendaraan-->
            <div class="mb-8">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Plat Nomor Kendaraan</label>
                <input placeholder="Masukkan plat nomor kendaraan" required type="text" id="default-input" name="plat_nomor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Next Page Button-->
            <div id="btn-dataKendaraan" class="mb-6 items-center justify-center w-full h-11 bg-blue-600 hover:bg-blue-700 rounded-lg">
                <p class="text-sm font-poppins font-medium leading-tight py-4 text-center justify-center text-white">Selanjutnya</p>
            </div>
        </section>

        <section id="fotoKendaraan">
            <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Foto Kendaraan</p>
            <div class="mb-4 pt-6 flex items-center justify-center">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

            <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Data Kendaraan & Pemilik</p>

            <!--Next Page Button-->
            <div id="btn-dataKendaraan" class="mb-6 items-center justify-center w-full h-11 bg-blue-600 hover:bg-blue-700 rounded-lg">
                <p class="text-sm font-poppins font-medium leading-tight py-4 text-center justify-center text-white">Selanjutnya</p>
            </div>
        </section>

        <section id="lokasiwaktuKejadian">
            <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Lokasi & Waktu Kejadian</p>

            <!--Tanggal Kejadian-->
            <label for="default-input" class="block mb-2 pt-6 text-sm font-poppins font-medium text-gray-900 dark:text-white">Model Kendaraan</label>
            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>

             <!--Waktu Kejadian-->
             <div class="mb-4">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Model Kendaraan</label>
                <input placeholder="Masukkan model kendaraan" required type="text" id="default-input" name="model_kendaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Lokasi Kejadian-->
            <div class="mb-4">
                <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Model Kendaraan</label>
                <input placeholder="Masukkan model kendaraan" required type="text" id="default-input" name="model_kendaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <!--Next Page Button-->
            <div id="btn-dataKendaraan" class="mb-6 items-center justify-center w-full h-11 bg-blue-600 hover:bg-blue-700 rounded-lg">
                <p class="text-sm font-poppins font-medium leading-tight py-4 text-center justify-center text-white">Selanjutnya</p>
            </div>
        </section>

        <section id="deskripsiPendukung">
            <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Deskripsi Pendukung</p>
            <div class="inline-flex space-x-3.5 items-center justify-center p-4 bg-blue-50 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>

                <p class="flex-1 text-xs leading-none text-blue-800">Deskripsi dapat berupa hal spesifik yang ada pada kendaraan anda seperti stiker, part modif, ataupun bekas tabrakan.</p>
            </div>
        </section>
    </form>
</div>

</html>
