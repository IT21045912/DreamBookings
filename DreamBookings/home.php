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
         <li><a class="active" href="home.php">Home</a></li>
         <li><a href="Booking.php">Booking</a></li>
         <li><a href="Login.php">Login</a></li>
         <li><a href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
<!-- Background Video-->
  <video autoplay muted loop id="homevideo">
      <source src="images/home.mp4" type="video/mp4">
  </video>


  <hr size="50px" color="white">
  <br><br>
  <h1 align="center" style="color: rgb(0, 136, 255);">Things To Do</h1>
<!--Things To Do-->
   <div>
   <div class="imgbox">
     <div class="gallery">
       <a href="HotelSearch.php">
         <img src="images/Hotel.jpg"width="800" height="400" class="menuimg" >
         <button class="imgbut">Hotels</button>
       </a>
     </div>
   </div>
   
   <div class="imgbox">
     <div class="gallery">
       <a href="TourSearch.php">
         <img src="images/Tours.jpg"  width="800" height="400"class="menuimg">
         <button class="imgbut">Tours</button>
       </a>
     </div>
   </div>
   
   <div class="imgbox">
     <div class="gallery">
       <a href="Discover.php">
         <img src="images/Discover.jpg" width="800" height="400"class="menuimg">
         <button class="imgbut">Discover</button>
       </a>
      </div>
   </div>
   </div>
   <br><br>
   <hr size="50px" color="white">
   <br><br>
<!--Offer Slide-->
   <h1 align="center" style="color: rgb(0, 136, 255);">Offers</h1>
   <br>
   <div>
      <div>
      
        <div align="center">
            <a href="Offers.php">
            <button class="offerbut"><span>Check Now</span></button>
            </a>
        </div> 
      <img class="Slides" src="images/Slide 0.jpg" style="width:100%">
      <img class="Slides" src="images/Slide 1.jpg" style="width:100%">
      <img class="Slides" src="images/Slide 2.jpg" style="width:100%">
      <img class="Slides" src="images/Slide 3.jpg" style="width:100%">
      </div>
   </div>
   <br><br>
<!--Slider Java Script-->
     <script>
    var myIndex = 0;
    slideshow();
    </script>
<!--Who Are We?-->
      <br><br>
        <hr size="50px" style="background-color:rgb(255, 255, 255); border:0;"><br>
        <br><br>
        <center>
          <h1 style="color: rgb(0, 120, 225);">Who are We?</h1>
          <br><br><br>
          <h3 style="color: azure ;">We provide a way for tourist toget all information's needed to visit Sri Lanka. We have <br>
          facilitate them to search the destination they need to visit. Through our website reservation 
          <br>of resorts, hotels, restaurants, booking of flights are facilitated. </p>
        </center>
        <br><br>
        <hr size="50px" color="white">
        <br><br>
<!--Details-->
     <div class="end">
      <center>
      <div class="column">
        <img src="images/image.png" width="200px"class="imgfoot">
          <br><br>
          <h2 style="color:rgb(0, 136, 255)"><b>Payment</b></h2><br>
          <p style="color: aliceblue;">
            You Have Facility To Pay <br>
            Your Bills Online. We Accept <br>
            Visa & Master Cards , Paypal.</p>
      </div>
      </center>
      <center>
      <div class="column">
        <img src="images/settings.png" width="200px"class="imgfoot">
          <br><br>
          <h2 style="color:rgb(0, 136, 255)"><b>Services</b></h2><br>
            <p style="color: aliceblue;">
            We Contribute Best Option<br>
            For Our Customers.</p>
      </div>
      </center>
      <center>
      <div class="column">
        <img src="images/home.png" width="200px" class="imgfoot">
          <br><br>
          <h2 style="color:rgb(0, 136, 255)"><b>Address</b></h2><br>
            <p style="color: aliceblue;">No.526,<br>
              Liberty Plaza,<br>
              Colombo 04,<br>
              Sri Lanka.
            </p>
      </div>
      </center>

    <br><br><hr size="50px" color="white"><br><br>
<!--Footer-->
<?php include('php/footer.php');?>
</body>
</html>