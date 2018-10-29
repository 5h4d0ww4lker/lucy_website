


    <section id="blog" class="container">
        <div class="center">
        <?php foreach ($articles as $article):?> 
            <h2><?= $article->title ?></h2>
            <?php endforeach ?>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                <?php foreach ($articles as $article):?> 
                <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?= $article->created_at ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?= $article->created_by ?></a></span>
                                   
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url(); ?><?= $article->image_url ?>" width="100%" alt="" /></a>
                              
                                <h3><?= $article->content ?></h3>
                               
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                     
                    <?php endforeach ?>
                       


             

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
