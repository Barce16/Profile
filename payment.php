<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <b> <a class="back"    href="./profile.php" >Back </a></b>
    <img class="gcash" src="./assets/img/gcash-logo.png" height="60" width="30%">
        <h1>Confirm Your Payment</h1>
        <div class="first">
            <div class="owner">
                <h3>Gcash Number</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
            <div class="pin">
                <h3>Your Pin</h3>
                <div class="input-field">
                    <input type="password">
                </div>
            </div>
        </div>
        <br>
        <a class="Send" href="payment.php">Send Code</a>
        <div class="second">
            <div class="code">
                <h3>Code</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
        </div>
       
                <div class="cards">
                    <img src="./assets/img/gcash-logo.png">

                </div>
                <a class="confirm" href="profile.php">Confirm</a>
            </div>    
        
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script type="text/javascript">
        $(function($submit){
            Swal.fire({
        title: "Sending Code!",
        text: "waiting the process!",
        icon: "success"
            })
    });
        
     </script>
</body>
</html>