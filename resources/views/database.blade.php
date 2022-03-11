<form action="/send" method="POST">
    @csrf
    Username<input type="text" name="name"><br>
    <span style="color:red;">@error('username'){{$message}}@enderror</span>
    <br>
    Age<input type="text" name="age"><br>
    <span style="color:red;">@error('age'){{$message}}@enderror</span>
    <br>
    City<input type="text" name="city"><br>
    <span style="color:red;">@error('city'){{$message}}@enderror</span>
    <br>
    <button type="submit">submit</button><br>
    
    </form>