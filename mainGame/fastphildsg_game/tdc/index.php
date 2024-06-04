<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../functions/header.php'; ?>
</head>

<body class="overflow-x-hidden">

    <div class=" d-flex align-items-center justify-content-center flex-column"
    >

        <?php include "../databaseConnection/connect.php"; ?>

        <form action="submitAnswers.php" method="POST" class="p-3">
            <fieldset>
            <?php 
                $select_query="SELECT * FROM `tdc_questions` ORDER BY RAND()";
                $result_query=mysqli_query($connect,$select_query);

                if ($result_query->num_rows > 0) {
                    while($row = $result_query->fetch_assoc()) {
                        if ( $row['imageQuestion'] != NULL){
                            echo "<div class='form-group'>";
                            echo "<div class='border border-2 rounded p-3 mt-3'>";
                                echo "<div class='d-flex align-items-center justify-content-center'>";
                                    echo "<img src='../../../fastphil_admin/tdc/imageQuestion/$row[imageQuestion]' class='card-img-top p-3 text-center' alt='...'' style='width: 200px'>";
                                echo "</div>";
                                    echo "<h5> <b>" . $row['question'] . "</b> </h5>";
                                 echo "<div class='form-check'>";
                                        echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='1'> " . $row['option1'] . "<br>";
                                        echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='2'> " . $row['option2'] . "<br>";
                                        echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='3'> " . $row['option3'] . "<br>";    
                                echo "</div>";
                            echo "</div>";  
                            echo "</div>"; 
                        }

                        else{
                            echo "<div class='form-group'>";
                            echo "<div class='border border-2 rounded p-3 mt-3'>";
                                echo "<h5> <b>" . $row['question'] . "</b> </h5>";
                                echo "<div class='form-check'>";
                                    echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='1'> " . $row['option1'] . "<br>";
                                    echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='2'> " . $row['option2'] . "<br>";
                                    echo "<input class='form-check-input' type='radio' name='question" . $row['id'] . "' value='3'> " . $row['option3'] . "<br>";    
                                echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                        
                    }
                }
            ?>
                    <div class="form-group">
                        <button type="submit" id="btn" name="submit" value="submit" class="btn btn-primary my-3 w-100">Submit Answers</button>
                    </div>
            </fieldset>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>