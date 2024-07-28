<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/HomeM","hm");
        if(!isset($_SESSION['uid']))
            redirect("user/userc");
    }

    public function index()
    {
        $temp=array(    
            "projects"=>$this->hm->getAllProjects(),
            "managers"=>$this->hm->getAllManagers(),
            "users"=>$this->hm->getAllUsers(),
        );
        $this->load->view("manager/home.php",$temp);
    }

    public function loadBlank()
    {
        $this->load->view("manager/blank");
    }
} 
?>