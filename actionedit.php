<?php
       $id=$_POST['id'];
       $task=$_POST['task'];
       
    include 'database.php';
    $sql="UPDATE todos SET task='$task' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>