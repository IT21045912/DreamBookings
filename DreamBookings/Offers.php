<?php
#including configaration file 
include_once 'config.php';
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
<style>
h2,h1,p{
    color:black;
}
div.content {

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
<div class="content">
    
<br><br><br><br><br>

  <br><br>
<style>

</style>
</head>
<body>
<div>
<?php
    include_once 'config.php';
        ?>

<!--Hotels-->
<center>
<h1 style="color: black ;padding:10px; background-color:white; font-size:50px;">Offers</h1>
</center>
 <br>
    <?php
    $i = 0;
    $image = array("images/1.jpg");
    $sql = "SELECT * FROM offers";
    $result = $connection ->query($sql);
    if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            echo "<div>";
                echo "<div class='row'>";
                    echo "<div class='column'>";
                         echo "<div class='content_column'>";
                                echo "<div class='postContent'>";
                                  echo "<br><br><br>";
                                    echo '<center>';
                                    echo "<img class='post_img'src='images/offer.jpg' height = 300px>";
                                    echo '</center>';
                                    echo '<br>';
                                    echo '<center>';
                                    echo "<h1>&nbsp;&nbsp;".$row['offer_name']."</font></h1>";
                                    echo '</center>';
                                    echo '<br>';
                                    echo '<center>';
                                    echo "<p>Offer Price :&nbsp;&nbsp;".$row['offer_price']."%</p>";
                                    echo '<br>';
                                    echo '</center>';
                                    echo " &nbsp; &nbsp; &nbsp;";
                         echo "</div>";
                    echo "</div>";
                echo"</div>";
             echo "</div>";
        }
    }?>
   <!--Footer-->
   <?php include('php/footer.php');?>
</body>
</html>