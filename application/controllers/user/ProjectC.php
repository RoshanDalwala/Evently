<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/ProjectM","pm");
	}

	public function loadProject()
	{
		
		
		if($_SESSION['utype']=="user")
		{
			$projects=$this->pm->getAllProjectUser($_SESSION['uid']);
		}
		else if(isset($_REQUEST["btnSearchProject"]))
		{
			$where=[];

			if($this->input->post("city")!=-1)
				$where["ci.CityID"]=$this->input->post("city");

			if($this->input->post("cat")!=-1)
				$where["c.CategoryID"]=$this->input->post("cat");

			if($this->input->post("txtMin")!="")
				$where["min"]=$this->input->post("txtMin");

			if($this->input->post("txtMax")!="")
				$where["max"]=$this->input->post("txtMax");

		
			$projects=$this->pm->getAllProject($where);

		}
		else
		{
			$projects=$this->pm->getAllProject([]);
		}
		$temp=array(
			"projectData"=>$projects,
			"cities"=>$this->pm->getAllCities(),
			"cat"=>$this->pm->getAllCategories()
		);

		$this->load->view("user/disProject",$temp);
	}

	public function loadAddProject()
	{
		$temp=array(
			"cities"=>$this->pm->getAllCities(),
			"cat"=>$this->pm->getAllCategories(),
			"profilePic"=>$this->pm->getAllUser()
			
		);
		$this->load->view("user/uploadProject",$temp);
	}

	public function addProject()
	{
		$img=$_FILES['fup']["name"];
        copy($_FILES['fup']['tmp_name'],"C:/wamp64/www/evently/resources/shared/images/".$img);

        $data=array(
            "Title"=>$this->input->post('txtTitle'),
            "ProjectID"=>$this->input->post('txtProjectCategory'),
            "Budget"=>$this->input->post('txtBudget'),
            "Image"=>$img,
            "Description"=>$this->input->post('txtDescription'),
            // "BidID"=>$this->input->post('txtProjectBids'),
            "CityID"=>$this->input->post('txtCity'),
            // "CityName"=>$this->input->post('txtCity')
            //"UserID"=>$this->input->post('txtUser')
        );

        $this->pm->insertProject($data);
        //redirect("user/ProjectC/loadProject");
		
	}


	public function loadProjectDetails()
	{
		$img=$_FILES['fup']["name"];
        copy($_FILES['fup']['tmp_name'],"C:/wamp64/www/evently/resources/shared/images/".$img);

        $data=array(
            "Title"=>$this->input->post('txtTitle'),
            "CategoryID"=>$this->input->post('txtProjectCategory'),
            "Budget"=>$this->input->post('txtBudget'),
            "Image"=>$img,
            "Description"=>$this->input->post('txtDescription'),
            "CityID"=>$this->input->post('txtCity'),
            "UserID"=>$_SESSION['uid']
            // "BidID"=>$this->input->post('txtProjectBids'),
            //"UserID"=>$this->input->post('txtUser')
        );
        $this->pm->insertProject($data);
        redirect("user/projectC/loadProject");

	}

	public function disProjectDetails($pid)
	{
		/*if(!isset($_SESSION['utype']))
			redirect("user/userc");
*/
		$temp=array(
			"projectData"=>$this->pm->getProjectDetailsById($pid),
			"bidsData"=>$this->pm->getBidsByProjectId($pid),
			"myBids"=>$this->pm->getMyBids($_SESSION['uid'],$pid)
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";
		die();*/
		$this->load->view("user/disProjectDetails",$temp);
	}

	public function deleteBid($bid,$pid)
	{
		$this->pm->deleteBid($bid);
		redirect("user/projectC/disProjectDetails/$pid");
	}

	public function addBid($pid)
	{
		
		$temp=array(
			"ProjectID"=>$pid,
			"Price"=>$this->input->post("txtBid"),
			"EventManagerID"=>$_SESSION['uid'],
			"Description"=>$this->input->post("txtDesc")
		);
		$this->pm->addProjectBis($temp);

		redirect("user/projectc/disProjectDetails/".$pid); 
	}

	public function myProjects()
	{

		$temp=array(
			"projects"=>$this->pm->getMyProjectsManager($_SESSION['uid'])
		);
		$this->load->view("user/myProjects",$temp);
	}

	public function myBids()
	{
		$temp=array(
			"projects"=>$this->pm->getMyProjectBids($_SESSION['uid'])
		);
		$this->load->view("user/myBids",$temp);
	} 

	public function acceptProject($eid,$pid,$price)
	{
		
		$data=array(
			"AssignedManagerID"=>$eid,
			"AssignedPrice"=>$price,
			"status"=>1
		);
		$this->pm->acceptBid($data,$pid);	
		redirect("user/projectc/disProjectDetails/".$pid);
	}
}
?>