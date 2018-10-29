
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Page
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active">Edit Page</li>
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
foreach ($pages as $page) {
	$page_id = $page['page_id'];
        $title = $page['title'];
        $page_label = $page['page_label'];
         $page_type = $page['page_type'];
        $description = $page['description'];
        $visiblity = $page['visiblity'];
        
          

        $image_url = $page['image_url'];
         $src = $image_url;
      
    }
    ?>

    

			<?php echo form_open_multipart('Admin/AdminController/update_page');?>
              <div class="box-body">
                   <div class="form-group">
        <input type="hidden" name = "page_id" value = "<?= $page_id ?>"
                  <label for="exampleInputEmail1">Page Label</label>
                  <input type="text" value="<?= $page_label ?>"  name="page_label" class="form-control" id="exampleInputEmail1" placeholder="Enter Page Name">
                </div>
                <div class="form-group">
		
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="<?= $title ?>"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Page Name">
                </div>
          <div class="form-group">
                <label>Page Type</label>
                <select class="form-control select2" name="page_type" style="width: 100%;">
                  <option value="products" selected="selected">Product</option>
                  <option value="products">Product</option>
                  <option value="services">Services</option>
                   <option value="gallery">Gallery</option>
                  <option value="home_page_articles">Articles</option>
                  
                 
                </select>
              </div>        

  <div class="form-group">
                <label>Visiblity</label>
                <select class="form-control select2" name="visiblity" style="width: 100%;">
				<option value="<?= $visiblity ?>"  selected="selected"><?= $visiblity ?></option>
                  <option value"On">On</option>
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
              <h3 class="box-title">Page Description
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
 