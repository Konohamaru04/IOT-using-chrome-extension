<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="userID">
  <br><br>
  password: <input type="text" name="passw">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
$userID = $passW = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userID = test_input($_POST["userID"]);
  $passW = test_input($_POST["passw"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($userID == "admin" && $passW == 6666)
{
    echo "Valid data <br>";
}
elseif($userID != "admin" && $passW == 6666)
{
  echo "Invalid username";
}
elseif($userID == "admin" && $passW != 6666)
{
  echo "Invalid password";
}
else
{
  echo "Invalid Data <br>"; 
}
?>

</body>
</html>