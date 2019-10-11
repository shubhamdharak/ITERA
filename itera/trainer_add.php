<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Trainer</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">


</head>
<body>
    <?php 
        include('navbar.php');
    ?>
<form method = "post" action = "trainer_add.php">
    
        <div class="heading text-center mb-5 text-white">
        <h2>
         <a href="admin.php"> <button class="btn btn-outline-light float-left">  Back</button></a>
         <a href="logout.php"> <button class="btn btn-outline-light float-right">  Logout</button></a>
           Add Members
        </h2>
        </div>
       
            <div class="form-group container shadow p2">
               <strong> <label for="name">Name</label></strong>
                <input type="text" class="form-control" name="name"><br>
                 <strong> <label for="position">Position</label></strong>
                <input type="text" class="form-control" name="position"><br>
                <strong><label for="email">Email</label></strong>
                <input type="text" class="form-control" name="email"><br>
                 <strong> <label for="mobile">Mobile</label></strong>
                <input type="text" class="form-control" name="mobile">
                <br><br>
                <input type="submit" class="btn btn-info " name ="submit" value="ADD Trainer"><br><br>
            </div>
   <div>
</form>
<?php
include('db.php');

// For registration Form of member
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $position = $_POST['position'];
        
       
        $qry = "INSERT INTO `member`( `name`, `email`, `mobile`, `position`) VALUES ('$name','$email','$mobile','$position')";
    
        $run = mysqli_query($db,$qry);

        if($run == TRUE)
        {
            ?>
            <script>
                
               window.alert('Member Register Successful');    
               window.open('admin.php','_self') ;
            </script>
            <?php
                
        }
        else
        {
            echo "error";
        }
    }
    

   
?>
 
</body>
</html>