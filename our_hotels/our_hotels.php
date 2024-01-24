<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotels</title>
     <!-- bootstrap cdn link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- css link -->

<link rel="stylesheet" href="css/our_hotels.css">



</head>


<body class="bg-light">

<?php include "navbar/navbar.php"?>



<!-- <section class="p-5 ">
<div class="container  select-bgcolor p-3">
       <div class="row ">
             <div class="col-md-6">
             <select class="form-select" aria-label="Default select example">
             <option selected disabled value="" >Search place</option>
                    <option value="1">Goa</option>
                    <option value="2">Ahmedabad</option>
                    <option value="3">Amritsar</option>
            </select>
             </div>

             <div class="col-md-3">
             <select class="form-select" aria-label="Default select example">
             <option selected disabled value="">Country</option>
                    <option value="1">India</option>
                    <option value="2">Nepal</option>
                    <option value="3">Sri lanka</option>
            </select>
             </div>

             <div class="col-md-3">
             <select class="form-select" aria-label="Default select example">
             <option selected disabled value="">Filter By</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
            </select>
             </div>
       </div>
</div>

</section> -->

<!-- list of hotels -->


<section class="pt-5 pb-5 mt-5" >
   <div class="container">
       <div class="row ">

       <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       <img src="https://www.tajhotels.com/content/dam/thrp/destinations/Agra/16x7intro/Intro.jpg/jcr:content/renditions/cq5dam.web.141.141.jpeg" alt="" srcset="">
         <span class="mx-3 text-dark">Goa</span>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <!-- card -->
     <a href="goa-overview_one.php" class="text-decoration-none  text-dark">
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace Hotel & Convention Centre, Agra</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>


    <!-- card -->

    <a href="goa-overview_two.php" class="text-decoration-none text-dark">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace, Agra-IHCL SeleQtions</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>


      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <img src="https://www.tajhotels.com/content/dam/thrp/destinations/Ahmedabad/16x7intro/Intro.jpg/jcr:content/renditions/cq5dam.web.141.141.jpeg" alt="" srcset="">
        <span class="mx-3 text-dark">Ahmedabad</span>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      
       <!-- card -->
       <a href="goa-overview_one.php" class="text-decoration-none text-dark">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace, Agra-IHCL SeleQtions</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>

 <!-- card -->
 <a href="goa-overview_two.php" class="text-decoration-none text-dark">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace, Agra-IHCL SeleQtions</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>
      


      </div>
    </div>
  </div>
  <div class="accordion-item mb-5">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <img src="https://www.tajhotels.com/content/dam/thrp/destinations/Amritsar/Intro-16x7/Intro-Shot-16x7.jpg/jcr:content/renditions/cq5dam.web.141.141.jpeg" alt="" srcset="">
        <span class="mx-3 text-dark">Amritsar</span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

       <!-- card -->
<a href="goa-overview_one.php" class="text-decoration-none text-dark">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace, Agra-IHCL SeleQtions</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>
 <!-- card -->

 <a href="goa-overview_two.php" class="text-decoration-none text-dark">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tajhotels.com/content/dam/tajhotels/greyplaceholder.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Royalplace, Agra-IHCL SeleQtions</h5>
        <p class="card-text">5 Star Business Hotel in Agra near Taj Mahal.</p>
       
      </div>
    </div>
  </div>
</div>
</a>



      </div>
    </div>
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