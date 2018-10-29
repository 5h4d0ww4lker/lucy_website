
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
  $update_message= $this->session->userdata('update_message');
  $this->session->unset_userdata('update_message');
  $delete_message= $this->session->userdata('delete_message');
  $this->session->unset_userdata('delete_message');
  $add_message= $this->session->userdata('add_message');
  $this->session->unset_userdata('add_message');
$user_group_id = $this->session->userdata('user_group_id');
$query_select_privilage = $this->db->get_where('user_groups', array(
    'group_id' => $user_group_id
));

foreach ($query_select_privilage->result_array() as $value) {
    $add_user = $value['add_user'];
    $view_user = $value['view_user'];
    $edit_user = $value['edit_user'];
    $delete_user = $value['delete_user'];
 }
if ( $view_user  =='f'){
            show_404();
}
   $add_user_privelage=$add_user; 
   if($add_user_privelage=='t')
    $add_user_privelage_button='<div class="row"><div class="col-xs-12 col-sm-6 col-md-offset-9 col-md-2"><a href="'. base_url().'user/User_Controller/add_user_form"> <button type="button" class="btn btn-info" id="table_add_button">'.ADD_NEW_BUTTON.'</button></a></div></div>';
  else
    $add_user_privelage_button='';

?>
<script src="<?php echo base_url();?>material/notification/notie.js"></script>
<link href="<?php echo base_url();?>material/notification/notie.css"rel="stylesheet">

<link href="<?php echo base_url();?>material/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
            <pre class="title_bar"><a href="">User-Management</a>&nbsp;/&nbsp;<a href="#">User</a>&nbsp;/&nbsp;<a href="">All users</a> </pre>
        </div>
    </div>
    <?php echo $add_user_privelage_button;?>
 
    <div class="row"  id="table-row">
        <div class="panel panel-default" id="table_contener">
              <div class="panel-body">
                <div class="table-responsive" >
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example"   >
                         <thead >
                            <tr>
                                <td>Employee Full Name</td>
                                <td>Employee ID</td>
                                <td>User Name</td>
                                <td>User Group</td>
                                <td>Created Date</td> 
                                <td>Status</td></a>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            foreach ($user_item as $user): 
                                if($user['user_status']=='t')
                                  $user_status= "Active";
                                else
                                  $user_status= "Disabele";


                                /*desplay department name */
                                $id=$user['user_group'];
                                $query_dep= $this->db->get_where('user_groups', array('group_id' => $id));
                                $row = $query_dep->row();
                                $group_name= $row->group_name;
                                /*end*/
                                
                                /*desplay Employee name  */
                                $emp_id=$user['user_full_name'];
                                $query_employee= $this->db->get_where('employees', array('employee_c_id' => $emp_id));
                                $row = $query_employee->row();
                                $employee_full_name= $row->employee_full_name;
                                /*end*/

                                echo' <tr href="'.base_url().'user/User_Controller/get_update_user_information/'.$user['user_id'].'">
                                <td>'.$employee_full_name.'</td>
                                <td>'.$user['user_full_name'].'</td>

                                <td>'.$user['user_username'].'</td>
                                <td>'.$group_name.'</td>
                                <td>'.$user['user_created_date'].'</td>
                                <td>'.$user_status.'</td></tr>';
                             ?>
                             <?php endforeach ?>
                          </tbody>
                        </table>
                </div>
              </div>
        </div>
    </div>


</div>

<script src="<?php echo base_url();?>material/js/table/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>material/js/table/dataTables.bootstrap.js"></script>
 
<script type="text/javascript">
 $('.admin,.group_menu,.all_user').addClass('active');


var update_message = "<?php echo $update_message;?>";   
 if (update_message!="")
notie.alert(1,'<?php echo $update_message;?>');
 
var delete_message = "<?php echo $delete_message;?>";   
 if (delete_message!="")
  notie.alert(3,'<?php echo $delete_message;?>');

var add_message = "<?php echo $add_message;?>";   
 if (add_message!="")
 notie.alert(1,'<?php echo $add_message;?>');



$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});
$(document).ready(function() {
    $('#dataTables-example').dataTable(); 



});
</script>

