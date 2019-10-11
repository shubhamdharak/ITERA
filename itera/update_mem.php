<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">

</head>
<body>
    <?php 
    include("navbar.php");

    ?>
    <br><br>
<div class="container col-12">
<table class="table  container table-hover table-bordered">
  <thead class="thead-dark">
    <tr class="text-center">
     
     <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Study</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
<?php
    include('db.php');
   $qry = "SELECT * FROM `register`";
   $run = mysqli_query($db,$qry);

   if($run->num_rows>0)
   {
        while($data = $run->fetch_assoc())
        {
            ?>
        
        <tbody>
            <tr class="text-center">
            
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['mobile'];?></td>
            <td><?php echo $data['age'];?></td>
            <td><?php echo $data['dob'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><?php echo $data['study'];?></td>

            <td>
        <a href="update_mem_f.php?pid=<?php echo $data['id'];?>" class= "text-white">
            <button class="btn btn-success">Update</button>
        </a>
            </td>
    </tr>
            <?php
                }
                ?>
        </tbody>
        </table>

   <?php     
}
?>
</body>
</html>