 <section id="portfolio">
        <div class="container">
            <div class="center">
                 <?php foreach ($pages_single as $page):?> 
               <h2><?= $page['title'] ?></h2>
               <?php endforeach ?>   
               </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*"></a></li>
              
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                 <?php foreach ($page_contents as $page_content):?> 
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">

                        <div class="recent-work-wrap">
                            <img class="img-responsive2" src="<?php echo base_url(); ?><?= $page_content->image_url ?>" alt="" height="300" width="350">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?= $page_content->title ?></a></h3>
                                    <p><?= $page_content->description ?></p>
                                    <a class="preview" href="<?php echo base_url(); ?><?= $page_content->image_url ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <?php endforeach ?>   
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->