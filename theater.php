<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "common/common-links.php"; ?>
      <title>Movie Tickets</title>
   </head>
   <body>
      <!--header-->
      <?php include "common/header.php"; ?>
      <section>
        <div class="container" style="height:500px;">
         <div class="row">
            <div class="col">
                  <div class="row" id="theater-time">
                  </div>
            </div>
         </div>
</div>
      </section>
      <!--Footer-->
      <?php include "common/footer.php"; ?>
      <script>
         const theaterTimeList = [
             {
                 "TheaterName": "Bharathi Theatre (Peenya) A/C 4K Digital Cinema",
                 "TheaterID": 1,
                 "imdbID": "tt0076759",
                 "TimeSlot": [{ "SlotID": 1, "SlotValue": "08:50PM" }, { "SlotID": 2, "SlotValue": "09:50PM" }]
         
             },
             {
                 "TheaterName": "Cinepolis: Nexus Shantiniketan",
                 "TheaterID": 2,
                 "imdbID": "tt0080684",
                 "TimeSlot": [{ "SlotID": 3, "SlotValue": "08:50PM" }, { "SlotID": 4, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "Gopalan Cinemas: Arcade Mall",
                 "TheaterID": 3,
                 "imdbID": "tt0086190",
                 "TimeSlot": [{ "SlotID": 5, "SlotValue": "08:50PM" }, { "SlotID": 6, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "PVR: 4DX Elante Chandigarh",
                 "TheaterID": 4,
                 "imdbID": "tt2488496",
                 "TimeSlot": [{ "SlotID": 7, "SlotValue": "08:50PM" }, { "SlotID": 8, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "Cinepolis: DLF Avenue",
                 "TheaterID": 5,
                 "imdbID": "tt0120915",
                 "TimeSlot": [{ "SlotID": 9, "SlotValue": "08:50PM" }, { "SlotID": 10, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "Cinepolis: Janak Cinema",
                 "TheaterID": 6,
                 "imdbID": "tt0121766",
                 "TimeSlot": [{ "SlotID": 11, "SlotValue": "08:50PM" }, { "SlotID": 12, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "Cinepolis: Pacific NSP2",
                 "TheaterID": 7,
                 "imdbID": "tt0121765",
                 "TimeSlot": [{ "SlotID": 13, "SlotValue": "08:50PM" }, { "SlotID": 14, "SlotValue": "09:50PM" }]
         
             },
             {
                 "TheaterName": "PVR: Prashant Vihar",
                 "TheaterID": 8,
                 "imdbID": "tt3748528",
                 "TimeSlot": [{ "SlotID": 15, "SlotValue": "08:50PM" }, { "SlotID": 16, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "PVR: Select City Walk (Gold)",
                 "TheaterID": 9,
                 "imdbID": "tt2527336",
                 "TimeSlot": [{ "SlotID": 17, "SlotValue": "08:50PM" }, { "SlotID": 18, "SlotValue": "09:50PM" }]
             },
             {
                 "TheaterName": "PVR: Select City Walk (diamond)",
                 "TheaterID": 10,
                 "imdbID": "tt2527338",
                 "TimeSlot": [{ "SlotID": 19, "SlotValue": "08:50PM" }, { "SlotID": 20, "SlotValue": "09:50PM" }]
             }
         ];
         localStorage.setItem("theaterTimeList", JSON.stringify(theaterTimeList));
         
         function getParameterByName(name, url = window.location.href) {
             name = name.replace(/[\[\]]/g, '\\$&');
             var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                 results = regex.exec(url);
             if (!results) return null;
             if (!results[2]) return '';
             return decodeURIComponent(results[2].replace(/\+/g, ' '));
         }
         
         var imbid = getParameterByName('imbid');
         var theaterID = getParameterByName('theaterID');
         
         debugger;
         var theaterTime = "";
         var slots = "";
         debugger
         var myMovie = JSON.parse(localStorage.getItem("movieList"));
         let filteredtheaters=theaterTimeList.filter(x=>x.imdbID==imbid);
         for (let i = 0; i < filteredtheaters.length; i++) {
             slots = "";
             theaterTime = theaterTime + `
         <div class="theater-display">
         <h2 class="text-warning py-5 fs-1 fw-bold">${myMovie.find((x) => x.imdbID == filteredtheaters[i].imdbID).Title}<i class="fas fa-film mx-3"></i></h2>
         <h6 class="mt-2">Theater${filteredtheaters[i].TheaterName}</h6>`
             for (let j = 0; j < filteredtheaters[i].TimeSlot.length; j++) {
                 slots = slots + `<a class="text-success text-decoration-none" href="seats-info.php?&theaterID=${theaterID}&imbid=${imbid}&SlotId=${filteredtheaters[i].TimeSlot[j].SlotID}"><h6 class="border border-secondary rounded p-2 col-1 text-center">${theaterTimeList[i].TimeSlot[j].SlotValue}</h6></a>`;
             }
             theaterTime = theaterTime + slots + "</div>";
         }
         document.getElementById("theater-time").innerHTML = theaterTime;
         
         
         
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
         
         
         function checkUserLogin()
         {
         var userExist=JSON.parse(localStorage.getItem('loggedInUser'));
         if(userExist!=null && userExist.length>0)
         {
         document.getElementById("loggedInEmail").style.display="block";
         document.getElementById("loggedInEmail").innerHTML=userExist[0].email;
         document.getElementById("logout").style.display="block";
         document.getElementById("myBookings").style.display="block";
         document.getElementById("signUp").style.display="none";
         document.getElementById("sign-in").style.display="none";
         }
         else
         {
         document.getElementById("loggedInEmail").style.display="none";
         document.getElementById("logout").style.display="none";
         document.getElementById("myBookings").style.display="none";
         document.getElementById("signUp").style.display="block";
         document.getElementById("sign-in").style.display="block";
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


         function logout()
         {
         localStorage.removeItem("loggedInUser");
         checkUserLogin();
         location.replace("index.php");
         localStorage.clear();
         }
 //function to show booking history
function myBookings() {
   
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