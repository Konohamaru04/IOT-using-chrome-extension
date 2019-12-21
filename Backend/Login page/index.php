<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title></title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
  <div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="card">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1></h1>
  <div class="form-group">
    <input required="required" class="form-control" name="userID"/>
    <label class="form-label">Username    </label>
  </div>
  <div class="form-group">
    <input id="password" name="passw" type="password" required="required" class="form-control"/>
    <label class="form-label">Password</label>
    <button class="btn" type="submit" name="submit" value="Submit">Login </button>
  </div>
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
    header('Location: test3.php');
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

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>


</div>
</div>
</body>

</html>
