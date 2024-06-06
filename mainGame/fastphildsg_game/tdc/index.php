<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../functions/header.php'; ?>
</head>

<style>
        body {
            position: relative;
        }
        #timer {
            font-size: 48px;
            color: #333;
            position: absolute;
            top: 10px;
            right: 10px;
            position: fixed;
        }
    </style>
<body class="overflow-x-hidden">

<div class="bg-image d-flex align-items-center justify-content-center flex-column"
                    style="
                        background-image: url('../images/displayBackground.svg');
                        width: 1560px;
                        background-repeat: inherit;
                        background-size: cover;
                    "
    >

        <?php include "../databaseConnection/connect.php"; ?>
        <div id="timer" class="text-light bg-dark border border-5 border-light p-3 m-3">30:00</div>
    <script>
        function startTimer(duration, display) {
            let timer = duration, minutes, seconds;
            let interval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(interval);
                    window.location.href = "../index.php"; // Change to your desired URL
                }
            }, 1000);
        }

        window.onload = function () {
            let fiveMinutes = 60 * 30, // 5 minutes
                display = document.querySelector('#timer');
            startTimer(fiveMinutes, display);
        };
    </script>

        <form action="submitAnswers.php" method="POST" class="p-3">
            <fieldset>
            <?php 
                $select_query="SELECT * FROM `tdc_questions` ORDER BY RAND() LIMIT 40";
                $result_query=mysqli_query($connect,$select_query);

                if ($result_query->num_rows > 0) {
                    while($row = $result_query->fetch_assoc()) {
                        if ( $row['imageQuestion'] != NULL){
                            echo "<div class='form-group'>";
                            echo "<div class='bg-dark text-light border border-2 rounded p-3 mt-3'>";
                                echo "<div class='d-flex align-items-center justify-content-center'>";
                                    echo "<img src='../../../fastphil_admin/tdc/imageQuestion/$row[imageQuestion]' class='card-img-top p-3 text-center' alt='...'' style='width: 200px'>";
                                echo "</div>";
                                    echo "<h5> <b>" . $row['question'] . "</b> </h5>";
                                 echo "<div class='form-check'>";
                                 echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option1']}'>{$row['option1']}<br>";
                                 echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option2']}'>{$row['option2']}<br>";     
                                 echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option3']}'>{$row['option3']}<br>";
                            echo "</div>";  
                            echo "</div>"; 
                        }

                        else{
                            echo "<div class='form-group'>";
                            echo "<div class='bg-dark text-light border border-2 rounded p-3 mt-3'>";
                                echo "<h5> <b>" . $row['question'] . "</b> </h5>";
                                echo "<div class='form-check'>";
                                    echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option1']}'>{$row['option1']}<br>";
                                    echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option2']}'>{$row['option2']}<br>";                                    
                                    echo "<input class='form-check-input' type='radio' name='question{$row['id']}' value='{$row['option3']}'>{$row['option3']}<br>";
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
<script>
    setTimeout(function () {
    header('Location: ../index.php')
}, 100);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>