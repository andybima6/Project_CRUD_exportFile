<h1>Upload Excel</h1>

<form method= "POST" action= "{{route('excel-worker') }}" enctype="multipart/form-data">
<input type="file" name = "file">
<button type="submit">Upload</button>
<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
