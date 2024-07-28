<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class CityM extends CI_Model
	{
		public function getAllState()
		{
			return $this->db->get("tblState")->result();
		}
		public function getAllSubState()
		{
			return $this->db->get("tblsubstate")->result();
		}

		public function insertState($data)
		{
			return $this->db->insert("tblstate",$data);
		}

		public function deletState($id)
		{
			return $this->db->where("StateID",$id)->delete("tblstate");
		} 
		
		public function getAllCity()
		{
			return $this->db->select("*")->from("tblstate s")->join("tblcity c","c.StateID=s.StateID")->get()->result();
		}
		
		public function getAllSubCity()
		{
			return $this->db->get("tblsubcity")->result();
		}

		public function insertCity($data)
		{
			return $this->db->insert("tblcity",$data);
		}

		public function deletCity($id)
		{
			return $this->db->where("CityID",$id)->delete("tblcity");
		} 
	}
?>