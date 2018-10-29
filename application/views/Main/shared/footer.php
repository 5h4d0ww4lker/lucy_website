
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                 <p align="center">   &copy; 2018 <?php foreach ($company as $c):?> <?= $c->company_name ?><?php endforeach ?>. &nbsp;&nbsp;&nbsp;Designed and Developed by <a href="http://wagwago.com">Wagwago Engeneering</a></p>
                </div>
             
            </div>
        </div>
    </footer><!--/#footer-->


    <script src="<?php echo base_url(); ?>theme1/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>theme1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>theme1/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>theme1/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>theme1/js/main.js"></script>
    <script src="<?php echo base_url(); ?>theme1/js/wow.min.js"></script>
      <script type="text/javascript">
 $('.nav navbar-nav').on('click', 'li', function(){


$(this).addClass('active');

 });
</script>
</body>
</html>