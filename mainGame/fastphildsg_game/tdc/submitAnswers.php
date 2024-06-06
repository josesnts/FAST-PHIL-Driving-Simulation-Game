<?php
session_start();

include "../databaseConnection/connect.php"; 
$score = 0;
$correct_answers = [];
$totalQuestions = 0;

// Fetch the correct answers from the database
$select_query = "SELECT id, answer FROM `tdc_questions`";
$result_query = mysqli_query($connect, $select_query);

if ($result_query->num_rows > 0) {
    while($row = $result_query->fetch_assoc()) {
        $totalQuestions++;
        $correct_answers[$row["id"]] = $row["answer"];
    }
}

// Compare submitted answers with correct answers
foreach ($_POST as $key => $value){
    if (strpos($key, 'question') === 0) {
        $question_id = str_replace('question', '', $key);
        if (isset($correct_answers[$question_id]) && $correct_answers[$question_id] == $value) {
            $score++;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../images/FAST-PHIL-LOGO.ico">
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

    <?php
             $passingRate = $totalQuestions * 0.75;
             $user_id=$_SESSION["id"];
              if($score > $passingRate)    {
                $insert_score = "UPDATE `fastphildsg_users` SET `tdcScore` = '$score', `status` = 'TDC_Complete' WHERE `id` = $user_id";
                $result = $connect->query($insert_score);
                ?>
                <div class=" d-flex align-items-center justify-content-center flex-column"
                 style = "background-image: linear-gradient(to bottom, #0066ff, #0854e7, #0943d0, #0632b9, #0021a3);
                          height: 100vh;"
                >
                <div class="text-light d-flex align-items-center justify-content-center flex-column">
                    <h4>
                        <b>
                    Congratulations on passing the Theoretical Driving Course! 
                        </b>
                    </h4>
                    <h1 class="bg-dark p-5 text-center border border-5 rounded border-warning mt-3" 
                    style="width: 800px;
                    font-size: 200px;"><?php echo $score; ?> / <?php echo $totalQuestions ?></h1>  
                    
                    <div class="row w-100 mt-3">
                        <div class="col-md-6">
                        <a href="../index.php" class="btn btn-warning w-100">
                            <b>
                            Continue <i class="fa-solid fa-caret-right"></i>
                            </b>
                        </a>
                        </div>
                        <div class="col-md-6">
                        <a href="index.php" class="btn btn-primary w-100"> 
                            <b>
                                Retry <i class="fa-solid fa-rotate-right"></i>
                            </b>
                        </a>

                        </div>
                    </div>
                        
                </div>

                </div>
                <?php
              } else{
                $insert_score = "UPDATE `fastphildsg_users` SET `tdcScore` = '$score' WHERE `id` = $user_id";
                $result = $connect->query($insert_score);
                ?>
                <div class=" d-flex align-items-center justify-content-center flex-column"
                 style = "background-image: linear-gradient(to bottom, #ff0000, #e70000, #d00001, #b90001, #a30000);
                          height: 100vh;"
                >
                 <div class="text-light d-flex align-items-center justify-content-center flex-column">
                    <h4>
                        <b>
                    Sorry you failed to pass Theoretical Driving Course! 
                        </b>
                    </h4>
                    <h1 class="bg-dark p-5 text-center border border-5 rounded border-warning mt-3" 
                    style="width: 800px;
                    font-size: 200px;"><?php echo $score; ?> / <?php echo $totalQuestions ?></h1>  
                    
                    <div class="row w-100 mt-3">
                        <div class="col-md-6">
                        <a href="../index.php" class="btn btn-warning w-100">
                            <b>
                            Continue <i class="fa-solid fa-caret-right"></i>
                            </b>
                        </a>
                        </div>
                        <div class="col-md-6">
                        <a href="index.php" class="btn btn-primary w-100"> 
                            <b>
                                Retry <i class="fa-solid fa-rotate-right"></i>
                            </b>
                        </a>

                        </div>
                    </div>
                    </div>     
                </div>
                <?php
              }   
                ?>



</body>
</html>