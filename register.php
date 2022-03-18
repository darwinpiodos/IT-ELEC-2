<?php


include 'connect.php';




if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];

    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    
   
    
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $image=$_FILES['image']['name'];



    $sql="insert into crud (firstname,lastname,email,password, confirmpassword,image)
    values('$firstname','$lastname','$email','$password','$confirmpassword','$image')";


    $result=mysqli_query($conn, $sql);


    if($result){

        move_uploaded_file($_FILES['image']['tmp_name'],"$image");

        // echo'inserted';

        header('location:index.php');

    }
    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>


<div class="container my-5">

<form action="" method="POST" enctype="multipart/form-data" class="my-5">

    
<h3 class="text-center">REGISTER ACCOUNT</h3>


<input type="text" class="form-control mb-3" name="firstname" autocomplete="off"  placeholder="enter firstname"required>

<input type="text" class="form-control mb-3" name="lastname" autocomplete="off"  placeholder="enter lastname"required>

<input type="email" class="form-control mb-3" name="email" autocomplete="off"  placeholder="enter email"required>

<input type="password" class="form-control mb-3" name="password"  placeholder="enter password" autocomplete="off"required>

<input type="password" class="form-control mb-3" name="confirmpassword"  placeholder="confirm password" autocomplete="off"required>



<input type="file" accept="image/jpg, image/jpeg, image/png" class="form-control mb-3" name="image">




<button type="submit" class="btn btn-primary mt-3 login" name="submit">Register </button>
<div class="center">
<p>already have an account? <a href="login.php" class="text-decoration-none text-danger">login now</a>
</div>
</form>



</div>
    
</body>
</html>