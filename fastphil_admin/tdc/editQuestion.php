<?php 

include "../databaseConnection/connect.php";


if (isset($_GET['id'])) {

                    $id = $_GET['id']; 
                
                    $sql = "SELECT * FROM `tdc_questions` WHERE `id`='$id'";
                
                    $result = $connect->query($sql); 
                
                    if ($result->num_rows > 0) {        
                
                        while ($row = $result->fetch_assoc()) {
                            $id= $row['id'];
                
                            $question = $row['question'];

                            $imageQuestion = $row['imageQuestion'];
                
                            $option1 = $row['option1'];
                
                            $option2 = $row['option2'];
                
                            $option3  = $row['option3'];
                
                            $answer  = $row['answer'];
                
                        } 


    
  if (isset($_POST['update'])) {

    $question = $_POST['question'];

    $option1 = $_POST['option1'];

    $option2 = $_POST['option2'];

    $option3 = $_POST['option3'];

    $answer = $_POST['answer'];

    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d H:i:s");

    $imageQuestion = $_FILES["imageQuestion"]["name"];
    $tempnameImage = $_FILES["imageQuestion"]["tmp_name"];
    $folderImage = "imageQuestion/" . $imageQuestion;

        $updateQuestion = "UPDATE `tdc_questions` SET
        `question`= '$question', `option1` = '$option1', `imageQuestion` = '$imageQuestion',
        `option2` = '$option2', `option3` = '$option3', `answer` = '$answer', `updatedAt` = '$date' 
        WHERE `id` = '$id'";
        $result = $connect->query($updateQuestion);
                
        if ($result === TRUE) {
            if ($result === TRUE) {
                if (move_uploaded_file($tempnameImage, $folderImage)) {
                echo
                '<script> 
                    alert("Question Update Successfully!");
                    window.location.href = "viewQuestions.php";
                </script>';
                }
                else {
                    echo
                    '<script> 
                        alert("Question Update Failed!");
                        window.location.href = "viewQuestions.php";
                    </script>'; 
                }
              } 
          } 
                
                else {
                    echo "Error: " . $result . "<br>" . $connect->error;
                  }
                  
                  $connect->close();
                }
                
            
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../functions/header.php'; ?>
</head>
<body class="overflow-x-hidden">
<?php include '../functions/sidebar.php'; ?>
    <div class="bg-image col-10 d-flex align-items-center justify-content-center flex-column"
                style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../images/bgImage.jpg');
                    background-repeat: no-repeat;
                    background-size: 100% 100%;
                ">
            <div class="card w-50">
                <div class="card-header bg-dark text-light">
                    <!-- Page Title -->
                    <h5 class="text-center">
                    <i class="fa-solid fa-pen-to-square"></i>
                        <b>
                            <i>
                               Edit Theoretical Driving Course Question
                            </i>
                        </b>
                    </h5>
                </div>
                <!-- Registration Form -->
                <form action="" method="POST" enctype="multipart/form-data" class="p-3">
                        <fieldset>
                            <!-- Question Form -->
                                <div class="form-group">
                                    <label for="question" class="mt-1">Question</label>
                                    <input type="text" id="question" name="question" class="mt-1 form-control" value="<?php echo $question?>">
                                </div>

                            <!-- Image Form -->
                            
                                <div class="form-group">
                                    <label for="imageQuestion" class="mt-3">Upload Image for Question <i>[ Need to re-upload image when updating ]</i></label>
                                    <br>
                                    <div class="d-flex justify-content-center">
                                    <img src="imageQuestion/<?php echo $imageQuestion?>" alt="" class="p-2" style="width: 100px">

                                    </div>
                                    <input type="file" name="imageQuestion" class="form-control" value="<?php echo $imageQuestion?>">
                                </div>
                                

                            <!-- Option 1 Form -->
                                <div class="form-group">
                                    <label for="option1" class="mt-1">Option 1</label>
                                    <input type="text" id="option1" name="option1" class="mt-1 form-control" value="<?php echo $option1?>">
                                </div>

                            <!-- Option 2 Form -->
                                <div class="form-group">
                                    <label for="option2" class="mt-1">Option 2</label>
                                    <input type="text" id="option2" name="option2" class="mt-1 form-control" value="<?php echo $option2?>">
                                </div>

                            <!-- Option 3 Form -->
                                <div class="form-group">
                                    <label for="option3" class="mt-1">Option 3</label>
                                    <input type="text" id="option3" name="option3" class="mt-1 form-control" value="<?php echo $option3?>"">
                                </div>

                            <!-- Answer Form -->
                                <div class="form-group">
                                    <label for="answer" class="mt-1">Answer</label>
                                    <input type="answer" id="answer" name="answer" class="mt-1 form-control" value="<?php echo $answer?>">
                                </div>

                            <!--Submit Button-->
                                <div class="form-group">
                                    <button type="submit" name="update" class="btn btn-danger w-100 mt-3">Update</button>    
                                </div>            
                        </fieldset>                    
                </form>
            </div>
    </div>

    <?php
                    }
                }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>