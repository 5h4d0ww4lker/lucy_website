
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Company
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Company</a></li>
        <li class="active">Edit Company</li>
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
foreach ($companies as $company) {
	$company_id = $company['company_id'];
        $company_name = $company['company_name'];
        $company_type = $company['company_type'];
        $slogan = $company['slogan'];
        $visiblity = $company['visiblity'];
         $image_url = $company['logo_url'];
         $src = '/'.$image_url;
      
    }
			
			?>
			<?php echo form_open_multipart('Admin/AdminController/update_company');?>
              <div class="box-body">
                <div class="form-group">
				<input type="hidden" name = "company_id" value = "<?= $company_id ?>"
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" value="<?= $company_name ?>"  name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name">
                </div>
                 <div class="form-group">
                <label>Company Type</label>
                <select name="company_type" class="form-control select2" style="width: 100%;">
                  <option value="<?= $company_type ?>"><?= $company_type ?></option>
                  <option value="Main">Main</option>
                  <option value="Sister Company">Sister Company</option>
                 
                </select>
              </div>


  <div class="form-group">
                <label>Visiblity</label>
                <select class="form-control select2" style="width: 100%;">
				<option value="<?= $visiblity ?>"><?= $visiblity ?></option>
                  <option value"On" selected="selected">On</option>
                  <option value="Off">Off</option>
                  
                 
                </select>
              </div>
                  <div class="form-group">
                  <img src="<?php echo base_url()?><?= $src ?>" width="200" height="150">
                  <label for="exampleInputFile">File input</label>
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
              <h3 class="box-title">Company Motto
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
            
              <textarea id="editor1" value="<?= $slogan ?>" name="slogan" rows="5" cols="80">
                                            Enter the companies motto here.
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
 