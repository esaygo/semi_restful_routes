<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index() {
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		//display all products info - create view
		$this->load->model('Product');
		$product_db = $this->Product->get_all_products();

		$this->load->view('products', ['show_products' => $product_db]);
	}

	public function new_product() {
		//form that allows the user to create a new product - create view

		$this->load->view('new_product');
	}

	public function create_product() {
		$this->load->model('Product');
		//process the form input post submitted from new_product. Redirect to /products
		$new_product = $this->input->post(NULL,TRUE);
		$this->Product->add_product($new_product);
		// var_dump($new_product);
		// die();
		redirect($uri=base_url());
	}

	public function edit_product($id) {
		//form to allow editing a product - create a view
		$this->load->model('Product');
		$one_product = $this->Product->get_record($id);
		$this->load->view('edit', [
															'id' => $id,
															'name' => $one_product['name'],
															'description' => $one_product['description'],
															'price' => $one_product['price']
														]);
	}

	public function show_product($id) {
		//to display a product - create view
		$this->load->model('Product');
		$one_product = $this->Product->get_record($id);

		$this->load->view('show',['product' => $one_product]);
	}

	public function update_product($id) {
		//process the form submited from /products/edit/[id]
		$this->load->model('Product');
		$new_vals = $this->input->post();
		$this->Product->update($new_vals,$id);
		redirect('../');
	}

	 public function destroy($id) {
		 //process the form submited from index to delete a producs.
 		//process the post and redirect to '/products'
		 $this->load->model("Product");
		 $this->Product->destroy($id);
		 redirect('../');
	 }


}
