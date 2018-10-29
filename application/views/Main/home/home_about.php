    <section id="recent-works">

      <?php foreach ($about_us as $about):?> 
        <div class="container">
            <div class="center wow fadeInDown">
                <h2><?=$about->title ?></h2>
                <p class="lead"<?=$about->description ?></p>
            </div>


        </div><!--/.container-->

         <?php endforeach ?> 
    </section><!--/#recent-works-->