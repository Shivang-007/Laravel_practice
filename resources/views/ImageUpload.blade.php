<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
</head>
<body>
    <h1>Upload Image</h1>
    <div>
     <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image"><br><br>
        <input type="submit" name="upload" value="Upload">


     </form>
     <hr>
     <ul>
         @foreach ($images as $image)
             <li>Name :{{$image->name}} 
                 Size: {{$image->size}}
             <img src="Images/{{$image->name}}" alt="not found"> 
             <a href="{{route('download',$image->id)}}">Download</a>
            </li>
             
         @endforeach
     </ul>
    </div>
</body>
</html>