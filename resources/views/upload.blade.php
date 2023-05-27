<form method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" action="{{ route('upload') }}" name="file"><br><br>
    <button type="submit">Submit Data</button>
</form>
