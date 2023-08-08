<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "common/common-links.php"; ?>
      <title>Movie Tickets</title>
   </head>
   <body>
      <!--header-->
      <?php include "common/header.php"; ?>
      <!-- Modal City End-->
      <section class="big-poster">
         <div class="container">
            <div class="row">
               <div class="col-6 p-3" id="movieMain">
                  <img src="" id="poster"/>
               </div>
               <div class="col-6 text-white p-3" id="movieDescription">
                  <h2 class=" fs-1 fw-bold" id="movieName"></h2>
                  <h3 id=movieRate></h3>
                  <p class="bg-secondary text-light">Add your rating & review<br>Your rating matter</p>
                  <p class="bg-light text-dark">2D,3D SCREEN X,MX4D,3D,ICE 3D,MX4D 3D,4DX 3D,4DX,IMAX 3D,IMAX 2D</p>
                  <p class="bg-light text-dark w-50">English,Hindi,Telugu,Tamil</p>
                  <h6>2h 14m . Action,Adventure,Thriller . UA . 25 May 2023 </h6>
               </div>
            </div>
         </div>
      </section>
      <section class="container mt-5">
         <div class="row">
            <div class="col-12 items">
               <div class="cover-section">
                  <div class="row" id="theater-list"></div>
               </div>
            </div>
         </div>
      </section>
      <!--Footer-->
      <?php include "common/footer.php"; ?>
      <script>
         const theaterList = [
             {
                 TheaterName: "Bharathi Theatre (Peenya) A/C 4K Digital Cinema",
                 Location: "Chandigarh",
                 TheaterID: 1,
                 imdbID: "tt0076759",
                 TimeSlot: [
                     { SlotID: 1, SlotValue: "08:50PM" },
                     { SlotID: 2, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "Cinepolis: Nexus Shantiniketan",
                 Location: "Chandigarh",
                 TheaterID: 2,
                 imdbID: "tt0080684",
                 TimeSlot: [
                     { SlotID: 3, SlotValue: "08:50PM" },
                     { SlotID: 4, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "Gopalan Cinemas: Arcade Mall",
                 Location: "Chandigarh",
                 TheaterID: 3,
                 imdbID: "tt0086190",
                 TimeSlot: [
                     { SlotID: 5, SlotValue: "08:50PM" },
                     { SlotID: 6, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "PVR: 4DX Elante Chandigarh",
                 Location: "Chandigarh",
                 TheaterID: 4,
                 imdbID: "tt2488496",
                 TimeSlot: [
                     { SlotID: 7, SlotValue: "08:50PM" },
                     { SlotID: 8, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "Cinepolis: DLF Avenue",
                 Location: "Chandigarh",
                 TheaterID: 5,
                 imdbID: "tt0120915",
                 TimeSlot: [
                     { SlotID: 9, SlotValue: "08:50PM" },
                     { SlotID: 10, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "Cinepolis: Janak Cinema",
                 Location: "Chandigarh",
                 TheaterID: 6,
                 imdbID: "tt0121766",
                 TimeSlot: [
                     { SlotID: 11, SlotValue: "08:50PM" },
                     { SlotID: 12, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "Cinepolis: Pacific NSP2",
                 Location: "Chandigarh",
                 TheaterID: 7,
                 imdbID: "tt0121765",
                 TimeSlot: [
                     { SlotID: 13, SlotValue: "08:50PM" },
                     { SlotID: 14, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "PVR: Prashant Vihar",
                 Location: "Chandigarh",
                 TheaterID: 8,
                 imdbID: "tt3748528",
                 TimeSlot: [
                     { SlotID: 15, SlotValue: "08:50PM" },
                     { SlotID: 16, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "PVR: Select City Walk (Gold)",
                 Location: "Chandigarh",
                 TheaterID: 9,
                 imdbID: "tt2527336",
                 TimeSlot: [
                     { SlotID: 17, SlotValue: "08:50PM" },
                     { SlotID: 18, SlotValue: "09:50PM" },
                 ],
             },
             {
                 TheaterName: "PVR: Select City Walk (diamond)",
                 Location: "Chandigarh",
                 TheaterID: 10,
                 imdbID: "tt2527338",
                 TimeSlot: [
                     { SlotID: 19, SlotValue: "08:50PM" },
                     { SlotID: 20, SlotValue: "09:50PM" },
                 ],
             }
         ];
         
         function getParameterByName(name, url = window.location.href) {
         
             name = name.replace(/[\[\]]/g, "\\$&");
             var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                 results = regex.exec(url);
             if (!results) return null;
             if (!results[2]) return "";
             return decodeURIComponent(results[2].replace(/\+/g, " "));
         }
         
         var imbid = getParameterByName("imbid");
         var theaterDiv = "";
         let filteredtheaters=theaterList.filter(x=>x.imdbID==imbid);
         for (let i = 0; i < filteredtheaters.length; i++) {
         
             theaterDiv =
                 theaterDiv +
                 `
         <div class="theater-display">
         <h6><i class="far fa-heart mx-3 fs-5"></i>${filteredtheaters[i].TheaterName},${filteredtheaters[i].Location}</h6>
         <p class="mx-5 mt-3"><i class="fas fa-mobile-alt text-success"></i> M-Ticket  <span class="text-danger mx-3"><i class="fas fa-hamburger"></i>Food & Beverage</span></p>
         <div class="align-item-center">
         <a href="theater.php?theaterID=${filteredtheaters[i].TheaterID}&imbid=${imbid}"><button type="button" class="btn btn-warning mx-5">Book tickets</button></a>
         </div>
         
         </div>`;
         }
         document.getElementById("theater-list").innerHTML = theaterDiv;
         
         
         
         // Function to add data to the array and save to local storage from sign up
function addData() {
   debugger;
    var userData = [];
    let fullName = document.getElementById("typeNameX-1").value;
    let enterEmail = document.getElementById("typeEmailX-2").value;
    let enterPassword = document.getElementById("typePasswordX-2").value;
   
    //Validations
    if(fullName == "")
    {
        return false;  
    }
    else if(enterEmail == "")
    {  
        return false; 
    }
    else if(enterPassword == "")
    { 
        return false; 
    }

    let userObject = {
        name: fullName,
        email: enterEmail,
        password: enterPassword,
    };

    // Add the input value to the userdata array
    userData.push(userObject);
    
    // Save the data array to local storage
    localStorage.setItem("userData", JSON.stringify(userData));
    
    // Clear the input textbox
    document.getElementById("typeNameX-1").value = "";
    document.getElementById("typeEmailX-2").value = "";
    document.getElementById("typePasswordX-2").value = "";
    

}
         
         function checkUserLogin() {
             var userExist = JSON.parse(localStorage.getItem("loggedInUser"));
             if (userExist != null && userExist.length > 0) {
                 document.getElementById("loggedInEmail").style.display = "block";
                 document.getElementById("loggedInEmail").innerHTML = userExist[0].email;
                 document.getElementById("logout").style.display = "block";
                 document.getElementById("myBookings").style.display = "block";
                 document.getElementById("signUp").style.display = "none";
                 document.getElementById("sign-in").style.display = "none";
             } else {
                 document.getElementById("loggedInEmail").style.display = "none";
                 document.getElementById("logout").style.display = "none";
                 document.getElementById("myBookings").style.display = "none";
                 document.getElementById("signUp").style.display = "block";
                 document.getElementById("sign-in").style.display = "block";
             }
         }
         
                 //**********************************sign in**********************************

function signIn() {
   
   var email = document.getElementById("logEmail").value;
   var pwd = document.getElementById("logPassword").value;
   
   //validations
   if(email =="")
   {
    return false;
   }
   else if(pwd =="")
   {
    return false;
   }

   var userDetail = JSON.parse(localStorage.getItem("userData"));
   var userExist = userDetail.filter((x) => x.email == email && x.password == pwd);
   if (userExist != null && userDetail.length > 0) {
       localStorage.setItem("loggedInUser", JSON.stringify(userExist));
       checkUserLogin();
   }
   //clear the input box
   document.getElementById("logEmail").value = "";
   document.getElementById("logPassword").value = "";
} checkUserLogin();

         
         function logout() {
             localStorage.removeItem("loggedInUser");
             checkUserLogin();
             location.replace("index.php");
             localStorage.clear();
         }
           
         function getMovieDetail(){
             var movieDetail = JSON.parse(localStorage.getItem("movieList"));
             var movieTitle = movieDetail.find(x => x.imdbID==imbid);
             document.getElementById("poster").src=movieTitle.Poster;
             document.getElementById("movieName").innerHTML=movieTitle.Title;
             document.getElementById("movieRate").innerHTML='<i class="fas fa-star text-danger"></i>'+" "+movieTitle.Ratings;
         
         }getMovieDetail();
         
         //function to show booking history
function myBookings() {
    debugger;
    var bookingHistory = JSON.parse(localStorage.getItem("myBookings"));
    var theaterHallName = JSON.parse(localStorage.getItem("theaterTimeList"));
    var myMovie = JSON.parse(localStorage.getItem("movieList"));
    var bookDiv = "";
    for (let i = 0; i < bookingHistory.length; i++) {
        bookDiv =
            bookDiv +
            `
    <div class="shadow rounded bg-body p-3 mb-5 ">
    <div><img style="width:100px;height:100px;" src="${myMovie.find((x) => x.imdbID == bookingHistory[i].imdbid).Poster}"/></div>
    <p>${myMovie.find((x) => x.imdbID == bookingHistory[i].imdbid).Title}</p>
    <p>${theaterHallName.find((x) => x.imdbID == bookingHistory[i].imdbid).TheaterName}</p>
    <p>Seats No:${bookingHistory[i].seats}</p>
    <p>Booking No:${bookingHistory[i].imdbid}</p>
    </div>`;
    }
    document.getElementById("allBooking").innerHTML = bookDiv;
}
      </script>
      <script src="assets\js\bootstrap.bundle.min.js"></script>
   </body>
</html>