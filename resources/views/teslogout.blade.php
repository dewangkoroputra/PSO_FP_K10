{{-- INI BUAT LOGOUT NANTI TINGGAL DI COPY BUAT DI STYLING --}}
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


{{-- INI BUAT FORM KENDARAAN HILANG --}}
<h2>Laporan kendaraan Hilang</h2>
<form method="POST" enctype="multipart/form-data" action="/kehilangan">
    @csrf
    <input type="text" name="kontak" placeholder="Nomor Yang bisa Dihubungi"> <br><br>
    <input type="text" name="jenisKendaraan" placeholder="Jenis Kendaraan"> <br><br>
    <input type="text" name="model_kendaraan" placeholder="Model Kendaraan"><br><br>
    <input type="text" name="tahun_keluaran" placeholder="Tahun Keluaran Kendaraan"><br><br>
    <input type="text" name="warna" placeholder="Warna Kendaraan"><br><br>
    <input type="text" name="plat_nomor" placeholder="Nomor Plat Kendaraan"><br><br>
    <p>Foto kendaraan</p>
    <input type="file" name="foto_kendaraan"><br><br>
    <input type="text" name="tanggal_kejadian" placeholder="Tanggal Kejadian"><br><br>
    <input type="text" name="waktu_kejadian" placeholder="Waktu Kejadian"><br><br>
    <button type="submit">Submit Data</button>
</form>

