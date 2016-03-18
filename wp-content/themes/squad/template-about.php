<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2><?php the_title(); ?></h2>
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
        	<?php
        	   $prefix = '_onepage_group_';
               $entries = get_post_meta( get_the_ID(), $prefix . 'demo', true );

               foreach ( (array) $entries as $key => $entry ) {

                   $img = $title = $desc = $caption = '';

                   if ( isset( $entry['title'] ) )
                       $title = esc_html( $entry['title'] );

                   if ( isset( $entry['description'] ) )
                       $desc = wpautop( $entry['description'] );

                   if ( isset( $entry['image_id'] ) ) {
                       $img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
                           'class' => 'img-responsive img-circle',
                       ) );
                   }
                   $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

                   // Do something with the data
                ?>
                   <div class="col-xs-6 col-sm-3 col-md-3">
       				<div class="wow bounceInUp" data-wow-delay="0.2s">
                       <div class="team boxed-grey">
                           <div class="inner">
       						<h5><?php echo $title; ?></h5>
                               <p class="subtitle"><?php echo $caption; ?></p>
                               <div class="avatar"><?php echo $img; ?></div>
                           </div>
                       </div>
       				</div>
                   </div>
                   

                <?php


               }
        	 ?>
           
			
			
        </div>		
		</div>
	</section>
	<!-- /Section: about -->