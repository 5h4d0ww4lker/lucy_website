 <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
        
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                           
 <?php foreach ($contact_us as $contact):?> 

                            <li class="col-sm-12">

                          
                                <address>
                                    <h5><?= $contact->description ?></h5>
                                    <p><?= $contact->phone_office_one ?> <br>
                                    Email Address:<?= $contact->email_one ?></p>
                                </address>
                                  </li>
 <?php endforeach ?>   

 

                        
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

<?php foreach ($company as $c):?>
 <section style = "background: #000 url(<?php echo base_url(); ?><?= $c->services_bg_image_url ?>);
  background-size: cover;">
   <?php endforeach ?>  
        <div class="container">
        <div class="widget blog_gallery">
                        <h2>Locations</h2>
                        <ul class="sidebar-gallery">
                         <?php foreach ($companies as $company):?> 
                           

                            <li>
                                <a href=<?php echo site_url('welcome/locations_ref/' . $company->company_id) ?>><img src="<?php echo base_url(); ?><?= $company->logo_url ?>" alt="" width = "200" height = "100" /></a>
                            </li>
                           <?php endforeach ?>                        </ul>
                    </div><!--/.blog_gallery-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

