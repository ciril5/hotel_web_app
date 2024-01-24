





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <!-- bootstrap cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css link -->

    <link rel="stylesheet" href="/plala19/css/style.css">
    <link rel="stylesheet" href="style.css">
    <style>
      
      .btn-bgcolor{
        color: white;
        background-color:#663333;
        border-color: #663333;
      }
      
          </style>
      

</head>
<body class=" bg-light">

<?php include "include/navbar/navbar.php" ?>


   
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 shadow mx-auto mt-5 p-5 round">

            <!-- form -->
          
 <form class="row g-3" name="signup" method="POST" action="signup_action.php">
   <h5>Sign Up Form</h5>

  <div class="col-md-12">
    <label for="inputCity" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" id="inputCity">
  </div>
         
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="inputPassword4">
  </div>
 

  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I accept the term & conditions.
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary    btn-bgcolor">Sign In</button>
  </div>
</form>
             

        </div>
    </div>
</div>











 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>