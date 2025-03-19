<?php include 'head/menu.php';?>
<html>  
<head>  
<title>bookinghere</title>  
<style>
body{color:blue;}
input[type="reset"]
{background-color:aqua;}
[type="submit"]
{background-color:aqua;}

	*{color:white;}
</style>  
<head>  
<body bgcolor="pink"> 
<form method="get" action="">

<fieldset>

<h1> <center> Your Personal Details :</center></h1>
Your Name :<center><input type="text" placeholder="Enter Your Name" name="yn" required> </center> <br><br>
Your Father Name :<center><input type="text" placeholder="Enter Your Father Name" name="yfn" required> </center>  <br><br>
Your Adhaar Number :<center><input type="number" placeholder="Enter Your Adhaar" name="aadhaar" required> </center>   <br><br>
Contact Number :<center><input type="text" placeholder="Enter Your Contact Number" name="cn" required>  </center>  <br><br>
Your Current Address :<center><textarea  placeholder="Enter Your Current Name" name="add" required> </textarea></center>   <br><br>  

<h1 align="center"> Booking Details :</h1>

Program Date :<center><input type="date" placeholder="Select Your Date" name="date" required> </center> <br><br>
Program Place :<center><input type="text" placeholder="Enter Your Program Place " name="pp" required> </center>  <br><br>

Food Type :

<table border="0" width="100%">
<tr>
<th> <input type="checkbox"> Vegetrain </th> 
<th> &nbsp </th>
<th> Persons Limit <input type="text" name="pl1" required></th>
</tr>
</table>
<br><br><br>
Enter Food Name :<textarea cols="20" rows="5" value="address" type="text" placeholder="Enter Your All Food Name" name="fn" ></textarea>

<br><br><br>
<table border="0" width="100%">

<tr>
<th> <input type="checkbox">Non Vegetrain </th> 
<th> &nbsp </th>
<th> Persons Limit <input type="text" name="pl2" required></th>
</tr>
</table><br><br><br>
Enter Food Name :<textarea  cols="20" rows="5" value="address" placeholder="Enter Your All Food Name" name="fn" ></textarea>

<br><br><br>
<table border="0" width="100%">
<tr><td> &nbsp </td> <td> &nbsp </td></tr>
<tr><td> &nbsp </td> <td> &nbsp </td></tr>
<th><input type="reset" name="rst" value="Reset"><th> 
<th><input type="submit" name="s1" value="Submit"></th>
</tr>

</table>
</fieldset>
</form>  
</body>  
</html>  