<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
  </head>
  <body>
    <h3>Product <?php echo $product['id']; ?></h3>
    <p>Name: <?php echo $product['name']; ?></p>
    <p>Description: <?php echo $product['description']; ?> </p>
    <p>Price: <?php echo $product['price']; ?> </p>
    <a href="../edit/<?php echo $product['id']; ?> ">Edit</a>
    <a href="../products">Back</a>
  </body>
</html>
