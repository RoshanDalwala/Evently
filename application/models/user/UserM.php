<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserM extends CI_Model
{
    public function getLoginInfo($data)
    {
        return $this->db->where($data)->get("tbluser")->result();
    }

    public function getAllUser()
    {
        return $this->db->select("u.*,c.CityName")->from("tbluser u")->join("tblCity c","c.cityid=u.cityid")->get()->result();
    }

    public function insertUser($data)
	{
		return $this->db->insert("tbluser",$data);
	}

    public function getAllCities()
    {
        return  $this->db->get("tblCity")->result();
    }

    public function getProfileInfo($id)
    {
        return $this->db->select("*")->from("tblevent_manager em")->join("tblcity c","em.cityid=c.cityid")->join("tblstate s","s.stateid=c.stateid")->where("EventManagerID",$id)->get()->result();
    }

    public function getManagerReview($id)
    {
        return $this->db->select("*")->from("tblreview r")->join("tbluser u","u.userid=r.userid")->where(["EventManagerID"=>$id])->get()->result();
    }

    public function insertReview($data)
    {
        return $this->db->insert("tblreview",$data);
    }

    public function getMyTotalReviewOfManager($id)
    {
        $x=["EventManagerID"=>$id,"UserID"=>$_SESSION['uid']];
        return $this->db->where($x)->get("tblreview")->result();
    }

    public function getMyComplatins($id)
    {
        return $this->db->where(["EventManagerID"=>$id,"UserID"=>$_SESSION['uid']])->get("tblreported_event_manager")->result();

    }
    public function insertComplaint($data)
    {
        return $this->db->insert("tblreported_event_manager",$data);
    }
}
?> 