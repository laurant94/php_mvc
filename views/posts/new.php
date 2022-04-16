<?php ob_start(); ?>

<h5>Ajouter une publications</h5>
<form action="<?php echo $path ?>" method="post"> <br> <br>
<input type="text" name="title" placeholder="Titre" > <br> <br>
<input type="text" name="description" placeholder="description" > <br> <br>
<input type="number" name="price" placeholder="prix" > <br> <br>
<input type="text" name="sku" placeholder="SKU"> <br> <br>
<input type="submit" value="Ajouter">
</form>

<?php 
  $content = ob_get_clean();
include_once APP_ROOT . "/views/layout/layout.php"; ?>
