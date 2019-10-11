<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">

</head>
<body>
   
   <?php 
    include('navbar.php');
    include('db.php');
    // Fetching Data from db
    //get value of id by update_mem page
    $pass_id = $_GET['pid'];
    $qry = "SELECT * FROM `register` WHERE `id` = '$pass_id'";
    $result = mysqli_query($db,$qry);
    
    $data = mysqli_fetch_assoc($result);

    // Updadte
    if(isset($_POST['submit_btn']))
    {
        $pass_id = $_POST['pass_id'];
        $name = $_POST['fname'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $age = $_POST['age'];
        $dob =$_POST['dob'];
        $address =$_POST['addr'];
        $study =$_POST['yr_study'];

       
        
        $qry1 = "UPDATE `register` SET `name`='$name',`password`='$password',`age`='$age',`mobile`='$mobile',`age`='$age',`dob`='$dob',`address`='$address' WHERE `id`= '$pass_id'";
        $run = mysqli_query($db,$qry1);

        if($run == TRUE)
        {
            ?>
            <script>
                
              window.alert('Data Updated Successful ........!');    
              window.open('update_mem.php','_self') ;
            </script>
            <?php
                
        }
        else
        {
            echo "error";
        }
    }
    
    ?>

    <br>
    <div class="container shadow col-6">
    <h2 class="text-white bg-dark text-center">Update Student Details</h2>
    <form method='post' action="update_mem_f.php" enctype="multipart/form-data" class="form md-6">
    <div class="alert-info"><h5>Mandatary to select approprite year of study before submit the form</h5></div>
                 <strong><label for="fname"> Name</label>
                      <input type="text" class="form-control" name= 'fname' value= <?php echo $data['name'];?>><br>
                      <label for="pass" >Password</label>
                      <input type="password" class="form-control" name="pass" value=<?php echo $data['password'];?> required><br>
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" value=<?php echo $data['email'];?> required><br>
                      <label for="mobile">Mobile No</label>
                      <input type="text" name="mobile" class="form-control" value=<?php echo $data['mobile'];?> required><br>
                      <label for="age">Age</label>
                      <input type="text" name="age" class="form-control" value=<?php echo $data['age'];?> required><br>
                      <label for="dob">DOB</label>
                      <input type="date" name="dob" class="form-control" value=<?php echo $data['dob'];?> required><br>
                      <label for="study">Study In</label>
                      <select name="yr_study" >
                        <option vlaue="FE">FE</option>
                        <option vlaue="SE">SE</option>
                        <option vlaue="TE">TE</option>
                        <option vlaue="BE">BE</option>
                        <option vlaue="BTECH">B.TECH</option>
                      </select><hr><br>
                      <label for="address">Address</label><br>
                      <textarea row ="4" cols="50" class='addr' name='addr' required><?php echo $data['address'];?></textarea>
                      <input type="hidden" name='pass_id' value=<?php echo $data['id'];?> >
                      <br><br>
                      <input type="submit" name="submit_btn" id="btn" value="Update Now" class="btn btn-info form-control">
                     <br><br>
                  </form></strong>
    </div>

 
</body>
</html>