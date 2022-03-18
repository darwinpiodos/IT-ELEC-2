<?php
include 'connect.php';

if(isset($_POST['submit'])){
    


    $email=$_POST['email'];
    $password=$_POST['password']; 


    $sql="select *from crud where email='$email' && password='$password'";




    $result=mysqli_query($conn,$sql);


    if(mysqli_num_rows($result)===1){

        $row=mysqli_fetch_assoc($result);

        if($row['email']=== $email && $row['password']===$password){

            header('location:dashboard.php');

            $id=$row['id'];


            // echo'';
        }
        else{

            //  echo $message='Sayop Lods!';
        }
    }




}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">


</head>
<body>

<div class="container my-5">


<form action="" method="POST" enctype="multipart/form-data" class="my-5">

    
<h3 class="text-center">LOGIN</h3>







<input type="email" class="form-control mb-3" name="email" autocomplete="off"  placeholder="enter email"required>


<input type="password" class="form-control mb-3" name="password"  placeholder="enter password" autocomplete="off"required>


<?php

                    $sql="select *from crud";

                    $result=mysqli_query($conn, $sql);

                    if($result){

                        $row=mysqli_fetch_assoc($result);

                            $id=$row['id'];
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];
                        
                            $image=$row['image'];
                            $date=$row['date'];
                        
                        
                        
                            echo'
                            <td>

                           
                            <button class="btn btn-primary me-2"><a href="dashboard.php?dashboardid='.$id.'" class="text-decoration-none text-light">Login</a></button>
                            </td>

                     


                            </tr>
                            ';
                        
                    }

                    ?> 


  
                            <!-- <button class="btn btn-primary me-2"><a href="dashboard.php?dashboardid='.$id.'" class="text-decoration-none text-light">Login</a></button>
                            </td> -->


<p>dont'have an account? <a href="register.php" class="text-decoration-none text-danger">register here</a>

</form>



</div>
    
</body>
</html>