<h1>data from student Database crud table</h1>

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
        <td><a href={{"delete/".$users['id']}}>Delete</a>  |   <a href={{"update/".$users['id']}}>Update</a> </td>
    </tr>
    @endforeach
    
</table>