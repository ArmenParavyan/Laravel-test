<h1>
    Book
</h1> 


<table>
    <tr>
        <th>author</th>
        <th>title</th>
        <th>email</th>
        <th>age</th>
    </tr>
    @foreach($data as $value) 
        <tr>
            <td>
                {{$value->author}}
            </td>
            <td>
                {{$value->title}}
            </td>
            <td>
                {{$value->email}}
            </td>
            <td>
                {{$value->age}}
            </td>
        </tr>
    @endforeach
</table>

{{$data->links()}}