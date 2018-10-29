 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                   </div>

            <div class="row">
                <div class="features">
                 

                 

                  
                
                 

                   <?php foreach ($services as $service):?> 

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                          <img class="img-responsive2" src="<?php echo base_url(); ?><?= $service->image_url ?>" alt="" height="250" width="350">
                            <h2><?= $service->title ?></h2>
                            <h3><?= $service->description ?></h3>
                        </div>
                    </div><!--/.col-md-4-->

                     <?php endforeach ?> 
                </div><!--/.services-->
            </div><!--/.row--> 


            <div class="get-started center wow fadeInDown">
                <h2>Our Motto</h2>
                <?php foreach ($company as $c):?> 
                <p class="lead"><?= $c->slogan ?></p>
               

                 <?php endforeach ?> 
            </div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
                <h2>What our clients say</h2>
                 </div>

            <div class="row">
             <?php foreach ($testimonials as $testimonial):?> 
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php echo base_url(); ?><?= $testimonial->image_url ?>" class="img-circle" alt="">
                        <h3><?= $testimonial->description ?></h3>
                        <h4><span><?= $testimonial->testimony_from ?></h4>
                    </div>
                </div>

                  <?php endforeach ?> 
               
               
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->