<?php 
	class Curd_data extends CI_Model {

        // public $title;
        // public $content;
        // public $date;

        // public function get_last_ten_entries()
        // {
        //         $query = $this->db->get('entries', 10);
        //         return $query->result();
        // }
		public function insert_data() {
			$link_folder = $this->input->post('link-folder');
			$plform = $this->input->post('pf');
			$file_name = $this->input->post('file-name');
			$from_file = $this->input->post('from-file');
			$end_file = $this->input->post('end-file');

			$this->load->library('CSVReader'); //load library Read file CSV
			for ($i=$from_file; $i <= $end_file ; $i++) 
			{ 
				# code...
				$csvData = $this->csvreader->parse_file(site_url().$link_folder.'/'.$file_name.$i.'.csv');
				if($plform == 'vr') {
					$result = $this->__virastyle($csvData, $plform);	
				}
				//hiển thị lỗi nếu insert dữ liệu bị lỗi
				if( ! $result) {
				 	echo $result;
				} else {
				 	//redirect(current_url());
				 	echo 'Thành công';
				}
			}
			
		}
		
		public function __virastyle($result, $platform)
		{
			
			foreach($result as $row) 
			{
				$full_name = trim($row['customer_name']);
				if($full_name != '') 
				{
					$array_last_name = preg_split('/(.* )/', trim($row['customer_name']));
					
					//tách fistname và last name
					$last_name = isset($array_last_name[1]) ? $array_last_name[1] : null;
					if ($last_name != null) {
						$first_name = trim(substr($full_name, 0, strlen($full_name) - strlen($last_name)));
					} else {
						$last_name = $first_name;
					}

					$data[] = array (
						'full_name' => $row['customer_name'],
						'last_name' => $last_name,
						'first_name' => $first_name,
						'country' => $row['customer_country'],
						'email' => $row['customer_email'],
						'platform' => $platform
					);
					
				}
			}
			//$this->show_debug($data);
			$query = $this->db->insert_batch('email_list', $data);
			if ($query) {
				return TRUE;
			} else {
				return $this->db->error();
			}
			
		}

		public function __teechip() 
		{
			foreach($result as $row) 
			{
				$full_name = trim($row['customer_name']);
				if($full_name != '') 
				{
					$array_last_name = preg_split('/(.* )/', trim($row['customer_name']));
					
					//tách fistname và last name
					$last_name = isset($array_last_name[1]) ? $array_last_name[1] : null;
					if ($last_name != null) {
						$first_name = trim(substr($full_name, 0, strlen($full_name) - strlen($last_name)));
					} else {
						$last_name = $first_name;
					}

					$data[] = array (
						'full_name' => $row['customer_name'],
						'last_name' => $last_name,
						'first_name' => $first_name,
						'country' => $row['customer_country'],
						'email' => $row['customer_email'],
						'platform' => $platform
					);
					
				}
			}
			$query = $this->db->insert_batch('email_list', $data);
		}

		private function show_debug($result) {
			echo '<pre>';
			print_r($result);
			echo '</pre>';
		}
    }


?>