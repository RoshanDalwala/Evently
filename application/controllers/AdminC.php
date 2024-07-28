<?php 
	class AdminC extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("AdminM","am");
		}

		public function index()
		{
			$this->load->view("admin/login.php");
		} 

		public function doLogin()
		{
			$uname=$this->input->post('txtUname');
			$pwd=$this->input->post('txtPwd');
			$uinfo=$this->am->getLoginInfo($uname,$pwd);

			if(count($uinfo)==0)
			{
				$temp=array(
					"msg"=>"Invalid Username or Password"
				);
				$this->load->view("admin/login",$temp);
			}
			else 
			{
				$_SESSION['aid']=$uinfo[0]->AdminID;
				$_SESSION['aname']=$uinfo[0]->UserName;
				$_SESSION['img']=$uinfo[0]->ProfilePic;
				redirect("user/UserC/loadAllUser");
			}
			
		}

		public function logout()
		{
			session_destroy();
			redirect("Adminc/index");
		}
	}
?>

