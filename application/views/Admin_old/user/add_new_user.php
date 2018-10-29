<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    if(validation_errors()==!'')
     echo'<div class="form-group col-md-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'.validation_errors().'</div></div>';
    

    $emp_option='';
    foreach ($emp_item as $emp): 
            $emp_option=$emp_option.' <option value='.$emp['employee_c_id'].'>'.$emp['employee_full_name'].'/'.$emp['employee_c_id'].'</option>';
    endforeach;

    $group_option='';
    foreach ($group_item as $group): 
        $group_option=$group_option.' <option value='.$group['group_id'].'>'.$group['group_name'].'</option>';
    endforeach;


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
if ( $add_user  =='f'){
            show_404();
}

    $add_message= $this->session->userdata('add_message');
    $this->session->unset_userdata('add_message');

?>
    <script src="<?php echo base_url();?>material/notification/notie.js"></script>
    <link href="<?php echo base_url();?>material/notification/notie.css"rel="stylesheet">

    <div class="container">
        <?php echo form_open('user/User_Controller/crate_user'); ?>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
    			<pre class="title_bar"><a href="">User-Management</a>&nbsp;/&nbsp;<a href="#">User</a>&nbsp;/&nbsp;<a href="">New</a> </pre>
    		</div>	
    	</div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6  title_bar_2"  >
                <h3> <span class="step size-24"><i class="glyphicon glyphicon-plus"></i>
                </span> New User</h3>
            </div>
    	</div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Employee Name * </b>
                <div class="input-group"  data-validate="length"  data-length="3" > 
                  <select id="fullname" class="form-control"  name="fullname" required="required">
                    <option value="">To </option>
                    <?php echo $emp_option;?>
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
                <small id="fullname-e">    </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Username </b> * 
                <div class="input-group"  data-validate="length"  data-length="3" > 
                <input id="username" class="input-sm form-control" value="" type="text"  name="username" required="required" minlength="3" maxlength="30" >
                <input id="usernamee" class="input-sm form-control" value="" type="hidden" >
                <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
                <small id="username-e"> <code>User Name is required and must have minimum of 3 characters </code> </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Password * </b> 

                <input id="password" class="input-sm form-control" value="" type="password"  name="password" minlength="3"  maxlength="30">
                <small id="password-e"> <code>Password is required and must have minimum of 3 characters</code> </small>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Confirm Password * </b> 
                <input id="cpassword" class="input-sm form-control" value="" type="password"  name="cpassword" minlength="3"  maxlength="30">
                <small id="cpassword-e"> <code>Confirm Password is required </code>  </small>
            </div>
        </div></br>

        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>User  Group* </b> 
                <div class="input-group"  data-validate="length"  data-length="1" > 
                <select id="group" class="form-control"  name="group" required="required">
                    <?php echo $group_option;?>
                </select>
                 <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <div class="checkbox checkbox-success">
                    <input id="checkbox3" class="styled" type="checkbox" name="status">
                    <label for="checkbox3"><b>Activate User Account</b></label>
                </div>
            </div>
        </div></br>
    	<div class="row sub">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <button type="submit" class="btn btn-success subb" value="add_list"  disabled="disabled" name="add_list" ><?php echo ADD_BUTTON;?></button>
            </div>
        </div></br>

        <div class="row sub">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <button type="submit" disabled="disabled" class="btn btn-primary subb" value="add_more" name="add_more" ><?php echo ADD_MORE_BUTTON;?></button>
            </div>
        </div></br>

    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
    			<a href="<?php echo base_url();?>user/user_Controller"><button type="button" class="btn btn-default default_button"><?php echo CANCLE_BUTTON;?></button></a>
    		</div>
    	</div>
    	</form>
    </div> <!-- /container -->

<script type="text/javascript">
   $('.admin,.group_menu,.add_user').addClass('active');
    var add_message = "<?php echo $add_message;?>";   

    if (add_message!="")
    notie.alert(1,'<?php echo $add_message;?>');
</script>
<script src="<?php echo base_url();?>material/js/user/users.js"></script>