
<!-- Start Blog -->
<section class="blog blog-post">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <article>
          <img src="<?php echo base_url(); ?>theme1/img/main-photo-1.jpg" alt="" class="main-photo">
          <header class="article-header">
            <div class="row">
              <div class="col-lg-8 col-md-8">
                <h4 class="title">Post title goes here</h4>
                <ul class="meta-tags custom-list list-inline">
                  <li><a href="#">2 comments</a></li>
                  <li><a href="#">by admin</a></li>
                  <li><a href="#">jun 20, 2015</a></li>
                  <li><a href="#">buildings</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4">
                <ul class="social list-inline custom-list pull-right">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </header>
          <div class="article-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo officiis, beatae illo necessitatibus animi dolore eveniet magni.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reiciendis maiores dignissimos voluptatum eum eos est sapiente ad aut et veniam quae corporis, labore cum vitae asperiores libero quos dolore.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.</p>
          </div>
          <div id="comments">
            <ul class="custom-list comments">
              <li class="comment">
                <div class="post-comment-portrait">
                  <img src="<?php echo base_url(); ?>theme1/img/comment-thumbnail.jpg" alt="" class="avatar">
                </div>
                <div class="post-comment-meta">
                  <span>Josh homme</span>
                  <span>Jun 20, 2015  5:30pm</span>
                  <span>reply</span>
                </div>
                <div class="post-comment-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem roin nibh augue, suscipit.</p>
                </div>
              </li>
              <li class="comment">
                <div class="post-comment-portrait">
                  <img src="<?php echo base_url(); ?>theme1/img/comment-thumbnail-2.jpg" alt="" class="avatar">
                </div>
                <div class="post-comment-meta">
                  <span>Josh homme</span>
                  <span>Jun 20, 2015  5:30pm</span>
                  <span>reply</span>
                </div>
                <div class="post-comment-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem roin nibh augue, suscipit.</p>
                </div>
              </li>
            </ul>
          </div>
          <div id="respond" class="comment-respond">
            <h3 id="reply" class="title comment-reply-title">
              Join Discussion
            </h3>
            <form action="#" class="default-form comment-form">
              <div class="row">
                <div class="col-sm-4">
                  <p class="form-row">
                    <input type="text" placeholder="Name" name="name">
                  </p>
                </div>
                <div class="col-sm-4">
                  <p class="form-row">
                    <input type="email" placeholder="Email" name="email">
                  </p>
                </div>
                <div class="col-sm-4">
                  <p class="form-row">
                    <input type="text" placeholder="Website" name="website">
                  </p>
                </div>
                <div class="col-sm-12">
                  <p class="form-row">
                    <textarea name="comments" rows="10" placeholder="Your comments"></textarea>
                    <input name="submit" id="submit" class="btn btn-default btn-transparent" value="Post Comment" type="submit">
                  </p>
                </div>
              </div>
            </form>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="sidebar-widget custom-list">
          <form action="#" class="default-form search-form">
            <input type="text" placeholder="Search">
            <button class="btn">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
        <div class="sidebar-widget custom-list">
          <h4 class="title">Latest posts</h4>
          <ul class="posts">
            <li class="single-post">
              <img src="<?php echo base_url(); ?>theme1/img/sidebar-thumbnail-1.jpg" alt="" class="thumbnail">
              <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
              <span class="meta">by admin on jun 19,2015</span>
            </li>
            <li class="single-post">
              <img src="<?php echo base_url(); ?>theme1/img/sidebar-thumbnail-1.jpg" alt="" class="thumbnail">
              <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
              <span class="meta">by admin on jun 19,2015</span>
            </li>
          </ul>
        </div>
        <div class="sidebar-widget categories">
          <h4 class="title">Categories</h4>
          <ul class="custom-list">
            <li><a href="#">Architecture</a></li>
            <li><a href="#">Buildings</a></li>
            <li><a href="#">Constructions</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Real estate</a></li>
            <li><a href="#">Uncategorized</a></li>
          </ul>
        </div>
        <div class="sidebar-widget">
          <h4 class="title">Tag cloud</h4>
          <div class="tagcloud">
            <a href="#">Architecture</a>
            <a href="#">Buildings</a>
            <a href="#">Rent</a>
            <a href="#">Cost</a>
            <a href="#">Developer</a>
            <a href="#">Flat</a>
            <a href="#">Apartment</a>
            <a href="#">Renovations</a>
            <a href="#">Constructions</a>
            <a href="#">Deal</a>
          </div>
        </div>
        <div class="sidebar-widget archive">
          <h4 class="title">Archive</h4>
          <ul class="custom-list">
            <li><a href="#">June 2015</a></li>
            <li><a href="#">May 2015</a></li>
            <li><a href="#">April 2015</a></li>
            <li><a href="#">March 2015</a></li>
            <li><a href="#">February 2015</a></li>
            <li><a href="#">Show all</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Blog -->