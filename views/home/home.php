<?php  ob_start(); ?>

<?php if(isset($title)): ?>
  <p><?php echo $title; ?></p>
<?php endif; ?>

<?php
  echo singularize("children");
?>

<?php img_tag('tabac.jpg', "", 250) ?>
<?php content_tag('h4', "Dolore aute incididunt cupidatat exercitation ipsum. Et excepteur pariatur tempor duis voluptate veniam labore. Exercitation reprehenderit est reprehenderit aliqua reprehenderit culpa ad. Dolore velit eu Lorem culpa veniam. Cupidatat culpa sint eiusmod consequat magna commodo commodo proident ea nulla velit.") ?>

<?php 
  $content = ob_get_clean();
include_once APP_ROOT . "/views/layout/layout.php"; ?>
