<?php
  $colors = array('#bccbde', '#c2dde6', '#e6e9f0', '#431c5d', '#e05915', '#cdd422');
  $color_count = count($colors);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Colors</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>;
    }
    .area {
      float: left;
      margin: 0; padding: 0;
      width: 10px; height: 10px;
    }
    #area1 {
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>;
    }
  	</style>
  </head>
  <body>

    <?php
    $squares = 10000;
    for($i=0; $i < $squares; $i++) {
      echo "<div class=\"area\" id=\"area2\" style=\"background: {$colors[rand(0,$color_count-1)]}\"></div>";
    }
    ?>
  </body>
</html>
