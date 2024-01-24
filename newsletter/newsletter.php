


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotels</title>
     <!-- bootstrap cdn link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- css link -->

<link rel="stylesheet" href="css/wedding.css">


<style>
    .form-box{
        border: none;
        outline: none;
        background-color: #f8f9fa ;
        border-bottom: 2px solid  #dee2e5;
        font-size:1rem;

      }

</style>

</head>


<body class="bg-light">

<?php include "navbar/navbar.php"?>




 <section class="pt-5 pb-5 mt-5">
      <div class="container">
            <div class="row">

                  <div class="col-md-12">
                        <div class="row mx-auto">
                             <div class="col-md-9 mx-auto ">
                                  <h4 class="text-center common-heading-dining">Subscribe to Newsletter</h4>
                                   <p class=" text-center common-text-dining pt-3"></p>
                         
                             </div>
                         </div>
                   </div>


                   <div class="row">
                         <div class="col-md-12"> 

                         <!-- Enquiry  form -->
<form  action="/plala19/newsletter_action.php" method="post" class="row pt-5 g-3">

  <div class="col-md-4 mb-2 mb-md-0">
  <div class=" fs-6 text-black-50">Full name</div>
    <input type="text" class=" form-box w-75 h-100"  name="name" id="name">
  </div>

  <div class="col-md-4  mb-2 mb-md-0">
  <div class=" fs-6 text-black-50">Email id*</div>
    <input type="email" class="form-box w-75 h-100" name="email" id="email" >
  </div>
 
  <div class="col-md-4 mb-2 mb-md-0 ">
  <div class=" fs-6 text-black-50">Mobile Number*</div>
    <input type="number" class="form-box w-75 h-100" name="phone" id="phone" >
  </div>

  <div class="col-md-4  pt-3 mb-2 mb-md-0 ">
  <div class=" fs-6 text-black-50">Residing City*</div>
    <input type="text" class="form-box w-75 h-100" name="city_name" id="city_name">
  </div>
 

  <div class="col-12 mt-5">
    <button type="submit" name="submit" class="btn comm-btn btn-primary">Confirm</button>
  </div>
</form>
                               
</div>
 </div>


            

             
           </div>
        </div>
   </section>   
  

 





<!-- footer section -->
<?php include "footer/footer.php"?>
 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
