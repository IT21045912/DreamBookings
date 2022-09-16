<?php
#including configaration file 
include 'config.php';
?>
<?php
if(isset($_POST ['submit']))
{
      #set feilds name 
      $owner_id = $_POST["OwnerID"];
      $Tour_name = $_POST["TourName"];
      $Tour_contact = $_POST["TourContact"];
      $Tour_address = $_POST["TourAddress"];
      $Tour_web = $_POST["TourWeb"];
      $Tour_desc = $_POST["TourDesc"];
      $Tour_price = $_POST["TourPrice"];
      $Tour_type = $_POST["TourType"];
      $sql = "INSERT INTO tours(owner_id,tour_name,tour_contact,tour_address,tour_website,tour_desc,tour_price,tour_type) 
      VALUES ('$owner_id','$Tour_name','$Tour_contact','$Tour_address','$Tour_web','$Tour_desc','$Tour_price','$Tour_type')";
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
   <center><h1 style="color: aliceblue;">Tour Register</h1></center>
  
   <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">  
    <div class="form-box"> 
         <label><b>Owner ID:&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Owner ID" name="OwnerID" required>  
         <br>
         <label><b>Tour Name :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
         <input type="text" placeholder="Enter Tour Name" name="TourName" required>  
         <br>
         <label><b>Contact No : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Contact No" name="TourContact"  required> 
         <br>
         <label><b>Address :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Adress " name="TourAddress"  required> 
         <br>
         <label><b>Web Site :&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Website" name="TourWeb"  required> 
         <br>
         <label><b>Description :  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </b></label>   
         <input type="text" placeholder="Enter Description" name="TourDesc" required>     
         <br>  
         <label><b>Price : &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
         <input type="text" placeholder="Enter Price" name="TourPrice"  required> 
         <br> <br> <br> 
         <label><b>Tour Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
         <select name="TourType" >
            <option value="Safari">Safari</option>
            <option value="JetSki">JetSki</option>
            <option value="Boat">Boat Ride</option>
            <option value="Hiking">Hiking</option>
            <option value="Paramotering">Paramotering</option>
         </select>
         <br><br><br> 
        <button name="submit" type="submit" class="loginbtn"> Submit </button>
        <button onclick="window.location='addOffer.php';"> Add Offer </button>
        <br><br>      
    </div>   
</form>
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>