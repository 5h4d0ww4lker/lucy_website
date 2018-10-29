<?php foreach ($sliders as $slider):?> 
                 <?php if ($slider['slider_id']==$min['slider_id']) {  ?>
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <?php } ?>
                <?php if ($slider['slider_id'] > $min['slider_id']) { ?> 
                    <li data-target="#main-slider" data-slide-to="<?= $slider['slider_id'] ?>"></li>
                    <?php } ?>
                <?php endforeach ?>   