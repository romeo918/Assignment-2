<?php
        include('main.php');
 
        $phonename=$_POST['phonename'];
        $price=$_POST['price'];
 
        mysqli_query($conn,"insert into `phones` (phonename,price) values ('$phonename','$price')");
        header('location:main.php');
 
        
?>