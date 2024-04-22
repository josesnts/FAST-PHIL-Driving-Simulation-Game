<!DOCTYPE html>
<html lang="en">
<head>
<?php include "functions/header.php"?>
</head>
<body class="overflow-hidden">
      <!-- Navigation Bar -->

            
        <?php include "functions/navbar.php"?>

        <div class="bg-image"
                style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/bgImage.jpg');
                    height: 100vh;
                    background-repeat: no-repeat;
                    background-size: cover;
                "
        >
            <div class="d-flex align-items-center justify-content-center flex-column">
                <img src="images/FAST-PHIL-LOGO.png" alt="" class="" style="width: 35%">
                <a href="preGame/userAuth.php" class="d-flex align-items-center justify-content-center"> 
                   <img src="images/playNow.png" alt="" class="w-25">
                </a>
            </div>
        </div>
</body>
</html>