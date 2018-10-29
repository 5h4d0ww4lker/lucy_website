 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Community Service Works</h2>
                   </div>

            <div class="row">
                <div class="features">
                 

                 

                  
                
                 

                   <?php foreach ($community_services as $community_service):?> 

                    <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                          <img class="img-responsive2" src="<?php echo base_url(); ?><?= $community_service->image_url ?>" alt="" height="250" width="1150">
                            <h2 align="center"><?= $community_service->title ?></h2>
                            <p class="lead"><?= $community_service->description ?></p>
                        </div>
                    </div><!--/.col-md-4-->

                     <?php endforeach ?> 
                </div><!--/.community_services-->
            </div><!--/.row--> 


             <ul class="pagination pagination-lg">
                      <?=$this->pagination->create_links() ?>
                       
                    </ul><!--/.pagination-->

          

          

        </div><!--/.container-->
    </section><!--/#feature-->