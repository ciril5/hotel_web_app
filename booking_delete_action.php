<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'id' key is set in the $_POST array
    if (isset($_POST['id'])) {
        // Collect data
        $id = $_POST['id'];

        $deleteQuery = "DELETE FROM booking WHERE id=$id";

        if (mysqli_query($conn, $deleteQuery)) {
            echo "Record deleted successfully!";
            echo "<script>alert('Booking deleted successfully!!'); window.location='index.php' </script>";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "The 'id' parameter is missing in the form submission.";
    }
} else {
    // echo "Invalid request method. This script should be accessed via a form submission.";
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
                <form action="booking_delete_action.php" method="post">
                    <div class="row g-3">

                    <div class="col-md-12">
                            <input type="number" class="form-control" id="id" name="id"  placeholder="Enter Your Booking ID"  required>
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