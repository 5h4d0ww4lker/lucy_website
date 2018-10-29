<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

 /*  public function __construct() {
        parent::__construct();
        $this->load->helper('url');
       // $this->load->model('Admin/AdminModel');

       
    } */
	
	public function __construct()
	{
		parent::__construct();
		 $this->load->helper('url');
    $this->load->library('session');
     $this->load->database();
		$this->load->model('Admin/AdminModel');
	}
   

  public function index()
  {
        $this->load->view('Admin/user_management/login');
  
  }


    public function logout()
  {
         $this->session->unset_userdata('login');
        $this->session->userdata('login','FALSE');
        $this->session->sess_destroy();
        $this->load->view('Admin/user_management/login');
  
  }


  public function user_login_verification(){

      $username= $this->input->post('username');
        $password= $this->input->post('password');

    
            $this->AdminModel->user_login_verification($username,$password);
        
    }
    public function dashboard()
  {

if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


    $data['companies'] = $this->AdminModel->get_all_companies();
     $data['sister_companies'] = $this->AdminModel->get_sister_companies();
     $data['services'] = $this->AdminModel->get_all_services();
      $data['teams'] = $this->AdminModel->get_all_teams();
       $data['products'] = $this->AdminModel->get_all_products();
        $data['testimonials'] = $this->AdminModel->get_all_testimonials();
         $data['about_us'] = $this->AdminModel->get_all_about_us();
          $data['contact_us'] = $this->AdminModel->get_all_contact_us();
           $data['galleries'] = $this->AdminModel->get_all_galleries();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/dashboard/dashboard', $data);
         $this->load->view('Admin/shared/footer');
  
  }

#COMPANY AREA

    public function list_companies()
  {

if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/company/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_company()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/company/create');
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_company()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'company';  
      $up_1 = null;
      $up_2 = null;
      $up_3 = nulll;
      if (isset($_FILES['userfile'])){
        $img_path = $this->do_upload($path);
        $up_1 = 'ok';
      }
      if (isset($_FILES['userfile2'])){
        $img_path2 = $this->do_upload2($path);
        $up_2 = 'ok';
      }

       if (isset($_FILES['userfile3'])){
        $img_path3 = $this->do_upload3($path);
        $up_3 = 'ok';
      }

      $this->AdminModel->add_company($img_path,$img_path2, $img_path3);

      $this->session->set_flashdata('success', 'Company Added Successfuly!');
 return redirect('Admin/AdminController/list_companies');
           
        
  
  }

        public function edit_company($company_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $data['companies'] = $this->AdminModel->edit_company($company_id);
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/company/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_company()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

        $company_id = $this->input->post('company_id');
        $path = 'company';  
        $up_1 = null;
        $up_2 = null;
        $up_3 = null;
        $img_path = null;
        $img_path2 = null;
        $img_path3 = null;
   
    if (!empty($_FILES['userfile']['name'])){
        $img_path = $this->do_upload($path);
        $up_1 = 'ok';
    }

    if (!empty($_FILES['userfile2']['name'])){
        $img_path2 = $this->do_upload2($path);
        $up_2 = 'ok';
      }
       if (!empty($_FILES['userfile3']['name'])){
        $img_path3 = $this->do_upload3($path);
        $up_3 = 'ok';
      }


       $this->AdminModel->update_company($company_id, $img_path, $img_path2 , $img_path3 , $up_1, $up_2 , $up_3);
       $this->session->set_flashdata('info', 'Company Updated Successfuly!');
       return redirect('Admin/AdminController/list_companies');

  
  }

        public function delete_company()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/company/delete');
         $this->load->view('Admin/shared/footer');
  
  }


     public function do_upload($path)
    {
       if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


        $config['upload_path'] = './uploads/'.$path;
        $config['allowed_types'] = 'gif|jpg|png|mp4|avi';
        $config['max_size'] = '10000000';
        $config['max_width'] = '1000000';
        $config['max_height'] = '1000000';
        $this->load->library('upload', $config);
        $result=$this->upload->do_upload();
        $img_path='uploads/'.$path.'/'.$this->upload->file_name;
        //die(print_r($this->upload->file_name));
         return $img_path;
  }

  public function do_upload2($path)
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


      $config['upload_path'] = './uploads/'.$path;
      $config['allowed_types'] = 'gif|jpg|png|mp4|avi';
      $config['max_size'] = '10000000';
      $config['max_width'] = '1000000';
      $config['max_height'] = '1000000';
      $this->load->library('upload', $config);
      $result=$this->upload->do_upload2();
      $img_path2='uploads/'.$path.'/'.$this->upload->file_name;
      //die(print_r($this->upload->file_name));
       return $img_path2;
}

  public function do_upload3($path)
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


      $config['upload_path'] = './uploads/'.$path;
      $config['allowed_types'] = 'gif|jpg|png|mp4|avi';
      $config['max_size'] = '10000000';
      $config['max_width'] = '1000000';
      $config['max_height'] = '1000000';
      $this->load->library('upload', $config);
      $result=$this->upload->do_upload3();
      $img_path2='uploads/'.$path.'/'.$this->upload->file_name;
      //die(print_r($this->upload->file_name));
       return $img_path2;
}
#END COMAPNY AREA  

  #SERVICES AREA

  public function list_services()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['services'] = $this->AdminModel->get_all_services();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/service/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/service/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_service()
  {

     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'services';
      $img_path = $this->do_upload($path);
    
      $this->AdminModel->add_service($img_path);
      $this->session->set_flashdata('success', 'Service Added Successfuly!');
    return redirect('Admin/AdminController/list_services');
           
        
  
  }

        public function edit_service($service_id)
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['services'] = $this->AdminModel->edit_service($service_id);

      $company_id = $data['services']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
      $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/service/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $service_id = $this->input->post('service_id');
       $path = 'services';
       $up_1 = null;
       $img_path = null;
      
  
   if (!empty($_FILES['userfile']['name'])){
       $img_path = $this->do_upload($path);
       $up_1 = 'ok';
   }
     // $img_path = $this->do_upload($path);
      $this->AdminModel->update_service($service_id, $img_path , $up_1);
      $this->session->set_flashdata('info', 'Service Updated Successfuly!');
      return redirect('Admin/AdminController/list_services');
  
  }

        public function delete_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/service/delete');
         $this->load->view('Admin/shared/footer');
  
  }



