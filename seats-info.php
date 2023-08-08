<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "common/common-links.php"; ?>
      <title>Movie Tickets</title>
   </head>
   <body id="seat-photo">
      <!--header-->
      <?php include "common/header.php"; ?>
      <section id="big-theater">
         <div class="container">
         <div class="d-flex justify-content-center"><img src="assets\images\Why-is-Popcorn-a-Movie-Food.jpg" style="width:70%;height:200px;"/></div>
            <div class="mt-5 d-flex justify-content-center">
               <span class="fw-bold"><i class="far fa-circle text-warning"></i>Available seats</span>
               <span class="mx-4 fw-bold"><i class="fas fa-circle text-light"></i>Occupied seats</span>
            </div>
            <div class="mt-5">
               <div class="row mt-4">
                  <div class="col-12 items">
                     <div class="cover-section">
                        <div class="row d-flex justify-content-center" id="seat-List">
                        </div>
                        <div class="col d-flex justify-content-center">
                        <button value="500" type="button" class="btn btn-success mt-5" onclick="confirmSeats()" data-bs-toggle="modal" data-bs-target="#exampleModalAb">Confirm Seat</button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
 
      <!-- Modal -->
<div class="modal fade" id="exampleModalAb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center" id="modalWarn"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      <!--Footer-->
      <?php include "common/footer.php"; ?>
      <script>
         const seatList = JSON.parse(localStorage.getItem('seatList')) !=undefined?JSON.parse(localStorage.getItem('seatList')):
            
              [
                {  
                    "TheaterID": 1,
                    "SlotId": 1,
                    "imdbID": "tt0076759",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {   
                    "TheaterID": 1,
                    "SlotId": 2,
                    "imdbID": "tt0076759",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {  
                    "TheaterID": 2,
                    "SlotId": 3,
                    "imdbID": "tt0080684",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 2,
                    "SlotId": 4,
                    "imdbID": "tt0080684",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID":3,
                    "SlotId": 5,
                    "imdbID": "tt0086190",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 3,
                    "SlotId": 6,
                    "imdbID": "tt0086190",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 4,
                    "SlotId": 7,
                    "imdbID": "tt2488496",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 4,
                    "SlotId": 8,
                    "imdbID": "tt2488496",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 5,
                    "SlotId": 9,
                    "imdbID": "tt0120915",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 5,
                    "SlotId": 10,
                    "imdbID": "tt0120915",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 6,
                    "SlotId": 11,
                    "imdbID": "tt0121766",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 6,
                    "SlotId": 12,
                    "imdbID": "tt0121766",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 7,
                    "SlotId": 13,
                    "imdbID": "tt0121765",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 7,
                    "SlotId": 14,
                    "imdbID": "tt0121765",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 8,
                    "SlotId": 15,
                    "imdbID": "tt3748528",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 8,
                    "SlotId": 16,
                    "imdbID": "tt3748528",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 9,
                    "SlotId": 17,
                    "imdbID": "tt2527336",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 9,
                    "SlotId": 18,
                    "imdbID": "tt2527336",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 10,
                    "SlotId": 19,
                    "imdbID": "tt2527338",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                },
                {
                    "TheaterID": 10,
                    "SlotId": 20,
                    "imdbID": "tt2527338",
                    "Seats": [{ "SeatId": "1", "SeatNo": "1", "BookingStatus": "free" },
                    { "SeatId": "2", "SeatNo": "2", "BookingStatus": "free" },
                    { "SeatId": "3", "SeatNo": "3", "BookingStatus": "free" },
                    { "SeatId": "4", "SeatNo": "4", "BookingStatus": "free" },
                    { "SeatId":"5", "SeatNo": "5", "BookingStatus": "free" },
                    { "SeatId":"6", "SeatNo": "6", "BookingStatus": "free" },
                    { "SeatId":"7", "SeatNo": "7", "BookingStatus": "free" },
                    { "SeatId":"8", "SeatNo": "8", "BookingStatus": "free" },
                    { "SeatId":"9", "SeatNo": "9", "BookingStatus": "free" },
                    { "SeatId":"10", "SeatNo": "10", "BookingStatus": "free" }]
                }
            
            ];
            
            localStorage.setItem("seatList", JSON.stringify(seatList));
            
            function getParameterByName(name, url = window.location.href) {
                name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
            } 
            var imbid = getParameterByName('imbid');
            var theaterID =parseInt(getParameterByName('theaterID'));
            var slotID =parseInt(getParameterByName('SlotId'));
         

            var bookedSeats = "";
            var seats = "";
            var localSeats=JSON.parse(localStorage.getItem('seatList')).filter(x=>x.TheaterID==theaterID && x.imdbID==imbid && x.SlotId==slotID);
            
            for (let i = 0; i < localSeats.length; i++) {debugger;
                seats = "";
         
        
                for (let j = 0; j < localSeats[i].Seats.length; j++) {
                    if(localSeats[i].Seats[j].BookingStatus=="free")
                    {
                     seats = seats + `<div id="seat-display" class="example" style="width:50px;height:50px;border:2px solid #f5f50c;margin:2px;" onclick="bookSeat(${localSeats[i].Seats[j].SeatNo})">${seatList[i].Seats[j].SeatNo}</div>`;
                    }
                     else if(localSeats[i].Seats[j].BookingStatus=="booked")
                     {
                       seats = seats + `<div style="width:50px;height:50px;background-color:#deeaee;margin:2px">${seatList[i].Seats[j].SeatNo}</div> `;
                     }
                     
                    }       
            }
            document.getElementById("seat-List").innerHTML = seats;
            
            
            function bookSeat(seatNo) {
                debugger;
                bookedSeats = bookedSeats +','+ seatNo;
            }
         
         
            
            function confirmSeats() {
                debugger;
               if(localStorage.getItem('loggedInUser')!=undefined && localStorage.getItem('loggedInUser')!=null)
               {
                var localSeats=JSON.parse(localStorage.getItem('seatList'));
                var a = localSeats.find(x=>x.TheaterID==theaterID && x.imdbID==imbid && x.SlotId==slotID);
                var checkedSeatsList= bookedSeats.split(',');
                if(a!=null)
                {
                    for(let i=0;i<checkedSeatsList.length;i++)
                    {
                        if(checkedSeatsList[i]!=""){
                        a.Seats.find(y=>y.SeatNo==checkedSeatsList[i]).BookingStatus='booked';  
                    }
                    
                } var booked = "";
                booked = booked +`<h4>Seats booked successfully<i class="far fa-check-circle mx-3"></i></h4>`
               document.getElementById('modalWarn').innerHTML= booked;

                }
        
                let myBooking = JSON.parse(localStorage.getItem('myBookings'))|| [];
                let latestBooking = {
                    imdbid:imbid,
                    theaterID:theaterID,
                    slotID:slotID,
                    seats:bookedSeats
                }
                myBooking.push(latestBooking);
                localStorage.setItem("myBookings", JSON.stringify(myBooking));
                localStorage.setItem("seatList", JSON.stringify(localSeats));
                window.location.reload();
                
            }
            else{ 
               var warn = "";
               warn = warn +`<h4>Please Sign in to book seats<i class="fas fa-sign-in-alt mx-4"></i></h4>`
               document.getElementById('modalWarn').innerHTML= warn;
            }

         }

         
         
         
    // Function to add data to the array and save to local storage from sign up
    function addData() {
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
         
         
            
            
            //***********************************check user*******************************     
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

            
            //***********************************logout******************************
            
            
            function logout()
            {
            localStorage.removeItem("loggedInUser");
            checkUserLogin();
            location.replace("index.php");
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


         
      </script>
      <script src="assets\js\bootstrap.bundle.min.js"></script>
   </body>
</html>