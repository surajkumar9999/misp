<?php
class usermodel extends CI_Model
{
	public function putindb($data)
	{
		$this->db->insert("users",$data);
	}
}

?>