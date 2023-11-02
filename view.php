<?php 

include "admindbconnection.php";

$sql = "SELECT * FROM crimeregtable";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    .navbar {
  overflow: hidden;
  background-color:rgb(0,128,128);
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.search-container {
  float: right;
}
.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
    </style>
</head>

<body>
<div class="navbar">
   <a class="navbar-brand" href="#"> Crime Record Management System</a>
   <a href="adminview.php">Home</a>
   <a href="logout.php">LogOut</a>
   </div> 
   <br>
   <br>
  
<br>
<form  action="search.php" method="POST" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="crimeid">
  <button type="submit" name="search"><i class="fa fa-search"></i></button>
</form>
    <div class="container">

        <h2>Complains</h2>

<table class="table">

   

        <tr>

        <th>Crime ID</th>

        <th>Resident ID</th>

        <th>Date</th>

        <th>Crime description</th>

        <th>location</th>

        <th>status</th>

        <th>Action</th>

    </tr>

   

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['crimeid']; ?></td>

                    <td><?php echo $row['residentid']; ?></td>

                    <td><?php echo $row['date']; ?></td>

                    <td><?php echo $row['crimedesc']; ?></td>

                    <td><?php echo $row['location']; ?></td>

                    <td><?php echo $row['status']; ?></td>

                    <td><a class="btn btn-info" href="update.php?crimeid=<?php echo $row['crimeid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?crimeid=<?php echo $row['crimeid']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>