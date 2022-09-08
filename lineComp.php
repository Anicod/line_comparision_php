<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line comparision</title>
</head>
<body>
    <h1>Welcome to Line Comparison Computation Program</h1>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$xA = $xB = $yA = $yB  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["xA"])) {
    $nameErr = "coordinate is required";
    echo $nameErr;
  } else {
    $xA = test_input($_POST["xA"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xA)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["xB"])) {
    $nameErr = "coordinate is required";
    echo $nameErr;
  } else {
    $xB = test_input($_POST["xB"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xB)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yA"])) {
    $nameErr = "coordinate is required";
    echo $nameErr;
  } else {
    $yA = test_input($_POST["yA"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yA)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yB"])) {
    $nameErr = "coordinate is required";
    echo $nameErr;
  } else {
    $yB = test_input($_POST["yB"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yB)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>enter the coordinate of the first line</h3>
    xA Coordinate: <input type="text" name="xA" value="<?php echo $xA;?>">
    <p>xB coordinate: <input type="text" name="xB" value="<?php echo $xB;?>"></p>
    <p>yA coordinate: <input type="text" name="yA" value="<?php echo $yA;?>"></p>
    <p>yB coordinate: <input type="text" name="yB" value="<?php echo $yB;?>"></p>
    <input type="submit" name="submit" value="Submit"> 
    </form>
    <?php
    echo "<h2>Length of the first line:</h2>";
    $x1 = (int)$xA;
    $x2 = (int)$xB;
    $y1 = (int)$yA;
    $y2 = (int)$yB;
    $length = sqrt(($x2-$x1)*($x2-$x1) + ($y2-$y1)*($y2-$y1));
    echo $length;
    ?>
</body>
</html>