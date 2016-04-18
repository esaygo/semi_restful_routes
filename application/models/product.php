<?php

class Product extends CI_Model {

    function add_product($new_product) {
      $query = 'INSERT INTO products (name, description,price, created_at,updated_at) VALUES (?,?,?,NOW(),NOW())';
      $values = array($new_product['name'], $new_product['description'], $new_product['price']);
      return $this->db->query($query, $values);
  }

   function get_all_products() {
     return $this->db->query("SELECT * FROM products ORDER BY id DESC")->result_array();
       //pass the courses data back to the controller
   }

    function get_record($id) {
      $query = "SELECT * FROM products WHERE id = ?";
      return $this->db->query($query,$id)->row_array();
    }

    function update($new_vals, $id) {
       $query = " UPDATE products SET name='" . $new_vals["name"]. "', description='" . $new_vals["description"]. "', price='" . $new_vals["price"]. "'  WHERE id=" .$id. ";";
       $this->db->query($query);
     }

    function destroy($id) {
      $query = "DELETE FROM products WHERE id = ?";
      $this->db->query($query,$id);
    }

  }

?>
