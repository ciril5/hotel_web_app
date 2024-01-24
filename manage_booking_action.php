<?php
session_start();
include("connect.php");

if (isset($_POST['m_phone'])) {
    $m_phone = $_POST['m_phone'];

    $sql = mysqli_query($conn, "SELECT * FROM booking WHERE phone='$m_phone'");
    $result = mysqli_fetch_array($sql);
}

// $sql = "update booking set name=\"$new_h_name\" where id=$m_phone";  
// if(mysqli_query($conn, $sql)){  
//  echo "Record updated successfully";  
// }else{  
// echo "Could not update record: ". mysqli_error($conn);  
// }  
  
// mysqli_close($conn)



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royalplace</title>

    <link rel="icon" type="image/x-icon" href="images/logo/fav-icon.png">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-light">

    <?php include "include/navbar/navbar.php"?>

    <?php
    if ($result) {
    ?>
    <section class="pb-5 pt-5">
        <div class="container">
             <div class="row">
              <div class="col-md-8">

             <div class="card">
        <div class="card-header">
           <h4 class="text-uppercase text-center">Your Booking Details</h4> 
        </div>
        <div class="card-body">
            <h5 class="card-title">Hotel Name: <?php echo $result["hotel_name"]; ?></h5>
            <p class="card-text fs-6">Booking ID: <?php echo $result["id"]; ?></p>
            <p class="card-text fs-6">Name: <?php echo $result["name"]; ?></p>
            <p class="card-text fs-6">Phone: <?php echo $result["phone"]; ?></p>
            <p class="card-text fs-6">Date From: <?php echo $result["date_from"]; ?></p>
            <p class="card-text fs-6">Date To: <?php echo $result["date_to"]; ?></p>
            <p class="card-text fs-6">Special Request: <?php echo $result["special_req"]; ?></p>
            <div class="card-body">
                <div class="row">
                <div class=" col-12 mb-3 col-md-6">
            
                    <button type="button" class="btn btn-primary booking-btn btn-floating start-start" data-mdb-ripple-init>
                        <a href="booking_update_action.php" class="text-white">Edit
                    <i class="fa-solid fa-user-pen" style="color: #fff;"> </i> </a>
                     </button>
                </div>

                <div class=" col-12 mb-3 col-md-6">
                     <button type="button" class="btn btn-primary booking-btn btn-floating start-end" data-mdb-ripple-init>
                        <a href="booking_delete_action.php" class="text-white"> Delete
                        <i class="fa-solid fa-trash fs-6" style="color: #ffffff;"></i>
                     </button>
           
                </div>
                </div>

            </div>
        </div> 
       
        
        
     </div>
     
    </div>
    </div>
    </section>
    <?php
    } else {
      ?>
      <section class="pt-5 pb-5">
          <div class="container">
               <div class="row">
                   <div class="col-md-6">
                   <div class="alert bg-danger text-white fs-3" role="alert">
                       No Booking found for this number: <?php echo $m_phone; ?>
                   </div>

                   </div>
               </div>
          </div>
      </section>
      
      <?php
      }
      ?>
                  
      
    
    <!-- footer section -->
    <?php include "include/footer/footer.php"?>

    <!-- bootstrap cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
