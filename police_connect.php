<?php 
   $Police_ID = $_POST['Police_ID'];
   $Police_Name =  $_POST['Police_Name'];
   $phone_no = $_POST['phone_no'];
   $gender=$_POST['gender'];
   $location = $_POST['location'];
   $crimeid = $_POST['crimeid'];

   
   // Try connecting to the Database
   $conn = new mysqli('localhost','root','','crimereg');

   if($conn ->connect_error)
   {
    die('Connection Failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("INSERT INTO  addpolice (Police_ID,Police_Name,phone_no,gender,location,crimeid) values(?,?,?,?,?,?)");
    $stmt->bind_param("isissi",$Police_ID, $Police_Name,$phone_no,$gender,$location,$crimeid);
    if (mysqli_stmt_execute($stmt))
        {
            header("location: pregister.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    $stmt->close();
    $conn->close();
   } 

?>