<?php
#including configaration file 
include_once 'config.php';
?>
<?php
if (isset($_POST ['submit']))
{
#set feilds name 
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $contact = $_POST["phoneNo"];
      $adults = $_POST["Adults"];
      $children = $_POST["Children"];
      $request = $_POST["Request"];
      
      $sql = "INSERT INTO booking(user_id,fname,lname,email,contact,adults,children,request) 
      VALUES ('','$fname','$lname','$email','$contact','$adults','$children','$request')";
#check connection 
if(mysqli_query($connection,$sql))
{
   echo"<script>alert('Details Are Correct')</script>";
   header("location:PayHere.php");
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
   <br><br><br><br><br><br><br>
   <center>
   <h1 style="color: aliceblue;">Book Now</h1>
   </center>
        <div class="form-box">
            <form class="form-inline"  method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
                <label for="fname"><b>Name :</b></label><br>
                <input type="text" id="fname" placeholder="First" name="fname" required>
                <input type="text" id="lname" placeholder="Last" name="lname" ><br><br>
                <label for="email" required><b>Email Address :</b></label><br>
                <input type="email"  placeholder="Enter email" name="email" ><br><br>
                <label for="phoneNo"><b>Phone Number :</b></label><br>
                <input type="text" id="phoneNo" placeholder="Enter Phone number" name="phoneNo" ><br><br>
                <p><b>Who Are You Booking For :</b></p><br>
                <div class="radio-btn">
                   <input type ="radio" class="btn" name="check" checked="checked"><span>I'm the main guest</span><br>
                   <input type ="radio" class="btn" name="check"><span>I'm booking for someone else</span><br><br>
                </div>
                <p><b>Date :</b></p>
                <label for="from"><b>From :</b></label>
                <input type="date" id="date" name="date" >
                <label for="To"><b>To :</b></label>
                <input type="date" id="date" name="date" ><br><br>
                <P><b>No Of Members :</b></p>
                  <label for="Adults"><b>Adults :</b></label>
                  <input type="number" id="Adults" name="Adults" >
                  <label for="Children"><b>Childrens :</b></label>
                  <input type="number" id="Children" name="Children" ><br><br>
                  <label for="Request"><b>Request :</b></label><br>
                  <input type="text" id="Request" name="Request" ><br><br>
                <label><input type="checkbox" name="box" required>I Agree to The Terms & Conditions</label><br><br><br>

                <button name="submit" type="submit">Check Out</button>         
               
               </form> 
                
            
        </div>
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>