<?php

use app\Database;
use app\Model\Product;

require_once 'vendor/autoload.php';


// use app\Controller\Person;

$db = new Product();


$res = $db->select();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($res as $r): ?> 
            <img src="<?php echo $r['image'] ?>" alt="No image">
        
    <?php endforeach;?>
</body>
</html>

<div class="grid-container">
  <div class="grid-item">
      <?php
      $product = new Product();
      $products = $product->select();
      foreach($products as $p):
      ?>
        <a target="_blank" href="<?= $p['image']  ?>">
          <img src="<?= $p['image']  ?>" alt="Cinque Terre" class="img" width="100" height="150">
        </a>
        <div class="desc"><h2><?= $p['title']  ?></h2></div>
        <p><?= $p['description']  ?></p>
        <?php endforeach; ?> 
  </div>
</div>