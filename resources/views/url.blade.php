<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('Contact')}}">Contact</a>
    <a href="{{route('About')}}">About</a>
    <a href="{{URL::signedRoute('secret')}}">secret</a>
    {{-- <a href="{{URL::temporarySignedRoute('secret',now()->addSeconds(10))}}">secret</a> --}}


   

    <div>
        {{-- {{url()->current()}} --}}

         {{-- {{URL::current()}}               using URl Facades  --}}

        {{-- {{url()->previous()}} --}}

        {{-- {{url('About',['apple','ball'])}} --}}

        {{-- {{url('About',['apple'=>1,'ball'=>2])}}         result is.../About/1/2 --}}

        {{route('post.comment',['post'=>'hritik-Roshan','comment'=>'nice','hello'=>'world'])}}

    </div>
</body>
</html>