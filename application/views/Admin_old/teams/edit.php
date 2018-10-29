
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Team
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Team</a></li>
        <li class="active">Edit Team</li>
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
foreach ($teams as $team) {
	$portfolio_id = $team['portfolio_id'];
        $name_of_member = $team['name_of_member'];
        $company_id = $team['company_id'];
        $job_description = $team['job_description'];
        $designation = $team['designation'];
        $visiblity = $team['visiblity'];
        $email = $team['email'];
        $phone_number = $team['phone_number'];
        $image_url = $team['image_url'];
      
    }
    ?>

    			<?php
foreach ($company as $original_company) {
	$company_id_original = $original_company['company_id'];
        $company_name_original = $original_company['company_name'];
       
      
    }
    ?>
    

			<?php echo form_open_multipart('Admin/AdminController/update_team');?>
              <div class="box-body">
                <div class="form-group">
				<input type="hidden" name = "portfolio_id" value = "<?= $portfolio_id ?>"
                  <label for="exampleInputEmail1">Member Name</label>
                  <input type="text" value="<?= $name_of_member ?>"  name="name_of_member" class="form-control" id="exampleInputEmail1" placeholder="Enter Member Name">
                </div>
                 <div class="form-group">
                <label></label>
                <select name="company_id" class="form-control select2" style="width: 100%;">
                  <option value="<?= $company_id_original ?>"><?= $company_name_original ?></option>
                  <?php foreach ($companies as $company): ?>
                  <option value="<?= $company->company_id?>" name="company_id"><?= $company->company_name ?></option>
                 
                 <?php endforeach ?>
                 
                </select>
              </div>

  <div class="form-group">
			
                  <label for="exampleInputEmail1">Designation</label>
                  <input type="text" value="<?= $designation ?>"  name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                </div>

            

    <div class="form-group">
			
      <label for="exampleInputEmail1">Phone No</label>
      <input type="text" value="<?= $phone_number ?>"  name="phone_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
    </div>

      <div class="form-group">

<label for="exampleInputEmail1">Email</label>
<input type="text" value="<?= $email ?>"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
</div>
  <div class="form-group">
                <label>Visiblity</label>
                <select class="form-control select2" style="width: 100%;">
				<option value="<?= $visiblity ?>"><?= $visiblity ?></option>
                  <option value"On" selected="selected">On</option>
                  <option value="Off">Off</option>
                  
                 
                </select>
              </div>
                



      

              </div>
              <!-- /.box-body -->



            
            
          </div>
          <!-- /.box -->
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
              <h3 class="box-title">Job Description
                <!-- <small>Simple and fast</small> -->
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            
              <textarea id="editor1" value="<?= $job_description ?>" name="job_description" rows="5" cols="80">
                                            Enter the job description here.
                    </textarea>  
            </div>
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
 