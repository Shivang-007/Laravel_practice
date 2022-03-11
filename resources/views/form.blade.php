<h1>PHP Form</h1>
@if(session('username'))

    <h3>Data saved for {{session('username')}}</h3>

@endif
<form action="/login" method="POST">
@csrf
Username<input type="text" name="username"><br>
<span style="color:red;">@error('username'){{$message}}@enderror</span>
<br>
Password<input type="text" name="password"><br>
<span style="color:red;">@error('password'){{$message}}@enderror</span>
<br>
Submit   <input type="submit"><br>

</form>