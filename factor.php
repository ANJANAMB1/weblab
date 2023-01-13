<html>
<head>
<title>factorial program using loop in php</title>
</head>
<body>
<form method="POST">
enter a no:<br>
<input type="number" name="number" id="number">
<input type="submit" name="submit" value="submit">
</form>
<?php
if($_POST)
{
$fact=1;
 $number=$_POST['number'];
echo"factorial of $number:";
for($i=1;$i<=$number;$i++)
{
$fact=$fact*$i;
}
echo$fact*$i;
}
?>
</body>
</html>