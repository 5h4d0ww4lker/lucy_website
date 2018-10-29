<style>
/* #partner {
    
  background: url(../images/partners/partner_bg.png) 50% 50% no-repeat;
  background-size: cover;
} */

</style>
<?php foreach ($company as $c):?>

 <section style = "background: url(<?php echo base_url(); ?><?= $c->slogan_bg_image_url ?>) 50% 50% no-repeat;
  background-size: cover;">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Moto</h2>
                <p class="lead"> <?= $c->slogan ?>.</p>
            </div>    

                
        </div><!--/.container-->
    </section><!--/#partner-->

    <?php endforeach ?>