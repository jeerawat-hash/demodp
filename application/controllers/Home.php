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
		$header['page_menu'] = 0;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/story');
		$this->load->view('homepages/template/footer');

	}
	public function org()
	{
		$header['page_name'] = 'ทำเนียบผู้บริหาร';
		$header['page_focus'] = 'story';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/org');
		$this->load->view('homepages/template/footer');

	}
	public function orga()
	{
		$header['page_name'] = 'วิสัยทัศน์/ภารกิจ/หน้าที่รับผิดชอบ';
		$header['page_focus'] = 'org';
		$header['page_menu'] = 0;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/orga');
		$this->load->view('homepages/template/footer');

	}
	public function orgb()
	{
		$header['page_name'] = 'โครงสร้างหน่วยงาน';
		$header['page_focus'] = 'org';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/orgb');
		$this->load->view('homepages/template/footer');

	}
	/*
	public function org()
	{
		$header['page_name'] = 'โครงสร้างองค์กร';
		$header['page_focus'] = 'org';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/org');
		$this->load->view('homepages/template/footer');

	}*/
	/*
	public function noticeNews($page = 1)
	{
		$header['page_name'] = 'ประชาสัมพันธ์';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 0;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	}*/
	public function noticeNewsa($page = 1)
	{
		$header['page_name'] = 'ข่าวสารทั่วไป';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 0;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	}
	public function noticeNewsb($page = 1)
	{
		$header['page_name'] = 'ปฏิทินกิจกรรม';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 1;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	}
	public function noticeNewsc($page = 1)
	{
		$header['page_name'] = 'จัดซื้อจัดจ้าง/ประกาศราคา';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 2;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	} 
	public function noticeNewsd($page = 1)
	{
		$header['page_name'] = 'สมัครงาน';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 3;

		$data['pageNum'] = $page;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/noticenews',$data);
		$this->load->view('homepages/template/footer');

	} 
	public function newsDetail()
	{
		$header['page_name'] = 'ประชาสัมพันธ์';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 0;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/newsdetail');
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
	public function projectDetail()
	{
		$header['page_name'] = 'ประชาสัมพันธ์โครงการ';
		$header['page_focus'] = 'notice';
		$header['page_menu'] = 1;

		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/projectdetail');
		$this->load->view('homepages/template/footer');

	}

	/*public function services()
	{
		$header['page_name'] = 'บริการ';
		$header['page_focus'] = 'services';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/services');
		$this->load->view('homepages/template/footer');

	}*/
	public function servicesa()
	{
		$header['page_name'] = 'บริการฝึกอาชีพ';
		$header['page_focus'] = 'services';
		$header['page_menu'] = 0;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/services');
		$this->load->view('homepages/template/footer');

	}
	public function servicesb()
	{
		$header['page_name'] = 'ศูนย์บริการคนพิการสาขา';
		$header['page_focus'] = 'services';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/services');
		$this->load->view('homepages/template/footer');

	}
	public function servicesc()
	{
		$header['page_name'] = 'กายบำบัด';
		$header['page_focus'] = 'services';
		$header['page_menu'] = 2;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/services');
		$this->load->view('homepages/template/footer');

	}
	/*
	public function laws()
	{
		$header['page_name'] = 'กฏหมายวิชาการ';
		$header['page_focus'] = 'laws';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/laws');
		$this->load->view('homepages/template/footer');

	}
	*/
	public function lawsa()
	{
		$header['page_name'] = 'กฏหมาย/พ.ร.บ.';
		$header['page_focus'] = 'laws';
		$header['page_menu'] = 0;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/laws');
		$this->load->view('homepages/template/footer');

	}
	public function lawsb()
	{
		$header['page_name'] = 'ระเบียบ/ข้อบังคับ';
		$header['page_focus'] = 'laws';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/laws');
		$this->load->view('homepages/template/footer');

	}
	public function lawsc()
	{
		$header['page_name'] = 'เอกสารวิชาการ';
		$header['page_focus'] = 'laws';
		$header['page_menu'] = 2;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/laws');
		$this->load->view('homepages/template/footer');

	}
	public function product()
	{
		$header['page_name'] = 'ผลิตภัณฑ์ฝีมือคนพิการ';
		$header['page_focus'] = 'product';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/product');
		$this->load->view('homepages/template/footer');

	}
	public function contact()
	{
		$header['page_name'] = 'ติดต่อ';
		$header['page_focus'] = 'contact';
		$header['page_menu'] = 1;

 		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/contact');
		$this->load->view('homepages/template/footer');

	}


	public function indextest()
	{

		$header['page_name'] = 'หน้าแรก';
		$header['page_focus'] = 'home';
		$header['page_menu'] = 1;


		$this->load->view('homepages/template/header',$header);
		$this->load->view('homepages/testhome');
		$this->load->view('homepages/template/footer');

	}
	public function upload()
	{

		print_r($_POST);
		print_r($_FILES);


	}	

}
