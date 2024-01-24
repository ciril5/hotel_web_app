



<link rel="stylesheet" href="navbar/nav.css">


<nav class="navbar navbar-expand-lg nav-light sticky bg-light shadow pt-2 pb-2 fixed-top">
  <div class="container">
  <a class="navbar-brand mx-0 mx-lg-5" href="/plala19/index.php">
      <img src="logo\logo.png" alt="" class="logo">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link  text-dark" href="/plala19/index.php">HOME</a>
        </li>
      <li class="nav-item  ">
          <a class="nav-link text-dark active" aria-current="page" href="/plala19/our_hotels/our_hotels.php">OUR HOTELS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="dining.php">DINING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="/plala19/wedding/wedding.php">WEDDINGS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark" href="/plala19/manage_booking/manage_booking.php">MANAGE BOOKING</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ACCOUNT
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item  text-dark" href="/plala19/signup.php">SIGN UP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item  text-dark" href="/plala19/login.php">LOG IN</a></li>
            
            
           
          </ul>
        </li>

        
        
      <form class="d-flex ms-0 ms-lg-3">
      <!-- <button type="button" class="btn btn-bgcolor text-white">Book A Stay</button> -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-bgcolor text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Book A Stay
      </button>

      </form>
    </div>
  </div>
</nav>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
<!-- booking form  -->
<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12  border p-4 shadow bg-light">
                <div class="col-12">
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Booking form</h3>
                </div>
                <form action="/plala19/booking-action.php" method="post">
                    <div class="row g-3">


                    <div class="col-12">
                            <select class="form-select"   id="h_name" name="h_name"  required>
                                <option selected disabled value="">Select  Hotels</option>
                                <option value="Royalplace Hotel & Convention Centre, Agra">Royalplace Hotel & Convention Centre, Agra</option>
                                <option value="Royalplace Hotel & Convention Centre, Agra">Royalplace Hotel & Convention Centre, Agra</option>
                                <option value="Royalplace, Agra-IHCL SeleQtions">Royalplace, Agra-IHCL SeleQtions</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control"  id="name" name="name"  placeholder="First Name"  required>
                        </div>
                        
                        <div class="col-md-12">
                            <input type="tel" class="form-control" id="phone" name="phone" min="10" max="13" pattern="[789][0-9]{9}" placeholder="Enter phone number"  required>
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
                            <button type="submit" class="btn  text-white  booking-btn float-end">Confirm</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- booking form  end -->

        
      </div>
      
    </div>
  </div>
</div>




