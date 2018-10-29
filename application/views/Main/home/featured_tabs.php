<section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Products</h2>
                   </div>

            <div class="row">
                <div class="features">
                    


                  
                
                  
   
         <?php foreach ($products as $product):?> 
            
  <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div>
                            <img class="img-responsive" src="<?php echo base_url(); ?><?= $product->image_url ?>" width="300" height="200">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?= $product->title ?></h3>
                            <p><?= $product->description ?></p>
                        </div>
                    </div>
                </div>

       <?php endforeach ?>   

                 
                </div><!--/.products-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->