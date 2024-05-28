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
      <!-- Navigation Bar -->

        <!-- NavBar Brand -->
        <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
                        
            <a class="navbar-brand text-light fw-bold" href="index.php">
                <img src="images/FAST-PHIL-LOGO.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center animate__animated animate__flip">
            </a>
            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="index.php">GAME INFO</a>
                </li>
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="index.php">NEWS</a>
                </li>
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="index.php">SUPPORT</a>
                </li>
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="index.php">HELP</a>
                </li>\                <li class="nav-item">
                <a class="nav-link active text-light bg-danger rounded-pill px-4 animate__animated animate__bounceIn" aria-current="page" href="preGame/register.php">
                    <b>
                        REGISTER
                    </b>
                </a>
                </li>
            </ul>
            </div>

        </div>
        </nav>

        <div class="bg-image d-flex align-items-center justify-content-center flex-column"
                style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/bgImage.jpg');
                    height: 89.6vh;
                    background-repeat: no-repeat;
                    background-size: cover;
                "
        >
                <img src="images/FAST-PHIL-LOGO.png" alt="" class="" style="width: 450px">
                <a href="preGame/login.php" class="d-flex align-items-center justify-content-center"> 
                   <img src="images/playNow.png" alt="" class="" style="width: 300px">
                </a>
          
        </div>
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>