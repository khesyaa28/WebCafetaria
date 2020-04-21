<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.css">
  
</head>
<body>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/js/bootstrap.js">
<?php
        include 'detail.php';
   ?>
   <?php include 'connect.php';
    $NIK = @$_GET['NIK'];
    $query = "SELECT * FROM signup WHERE NIK = '$NIK'";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
?>

    <div class="jumbotron text-center" style="background-color:tan;" style="margin-bottom:1px">
      <h1>Latte O Cafetaria</h1>
      <p>-Perfect place to relaxing-</p> 
    </div>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        
    <a class="navbar-brand" href="index.html"><p class="text-info">Latte O</p></a>
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
    
    
    <div class="container">
      <div class="container" style="margin-top:50px">
        <div class="row">
           <div class="col-sm-7">
        <center><h2 style="font-family: Courier;"><b>Edit Page</b></h2></center>
      <br>
        <h5><?php echo"Hi! ".$_SESSION['Username']; echo". You can update yor data :)";
          ?></h1>
          <form action="cekedit.php" method="POST">
        <table>
            <tr>
                <td><label>New NIK</label></td>
                <td><input type="text" name="NIK" class="form-group" placeholder="Enter NIK" id="NIK" value="<?php echo $row['NIK']; ?>"></td>
            </tr>
            <tr>
                <td><label>New Name:</label></td>
                <td><input type="text" name="Name" class="form-group" placeholder="Enter Name" id="Name" value="<?php echo $row['Name']; ?>"></td>
            </tr>
            <tr>
                <td><label>New Username:</label></td>
                <td><input type="text" name="Username" class="form-group" placeholder="Username" id="Username" value="<?php echo $row['Username']; ?>"></td>
            </tr>
            <tr>
                <td><label>New City:</label></td>
                <td><input type="text" name="City" class="form-group" placeholder="Enter City" id="City" value="<?php echo $row['City']; ?>"></td>
            </tr>
            <tr>
                <td><label>New Password:</label></td>
                <td><input type="password" name="Password" class="form-group" placeholder="Password" id="Password" value="<?php echo $row['Password']; ?>"></td>
            </tr>
        </table><br><br><br>
        <input type="submit" class="btn btn-primary" value="SAVE"></td><br><br>
        
    
      </div>
      <br><br><br>
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
