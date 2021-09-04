<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calendar.css">
  <title>Document</title>
</head>
<body>
  <h1>九九表</h1>
  <div class="ue"> 
  <?php
    echo '<span class="box">'."×".'</span>';
    for ($i=1; $i<10 ; $i++) {
      echo '<span class="box">'.$i.'</span>';}
    ?>
  </div>
  <div class="naka">
  <?php
    for ($i=1; $i <10 ; $i++) {
      echo '<span class="box">'.$i.'</span>';
      for ($j=1; $j <10 ; $j++) { 
        $result=$i*$j;
        $odd_num='<span class="box">'.$result.'</span>';
        $even_num='<span class="color-box">'.$result.'</span>';
        if ($result%2===0) {
         echo $even_num;
        }
        else {
         echo $odd_num;
        }
       }
       echo "<br>";
    }
    ?>
  </div>
</body>
</html>