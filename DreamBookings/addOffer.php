<?php
#including configaration file 
include 'config.php';
?>
<?php
if(isset($_POST ['submit']))
{
#set feilds name
      $offer_name = $_POST["OfferName"];
      $offer_price = $_POST["OfferPrice"];
      $offer_date = $_POST["OfferDate"];
$sql = "INSERT INTO offers(offer_id,offer_name,offer_price,offer_date) VALUES ('','$offer_name','$offer_price','$offer_date')";
#check connection 
if(mysqli_query($connection,$sql))
{
   
   header("location:AdPost.php");
}
else{
   echo"<script>alert('Error in your connection')</script>";
}
}
mysqli_close($connection);
?>
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
<!--Body-->
   <br><br><br><br><br><br>
   <center><h1 style="color: aliceblue;">Hotel Register</h1></center>
  
   <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">  
    <div class="form-box"> 
         <label><b>Offer NAme :&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Offer Name" name="OfferName" required>  
         <br>
         <label><b>Offer price :  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Offer Price" name="OfferPrice" required>  
         <br>
         <label><b>Offer Date : &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="date" placeholder="Enter Offer Date" name="OfferDate"  required> 
         <br>
        <button name="submit" type="submit" class="loginbtn"> Submit </button>
        <br><br>      
    </div>   
</form> 
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>