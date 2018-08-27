<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct() {
       	parent::__construct();
       	echo "<br>awal<br>";

    }

	public function index()
	{
		echo "index";	
		// $data['name'] = 'Syafrie Syamsudin';
		// $this->load->view('welcome_message',$data);
	}

	public function tes()
	{
		echo "tes";	
		// $data['name'] = 'Syafrie Syamsudin';
		// $this->load->view('welcome_message',$data);
	}


}
