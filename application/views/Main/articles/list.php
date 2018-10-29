

    <section id="blog" class="container">
        <div class="center">
            <h2>Articles</h2>
           
        </div>

        <div class="blog">
            <div class="row">
          
                 <div class="col-md-8">
                 <?php foreach ($articles as $article):?> 
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?= $article->created_at ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?= $article->created_by ?></a></span>
                                   
                                </div>
                            </div>

                            <?php
                            if(strlen($article->content) > 200){

                                $content = substr($article->content , 0 , 200);
                                
                            } 

                            else{
                                $content = $article->content;
                            }
                            
                            
                            ?>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url(); ?><?= $article->image_url ?>" width="100%"  height="250px" alt="" /></a>
                                <h2><a href="<?php echo site_url('welcome/article_detail/' . $article->article_id) ?>"><?= $article->title ?></a></h2>
                                <h3><?= $content ?></h3>
                                <a class="btn btn-primary readmore" href="<?php echo site_url('welcome/article_detail/' . $article->article_id) ?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <?php endforeach ?>
                        
                    <ul class="pagination pagination-lg">
                      <?=$this->pagination->create_links() ?>
                       
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                    <?php echo form_open_multipart('welcome/search_articles');?>
                                <input type="text" name="search_term" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
    				
    				
                     

    				<div class="widget archieve">
                        <h3>Archievs</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                <?php
$CI =&get_instance();
$CI->load->model('Admin/AdminModel');
$result2 = $CI->AdminModel->get_archives();

   foreach ($result2 as $rs2):?>
                   <li><a href="<?php echo site_url('welcome/article_detail/' . $article->article_id) ?>"><i class="fa fa-angle-double-right"></i> <?= $rs2->created_at ?> </a></li>

                 
                            
                    
 
  
  <?php endforeach ?>                             <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li> -->
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    				
                   
    			
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
