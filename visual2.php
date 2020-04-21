<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show yours Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.css">
  
</head>
<?php include 'detail.php'; ?>
<body>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/js/bootstrap.js">

    <div class="jumbotron text-center" style="background-color:tan;" style="margin-bottom:1px">
      <h1>Latte O Cafetaria</h1>
      <p>-Perfect place to relaxing-</p> 
    </div>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        
    <a class="navbar-brand" href="index.html"><p class="text-info"><img src="latte o.png" height="140"></p></a>
      <div class="container" style="margin-top:5px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="History.html">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.html">Profile</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="Abouts.html">About Us</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="Signup.html">Login</a>
          </li>   
        </ul>
      </div>  
    </div>
    </nav>

    <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> You just Log in.
  </div>
    <div class="container">
      <div class="container" style="margin-top:50px">
        <div class="row">
           <div class="col-sm-7">
        <center><h2 style="font-family: Courier;"><b>Data Page</b></h2></center>
        <?php
          echo"Selamat Datang ".$_SESSION['Username']; echo". Terima Kasih sudah berlangganan";
          ?>

          <table class="table">
    <thead class="thead-light">
      <tr>
        <th>NIK</th>
        <th>Name</th>
        <th>Username</th>
        <th>City</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php 
include "connect.php";
$query="SELECT * FROM signup ";
$sql= mysqli_query($connect,$query);

while($data=mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['NIK']."</td>";
    echo "<td>".$data['Name']."</td>";
    echo "<td>".$data['Username']."</td>";
    echo "<td>".$data['City']."</td>";
    echo "<td>".$data['Password']."</td>";
    echo "</tr>";
}?>
    </tbody>
  </table>
  <div class="container">
    <div class="row">
        <div class="col"><a href="edit.php" class="btn btn-outline-dark" role="button">Edit</a></div>
        <div class="col"><a href="delete.php" class="btn btn-outline-dark" role="button">Delete</a></div>
        <div class="col"><a href="logout.php" class="btn btn-outline-dark" role="button">Logout</a></div>

    </div>
  </div>
</table>

</div>
      </div>
      <br><br><br>
     
      <div class="col-sm-4">
      
      <div class="jumbotron text-center" style="margin-bottom:3px">
        <p>Footer</p>
      </div>
</div>

</div>
</div>
<br><br><br>
<div class="jumbotron text-center" style="margin-bottom:1px">
  
  <div class="container">
    <h1>Contact Us!</h1>
    <p>&#128222; 021-464513 !</p>
    <p>our official account!</p>
    <div class="row">
      <div class="col" ><img src="gm.png" class="rounded" width="40px"> o_latte97@gmail.com</div>
      <div class="col" ><img src="fb.png" class="rounded" width="45px">O' Latte by Ravell</div>
      <div class="col" ><img src="igg.png" class="rounded" width="45px">@olatteo.id</div>

    </div>
    <br>
      <p>Visit us in &#128204; Via Monsignor Egidio Bignamini, 35, 60126 Ancona AN, Italia</p>
      

      
</body>
</html>