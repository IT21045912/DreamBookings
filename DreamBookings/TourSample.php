<?php include_once 'config.php'; ?>
<?php 

$image ="images/1.jpg";
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
   <style>
       body{
        background-image:url(<?php echo $image ?>);
        background-size:cover;
       
       }
    </style>
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
   
    <?php
    if(isset($_GET['hotel_id']))
    {
        
        $hotel_id = $_GET['hotel_id'];
        
        $sql = "SELECT * 
                FROM  hotels
                WHERE hotel_id LIKE {$hotel_id}";
        
        $result = $connection ->query($sql);
        if($result -> num_rows > 0)
        {
            while($row = $result -> fetch_assoc())
            { 

                echo "<br><br><br><br><br><center>";
                echo "<h1 style='padding:10px; color:black;'>".$row['hotel_name']."</h1>";
                
                echo "<div style='font-size:20px; background-color:rgba(78, 149, 255, 0.76); line-height: 1.9;' >";
                echo "<h3 style='margin:100px; width:50%; font-size:20px;'>".$row['hotel_desc']."</h3>";
                echo "</div>";
                
                echo "<h1 style='background-color:red; color:white;'> Price : LKR.".$row['hotel_price']."</h1>";
                echo "<br>"; 
                echo "<h2 style='color:black; padding:10px; background-color:white;'>Contact Now</h2>";
                echo "<Button>"."<h1 style='color:white;' >".$row['hotel_contact']."</h1></button>";
                echo "<br>"; 
                
                echo "<h2 style='color:black; padding:10px; background-color:white;'>Address</h2>";
                echo "<div style='font-size:20px; padding:20px; background-color:rgba(78, 149, 255, 0.76); line-height: 1.9;' >";
                echo "<h3 style='font-size:20px;'>".$row['hotel_address']."</h3>";
                echo "</div>";     
                  
                echo "<a href ='Log.php'><button>Book Now</button></a>";
                echo "</center>";        
            }
           
        }
    }
?>

    <!--Footer-->
    <?php include('php/footer.php');?>
</body>
</html>