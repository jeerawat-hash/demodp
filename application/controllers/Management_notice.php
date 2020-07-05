<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_notice extends CI_Controller {
 
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
		$header['page_name'] = 'ประกาศ';
		$header['page_focus'] = 'news';
		$header['page_menu'] = 2;

		$this->load->view('management/template/header',$header);
		$this->load->view('management/blank');
		$this->load->view('management/template/footer');
	}



}
