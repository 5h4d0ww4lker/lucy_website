 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Products</h2>
                      </div>

            <div class="row">
                <div class="features">
                  

                 

                 
                 <?php foreach ($products as $product):?> 
                 

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                             <img class="img-responsive2" src="<?php echo base_url(); ?><?= $product->image_url ?>" alt="" height="250" width="350">
                            <h2><?= $product->title ?></h2>
                            <h3><?= $product->description ?></h3>
                        </div>
                    </div><!--/.col-md-4-->

       <?php endforeach ?>   
                
                </div><!--/.products-->
            </div><!--/.row--> 


          
        
       
        </div><!--/.container-->
    </section><!--/#feature-->