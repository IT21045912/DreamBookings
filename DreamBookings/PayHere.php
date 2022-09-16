<?php
#including configaration file 
include_once 'config.php';
?>
<?php
if (isset($_POST ['submit']))
{
#set feilds name 
      $card_name = $_POST["cardname"];
      $card_num = $_POST["cardnumber"];
      $card_exp_mon = $_POST["expmonth"];
      $card_exp_year = $_POST["expyear"];
      $card_cvv = $_POST["cvv"];
      
      $sql = "INSERT INTO carddetails(user_id,card_name,card_num,card_exp_mon,card_exp_year,card_cvv) 
      VALUES ('','$card_name','$card_num','$card_exp_mon','$card_exp_year','$card_cvv')";
#check connection 
if(mysqli_query($connection,$sql))
{
   echo"<script>alert('Details Are Correct')</script>";
   header("location:PaySuc.php");
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
         <li><a class="active" href="Booking.php">Booking</a></li>
         <li><a href="Login.php">Login</a></li>
         <li><a href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
<body>
<center>
   <br><br><br><br><br>
   <br><h1 style="color: rgb(255, 255, 255);">Pay Here</h1><br>
</center>
<!--Form-->
  <div class="form-box">
      <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
            <h3>Payment</h3>
            <br><br>
            <br><br>
            <label for="cname"><b>Name on Card :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" id="cname" name="cardname" placeholder="John Mark" Required>
            <br>
            <label for="ccnum"><b>Credit card number :</b></label>
            <input type="text" id="ccnum" name="cardnumber" Required placeholder="1111-2222-3333-4444">
            <br>
            <label for="expmonth"><b>Exp Month :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" id="expmonth" name="expmonth" Required placeholder="September">
           
            <br>
            <label for="expyear"><b>Exp Year :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" id="expyear" name="expyear" Required placeholder="2021">
            <br>
             
            <label for="cvv"><b>CVV :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text" id="cvv" name="cvv" Required placeholder="352">
            
            <br>
            <button name="submit"  type="submit" class="loginbtn">Pay Now</button> 
        <br><br>
        </div> 
      </form>
              
    
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>