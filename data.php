<?php
$task=$_POST['task'];

// echo "Name Is".$name ."Phone Number:".$phone;


include 'database.php';
$sql="INSERT INTO todos(task)VALUES('$task')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>