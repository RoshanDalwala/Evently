<?php  
	class Calc2 extends CI_Controller
	{
		public function loadCalc()
		{
			return $this->load->view("admin/blank");
		}

		public function loadCalc1()
		{
			return $this->load->view("admin/chart-list");
		}

		public function loadCalc2()
		{
			return $this->load->view("admin/widget-chart");
		}

		public function loadCalc3()
		{
			return $this->load->view("admin/alert");
		}

		public function loadCalc4()
		{
			return $this->load->view("admin/treeview");
		}

		public function loadCalc5()
		{
			return $this->load->view("admin/alert");
		}
	} 
?>