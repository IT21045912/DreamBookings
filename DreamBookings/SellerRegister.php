<?php
#including configaration file 
include_once 'config.php';
?>
<?php
if (isset($_POST ['submit']))
{
#set feilds name 
      $username = $_POST["username"];
      $password = $_POST["password"];
      $confirm_password = $_POST["confirm_password"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
$sql = "INSERT INTO seller(seller_id,username,email,password,confirm_password,phone) VALUES ('','$username','$email','$password','$confirm_password','$phone')";
#check connection 
if(mysqli_query($connection,$sql))
{
   
   header("location:RegSuc.php");
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

</head>
<body>
<!-- Header-->
   <header class="navbar">
      <a href="home.php" class="logo">DreamBookings</a>
      <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="Booking.php">Booking</a></li>
         <li><a href="Login.php">Login</a></li>
         <li><a  class="active"href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
<!--Body-->
   <br><br><br><br><br><br>
   <center><h1 style="color: aliceblue;">Seller Register</h1></center>
   <br><br>
   <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">  
    <div class="form-box"> 
      <label><b>Username : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
      <input type="text" placeholder="Enter Username" name="username" required>  
         <br>
      <label><b>Email :   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required> 
         <br>
      <label><b>Password : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </b></label>   
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" placeholder="Enter Password" name="password" required>     
        <br>
      <label><b>Repeat Password :</b></label>
      <input type="password" placeholder="Repeat Password"  name="confirm_password" required> 
        <br> 
      <label><b>Phone No : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b> </label>   
      <input type="text" placeholder="Enter Phone Number" name="phone" required>  
         <br>     
      <button name="submit" type="submit" class="loginbtn" "> Submit </button>  

        <br><br>
        
      <h5>Already Have An Account ?</h5>
      <button class="signbtn"  onclick="window.location.href='SellerLogin.php'" >Login</button> 
           
    </div>   
</form> 
<!--Footer-->

   <?php include('php/footer.php');?>
</body>
</html>