##############

  #END SERVICES AREA

   #PRODUCTS AREA

  public function list_products()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['products'] = $this->AdminModel->get_all_products();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/product/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_product()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar', $data);
         $this->load->view('Admin/product/create');
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_product()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}
//die(print_r($this->input->post()));

      $path = 'product';
      $img_path = $this->do_upload($path);
      $this->AdminModel->add_product($img_path);
      $this->session->set_flashdata('success', 'Product Added Successfuly!');
    return redirect('Admin/AdminController/list_products');
           
        
  
  }

        public function edit_product($product_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['products'] = $this->AdminModel->edit_product($product_id);

      $company_id = $data['products']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
      $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/product/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_product()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $path = 'product';
    $up_1 = null;
    $img_path = null;
   

if (!empty($_FILES['userfile']['name'])){
    $img_path = $this->do_upload($path);
    $up_1 = 'ok';
}
      $product_id = $this->input->post('product_id');
      $this->AdminModel->update_product($product_id, $img_path, $up_1);
      $this->session->set_flashdata('info', 'Product Updated Successfuly!');
      return redirect('Admin/AdminController/list_products');
  
  }

        public function delete_product()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/product/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############

  #END PRODUCTS AREA




   #GALLERIES AREA

  
  public function list_galleries()
  {

if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['galleries'] = $this->AdminModel->get_all_galleries();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/list', $data);
        $this->load->view('Admin/shared/footer');
  
  }

  public function list_categories()
  {

if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['categories'] = $this->AdminModel->get_all_categories();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/category/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


  public function create_gallery()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['categories'] = $this->AdminModel->get_all_categories();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function create_category()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/category/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_gallery()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = 'galleries';  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_gallery($img_path);
      $this->session->set_flashdata('success', 'Gallery Added Successfuly!');
 return redirect('Admin/AdminController/list_galleries');
           
        
  
  }

  public function save_category()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = "none";
      
      $this->AdminModel->add_category($img_path);
      $this->session->set_flashdata('success', 'Gallery Category Added Successfuly!');
 return redirect('Admin/AdminController/list_categories');
           
        
  
  }

        public function edit_gallery($gallery_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['galleries'] = $this->AdminModel->edit_gallery($gallery_id);
      $data['categories'] = $this->AdminModel->get_all_categories();

      $company_id = $data['galleries']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);

      $category_id = $data['galleries']['0']['category_id'];
      $data['category'] = $this->AdminModel->edit_categories($category_id);
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function edit_category($category_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['categories'] = $this->AdminModel->edit_categories($category_id);

     
   
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/category/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_gallery()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'galleries';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
     // die(print_r($img_path));
      $gallery_id = $this->input->post('gallery_id');
      $this->AdminModel->update_gallery($gallery_id, $img_path , $up_1);
      $this->session->set_flashdata('info', 'Gallery Updated Successfuly!');
      return redirect('Admin/AdminController/list_galleries');
  
  }

  public function update_category()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $img_path = "none";
      $category_id = $this->input->post('category_id');
      $this->AdminModel->update_category($category_id, $img_path);
      $this->session->set_flashdata('info', 'Gallery Category Updated Successfuly!');
      return redirect('Admin/AdminController/list_categories');
  
  }
        public function delete_galleries()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/delete');
         $this->load->view('Admin/shared/footer');
  
  }


  public function delete_categories()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############

  #END GALLERIES AREA



     #TEAMS AREA

  public function list_teams()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['teams'] = $this->AdminModel->get_all_teams();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/teams/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_team()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/teams/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_team()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = 'teams';  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_team($img_path);
      $this->session->set_flashdata('success', 'Team Member Added Successfuly!');
 return redirect('Admin/AdminController/list_teams');
           
        
  
  }

        public function edit_team($team_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['teams'] = $this->AdminModel->edit_team($team_id);

      $company_id = $data['teams']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/teams/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_team()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'teams';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $portfolio_id = $this->input->post('portfolio_id');
      $this->AdminModel->update_team($portfolio_id , $img_path , $up_1);
      $this->session->set_flashdata('info', 'Team Member Updated Successfuly!');
      return redirect('Admin/AdminController/list_teams');
  
  }

        public function delete_teams()
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/teams/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############

  #END TEAMS AREA



      #TESTIMONIALS AREA

  public function list_testimonials()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


    $this->load->model('Admin/AdminModel');

         $data['testimonials'] = $this->AdminModel->get_all_testimonials();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/testimonials/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


  public function create_testimonial()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/testimonials/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_testimonial()
  {

    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'testimonials';  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_testimonial($img_path);
      $this->session->set_flashdata('success', 'Testimonial Added Successfuly!');
 return redirect('Admin/AdminController/list_testimonials');
           
        
  
  }

        public function edit_testimonial($testimonial_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['testimonials'] = $this->AdminModel->edit_testimonial($testimonial_id);

      $company_id = $data['testimonials']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/testimonials/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_testimonial()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'testimonials';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $testimonial_id = $this->input->post('testimonial_id');
      $this->AdminModel->update_testimonial($testimonial_id , $img_path , $up_1);
      $this->session->set_flashdata('info', 'Testimonial Updated Successfuly!');
      return redirect('Admin/AdminController/list_testimonials');
  
  }
        public function delete_testimonials()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/testimonials/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############

  #END TESTIMONIALS AREA



   


     #HOME PAGE SLIDERS AREA

  public function list_articles()
  {if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


    $this->load->model('Admin/AdminModel');

         $data['articles'] = $this->AdminModel->get_all_home_page_articles();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/home_page_articles/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_article()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/home_page_articles/create');
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_article()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'home_page_articles';
      $img_path = $this->do_upload($path);
      $this->AdminModel->add_home_page_article($img_path);
      $this->session->set_flashdata('success', 'Article Added Successfuly!');
    return redirect('Admin/AdminController/list_articles');
           
        
  
  }
  

        public function edit_home_page_articles($article_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['articles'] = $this->AdminModel->edit_home_page_articles($article_id);
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/home_page_articles/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_article()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'home_page_articles';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $article_id = $this->input->post('article_id');


      $this->AdminModel->update_home_page_articles($article_id , $img_path, $up_1);
      $this->session->set_flashdata('info', 'Article Updated Successfuly!');
      return redirect('Admin/AdminController/list_articles');
  
  }

        public function delete_home_page_articles()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/home_page_articles/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############

  #END HOME PAGE ARTICLES AREA



     #ABOUT US AREA

