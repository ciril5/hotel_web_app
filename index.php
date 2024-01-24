
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royalplace</title>

    <link rel="icon" type="image/x-icon" href="images/logo/fav-icon.png">

      <!-- bootstrap cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css link -->

    <link rel="stylesheet" href="css/style.css">


</head>
<body class="bg-light">
    
<?php include "include/navbar/navbar.php"?>


 
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide  mt-5 pt-4">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <!-- <img src="images/carousel/ca-2.png" class="d-block carousel-pic w-100 " alt="...">       -->
    <picture>
    <source
           srcset="images/carousel/v-1.png"
             media="(max-width:576px)"
           >
    <img src="images/carousel/ca-1.jpg" class="d-block w-100 carousel-pic" alt="...">
    </picture>

    <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
        
      </div>
    </div>
    <div class="carousel-item">
    <picture>
    <source
           srcset="images/carousel/v-2.png"
             media="(max-width:576px)"
           >
    <img src="images/carousel/ca-3.png" class="d-block w-100 carousel-pic" alt="...">
    </picture>
      <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
        
        <!-- <a href="#" class="btn btn-outline-light px-4 py-2 rounded-0">Know More</a> -->
      </div>
    </div>
    <div class="carousel-item">
    <picture>
    <source
           srcset="images/carousel/v-3.png"
             media="(max-width:576px)"
           >
    <img src="images/carousel/ca-4.png" class="d-block w-100 carousel-pic" alt="...">
    </picture>
      <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
        
        <!-- <a href="#" class="btn btn-outline-light px-4 py-2 rounded-0">Know More</a> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- carousel ends --> 


    <!-- offers and promotions -->

    <section class="mt-4 mt-md-5 mb-5 ">
      <div class="container">
        <div class="row">
            <div class="col-md-10  ms-auto me-auto">
                <p class="text-center off-text">WELCOME TO<strong> ROYALPLACE </strong> HOTELS & RESORTS</p>
                <h4 class="text-center common-heading text-capitalize">19 hotel brands.
                <br>6,000+ global destinations.
                 </h4>
                 <p class="text-center common-text">Travel like you mean it with  ROYALPLACE One Rewards, our award winning loyalty program 
                  makes it easier for you to see the world and get rewarded while doing it.</p>

                  <div class="explore_btn_wrp text-center pb-5">
                 
                  <a href="/plala19/explore/explore.php"> <button type="button" class="btn text-white explore_btn">EXPLORE NOW</button> </a>
               
                  </div>
                  <H2 class=" text-center  common-heading text-uppercase">Offers for every way you travel</H2>

            </div>

         <div class="row mt-4 mt-md-5">

         <div class=" col-12 col-md-4 mb-4 mb-md-0">

         <div class="card mx-auto text-center off-card border-0 rounded-2 shadow">
        <img src="images/offer_sec/off-1.jpeg" class="card-img-top rounded-0" alt="...">
      <div class="card-body">
          <h4 class="common-text text-start">Flash sale: save up to 25% on end-of-year travel.</h4>
          <a href="/plala19/our_hotels/our_hotels.php"><h5 class="text-decoration-underline  text-start off-text"> LEARN MORE</h5></a>
      </div>
    </div> 

        </div>

      

        <div class=" col-12 col-md-4 mb-4 mb-md-0">

        <div class="card mx-auto text-center off-card border-0 rounded-2 shadow">
              <img src="images/offer_sec/off-2.jpg" class="card-img-top rounded-0" alt="...">
      <div class="card-body">
          <h4 class="common-text text-start">Flash sale: save up to 25% on dining.</h4>
          <a href="/plala19/dining/dining.php"><h5 class="text-decoration-underline text-start off-text"> LEARN MORE</h5></a>
      </div>
    </div>


      

        </div>

    


         <div class=" col-12 col-md-4 mb-4 mb-md-0">

         <div class="card mx-auto text-center off-card border-0 rounded-2 shadow">
              <img src="images/offer_sec/off-3.jpg" class="card-img-top rounded-0" alt="...">
      <div class="card-body">
          <h4 class="common-text text-start">Flash sale: save up to 25% on wedding events.</h4>
          <a href="/plala19/wedding/wedding.php"><h5 class="text-decoration-underline text-start off-text"> LEARN MORE</h5></a>
      </div>
    </div>

        </div>
        
    

      </div>
     </div>
        </div>
      </div>
    </section>


    <!-- offers and promotions ends-->

  
<!-- POPULAR DESTINATIONS card -->

