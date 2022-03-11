<h1>upload File</h1>
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br>
    <button type="submit">upload</button>

</form>