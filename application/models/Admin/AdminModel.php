<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model
{

  
      public function __construct()
    {
        parent::__construct();
        $this->_database = $this->db; 
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');

    }

 public function user_login_verification($username, $password)
    {
          

        //$pass = md5($password);
        $pass = $password;

        // die(print_r($pass));
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $username);
        $this->db->where('password', $pass);

        $query = $this->db->get();
       

        if ($query->num_rows() == 1) {
        
            redirect('Admin/AdminController/login');
            } 

            else{
               $sess = array(
                
                'login' => 'TRUE'
                
            );
              $this->session->set_userdata($sess);

                redirect('Admin/AdminController/dashboard');
            }


          
    }


#MAIN CONTENT
        public function get_sister_companies()
    {

        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('company_type', 'Sister Com');
        $query = $this->db->get();
        return $query->result_object();

    }  

    public function get_company($company_id)
    {

        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }   

          public function get_sliders($company_id)
    {

        $this->db->select('*');
        $this->db->from('sliders');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }   
    public function get_sliders_home($company_id)
    {

        $this->db->select('*');
        $this->db->from('sliders');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_array();

    }   

   public function get_main_company()
    {

        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('company_type', 'Main');
        $query = $this->db->get();
        return $query->result_array();

    }   


      public function get_services($company_id, $param = NULL)
    {

        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('company_id', $company_id);
          if ($param != NULL) {
         $this->db->where($param, 'on');
        }
        $query = $this->db->get();
        return $query->result_object();

    }   

       public function get_community_services($company_id, $param = NULL)
    {

        $this->db->select('*');
        $this->db->from('community_services');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }  

    //     public function get_all_community_services()
    // {

    //     $this->db->select('*');
    //     $this->db->from('community_services');
      
    //     $query = $this->db->get();
    //     return $query->result_object();

    // }   


          public function get_teams($company_id)
    {

        $this->db->select('*');
        $this->db->from('portfolios');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }    

            public function get_products($company_id, $param = NULL)
    {

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('company_id', $company_id);
          if ($param != NULL) {
         $this->db->where($param, 'on');
        }
        $query = $this->db->get();
        return $query->result_object();

    }    

        public function get_testimonials($company_id)
    {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }   


          public function get_galleries($param = NULL, $param2 = NULL)
    {

        $this->db->select('*');
        $this->db->from('gallery');
       //$this->db->where('company_id', $company_id);
        $this->db->where('category_id', $param2);
        $query = $this->db->get();
      
        return $query->result_object();

    }   


             public function get_about_us($company_id)
    {

        $this->db->select('*');
        $this->db->from('about_us');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }    


                public function get_contact_us($company_id)
    {

        $this->db->select('*');
        $this->db->from('contact_us');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_object();

    }    


//END MAIN AREA


//COMPANY AREA

      public function get_all_companies()
    {

        $this->db->select('*');
        $this->db->from('company');
        $query = $this->db->get();
        return $query->result_object();

    }

    public function list_admins()
    {

        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_object();

    }



    public function add_company($img_path,$img_path2 , $img_path3)
    {
		  
	  
			
			$data = array(
         
            'company_name' => $this->input->post('company_name'),
            'company_type' => $this->input->post('company_type'),
            'logo_url' => $img_path,
            'slogan_bg_image_url' => $img_path2,
            'services_bg_image_url' => $img_path3,
            'slogan' => $this->input->post('slogan'),
            'visiblity' => $this->input->post('visiblity'),
            'created_by' => '1',
            'created_at' =>  date("Y-m-d h:i:sa")
        );

		//die(print_r($data));
     $this->db->insert('company', $data);
    }

  

    public function edit_company($company_id)
    {

        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->result_array();

    }


