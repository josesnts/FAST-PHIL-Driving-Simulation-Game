<?php
session_start();
$id=$_SESSION["id"];
include "../databaseConnection/connect.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.A.S.T. P.H.I.L. D.S.G. | Course Completed</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy@1.1.1/dist/webcam-easy.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    @font-face {
  font-family: theBoldFont;
  src: url(theBoldFont.otf);
}

body {
  font-family: theBoldFont;
}
</style>
<body class="overflow-hidden flex flex-col items-center justify-center bg-black">
<?php      

$select_query="SELECT * FROM `fastphildsg_users` WHERE id = '$id'" ;
$result_query=$connect->query($select_query);
if ($result_query->num_rows > 0) {

    while ($row = $result_query->fetch_assoc()) {

?>
<div class="flex flex-col absolute z-50 ml-48 mb-32 text-4xl ">
    <div class="inline-flex mb-2">
    <p>ID: </p><p class="ml-4"><?php echo $row['id']?></p>
    </div>
    <div class="inline-flex mb-2">
    <p>FIRST NAME:</p><p class="ml-4"><?php echo $row['firstName']?></p>
    </div>
    <div class="inline-flex mb-2">
    <p>MIDDLE NAME:</p><p class="ml-4"><?php echo $row['middleName']?></p>
    </div>
    <div class="inline-flex mb-2">
    <p>LAST NAME:</p><p class="ml-4"><?php echo $row['lastName']?></p>
    </div>
    <div class="inline-flex mb-2">
    <p>DATE: </p>
    <p id="year" class="ml-4"></p>
    <p>-</p>
    <p id="month"></p>
    <p>-</p>
    <p id="date"></p>
    <?php  }
        }
    ?>
    </div>
</div>


    <img src="../images/courseCompleted.png" alt="" style="width: 1320px;" class="relative z-40">
    <div class="absolute">
    <video id="webCam" autoplay playsinlne width="800" height="600"></video>
    <canvas id="canvas"></canvas>
    </div>
    

<script>
    
        const d = new Date();
        d.getFullYear();
        document.getElementById("year").innerHTML = d.getFullYear();
        d.getMonth();
        document.getElementById("month").innerHTML = d.getMonth() + 1;
        d.getDay();
        document.getElementById("date").innerHTML = d.getDate();
        const webCamElement = document.getElementById("webCam");
        const canvasElement = document.getElementById("canvas");
        const webCam = new Webcam(webCamElement, "user", canvasElement);
        webCam.start();


</script>
</body>
</html>