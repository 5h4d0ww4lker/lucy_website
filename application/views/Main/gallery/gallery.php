 <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Gallery</h2>
               </div>
        

           

            <div class="row">
                <div class="portfolio-items">
                 <?php foreach ($galleries as $gallery):?> 
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">

                        <div class="recent-work-wrap">
                            <img class="img-responsive2" src="<?php echo base_url(); ?><?= $gallery->image_url ?>" alt="" height="300" width="350">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?= $gallery->title ?></a></h3>
                                    <p><?= $gallery->description ?></p>
                                    <a class="preview" href="<?php echo base_url(); ?><?= $gallery->image_url ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <?php endforeach ?>   
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->