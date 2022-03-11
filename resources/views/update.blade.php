<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    Username<input type="text" name="name" value="{{$data['name']}}"><br>
    <span style="color:red;">@error('username'){{$message}}@enderror</span>
    <br>
    Age<input type="text" name="age" value="{{$data['age']}}"><br>
    <span style="color:red;">@error('age'){{$message}}@enderror</span>
    <br>
    City<input type="text" name="city" value="{{$data['city']}}"><br>
    <span style="color:red;">@error('city'){{$message}}@enderror</span>
    <br>
    <button type="submit">Update</button>
    
    </form>