

<html>
<head>
<title>CRegistration</title>

<style>
   table td{
      color :black;
      font-size :30px;
      }
      
body {
  font-family: Arial, Helvetica, sans-serif;
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

   </style>

</head>
<body>
  
<div class="navbar">
   <a class="navbar-brand" href="#"> Crime Record Management System</a>
   <a href="homeview.html">Home</a>
   <a href="logout.php">LogOut</a>
   </div> 
 </div>
<hr>
<center>
   
<table  bgcolor="009999" style="padding: 4rem;" ><font color="lightcyan" >
<caption align="center" style="font-size:35px;">Register Crime</caption>
<form action="Crime_connect.php" method="post"> <font size="5">
<br>
   <td>Resident ID</td>
   <td><input type="text"style="font-size:25px;margin:5%;" name="residentid" placeholder="Enter resident id"></td>
</tr>
<tr>
    <td>Date</td>
    <td><input type="date"style="font-size:20px;margin:5%;" name="date" placeholder= "yyyy-mm-dd" id="dat" required="required"></td>
</tr>
<tr>
   <td>Crime Description</td>
   <td><textarea  type="text" style="font-size:25px;margin:5%;width: 25rem;height: 5rem;"name="crimedesc" cols="10" rows="2"></textarea></td>
</tr>
<tr>
   <td>Location</td>
   <td><textarea type="text" style="font-size:25px;margin:5%;width: 25rem;height: 5rem;" name="location" cols="10" rows="2"></textarea></td>
</tr>
<tr>
   <td><button type="submit" style="font-size:25px;margin:5%;border-radius: 10px;border-color: aliceblue;">Submit</button></td>
   <td><button style="font-size:25px;margin:5%;border-radius: 10px;border-color: aliceblue;">Reset</button></td>
</tr></font></font>
</table>
</form>


</center>
<hr><font color="white">
</body>
</html>