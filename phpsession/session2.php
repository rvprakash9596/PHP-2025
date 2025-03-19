<?php
session_start();
?>
<html>
<body>
<?php
echo"User name is : ".$_SESSION["user"];
?>
</body>
</html>