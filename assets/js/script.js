const movieList = [
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg",
        Title: "The Avengers",
        imdbID: "tt0076759",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg",
        Title: "Avengers: Endgame",
        imdbID: "tt0080684",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BNmQ0ODBhMjUtNDRhOC00MGQzLTk5MTAtZDliODg5NmU5MjZhXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_SX300.jpg",
        Title: "Harry Potter and the Sorcerer's Stone",
        imdbID: "tt0086190",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_SX300.jpg",
        Title: "The Force Awakens",
        imdbID: "tt2488496",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BYTRhNjcwNWQtMGJmMi00NmQyLWE2YzItODVmMTdjNWI0ZDA2XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg",
        Title: "The Phantom Menace",
        imdbID: "tt0120915",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BOTA3MmRmZDgtOWU1Ny00ZDc5LWFkN2YtNzNlY2UxZmY0N2IyXkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_SX300.jpg",
        Title: "Dirty Harry",
        imdbID: "tt0121766",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BMjE0ODEwNjM2NF5BMl5BanBnXkFtZTcwMjU2Mzg3NA@@._V1_SX300.jpg",
        Title: "When Harry Met Sally...",
        imdbID: "tt0121765",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BMjEwMzMxODIzOV5BMl5BanBnXkFtZTgwNzg3OTAzMDI@._V1_SX300.jpg",
        Title: "Rogue One",
        imdbID: "tt3748528",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BMjQ1MzcxNjg4N15BMl5BanBnXkFtZTgwNzgwMjY4MzI@._V1_SX300.jpg",
        Title: "Moon knight",
        imdbID: "tt2527336",
        Type: "movie",
        Ratings: "8.9/10",
    },
    {
        Poster: "https://m.media-amazon.com/images/M/MV5BMDljNTQ5ODItZmQwMy00M2ExLTljOTQtZTVjNGE2NTg0NGIxXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_SX300.jpg",
        Title: "The Rise of Skywalker",
        imdbID: "tt2527338",
        Type: "movie",
        Ratings: "8.9/10",
    },
];

localStorage.setItem("movieList", JSON.stringify(movieList));
var allDivs = "";
for (let i = 0; i < movieList.length; i++) {
    allDivs =
        allDivs +
        `
 <div class="col-lg">
 <div class="movie-display">
 <a class="text-decoration-none" href="booking.php?imbid=${movieList[i].imdbID}"><div class="movie-img"><img class="poster-photo" src="${movieList[i].Poster}"></div></a>
 <a class="text-decoration-none text-dark" href="booking.php?imbid=${movieList[i].imdbID}"><h6 class="mx-3">${movieList[i].Title}</h6></a>
<div class="align-item-center">
<a  class="text-decoration-none" href="booking.php?imbid=${movieList[i].imdbID}"><h6 class="mx-3" style="color:red">Ratings : <i class="fas fa-star"></i> ${movieList[i].Ratings}</h6></a>

</div>
 
 </div>
</div>`;
}
document.getElementById("movieList").innerHTML = allDivs;

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
    

//login user buttons
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

//Function to login in
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
    localStorage.clear();
}
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
