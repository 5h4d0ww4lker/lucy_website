
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Article
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Article</a></li>
        <li class="active">Edit Article</li>
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
foreach ($articles as $article) {
	$article_id = $article['article_id'];
        $title = $article['title'];
      
        $content = $article['content'];
        $visiblity = $article['visiblity'];
        $image_url = $article['image_url'];
      
    }
    ?>


    

			<?php echo form_open_multipart('Admin/AdminController/update_article');?>
              <div class="box-body">
                <div class="form-group">
				<input type="hidden" name = "article_id" value = "<?= $article_id ?>"
                  <label for="exampleInputEmail1">Article Name</label>
                  <input type="text" value="<?= $title ?>"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Article Name">
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
             <img src="<?php echo base_url()?><?= $image_url ?>" width="200" height="150">
                 
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
              <h3 class="box-title">Article Content
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
            
              <textarea id="editor1" name="content" rows="5" cols="80">
              <?= $content ?>
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
 