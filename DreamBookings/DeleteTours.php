<?php
#including configaration file 
include 'config.php';
?>
<?php
   if(isset($_GET['delete_id']))
    {
        
        $id = $_GET['delete_id'];
        
        $sql = "DELETE FROM tours WHERE tour_id = $id";

        $result= mysqli_query($connection,$sql);

        if($result)
        {
            echo "Deleted Succefully";
            header("location:AdministratorDashboard.php");
        }
        else{
            echo "Error";
        }
                
    }

?>