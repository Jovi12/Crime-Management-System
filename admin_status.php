<?php
if(issets($_POST['submit']))
{
    $q=mysqli_query($db,"Select crimeid,residentid,date,crimedesc,location,status from crimeregtable where residentid like '%$_POST[search]%' ");

    if(mysql_num_rows($q)==0){
        echo "sorry record not found";
    }
    else{
        die(mysqli_error());     
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        </style>
</head>
<body>

         <section>
        <h1></h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>crimeid</th>
                <th>ResidentID</th>
				<th>Date</th>
                <th>Crime Description</th>
                <th>Location</th>
				<th>Status</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['crimeid'];?></td>
                <td><?php echo $rows['residentid'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['crimedesc'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['status'];?></td>
				
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>