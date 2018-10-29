
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit About Us
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About Us</a></li>
        <li class="active">Edit About Us</li>
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
foreach ($about_us as $about) {
	$about_us_id = $about['about_us_id'];
        $title = $about['title'];
         $image_url = $about['image_url'];
        $company_id = $about['company_id'];
        $description = $about['description'];
        $visiblity = $about['visiblity'];
      
    }
    ?>

    			<?php
foreach ($company as $original_company) {
	$company_id_original = $original_company['company_id'];
        $company_name_original = $original_company['company_name'];
       
      
    }
    ?>
    

			<?php echo form_open_multipart('Admin/AdminController/update_about_us');?>
              <div class="box-body">
                <div class="form-group">
				<input type="hidden" name = "about_us_id" value = "<?= $about_us_id ?>"
                  <label for="exampleInputEmail1">Service Name</label>
                  <input type="text" value="<?= $title ?>"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Service Name">
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
                <label>Visiblity</label>
                <select class="form-control select2" name="visiblity" style="width: 100%;">
				<option value="<?= $visiblity ?>" selected="selected"><?= $visiblity ?></option>
                  <option value"On">On</option>
                  <option value="Off">Off</option>
                  
                 
                </select>
              </div>
                  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                 <img src="<?php echo base_url()?><?= $image_url ?>" width="200" height="150">
                  <input type="file"  name="userfile" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
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
              <h3 class="box-title">Service Description
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
            
              <textarea id="editor1"  name="description" rows="5" cols="80">
              <?= $description ?>
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
 