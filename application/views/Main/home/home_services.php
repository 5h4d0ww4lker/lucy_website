 <?php foreach ($company as $c):?>
 <section style = "background: #000 url(<?php echo base_url(); ?><?= $c->services_bg_image_url ?>);
  background-size: cover;" class = "service-item">
   <?php endforeach ?>   
     <div class="container">

            <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                  </div>

            <div class="row">

             

 <?php foreach ($services as $service):?> 
            
  <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div>
                            <img class="img-responsive" src="<?php echo base_url(); ?><?= $service->image_url ?>" width="250" height="200">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?= $service->title ?></h3>
                            <p><?= $service->description ?></p>
                        </div>
                    </div>
                </div>

       <?php endforeach ?>   
                                                                 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
