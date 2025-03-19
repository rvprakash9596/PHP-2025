<html>
<head>
<style>
h1{font-family:Times New Roman; font-size:30px; font-style:italic;}
h5{font-size:10px;}
</style>

<style>
.button
{
  padding: 10px 50px;
  font-size: 15px;
  font-family:Times New Roman;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1
{
  padding: 10px 50px;
  font-size: 50px;
  font-family:Times New Roman;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:102030;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

</style>

<title>Nonveg</title>
</head>

<body bgcolor="102030">

<script language="javascript">
col=new Array("aqua","yellow","white","purple","lime","teal");
i=0;
function colorChange()
{
 document.fgColor=col[i];
 i++;
 if(i>5)
 i=0;
}
 setInterval("colorChange()",1000);
</script>

<table border="0" width="100%" bgcolor="red">
<tr>
<th><marquee id=dd behavior="alternate" onMouseOver="stop()" onMouseOut="start()">
	<h1>Non Vegetarian Items </h1></marquee>
</th>	
</tr></table><br><br>

<h5><center> <button class="button1">Non Vegetarian Food</button></center> </h1>
<table border="0" cellspacing="2" cellpadding="15" bordercolor="pink" align="center" ><br><br>
<tr>
<th> <button class="button"> नॉनवेज सूप</button> </th> 
<th> <button class="button"> स्नैक्स नॉनवेज  </button> </th>
<th> <button class="button"> नॉनवेज आइटम चिकेन </button> </th>
<th> <button class="button"> मटन आइटम</button> </th>
<th> <button class="button"> फिश आइटम  </button> </th>
<th> <button class="button"> नॉनवेज तवे पर</button> </th>
</tr>

</table>
</body>
</html>