<?php 

include "../databaseConnection/connect.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `tdc_questions` WHERE `id`='$id'";

     $result = $connect->query($sql);

     if ($result == TRUE) {
        header('Location:viewQuestions.php');
    }else{

        echo "Error:" . $sql . "<br>" . $connect->error;

    }

} 

?>