
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Contact Us
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class="active">Add Contact Us</li>
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

			
			<?php echo form_open_multipart('Admin/AdminController/save_contact_us');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                 <div class="form-group">
                <label>Company</label>

               
                <select class="form-control select2" name = "company_id" style="width: 100%;">
                <?php foreach ($companies as $company): ?>
                  <option value="<?= $company->company_id?>"><?= $company->company_name ?></option>
                 
                 <?php endforeach ?>
                </select>
              </div>


  <div class="form-group">
                <label>Visiblity</label>
                <select class="form-control select2" name = "visiblity" style="width: 100%;">
                  <option value"On" selected="selected">On</option>
                  <option value="Off">Off</option>
                  
                 
                </select>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Phone 1</label>
                  <input type="text"  name="phone_office_one" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone 1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone 2</label>
                  <input type="text"  name="phone_office_two" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone 2">
                </div>

               

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text"  name="email_one" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text"  name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Enter Facebook Link">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text"  name="twitter" class="form-control" id="exampleInputEmail1" placeholder="Enter Twitter Link">
                </div>
                 

 <div class="form-group">
                  <label for="exampleInputEmail1">LinkedIn</label>
                  <input type="text"  name="linkedin" class="form-control" id="exampleInputEmail1" placeholder="Enter LinkedIn Link">
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
            <div class="box-body">
             
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Dribble</label>
                  <input type="text"  name="dribble" class="form-control" id="exampleInputEmail1" placeholder="Enter Dribble Link">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Skype</label>
                  <input type="text"  name="skype" class="form-control" id="exampleInputEmail1" placeholder="Enter Skype Link">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Map</label>
                  <input type="text"  name="sitemap" class="form-control" id="exampleInputEmail1" placeholder="Enter Site Map">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file"  name="userfile" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                </div>
                         <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Description
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
            
              <textarea id="editor1" name="description" rows="5" cols="80">
                                            Enter the  descriptions.
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
 