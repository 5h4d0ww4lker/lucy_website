  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Teams
        <small>preview of teams</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teams</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Teams</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 20px">Member Name</th>
                  <th style="width: 20px">Designation</th>
                  <th style="width: 20px">Job Description</th>
                  <th style="width: 20px">Phoen No</th>
                  <th style="width: 20px">Email</th>
                  <th style="width: 20px">Created At</th>
                  <th style="width: 20px">Created By</th>
                  <th style="width: 15px">Actions</th>
                </tr>
  <?php $count = 1; ?>
				<?php foreach ($teams as $team):?> 
                <tr>
                
                 <td><?= $count ++; ?></td>
                  <td><?= $team->name_of_member ?></td>
                  <td><?= $team->designation ?></td>
                 <td><?= $team->job_description ?></td>
                 <td><?= $team->phone_number ?></td>
                 <td><?= $team->email ?></td>
                 <td><?= $team->created_at ?></td>
                
                 <td>Admin</td>
                 
                  <td>
		  <a href=<?php echo site_url('Admin/AdminController/edit_team/' . $team->portfolio_id) ?> class="btn btn-xs btn-info">Edit <i class="m-icon-swapright m-icon-white"></i></a>
  <a href=<?php echo site_url('Admin/AdminController/delete_team/' . $team->portfolio_id) ?> class="btn btn-xs btn-danger">Delete <i class="m-icon-swapright m-icon-white"></i></a>
				
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