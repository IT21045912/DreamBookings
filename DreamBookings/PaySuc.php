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
         <li><a class="active" href="Booking.php">Booking</a></li>
         <li><a href="Login.php">Login</a></li>
         <li><a href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
    <br><br><br><br><br><br><br>
    <center>
        <h1 style="color: aliceblue;">Thank You , Enjoy!!!</h1>
        <br><br><br><br>
        <img src = "images/tick.png" alt="tick mark" class="image" width="200px" height="200px" ><br><br>
        <h2 style="color: aliceblue;">Payment Successfully</h2>
        <br><br>
        <p><h4 style="color: aliceblue;">We will contact you soon , If you have any issue <a href="Contacts.php">Contact Us.</a> </h3></p><br><br>
        <a href="home.php">
            <button  onclick="window.location.href='home.php'">Back To Home</button>
        </a>
    </center>
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>