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
	public function org()
	{
		$header['page_name'] = 'โครงสร้างองค์กร';
		$header['page_focus'] = 'org';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/org');
		$this->load->view('homepages/template/footer');

	}
	public function noticeNews($page = 1)
	{
		$header['page_name'] = 'ประชาสัมพันธ์';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 0;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	}
	public function noticeProject($page = 1)
	{
		$header['page_name'] = 'ประชาสัมพันธ์โครงการ';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 1;

		$data['pageNum'] = $page;
		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticeproject',$data);
		$this->load->view('homepages/template/footer');

	}


}
