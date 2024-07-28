<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_Model
{
	public function getLoginInfo($uname,$pwd)
	{
		return $this->db->where("UserName",$uname)->where("Password",$pwd)->get("tbladmin")->result();

		//return $this->db->where(["UserName"=>$uname,"Password"=>$pwd])->get("tbladmin")->result();

	} 
}
?>