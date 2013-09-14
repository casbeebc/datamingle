<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="Your goto source for building a software solution quickly and competently." />		    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
		
		<!-- Google Analytics -->
		<script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-1944083-9']);
          _gaq.push(['_setDomainName', 'datamingle.com']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>		
	</head>
	
	<body <?php body_class(); ?> style="margin: 0 0 0 0; padding: 0 0 0 0;">		
        
        <div class="above-banner">
            <div id="top-social">
                        <ul>
                            <li class="ts-facebook">
                                <a href="https://www.facebook.com/datamingle" style="width: 40px;" target="_blank">
                                <div class="ts-icon"></div><div class="ts-text">Facebook</div></a>
                            </li>
                            <li class="ts-twitter">
                                <a href="https://twitter.com/datamingle" style="width:40px;overflow:hidden;"
                                     target="_blank">
                                <div class="ts-icon" target="_blank"></div><div class="ts-text">Twitter</div></a>
                            </li>
                            <li class="ts-gplus">
                                <a href="https://plus.google.com/102922183928811444113" rel="publisher" 
                                    style="width: 40px; overflow: hidden;" target="_blank">
                                <div class="ts-icon"></div><div class="ts-text">Google+</div></a>
                            </li>
                            <li class="ts-phone">
                                <a href="tel:+16192928210" style="width: 40px; overflow: hidden;">
                                <div class="ts-icon"></div><div class="ts-text" target="_blank">+1 (619) 292-8210</div></a>
                            </li>
                            <li class="ts-mail">
                                <a href="#contact" style="width: 40px; overflow: hidden;">
                                <div class="ts-icon"></div><div class="ts-text">Contact Form</div></a>
                            </li>
                        </ul>
            </div>
        <?php if(of_get_option('branding_logo','')!='') { ?>
            <div class="background-logo" style="height:140px;">&nbsp;</div>
            <div class="logo-header">
    			        
    							<img src="<?php echo of_get_option('branding_logo'); ?>" 
    							     alt="<?php echo get_bloginfo('description'); ?>">
    			        
            </div>
        <?php } ?>
        </div>
		<header role="banner">
			<div id="inner-header" class="clearfix">
				<div class="navbar navbar-fixed-top">
				    
					<div class="navbar-inner">
					   
						<div class="container-fluid nav-container">
							<nav role="navigation">
								<a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
									<?php if(of_get_option('menu_logo','')!='') { ?>
										<img src="<?php echo of_get_option('menu_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
										<?php }
										if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
		
