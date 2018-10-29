    <!-- our-team -->
      <section id="about-us">
        <div class="container">
          <div class="team">
        <div class="center wow fadeInDown">
          <h2>Our Team</h2>
         
        </div>

        <div class="row clearfix">
            <?php foreach ($teams as $team):?> 
          <div class="col-md-4 col-sm-6" style="padding-bottom: 10px;"> 
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                   <img src="<?php echo base_url(); ?><?= $team->image_url?>" class="img-responsive2" width="150" height="150" alt=""/>
                </div>
                <div class="media-body">
                  <h4><?= $team->name_of_member?></h4>
                  <h5><?= $team->designation?></h5>
                 
                
              </div><!--/.media -->
              <p><?= $team->job_description?></p>
            </div>
          </div><!--/.col-lg-4 -->
              
           
        </div> <!--/.row -->

         <?php endforeach ?>  
      
     
      </div><!--section-->
    </div>
  </section>