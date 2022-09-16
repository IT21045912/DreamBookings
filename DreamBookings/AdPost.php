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
         <li><a class="active" href="Login.php">Login</a></li>
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
        <h2 style="color: aliceblue;">Advertisement Posted Successfully</h2>

        <br> 
        <h2 style="color: aliceblue;">If You Want To Edit This Advertisement Please <a href="Contacts.php">Contact Admin</a></h2>
        <br>
            <button onclick="window.location.href='home.php'">Back To Home</button>
        </a>
    </center>
<!--Footer-->
<?php include('php/footer.php');?>
</body>
</html>