<section class="common-sections   bg-color mb-5 ">
    <div class="container text-center common-title mb-5">
         <h2 class="common-heading text-dark">POPULAR DESTINATIONS</h2>
            
    </div>

    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-bs-ride="carousel"  data-bs-ride="true" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner  mx-auto">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">

            <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
              <img src=" images/location/l-2.jpeg " class="card-img-top rounded-0" alt="...">
        <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Goa</h4>
         <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
        </div> 
        </div>

      

        <div class="col-12 col-md-12 col-lg-4 mb-4">
        <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
              <img src="images/location/l-6.jpeg" class="card-img-top rounded-0" alt="...">
              <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Ahmedabad</h4>
          <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
       </div>

        </div>

       
        
        <div class="col-12 col-md-12 col-lg-4 mb-4">
        <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
             <img src="images/location/l-3.jpeg" class="card-img-top rounded-0" alt="...">
             <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Amritsar</h4>
          <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
       </div>
        </div>

      

            
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <div class="container">
            <div class="row">

          
            <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
              <img src=" images/location/l-2.jpeg " class="card-img-top rounded-0" alt="...">
        <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Goa</h4>
         <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
        </div> 
        </div>

      

        <div class="col-12 col-md-12 col-lg-4 mb-4">
        <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
              <img src="images/location/l-6.jpeg" class="card-img-top rounded-0" alt="...">
              <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Ahmedabad</h4>
          <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
       </div>

        </div>

       
        
        <div class="col-12 col-md-12 col-lg-4 mb-4">
        <div class="card mx-auto text-center card-width border-0 rounded-2 shadow">
             <img src="images/location/l-3.jpeg" class="card-img-top rounded-0" alt="...">
             <div class="card-body mt-5 ">
          <h4 class="p_destination-text float-start my-auto">Amritsar</h4>
          <a href="/plala19/our_hotels/our_hotels.php"> <button type="button" class="btn btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
        </div>
       </div>
        </div>

      
        
       

      </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </section>  

   <!-- POPULAR DESTINATIONS card end -->

   <!-- HAPPENINGS sec -->


   <section class="common-sections   bg-color mb-5 ">
    <div class="container text-center common-title mb-5">
         <h2 class="common-heading text-dark">HAPPENINGS</h2>
            
    </div>

    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-bs-ride="carousel"  data-bs-ride="true" >
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner  mx-auto">
        <div class="carousel-item active">
          <div class="container">
            <div class="row ">

            <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-start happenings-card border-0 rounded-2 shadow">
              <p class="text-center mt-2 mb-2 fs-6 text"> <i class="fa-regular fs-5 fa-clock" style="color: #663333;"></i> Now Open</p>
              <img src="images/happniess/h1.png" class="card-img-top overflow-hidden rounded-0" alt="...">
        <div class="card-body mt-1 ">
          <h4 class="p_destination-text float-start my-auto">Royalpalce Guras Kutir Resort</h4>
          <div class="mt-5">
          <h4 class="fs-6 float-start my-auto">Gangtok</h4>
          <a href="/plala19/happiness/Gangtok-overview.php"><button type="button" class="btn  btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
          </div>
        </div>
        </div> 
        </div>


        <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-start happenings-card border-0 rounded-2 shadow">
              <p class="text-center mt-2 mb-2 fs-6 text"> <i class="fa-regular fs-5 fa-clock" style="color: #663333;"></i> Now Open</p>
              <img src="images/happniess/h2.png" class="card-img-top overflow-hidden rounded-0" alt="...">
        <div class="card-body mt-1 ">
          <h4 class="p_destination-text float-start my-auto">Royalplace Antlers Hilton Resort</h4>
          <div class="mt-5">
          <h4 class="fs-6 float-start my-auto">china</h4>
          <a href="/plala19/happiness/Antlers-overview.php"><button type="button" class="btn  btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
          </div>
        </div>
        </div> 
        </div>
  
      
      

            
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <div class="container">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-start happenings-card border-0 rounded-2 shadow">
              <p class="text-center mt-2 mb-2 fs-6 text"> <i class="fa-regular fs-5 fa-clock" style="color: #663333;"></i> Now Open</p>
              <img src="images/happniess/h1.png" class="card-img-top overflow-hidden rounded-0" alt="...">
        <div class="card-body mt-1 ">
          <h4 class="p_destination-text float-start my-auto">Royalpalce Guras Kutir Resort</h4>
          <div class="mt-5">
          <h4 class="fs-6 float-start my-auto">Gangtok</h4>
          <a href="/plala19/happiness/Gangtok-overview.php"><button type="button" class="btn  btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
          </div>
        </div>
        </div> 
        </div>

      
        <div class="col-12 col-md-12 col-lg-4 mb-4 mx-auto">
            <div class="card mx-auto text-start happenings-card border-0 rounded-2 shadow">
              <p class="text-center mt-2 mb-2 fs-6 text"> <i class="fa-regular fs-5 fa-clock" style="color: #663333;"></i> Now Open</p>
              <img src="images/happniess/h2.png" class="card-img-top overflow-hidden rounded-0" alt="...">
        <div class="card-body mt-1 ">
          <h4 class="p_destination-text float-start my-auto">Royalpalce Guras Kutir Resort</h4>
          <div class="mt-5">
          <h4 class="fs-6 float-start my-auto">Gangtok</h4>
          <a href="/plala19/happiness/Antlers-overview.php"><button type="button" class="btn  btn-bgcolor float-end my-auto">VIEW DETAILS</button></a>
          </div>
        </div>
        </div> 
        </div>

      
        

    

       


       

      </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </section>