public function list_about_us()
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['about_us'] = $this->AdminModel->get_all_about_us();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/about_us/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_about_us()
  {
     if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}
 $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar', $data);
         $this->load->view('Admin/about_us/create');
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_about_us()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'about_us';
      $img_path = $this->do_upload($path);

      $this->AdminModel->add_about_us($img_path);
      $this->session->set_flashdata('success', 'About Added Successfuly!');
    return redirect('Admin/AdminController/list_about_us');
           
        
  
  }

        public function edit_about_us($about_us_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['about_us'] = $this->AdminModel->edit_about_us($about_us_id);

      $company_id = $data['about_us']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
      $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/about_us/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_about_us()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'about_us';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $about_us_id = $this->input->post('about_us_id');
      $this->AdminModel->update_about_us($about_us_id, $img_path, $up_1);
      $this->session->set_flashdata('info', 'About Updated Successfuly!');
      return redirect('Admin/AdminController/list_about_us');
  
  }

        public function delete_about_us()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/about_u/delete');
         $this->load->view('Admin/shared/footer');
  
  }


##############



public function list_contact_us()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


    $this->load->model('Admin/AdminModel');

         $data['contact_us'] = $this->AdminModel->get_all_contact_us();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/contact_us/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_contact_us()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar', $data);
         $this->load->view('Admin/contact_us/create');
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_contact_us()
  {
    //die(print_r($this->input->post()));
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'contact_us';
      $img_path = $this->do_upload($path);
      $this->AdminModel->add_contact_us($img_path);
      $this->session->set_flashdata('success', 'Contact Info Added Successfuly!');
    return redirect('Admin/AdminController/list_contact_us');
           
        
  
  }

        public function edit_contact_us($contact_us_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['contact_us'] = $this->AdminModel->edit_contact_us($contact_us_id);

      $company_id = $data['contact_us']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
      $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/contact_us/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_contact_us()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $path = 'contact_us';
    $up_1 = null;
    $img_path = null;
   

if (!empty($_FILES['userfile']['name'])){
    $img_path = $this->do_upload($path);
    $up_1 = 'ok';
}
      $contact_us_id = $this->input->post('contact_us_id');
      $this->AdminModel->update_contact_us($contact_us_id , $img_path , $up_1);
      $this->session->set_flashdata('info', 'Contact Info Updated Successfuly!');
      return redirect('Admin/AdminController/list_contact_us');
  
  }

        public function delete_contact_us()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/contact_us/delete');
         $this->load->view('Admin/shared/footer');
  
  }


  #SLIDERS AREA

  
  public function list_sliders()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['sliders'] = $this->AdminModel->get_all_sliders();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/sliders/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


  public function create_slider()
  {if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/sliders/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_slider()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = 'sliders';  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_slider($img_path);
      $this->session->set_flashdata('success', 'Slider Added Successfuly!');
 return redirect('Admin/AdminController/list_sliders');
           
        
  
  }

        public function edit_slider($slider_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['sliders'] = $this->AdminModel->edit_slider($slider_id);

      $company_id = $data['sliders']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/sliders/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_slider()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'sliders';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      //die(print_r($img_path));
      $slider_id = $this->input->post('slider_id');
      $this->AdminModel->update_slider($slider_id , $img_path , $up_1);
      $this->session->set_flashdata('info', 'Slider Updated Successfuly!');
      return redirect('Admin/AdminController/list_sliders');
  
  }
        public function delete_sliders()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/sliders/delete');
         $this->load->view('Admin/shared/footer');
  
  }

  public function save_contact_form()
  {
      $this->AdminModel->save_contact_form();
      return redirect('welcome/contact_success');
  }
