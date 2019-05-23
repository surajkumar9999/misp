<?php

class Users extends MY_controller
{
	public function index()
	{
		$this->load->view("Users/articleList");
	}
	public function Login()
	{
		$this->load->helper("html");
		$this->load->view('Users/articleList');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$this->load->model("usermodel");
			$data=array(
				"username"=>$this->input->post("uname"),
				"password"=>$this->input->post("pass")
			);
			$this->usermodel->putindb($data);
			redirect(base_url() . "Users/inserted");
		}
		else
		{
			echo "error!!";
		}
	}
	public function inserted()
	{
		echo "SiGNUP SUCCESSFULL";
	}
}


?>