<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ADD Police </title>
<style>
table td{
   color:black;
   font-size: 40px;
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
<body font-size="90px">
<div class="navbar">
   <a class="navbar-brand" href="#"> Crime Record Management System</a>
   <a href="adminview.php">Home</a>
   <a href="logout.php">LogOut</a>
   </div> 
 </div>

<center>




<table  bgcolor="009999" style="margin: 2%; padding:1rem;"><font color="lightcyan" >
   <br>
<caption align="center" style="font-size:40px; "><b>Add Police</b></caption>
<form action="police_connect.php" method="post"><font size="90px">
<tr>
     <td style="font-size:25px;margin:5%;">Police ID</td>
     <td><input type="text" name="Police_ID" style="font-size:25px;margin:5%;" placeholder="Enter Police ID"></td>
</tr>

   <td style="font-size:25px;margin:5%;">Police Name</td>
   <td><input type="pol" name="Police_Name" style="font-size:25px;margin:5%;" placeholder="Enter Police name"></td>
</tr>

<tr>
    <td style="font-size:25px;margin:5%;">Phone No</td>
    <td><input type="number"  style="font-size:25px;margin:5%;"name="phone_no" placeholder="Enter Phone no."></td>
</tr>
<tr>
    <td style="font-size:25px;margin:5%;">Gender</td>
    <td><label for="male" class="radio-inline" style="font-size:25px;margin:5%;"><input type="radio" name="gender" value="male">Male</label></td>
</tr>
<tr>
   <td>
   </td>
   <td><label  for="female" class="radio-inline" style="font-size:25px;margin:5%;"><input type="radio"  name="gender" value="female">Female</label></td>
</tr>
<tr>
   <td style="font-size:25px;margin:5%;">Location</td>
   <td><textarea type="text" name="location" cols="10" rows="2" style="font-size:25px;margin:5%;"></textarea></td>
</tr>
<tr>
     <td style="font-size:25px;margin:5%;">Crime ID</td>
     <td><input type="text" name="crimeid" style="font-size:25px;margin:5%;" placeholder="Enter Crime ID"></td>
</tr>
<tr>
   <td> <button type="submit" name="Register" value="Register" style="font-size:25px;margin:5%;">Register</button></td>
   <td><button type="Reset" name="reset"value="reset" style="font-size:25px;margin:5%;">Reset</button></td>
</tr></font></font>
</table>
</form>


</body>
</html>