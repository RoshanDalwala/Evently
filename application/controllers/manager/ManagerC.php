<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerC extends CI_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model("manager/ManagerM","em");
    }
    public function index() 
    {
        $this->load->view("manager/login");
    }

    public function login()
    {
        $data=array(
            "username"=>$this->input->post("txtUname"),
            "password"=>$this->input->post("txtPwd")
        );

        $uinfo=$this->em->getLoginInfo($data);
        if(count($uinfo)==0)
        {
            $temp=array(
                
                "msg"=>"Invalid Username or Password"
            );
            $this->load->view("manager/login",$temp);
        }
        else
        {
            if($uinfo[0]->Status==1)
            {
                $temp=array(
                
                    "msg"=>"Your account has been blocke by the admin, please contact admin for furthur assistance"
                );
                $this->load->view("manager/login",$temp);
            }
            else
            {
                $_SESSION['uid']=$uinfo[0]->EventManagerID;
                $_SESSION['uname']=$uinfo[0]->UserName;
                $_SESSION['utype']="manager";

                redirect("user/homec");
            }
        }
    }
    

    public function loadAllManager()
        {
            $temp=array(
                "managerData"=>$this->em->getAllManager()
            );
            $this->load->view("admin/disManager",$temp);
        }



    public function loadBlank()
    {
        $this->load->view("manager/blank");
    }







    public function loadSignup()
    {
        $temp=array(
            "cities"=>$this->em->getAllCities()
        );
        return $this->load->view("manager/signup",$temp);
    }



    public function insertSignup()
    {
        $img=$_FILES['fup']["name"];
        copy($_FILES['fup']['tmp_name'],"C:/wamp64/www/evently/resources/shared/images/".$img);
        $data=array(
            "UserName"=>$this->input->post('txtUname'),
            "Password"=>$this->input->post('txtPwd'),
            "EmailID"=>$this->input->post('txtEmail'),
            "ContactNumber"=>$this->input->post('txtContact'),
            "ProfilePic"=>$img,
            "CityID"=>$this->input->post('city')
        );

        $this->em->insertEventManager($data);
        redirect("user/homec/");
    }
}
?>