<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <style>
      form {
        padding: 15px;
        line-height: 2.5em;
      }
      div {
        width: 50%;
        margin: 5% 10%;
      }
      table {
        margin-left: 10%;
        padding: 15px;
        font-size: 0.9em;
      }
      #message{
        margin-left: 100px;
      }
      .actions {
        display: inline-block;
        margin-left: 4px;
        padding: 0;
      }
      button, img {
        display: inline-block;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
<h3>Products</h3>
<table border=1>
  <thead>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th width="80">Action</th>
  <thead>
  <tbody>
    <?php foreach ($show_products as $product) {
     ?>
    <tr>
      <td><?= $product['name']; ?></td>
      <td><?= $product['description']; ?></td>
      <td><?= $product['price']; ?></td>
      <td>
        <a href="show/<?php echo $product['id']; ?>"><img src="assets/img/show_icon.png"></a>
        <a href="edit/<?php echo $product['id']; ?>" ><img src="assets/img/edit_icon.gif"></a>
        <a href="delete/<?php echo $product['id']; ?>"><img src="assets/img/delete_icon.gif"></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<form action="new" method="post">
<input type="submit" value="Add a new product">
</form>
</body>
</html>