##############

  #END SLIDERS AREA


  #PAGES AREA

  
  public function list_pages()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['pages'] = $this->AdminModel->get_all_pages();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/pages/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function list_page_contents($page_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['page_contents'] = $this->AdminModel->get_page_contents($page_id);
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/page_contents/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


  public function create_page()
  {if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/pages/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function create_page_content()
  {if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
            $data['pages'] = $this->AdminModel->get_all_pages();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/page_contents/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_page()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = 'pages';  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_page($img_path);
      $this->session->set_flashdata('success', 'Page Added Successfuly!');
 return redirect('Admin/AdminController/list_pages');
           
        
  
  }

       public function save_page_content()
  {
if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    
      $path = 'page_contents';  
      $page_id = $this->input->post('page_id');  
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_page_content($img_path);
      $this->session->set_flashdata('success', 'Page Content Added Successfuly!');
 return redirect('Admin/AdminController/list_page_contents/'.$page_id);
           
        
  
  }

        public function edit_page($page_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      
      $data['pages'] = $this->AdminModel->edit_page($page_id);

      
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/pages/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function edit_page_content($page_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      
      $data['page_contents'] = $this->AdminModel->edit_page_content($page_id);
      $data['pages'] = $this->AdminModel->get_all_pages();
       $page_id = $data['page_contents']['0']['page_id'];
      $data['original_pages'] = $this->AdminModel->edit_page($page_id);

      
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/page_contents/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_page()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'pages';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $page_id = $this->input->post('page_id');
      $this->AdminModel->update_page($page_id , $img_path , $up_1);
      $this->session->set_flashdata('info', 'Page Added Successfuly!');
      return redirect('Admin/AdminController/list_pages');
  
  }


  public function update_page_content()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'page_contents';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $content_id = $this->input->post('content_id');
       $page_id = $this->input->post('page_id');  
      $this->AdminModel->update_page_content($content_id , $img_path, $up_1);
      $this->session->set_flashdata('info', 'Page Content Added Successfuly!');
      return redirect('Admin/AdminController/list_page_contents/'.$page_id);
  
  }
        public function delete_pages()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/page/delete');
         $this->load->view('Admin/shared/footer');
  
  }



        public function delete($table , $column, $id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->AdminModel->delete($table ,$column,  $id);
         $this->session->set_flashdata('deleted', 'Item Deleted Successfuly!');
      return redirect($_SERVER['HTTP_REFERER']);
  
  }

##############

  #END PAGES AREA
  
  
  #ADMIN AREA

  
  public function list_admin()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

    $this->load->model('Admin/AdminModel');

         $data['admins'] = $this->AdminModel->list_admins();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/user_management/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }

 
      public function edit_admin($admin_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      
      $data['admins'] = $this->AdminModel->edit_admin($admin_id);
      

      
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/user_management/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }


  public function update_admin()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}
