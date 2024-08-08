<h1>
    Custumer
</h1> 


<table>
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>gender</th>
        <th>age</th>
    </tr>
    @foreach($data as $value) 
        <tr>
            <td>
                {{$value->name}}
            </td>
            <td>
                {{$value->surname}}
            </td>
            <td>
                {{$value->gender}}
            </td>
            <td>
                {{$value->age}}
            </td>
        </tr>
    @endforeach
</table>

{{$data->links()}}