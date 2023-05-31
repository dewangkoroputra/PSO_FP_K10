@extends('layout')

@section('content')
<nav class="sticky top-0 max-w-xl mx-auto navbar justify-between p-2 bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl mx-auto p-4 inline-flex space-x-4 items-center justify-start">
        <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#374151" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="text-xl font-poppins font-semibold text-gray-700">Lapor Kehilangan</p>
    </div>
</nav>
<div class="max-w-xl px-8 pt-8 mx-auto bg-slate-100 h-max">
    <p class="text-lg font-poppins font-medium leading-relaxed text-gray-600">Data Kendaraan & Pemilik</p>
    <!--No.Handphone Pelapor-->
    <div class="mb-4 pt-4">
        <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">No.Handphone Pelapor</label>
        <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <!--Jenis Kendaraan-->
    <label for="countries" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Jenis Kendaraan</label>
    <select id="countries" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih jenis kendaraan</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
    </select>

    <!--Model Kendaraan-->
    <div class="mb-6">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large input</label>
        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <!--Tahun Keluaran-->
    <div class="mb-4">
        <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Tahun Keluaran</label>
        <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <!--Warna Kendaraan-->
    <div class="mb-4">
        <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Warna Kendaraan</label>
        <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <!--Plat Nomor Kendaraan-->
    <div class="mb-4">
        <label for="default-input" class="block mb-2 text-sm font-poppins font-medium text-gray-900 dark:text-white">Plat Nomor Kendaraan</label>
        <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-4">
        <br>
        <br>
    </div>
</div>
<footer class="max-w-xl bottom-0 mx-auto bg-gray-700">
    <p>tes</p>
</footer>
@endsection

</html>
