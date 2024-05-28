<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../functions/header.php'; ?>
</head>

<body class="overflow-hidden">
    <?php include '../functions/navbar.php'; ?>
   
    <div class="bg-image d-flex align-items-center justify-content-center flex-column"
                style="
                    background-image:   linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bgImage.jpg');
                    height: 89.2vh;
                    background-repeat: no-repeat;
                    background-size: cover;
                "
        >
            <div class="card w-50">
                <div class="card-header bg-dark text-light">
                    <!-- Page Title -->
                    <h5 class="text-center">
                        <i class="fa-solid fa-user">  </i> 
                        <b>
                            <i>
                               Player Login Form
                            </i>
                        </b>
                    </h5>
                </div>
                <!-- Login Form -->
                <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST" class="p-3">
                                <fieldset>
                            <!-- Username Form -->
                            <p class="my-2">Username</p>
                            <div class="input-group w-90 mb-2">
                                <span class="input-group-text bg-danger" id="basic-addon1">
                                <i class="fa-solid fa-user text-light"></i>
                                </span>
                                <input type="username" class="form-control" name="username" placeholder="Enter username"
                                aria-label="Username" aria-describedby="basic-addon1"></label>
                            </div>

                            <!-- Password Form -->
                            <p class="my-2">Password</p>
                            <div class="input-group w-90 mb-2">
                                <span class="input-group-text bg-danger" id="basic-addon1">
                                    <i class="fa-solid fa-key text-light"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Enter password"
                                aria-label="Password" aria-describedby="basic-addon1"></label>
                            </div>



                            <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" id="btn" name="submit" value="submit" class="btn btn-danger my-3 w-100">Login</button>
                                </div>

                                </fieldset>
                            </form>

        <!-- Form validation -->
        <script>  
            function validation()  
            {  
                var username=document.f1.username.value;  
                var password=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Username and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(username.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }   
                    if (password.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                    }  
                }                             
            }  
        </script> 
                </div>
                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>