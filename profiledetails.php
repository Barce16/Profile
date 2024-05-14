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

	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>

<div class="container-fluid mt-3 ">
  <div class="toast show">
    <div class="toast-header">
      <strong class="me-auto"><b class="text-dark">Profile</b></strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <h2> <?php echo $_SESSION['name']; ?></h2>
      <br>
      <button type="button" onclick="document.location='" data-bs-toggle="collapse" data-bs-target="#mynavbar">View Profile
                
                </button>
                <br>
                <hr>
    <button type="button" onclick="document.location='reserve.php'" data-bs-toggle="collapse" data-bs-target="#mynavbar">Reserve Now
                
                </button>
                <hr>
     <h4> <a href="logout.php">Logout</a></h4>
    </div>
  </div>
  
</div>
<div class="container mt-3">
<h2>Your Profile : <?php echo $_SESSION['name']; ?></h2>
  <p>You can view your profile deatails:</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Complete Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>Birthday</th>
        <th>Birth Place</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark Baliguat Barce</td>
        <td>Gwapomark298@gmail.com</td>
        <td>20</td>
        <td>Male</td>
        <td>09751711921</td>
        <td>2024-05-11</td>
        <td>Sampatulog, Alubijid Mis. Or.</td>
        <td>Single</td>

        
      </tr>
    
    </tbody>
  </table>
  
</div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>