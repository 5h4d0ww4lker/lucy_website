
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Admin
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           
			<?php
foreach ($admins as $admin) {
	$user_id = $admin['user_id'];
        $email = $admin['email'];
        $user_name = $admin['username'];
       
        $image_url = $admin['image_url'];
      
    }
    ?>

 
    

			<?php echo form_open_multipart('Admin/AdminController/update_admin');?>
              <div class="box-body">
              <?php if($this->session->flashdata('info')) {?> 
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> <?= $this->session->flashdata('info') ?></h4>
               
              </div>
              <?php } ?>
                <div class="form-group">
				<input type="hidden" name = "user_id" value = "<?= $user_id ?>"
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" disabled="true" value="<?= $user_name ?>"  name="username" required="required" class="form-control" id="exampleInputEmail1" placeholder="Enter Member Name">
                </div>
                 

  <div class="form-group">
			
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" value="<?= $email ?>"  name="email" required="required" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                </div>

            

    <div class="form-group">
			
      <label for="exampleInputEmail1">Password</label>
      <input type="password"  name="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter Password">
    </div>

      <div class="form-group">

<label for="exampleInputEmail1">New Password</label>
<input type="password"  name="new_password" class="form-control" id="exampleInputEmail1" placeholder="Enter New Password">
</div>


      <div class="form-group">

<label for="exampleInputEmail1">Confirm Password</label>
<input type="password"  name="confirm_password" class="form-control" id="exampleInputEmail1"  placeholder="Confirm Password">
</div>

              <!-- /.box-body -->



            
            
          </div>
          <!-- /.box -->
         </div>
         </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
        <div class="box box-primary">
          
            <!-- /.box-header -->
            <!-- form start -->
           
            <!--   <div class="box-body"> -->
                         <div class="box">
            <div class="box-header">
            <div class="form-group">
             <img src="<?php echo base_url()?><?= $image_url ?>" width="200" height="150">
                  <label for="exampleInputFile">File input</label>
                  <input type="file"  name="userfile" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
   

               
              
              
             <!--  </div> -->
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 