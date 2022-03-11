<h1>PHP learning</h1>
{{-- @if($name=="Shivang")
<h2>hello,{{$name}}</h2>
@endif --}}

{{-- @for($i=1;$i<=10;$i++)
<h3>{{$i}}</h3>
@endfor 
--}}

{{--@foreach($name as $user)
    <h3>{{$user}}</h3>
@endforeach --}}

@switch($name)
@case ("shivang")
<h3>User is shivang</h3>
@break
@case ("amit")
<h3>User is shivang</h3>
@break
@case ("tejas")
<h3>User is shivang</h3>
@break
@default 
<h3>dummy user</h3>
@endswitch