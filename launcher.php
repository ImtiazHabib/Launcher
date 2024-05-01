<?php
/*
* Template Name: Launcher
*/
?>
<?php
   
   the_post();
   get_header( );

   // catching custom field values like Website name and description start
   $website_name = get_post_meta(get_the_id(),"Website Name",true);
   $website_description = get_post_meta(get_the_id(),"Website description",true);
   // catching custom field values like Website name and description end



?>
	<body <?php body_class( ); ?>>

	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center home_background">
		<h1 id="fh5co-logo"><a href="<?php echo site_url( ); ?>"><?php echo bloginfo( "name" ); ?></a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2> <?php echo esc_attr( $website_name ) ?> Launching Soon!</h2>
									<p> <?php echo esc_attr( $website_description ) ?> </p>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter your email">
										<input type="submit" value="Send" class="btn btn-primary">
										<p class="tip">Please enter your email address for early access.</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<ul id="fh5co-social">
						

						<!-- Showing SideBar start -->
						<?php
						   if(is_active_sidebar( "footer-right" )){
						   	dynamic_sidebar( "footer-right" );
						   }
						?>
						<!-- Showing SideBar end -->

					</ul>
				</div>
				<div class="col-md-6 fh5co-copyright">
					<!-- Showing SideBar start -->
						<?php
						   if(is_active_sidebar( "footer-left" )){
						   	dynamic_sidebar( "footer-left" );
						   }
						?>
						<!-- Showing SideBar end -->
				</div>
			</div>
		</div>
		
	</div>
<?php
 
   get_footer( );
?>

