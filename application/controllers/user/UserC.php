<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model("user/UserM","um");
    }
    public function index() 
    {
        $this->load->view("user/login");
    }





    public function loadAllUser()
        {
            $temp=array(
                "userData"=>$this->um->getAllUser()
            );
            $this->load->view("admin/disUser",$temp);
        }



    public function login()
    {
        $data=array(
            "username"=>$this->input->post("txtUname"),
            "password"=>$this->input->post("txtPwd")
        );

        $uinfo=$this->um->getLoginInfo($data);
        if(count($uinfo)==0)
        {
            $temp=array(
                "msg"=>"Invalid Username or Password"
            );
            $this->load->view("user/login",$temp);
        }
        else
        {
            $_SESSION['uid']=$uinfo[0]->UserID;
            $_SESSION['uname']=$uinfo[0]->UserName;
            $_SESSION['utype']="user";

            redirect("user/projectC/loadProject");
        }
    }

    public function loadBlank()
    {
        $this->load->view("user/blank");
    }

    public function loadSignup()
    {
        $temp=array(
            "cities"=>$this->um->getAllCities()
        );
        return $this->load->view("user/signup",$temp);
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
            "Description"=>$this->input->post('txtDescription'),
            "CityID"=>$this->input->post('city')
        );

        $this->um->insertUser($data);
        redirect("user/UserC/logout");
    }

    public function managerProfile($id)
    {
        $this->load->model("user/ProjectM","pm");
        $temp=array(
            "profileInfo"=>$this->um->getProfileInfo($id),
            "reviews"=>$this->um->getManagerReview($id),
            "oldProjects"=>$this->pm->getMyProjectsManager($id),
            "myRevi"=>$this->um->getMyTotalReviewOfManager($id),
            "mycomplaints"=>$this->um->getMyComplatins($id)
        );
        // echo "<pre>";
        // echo "ID=$id";
        // print_r($temp["myRevi"]);
        // echo "</pre>";
        // die();
        $this->load->view('user/profile.php',$temp);
    }

    public function postreview($id)
    {
        $data=array(
            "UserID"=>$_SESSION['uid'],
            "EventManagerID"=>$id,
            "Review"=>$this->input->post('review'),
            "Rating"=>$this->input->post('ratings')
        );
        $this->um->insertReview($data);

        redirect("user/userc/managerProfile/$id");

    }

    public function logout()
    {
        session_destroy();
        redirect("user/userc/");
    }


    public function postComplaint($id)
    {
       $data=array(
        "EventManagerID"=>$id,
        "UserID"=>$_SESSION['uid'],
        "Reason"=>$this->input->post("complaint"),
       );
       $this->um->insertComplaint($data);
       redirect("user/userc/managerProfile/$id");
    }
}
?>