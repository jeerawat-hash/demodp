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

		$header['page_name'] = 'หน้าแรก';
		$header['page_focus'] = 'home';
		$header['page_menu'] = 1;


		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/home');
		$this->load->view('homepages/template/footer');

	}

	public function story()
	{
		$header['page_name'] = 'ประวัติความเป็นมา';
		$header['page_focus'] = 'story';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/story');
		$this->load->view('homepages/template/footer');

	}


}
