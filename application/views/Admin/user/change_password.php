    <?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
 

    <link href="<?php echo base_url();?>material/selecter/select2.min.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>material/selecter/select2.min.js"></script>

    <div class="container">
         <?php echo form_open('user/User_Controller/change_password'); ?>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
    			<pre class="title_bar"><a href="">User-Management</a>&nbsp;/&nbsp;<a href="#">User</a>&nbsp;/&nbsp;<a href="">Change password</a> </pre>
    		</div>	
    	</div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6  title_bar_2"  >
                <h3> <span class="step size-24"><i class="glyphicon glyphicon-plus"></i>
                </span> Change user password</h3>
            </div>
    	</div>
    	<?php echo validation_errors(); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Current Password </b> * 
                <input id="c-password" class="input-sm form-control" value="" type="password" required="required"  name="current_password">
          
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>New Password </b> * 
                <input id="n-password" class="input-sm form-control" value="" type="password" required="required" name="new_password">
             </div>
        </div><br>
                <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <b>Confirm New Password </b> * 
                <input id="c-n-password" class="input-sm form-control " value="" type="password" required="required" name="comfirm_new_password">
              
                
            </div>
        </div><br>

        
    	<div class="row sub">
            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
                <button type="submit" class="btn btn-success subb" value="add_list"   name="add_list" ><?php echo "Update Password";?></button>
            </div>
        </div><br>

       

    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6">
    			<a href="<?php echo base_url();?>dashbord/Dashbord_Controller"><button type="button" class="btn btn-default subb"><?php echo CANCLE_BUTTON;?></button></a>
    		</div>
    	</div>
    	</form>
    		
    	
    </div> <!-- /container -->


  <script type="text/javascript">
     $('#fullname').select2();
   $('.account,.change-password').addClass('active');
  </script>