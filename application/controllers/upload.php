<?php


class Upload extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}

	public function index(){
		$this->load->view('upload_form', array('error' => ' '));
	}

	public function aksi_upload(){
		$config['upload_path']		= './direktori/';
		$config['allowed_types']	= 'gif|jpg|png|xls|txt|docx|ppt';
		$config['max_size']			= '10000';

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas'))
		{
			$error = array('error' => $this->upload->display_error());
			$this->load->view('upload_form', $error);
		}

		else
		{
			$data = array('upload_data' => $this->upload->data());
			echo "All files are uploaded, May check folder DIREKTORI";
		}
	}


}
?>