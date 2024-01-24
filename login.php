<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <!-- bootstrap cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css link -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/plala19/css/style.css">
    <style>
      
.btn-bgcolor{
  color: white;
  background-color:#663333;
  border-color: #663333;
}

    </style>

</head>
<body>

<?php include "include/navbar/navbar.php" ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 shadow mx-auto mt-5 p-5 round">

            <!-- form -->
          
            <form  action="login_action.php"  method="post">
              <h5>Log In Form</h5>
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputText" aria-describedby="TextHelp">
    <div id="TextHelp" class="form-text">We'll never share your date with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
   <a href="signup.php" class="text-decoration-none text-capitalize text-dark">not a member?<span  class="text-decoration-underline text-dark">sign up now</span> </a>
  </div>
  <button type="submit" name="submit" class="btn btn-bgcolor">Log In </button>
</form>

             

        </div>
    </div>
</div>











 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>