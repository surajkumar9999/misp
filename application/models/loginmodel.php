<?php
class loginmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
		$q=$this->db->where(['username'=>$username,'password'=>$password])->get('users');
		if($q->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>