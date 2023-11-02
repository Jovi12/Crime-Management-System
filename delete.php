<?php 

include "admindbconnection.php"; 

if (isset($_GET['crimeid'])) {

    $crimeid = $_GET['crimeid'];

    $sql = "DELETE FROM `crimeregtable` WHERE `crimeid`='$crimeid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: view.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>