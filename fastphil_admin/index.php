<?php include "databaseConnection/connect.php";?> 

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

<body class="overflow-x-hidden">

<div class="row">
                 <div class="col-2 bg-dark text-center d-flex align-items-center flex-column ps-4">
                 <img src="images/FAST-PHIL-LOGO.png" alt="" class="w-50 ">
                 <!-- Dashbpard -->
                 <a href="index.php" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-house"></i>
                        Dashboard
                     </b>
                 </a>

                 <hr>
                <!-- Game -->
                <p class="text-light">
                    <b>
                        Theoretical Driving Course
                    </b>
                </p>
                 <!-- TDC -->
                 <a href="tdc/addQuestions.php" class="btn btn-danger text-light w-100">
                     <b>
                     <i class="fa-solid fa-plus"></i>
                         Add Questions
                     </b>
                 </a>

                 <a href="tdc/viewQuestions.php" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-eye"></i>
                         View Questions
                     </b>
                 </a>

                 <hr>
                 <!-- Users -->
                 <p class="text-light">
                    <b>
                        Manage Users
                    </b>
                </p>
                 <a href="" class="btn btn-danger text-light w-100">
                     <b>
                     <i class="fa-solid fa-chart-simple"></i>
                        Players' Progress
                     </b>
                 </a>

                 <a href="" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-user"></i>
                         Manage Players
                     </b>
                 </a>

                 <a href="" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-user-tie"></i>
                         Manage Admins
                     </b>
                 </a>

                 <hr>
                <!-- Website -->
                <p class="text-light">
                    <b>
                        Webpage Controls
                    </b>
                </p>
                 <!-- TDC -->
                 <a href="../tdc/viewQuestions.php" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-eye"></i>
                         Support Update
                     </b>
                 </a>

                 <a href="../tdc/viewQuestions.php" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-eye"></i>
                         News
                     </b>
                 </a>

                 <a href="../tdc/viewQuestions.php" class="btn btn-danger text-light w-100 mt-2">
                     <b>
                     <i class="fa-solid fa-eye"></i>
                         Chatbot
                     </b>
                 </a>

                 <!-- Logout Function -->
                 <a href="" class="btn btn-danger text-light w-100 mt-5">
                     <b>
                     <i class="fa fa-sign-out"></i>
                         Logout
                     </b>
                 </a>
     
                 <br>
     
             </div>

    

    <div class="bg-image col-10 d-flex flex-column p-3"
    style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/bgImage.jpg');
                    background-repeat: no-repeat;
                    background-size: 100% 100%;
                ">
    <h3 class="text-center text-light">
        <b>
        <i class="fa-solid fa-car"></i>
        F.A.S.T. P.H.I.L. D.S.G. Admin Dashboard
        </b>
    </h3>
        <div class="row mt-4">

            <div class="col">
                <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title">Total Players</h5>
                    <h3 class="card-text">
                        <b>
                        <?php      
                            include "databaseConnection/connect.php"; 

                            $select_query="SELECT COUNT(*) AS totalPlayers FROM fastphildsg_users" ;
                            $result_query=$connect->query($select_query);
                            $row = mysqli_fetch_assoc($result_query);
                            $totalPlayers = $row['totalPlayers'];

                            echo $totalPlayers

                        ?>
                        </b>
                    </h3>
                    <a href="#" class="btn btn-primary">View All Players ></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title">Completed Players</h5>
                    <h3 class="card-text">
                        <b>
                        <?php      
                            include "databaseConnection/connect.php"; 

                            $select_query="SELECT COUNT(*) AS totalPlayers FROM fastphildsg_users WHERE status = 'Game_Complete'" ;
                            $result_query=$connect->query($select_query);
                            $row = mysqli_fetch_assoc($result_query);
                            $totalPlayers = $row['totalPlayers'];

                            echo $totalPlayers

                        ?>
                        </b>
                    </h3>
                    <a href="#" class="btn btn-primary">View Players' Status ></a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title">Total TDC Questions</h5>
                    <h3 class="card-text">
                        <b>
                        <?php      
                            include "databaseConnection/connect.php"; 

                            $select_query="SELECT COUNT(*) AS totalQuestions FROM tdc_questions" ;
                            $result_query=$connect->query($select_query);
                            $row = mysqli_fetch_assoc($result_query);
                            $totalQuestions = $row['totalQuestions'];

                            echo $totalQuestions

                        ?>
                        </b>
                    </h3>
                    <a href="#" class="btn btn-primary">View TDC Questions ></a>
                </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>