<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="signup-check.php" method="post">
        <h2>SIGN UP</h2>

        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Complate Name :<span class="text-danger">*</span></label>
        <?php if (isset($_GET['name'])) { ?>
        <input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $_GET['name']; ?>"><br>
        
        <?php }else{ ?>

        <input type="text" name="name" placeholder="Enter Full Name"><br>
        <?php }?>

        <label>Email :<span class="text-danger">*</span></label>
        <?php if (isset($_GET['uname'])) { ?>
        <input type="email" name="uname" placeholder="Ex.Employee@gmail.com" value="<?php echo $_GET['uname']; ?>"><br>
        <?php }else{ ?>
        <input type="email" name="uname" placeholder="Ex.Employee@gmail.com"><br>
        <?php }?>


        <label >Password :<span class="text-danger">*</span></label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Confirm Your Password :<span class="text-danger">*</span></label>
        <input type="password" name="re_password" placeholder="Comfirm Password"><br>

       

            <button type="submit">Sign Up</button>

            <a href="login.php" class="ca">Already have an account?</a>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
        $(function($submit) {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            })
        });
        </script>
</body>

</html>