public function update_company($company_id, $img_path = NULL, $img_path2 = NULL , $img_path3 = NULL , $up_1 = NULL , $up_2 = NULL , $up_3 = NULL)
    {

  

        if (!empty($up_1) && empty($up_2) && empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                'logo_url' => $img_path,
                // 'slogan_bg_image_url' => $img_path2,
            
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

        
        if (empty($up_1) && !empty($up_2) && $up_3){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                // 'logo_url' => $img_path,
                'slogan_bg_image_url' => $img_path2,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

        
        if (!empty($up_1) && !empty($up_2) && !empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                'logo_url' => $img_path,
                'slogan_bg_image_url' => $img_path2,
                'services_bg_image_url' => $img_path3,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

        if (!empty($up_1) && empty($up_2) && !empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                'logo_url' => $img_path,
                //'slogan_bg_image_url' => $img_path2,
                'services_bg_image_url' => $img_path3,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

        if (empty($up_1) && !empty($up_2) && !empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                //'logo_url' => $img_path,
                'slogan_bg_image_url' => $img_path2,
                'services_bg_image_url' => $img_path3,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

            if (empty($up_1) && empty($up_2) && !empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                //'logo_url' => $img_path,
                //'slogan_bg_image_url' => $img_path2,
                'services_bg_image_url' => $img_path3,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }

        if (empty($up_1) && empty($up_2) && empty($up_3)){
            $data = array(
         
                'company_name' => $this->input->post('company_name'),
                'company_type' => $this->input->post('company_type'),
                // 'logo_url' => $img_path,
                // 'slogan_bg_image_url' => $img_path2,
                'slogan' => $this->input->post('slogan'),
                'visiblity' => $this->input->post('visiblity'),
                'updated_by' => '1',
                'updated_at' => date("Y-m-d h:i:sa")
            );
            $this->db->where('company_id', $company_id);
            $this->db->update('company', $data);
        }
   

		
      
    }

    public function delete_company($id){

        $this->db->delete('company', array('company_id' => $id));
    }

//END COMPANY AREA

//SERVICES AREA

      public function get_all_services()
    {

        $this->db->select('*');
        $this->db->from('services');
        $query = $this->db->get();
        return $query->result_object();

    }



    public function add_service($img_path)
    {
          
      
            
            $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
             'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),
            'created_by' => '1',
            'created_at' =>  date("Y-m-d h:i:sa")
        );

        //die(print_r($data));
     $this->db->insert('services', $data);
    }

  

    public function edit_service($service_id)
    {

        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('service_id', $service_id);
        $query = $this->db->get();
        return $query->result_array();

    }


public function update_service($service_id, $img_path , $up_1)
    {

      if(!empty($up_1)) {  
     $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
             'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );
    }
    else {
        $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            //'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
             'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );  
    }
        
       $this->db->where('service_id', $service_id);
        $this->db->update('services', $data);
    }

    public function delete_service($id){

        $this->db->delete('service', array('service_id' => $id));
    }

//END SERVICES AREA

//COMMMUNITY SERVICES AREA
   public function get_all_community_services()
    {

        $this->db->select('*');
        $this->db->from('community_services');
        $query = $this->db->get();
        return $query->result_object();

    }



    public function add_community_service($img_path)
    {
          
      
            
            $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'created_by' => '1',
            'created_at' =>  date("Y-m-d h:i:sa")
        );

        //die(print_r($data));
     $this->db->insert('community_services', $data);
    }

  

    public function edit_community_services($community_service_id)
    {

        $this->db->select('*');
        $this->db->from('community_services');
        $this->db->where('community_service_id', $community_service_id);
        $query = $this->db->get();
        return $query->result_array();

    }


public function update_community_services($community_service_id, $img_path , $up_1)
    {

      if(!empty($up_1)) {  
     $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );
    }
    else {
        $data = array(
         
            'title' => $this->input->post('title'),
            'company_id' => $this->input->post('company_id'),
            //'image_url' => $img_path,
            //'logo_url' => $this->input->post('client_contact_full_name', true),
            'description' => $this->input->post('description'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' => date("Y-m-d h:i:sa")
        );  
    }
        
       $this->db->where('community_service_id', $community_service_id);
        $this->db->update('community_services', $data);
    }

    public function delete_community_service($id){

        $this->db->delete('community_service', array('community_service_id' => $id));
    }
//END COMMUNITY SERVICES AREA    

//PRODUCTS AREA

public function get_all_products()
{

    $this->db->select('*');
    $this->db->from('products');
    $query = $this->db->get();
    return $query->result_object();

}



public function add_product($img_path)
{
      
  
        
        $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'image_url' => $img_path,
        'description' => $this->input->post('description'),
        'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),

        'visiblity' => $this->input->post('visiblity'),
        'created_by' => '1',
        'created_at' =>  date("Y-m-d h:i:sa")
    );

    //die(print_r($data));
 $this->db->insert('products', $data);
}



public function edit_product($product_id)
{

    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('product_id', $product_id);
    $query = $this->db->get();
    return $query->result_array();

}


public function update_product($product_id, $path , $up_1)
{
    if(!empty($up_1)) {

 $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'image_url' => $path,
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
         'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );

}
else{

    $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        //'image_url' => $path,
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
         'local' => $this->input->post('local'),
        'import' => $this->input->post('import'),
        'export' => $this->input->post('export'),
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );

}
   $this->db->where('product_id', $product_id);
    $this->db->update('products', $data);
}

public function delete_product($id){

    $this->db->delete('product', array('product_id' => $id));
}

//END SERVICES AREA

//ABOUT US AREA

public function get_all_about_us()
{

    $this->db->select('*');
    $this->db->from('about_us');
    $query = $this->db->get();
    return $query->result_object();

}



public function add_about_us($img_path)
{
      
  
        
        $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'image_url' => $img_path,
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'created_by' => '1',
        'created_at' =>  date("Y-m-d h:i:sa")
    );

    //die(print_r($data));
 $this->db->insert('about_us', $data);
}



