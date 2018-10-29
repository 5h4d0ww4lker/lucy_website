 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                  <?php foreach ($pages_single as $page):?> 
               <h2><?= $page['title'] ?></h2>
               <?php endforeach ?>  
                      </div>

            <div class="row">
                <div class="features">
                  

                 

                 
                 <?php foreach ($page_contents as $page_content):?> 
                 

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                             <img class="img-responsive2" src="<?php echo base_url(); ?><?= $page_content->image_url ?>" alt="" height="250" width="350">
                            <h2><?= $page_content->title ?></h2>
                            <h3><?= $page_content->description ?></h3>
                        </div>
                    </div><!--/.col-md-4-->

       <?php endforeach ?>   
                
                </div><!--/.products-->
            </div><!--/.row--> 


          
        
       
        </div><!--/.container-->
    </section><!--/#feature-->