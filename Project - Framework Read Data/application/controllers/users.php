
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index(){
		echo "Hello World <br>";
		$this->addStuff();
		
	}

	public function hello(){
		echo "Something else";
	}

	public function addStuff(){
		$this->load->model("math");
		echo $this->math->add(2, 2);
	}

	function getValues(){
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();

		$this->load->view("view_db", $data);
	}
}
