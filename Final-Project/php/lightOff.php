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
<form action="lightOn.php" method="get">
<table class="blue-grey darken-3">
    <tr>
        <td></td>
        <td><img src="sprites/off.png" height="100px" width="85px" id="light"></td>
        <td><button  class="gradientColorInv waves-effect waves-light btn-small" type="submit" value="lightON" name="On">On</button></td>
        <td><button  class="gradientColorInv waves-effect waves-light btn-small disabled" >Off</button></td>
    </tr>
</table>               
</form>

<?php
$setmode17 = shell_exec("gpio -g mode 17 output");
if(isset($_GET["lightON"]))
{
    $gpio_lightOn = shell_exec("gpio -g write 17 1");
}
?>

</body>
</html>