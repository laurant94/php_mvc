<?php ob_start(); ?>

<h5>Mes publications</h5>

  <?php foreach($posts as $post): ?>
    <ul>
      <li> <?php echo $post->title ?> </li>
      <li> <?php echo $post->description ?> </li>
      <li> <?php echo $post->price ?> </li>
      <br><br><br>
    </ul>
  <?php endforeach; ?>

  

  <?php 
  $content = ob_get_clean();
include_once APP_ROOT . "/views/layout/layout.php"; ?>
