<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Product</title>
  </head>
  <body>
    <form action="create" method="post">
      <fieldset>
        <legend>Add a new product</legend>
        <label>Name</label>
        <p><input type="text" name="name"></p>
        <label>Description</label>
        <p><input type="text" name="description"></p>
        <label>Price</label>
        <p><input type="text" name="price"></p>
        <input type="submit" value="Create">
      </fieldset>
    </form>
    <a href="products">Go back</a>
  </body>
</html>
