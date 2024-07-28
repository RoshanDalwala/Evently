<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryM extends CI_Model
{ 
	public function getAllCategories()
	{
		return $this->db->get("tblcategory")->result();
	}
	public function getAllSubCategories()
	{
		return $this->db->get("tblsubcategory")->result();
	}

	public function insertCategory($data)
	{
		return $this->db->insert("tblcategory",$data);
	}

	public function deletCategory($id)
	{
		return $this->db->where("CategoryID",$id)->delete("tblcategory");
	}

	public function getCategoryInfoById($id)
	{
		return $this->db->where("CategoryId",$id)->get("tblcategory")->result();
	}

}
?>