<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$firstname = $lastname = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["fname"]);
  $lastname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}
   
?>
<legend style="color:black">PHP Form Validation </legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF]);?>">  
  firstName: <input type="text" name="fname">
  <br><br>
  lastName: <input type="text" name="lname">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>

</body>
</html> 