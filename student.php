<html>
<head>
<title>ODD OR EVEN</title>
</head>
<body>
<form name="forms" method="post"action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="name"><br><br>
Email id:<input type="email" name="mail"><br><br>
Address:<textareaname="address"></textarea><br><br>
Gender:
<input type="radio"id="male"name="gender" value="male">male<br><br>
<input type="radio"id="female"name="gender"value="female">female
<br><br>
Date of birth:<input type="date" name="dob"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST['name'];
$email=$_REQUEST['mail'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
echo"Name:".$name."<br>";
echo"EMAIL ID:".$email."<br>";
echo"ADDRESS:".$address."<br>";
echo"GENDER:".$gender."<br>";
echo"DOB:".$dob."<br>";
}?>



