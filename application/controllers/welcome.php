<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		  $this->load->database();
		  $this->load->library('pagination');
		$this->load->model('Admin/AdminModel');
       
    }
	 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

		public function loader($param = NULL, $param2 = NULL)
	{

     $data['main_company'] = $this->AdminModel->get_main_company();
     $main_company_id = $data['main_company']['0']['company_id'];
     $data['services'] = $this->AdminModel->get_services($main_company_id,$param);
     $data['community_services'] = $this->AdminModel->get_community_services($main_company_id,$param);
     $data['company'] = $this->AdminModel->get_company($main_company_id);
     $data['products'] = $this->AdminModel->get_products($main_company_id, $param);
     $data['galleries'] = $this->AdminModel->get_galleries($main_company_id,$param2);
     $data['about_us'] = $this->AdminModel->get_about_us($main_company_id);
     $data['contact_us'] = $this->AdminModel->get_contact_us($main_company_id);
     $data['locations'] = $this->AdminModel->get_contact_us($main_company_id);
     $data['teams'] = $this->AdminModel->get_teams($main_company_id);
     $data['testimonials'] = $this->AdminModel->get_testimonials($main_company_id);
       $data['sliders'] = $this->AdminModel->get_sliders_home($main_company_id);
        $data['sister_companies'] = $this->AdminModel->get_sister_companies($main_company_id);
		$data['pages'] = $this->AdminModel->get_all_pages($main_company_id);
		$data['categories'] = $this->AdminModel->get_all_categories($param);


     return $data;

	}


		public function loader_mini()
	{

     $data['main_company'] = $this->AdminModel->get_main_company();
     $main_company_id = $data['main_company']['0']['company_id'];
       $data['pages'] = $this->AdminModel->get_all_pages($main_company_id);
     return $data;

	}


			public function si_loader($main_company_id)
	{

     


     $data['services'] = $this->AdminModel->get_services($main_company_id);
      $data['community_services'] = $this->AdminModel->get_community_services($main_company_id);
     $data['company'] = $this->AdminModel->get_company($main_company_id);
     $data['products'] = $this->AdminModel->get_products($main_company_id);
     $data['galleries'] = $this->AdminModel->get_galleries($main_company_id);
     $data['about_us'] = $this->AdminModel->get_about_us($main_company_id);
     $data['contact_us'] = $this->AdminModel->get_contact_us($main_company_id);
     $data['teams'] = $this->AdminModel->get_teams($main_company_id);
     $data['testimonials'] = $this->AdminModel->get_testimonials($main_company_id);
       $data['sliders'] = $this->AdminModel->get_sliders_home($main_company_id);
        $data['sister_companies'] = $this->AdminModel->get_sister_companies($main_company_id);
		  $data['pages'] = $this->AdminModel->get_all_pages($main_company_id);
		  $data['categories'] = $this->AdminModel->get_all_categories($main_company_id);

     return $data;

	}
	public function index()
	{
		   
		    $data = $this->loader();

 $data['active'] = 'home';
        $this->load->view('Main/shared/header', $data);
		$this->load->view('Main/home/intro', $data);
		$this->load->view('Main/home/home_about', $data);
		//$this->load->view('Main/home/featured_tabs', $data);
		$this->load->view('Main/home/teams', $data);
		
		//$this->load->view('Main/home/testimonials', $data);
		$this->load->view('Main/home/motto', $data);
		$this->load->view('Main/contact_us/contact_us', $data);
		
        $this->load->view('Main/shared/footer', $data);
	}
	public function search_articles()
	{
  
  $search_term = $this->input->post('search_term');
	  $result =   $this->AdminModel->search_article($search_term);

  $total_result = count($result);
	  if($total_result > 0){
		$data = $this->loader();
  
		$data['active'] = "others";
		$data['articles'] = $result;
   
	 
	$this->load->view('Main/shared/header', $data);
	$this->load->view('Main/articles/list', $data);
  
  
  
		$this->load->view('Main/shared/footer', $data);
	  }
  
	  else{
		$data = $this->loader();
  
		$data['active'] = "others";  
	$this->load->view('Main/shared/header', $data);
	$this->load->view('Main/articles/no_results', $data);
  
  
  
		$this->load->view('Main/shared/footer', $data);
	  }
	//  return redirect('Admin/AdminController/list_articles');
			 
		  
	
	}
  
