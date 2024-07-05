<?php
        $id=$_GET['id'];
        include('conn.php');
        mysqli_query($conn,"delete from `phones` where id='$id'");
        header('location:main.php');
        
?>