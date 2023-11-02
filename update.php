<?php 

include "admindbconnection.php";

    if (isset($_POST['update'])) {

        $crimeid = $_POST['crimeid'];

        $status = $_POST['status']; 

        $sql = "UPDATE `crimeregtable` SET `status`='$status' WHERE `crimeid`='$crimeid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            header('Location: view.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['crimeid'])) {

    $crimeid = $_GET['crimeid']; 

    $sql = "SELECT * FROM `crimeregtable` WHERE `crimeid`='$crimeid'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $status = $row['status'];

        } 

    ?>

        <h2>Complain Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Status information:</legend>

            Status:<br>

            <input type="text" name="status" value="<?php echo $status; ?>">

            <input type="hidden" name="crimeid" value="<?php echo $crimeid; ?>">

            <br>

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 