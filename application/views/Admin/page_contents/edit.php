
  <!-- Content Wrapper. Contains page_content content -->
  <div class="content-wrapper">
    <!-- Content Header (Page Content header) -->
    <section class="content-header">
      <h1>
        Edit Page Content
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Page Content</a></li>
        <li class="active">Edit Page Content</li>
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
foreach ($page_contents as $page_content) {
	$content_id = $page_content['content_id'];
        $title = $page_content['title'];
        $description = $page_content['description'];
        $visiblity = $page_content['visiblity'];
        
          

        $image_url = $page_content['image_url'];
         $src = $image_url;
      
    }
    ?>

    
  <?php
foreach ($original_pages as $original_page) {
  $page_id_original = $original_page['page_id'];
        $page_name_original = $original_page['page_label'];
       
      
    }
    ?>
			<?php echo form_open_multipart('Admin/AdminController/update_page_content');?>
              <div class="box-body">
                   <div class="form-group">
        <input type="hidden" name = "content_id" value = "<?= $content_id ?>"
                  
                <div class="form-group">
		
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="<?= $title ?>"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Content Title">
                </div>
                 <div class="form-group">
                <label></label>
                <select name="page_id" class="form-control select2" style="width: 100%;">
                  <option value="<?= $page_id_original ?>"><?= $page_name_original ?></option>
                  <?php foreach ($pages as $page): ?>
                  <option value="<?= $page->page_id?>" name="page_id"><?= $page->page_label ?></option>
                 
                 <?php endforeach ?>
                 
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
              <h3 class="box-title">Page Content Description
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
 