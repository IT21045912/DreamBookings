<?php
#including configaration file 
include 'config.php';
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
         <li><a href="SellerLogin.php">Seller</a></li>
         <li><a href="About.php">About Us</a></li>
         <li><a href="Search.php">Search</a></li>
      </ul>
   </header>
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
  border: 1px solid white;
  background:#85aace;
  font-size:20px;
  padding:20px;

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
<body>
  <br><br><br><br><br>
  <center>
  <h1 class="text2">Administrator Dashboard</h1>
  <br><br>
  <h1>Seller Details</h1>
  <br><br><br><br>
 <table>
   <tr>
   <th>Seller Id</th>
   <th>Seller Name</th>
   <th>Seller Email</th>
   <th>Phone Number</th>
   <th>Opertions</th>
</tr>
</center>
<?php      
        $sql = "SELECT * 
                FROM  seller";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['seller_id'];
              $name = $row['username'];
              $email = $row['email'];
              $phone = $row['phone'];
              
              echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$name.'</th>
                        <th>'.$email.'</th>
                        <th>'.$phone.'</th>
                        <td><center>
                        <button><a style="color:white; "href="DeleteSeller.php?delete_id='.$id.'">Delete</a></button>
                        </td></center>
                    </tr>';                       
    }
  }
?>

</table>
<br><br><br><br>
  <center>
    <h1>Customer Details</h1>
  <br><br><br><br>
 <table>
   <tr>
   <th>Customer Id</th>
   <th>Customer Name</th>
   <th>Customer Email</th>
   <th>Phone Number</th>
   <th>Opertions</th>
</tr>
</center>
<?php      
        $sql = "SELECT * 
                FROM  customer";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['user_id'];
              $name = $row['username'];
              $email = $row['email'];
              $phone = $row['phone'];
              
              echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$name.'</th>
                        <th>'.$email.'</th>
                        <th>'.$phone.'</th>
                        <td><center>
                        <button><a style="color:white; "href="DeleteCustomer.php?delete_id='.$id.'">Delete</a></button>
                        </td>/center>
                    </tr>';                       
    }
  }
?>

</table>

<br><br><br><br>
  <center>
    <h1>Hotel Details</h1>
  <br><br><br><br>
 <table>
   <tr>
   <th>Hotel Id</th>
   <th>Owner Id</th>
   <th>Hotel Name</th>
   <th>Hotel Contact</th>
   <th>Hotel Address</th>
   <th>hotel Website</th>
   <th>Hotel Price</th>
   <th>Hotel Type</th>
   <th>Opertions</th>
</tr>
</center>
<?php      
        $sql = "SELECT * 
                FROM  hotels";   
        $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['hotel_id'];
              $hotel_owner = $row['owner_id'];
              $hotel_name = $row['hotel_name'];
              $hotel_contact = $row['hotel_contact'];
              $hotel_address = $row['hotel_address'];
              $hotel_website = $row['hotel_website'];
              $hotel_price = $row['hotel_price'];
              $hotel_type = $row['hotel_type'];
              
              echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$hotel_owner.'</th>
                        <th>'.$hotel_name.'</th>
                        <th>'.$hotel_contact.'</th>
                        <th>'.$hotel_address.'</th>
                        <th>'.$hotel_website.'</th>
                        <th>'.$hotel_price.'</th>
                        <th>'.$hotel_type.'</th>
                        <td><center>
                        <button><a style="color:white; "href="DeleteHotels.php?delete_id='.$id.'">Delete</a></button>
                        </td></center>
                    </tr>';                       
    }
  }
?>

</table>

<br><br><br><br>
  <center>
    <h1>Tour Details</h1>
  <br><br><br><br>
 <table>
   <tr>
   <th>Tour Id</th>
   <th>Owner Id</th>
   <th>Tour Name</th>
   <th>Tour Contact</th>
   <th>Tour Address</th>
   <th>Tour Website</th>
   <th>Tour Price</th>
   <th>Tour Type</th>
   <th>Opertions</th>
</tr>
</center>
<?php      
        $sql = "SELECT * 
                FROM  tours";   
        $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['tour_id'];
              $Tour_owner = $row['owner_id'];
              $Tour_name = $row['tour_name'];
              $Tour_contact = $row['tour_contact'];
              $Tour_address = $row['tour_address'];
              $Tour_website = $row['tour_website'];
              $Tour_price = $row['tour_price'];
              $Tour_type = $row['tour_type'];
              
              echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$Tour_owner.'</th>
                        <th>'.$Tour_name.'</th>
                        <th>'.$Tour_contact.'</th>
                        <th>'.$Tour_address.'</th>
                        <th>'.$Tour_website.'</th>
                        <th>'.$Tour_price.'</th>
                        <th>'.$Tour_type.'</th>
                        <td><center>
                        <button><a style="color:white;" href="DeleteTours.php?delete_id='.$id.'">Delete</a></button>
                        </td></center>
                    </tr>'; 
                                   
    }
  }
?>

</table>
<br><br><br><br><br>
  <center>
  <h1>Offer Details</h1>
  <br><br><br><br>
 <table>
   <tr>
   <th>Offer Id</th>
   <th>Offer Name</th>
   <th>Offer Price</th>
   <th>Offer Date</th>
   <th>Opertions</th>
</tr>
</center>
<?php      
        $sql = "SELECT * 
                FROM  offers";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
              $id = $row['offer_id'];
              $name = $row['offer_name'];
              $price = $row['offer_price'];
              $date = $row['offer_date'];
              
              echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$name.'</th>
                        <th>'.$price.'%</th>
                        <th>'.$date.'</th>
                        <td><center>
                        <button><a style="color:white; "href="DeleteOffer.php?delete_id='.$id.'">Delete</a></button>
                        </td></center>
                    </tr>';                       
    }
  }
?>

</table>
<br><br><br><br>
    <!--Footer-->
<?php include('php/footer.php');?>
</body>
</html>