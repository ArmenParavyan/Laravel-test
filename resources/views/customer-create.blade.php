<h1 style="text-align: center">
    Create a customer
</h1>
<br>

<form action="{{route('customer.create')}}" method="POST" style="text-align: center">
    <label for="name">Name</label>
    <input type="text" name="name" id="name"> 
    <br>
    <br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname"> 
    <br>
    <br>
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender"> 
    <br>
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" id="age">
    <br>
    <br>
    <input type="submit" value="Create">
</form>