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
      $img_path = $this-> do_upload($path);
      
      $this->AdminModel->add_company($img_path);
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
      $img_path = $this-> do_upload($path);
       $this->AdminModel->update_company($company_id, $img_path);
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
      $img_path = $this->do_upload($path);
      $this->AdminModel->update_service($service_id, $img_path);
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


      $path = 'product';
      $img_path = $this->do_upload($path);
      $this->AdminModel->add_product($img_path);
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
      $img_path = $this->do_upload($path);
      $product_id = $this->input->post('product_id');
      $this->AdminModel->update_product($product_id, $img_path);
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


  public function create_gallery()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/create', $data);
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
 return redirect('Admin/AdminController/list_galleries');
           
        
  
  }

        public function edit_gallery($gallery_id)
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

      $data['companies'] = $this->AdminModel->get_all_companies();
      $data['galleries'] = $this->AdminModel->edit_gallery($gallery_id);

      $company_id = $data['galleries']['0']['company_id'];
      $data['company'] = $this->AdminModel->edit_company($company_id);
     // die(print_r($data['teams']));
         $this->load->view('Admin/shared/header');
         $this->load->view('Admin/shared/sidebar');
         $this->load->view('Admin/galleries/edit', $data);
         $this->load->view('Admin/shared/footer');
  
  }

  public function update_gallery()
  {
    if ($this->session->userdata('login') != 'TRUE'){

redirect('Admin/AdminController/index');
}

     $path = 'galleries';
      $img_path = $this->do_upload($path);
      $gallery_id = $this->input->post('gallery_id');
      $this->AdminModel->update_gallery($gallery_id, $img_path);
      return redirect('Admin/AdminController/list_galleries');
  
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
      $img_path = $this->do_upload($path);
      $portfolio_id = $this->input->post('portfolio_id');
      $this->AdminModel->update_team($portfolio_id , $img_path);
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
      $img_path = $this->do_upload($path);
      $testimonial_id = $this->input->post('testimonial_id');
      $this->AdminModel->update_testimonial($testimonial_id , $img_path);
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
      $img_path = $this->do_upload($path);
      $article_id = $this->input->post('article_id');


      $this->AdminModel->update_home_page_articles($article_id , $img_path);
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
      $img_path = $this->do_upload($path);
      $about_us_id = $this->input->post('about_us_id');
      $this->AdminModel->update_about_us($about_us_id, $img_path);
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

    $path = 'sliders';
      $img_path = $this->do_upload($path);
      $contact_us_id = $this->input->post('contact_us_id');
      $this->AdminModel->update_contact_us($contact_us_id , $img_path);
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
      $img_path = $this->do_upload($path);
      $slider_id = $this->input->post('slider_id');
      $this->AdminModel->update_slider($slider_id , $img_path);
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
    }



