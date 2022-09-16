<?php
#including configaration file 
include 'config.php';
?>
<?php
if(isset($_POST ['submit']))
{
#set feilds name 
      $owner_id = $_POST["OwnerID"];
      $hotel_name = $_POST["HotelName"];
      $hotel_contact = $_POST["HotelContact"];
      $hotel_address = $_POST["HotelAddress"];
      $hotel_web = $_POST["HotelWeb"];
      $hotel_desc = $_POST["HotelDesc"];
      $hotel_price = $_POST["HotelPrice"];
      $hotel_type = $_POST["HotelType"];
$sql = "INSERT INTO hotels(owner_id,hotel_name,hotel_contact,hotel_address,hotel_website,hotel_desc,hotel_price,hotel_type) VALUES ('$owner_id','$hotel_name','$hotel_contact','$hotel_address','$hotel_web','$hotel_desc','$hotel_price','$hotel_type')";
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
         <label><b>Owner ID:&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Owner ID" name="OwnerID" required>  
         <br>
         <label><b>Hotel Name :  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Hotel Name" name="HotelName" required>  
         <br>
         <label><b>Contact No : &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Contact No" name="HotelContact"  required> 
         <br>
         <label><b>Address :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Adress " name="HotelAddress"  required> 
         <br>
         <label><b>Web Site :&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Website" name="HotelWeb"  required> 
         <br>
         <label><b>Description :  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </b></label>   
         <input type="text" placeholder="Enter Description" name="HotelDesc" required>     
         <br>  
         <label><b>Price : &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Price" name="HotelPrice"  required> 
         <br> 
         <label><b>Hotel Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
         <select name="HotelType" >
            <option value="Hotel">Hotel</option>
            <option value="Apartment">Apartment</option>
            <option value="Restaurant">Restaurants</option>
            <option value="Villa">Villas</option>
            <option value="Motel">Motel</option>
            <option value="Resort">Resort</option>
            <option value="Beach">Beach</option>
         </select>
         <br><br>
        <button name="submit" type="submit" class="loginbtn"> Submit </button>
        <button onclick="window.location='addOffer.php';"> Add Offer </button>
        <br><br>      
    </div>   
</form> 
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>