<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Home extends CI_Controller
{

	public function index()
	{

		//if ($this->session->userdata('username') == NULL) {
      ////      redirect('Login', 'refresh');
       // }else{

        
			$data = [
				'view_list' => 'home_view',
				'title' => 'Dashboard',
				'menu' => 'home',
				

			];
		
			
			 $this->load->view('/layout/template', $data);
       // }
	}

	
}