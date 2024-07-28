<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ProjectM extends CI_Model
	{

		public function getAllProject($where)
		{

			if(count($where)==0)
				return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where("status",0)->get()->result();
			else
			{
				$ob=$this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where("status",0);

				foreach($where as $k=>$v)
				{
					if($k!='max' && $k!='min')
						$ob->where($k,$v);
					else
					{
						if($k=="min")
							$ob->where("p.Budget >",$v);
						if($k=="max")
							$ob->where("p.Budget <",$v);
					}
				}	
				return $ob->get()->result();
			}
		}


		public function getMyProjects()
		{
			return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where(["status"=>0,"AssignedManagerID"=>$_SESSION['uid']])->get()->result();
		}

		public function getAllProjectUser($uid)
		{
			return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where("u.userid",$uid)->get()->result();
		}

		public function insertProject($data)
		{
			return $this->db->insert("tblproject",$data);
		}

	    public function getAllCategories()
	    {
	        return $this->db->get("tblcategory")->result();

	    }

	    public function getAllCities()
	    {
	        return $this->db->get("tblcity")->result();
	    }

	    public function getAllBids()
	    {
	    	return $this->db->get("tblbid")->result();
	    }

	    public function getAllUser()
	    {
	        return $this->db->get("tbluser")->result();
	    }

	    public function loadProjectById($id)
		{
			return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,u.ProfilePic,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblcity ci","ci.CityID=p.CityID")->join("tbluser u","u.ProfilePic=p.ProfilePic")->where("projectID",$id)->get()->result();
		}

		public function getProjectDetailsById($pid)
		{
			return $this->db->select("p.*,c.CategoryName,u.ProfilePic,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->where("p.projectID",$pid)->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->get()->result();
			
		}

		public function addProjectBis($data)
		{
			return $this->db->insert("tblbid",$data);
		}

		public function getBidsByProjectId($pid)
		{
			return $this->db->select("*")->from("tblbid b")->join("tblevent_manager e","b.EventManagerID=e.EventManagerID")->where("ProjectID",$pid)->get()->result();
		}

		public function deleteBid($id)
		{
			return $this->db->where("BidId",$id)->delete("tblbid");
		}

		public function getMyBids($uid,$pid)
		{
			return $this->db->where(["EventManagerID"=>$uid,"ProjectID"=>$pid])->get("tblbid")->result();
		}

		public function getMyProjectsManager($uid)
		{
			return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->where("AssignedManagerID",$uid)->get()->result();
		}
		
		public function getMyProjectBids($uid)
		{
			return $this->db->select("p.*,c.CategoryName,u.UserName,u.UserID,ci.CityName,b.*")->from("tblproject p")->join("tblcategory c","p.CategoryID=c.CategoryID")->join("tbluser u","u.userid=p.userid")->join("tblCity ci","ci.CityID=p.CityID")->join("tblBid b","b.projectID=p.projectID")->where(["b.EventManagerID"=>$uid,"p.status"=>0])->get()->result();
		}


		public function acceptBid($data,$pid)
		{
			return $this->db->where("projectID",$pid)->update("tblproject",$data);
		}
	}
?> 