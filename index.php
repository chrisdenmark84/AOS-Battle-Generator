<!DOCTYPE html>
<html>
<head>
<title>AOS: Battle Plan Generator</title>
</head>
<body>

<h1>Battle Plan Generator</h1>
<p>
<?php 
include("generate.php");
include("data.php");

generateGame($battle_plan, $realm);?>
</p>

</body>
</html>