public function edit_about_us($about_us_id)
{

    $this->db->select('*');
    $this->db->from('about_us');
    $this->db->where('about_us_id', $about_us_id);
    $query = $this->db->get();
    return $query->result_array();

}


public function edit_admin($admin_id)
{

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('user_id', $admin_id);
    $query = $this->db->get();
    return $query->result_array();

}


public function update_about_us($about_us_id, $path, $up_1)
{
if(!empty($up_1)){

 $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'image_url' => $path,
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );

}
else{
    $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
 //       'image_url' => $path,
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );
}
   $this->db->where('about_us_id', $about_us_id);
    $this->db->update('about_us', $data);
}

public function delete_about_us($id){

    $this->db->delete('about_us', array('about_us_id' => $id));
}

//END ABOUT US AREA

  
  //ABOUT US AREA

public function get_all_contact_us()
{

    $this->db->select('*');
    $this->db->from('contact_us');
    $query = $this->db->get();
    return $query->result_object();

}



public function add_contact_us($img_path)
{
      
  
        
        $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'image_url' => $img_path,
        'phone_office_one' => $this->input->post('phone_office_one'),
        'phone_office_two' => $this->input->post('phone_office_two'),
        'email_one' => $this->input->post('email_one'),
        'facebook' => $this->input->post('facebook'),
        'twitter' => $this->input->post('twitter'),
        'linkedin' => $this->input->post('linkedin'),
        'dribble' => $this->input->post('dribble'),
        'skype' => $this->input->post('skype'),
        'sitemap' => $this->input->post('sitemap'),
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'created_by' => '1',
        'created_at' =>  date("Y-m-d h:i:sa")
    );

    //die(print_r($data));
 $this->db->insert('contact_us', $data);
}



public function edit_contact_us($contact_us_id)
{

    $this->db->select('*');
    $this->db->from('contact_us');
    $this->db->where('contact_us_id', $contact_us_id);
    $query = $this->db->get();
    return $query->result_array();

}


public function update_contact_us($contact_us_id, $img_path , $up_1)
{
if(!empty($up_1)){

 $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'phone_office_one' => $this->input->post('phone_office_one'),
        'phone_office_two' => $this->input->post('phone_office_two'),
        'email_one' => $this->input->post('email_one'),
        'facebook' => $this->input->post('facebook'),
        'twitter' => $this->input->post('twitter'),
        'linkedin' => $this->input->post('linkedin'),
        'dribble' => $this->input->post('dribble'),
        'skype' => $this->input->post('skype'),
        'sitemap' => $this->input->post('sitemap'),
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'image_url' => $img_path,
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );

}

else
{
    $data = array(
     
        'title' => $this->input->post('title'),
        'company_id' => $this->input->post('company_id'),
        'phone_office_one' => $this->input->post('phone_office_one'),
        'phone_office_two' => $this->input->post('phone_office_two'),
        'email_one' => $this->input->post('email_one'),
        'facebook' => $this->input->post('facebook'),
        'twitter' => $this->input->post('twitter'),
        'linkedin' => $this->input->post('linkedin'),
        'dribble' => $this->input->post('dribble'),
        'skype' => $this->input->post('skype'),
        'sitemap' => $this->input->post('sitemap'),
        'description' => $this->input->post('description'),
        'visiblity' => $this->input->post('visiblity'),
        'image_url' => $img_path,
        'updated_by' => '1',
        'updated_at' => date("Y-m-d h:i:sa")
    );

}   
   $this->db->where('contact_us_id', $contact_us_id);
    $this->db->update('contact_us', $data);
}

