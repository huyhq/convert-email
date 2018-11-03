<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convert_email extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('curd_data');
    }
	
	public function index()
	{
		if ( $this->input->post('submit') ) 
		{
			$this->form_validation->set_rules('pf', 'Platform', 'required');
			$this->form_validation->set_rules('link-folder', '"Link file email"', 'required');
			if ($this->form_validation->run() == TRUE)
            {
            	
				//Insert data into database
				$this->curd_data->insert_data();
            }
		} 

		$this->load->view('convert_email');
	}

	public function show_email ()
	{
		//Get 1000 email dau tien
		$from_number = $this->input->post('from_number') !== NULL ? $this->input->post('from_number'): 0;
		$end_number = $this->input->post('end_number') !== NULL ? $this->input->post('end_number'): 999;
		
		$data['list_emails'] = $this->curd_data->get_email($from_number, $end_number);
	
		$this->load->view('show_list_email', $data);	
	}

	private function read_file( $link_folder ) 
	{
		
	}
}
