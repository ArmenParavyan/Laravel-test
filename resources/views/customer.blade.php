<h1>
    Custumers
</h1>
<br>


<form action="{{ route('customer.filtr') }}" method="POST">
    <label for="gender">
        Filter by gender
    </label>
    <select name="gender" id="gender">
        @isset($gender)
            <option selected hidden>
                {{ $gender }}
            </option>
        @endisset
        {{-- @if (!empty($gender))
            <option selected hidden>
                {{ $gender }}
            </option>
        @endif --}}
        <option value="all">all</option>
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <input type="submit" value="Filter">
</form>

<table>
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>gender</th>
        <th>age</th>
    </tr>
    @foreach ($data as $value)
        <tr>
            <td>
                {{ $value->name }}
            </td>
            <td>
                {{ $value->surname }}
            </td>
            <td>
                {{ $value->gender }}
            </td>
            <td>
                {{ $value->age }}
            </td>
            <td>
                <button>
                    <a href="{{ route('customer.edit', $value['id']) }}" style="text-decoration: none">
                        Edit
                    </a>
                </button>
            </td>
            <td>
                <button>
                    <a href="{{ route('destroy', $value['id']) }}" style="text-decoration: none">
                        Destroy
                    </a>
                </button>
            </td>
        </tr>
    @endforeach
</table>
