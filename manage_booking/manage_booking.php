
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotels</title>
     <!-- bootstrap cdn link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- css link -->

<link rel="stylesheet" href="css/m_booking.css">
<style>
        

        .hidden {
            display: none;
        }
    </style>



</head>


<body class="bg-light">

<?php include "navbar/navbar.php"?>

<!-- BOOKING SEARCHING  CARD -->

<section class="pt-5 pb-5">
    <div class="container">
       
         <div class="row">
             <div class="col-md-6 text-start">
                 <div class="searching-card">
                        
               
                <form  class="border p-5 " action="/plala19/manage_booking_action.php"  method="post">

                <h4>Find Your Reservations</h>

                <div class="mb-3 mt-3">
                <input type="text"  class="form-control"  id="m_phone" name="m_phone"  placeholder=" Enter Your Phone Number"  required>
                     <!-- <input type="tel" class="form-control"  id="m_phone" name="m_phone" 
                        placeholder=" Enter Your Phone Number"  required> -->
                </div>
                <div class="mb-5 mt-3">
                <button type="submit" class="btn btn-primary  booking-btn float-start">Find  Bookiing</button>

                </div>
               
                </form>
                     

                      
                 </div>
                  
             </div>
             
         </div>
    </div>
</section>







<!-- BOOKING SEARCHING  CARD  END-->



<section class="pt-5 pb-5">
    <div class="container">
       
         <div class="row">
             <div class="col-md-6 text-start">
             <div class="card text-end" style="width:18rem;">
             <h5 class="card-title text-center mt-3 mb-3">Booking Details</h5>
			<div class="card-body text-start">
				
				<p class="card-text">
					
				</p>
                <p class="card-text">
					
				</p>
                <p class="card-text">
					
				</p>
                <p class="card-text">
					
				</p>
                <p class="card-text">
					
                </p>
   
                <p class="card-text">
					
                </p>
                
			</div>
		    </div>
                  
             </div>
             
         </div>
    </div>
</section>

<script>
        var cards = document.getElementsByClassName('card');

        for (var i = 0; i < cards.length; i++) {
            var p = cards[i].getElementsByTagName('p')[0];
            if (p.textContent.trim() === '') {
                cards[i].classList.add('hidden');
            }
        }
    </script>












<!-- footer section -->
<?php include "footer/footer.php"?>
 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>