<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class CityC extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['aid']))
				redirect("AdminC");
			$this->load->model("CityM","ct");
		}
		public function loadState()
		{
			$this->load->model("CityM","ct");
			$temp=array(
				"stateData"=>$this->ct->getAllState()
			);

			$this->load->view("admin/state",$temp);
		}
		public function loadAddState()
		{
			$this->load->view("admin/addState");
		}

		public function loadBackState()
		{
			$temp=array(
				"stateData"=>$this->ct->getAllState()
			);
			$this->load->view("admin/state",$temp);
		}

		public function addState()
		{
			$data=array(
				"StateName"=>$this->input->post('txtState')
			);

			$this->ct->insertState($data);
			redirect("CityC/loadState");
		}
		public function removeState($id)
		{
			$this->ct->deletState($id);
			redirect("CityC/loadState");
		}


 


		

		public function loadCity()
		{ 
			$this->load->model("CityM","ct");
			$temp=array(
				"cityData"=>$this->ct->getAllCity()
			);

			$this->load->view("admin/city",$temp);
		}

		public function loadAddCity()
		{
			$this->load->view("admin/addCity");
		}

		public function loadBackCity()
		{
			$temp=array(
				"cityData"=>$this->ct->getAllCity()
			);
			$this->load->view("admin/city",$temp);
		}

		public function addCity()
		{
			$data=array(
				"CityName"=>$this->input->post('txtCity')
			);

			$this->ct->insertCity($data);
			redirect("CityC/loadCity");
		}
		public function removeCity($id)
		{
			$this->ct->deletCity($id);
			redirect("CityC/loadCity");
		}
	}
?>