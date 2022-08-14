<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Login extends CI_Controller
{

	public function index()
	{

		
			 $this->load->view('login');
		
	}
	public function validlogin()
	{
		if($this->input->server('REQUEST_METHOD') == TRUE){
			if($this->input->post('username') == "admin" && $this->input->post('password') == "123456")
			{
				
				$this->session->set_userdata(array('username'    => "admin"));
				redirect('Home');
			}
			else
			{
				$this->session->set_flashdata(array('msgerr'=> '<p class="login-box-msg" style="color:red;">ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!</p>'));
				redirect('Login', 'refresh');
				
			}
		}
 
	}
 
	public function logout()
	{
		$this->session->unset_userdata(array('username'));
		redirect('login', 'refresh');
	}
 
	

	
}