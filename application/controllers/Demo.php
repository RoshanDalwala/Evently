<?php  
	class Demo extends CI_Controller
	{
		public function fun()
		{
			return $this->load->view("admin/blank");
		}

		public function fun1()
		{
			return $this->load->view("admin/blank1");
		}

		public function fun2()
		{
			return $this->load->view("admin/blank2");
		}

		public function fun3()
		{
			return $this->load->view("admin/blank3");
		}
	}
?>