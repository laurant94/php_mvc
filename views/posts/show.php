<?php ob_start(); ?>

<h2> <?php echo $post->title; ?> </h2>

<p> <?php echo $post->description; ?> </p>

<?php 
  $content = ob_get_clean();
include_once APP_ROOT . "/views/layout/layout.php"; ?>

