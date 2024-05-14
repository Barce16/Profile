<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- link -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->

    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>


     
<!-- Sidebar -->
<div class="sidenav">


<strong class="me-auto"><b class="text-white">Smart Parking Application</b></strong>
<br>
<br>

    
     <h2 class="text-white">Hello,  <?php echo $_SESSION['name']; ?></h2>
     <br>

  <a href="#about">View Status</a>
  <a href="#services">Reservation</a>
  <a href="#clients">Contact</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
<div class="col-sm-9">
      <div class="well bg-dark">
        <h2 class="text-primary">Smart Parking System</h2>
        <p class="text-primary"></p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well" >
            <h4 class="text-primary">Users</h4>
            <p class="text-primary">1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4 class="text-primary">Pages</h4>
            <p class="text-primary">100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
   
      
 
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>