<?php include "../databaseConnection/connect.php";?> 

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
            
            <table class="table table-bordered  text-center align-middle w-75 mt-3">

            <thead class="table-dark justify-content-center align-middle text-center p-2">

                <tr>

                <th>Question</th>

                <th>Image</th>

                <th>Option 1</th>

                <th>Option 2</th>

                <th>Option 3</th>

                <th>Correct Answer</th>

                <th>Date Created</th>

                <th>Date Updated</th>

                <th>Actions</th>

            </tr>

            </thead>

            <tbody class="text-dark"> 

            </tr>
                <?php      
                include "../databaseConnection/connect.php"; 

                    $select_query="SELECT * FROM tdc_questions" ;
                    $result_query=$connect->query($select_query);
                    if ($result_query->num_rows > 0) {

                        while ($row = $result_query->fetch_assoc()) {

                ?>

                <td><?php echo $row['question']?></td>

                <td><img src="imageQuestion/<?php echo $row['imageQuestion']?>" alt="" style="width: 100px"></td>

                <td><?php echo $row['option1']?></td>

                <td><?php echo $row['option2']?></td>

                <td><?php echo $row['option3']?></td>

                <td>
                    <b>
                    <?php echo $row['answer']?>
                    </b>
                </td>

                <td><?php echo $row['createdAt']?></td>

                <td><?php echo $row['updatedAt']?></td>

                <td>
                <a class="btn btn-primary w-100 mt-2" href="editQuestion.php?id=<?php echo $row['id']; ?>">Edit
                    <a class="btn btn-danger w-100 mt-2" href="deleteQuestion.php?id=<?php echo $row['id']; ?>">Delete
                </td>

                </tr>  
                
                <?php  }
                }
                ?>
        </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>