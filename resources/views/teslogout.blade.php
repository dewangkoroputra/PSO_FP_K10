<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>



<form method="POST" action="{{ route('kehilangan') }}">
    @csrf
    <input type="text" name="kontak" placeholder="Nomor Yang bisa Dihubungi">
    <input type="text" name="jenisKendaraan" placeholder="Jenis Kendaraan">
    <input type="text" name="model_kendaraan" placeholder="Model Kendaraan">
    <input type="text" name="tahun_keluaran" placeholder="Tahun Keluaran Kendaraan">
    <input type="text" name="warna" placeholder="Warna Kendaraan">
    <input type="text" name="plat_nomor" placeholder="Nomor Plat Kendaraan">
    <input type="text" name="foto_kendaraan" placeholder="Foto Kendaraan">
    <input type="text" name="tanggal_kejadian" placeholder="Tanggal Kejadian">
    <input type="text" name="waktu_kejadian" placeholder="Waktu Kejadian">
    <button type="submit">Submit Data</button>
</form>

