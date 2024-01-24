<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys are set in the $_POST array
    if (isset($_POST['id'], $_POST['new_h_name'], $_POST['new_name'], $_POST['new_phone'], $_POST['new_f_date'], $_POST['new_t_date'], $_POST['new_sp-req'])) {
        // collect data
        $id = $_POST['id'];
        $new_hotelname = $_POST['new_h_name'];
        $new_name = $_POST['new_name'];
        $new_phone = $_POST['new_phone'];
        $new_f_date = $_POST['new_f_date'];
        $new_t_date = $_POST['new_t_date'];
        $new_spreq = $_POST['new_sp-req'];

        $updateQuery = "UPDATE booking SET hotel_name='$new_hotelname', name='$new_name', phone='$new_phone', 
            date_from='$new_f_date', date_to='$new_t_date', special_req='$new_spreq' WHERE id=$id";

        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>alert('Booking updated successfully!!'); window.location='index.php' </script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "One or more POST parameters are missing.";
    }
}
?>

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



<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12  border p-4 shadow bg-light">
                <div class="col-12">
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">edit your booking</h3>
                </div>
                <form action="booking_update_action.php" method="post">
                    <div class="row g-3">

                    <div class="col-md-12">
                            <input type="number" class="form-control" id="id" name="id"  placeholder="Enter Your Booking ID"  required>
                        </div>


                    <div class="col-12">
                            <select class="form-select"   id="new_h_name" name="new_h_name"  required>
                                <option selected disabled value="">Select  Hotels</option>
                                <option value="Royalplace Hotel & Convention Centre, Agra">Royalplace Hotel & Convention Centre, Agra</option>
                                <option value="Royalplace Hotel & Convention Centre, Agra">Royalplace Hotel & Convention Centre, Agra</option>
                                <option value="Royalplace, Agra-IHCL SeleQtions">Royalplace, Agra-IHCL SeleQtions</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control"  id="new_name" name="new_name"  placeholder="First Name"  required>
                        </div>
                        
                        <div class="col-md-12">
                            <input type="tel" class="form-control" id="new_phone" name="new_phone" min="10" max="13" pattern="[789][0-9]{9}" placeholder="Enter phone number"  required>
                        </div>
                        <div class="col-md-6">
                        
                        <input type="text"  class="form-control" id="new_f_date" name="new_f_date"  placeholder="  Date From" onfocus="(this.type='date')"  required>
                        </div>
                        <div class="col-md-6">
                      
                        <input type="text"  class="form-control" id="new_t_date" name="new_t_date" placeholder=" Date To" onfocus="(this.type='date')"  required>
                        </div>
                      
                        <div class="col-12">
                            <textarea class="form-control"  id="new_sp-req" name="new_sp-req" placeholder="Special Request"></textarea>
                        </div>
                        <div class="col-12 mt-5">                        
                            <button type="submit"  name="update" class="btn btn-primary   booking-btn float-end">Confirm</button>
                          
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 

</div>







  


<!-- footer section -->
<?php include "include/footer/footer.php"?>

 <!-- bootstrap cdn link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>