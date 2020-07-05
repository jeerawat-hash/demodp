<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 
	function __construct()
	{
	
		parent::__construct(); 
 		/*$this->load->library("session");
		$this->load->model("Member_model");

		if ( $this->session->userdata("memberID") == "" ) {
			
			redirect("signin");
			$this->session->sess_destroy();
		}
		*/

	}


	public function index()
	{

		$this->load->view('homepages/template/header');
		$this->load->view('homepages/home');
		$this->load->view('homepages/template/footer');

	}

	public function about()
	{

		$this->load->view('homepages/template/header');
		$this->load->view('homepages/about');
		$this->load->view('homepages/template/footer');

	}


}
