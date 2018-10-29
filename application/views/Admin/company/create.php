
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Company
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Company</a></li>
        <li class="active">Add Company</li>
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

			
			<?php echo form_open_multipart('Admin/AdminController/save_company');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text"  name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name">
                </div>
                 <div class="form-group">
                <label>Company Type</label>
                <select name="company_type" class="form-control select2" style="width: 100%;">
                  
                  <option value="Main">Main</option>
                  <option value="Sister Company">Sister Company</option>
                 
                </select>
              </div>


  <div class="form-group">
                <label>Visiblity</label>
                <select class="form-control select2" name="visiblity" style="width: 100%;">
                  <option value"On" selected="selected">On</option>
                  <option value="Off">Off</option>
                  
                 
                </select>
              </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Logo</label>
                  <input type="file"  name="userfile" id="exampleInputFile">

                  <p class="text-danger">Please upload a transparent image of size not greater than 50 X 50 px</p>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputFile">Moto Background Image</label>
                  <input type="file"  name="userfile2" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>


                 <div class="form-group">
                  <label for="exampleInputFile">Services Background Image</label>
                  <input type="file"  name="userfile3" id="exampleInputFile">

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
            
              <textarea id="editor1" name="slogan" rows="5" cols="80">
                                            Enter the companies motto here.
                    </textarea>  
            </div>
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
 