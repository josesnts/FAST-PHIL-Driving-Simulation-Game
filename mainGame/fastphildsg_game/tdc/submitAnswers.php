<?php
session_start();

include "../databaseConnection/connect.php"; 
$score = 0;
$correct_answer = [];
$totalQuestions = 0;

$select_query="SELECT id, answer FROM `tdc_questions`";
$result_query=mysqli_query($connect,$select_query);

if ($result_query->num_rows > 0) {
    while($row = $result_query->fetch_assoc()) {
        $totalQuestions++;
        echo $correct_answer[$row["id"]]=$row["answer"];
        echo "<br>";
    }
}

foreach ($_POST as $question_id => $selected_option){
    if(isset($correct_answer[$question_id]) && $correct_answer[$question_id]===$selected_option){
        $score++;
    }

}
echo $score;
echo "/";
echo $totalQuestions;

?>

