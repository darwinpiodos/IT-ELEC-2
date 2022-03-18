<?php


include 'connect.php';



if(isset($_POST['submit'])){

    $blog=$_POST['blog'];
    $title=$_POST['title'];
    $image=$_FILES['image']['name'];



    $sql="insert into crud (title,blog,image)
    values('$blog','$image','$image') where id='$id'";


    $result=mysqli_query($conn, $sql);


    if($result){

        move_uploaded_file($_FILES['image']['tmp_name'],"$image");

        header('location:dashboard.php');

    }
    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>


<div class="container my-5">

<form action="" method="POST" enctype="multipart/form-data" class="my-5">

    
<h3 class="text-center">CREATE NEW BLOG</h3>


<input type="text" class="form-control mb-3" name="title" autocomplete="off"  placeholder="enter title"required>

<textarea name="textarea" id="" cols="30" rows="10" class="form-control mb-3" placeholder="type blog..." name="blog"></textarea>


<input type="file" accept="image/jpg, image/jpeg, image/png" class="form-control mb-3" name="image">




<button type="submit" class="btn btn-success mt-3 login" name="submit">Save Blog </button>

</form>



</div>
    
</body>
</html>