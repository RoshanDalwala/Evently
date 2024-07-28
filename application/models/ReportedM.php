<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportedM extends CI_Model
{
	public function getAllReportedManagers()
	{
		return $this->db->select("rem.*,u.UserName as uname,em.UserName as euname")->from("tblreported_event_manager rem")->join("tblevent_manager em","rem.EventManagerID=em.EventManagerID")->join("tbluser u","rem.UserID=u.UserID")->get()->result();
	}

	public function changeReportStatus($id)
	{
		return $this->db->set("status",1)->where("ReportedEventManagerID",$id)->update("tblreported_event_manager");
	}
	
	public function blockManager($id)
	{
		return $this->db->set("status",1)->where("EventManagerID",$id)->update("tblevent_manager");
	}

	public function deleteRequest($rid)
	{
		return $this->db->where("ReportedEventManagerID",$rid)->delete("tblreported_event_manager");
	}
}
?>