$admin_id = $this->input->post('user_id');

$data= $this->AdminModel->edit_admin($admin_id);

$password = $data['0']['password'];



$old_password = $this->input->post('password');
$new_password = $this->input->post('new_password');
$confirm_password = $this->input->post('confirm_password');


$cp = null;

if(!empty($old_password)  || !empty($new_password) || !empty($confirm_password)){

if ($password != md5($old_password)){
  $this->session->set_flashdata('info', 'Old password is not correct!');
      return redirect('Admin/AdminController/edit_admin/'.$admin_id);
}
if (empty($old_password)){
  $this->session->set_flashdata('info', 'Please Enter Old Password!');
      return redirect('Admin/AdminController/edit_admin/'.$admin_id);
}

if (empty($new_password)){
  $this->session->set_flashdata('info', 'Please Enter New Password!');
      return redirect('Admin/AdminController/edit_admin/'.$admin_id);
}
if (empty($confirm_password)){
  $this->session->set_flashdata('info', 'Please Enter Confirmation Password!');
      return redirect('Admin/AdminController/edit_admin/'.$admin_id);
}

if ($new_password != $confirm_password){
  $this->session->set_flashdata('info', 'Password Confirmation failed!');
      return redirect('Admin/AdminController/edit_admin/'.$admin_id);
}

if ($this->input->post('new_password') == $this->input->post('confirm_password') && $password == md5($old_password)){
 $cp = 'ok';
}
}
else{
     $path = 'admin';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $user_id = $this->input->post('user_id');
     
      
      $this->AdminModel->update_admin($user_id , $img_path, $cp , $up_1);
      $this->session->set_flashdata('info', 'Admin Info Updated Successfuly!');
      return redirect('Admin/AdminController/list_admin');
}
  }


   #COMMUNITY SERVICES AREA

  public function list_community_services()
  {if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}


    $this->load->model('Admin/AdminModel');

         $data['community_services'] = $this->AdminModel->get_all_community_services();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/community_services/list', $data);
         $this->load->view('Admin/shared/footer');
  
  }


    public function create_community_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
} 
          $data['companies'] = $this->AdminModel->get_all_companies();

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/community_services/create', $data);
         $this->load->view('Admin/shared/footer');
  
  }

      public function save_community_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $path = 'community_services';
      $img_path = $this->do_upload($path);
      $this->AdminModel->add_community_service($img_path);
      $this->session->set_flashdata('success', 'Community Service Added Successfuly!');
    return redirect('Admin/AdminController/list_community_services');
           
        
  
  }
  

        public function edit_community_service($community_service_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}
       $data['companies'] = $this->AdminModel->get_all_companies();
      $data['community_services'] = $this->AdminModel->edit_community_services($community_service_id);
      $company_id = $data['community_services']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/community_services/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

        public function update_community_service()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'community_services';
     $up_1 = null;
     $img_path = null;
    

 if (!empty($_FILES['userfile']['name'])){
     $img_path = $this->do_upload($path);
     $up_1 = 'ok';
 }
      $community_service_id = $this->input->post('community_service_id');


      $this->AdminModel->update_community_services($community_service_id , $img_path, $up_1);
      $this->session->set_flashdata('info', 'Community Service Updated Successfuly!');
      return redirect('Admin/AdminController/list_community_services');
  
  }

        public function delete_community_services()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/community_services/delete');
         $this->load->view('Admin/shared/footer');
  
  }


  
    }



