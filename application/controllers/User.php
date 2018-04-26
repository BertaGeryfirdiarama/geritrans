<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User extends CI_Controller
{	

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("Data_user");
	}

	public function menu()
	{
		$this->load->view("form_user");
	}

	public function melbu(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$fullname = $this->input->post("fullname");

		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' =>1);

		$this->Data_user->submit($data);
		$this->load->view("welcome_message");
	}

} 