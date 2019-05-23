<?php

class Admin extends MY_controller
{
public function login()
{
	$this->load->library('form_validation','fv');
	$this->form_validation->set_rules('uname','User name','required|alpha');
	$this->form_validation->set_rules('pass','Password','required|max_length[12]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$uname=$this->input->post('uname');
		$pass=$this->input->post('pass');
		$this->load->model('loginmodel');
		$login_id=$this->loginmodel->isvalidate($uname,$pass);
		if($login_id)
		{
			$this->load->library('session');
			$this->session->set_userdata('id',$login_id);
			$this->load->view('admin/dashboard');
		}
		else
		{
			echo "details not matched";
		}
	}
	else
	{
		$this->load->view('Admin/Login');
	}
}
	
}




?>