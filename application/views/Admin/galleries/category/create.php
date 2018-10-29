
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Category Item
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category Item</a></li>
        <li class="active">Add Category Item</li>
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

			
			<?php echo form_open_multipart('Admin/AdminController/save_category');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text"  name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Caption">
                </div>
               

              



                



      

              </div>
              <!-- /.box-body -->


<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
            
          </div>
          <!-- /.box -->
         </div>
        <!--/.col (left) -->
        <!-- right column -->
    
               
              
              
             <!--  </div> -->
              <!-- /.box-body -->

              <
            </form>
          </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 