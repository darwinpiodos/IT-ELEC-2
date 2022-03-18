<?php


include 'connect.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Screen</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">


</head>
<body>

<div class="mb-5">



            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="index.php">Darwin Piodos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active ms-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                    </li>
                
                </ul>
                </div>
            </div>
            </nav>




            <div class="container my-5">

                <p class="text-center mt-5 display-5">List of Blogs</p>

                                    <table class="table">
                        <thead>

                            <tr>
                            <th scope="col">Title(Date)</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date</th>
                           
                           
                            </tr>
                        </thead>
                        <tbody>



                        <?php

                    $sql="select *from crud";

                    $result=mysqli_query($conn, $sql);

                    if($result){

                        while($row=mysqli_fetch_assoc($result)){

                            
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];
                        
                            $image=$row['image'];
                            $date=$row['date'];
                        
                        
                        
                            echo'
                            <tr>
                            <th scope="row"><p class="btn btn-primary my-2 mx-2">  <a href="content.php" class="text-decoration-none text-light">Click this Title</a></p>'.$date.'</th>

                            <td>
                            <div class="container mx-4">
                            <b>
                            '.$firstname.''.$lastname.' <br>
                            </b>
                           <img src="'.$image.'" width="80px" style="border-radius:50%;">
                                
                            </div></td>
                            <td>'.$date.'</td>
                           
                            </tr>
                            ';
                        }
                    }

                    ?>

                          
                        </tbody>
                        </table>
            </div>




</div>



    
</body>
</html>