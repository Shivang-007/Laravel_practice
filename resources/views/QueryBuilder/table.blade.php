<h1>data retriving throgth query builder</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Age</td>
        <td>City</td>
        <td>Operation</td>
    </tr>
    @foreach($record as $users)
    <tr>
        <td>{{$users['id']}}</td>
        <td>{{$users['name']}}</td>
        <td>{{$users['age']}}</td>
        <td>{{$users['city']}}</td>
    </tr>
    @endforeach
    
</table>