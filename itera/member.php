<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Details</title>

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

        <h2 class="text-white text-center bg-dark">
        <a href="admin.php"> <button class="btn btn-outline-light float-left">  Back</button></a>
            Student Details
        <a href="logout.php"> <button class="btn btn-outline-light float-right">  Logout</button></a>
        </h2>
        <form  method="post" action="member.php">
        <div class="row p-2 ml-5 ">
            <div class="form-group col-6 container shadow p-2" >
                <input type="text" name="search" class="form-control"> <br>
                <input type="submit" name="submit" class="btn btn-danger btn-sm form-control" value="Search Members">
            </div>
        </div>
        </form>
        <br><br>
<?php 
   // include('navbar.php');
    include('db.php');

if(isset($_POST['submit']))
{
    $find = $_POST['search'];
   $qry = "SELECT * FROM `register` WHERE `name` LIKE '%$find%'";
   $run = mysqli_query($db,$qry);

   if($run->num_rows>0)
   {
       
       ?>
       <table class="table table-striped container table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Study In</th>
    </tr>
  </thead>
  <?php 
  while($row = $run->fetch_assoc())
  {
        echo "<tbody>";
        echo "<tr>";
            echo "<th scope='row'>".$row["id"]."</th>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["mobile"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["dob"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["study"]."</td>";
            echo" </tr>";
  }
        echo" </tbody>";
        echo"</table>";
  

    }
    else
    {
        ?>

        <script>window.alert('No Record Found');</script>
        <?php
    }
}
// Display all record
else
{
   $qry1 = "SELECT * FROM `register`";
   $result = mysqli_query($db,$qry1);

   if($result->num_rows>0)
   {
       ?>
       <table class="table table-striped container table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Study In</th>

    </tr>
  </thead>
  <?php 
  while($row = $result->fetch_assoc())
  {
        echo "<tbody>";
        echo "<tr>";
            echo "<th scope='row'>".$row["id"]."</th>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["mobile"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["dob"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["study"]."</td>";
            echo" </tr>";
  }
        echo" </tbody>";
        echo"</table>";
}
}



?>

</body>
</html>