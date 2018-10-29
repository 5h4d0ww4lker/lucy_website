<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

/*------This globallogin model retrive users login information while login*/

class Login_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        //$this->load->controller('dashbord/Dashbord_Controller');
        $this->load->database();
        $this->load->library('session');
    }


    ////// User Login veridication //////////////////////////////////////////////////////////
    public function user_login_verification($username, $password)
    {
        $password = md5($password);// md5 hash the user password

        // check the user  username and password on horizon user table 
        // if the user exist resalt row will be one b/c only one user exist with single user name 
        // in other word the username is unique
        $username = strtolower($username);
        $query_user_info = $this->db->get_where('users', array('user_username' => $username, 'user_password' => $password));
        // set sessinon to control the user activity  after login the system
        $sess_array = array();
        $user_privilage = array();
        $user_privilage_tow = array();


        foreach ($query_user_info->result_array() as $row) {
            $user_group_id = $row['user_group'];//get user status .user_group/////
            $employee_id = $row['user_full_name'];

            //sesstion when the user log-in to the system///////////////////////
            $uaer_information = array(
                'user_id' => $row['user_id'],
                'user_full_name' => $row['user_full_name'],
                'user_username' => $row['user_username'],
                'user_group' => $row['user_group'],
                'login_in' => 'TRUE',
                'user_group_id' => $user_group_id,
            );
            $this->session->set_userdata($uaer_information);

            $query_select_employee_information = $this->db->get_where('employees', array('employee_c_id' => $employee_id));
            foreach ($query_select_employee_information->result_array() as $value) {
                $employee_information = array(
                    'employee_c_id' => $value['employee_c_id'],
                    'employee_full_name' => $value['employee_full_name'],);
            }

            $this->session->set_userdata($employee_information);

            // select  the user privilage on the ststem .///////////////////////
            $query_select_privilage = $this->db->get_where('user_groups', array('group_id' => $user_group_id));
            foreach ($query_select_privilage->result_array() as $value) {
                $user_privilage = array(
                    'group_name' => $value['group_name'],

                    'add_user' => $value['add_user'],
                    'view_user' => $value['view_user'],
                    'edit_user' => $value['edit_user'],
                    'delete_user' => $value['delete_user'],

                    'add_group' => $value['add_group'],
                    'view_group' => $value['view_group'],
                    'edit_group' => $value['edit_group'],
                    'delete_group' => $value['delete_group'],

                    'add_department' => $value['add_department'],
                    'view_department' => $value['view_department'],
                    'edit_department' => $value['edit_department'],
                    'delete_department' => $value['delete_department'],

                    'add_division' => $value['add_division'],
                    'view_division' => $value['view_division'],
                    'edit_division' => $value['edit_division'],
                    'delete_division' => $value['delete_division'],

                    'add_employee' => $value['add_employee'],
                    'view_employee' => $value['view_employee'],
                    'edit_employee' => $value['edit_employee'],
                    'delete_employee' => $value['delete_employee'],

                    'add_professionals' => $value['add_professionals'],
                    'view_professionals' => $value['view_professionals'],
                    'edit_professionals' => $value['edit_professionals'],
                    'delete_professionals' => $value['delete_professionals'],

                    'add_consultant' => $value['add_consultant'],
                    'view_consultant' => $value['view_consultant'],
                    'edit_consultant' => $value['edit_consultant'],
                    'delete_consultant' => $value['delete_consultant'],

                    'review_consultant' => $value['review_consultant'],
                    'approve_consultant' => $value['approve_consultant'],

                    'add_project' => $value['add_project'],
                    'view_project' => $value['view_project'],
                    'edit_project' => $value['edit_project'],
                    'delete_project' => $value['delete_project'],


                    'add_machinery' => $value['add_machinery'],
                    'view_machinery' => $value['view_machinery'],
                    'edit_machinery' => $value['edit_machinery'],
                    'delete_machinery' => $value['delete_machinery'],

                    'add_contracter' => $value['add_contracter'],
                    'view_contracter' => $value['view_contracter'],
                    'edit_contracter' => $value['edit_contracter'],
                    'delete_contracter' => $value['delete_contracter'],

                    'rivew_contracter' => $value['rivew_contracter'],
                    'view_rivew_contracter' => $value['view_rivew_contracter'],
                    'edit_rivew_contracter' => $value['edit_rivew_contracter'],
                    'delete_rivew_contracter' => $value['delete_rivew_contracter'],

                    'approve_contracter' => $value['approve_contracter'],
                    'view_approve_contracter' => $value['view_approve_contracter'],
                    'edit_approve_contracter' => $value['edit_approve_contracter'],
                    'delete_approve_contracter' => $value['delete_approve_contracter'],


                    'add_design' => $value['add_design'],
                    'view_design' => $value['view_design'],
                    'edit_design' => $value['edit_design'],
                    'delete_design' => $value['delete_design'],


                );
            }//end  of ener for loop////////////////////////////////////////////


            $this->session->set_userdata($user_privilage_tow);

            $this->session->set_userdata($user_privilage);

        }//end of outer for loop////////////////////////////////////////////////


        if ($query_user_info->num_rows() == 1) {
            $row = $query_user_info->row();
            $user_status = $row->user_status;
            if ($user_status == 'f' || $this->session->userdata('login_in') != 'TRUE' || $this->session->userdata('login_in') == 'FALSE') {
                $this->form_validation->set_rules('Invalid username or password');
                $this->load->view('login');
            } else{

                redirect('home/Home_Controller/landing');
            }

        } else
            $this->load->view('login');
    }

    //////////////////// end of login verification ////////////////////////////
    public function user_previlage()
    {


    }

}

