<h1 style="text-align: center">
    Create a customer
</h1>
<br>

<form action="{{route('customer.create')}}" method="POST" style="text-align: center">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old("name")}}"> 
    @if($errors->has("name"))
        <div class="error">
            {{$errors->first("name")}}
        </div>
    @endif
    <br>
    <br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" value="{{old("surname")}}"> 
    @if($errors->has("surname"))
    <div class="error">
        {{$errors->first("surname")}}
    </div>
    @endif
    <br>
    <br>
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" value="{{old("gender")}}"> 
    @if($errors->has("gender"))
    <div class="error">
        {{$errors->first("gender")}}
    </div>
    @endif
    <br>
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" id="age" value="{{old("age")}}">
    @if($errors->has("age"))
    <div class="error">
        {{$errors->first("age")}}
    </div>
    @endif
    <br>
    <br>
    <input type="submit" value="Create">
</form>
