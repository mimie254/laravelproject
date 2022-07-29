<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>forms</title>
    
  </head>
  <body>
    <div class="container">
    <h1>Registration Form</h1>
    <form method="post" action="{{route('bootstrap.store')}}"  >
    @csrf
    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4"  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2"   class="form-label">Address_2</label>
    <input type="text" name="address_2"  class="form-control"  id="inputAddress 2" placeholder="Apartment, studio, or floor">
  </div>
  
  <div class="col-md-4">
    <label for="inputState"   class="form-label">City</label>
    <select id="inputState" name="city" class="form-select">
      <option selected>Choose...</option>
      <option>Nairobi</option>
      <option>Nakuru</option>
      <option>Kisumu</option>
      <option>Mombasa</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Gender</label>
    <br>

    <div class="form-check" >
  <input class="form-check-input" name="gender" value="female" type="radio"  id="female" >
  <label class="form-check-label" for="Female">
  Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="gender" value="male" type="radio"  id="male">
  <label class="form-check-label" for="Male">
    Male
  </label>
</div> 
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember me 
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>