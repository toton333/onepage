<?php 
/*
Template Name: Front Page Template
*/

?>
<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<?php wp_head(); ?>

</head>

<body <?php body_class( ); ?> id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <?php global $redux_onepage; ?>
                <a class="navbar-brand" href="index.html">
                    <h1><?php echo $redux_onepage['opt-intro-brand']; ?></h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">

       <?php 
           global $post;
           $args = array('post_type' => 'page', 'post_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC');
           $posts = get_posts( $args );
           foreach($posts as $post) : setup_postdata( $post );


       ?>
       <li><a href="#<?php echo $post->post_name; ?>"><?php the_title(); ?></a></li>

      <?php endforeach; ?>

      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<?php get_template_part( 'template', 'intro' ); ?>

	

	 <?php 
	     global $post;
	     $args = array('post_type' => 'page', 'post__not_in' => array(4), 'post_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC');
	     $posts = get_posts( $args );
	     foreach($posts as $post) : setup_postdata( $post );


	 ?>
	 <?php get_template_part( 'template', $post->post_name );  ?>

	<?php endforeach; ?>

	

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2014 - Squad. All rights reserved. Designed by <a href="http://bootstraptaste.com">Bootstrap Themes</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>

 <?php wp_footer(); ?>
</body>

</html>
