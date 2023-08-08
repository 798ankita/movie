<header class="top-nav">
   <nav class="navbar navbar-expand-lg navbar-dark top-nav">
      <div class="container">
         <a class="navbar-brand" href="#"><img src="assets\images\logo_pvr.jfif" alt="logo" width="70px"
            height="70px"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active mx-1 text-white " aria-current="page" href="index.php">Home</a>
               </li>
               <li>
                  <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Search movies..."
                        aria-label="Search">
                     <button class="btn btn-outline-danger" type="submit"><i
                        class="fas fa-search"></i></button>
                  </form>
               </li>
            </ul>
            <!-- Button trigger search city modal -->
            <button type="button" class="btn text-white mx-2 top-nav" data-bs-toggle="modal"
               data-bs-target="#staticBackdrop">Chandigarh<i class="fas fa-caret-down"></i></button>
            <!-- Button trigger Sign up modal -->
            <button type="Submit" class="btn btn-danger mx-3" data-bs-toggle="modal"
               data-bs-target="#exampleModal" id="signUp">Sign up</button>
            <!-- Button trigger Sign in modal -->
            <button id="sign-in" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Sign in </button>
            <label id="loggedInEmail" style="display: none;color:white"></label>
            <button id="myBookings" type="button" class="btn btn-primary mx-3"  style="display: none;" onClick="myBookings()" data-bs-toggle="modal" data-bs-target="#myModal2">
            My Bookings
            </button>
            <button id="logout" type="button" class="btn btn-primary"  style="display: none;" onclick="logout()">
            Log Out
            </button>
         </div>
      </div>
   </nav>
   </div>
   <!-- Modal sign up Start-->
   <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content mx-5 w-75">
         <div class="modal-header py-2">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
            <div class="modal-body">
               <section class="vh-50 sign-up-img">
                  <div class="row">
                     <div class="col-12 col-md-8 col-lg-6 col-xl-5 w-100">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                           <div class="card-body p-4">
                           <div class="text-center text-secondary"><h4 class="modal-title mb-4">Sign up</h4></div>
                              <form class="was-validated"  novalidate>
                                 <div class="form-outline mb-4">
                                    <input type="text" id="typeNameX-1"
                                       class="form-control form-control-lg" placeholder="Name" required/>
                                       <div class="invalid-feedback">Please enter name</div>
                                 </div>
                                 <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2"
                                       class="form-control form-control-lg" placeholder="Email" required/>
                                       <div class="invalid-feedback">Please enter email</div>
                                 </div>
                                 <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" required/>
                                    <div class="invalid-feedback">Please enter password</div>
                                 </div>
                                <div class="d-flex justify-content-center"> <input type="button" class="btn btn-danger btn-block" onclick="addData()" value="Register"/></div>
                              </form>
                              <div class="mt-3">I agree to the <a href="#" target="_blank"class="text-dark">Terms &amp; Conditions</a> &amp; <a href="#" target="_blank"  class="text-dark">Privacy Policy</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal sign up End-->

   <!--Modal Sign in start-->
   <div class="modal fade" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content  mx-5 w-75">
         <div class="modal-header py-2">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
            <!-- Modal body -->
            <div class="modal-body">
           <div class="d-flex justify-content-center"> <h5 class="mb-3"><i class="fas fa-user text-primary fs-1"></i></h5></div>
               <form class="was-validated" novalidate>
               <div class= form-outline mb-4">
                  <input type="email" id="logEmail"
                     class="form-control form-control-lg" placeholder="Email" id="validationCustom01" required/>
                     <div class="invalid-feedback">Please enter email</div>
               </div>
               <div class="form-outline mt-4 mb-4">
                  <input type="password" id="logPassword" class="form-control form-control-lg"  id="validationCustom02" placeholder="Password" required/>
                  <div class="invalid-feedback">Please enter password</div>
               </div>
               <div class="d-flex justify-content-center"><button type = "button" onclick="signIn()" class="btn btn-primary btn-block">Sign in</button></div>

               <div class="mt-3 d-flex justify-content-center">
                  <button type="button" class="btn btn-link border border-primary bg-primary text-light btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                  </button>
                  <button type="button" class="btn btn-link border border-primary border-primary bg-primary text-light btn-floating mx-1">
                  <i class="fab fa-google"></i>
                  </button>
                  <button type="button" class="btn btn-link border border-primary border-primary bg-primary text-light btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                  </button>
               </div>
              </form>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal Sign in end-->

   <!-- Modal City Start-->
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <input class="border border-secondary border-end-0 p-2" type="search" placeholder="Search city"
                  style="width: 100%" /><i
                  class="city-search border border-dark border-start-0 fas fa-search"></i>
            </div>
            <div class="modal-body">
               <div class="d-flex justify-content-center">
                  <h6>Popular City</h6>
               </div>
               <div class="row">
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/mumbai.png"
                     alt="Mumbai">Mumbai</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/ncr.png"
                     alt="Delhi-NCR">Delhi-NCR</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/bang.png"
                     alt="Bengaluru">Bengaluru</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/hyd.png"
                     alt="Hyderabad">Hyderabad</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/chd.png"
                     alt="Chandigarh">Chandigarh</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/chen.png"
                     alt="Chennai">Chennai</a></div>
                  <div class="col text-center" id="location"><a href="index.php"  class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/pune.png "
                     alt="Pune">Pune</a></div>
                  <div class="col text-center" id="location"><a href="index.php" class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/kolk.png"
                     alt="Kolkata">Kolkata</a></div>
                  <div class="col text-center" id="location"><a href="index.php"  class="text-decoration-none text-dark"><img
                     src="https://in.bmscdn.com/m6/images/common-modules/regions/koch.png"
                     alt="kochi">Kochi</a></div>
               </div>
            </div>
            <div class="modal-footer">
            </div>
         </div>
      </div>
</header>
<!-- Modal City End-->
<!--******************************************* Booking Modal start -->
<div class="modal fade" id="myModal2">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">My booking history <i class="fas fa-history"></i></h4>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<!-- Modal body -->
<div class="modal-body">
<div class="row p-3" id="allBooking">
</div>
</div>
</div>
</div>
</div>
</div>
<!--*********************************************Booking Modal end -->