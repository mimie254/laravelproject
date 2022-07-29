<h1>Update List</h1>
<form action="/edit" method="post">

@csrf
    
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="email" value="{{$data['email']}}"><br>
    <input type="text" name="password" value="{{$data['password']}}"> <br>
    <input type="text" name="address" value="{{$data['address']}}"><br>
    <input type="text" name="address_2" value="{{$data['address_2']}}"><br>
    <input type="text" name="city" value="{{$data['city']}}"><br>
    <input type="text" name="gender" value={{$data['gender']}}><br>
    <button type="submit">Update</button>

</form>