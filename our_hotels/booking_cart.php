<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royalplace</title>

     <!-- bootstrap cdn link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- css link -->

<link rel="stylesheet" href="css/our_hotels.css">

<!-- fontawesome CDN link -->

<script src="https://kit.fontawesome.com/c1a3994336.js" crossorigin="anonymous"></script>




</head>
<body>

<?php include "navbar/navbar.php"?>

<section class="pt-5">
<!-- booking form  -->
<div class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
                <div class="col-12">
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Booking form</h3>
                </div>
                <form action="/plala19/booking-action.php" method="post">
                    <div class="row g-3">

                        <div class="col-md-12">
                            <input type="text" class="form-control"  id="h_name" name="h_name" value="Royalplace Hotel & Convention Centre, Agra"  required>
                        </div>
                       
                        <div class="col-md-12">
                            <input type="text" class="form-control"  id="name" name="name"  placeholder="Full Name"  required>
                        </div>
                        
                        <div class="col-md-12">
                            <input type="tel" class="form-control" id="phone" name="phone"  min="10" max="13" pattern="[789][0-9]{9}"  placeholder="Enter phone number"  required>
                        </div>
                        <div class="col-md-6">
                        
                        <input type="text"  class="form-control" id="f_date" name="f_date"  placeholder="  Date From" onfocus="(this.type='date')"  required>
                        </div>
                        <div class="col-md-6">
                      
                        <input type="text"  class="form-control" id="t_date" name="t_date" placeholder=" Date To" onfocus="(this.type='date')"  required>
                        </div>
                      
                        <div class="col-12">
                            <textarea class="form-control"  id="sp-req" name="sp-req" placeholder="Special Request"></textarea>
                        </div>
                        <div class="col-12 mt-5">                        
                            <button type="submit" class="btn btn-primary  booking-btn float-end">Confirm</button>
                            <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- booking form  end -->


</section>


<!-- footer section -->

<?php include "footer/footer.php"?>

 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>