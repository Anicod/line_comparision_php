<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line comparision</title>
    <style>
        h4{
            color:green;
            font-size:30px;
        }
        input{
            width:30px;
        }
        #sub{
            width:55px;
        }
        h1{
            color:red;
        }
        p{
            color:red;
        }
        #para{
            color:black;
        }

    </style>
</head>
<body>
    <h1>Welcome to Line Comparison Computation Program</h1>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$xA = $xB = $yA = $yB  = $xC = $xD = $yC = $yD = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["xA"])) {
    $nameErr = "coordinate is required";
    echo "<p>$nameErr</p>";
  } else {
    $xA = test_input($_POST["xA"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xA)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["xB"])) {
    $nameErr = "coordinate is required";
  } else {
    $xB = test_input($_POST["xB"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xB)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yA"])) {
    $nameErr = "coordinate is required";
  } else {
    $yA = test_input($_POST["yA"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yA)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yB"])) {
    $nameErr = "coordinate is required";
  } else {
    $yB = test_input($_POST["yB"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yB)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


  if (empty($_POST["xC"])) {
    $nameErr = "coordinate is required";
  } else {
    $xC = test_input($_POST["xC"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xC)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["xD"])) {
    $nameErr = "coordinate is required";
  } else {
    $xD = test_input($_POST["xD"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$xD)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yC"])) {
    $nameErr = "coordinate is required";
  } else {
    $yC = test_input($_POST["yC"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yC)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["yD"])) {
    $nameErr = "coordinate is required";
  } else {
    $yD = test_input($_POST["yD"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yD)) {
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
    <p id="para">xB coordinate: <input type="text" name="xB" value="<?php echo $xB;?>"></p>
    <p id="para">yA coordinate: <input type="text" name="yA" value="<?php echo $yA;?>"></p>
    <p id="para">yB coordinate: <input type="text" name="yB" value="<?php echo $yB;?>"></p>
    <h3>enter the coordinate second line</h3>
    xA Coordinate: <input type="text" name="xC" value="<?php echo $xC;?>">
    <p id="para">xB coordinate: <input type="text" name="xD" value="<?php echo $xD;?>"></p>
    <p id="para">yA coordinate: <input type="text" name="yC" value="<?php echo $yC;?>"></p>
    <p id="para">yB coordinate: <input type="text" name="yD" value="<?php echo $yD;?>"></p>
    <input type="submit" name="submit" value="Submit" id="sub"> 
    </form>
    <?php
    echo "<h2>Length of the first line:</h2>";
    $x1 = (int)$xA;
    $x2 = (int)$xB;
    $y1 = (int)$yA;
    $y2 = (int)$yB;
    $length = sqrt(($x2-$x1)*($x2-$x1) + ($y2-$y1)*($y2-$y1));
    if($length == 0){
        echo "";
    }
    else{
        echo $length;
    }
    echo "<h2>Length of the second line:</h2>";
    $x3 = (int)$xC;
    $x4 = (int)$xD;
    $y3 = (int)$yC;
    $y4 = (int)$yD;
    $length2 = sqrt(($x4-$x3)*($x4-$x3) + ($y4-$y3)*($y4-$y3));
    if($length2 == 0){
        echo "";
    }
    else{
        echo $length2;
    }
    if($length>$length2){
        echo "<h4>first line is grater than second line</h4>";
    }
    elseif($length === $length2){
        echo "<h4>Lines are equal</h4>";
    }
    else{
        echo "<h4>Second line is greater than first line</h4>";
    } 
    ?>
</body>
</html>