<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="css/rotate.css">
</head>
<body>
<form action="fanOn.php" method="get">
<table class="blue-grey darken-3">
    <tr>
        <td></td>
        <td><img src="sprites/fan.png" class="rotateOFF" id="fan" width="100" height="100" /></td>
        <td><button  class="gradientColorInv waves-effect waves-light btn-small" type="submit" value="fanON" name="On">On</button></td>
        <td></td>
        <td><button  class="gradientColorInv waves-effect waves-light btn-small disabled" >Off</button></td>
        <td></td>
    </tr>
</table>               
</form>

<?php
$setmode22 = shell_exec("gpio -g mode 22 output");
if(isset($_GET["fanON"]))
{
    $gpio_fanOff = shell_exec("gpio -g write 22 1");
}
?>
</body>
</html>