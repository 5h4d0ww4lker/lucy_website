<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends MY_Model {

	public function __construct()
	{
		$this->load->database();
	}


	public function get_user()
	{
		$query = $this->db->get('users');
		return $query->result_array();
		
    }
    


    //user insertion function 
    public function insert_user()
    {
    	$this->load->helper('url');
        $password=$this->input->post('password');
        $password=md5($password);
        $status=$this->input->post('status');
        if ($status!="") {
            $status=$this->input->post('status');
        }
        else
            $status='false';

    	$data = array( 
    		'user_full_name' => $this->input->post('fullname'),
    		'user_username' => strtolower($this->input->post('username')),
    		'user_password' =>$password ,
    		'user_group' => $this->input->post('group'),
    		'user_status' => $status,
    	 );
    	 $this->db->insert('users', $data);
    }
     


    /*get the all data of selected department in order to delete or update*/
    public function get_user_for_update($user_id)
	{
		$query=$this->db->get_where('users', array('user_id' => $user_id));
		return $query->result_array();
		
    }
    public function check_exists($username,$old_password){
        $query=$this->db->get_where('users', array('user_username' => $username,'user_password'=>$old_password));
        return $query->result_array();
    }
    
    public function change_password($id,$new_password){
        $data = array('user_password'=>$new_password);
    
        $this->db->where(array('user_id' => $id));
        return $this->db->update('users',$data);
    }


}

	

	