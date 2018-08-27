<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
        	redirect('website','refresh');
        }
    }

	public function index()
	{
        $data['bukus'] = $this->get_data_buku();
        $this->load->view('Buku/buku',$data);
	}

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_buku');
        redirect('buku','refresh');
    }

    public function add()
    {
        $this->load->view('Buku/form_input');
    }

    public function editData($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->where('id', $id);
        $rows = $this->db->get()->row_array();
        $data['id'] = $rows['id'];
        $data['kd_buku'] = $rows['kd_buku'];
        $data['nama_buku'] = $rows['nama_buku'];
        $data['nama_pengarang'] = $rows['nama_pengarang'];
        $data['nama_penerbit'] = $rows['nama_penerbit'];
        $data['tahun_terbit'] = $rows['tahun_terbit'];
        $this->load->view('Buku/form_edit',$data);
    }


        
    public function get_data_buku()
    {
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function save_data()
    {
        $post = $this->input->post();

        $object = array(
                    'kd_buku'=>$post['kd_buku'],
                    'nama_buku'=>$post['nama_buku'],
                    'nama_pengarang'=>$post['nama_pengarang'],
                    'nama_penerbit'=>$post['nama_penerbit'],
                    'tahun_terbit'=>$post['tahun_terbit'],

                );

        $this->db->insert('tbl_buku', $object);

        if ($this->db->affected_rows() === 1) {
            redirect('buku','refresh');
        }
        else
        {
            redirect('buku','refresh');
        }
    }

    public function update_data()
    {
        $post = $this->input->post();

        $object = array(
                    'kd_buku'=>$post['kd_buku'],
                    'nama_buku'=>$post['nama_buku'],
                    'nama_pengarang'=>$post['nama_pengarang'],
                    'nama_penerbit'=>$post['nama_penerbit'],
                    'tahun_terbit'=>$post['tahun_terbit'],

                );
        $this->db->where('id', $post['id']);
        $this->db->update('tbl_buku', $object);

        if ($this->db->affected_rows() === 1) {
            redirect('buku','refresh');
        }
        else
        {
            redirect('buku','refresh');
        }
    }

}
