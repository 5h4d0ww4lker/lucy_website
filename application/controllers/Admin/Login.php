<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_Model');
    }
	 
///// display login  page defualt //////////
	public function index()
	{
		$this->load->view('login');
	}
//end /////////



/*
login verivication 

*/
	public function user_login_verification(){

     	$username= $this->input->post('username');
        $password= $this->input->post('password');

        $config=array(
            array(
        	    'field'=>'username',
                'label'=>'Username',
                'rules'=>'trim|required'),
            array(
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required'
            ));

        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
            $this->load->view('login');
        else
            $this->Login_Model->user_login_verification($username,$password);
        
    }


    //logout function this function enabled the user logout from the system
    //all session and token are deid or destroyed for security 
    public function logout()
    {    
        $this->session->unset_userdata('login_in');
        $this->session->userdata('login_in','FALSE');
        $this->session->sess_destroy();
        redirect('dashbord/Dashbord_Controller');
    }





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */