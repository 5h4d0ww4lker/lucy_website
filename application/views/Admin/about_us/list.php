  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       About Us
        <small>preview of about us</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About US</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php if($this->session->flashdata('success')) {?>          
    
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> <?= $this->session->flashdata('success') ?></h4>
                
              </div>

    <?php } ?>
    <?php if($this->session->flashdata('deleted')) {?>      
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-trash"></i> <?= $this->session->flashdata('deleted') ?></h4>
               
              </div>
              <?php } ?>
              <?php if($this->session->flashdata('info')) {?> 
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> <?= $this->session->flashdata('info') ?></h4>
               
              </div>
              <?php } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">About US</h3>
              <a href=<?php echo site_url('Admin/AdminController/create_about_us') ?> class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i>   Add About Info </a>
       
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 20px">Title</th>
                  <th style="width: 20px">Company</th>
                  <th style="width: 20px">Created At</th>
                  <th style="width: 20px">Created By</th>
                  <th style="width: 45px">Actions</th>
                </tr>
              </thead>
                 <?php $count = 1; ?>
				<?php foreach ($about_us as $about):?> 
                <tr>
                  <td><?= $count ++; ?></td>
                  <td><?= $about->title ?></td>
                 <td> <?php
$CI =&get_instance();
$CI->load->model('Admin/AdminModel');
$result2 = $CI->AdminModel->get_company($about->company_id);

   foreach ($result2 as $rs2){
                      print_r($rs2->company_name);
                              }




  ?> </td>
                 <td><?= $about->created_at ?></td>
                 <td>Admin</td>
                 
                  <td>
		  <a href=<?php echo site_url('Admin/AdminController/edit_about_us/' . $about->about_us_id) ?> class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit </a>
  <a href=<?php echo site_url('Admin/AdminController/delete/about_us/about_us_id/' . $about->about_us_id) ?> class="btn btn-xs btn-danger"onclick="return confirm('Are you sure you want to delete this content?')"><i class="fa-trash"></i>Delete </a>
				
				</td>
               
 </tr>
               <?php endforeach ?>
              </table>
            </div>
            <!-- /.box-body -->
        
          </div>
          <!-- /.box -->

     
        </div>
        <!-- /.col -->
     
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->