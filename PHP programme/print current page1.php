<html>
<head>

		<title>print current page</title>
					
  <style>
       .print
	   {
	    display:none
       }
       @media print 
	   {
	    .print {display:block}
	    .btn-print {display:none;}
       }
  </style>
  
</head>

<body >
<center>
<p> Hello </p>
<p> How are you </p>
<p> I am fine </p>

<button  onclick="javascript:window.print()" class="btn-print">Print This Page</button>
	
</center>
</body>
</html>	