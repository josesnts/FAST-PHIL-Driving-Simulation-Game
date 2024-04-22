<?php 

include "../databaseConnection/connect.php";

  if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];

    $middleName = $_POST['middleName'];

    $lastName = $_POST['lastName'];

        $user_information_insert = "INSERT INTO `fastphildsg_users` (`firstName`, `middleName`, `lastName`) VALUES ('$firstName','$middleName','$lastName')";
        $result = $connect->query($user_information_insert);
                
                // TRY: USER INFORMATION INSERTION: SUCCESS
                if ($result === TRUE) {
                    $select_query="SELECT * FROM `fastphildsg_users` WHERE firstName = '$firstName' AND middleName = '$middleName' AND lastName = '$lastName'";
                    $result_query=mysqli_query($connect,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){

                        $id=$row['id'];

                        session_start();
                        $_SESSION["id"]=$id;
                    }
                    echo 
                    '<script> 
                        alert("Member now Registered Successfully!");
                        window.location.href = "../mainGame/index.html";
                    </script>';
                  } else {
                    echo "Error: " . $result . "<br>" . $connect->error;
                  }
                  
                  $connect->close();
                }
            
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.A.S.T. P.H.I.L. Driving Simulation Game | Registration</title>
    <!-- Website Icon -->
    <link rel = "icon" href = "" type = "image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FAB Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-fuchsia-500 to-cyan-500">
   
        <div class="row">
            <div class="col">
                    <img src="../images/userAuthImage.jpg" alt="" class="bg-cover">
            </div>

            <div class="col bg-white">
                <div class="flex flex-col items-center justify-center">
                <!-- Registration Form -->
                <form action="" method="POST" class="w-80">
                        <fieldset>
                            <!-- First Name Form -->
                                <div class="form-group">
                                    <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            
                            <!-- Middle Name Form -->
                                <div class="form-group">
                                    <label for="middleName" class="block mb-2 text-sm font-medium text-gray-900">Middle Name</label>
                                    <input type="text" id="middleName" name="middleName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            <!-- Last Name Form -->
                                <div class="form-group">
                                    <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            <!--Submit Button-->
                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit" class=" text-white bg-blue-700 mt-5 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>    
                                </div>            
                        </fieldset>                    
                </form>
                </div>

            </div>
                        
    </div>
    



</body>
</html>