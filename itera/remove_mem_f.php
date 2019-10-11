<?php
include('db.php');

        $pass_id = $_GET['pid'];
        
        $qry1 = "SELECT * FROM `register` WHERE `id`='$pass_id'";
        $result = mysqli_query($db,$qry1);

   if($result->num_rows==1)
   { 
        $qry = "DELETE FROM `register` WHERE `id`='$pass_id'";
        
        $run = mysqli_query($db,$qry);

        if($run == TRUE)
        {
            ?>
            <script>
                
               window.alert('Member Removed Successfully..!');    
               window.open('remove_mem.php','_self') ;
            </script>
            <?php
                
        }
        else
        {
            echo "Error";
        }
    }

   
?>