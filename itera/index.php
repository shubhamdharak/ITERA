<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Itera</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!----- Google font--->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet"> 
    
</head>
<body>
<?php 
    include('navbar.php');
    require('login.php');
    
?>            
<!--Header image -->
<div class="hero-image">
    
    <div class="hero-text">
      <h1 style="font-size:50px">Welcome to I T E R A </h1>
      <strong> <p>Information Technology Engineer’s Relic Association</p></strong>
     <strong> <p>Department of Information Technology</p></strong>
      <a href="register.php" class="btn btn-light justify-content-center">Join Now</a>
    </div>
</div>

<br><br>
<div class="row">
    <div class="container col-9">
    <h4 class="heading text-white text-center">
                Notice Board / News Letter
        </h4>
        <div class="jumbotron">
            <marquee behavior="sliding" direction="right" scrollamount=10><h3>Sanjivani Tech Fest 2019
            </h3></marquee>
            <h4 class="text-center text-danger"><====> Events <===></h4>
            <ul>
                <strong><li>Innovate</li></strong></strong>
                <strong><li>Dazzle Coding</li></strong>
                <strong><li>Word War</li></strong>
                <strong><li>BeSpeak</li></strong>
                <strong><li>Hunky Brain</li></strong>
                <strong><li>DB MAnia</li></strong>
                <strong><li>Spontancity War</li></strong>
                 <strong><li>Marathon Programming</li></strong>

            </ul>
        </div>
    </div>
</div>
<hr><hr>
<!--Login Form Start here-->
<div class="row container-fluid">
    <div class="col-6"> 
        <div class="form-group  col-lg-9  shadow">
            <form method='post' action="index.php" class="form md-6">
            <div class="heading text-center mb-5 text-white">
               User Login
            </div>
            <div class=" container row d-flex flex-row justify-content-center">
                <div class="form-group container  p5 ">
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                      <strong><label for="user">UserName</label></strong>
                    <input type="text" class="form-control" name="uname"><br>
                   <i class="fa fa-key" aria-hidden="true"></i> 
                        <strong><label for="pass">Password</label></strong>
                    <input type="password" class="form-control" name="pass"><br><br>
                    <input type="submit" class="btn btn-success form-control" value="Login" name="login"><br><br>
                   <strong> <a href="register.php" style="float:right;" class='text-danger'>Sign Up</a></strong>
                </div>
            </div>
        </form>
        </div>
    </div>

        <section class="container shadow p-5 " style="width:50%;">
       <p style="font-family: 'Noto Serif', serif;"> 
                <h2 class="text-center heading1 text-white">VISION</h2>
Our vision is to impart the knowledge of Information Technology to the students through Classroom Teaching, Research and Industry Interaction.<br><br>

<h2 class="text-center heading1 text-white">MISSION</h2>

We are committed to the use of the Information Technology as a prime tool for the multifaceted development of our students in the emerging fields of Engineering and Technology.<br>
We are also committed to develop ethical practices and societal contributions in our students.
</p>
           
        </section>
</div><hr><br><br>
<div class="row container p-3 ml-5">
<section style="font-size:20px; font-family: 'Grenze', serif;"> 
    Information Technology Engineering Department ‘ITERA’ is an organization formed by the students which works for the students. The basic aim of ITERA is to enrich students with different qualities to add dimensions to their personality so that every student emerges as multi-functional engineer who is globally recognized. ITERA  was established in the year 2001. The motto of ITERA is to mould one’s personality in such a way that one becomes equally competent in all streams of engineering. In the recent years ITERA has been working hard .

</section>
</div>
<br><br>
<?php 
    include('footer.php');
    
?> 


</body>
</html>