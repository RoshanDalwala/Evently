<?php
	class CategoryC extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['aid']))
				redirect("AdminC");

			$this->load->model("CategoryM","ct");
		}

		public function loadCategory()
		{
			$temp=array(
				"categoryData"=>$this->ct->getAllCategories()
			);
			$this->load->view("admin/disCategory",$temp);
		}

		public function loadAddCategory()
		{
			$this->load->view("admin/addCategory");
		}
 
		public function loadBackCategory()
		{
			$temp=array(
				"categoryData"=>$this->ct->getAllCategories()
			);
			$this->load->view("admin/disCategory",$temp);
		}

		public function addCategory()
		{
			$data=array(
				"CategoryName"=>$this->input->post('txtCat')
			);

			$this->ct->insertCategory($data);
			redirect("CategoryC/loadCategory");
		}
		public function removeCategory($id)
		{
			$this->ct->deletCategory($id);
			redirect("CategoryC/loadCategory");
		}
		
		public function loadUpdateCategory($id)
		{
			$cat=$this->ct->getCategoryInfoById($id);
			$temp=[
				"catInfo"=>$cat[0]
			];
			$this->load->view("admin/updateCategory",$temp);
		}
	} 
?>

<!-- controller
	add
	remove
	edit
Model:
	insert
	update
	delete -->