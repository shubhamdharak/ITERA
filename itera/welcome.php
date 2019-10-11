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
        <a href="index.php"> <button class="btn btn-outline-light float-left">  Back</button></a>
        User Dashboard
        <a href="logout.php"> <button class="btn btn-outline-light float-right">  Logout</button></a>
     </h2>
      
     <br><br>
      
        <div class="row">
           <div class="col-3" >
                      <div class="list-group text-center">
                        <a href="event.php" class="list-group-item active bg-success">Events</a>
                        <a href="product.php" class="list-group-item ">ITERA Members</a>
                        <a href="package.php" class="list-group-item">My Profile</a>
                        <a href="payment.php" class="list-group-item">Suggestion</a>
                      </div>
           </div>
           
               <h1 class="jumbotron text-center bg-info text-white" style="height:500%; width:50%">
                  Welcome <?php echo strtoupper($_SESSION['name']) ?>
               </h1>
   
        <br><br>
        
       <div class="col-3">
                <div class="list-group text-center">
                   <a href="gallary.php" class="list-group-item active bg-success">Gallery</a>
                   <a href="index.php" class="list-group-item ">Home </a>
                   <a href="rule.php" class="list-group-item">Rules & Guidlines</a>
                   
                </div>
      </div>
   </div>


</body>
</html>