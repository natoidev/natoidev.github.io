<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>circle curcumfrence,area and volume calculate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>circle curcumfrence,area and volume calculater</h1>
    <form action="index.php" method="post">
        <label>enter the value of radius:</label>
        <input type="text" name="radius" placeholder="value of radius"><br>
         <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
  $radius = $_POST["radius"];
  $circumefrence = null;
  
  $circumference = 2 * pi() * pow($radius,2);
  if($radius <= 0){
    echo"radius number can't be negative or zero";
  }
  elseif{
    echo"a value of radius needed";
  }
  else{
    echo "here is circumfrence of a circle is $circumference";
  }
?>
