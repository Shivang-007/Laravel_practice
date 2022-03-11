<h1>form validation</h1>



{{-- @if($errors->any())            //showing wether there is any error occuring or not
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif --}}


<form action="/validate" method="POST">
    @csrf
    Username<input type="text" name="username"><br>
    <span style="color:red;">@error('username')*{{$message}}@enderror</span>
    <br>
    Password<input type="text" name="password"><br>
    <span style="color:red;">@error('password')*{{$message}}@enderror</span>
    <br>
    Submit   <input type="submit"><br>
    
    </form>