<h1>
    Custumers
</h1> 
<br>


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
            <td>
                <button>
                    <a href="{{route('customer.edit', $value['id'])}}" 
                        style="text-decoration: none">
                        Edit
                    </a>
                </button>
            </td>
        </tr>

    @endforeach
</table>

