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






            <div class="container my-5">

                <p class="text-center mt-5 display-4">BLOG CONTENTS</p>

                                    <table class="table">
                        <thead>

                            <tr>
                            <th scope="col">Author</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            
                           
                           
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
                            <th scope="row"><p class="btn btn-danger my-2 mx-2"> '.$firstname.' '.$lastname.'</p>'.$date.'</th>

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