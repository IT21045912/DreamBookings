<?php
#including configaration file 
include_once 'config.php';
?>
 
<style>
h2,h1,p{
    color:white;
}
div.content {
  margin-left: 200px;
  padding: 10px;
  height: 1000px;
  width:90%%;
}
table {
  border-collapse: collapse;
  width: 100%;

}
table, th, td {
  border: 2px solid white;
  background:#85aace;

}

</style>
</head>
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
h2,h1,p{
    color:white;
}
div.content {

  padding: 20px;
  height: 1000px;
  width:90%%;
}
table {
  border-collapse: collapse;
  width: 70%;
}
.a{
  color:white;
}
table, th, td {
  border: 2px solid black;
  background:#85aace;
  font-size:20px;
  
}
.postContent{
  display:block;
  border:9px solid black;
  background-color:#45d7b6;
  padding:10px;
}
.post_img{
  border:3px solid black;
  padding:10px;
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
         <li><a href="Login.php">Login</a></li>
         <li><a href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a class="active" href="Search.php">Search</a></li>
      </ul>
   </header>
<body>


<style>

</style>
</head>
<body>
<br><br><br><br><br>
<br><br>
  <center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label for="Search"><font style="color:white; font-size:30px;"> Search : </font></label>
<input type="text" name="search" placeholder="Search" id="">
<button name="submit">Serach</button>
</form>
</center>
<br><br><br>
<center>
<h1 style="padding:10px; color:black; background-color:white; font-size:50px;">Search Results</h1>
<table>
     <th colspan="9"><h1>Hotels</h1></th>
   </tr>
   <tr>
   <th>Hotel Name</th>
   <th>Hotel Contact</th>
   <th>Hotel Address</th>
   <th>Hotel Price</th>
   <th>Hotel Type</th>
   <th>Book Now</th>
</tr>
  
  <?php      
  if (isset($_POST['submit']))
  {
  
     $search = $_POST['search'];
     $sql = "SELECT * 
             FROM hotels WHERE hotel_name LIKE '%$search%'";
     
      $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $hotel_name = $row['hotel_name'];
              $hotel_contact = $row['hotel_contact'];
              $hotel_address = $row['hotel_address'];
              $hotel_price = $row['hotel_price'];
              $hotel_type = $row['hotel_type'];
                
              echo 
              '<tr>
              <th>'.$hotel_name.'</th>
              <th>'.$hotel_contact.'</th>
              <th>'.$hotel_address.'</th>
              <th>'.$hotel_price.'</th>
              <th>'.$hotel_type.'</th>
              <td>
              <center>
              <a style="color:white;" href="Log.php"><button>Book Now</button></a>
              </center>
              </td>
              </tr>';                       
    }
  }
  else{
    echo "<h1>No Result Found</h1>";
  }

  }

  echo "</center></table>";
    
    
  ?>
<table>
     <th colspan="9"><h1>Tours</h1></th>
   </tr>
   <tr>
   <th>Tour Name</th>
   <th>Tour Contact</th>
   <th>Tour Address</th>
   <th>Tour Price</th>
   <th>Tour Type</th>
   <th>Book Now</th>
</tr>
  
  <?php      
  if (isset($_POST['submit']))
  {
  
     $search = $_POST['search'];
     $sql = "SELECT * 
             FROM tours WHERE tour_name LIKE '%$search%'";
     
      $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $tour_name = $row['tour_name'];
              $tour_contact = $row['tour_contact'];
              $tour_address = $row['tour_address'];
              $tour_price = $row['tour_price'];
              $tour_type = $row['tour_type'];
                
              echo 
              '<tr>
              <th>'.$tour_name.'</th>
              <th>'.$tour_contact.'</th>
              <th>'.$tour_address.'</th>
              <th>'.$tour_price.'</th>
              <th>'.$tour_type.'</th>
              <td><center>
              <a style="color:white;" href="Log.php"><button>Book Now</button></a>
              </center></td>
              </tr>';                       
    }
  }
  else{
    echo "<h1>No Result Found</h1>";
  }

  }

  echo "</center></table>";
    
    
  ?>
   
   <!--Footer-->


</body>
<?php include('php/footer.php');?>
</html>