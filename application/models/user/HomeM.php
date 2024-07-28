<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeM extends CI_Model
{
   public function getAllProjects()
   {
		return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where("status",0)->order_by("ProjectID","desc")->get()->result();
   		
   }

   public function getAllManagers()
   {
   		return $this->db->get("tblevent_manager")->result();
   }

   public function getAllUsers()
   {
   		return $this->db->get("tbluser")->result();
   }

}
?>