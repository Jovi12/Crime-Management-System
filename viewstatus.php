 
 <!DOCTYPE html>  
 <html>  
      <head>  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <title></title>  
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
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

          </style> 
      </head>  
      <body>  
           <br /> 
           <div class="navbar">
   <a class="navbar-brand" href="#"> Crime Record Management System</a>
   <a href="homeview.html">Home</a>
   <a href="logout.php">LogOut</a>
   </div>  
   <br><br><br>
   <form  action="" method="POST" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="residentid">
  <button type="submit" name="search"><i class="fa fa-search"></i></button>
</form>
           <div class="container" ">  

               <table class="table">

<thead>

    <tr>


    <th>Crime ID</th>

    <th>Resident ID</th>

    <th>Date</th>

    <th>Crime description</th>

    <th>location</th>

    <th>status</th>

    <th>Police ID</th>

    

</tr> <br>

</thead>  
<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'crimereg');

if(isset($_POST['search']))
{
    $residentid=$_POST['residentid'];

    $query="SELECT * FROM crimeregtable INNER JOIN addpolice ON crimeregtable.crimeid = addpolice.crimeid WHERE residentid='$residentid' ";
    $query_run=mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
 {

?>




<tbody> 

<tr>

<td><?php echo $row['crimeid']; ?></td>

<td><?php echo $row['residentid']; ?></td>


<td><?php echo $row['date']; ?></td>

<td><?php echo $row['crimedesc']; ?></td>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['Police_ID']; ?></td>



</tr>  

<?php
 }
} 
?>
</table> 
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  