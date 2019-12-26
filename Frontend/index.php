<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\materialize\css\materialize.css">
    <link rel="stylesheet" href="/css/rotate.css">
    <title>Control Hub</title>
</head>
<body class="gradientColor">
<div class="centered Hub">

    <div class="row">
        <div class="col s12 m6">
          <div class="card gradientColor">
            <iframe src="lightOff.php" align="middle" frameborder=0 name=lightController sandbox="allow-forms" scrolling=no width="100%"></iframe> 
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m6">
          <div class="card gradientColor">
            <iframe src="tvOff.php" align="middle" frameborder=0 name=lightController sandbox="allow-forms" scrolling=no width="100%"></iframe>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m6">
          <div class="card gradientColor">
          <iframe src="fanOff.php" align="middle" frameborder=0 name=lightController sandbox="allow-forms" scrolling=no width="100%"></iframe>
          </div>
        </div>
      </div>
</div>
</body>
</html>