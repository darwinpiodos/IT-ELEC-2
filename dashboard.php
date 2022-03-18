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
                <a class="navbar-brand me-5" href="index.php">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Go to Frontpage</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php?logout='.$id.'">Logout</a>
                    </li>
                
                </ul>
                </div>
            </div>
            </nav>




            <div class="container my-5 text-center">


            <div class="center-container">
                <button class="btn btn-success width mb-2"><a href="#" class="text-decoration-none text-light ">New Blog</a></button>
            </div>


        <div class="container">         




        </div>

            <div class="center-container">
                <button class="btn btn-secondary width"><a href="#" class="text-decoration-none text-light">Bulk Delete</a></button>
            </div>



            <table class="table">
                        <thead>

                            <tr>
                            <th scope="col">Checkbox</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                           
                           
                            </tr>
                        </thead>
                        <tbody>



                        <?php

                    $sql="select *from crud";

                    $result=mysqli_query($conn, $sql);

                    if($result){

                        while($row=mysqli_fetch_assoc($result)){

                            $id=$row['id'];
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];
                        
                            $image=$row['image'];
                            $date=$row['date'];
                        
                        
                        
                            echo'
                            <tr>


                            <th scope="row">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"></label>
                            
                            </th>

                            <td>'.$date.'</td>
                           
                            <td>

                            <button class="btn btn-primary me-2"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-light">UPDATE</a></button>
                            
                            <button class="btn btn-danger me-2"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">DELETE</a></button>
                            </td>

                     


                            </tr>
                            ';
                        }
                    }

                    ?>


            <!-- <div class="center-container">
                
            </div> -->

                          
                        </tbody>
                        </table>




            </div>




</div>



    
</body>
</html>