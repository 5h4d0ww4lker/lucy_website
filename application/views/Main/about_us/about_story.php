<section id="about-us">
        <div class="container">
      <div class="center wow fadeInDown">
       <?php foreach ($about_us as $about):?> 
        <h2><?= $about->title ?></h2>
        <p class="lead"> <?= $about->description ?></p>
      </div>

      <?php endforeach ?>  
      
      <!-- about us slider -->
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
         
            <ol class="carousel-indicators visible-xs">
              
               <?php foreach ($sliders as $slider):?> 
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
               <?php endforeach ?>  
            
            </ol>

            

          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo base_url(); ?>theme1/<?php echo base_url(); ?>theme1/images/slider_one.jpg" class="img-responsive" alt=""> 
             </div>
             <div class="item">
              <img src="<?php echo base_url(); ?>theme1/images/slider_one.jpg" class="img-responsive" alt=""> 
             </div> 
             <div class="item">
              <img src="<?php echo base_url(); ?>theme1/images/slider_one.jpg" class="img-responsive" alt=""> 
             </div> 
          </div>
          
          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i> 
          </a>
          
          <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i> 
          </a>
        </div> <!--/#carousel-slider-->
      </div><!--/#about-slider-->
      
      
     

      <!-- our-team -->
      <div class="team">
        <div class="center wow fadeInDown">
          <h2>Our Team</h2>
               </div>

        <div class="row clearfix">
  <?php foreach ($teams as $team):?> 

          <div class="col-md-4 col-sm-6"> 
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="<?php echo base_url(); ?><?= $team->image_url ?>" alt=""></a>
                </div>
                <div class="media-body">
                  <h4><?= $team->name_of_member ?></h4>
                  <h5><?= $team->designation ?></h5>
                
                </div>
              </div><!--/.media -->
              <p><?= $team->job_description ?>.</p>
            </div>
          </div><!--/.col-lg-4 -->
          
           <?php endforeach ?> 
             
        </div> <!--/.row -->
        <div class="row team-bar">
          <div class="first-one-arrow hidden-xs">
            <hr>
          </div>
          <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
          <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
        </div> <!--skill_border-->       

      </div><!--section-->
    </div><!--/.container-->
    </section><!--/about-us-->
  