<!-- 
   <section class="pb-5">
   <div class="container">
         <div class="row ">
         <h2 class="common-heading  text-center p-5 text-dark">OUR ANCILLARY SERVICES</h2>

         <div class="col-md-8 ">
         <iframe width="870" height="315" src="https://www.youtube.com/embed/HxNWvmqKLeA?si=nEXcy_Jefks7URDb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>

         <div class="col-md-4">
         <iframe width="400" height="315" src="https://www.youtube.com/embed/hldQPk5bVYo?si=OMLaoruRRBcvEqmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>         </div>

         <div class="col-md-4">
         <iframe width="415" height="315" src="https://www.youtube.com/embed/T9SgAjIZYHg?si=ohq0XQaVRiC0ECs1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>

         <div class="col-md-4">
         <iframe width="415" height="315" src="https://www.youtube.com/embed/T9SgAjIZYHg?si=ohq0XQaVRiC0ECs1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>

         <div class="col-md-4">
         <iframe width="415" height="315" src="https://www.youtube.com/embed/T9SgAjIZYHg?si=ohq0XQaVRiC0ECs1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>
















               
       
        </div>   
   </div> 
  </section> -->


    <!-- HAPPENINGS  sec end -->


    <!--  Brand royalplace -->

    <section class=" mt-5 mb-5">
        <div class="container">
                 <h2 class="common-heading text-center mb-5 text-dark">OUR BRANDS</h2>
            <div class="row ">
                
             <div class="col-md-4 brand-card mb-3 ">
             <div class="card  bg-dark text-white border-0">
                <img src="images/brand/b-1.png" class="card-img" alt="...">
            <div class="card-img-overlay   brand-text text-center">
            <img src="images\logo\logo.png" class="text-center" alt="pp" srcset="" width="40%"> 
                 <p class="card-text text-darktext brand-para">The unrivalled guardian of grandeur, Taj conjures a panoply of
                   superlatives. With an art of hospitality that has been perfected over a century, Taj delivers 
                  unmatched experiences and lasting memories for guests around the world.</p>
                <a href="/plala19/brand/brand_one.php"> <button type="button" class="btn explore_btn text-white">know more</button></a> 
             </div>
             </div>
                 
             </div>


             <div class="col-md-4 brand-card  mb-3">
             <div class="card  bg-dark text-white border-0">
                <img src="images/brand/b-2.png" class="card-img" alt="...">
            <div class="card-img-overlay   brand-text text-center">
            <img src="images\logo\logo.png" class="text-center" alt="pp" srcset="" width="40%"> 
                 <p class="card-text text-dark  brand-para">Celebrating a legacy of time, a sense of place or a specific theme,
                   SeleQtions offers a range of marquee hotels that each boast of distinct and special experiences.</p>
                   <a href="/plala19/brand/brand_one.php"> <button type="button" class="btn explore_btn text-white">know more</button></a> 
             </div>
             </div>
                 
             </div>

             <div class="col-md-4 brand-card mb-3 ">
             <div class="card  bg-dark text-white border-0">
                <img src="images/brand/b-3.png" class="card-img" alt="...">
            <div class="card-img-overlay   brand-text text-center">
            <img src="images\logo\logo.png" class="text-center" alt="pp" srcset="" width="40%"> 
                 <p class="card-text text-dark brand-para">A distinctive collection of vibrant hotels that are handpicked 
                  for the young, contemporary achievers of today who stand apart without being rebels, and that allow them to discover
                   joie de vivre.</p>
                   <a href="/plala19/brand/brand_one.php"> <button type="button" class="btn explore_btn text-white">know more</button></a> 
             </div>
             </div>
                 
             </div>

     

            
            </div>
        </div>
    </section>

    <!-- Brand royalplace -->
  


<!-- footer section -->
<?php include "include/footer/footer.php"?>

 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>