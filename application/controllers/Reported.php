<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reported extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ReportedM',"rm");
	}

	public function loadReportedUser()
	{
		$temp=array(
			"data"=>$this->rm->getAllReportedManagers()
		);
		$this->load->view("admin/reported.php",$temp);
	}

	public function blockManager($id,$eid)
	{
		$this->rm->blockManager($id);
		$this->rm->changeReportStatus($eid);
		redirect("Reported/loadReportedUser");
	}

	public function cancleReport($eid)
	{
		$this->rm->deleteRequest($eid);
		redirect("Reported/loadReportedUser");
	}
}
?>