
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Testmonal
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Testmonal</a></li>
        <li class="active">Edit Testmonal</li>
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
foreach ($testimonials as $testimonial) {
	$testimony_id = $testimonial['testimony_id'];
        $testimony_from = $testimonial['testimony_from'];
        $company_id = $testimonial['company_id'];
        $description = $testimonial['description'];
        $title = $testimonial['title'];
        $visiblity = $testimonial['visiblity'];
        $image_url = $testimonial['image_url'];
     
      
    }
    ?>

    			<?php
foreach ($company as $original_company) {
	$company_id_original = $original_company['company_id'];
        $company_name_original = $original_company['company_name'];
       
      
    }
    ?>
    

			<?php echo form_open_multipart('Admin/AdminController/update_testimonial');?>
              <div class="box-body">
                <div class="form-group">
				<input type="hidden" name = "testimony_id" value = "<?= $testimony_id ?>"
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="<?= $title ?>"  name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Member Name">
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
			
                  <label for="exampleInputEmail1">Testimony From</label>
                  <input type="text" value="<?= $testimony_from ?>"  name="testimony_from" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
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
              <h3 class="box-title">Description
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
            
              <textarea id="editor1" value="<?= $description ?>" name="description" rows="5" cols="80">
                                            Enter the description here.
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
 