public function delete_contact_us($id){

    $this->db->delete('contact_us', array('about_us_id' => $id));
}

//END CONTACT US AREA



 //TEAMS AREA

 public function get_all_teams()
 {
 
     $this->db->select('*');
     $this->db->from('portfolios');
     $query = $this->db->get();
     return $query->result_object();
 
 }
 
 
 
 public function add_team($img_path)
 {
       
   
         
         $data = array(
      
         'name_of_member' => $this->input->post('name_of_member'),
         'company_id' => $this->input->post('company_id'),
         'image_url' => $img_path,
         'phone_number' => $this->input->post('phone_number'),
         'designation' => $this->input->post('designation'),
         'email' => $this->input->post('email'),
         'job_description' => $this->input->post('job_description'),
         'visiblity' => $this->input->post('visiblity'),
         'created_by' => '1',
         'created_at' =>  date("Y-m-d h:i:sa")
     );
 
     //die(print_r($data));
  $this->db->insert('portfolios', $data);
 }
 
 
 
 public function edit_team($team_id)
 {
 
     $this->db->select('*');
     $this->db->from('portfolios');
     $this->db->where('portfolio_id', $team_id);
     $query = $this->db->get();
     return $query->result_array();
 
 }
 
 
 public function update_team($team_id, $path, $up_1)
 {

    if(!empty($up_1)){
 
  $data = array(
      
    'name_of_member' => $this->input->post('name_of_member'),
    'company_id' => $this->input->post('company_id'),
    'image_url' => $path,
    
    'phone_number' => $this->input->post('phone_number'),
    'designation' => $this->input->post('designation'),
    'email' => $this->input->post('email'),
    'job_description' => $this->input->post('job_description'),
    'visiblity' => $this->input->post('visiblity'),
    'updated_by' => '1',
    'updated_at' =>  date("Y-m-d h:i:sa")
     );
    }

    else{
        $data = array(
      
            'name_of_member' => $this->input->post('name_of_member'),
            'company_id' => $this->input->post('company_id'),
            //'image_url' => $path,
            
            'phone_number' => $this->input->post('phone_number'),
            'designation' => $this->input->post('designation'),
            'email' => $this->input->post('email'),
            'job_description' => $this->input->post('job_description'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' =>  date("Y-m-d h:i:sa")
             );
    }
     
    $this->db->where('portfolio_id', $team_id);
     $this->db->update('portfolios', $data);
 }
 

 
 public function update_admin($admin_id, $path , $cp = NULL , $up_1)
 {
 
if(!empty($up_1)) {

    if($cp != NULL) {
        $data = array(
      
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('new_password')),
            'image_url' => $path,
            
            //'username' => $this->input->post('username'),
          
             );
           
    }

    else{
        $data = array(
      
            'email' => $this->input->post('email'),
           'image_url' => $path,
            
            //'username' => $this->input->post('username'),
            
             );

          
    }
}

else{
    if(!empty($up_1)) {

        if($cp != NULL) {
            $data = array(
          
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('new_password')),
            //    'image_url' => $path,
                
                //'username' => $this->input->post('username'),
              
                 );
               
        }
    
        else{
            $data = array(
          
                'email' => $this->input->post('email'),
              // 'image_url' => $path,
                
                //'username' => $this->input->post('username'),
                
                 );
    
              
        }
    }
}
 
     
    $this->db->where('user_id', $admin_id);
     $this->db->update('users', $data);
 }
 
 public function delete_team($id){
 
     $this->db->delete('portfolios', array('portfolio_id' => $id));
 }
 
 //END CONTACT US AREA


 
 //Articles AREA

 public function get_all_home_page_articles()
 {
 
     $this->db->select('*');
     $this->db->from('home_page_articles');
     $query = $this->db->get();
     return $query->result_object();
 
 }
 public function get_paginated_articles($limit, $offset = 1)
 {

     $this->db->select('*');
     $this->db->from('home_page_articles');
    
     $this->db->limit($limit);
     $this->db->offset($offset);

     $query = $this->db->get();
     return $query->result_object();
 }


  public function get_paginated_community_services($limit, $offset = 1)
 {

     $this->db->select('*');
     $this->db->from('community_services');
    
     $this->db->limit($limit);
     $this->db->offset($offset);

     $query = $this->db->get();
     return $query->result_object();
 }
 
 public function get_archives()
 {

     $this->db->select('*');
     $this->db->distinct();
     $this->db->from('home_page_articles');
     $this->db->order_by("created_at", "desc"); 


     $query = $this->db->get();
     return $query->result_object();
 }
 
 
 public function add_home_page_article($img_path)
 {
       
   
         
         $data = array(
      
         'title' => $this->input->post('title'),
         'content' => $this->input->post('content'),
         'image_url' => $img_path,
         
         'visiblity' => $this->input->post('visiblity'),
         'created_by' => '1',
         'created_at' =>  date("Y-m-d h:i:sa")
     );
 
     //die(print_r($data));
  $this->db->insert('home_page_articles', $data);
 }
 
 
 
 public function edit_home_page_articles($article_id)
 {
 
     $this->db->select('*');
     $this->db->from('home_page_articles');
     $this->db->where('article_id', $article_id);
     $query = $this->db->get();
     return $query->result_array();
 
 }
 public function get_article_detail($article_id)
 {
 
     $this->db->select('*');
     $this->db->from('home_page_articles');
     $this->db->where('article_id', $article_id);
     $query = $this->db->get();
     return $query->result_object();
 
 }

 public function search_article($search_term)
 {
 
     $this->db->select('*');
     $this->db->from('home_page_articles');
     $this->db->or_like('title', $search_term);
     $this->db->or_like('content', $search_term);
     $query = $this->db->get();
     return $query->result_object();
 
 }
 
 public function update_home_page_articles($article_id, $path, $up_1)
 {
    //die(print_r($path));
    if(!empty($up_1)){
  $data = array(
      
    'title' => $this->input->post('title'),
   'content' => $this->input->post('content'),
    'visiblity' => $this->input->post('visiblity'),
    'updated_by' => '1',
    'image_url' => $path,
    'updated_at' =>  date("Y-m-d h:i:sa")
     );
    }
     else{
        $data = array(
      
            'title' => $this->input->post('title'),
           'content' => $this->input->post('content'),
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
         //   'image_url' => $path,
            'updated_at' =>  date("Y-m-d h:i:sa")
             );
     }
 
     
    $this->db->where('article_id', $article_id);
     $this->db->update('home_page_articles', $data);
 }
 
 public function delete_articles($id){
 
     $this->db->delete('portfolios', array('portfolio_id' => $id));
 }
 
 //END ARTICLES US AREA


  //TESTIMONIALS AREA

  public function get_all_testimonials()
  {
  
      $this->db->select('*');
      $this->db->from('testimonials');

      $query = $this->db->get();
      return $query->result_object();
  
  }
  
  
  
  public function add_testimonial($img_path)
  {
        
    
          
          $data = array(
       
          'title' => $this->input->post('title'),
          'testimony_from' => $this->input->post('testimony_from'),
          'description' => $this->input->post('description'),
          'image_url' => $img_path,
          'company_id' => $this->input->post('company_id'),
          
          'visiblity' => $this->input->post('visiblity'),
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
  
   //  die(print_r($data));
   $this->db->insert('testimonials', $data);
  }
  
  
  
  public function edit_testimonial($testimonial_id)
  {
  
      $this->db->select('*');
      $this->db->from('testimonials');
      $this->db->where('testimony_id', $testimonial_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
  
  public function update_testimonial($testimonial_id, $path)
  {
    ///die(print_r($this->input->post('visiblity')));
  
  if(!empty($up_1)){
    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'company_id' => $this->input->post('company_id'),
       'testimony_from' => $this->input->post('testimony_from'),
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'image_url' => $path,
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }

  else{

    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'company_id' => $this->input->post('company_id'),
       'testimony_from' => $this->input->post('testimony_from'),
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
       // 'image_url' => $path,
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }
  
     //die(print_r($data)); 

     $this->db->where('testimony_id', $testimonial_id);
      $this->db->update('testimonials', $data);
  }
  
  public function delete_testimonials($id){
  
      $this->db->delete('portfolios', array('portfolio_id' => $id));
  }
  
  //END TESTIMONIALS US AREA



    //GALLERIES AREA

  public function get_all_galleries()
  {
  
      $this->db->select('*');
      $this->db->from('gallery');
      $query = $this->db->get();
      return $query->result_object();
  
  }

  public function get_all_categories()
  {
  
      $this->db->select('*');
      $this->db->from('gallery_category');
      $query = $this->db->get();
      return $query->result_object();
  
  }
  
  
  
  public function add_gallery($img_path)
  {
        
    
          
          $data = array(
       
          'title' => $this->input->post('title'),
         
          'description' => $this->input->post('description'),
          'image_url' => $img_path,
          'company_id' => $this->input->post('company_id'),
          'category_id' => $this->input->post('category_id'),
          
          'visiblity' => $this->input->post('visiblity'),
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
      $this->db->insert('gallery', $data);
    }

    public function update_gallery($gallery_id, $img_path , $up_1)
    {
          
      
    if(!empty($up_1)) {
                
        $data = array(
         
            'title' => $this->input->post('title'),
           
            'description' => $this->input->post('description'),
            'image_url' => $img_path,
            'company_id' => $this->input->post('company_id'),
            'category_id' => $this->input->post('category_id'),
            
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' =>  date("Y-m-d h:i:sa")
        );
    }

    else{
                
        $data = array(
         
            'title' => $this->input->post('title'),
           
            'description' => $this->input->post('description'),
           // 'image_url' => $img_path,
            'company_id' => $this->input->post('company_id'),
            'category_id' => $this->input->post('category_id'),
            
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' =>  date("Y-m-d h:i:sa")
        );
    }
        $this->db->where('gallery_id', $gallery_id);
      $this->db->update('gallery', $data);
      }
      public function add_category()
  {
        
    
          
          $data = array(
       
          'category_name' => $this->input->post('category_name'),
         
          
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
   $this->db->insert('gallery_category', $data);
  }
  
  
  
  public function edit_gallery($gallery_id)
  {
  
      $this->db->select('*');
      $this->db->from('gallery');
      $this->db->where('gallery_id', $gallery_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }

  public function edit_categories($category_id)
  {
  
      $this->db->select('*');
      $this->db->from('gallery_category');
      $this->db->where('category_id', $category_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
  
  public function update_category($category_id, $path)
  {
  
   $data = array(
       
     'category_name' => $this->input->post('category_name'),
  
    
      );
  
      

     $this->db->where('category_id', $category_id);
      $this->db->update('gallery_category', $data);
  }
  
  public function delete_galleries($id){
  
      $this->db->delete('gallery_id', array('gallery_id' => $id));
  }
  public function delete_categories($id){
  
    $this->db->delete('category_id', array('category_id' => $id));
}
  
  //END GALLERIES US AREA


  //SLIDERS AREA

  public function get_all_sliders()
  {
  
      $this->db->select('*');
      $this->db->from('sliders');
      $query = $this->db->get();
      return $query->result_object();
  
  }
  
  
  
  public function add_slider($img_path)
  {
        
    
          
          $data = array(
       
          'title' => $this->input->post('title'),
         
          'description' => $this->input->post('description'),
          'image_url' => $img_path,
          'company_id' => $this->input->post('company_id'),
          
          'visiblity' => $this->input->post('visiblity'),
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
  
     
   $this->db->insert('sliders', $data);
  }
  
  
  
  public function edit_slider($slider_id)
  {
  
      $this->db->select('*');
      $this->db->from('sliders');
      $this->db->where('slider_id', $slider_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
  
  public function update_slider($slider_id, $path , $up_1)
  {
  
  if(!empty($up_1)){
    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'company_id' => $this->input->post('company_id'),
       'image_url' => $path,
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }
  
  else{
    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'company_id' => $this->input->post('company_id'),
      // 'image_url' => $path,
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }
      

     $this->db->where('slider_id', $slider_id);
      $this->db->update('sliders', $data);
  }
  
  public function delete_sliders($id){
  
      $this->db->delete('slider_id', array('gallery_id' => $id));
  }
  
  //END GALLERIES US AREA


   public function save_contact_form()
  {
        
    
          
          $data = array(
       
          'full_name' => $this->input->post('full_name'),
          'email' => $this->input->post('email'),
          'phone_number' => $this->input->post('phone_number'),
          'content' => $this->input->post('content'),
          'company_id' => '1',
        
      );
  
     
   $this->db->insert('contact_form', $data);
  }


   //SLIDERS AREA

  public function get_all_pages()
  {
  
      $this->db->select('*');
      $this->db->from('pages');
      $query = $this->db->get();
      return $query->result_object();
  
  }

   public function get_all_pages_list()
  {
  
      $this->db->select('*');
      $this->db->from('pages');
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
   public function get_page2($page_id)
  {
  
      $this->db->select('*');
      $this->db->from('pages');
      $this->db->where('page_id', $page_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
  
  public function get_page_contents($page_id)
  {
  
      $this->db->select('*');
      $this->db->from('page_contents');
      $this->db->where('page_id', $page_id);
      $query = $this->db->get();
      return $query->result_object();
  
  }
   public function get_page_contents2($page_id)
  {
  
      $this->db->select('*');
      $this->db->from('page_contents');
      $this->db->where('page_id', $page_id);
      $query = $this->db->get();
      return $query->result_object();
  
  }



  public function get_page($page_id)
  {
  
      $this->db->select('*');
      $this->db->from('pages');
      $this->db->where('page_id', $page_id);
      $query = $this->db->get();
      return $query->result_object();
  
  }
   
  public function add_page($img_path)
  {
        
    
          
          $data = array(
            'page_label' => $this->input->post('page_label'),
       
          'title' => $this->input->post('title'),
          'page_type' => $this->input->post('page_type'),
         
          'description' => $this->input->post('description'),
          'image_url' => $img_path,
          
          
          'visiblity' => $this->input->post('visiblity'),
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
  
    // die(print_r($data));
   $this->db->insert('pages', $data);
  }

  public function add_page_content($img_path)
  {
        
    
          
          $data = array(
            'page_id' => $this->input->post('page_id'),
       
          'title' => $this->input->post('title'),
         
          'description' => $this->input->post('description'),
          'image_url' => $img_path,
          
          
          'visiblity' => $this->input->post('visiblity'),
          'created_by' => '1',
          'created_at' =>  date("Y-m-d h:i:sa")
      );
  
    // die(print_r($data));
   $this->db->insert('page_contents', $data);
  }
  
  
  
  public function edit_page($page_id)
  {
  
      $this->db->select('*');
      $this->db->from('pages');
      $this->db->where('page_id', $page_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }


  public function edit_page_content($content_id)
  {
  
      $this->db->select('*');
      $this->db->from('page_contents');
      $this->db->where('content_id', $content_id);
      $query = $this->db->get();
      return $query->result_array();
  
  }
  
  
  public function update_page($page_id, $path ,$up_1)
  {
  
  if(!empty($up_1)){
    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'page_label' => $this->input->post('page_label'),
       'page_type' => $this->input->post('page_type'),
       'image_url' => $path,
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }

  else{
    $data = array(
       
        'title' => $this->input->post('title'),
       'description' => $this->input->post('description'),
       'page_label' => $this->input->post('page_label'),
       'page_type' => $this->input->post('page_type'),
       //'image_url' => $path,
        'visiblity' => $this->input->post('visiblity'),
        'updated_by' => '1',
        'updated_at' =>  date("Y-m-d h:i:sa")
         );
  }
  
      

     $this->db->where('page_id', $page_id);
      $this->db->update('pages', $data);
  }

   public function update_page_content($content_id, $path , $up_1)
  {

    if(!empty($up_1)) {
        $data = array(
       
            'title' => $this->input->post('title'),
           'description' => $this->input->post('description'),
           'page_id' => $this->input->post('page_id'),
           'image_url' => $path,
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' =>  date("Y-m-d h:i:sa")
             );
    }

    else{
        $data = array(
       
            'title' => $this->input->post('title'),
           'description' => $this->input->post('description'),
           'page_id' => $this->input->post('page_id'),
           //'image_url' => $path,
            'visiblity' => $this->input->post('visiblity'),
            'updated_by' => '1',
            'updated_at' =>  date("Y-m-d h:i:sa")
             );
    }
  
 
  
    //  die(print_r($data));

     $this->db->where('content_id', $content_id);
      $this->db->update('page_contents', $data);
  }
  
  public function delete($table, $column, $id){
  
      $this->db->delete($table, array($column => $id));
  }
  
  //END GALLERIES US AREA
}

    

    