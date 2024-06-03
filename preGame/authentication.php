<?php      

include "../databaseConnection/connect.php"; 
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $select_query="SELECT * FROM `fastphildsg_users` WHERE username = '$username'";
    $result_query=mysqli_query($connect,$select_query);

    while($row=mysqli_fetch_assoc($result_query)){
        $id=$row['id'];
        $username=$row['username'];
        $hashedpassword=$row['password'];
    }
    $verify = password_verify($password, $hashedpassword);

            // Print the result depending if they match
            if ($verify) {
                $select_query="SELECT * FROM `fastphildsg_users` WHERE id = '$id'";
                    $result_query=mysqli_query($connect,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){

                        $username=$row['username'];
                        $firstName=$row['firstName'];
                        $middleName=$row['middleName'];
                        $lastName=$row['lastName'];
                        $status=$row['status'];

                        session_start();
                        $_SESSION["id"]=$id;
                                    
                        date_default_timezone_set("Asia/Manila");
                        $loginTimestamp = date("Y-m-d H:i:s");

                        $login_information = "INSERT INTO `memberlogin` (`username`, `loginTimestamp`) VALUES ('$username', '$loginTimestamp')";
                        $login_result = $connect->query($login_information);
                        header("Location: ../mainGame/fastphildsg_game/index.php");
                
            } 
        }
            else {
                echo
                '<script> 
                    alert("Incorrect Credentials!");
                    window.location.href = "login.php";
                </script>';
            
        }
   

     
?>  