public function pages($page_id)
	{

        $data = $this->loader();

        $data['active'] = "others";
        $data['pages_single'] = $this->AdminModel->get_page2($page_id);
 		$data['page_contents'] = $this->AdminModel->get_page_contents2($page_id);
 		 $page_type = $data['pages_single']['0']['page_type'];
 		
		$this->load->view('Main/shared/header', $data);
		$this->load->view('Main/others/'.$page_type.'/page', $data);



        $this->load->view('Main/shared/footer', $data);
	}

	public function articles($offset = 0)
	{

        $data = $this->loader();

        $data['active'] = "others";
        $data['total'] = $this->AdminModel->get_all_home_page_articles();
		$limit = 2;
        $total = count($data['total']);

       

        $config['base_url'] = site_url('welcome/articles/');
        $config['total_rows'] = $total;
        $config['per_page'] = 2;
         $config['num_links'] = 2;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$data['articles'] = $this->AdminModel->get_paginated_articles($limit , $offset);
 		
		$this->load->view('Main/shared/header', $data);
		$this->load->view('Main/articles/list', $data);



        $this->load->view('Main/shared/footer', $data);
	}


	
	public function article_detail($article_id)
	{

        $data = $this->loader();

        $data['active'] = "others";
        $data['articles'] = $this->AdminModel->get_article_detail($article_id);
 	
 		
		$this->load->view('Main/shared/header', $data);
		$this->load->view('Main/articles/detail', $data);



        $this->load->view('Main/shared/footer', $data);
	}

	public function about()
	{
          $data = $this->loader();
           $data['active'] = 'about';
        $this->load->view('Main/shared/header', $data);
		
		$this->load->view('Main/about_us/about_story', $data);
		
        $this->load->view('Main/shared/footer', $data);
	}

	public function services($param)
	{
		    $data = $this->loader($param);
		     $data['active'] = 'services';
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/services/services_sub_header', $data);
		$this->load->view('Main/services/services', $data);
	   // $this->load->view('Main/home/motto', $data);
		
		//$this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}


	// public function community_services($param = NULL)
	// {
	// 	    $data = $this->loader($param);
	// 	     $data['active'] = 'community_services';
 //        $this->load->view('Main/shared/header', $data);
	// 	//$this->load->view('Main/services/services_sub_header', $data);
	// 	$this->load->view('Main/community_services/community_services', $data);
	//    // $this->load->view('Main/home/motto', $data);
		
	// 	//$this->load->view('Main/home/clients', $data);
 //        $this->load->view('Main/shared/footer', $data);
	// }


		public function community_services($offset = 0)
	{

        $data = $this->loader();

        $data['active'] = "community_services";
        $data['total'] = $this->AdminModel->get_all_community_services();
		$limit = 2;
        $total = count($data['total']);

       

        $config['base_url'] = site_url('welcome/community_services/');
        $config['total_rows'] = $total;
        $config['per_page'] = 2;
         $config['num_links'] = 2;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$data['community_services'] = $this->AdminModel->get_paginated_community_services($limit , $offset);
 		
		$this->load->view('Main/shared/header', $data);
		$this->load->view('Main/community_services/community_services', $data);



        $this->load->view('Main/shared/footer', $data);
	}


	public function products($param)
	{
		    $data = $this->loader($param);
		     $data['active'] = 'product';
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/products/products_sub_header', $data);
		$this->load->view('Main/products/products', $data);
	    //$this->load->view('Main/home/motto', $data);
		
		//$this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}

		public function locations($param = null)
	{
		    $data = $this->loader($param);
		     $data['active'] = 'locations';
		      $data['companies'] = $this->AdminModel->get_all_companies();
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/products/products_sub_header', $data);
		$this->load->view('Main/locations/locations', $data);
	    //$this->load->view('Main/home/motto', $data);
		
		//$this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}


		public function locations_ref($company_id , $param = null)
	{
		    $data = $this->loader($param);
		     $data['active'] = 'locations';
		      $data['companies'] = $this->AdminModel->get_all_companies();
		      $data['company'] = $this->AdminModel->get_company($company_id);
		      $data['contact_us'] = $this->AdminModel->get_contact_us($company_id);
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/products/products_sub_header', $data);
		$this->load->view('Main/locations/locations', $data);
	    //$this->load->view('Main/home/motto', $data);
		
		//$this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}


	public function sister_company($company_id)
	{
		    $data = $this->loader_mini();
        $data = $this->si_loader($company_id);

 $data['active'] = 'sister_company';
        $this->load->view('Main/shared/header', $data);
		$this->load->view('Main/home/intro', $data);
		$this->load->view('Main/home/home_about', $data);
		$this->load->view('Main/home/featured_tabs', $data);
		$this->load->view('Main/home/home_services', $data);
		
		//$this->load->view('Main/home/testimonials', $data);
		$this->load->view('Main/home/motto', $data);
		$this->load->view('Main/contact_us/contact_us', $data);
		
        $this->load->view('Main/shared/footer', $data);
	}


	


	public function contact_us()
	{
		    $data = $this->loader();
		     $data['active'] = 'contact_us';
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/contact_us/contact_us_sub_header', $data);
		$this->load->view('Main/contact_us/contact_us', $data);
	    //$this->load->view('Main/home/motto', $data);
		
		//$this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}

	public function gallery($param2)
	{
		    $data = $this->loader(NULL , $param2);

		     $data['active'] = 'gallery';
        $this->load->view('Main/shared/header', $data);
		//$this->load->view('Main/gallery/gallery_sub_header', $data);
		$this->load->view('Main/gallery/gallery', $data);
	    // $this->load->view('Main/home/motto', $data);
		
		// $this->load->view('Main/home/clients', $data);
        $this->load->view('Main/shared/footer', $data);
	}
}
