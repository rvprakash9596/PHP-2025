<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["user"]="RaviPrakash";
echo"Session information are set successfully.<br><br>";
?>
<a href="session2.php">visit next page</a>
</body>
</html>