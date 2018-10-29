<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators"> 
            <?php 
$min = min($sliders);

print_r($min['slider_id']);
//die();
?>
             
               
            </ol>
            <div class="carousel-inner">

 <?php foreach ($sliders as $slider):?> 

    <?php if ($slider['slider_id']==$min['slider_id']) {  ?>
                <div class="item active" style="background-image: url(<?php echo base_url(); ?><?= $slider['image_url'] ?>)">

                    <?php } ?>

                <?php if ($slider['slider_id'] > $min['slider_id']) { ?>  
                 <div class="item" style="background-image: url(<?php echo base_url(); ?><?= $slider['image_url'] ?>)">
                    <?php } ?>
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?= $slider['title'] ?></h1>
                                    <h2 class="animation animated-item-2"><?= $slider['description'] ?></h2>
                                   
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                              <!--   <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>theme1/images/slider/img1.jpg" class="img-responsive">
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

            
<?php endforeach ?>   



             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->