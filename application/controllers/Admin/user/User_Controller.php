<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends MY_Controller {
    

    //This  load the nessary model for add add_user 
    //User_Model and User_Controller are needed 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/User_Model');// To do all CRUD opration on user module 
		$this->load->model('group/Group_Model');// To get the user group when add and update user information 
		$this->load->model('employee/Employee_Model');//load employee model
	}


    /*desplay add new  user form */
	public function add_user_form()
	{
		$data['emp_item'] = $this->Employee_Model->get_employee();
		$data['group_item'] = $this->Group_Model->get_group();
		/*call the get_group function from Group_Model and store the resualt on $data['group_item']  variable
		and pass the array to add_new_user view*/
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('user/add_new_user',$data);
		$this->load->view('templates/footer');
	}



    /*display all user */
	public function index()
	{
		$data['user_item'] = $this->User_Model->get_user();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('user/all_user_list',$data);
		$this->load->view('templates/footer');
	}


   /*
     insert new user in to the  user table if the data is properly fullfill the requirement
     the input data validated by form_validation in addision to javascript validation.
   */
	public function crate_user()
	{
		$this->load->helper('form');
		/*validate the data*/
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('username', 'username', 'required|min_length[3]|max_length[100]|is_unique[users.user_username]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[3]|max_length[30]');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('user/add_new_user');
			$this->load->view('templates/footer');
		}
		else
		{   
		    $add_action = array('add_message' => 'Your data added Successfully   !',);
		    $this->session->set_userdata($add_action);

			$this->User_Model->insert_user();//insert the data
			if($_POST['add_list']=='add_list')
			    redirect('user/User_Controller');//return to the list of user
			else if($_POST['add_more']=='add_more') 
				redirect('user/User_Controller/add_user_form');//return to the  add new user form 
		}
	}
    


    public function get_update_user_information($user_id)
    {
    	//$department_id=$this->encrypt->decode($department_id);
        $data['group_item'] = $this->Group_Model->get_group();
		$data['user_item'] = $this->User_Model->get_user_for_update($user_id);
		$data['emp_item'] = $this->Employee_Model->get_employee();
		
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('user/edit_user',$data);
		$this->load->view('templates/footer');
	}




/*insert update information , delte wrong record of data */
	public function insert_update_from($user_id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('username', 'username', 'required|min_length[3]|max_length[100]|xss_clean');
		$password=$this->input->post('password');

		$status=$this->input->post('status');
        if ($status!="") 
            $status='TRUE';
        else
            $status='FALSE';
        //$password=md5($password);

		if($password==''){
		    $data= array( 
    		'user_full_name' => $this->input->post('fullname'),
    		'user_username' => strtolower($this->input->post('username')),
    		'user_group' => $this->input->post('group'),
    		'user_status' => $status,);
    	}
    	else
    	{
    		$data = array( 
    		'user_full_name' => $this->input->post('fullname'),
    		'user_username' => strtolower($this->input->post('username')),
    		'user_password' =>md5($password),
    		'user_group' => $this->input->post('group'),
    		'user_status' => $status,);	
    	}

    	if (!$this->is_unique_edit('users','user_username',$user_id,$this->input->post('username'))) {
	       	  $edit_validation = FALSE;
	       	  $data['error'] = 'This User Name Already Exist';
	     }else{
    	$update_acction = array('update_message' => 'Your data Updated Sessfully  !',);
        $this->session->set_userdata($update_acction);
		$this->db->update('users', $data, array('user_id' => $user_id));
		redirect('user/User_Controller');
		}	
	}


    public function delete($user_id)
    {
	   

		$delete_acction = array('delete_message' => 'Your data deleted   !',);
		$this->session->set_userdata($delete_acction);
		$this->db->delete('users', array('user_id' => $user_id)); 
		redirect('user/User_Controller');
    }


    

    /*get the exist  user name when add new use */
    public function check_username_to_add()
	{ 
		 $name = $this->input->get('username');
		 $query=$this->db->get_where('users', array('user_username' => $name));
		 $number=$query->num_rows();
		 if($number!=0)
		 	echo"<code>This  username exist</code>";
		  else
		  	echo "";
	
	}


	/*get the exist  user name when add edit use */
    public function get_username_edit()
	{ 
		 $name = $this->input->get('username');
		 $exit_user = $this->input->post('exit_user');
		 $query=$this->db->get_where('horizon_users', array('user_username' => $name , 'user_id !=' =>$exit_user));
		 $number=$query->num_rows();
		 if($number!=0)
		 	echo"<code>This  username exist</code>";
		 else
		  	echo "";
	}

public function change_password()
	{
	    if ($_POST){
	        $config = array(
	            array(
	                'field' =>'current_password',
	                'lable' => 'Current Password',
	                'rules'=>'trim|required|min_length[4]'
	            ),
	            array(
	                'field' =>'new_password',
	                'lable' => 'New Password',
	                'rules'=>'trim|required|min_length[6]'
	            ),
	            array(
	                'field' =>'comfirm_new_password',
	                'lable' => 'Comfirm New Password',
	                'rules'=>'trim|required|min_length[6]|matches[new_password]'
	            )
	        );
	        $this->load->library('form_validation');
	        $this->form_validation->set_error_delimiters('<div class="alert alert-danger col-md-offset-3 col-md-6  alert-dismissible"><button type="button" class="close" data-dismiss="alert"  data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                             </button>', '</div>');
	        $this->form_validation->set_rules($config);
	
	        if ($this->form_validation->run() == FALSE){
	             
	            $this->data['errors'] = validation_errors();
	
	        }else {
	            $username = $this->session->userdata('user_username');
	            $old_password = md5($this->input->post('current_password',true));
	            $new_password = md5($this->input->post('new_password',true));
	             
	            $result = $this->User_Model->check_exists($username,$old_password);
	            if (isset($result[0][user_id])){
	                if (!$this->User_Model->change_password($result[0][user_id],$new_password))
	                {
	                    $this->data['errors'] = "There was an error when updateing your password. try again later!";
	                }else{
	                    redirect(base_url().'Login/logout');
	                }
	            }
	        }
	    }
	    parent::load_old_view('user/change_password');
	}
	





}

