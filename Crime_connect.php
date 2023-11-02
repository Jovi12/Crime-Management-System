<?php 
   $residentid = $_POST['residentid'];
   $date =  $_POST['date'];
   $crimedesc = $_POST['crimedesc'];
   $location = $_POST['location'];

   
   // Try connecting to the Database
   $conn = new mysqli('localhost','root','','crimereg');

   if($conn ->connect_error)
   {
    die('Connection Failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("INSERT INTO  crimeregtable(residentid,date,crimedesc,location,status) values(?,?,?,?,'pending')");
    $stmt->bind_param("isss",$residentid, $date,$crimedesc,$location);
    if (mysqli_stmt_execute($stmt))
        {
            header("location: CRegistration.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    $stmt->close();
    $conn->close();
   } 

?>