 <?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(validation_errors()==!'' || @$error!="")
echo'<div class="form-group col-md-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>'.validation_errors().'<br/>'.@$error.'</div></div>';
            /**desplay all department on select box option*/
             $group_option='';
            foreach ($group_item as $group): 
                    $group_option=$group_option.' <option value='.$group['group_id'].'>'.$group['group_name'].'</option>';
            endforeach;
            /*end*/

            foreach ($user_item as $user):
              $full_name=$user['user_full_name'];
              $user_name=$user['user_username'];
              $user_id=$user['user_id'];
              $user_status=$user['user_status'];
              $user_group=$user['user_group'];
              $user_created_date=$user['user_created_date'];
              
             /*get all department name*/
              $id=$user['user_group'];
              $query_dep= $this->db->get_where('user_groups', array('group_id' => $id));
              $row = $query_dep->row();
              $group_name= $row->group_name;
            endforeach;
            
           if($user_status=='t' || $user_status=='T' || $user_status=='TRUE'){
           	$checked='checked';
            $satus_active='Active';
           }
           else{
           	$checked='';
            $satus_active='Disabled';
           }

    $emp_option='';
    foreach ($emp_item as $emp): 
            $emp_option=$emp_option.' <option value='.$emp['employee_c_id'].'>'.$emp['employee_full_name'].'/'.$emp['employee_c_id'].'</option>';
    endforeach;


    /*desplay Employee name  */
    $emp_id=$full_name;
    $query_employee= $this->db->get_where('employees', array('employee_c_id' => $emp_id));
    $row = $query_employee->row();
    $employee_full_name= $row->employee_full_name;
    /*end*/

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

    $edit_user_privelage=$edit_user; 
    $delete_user_privelage=$delete_user; 



  if($edit_user_privelage=='t')
    $edit_user_privilage_button='<div class="row sub"><div class="col-xs-12 col-sm-6  col-md-12"><button type="submit" value="change" name="change" class="btn btn-info subb" >'.SAVE_CHANGE_BUTTON.'</button></div></div></br>';
  else
    $edit_user_privilage_button='';

  if($delete_user_privelage=='t')
    $delete_user_privelag_button='<div class="row"><div class="col-xs-12 col-sm-6  col-md-12"><button type="button" onclick="confirm()"; value="delete" class="btn btn-danger subb" >'.DELETE_BUTTON.'</button></div></div></br>';
  else
    $delete_user_privelag_button='';



