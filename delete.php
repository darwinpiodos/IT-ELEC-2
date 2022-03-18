<?php

include 'connect.php';


if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];


    $sql="select *from crud where id='$id'";
}





?>