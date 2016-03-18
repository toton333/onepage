<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Get in touch</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <div id="contact-form">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="widget-contact">
                <?php global $redux_onepage; ?>
                <h5><?php echo $redux_onepage['opt-address-heading']; ?></h5>
                
                <address>
                    <?php echo $redux_onepage['opt-address-body']; ?>
                  
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>

                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#"><?php echo $redux_onepage['opt-address-email'] ?></a>
                </address>  
                <address>
                  <strong>We're on social networks</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>   
                </address>                  
            
            </div>  
        </div>
    </div>  

        </div>
    </section>
    <!-- /Section: contact -->