?>
     
    <script src="<?php echo base_url();?>material/notification/notie.js"></script>
    <link href="<?php echo base_url();?>material/notification/notie.css"rel="stylesheet">
    <div class="container">
         <?php echo form_open('user/User_Controller/insert_update_from/'.$user_id); ?>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
    			<pre class="title_bar"><a href="">User-Management</a>&nbsp;/&nbsp;<a href="#">User</a>&nbsp;/&nbsp;<a href="">Edit</a> </pre>
    		</div>	
    	</div>
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-6">

    	<div class="row">
    		<div class="col-xs-12 col-sm-6  col-md-12  title_bar_2"  >
                <h3> <span class="step size-24"><i class="glyphicon glyphicon-edit"></i>
                </span> Edit User</h3>
            </div>
    	</div>
   
        <div class="row">
            <div class="col-xs-12 col-sm-6  col-md-12">
                <b>Employee Name * </b>
                <div class="input-group"  data-validate="length"  data-length="3" >
                <select id="fullname" class="form-control"  name="fullname" required="required">
                    <option value="<?php echo $full_name;?>"> <?php echo $full_name.'/'.$employee_full_name;?> </option>
                    <?php echo $emp_option;?>
                </select>
                 <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
                <small id="fullname-e">    </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6  col-md-12">
                <b>Username </b> * 
                <div class="input-group"  data-validate="length"  data-length="3" >
                <input id="username" class="input-sm form-control" value="<?php echo $user_name;?>" type="text"  name="username" required="required" minlength="3"  maxlength="30">
                <input id="usernamee" class="input-sm form-control"  value="0" type="hidden" >
                <input id="exit_user" class="input-sm form-control"  name="exit_user" value="<?php echo $user_id;?>" type="hidden" >
                 <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
                <small id="username-e" > </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6  col-md-12">
                <b>Password * </b> 
                <input id="password" class="input-sm form-control"  type="password"  name="password" minlength="3"  maxlength="30">
                <small id="password-e"> </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 c col-md-12">
                <b>Confirm Password * </b> 
                <input id="cpassword" class="input-sm form-control"  type="password"  name="cpassword" minlength="3"  maxlength="30">
                <small id="cpassword-e">   </small>
            </div>
        </div></br>

        
        <div class="row">
            <div class="col-xs-12 col-sm-6  col-md-12">
                <b>User  Group* </b> 
                <div class="input-group"  data-validate="length"  data-length="1" >
                <select id="group" class="form-control"  name="group" required="required">
                    <?php echo '<option value='.$id.'>'.$group_name.'</option>';?>
                    <?php echo $group_option;?>
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
            </div>
        </div></br>


        <div class="row">
            <div class="col-xs-12 col-sm-6  col-md-12">
                <div class="checkbox checkbox-success">
                        <input id="checkbox3" class="styled" type="checkbox" name="status" <?php echo $checked;?> >
                        <label for="checkbox3">
                                <b>Activate User Account</b>
                        </label>
                    </div>
            </div>
        </div></br>
        <?php echo $edit_user_privilage_button.$delete_user_privelag_button;?>

    	<div class="row">
    		<div class="col-xs-12 col-sm-6  col-md-12">
    			<a href="<?php echo base_url();?>user/User_Controller"><button type="button" class="btn btn-default default_button"><?php echo CANCLE_BUTTON;?></button></a>
    		</div>
    	</div>
    	</form>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-offset-1 col-md-4"> 
            <div class="row">
              <div class="col-xs-12 col-sm-12  col-md-12 title_bar_2"><h3> <span class="step size-24"><i class="glyphicon glyphicon-info-sign"></i></span> User Information</h3></div>
             </div>

            <div class="row">
                <div class="panel panel-default ">
                    <div class="panel-heading panel-collapsed">
                    <h3 class="panel-title"><b>Profile</b></h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-hand-down"></i></span>
                    </div>
                    <div class="panel-collapsed panel-body">

                      <table class="table  table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td><b>User Employee ID</b></td><td><?php echo $full_name;?></td>
                            </tr>
                            <tr>
                                <td><b>User Name </b></td><td><?php echo $user_name; ?></td>
                            </tr>
                            <tr>
                                <td><b>User Group </b></td><td><?php echo $group_name; ?></td>
                            </tr>
                            <tr>
                                <td><b>Created Date </b></td><td><?php echo $user_created_date; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status </b></td><td><?php echo $satus_active; ?></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>


        </div>
        </div>	
    </div> <!-- /container -->

<script type="text/javascript">
    $('.admin,.group_menu,.all_user').addClass('active');
    function confirm() {
          notie.confirm('Are you sure you want to do Delete ?<br><b>This ', 'Yes', 'Cancel', function() {
          window.location.replace('<?php echo base_url();?>user/User_Controller/delete/<?php echo $user_id?>');
                }
            );
     }


var edit_user_privelage = "<?php echo $edit_user_privelage;?>";
  if(edit_user_privelage=='f'){ 
  $('.subb,sub,.input-sm, .form-control,.checkbox,.checkbox-success').attr("disabled","disabled");
  $("input:checkbox").attr("disabled","disabled");
}
</script>
<script src="<?php echo base_url();?>material/jq/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>material/js/left_side_slider.js"></script>
<script src="<?php echo base_url();?>material/js/user/edit_users.js"></script>