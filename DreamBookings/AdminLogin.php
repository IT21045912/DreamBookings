<?php
#including configaration file 
include_once 'config.php';
?>
<?php
if (isset($_POST['submit']))
{
#set feilds name 
      $username = $_POST["username"];
      $password = $_POST["password"];
      $sql = "SELECT * FROM admin WHERE username LIKE '%$username%' AND password LIKE '%$password%'";
#check connection 
    $result = $connection ->query($sql);

    if ($result -> num_rows > 0)
      {
      echo "<script>alert('Login Successful')</script>";

      header("location:AdministratorDashboard.php");
      }
    else{
      echo"<script>alert('Account Not Found')</script>";
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
   <style>
 
      .form_container{
      padding-top: 100px;
      }  
      button {   
      background-color: rgb(10, 98, 187);   
      width: 100%;  
      color: rgb(0, 0, 0);   
      padding: 15px;   
      margin: 10px 0px;   
      border: none;   
      cursor: pointer;
      width: auto;   
      padding: 15px 29px;  
      margin-left: 0px;  
      }  
      input[type=text], input[type=password] {   
      width: 50%;   
      margin: 20px 10px;  
      padding: 15px 20px;   
      display: inline-block;   
      border: px solid rgb(0, 0, 0);   
      box-sizing: border-box; 
      }  
      button:hover {   
      background-color: rgba(78, 149, 255, 0.46); 
      color: black;
      transition: all 0.2s ease;  
      } 
      .container {   
      padding: 70px;   
      width: 100%;
      background-color: #ffffff;
      }

      </style>
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
<!--Form-->
   <br><br><br><br><br><br>
   <center><h1 style="color: aliceblue;">Administrator Login</h1></center>
   <br>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
    <div class="form-box">   
        <label><b>Username :</b> </label>   
        <input type="text" placeholder="Enter Username" name="username" required>  
        <br><label><b>Password : </b></label>   
        <input type="password" placeholder="Enter Password" name="password" required>         
         <br> 
  
        <button type="submit" name="submit">Login</button> 
      
    </div>   
   </form> 
   </center>
<!--Footer-->
<hr size="50px" color="white">
<?php include('php/footer.php');?>
</body>
</html>