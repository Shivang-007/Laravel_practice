<h1>Api data</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Year</td>
        <td>Color</td>
        <td>pantone_value</td>

    </tr>
    @foreach($data as $users)
    <tr>
        <td>{{$users['id']}}</td>
        <td>{{$users['name']}}</td>
        <td>{{$users['year']}}</td>
        <td>{{$users['color']}}</td>
        <td>{{$users['pantone_value']}}</td>

    </tr>
    @endforeach
    
</table>