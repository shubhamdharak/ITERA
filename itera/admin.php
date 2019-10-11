<?php 
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
<h2 class="bg-dark text-white text-center">
        <a href="admin_login.php"> <button class="btn btn-outline-light float-left">  Back</button></a>
         Admin Dashboard  <?php echo "[ ". $_SESSION['name']." ]" ?>
        <a href="logout.php"> <button class="btn btn-outline-light float-right">  Logout</button></a>
     </h2>
      
     <br><br>
      
        <div class="row">
          <div class="col-9 container">
            <div class="list-group text-center">
              <a href="event.php" class="list-group-item active bg-success">Add Event</a>
              <a href="member.php" class="list-group-item ">Student Details</a>
              <a href="register.php" class="list-group-item  ">Add Student</a>
              <a href="remove_mem.php" class="list-group-item ">Remove Student</a>
              <a href="update_mem.php" class="list-group-item ">Update Student Details</a>
            </div>
          </div>
          
        </div>
        <br><br>
        <div class="row">
          <div class="col-9 container">
            <div class="list-group text-center">
                <a href="trainer.php" class="list-group-item bg-dark text-white">Members Details</a>
                <a href="trainer_add.php" class="list-group-item bg-dark text-white">Add Member</a>             
                <a href="remove_t.php" class="list-group-item bg-dark text-white">Remove Member</a>      
                <a href="update_t.php" class="list-group-item bg-dark text-white">Update Member</a>      

            </div>
          </div>   
        </div>


</body>
</html>