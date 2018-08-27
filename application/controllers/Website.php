<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $this->load->view('Website/website');
	}
    
	public function validate_login()
	{
		$post = $this->input->post();

		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where('username', $post['username']);
		$this->db->where('password', $post['password']);
		$data = $this->db->get()->row_array();
		$baris = count($data);

		if ($baris > 0) {
			$session = array(
						'logged_in'=>'true',
						'username'=>$post['username']
					);
			$this->session->set_userdata($session);
			redirect('dashboard');
		}
		else
		{
			echo "<script>alert('Username or Password wrong');</script>";
			redirect('website','refresh');
		}


	}

}
