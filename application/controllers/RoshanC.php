<?php 
	class RoshanC extends CI_Controller
	{
		public function tableView()
		{	
			$temp=array(
				"name"=>"Roshan",
				"sem"=>3,
				"roll"=>103,
				"per"=>78.8
			);
			$this->load->view("admin/myView",$temp);
		}

		public function tableView1()
		{
			$temp1=["sinfo"=>array(
				["name"=>"Purva","sem"=>"5","roll"=>"1001","per"=>"85.26"],
				["name"=>"Roshan","sem"=>"3","roll"=>"1003","per"=>"95.5"]
			)
		];

			$this->load->view("admin/myView1",$temp1);
		}

		public function tableView2()
		{
			$temp2=["sinfo"=>array(
					["roll"=>"103",
					"fname"=>"Dalwala",
					"mname"=>"Roshan",
					"std"=>"TYBCA",
					"sem"=>"6",
					"div"=>"1",
					"per"=>"95.55"],

					["roll"=>"1101",
					"fname"=>"Atashbajiwala",
					"mname"=>"Amaan",
					"std"=>"TYBBA",
					"sem"=>"5",
					"div"=>"2",
					"per"=>"85.54"],

					["roll"=>"102",
					"fname"=>"Barot",
					"mname"=>"Purva",
					"std"=>"SYBCom",
					"sem"=>"4",
					"div"=>"3",
					"per"=>"65.42"],

					["roll"=>"104",
					"fname"=>"Chokshi",
					"mname"=>"Harsh",
					"std"=>"FYBTech",
					"sem"=>"2",
					"div"=>"4",
					"per"=>"75.34"]
				)
			];

			$this->load->view("admin/myView2",$temp2);
		}

		public function tableView3()
		{
			$temp3=array(
				"roll"=>"1",
				"name"=>"Roshan",
				"std"=>"BCA",
				"sub"=>"Computer Graphics",
				"mark"=>"95",

				"roll1"=>"2",
				"name1"=>"Jayesh",
				"std1"=>"BCom",
				"sub1"=>"Economics",
				"mark1"=>"90",

				"roll2"=>"3",
				"name2"=>"Pratik",
				"std2"=>"BBA",
				"sub2"=>"Accounting",
				"mark2"=>"93",
			
			);

			$this->load->view("admin/myView3",$temp3);
		}

		public function loadform()
		{

			$this->load->view("admin/v1");
		}

		public function v1()
		{
			$temp=array(
				"name"=>$this->input->post("txtName"),
				"roll"=>$this->input->post("txtRoll"),
				"age"=>$this->input->post("txtAge"),
				"sem"=>$this->input->post("txtSem")
			);

			return $this->load->view("admin/v2",$temp);
		}
	}
?>