<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($title) ? $title : SITE_NAME ?></title>
  <?php
    include_style("https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald&display=swap");
    include_style('style.css'); 
  ?>
</head>
<body>

  <?php echo $content ?>

  
</body>
</html>