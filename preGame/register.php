<?php 

include "../databaseConnection/connect.php";

  if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];

    $middleName = $_POST['middleName'];

    $lastName = $_POST['lastName'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $confirmPassword = $_POST['confirmPassword'];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    date_default_timezone_set("Asia/Manila");
    $dateRegistered = date("Y-m-d H:i:s");

    // TRY: PASSWORD CONFIRMATION: SUCCESS
    if ($_POST["password"] === $_POST["confirmPassword"]) {
        $user_information_insert = "INSERT INTO `fastphildsg_users` (`firstName`, `middleName`, `lastName`, `username`, `password`, `dateCreated`, `dateUpdated`) VALUES 
        ('$firstName','$middleName','$lastName', '$username', '$hashPassword', '$dateRegistered', '$dateRegistered')";
        $result = $connect->query($user_information_insert);
                
                // TRY: USER INFORMATION INSERTION: SUCCESS
                if ($result === TRUE) {
                    echo
                    '<script> 
                        alert("You are now Registered Successfully!");
                        window.location.href = "../index.php";
                    </script>';
                  } 
                
                // CATCH: USER INFORMATION INSERTION: FAILED
                else {
                    echo "Error: " . $result . "<br>" . $connect->error;
                  }
                  
                  $connect->close();
                }
        // CATCH: PASSWORD CONFIRMATION: FAILED
        else {
            echo '<script>alert("Password does not match, please try again.")</script>';
         }           
  }
            
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../images/FAST-PHIL-LOGO.ico">
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
    <?php include '../functions/navbar.php'; ?>
   
    <div class="bg-image d-flex align-items-center justify-content-center flex-column"
                style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bgImage.jpg');
                    height: 89.2vh;
                    background-repeat: no-repeat;
                    background-size: cover;
                "
        >
            <div class="card w-50">
                <div class="card-header bg-dark text-light">
                    <!-- Page Title -->
                    <h5 class="text-center">
                        <i class="fa-solid fa-user">  </i> 
                        <b>
                            <i>
                               Player Registration Form
                            </i>
                        </b>
                    </h5>
                </div>
                <!-- Registration Form -->
                <form action="" method="POST" class="p-3">
                        <fieldset>
                            <!-- First Name Form -->
                                <div class="form-group">
                                    <label for="firstName" class="mt-1">First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="mt-1 form-control" placeholder="Enter your First Name here...">
                                </div>
                            
                            <!-- Middle Name Form -->
                                <div class="form-group">
                                    <label for="middleName" class="mt-1">Middle Name</label>
                                    <input type="text" id="middleName" name="middleName" class="mt-1 form-control" placeholder="Enter your Middle Name here...">
                                </div>

                            <!-- Last Name Form -->
                                <div class="form-group">
                                    <label for="lastName" class="mt-1">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="mt-1 form-control" placeholder="Enter your Last Name here...">
                                </div>

                            <!-- Username Form -->
                                <div class="form-group">
                                    <label for="username" class="mt-1">Username</label>
                                    <input type="text" id="username" name="username" class="mt-1 form-control" placeholder="Set your Username...">
                                </div>

                            <!-- Password Form -->
                                <div class="form-group">
                                    <label for="password" class="mt-1">Password</label>
                                    <input type="password" id="password" name="password" class="mt-1 form-control" placeholder="Create a password...">
                                </div>

                            <!-- Confirm Password Form -->
                                <div class="form-group">
                                    <label for="confirmPassword" class="mt-1">Confirm Password</label>
                                    <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 form-control" placeholder="Confirm your entered password...">
                                </div>

                            <!--Submit Button-->
                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit" class="btn btn-danger w-100 mt-3">Submit</button>    
                                </div>            
                        </fieldset>                    
                </form>
                </div>
                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>