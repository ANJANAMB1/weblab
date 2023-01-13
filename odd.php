<html>
<body>
<form method="get">
enter a no:
<input type="number" name="number">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
if($_GET)
{
 $number=$_GET['number'];
if($number%2==0)
{
 echo"$number is an even no";
}
else
{
 echo"$number is an odd no";
}
}
?>




