  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Galleries
        <small>preview of galleries</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Galleries</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Galleries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 20px">Caption</th>
                  <th style="width: 20px">Description</th>
                 
                  <th style="width: 20px">Created At</th>
                  <th style="width: 20px">Created By</th>
                  <th style="width: 15px">Actions</th>
                </tr>
                <?php $count = 1; ?>
				<?php foreach ($galleries as $gallery):?> 
                <tr>
                    <td><?= $count ++; ?></td>
                  <td><?= $gallery->title ?></td>
              
                 <td><?= $gallery->description ?></td>
                 
                 <td><?= $gallery->created_at ?></td>
                
                 <td>Admin</td>
                 
                  <td>
		  <a href=<?php echo site_url('Admin/AdminController/edit_gallery/' . $gallery->gallery_id) ?> class="btn btn-xs btn-info">Edit <i class="m-icon-swapright m-icon-white"></i></a>
  <a href=<?php echo site_url('Admin/AdminController/delete_gallery/' . $gallery->gallery_id) ?> class="btn btn-xs btn-danger">Delete <i class="m-icon-swapright m-icon-white"></i></a>
				
				</td>
               
 </tr>
               <?php endforeach ?>
              </table>
            </div>
            <!-- /.box-body -->
        
          </div>
          <!-- /.box -->

     
        </div>
        <!-- /.col -->
     
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->