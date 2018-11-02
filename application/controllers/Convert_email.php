<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convert_email extends CI_Controller {

	
	public function index()
	{
		if ( $this->input->post('submit') ) 
		{
			$this->form_validation->set_rules('pf', 'Platform', 'required');
			$this->form_validation->set_rules('link-folder', '"Link file email"', 'required');
			if ($this->form_validation->run() == TRUE)
            {
            	//call function from model
				$this->load->model('curd_data');
				//Insert data into database
				$this->curd_data->insert_data();
            }
		} 

		$this->load->view('convert_email');
	}

	private function read_file( $link_folder ) 
	{
		
	}
}
