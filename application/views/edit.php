<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Product</title>
  </head>
  <body>
    <h3>Edit product: <?php echo $id; ?></h3>
    <form action="../update/<?php echo $id; ?>" method="post">
      <fieldset>
        <label>Name</label>
        <p><input type="text" name="name" value="<?php echo $name; ?>"></p>
        <label>Description</label>
        <p><input type="text" name="description" value="<?php echo $description; ?>"></p>
        <label>Price</label>
        <p><input type="text" name="price" value="<?php echo $price; ?>"></p>
      </fieldset>
    <button type="submit" value="update">Update</button>
    </form>
    <a href="../">Home</a>
    <button onclick="goBack()">Back<button>
      <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>
