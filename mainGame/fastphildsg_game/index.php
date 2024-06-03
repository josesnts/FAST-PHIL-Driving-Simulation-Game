<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/FAST-PHIL-LOGO.ico">
    <!-- CSS Link  -->
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Animate CSS Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>  
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQuery Script -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Website Title -->
    <title>F.A.S.T. P.H.I.L. Driving Simulation Game</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
    body {
        font-family: 'Poppins';
    }
    </style>
    
</head>
<body class="overflow-hidden">
    <div class="bg-image d-flex align-items-center justify-content-center flex-column"
                    style="
                        background-image: url('images/displayBackground.svg');
                        height: 100vh;
                        width: 1560px;
                        background-repeat: no-repeat;
                        background-size: cover;
                    "
    >
                 <?php      
                    include "databaseConnection/connect.php"; 
                    $id=$_SESSION["id"];
                    $select_query="SELECT *
                    FROM `fastphildsg_users`
                    WHERE id=$id" ;
                    $result_query=$connect->query($select_query);
                    if ($result_query->num_rows > 0) {

                        while ($row = $result_query->fetch_assoc()) {
                        $status = $row['status'];

                ?>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center flex-column">
                <img src="images/FAST-PHIL-LOGO.png" alt="" class="w-75">
                <h3 class="text-light">
                    Welcome, 
                    <b>
                    <?php echo $row['firstName']?><?php echo " "?><?php echo $row['lastName']?>
                    </b>
                </h3>

                <h5>
                    <a href="../../preGame/logout.php" class="text-light" style="text-decoration: none;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </h5>
            </div>
            <div class="col-md-6 d-flex flex-column">
                <a href="tdc/index.php">
                    <img src="images/theoreticalButton.png" alt="" class="mt-5" style="width: 75%">
                </a>
                
                <?php
                    if ($status=='TDC_Complete'){
                    ?>
                    <a href="tdc/index.php">
                        <img src="images/practicalButton.png" alt="" class="mt-5" style="width: 75%">
                    </a>
                    <?php
                    }
                    elseif ($status=='Game_Complete'){
                    ?>
                    <a href="tdc/index.php">
                        <img src="images/practicalButton.png" alt="" class="mt-5" style="width: 75%">
                    </a>
                    <?php
                    }
                    else{
                    ?>
                    <img src="images/practicalButton_Locked.png" alt="" class="mt-5" style="width: 75%">
                    <?php
                    }
                    ?>
                
                    <?php
                    if ($status=='PDC_Complete'){
                    ?>
                    <a href="">
                        <img src="images/parkingButton.png" alt="" class="mt-5" style="width: 75%">
                    </a>
                    <?php
                    }
                    elseif ($status=='Game_Complete'){
                    ?>
                    <a href="">
                        <img src="images/parkingButton.png" alt="" class="mt-5" style="width: 75%">
                    </a>
                    <?php
                    }
                    else{
                    ?>
                    <img src="images/parkingButton_Locked.png" alt="" class="mt-5" style="width: 75%">
                    <?php
                    }
                    ?>

            </div>
        </div>
    </div>
    <?php
                        }
                    }
    ?>
</body>
</html>