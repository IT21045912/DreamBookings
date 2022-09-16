<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DreamBooking</title>
   <link rel="stylesheet" href="css/styles.css">
   <script src="script/myScript.js"></script>
</head>
<body>
<!-- Header-->
   <header class="navbar">
      <a href="home.php" class="logo">DreamBookings</a>
      <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="Booking.php">Booking</a></li>
         <li><a href="Login.php">Login</a></li>
         <li><a  class="active" href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
<style>
  .column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.bookimg:hover{
  -webkit-filter: blur(1.0px); 
  filter: blur(1.5px);
  transition: all 0.2s ease;
  transform: scale(1.1);
}
.img{
  padding:100px;
}
</style>
</head>

<body>
<br><br><br><br><br><br>
  <h1 class = "text2" >What Are You Advertising ?<h1>
  <br>
<div class="column">
     <div class="gallery">
       <a href="addhotel.php">
         <img src="images/hotelbooking.png" width=100% class="bookimg"
       </a>
     </div>
</div>
 

  <div class="column">
     <div class="gallery">
       <a href="addtours.php">
         <img src="images/tourbooking.jpg" width=100% class="bookimg">
       </a>
     </div>
</div>
</div>

   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>