<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ManagerM extends CI_Model
{
    public function getLoginInfo($data)
    {
        return $this->db->where($data)->get("tblevent_manager")->result();
    }

    public function getAllManager()
    {
        return $this->db->select("e.*,c.CityName")->from("tblevent_manager e")->join("tblcity c","c.cityid=e.CityID")->get()->result();
    }

    public function insertEventManager($data)
	{
		return $this->db->insert("tblevent_manager",$data);
	}

    public function getAllCities()
    {
        return  $this->db->get("tblCity")->result();
    }
}
?> 