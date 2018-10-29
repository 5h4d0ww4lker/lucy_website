  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <td> <?php
$CI =&get_instance();
$CI->load->model('Admin/AdminModel');
$result2 = $CI->AdminModel->edit_admin(1);


   foreach ($result2 as $rs2){
                      print_r('<p>'.$rs2['username'].'</p>');
                              }




  ?> </td>
      <div class="user-panel">
        <div class="pull-left image">
        <?php
$CI =&get_instance();
$CI->load->model('Admin/AdminModel');
$result2 = $CI->AdminModel->edit_admin(1);


   foreach ($result2 as $rs2){
                      $image_url = $rs2['image_url'];
                      
                              }




  ?> 
          <img src="<?php echo base_url(); ?><?php echo $image_url; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
         <!--  <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      
 
        <li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_companies"><i class="fa fa-building text-green"></i> Companies</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_about_us"><i class="fa fa-info text-green"></i> About Us</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_contact_us"><i class="fa fa-map-marker text-green"></i> Contact Us</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_galleries"><i class="fa fa-picture-o text-green"></i> Gallery</a></li>

<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_categories"><i class="fa fa-list text-green"></i> Gallery Categories</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_articles"><i class="fa fa-bookmark text-green"></i> Articles</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_sliders"><i class="fa fa-camera-retro text-green"></i> Sliders</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_testimonials"><i class="fa fa-comment text-green"></i> Testimonials</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_products"><i class="fa fa-gear text-green"></i> Products</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_services"><i class="fa fa-briefcase text-green"></i> Services</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_teams"><i class="fa fa-user text-green"></i> Teams</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_pages"><i class="fa fa-list text-green"></i> Pages</a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_community_services"><i class="fa fa-list text-green"></i> Community Service</a></li>

      <li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/list_admin"><i class="fa fa-user text-green"></i> Manage Admin</a></li>     
<li><a href="<?php echo base_url(); ?>index.php/Admin/AdminController/logout"><i class="fa fa-power-off text-red"></i> Log Out</a></li>     
      
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>