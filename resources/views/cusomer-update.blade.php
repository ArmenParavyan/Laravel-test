<h1 style="text-align: center">
    Update a customer
</h1>
<br>

<form action="{{route('customer.update')}}" method="POST" style="text-align: center">
    <input type="hidden" name="id" value="{{$customer->id}}">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}"> 
    <br>
    <br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" value="{{$customer->surname}}"> 
    <br>
    <br>
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" value="{{$customer->gender}}"> 
    <br>
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" id="age" value="{{$customer->age}}">
    <br>
    <br>
    <input type="submit" value="Update">
</form>