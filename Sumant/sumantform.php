<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
      <link rel="stylesheet" href="css/rotate.css">
</head>
<body class="gradientColor">

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
        <tr>
            <td><img src="" height="100px" width="85px" id="light"></td>
            <td><input onclick="lightcontroller(1)" class="waves-effect waves-light btn-small left" type="submit" value="On" name="lighton"/></td>
            <td><input onclick="lightcontroller(0)" class=" waves-effect waves-light btn-small right" type="submit" value="Off" name="lightoff"/></td>
        </tr>
        <tr>
            <td><img src="" height="100px" width="150px" id="tv"></td>
            <td><input onclick="tvcontroller(1)" class=" waves-effect waves-light btn-small left" type="submit" value="tvON" name="On"/></td>
            <td><input onclick="tvcontroller(0)" class=" waves-effect waves-light btn-small right" type="submit" value="tvOFF" name="Off"/></td>
        </tr>
        <tr>
            <td><img src="" class="" id="fan" width="100" height="100" /></td>
            <td><input onclick="fancontroller(1)" class=" waves-effect waves-light btn-small left" type="submit" value="fanON" name="On"/></td>
            <td><input onclick="fancontroller(0)" class=" waves-effect waves-light btn-small right" type="submit" value="fanOFF" name="Off"/></td>
        </tr>
    </table>
    </form>

    <?php
$lighton = "";
$lightoff = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $lighton = test_input($_GET["lighton"]);
  $lightoff = test_input($_GET["lightoff"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  echo $lighton ;
?>

    <script>
         document.getElementById("light").src="/sprites/off.png";
         document.getElementById("tv").src="/sprites/tvoff.png";
         document.getElementById("fan").src="/sprites/fan.png";

         function lightcontroller(lightBulb)
        {


            if(lightBulb == 1)
            {
                lightSprite = "/sprites/on.png";
            }
            if(lightBulb == 0)
            {
                lightSprite = "/sprites/off.png";
            }
            
        }

        function tvcontroller(tv69)
        {
            var tvSprite = "/sprites/tvoff.png";

            if(tv69 == 1)
            {
                tvSprite = "/sprites/tvon.png";
            }
            if(tv69 == 0)
            {
                tvSprite = "/sprites/tvoff.png";
            }
            document.getElementById("tv").src=tvSprite;
        }

        function fancontroller(fananim)
        {

            if(fananim == 1)
            {
                fanSprite = "rotateON";
                document.getElementById("fan").classList.remove("rotateOff");
                document.getElementById("fan").classList.add(fanSprite);
            }
            if(fananim == 0)
            {
                fanSprite = "rotateOff";
                document.getElementById("fan").classList.remove("rotateON");
                document.getElementById("fan").classList.replace(fanSprite)
            }
        }
    </script>
 

</body>   
</html>