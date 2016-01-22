<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root.'/models/front/Layout_Model.php');
$model	= new Layout_Model();

$pictures = $model->getGalleryBySection($_GET['section']);
?>
	<!DOCTYPE html>
	<html class='no-js' lang='en'>
		<head>
			<title>Villa Aqua Rental - Sections</title>
			<link rel="shortcut icon" href="favicon.ico" />
			<link rel="icon" type="image/gif" href="/images/favicon.png" />
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Des">
        	<meta name="keywords" content="Key">
            <meta name="author" content="Where to GO">
            <meta name="generator" content="By my great hand" />
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="Villa Aqua Rental"/>
            <meta property="og:url" content="http://villaaqua.com/" />
            <meta name="format-detection" content="telephone=no" />
				        	<link rel='stylesheet' id='layerslider-css' href='/css/layerslider.css?ver=5.4.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='contact-form-7-css' href='/css/styles.css?ver=4.2.2' type='text/css' media='all' />
	    <link rel='stylesheet' id='normalize-css' href='/css/normalize.css?ver=2.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='bootstrap.min-css' href='/css/bootstrap.min.css?ver=2.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='font-awesome.min-css' href='/css/font-awesome.min.css' type='text/css' media='all' />
	    <link rel='stylesheet' id='icomoon-css' href='/css/icomoon.css?ver=2.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='owl-carousel-css' href='/css/owl.carousel.css?ver=2.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='jquery-fancybox-css' href='/css/jquery.fancybox.css?ver=2.0' type='text/css' media='all' />
	    <link rel='stylesheet' id='amber-style-css' href='/css/style-amber.css?ver=4.2.5' type='text/css' media='all' />
	    <link rel='stylesheet' id='js_composer_front-css' href='/css/js_composer.css?ver=4.6.2' type='text/css' media='all' />
	    <link rel='stylesheet' id='ult-icons-css' href='/css/icons.css?ver=3.13.2' type='text/css' media='' />
	    <link rel='stylesheet' id='bsf-Defaults-css' href='/css/Defaults.css?ver=4.2.5' type='text/css' media='all' />
	    <link rel='stylesheet' id='bsf-icomoon-css' href='/fonts/icomoon.css?ver=4.2.5' type='text/css' media='all' />
	    <link rel='stylesheet' id='ultimate-style-min-css' href='/css/ultimate.min.css?ver=3.13.2' type='text/css' media='all' />
	    <link rel='stylesheet' id='ultimate-style-min-css' href='/css/back.css' type='text/css' media='all' />
	    
	    <script type='text/javascript' src='/js/jquery.js'></script>
	    
	    <link href="/css/uploadfile.css" rel="stylesheet">
	    <script src="/js/jquery.uploadfile.min.js"></script>
	    <script src="/js/back-sec.js"></script>

	    <style type="text/css">
	        /* Google Fonts */
	        
	        @media (max-width: 991px) {}
	    </style>
	
	    <noscript>
	        <style>
	            .wpb_animate_when_almost_visible {
	                opacity: 1;
	            }
	        </style>
	    </noscript>
	    	    		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66495909-1', 'auto');
          ga('send', 'pageview');

        </script>
						</head>
		<body class="home page page-id-4 page-template-default outer-title_hide wpb-js-composer js-comp-ver-4.6.2 vc_responsive" id="site-start">
    		<div id="page" class="hfeed site">
			
					<!--header-->
		<header id="masthead" class="site-header" role="banner">
            <!-- end .top-navbar -->
            <div class="main-navbar navbar navbar-default">
                <div class="container">
                    <div class="navbar-header" style="margin-left: -30px">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand has-logo" title="Villa Aqua" href="/">
                            <img src="/images/logo.png" alt="Villa Aqua" style="width: 280px;"/>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul id="menu-main_menu" class="nav navbar-nav  navbar-right">
                            <li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item">
                                <a href="villarate.php">Rates</a>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="reviews.php class="dropdown-toggle">Reviews</a>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="main-slider.php" class="dropdown-toggle">Testimonials</a>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="sections.php" class="dropdown-toggle">Sections</a>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="login.php" class="dropdown-toggle">Log Out</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- end .container -->
            </div>
            <!-- end .main-navbar -->
        </header>
	    		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
										<input type="hidden" id="sectionName" value="<?php echo $_GET['section']; ?>"
                                        <div class="wpb_column vc_column_container ">
                                            <div class="mediaSections" >
												<h1>Section <?php echo $_GET['section']; ?></h1>
												<span>(1140 * 676 px)</span>
												<br>
												<br>
												<select id="sectionSelect">
													<option>Choose a section</option>
													<option value="master-bedroom">master-bedroom</option>
													<option value="bedroom-two">bedroom-two</option>
													<option value="bedroom-three">bedroom-three</option>
													<option value="bedroom-four">bedroom-four</option>
													<option value="bedroom-five">bedroom-five</option>
													<option value="living-room">living-room</option>
													<option value="dining-room">dining-room</option>
													<option value="family-room">family-room</option>
													<option value="library-room">library-room</option>
													<option value="kitchen">kitchen</option>
													<option value="pool">pool</option>
													<option value="jacuzzy">jacuzzy</option>
													<option value="oven">oven</option>
													<option value="gym">gym</option>
													<option value="squash">squash</option>
													<option value="activities">activities</option>
													<option value="playacar">playacar</option>
													<option value="weddings">weddings</option>
													<option value="corporate">corporate</option>
													<option value="private-events">private-events</option>
													<option value="photoshoots">photoshoots</option>
													
												</select>
												
												<div class="uploader">
													Upload
												</div>
												<br>
												<br>
												<div class="company-gallery-grid">
													<?php
													if ($pictures)
													{
														foreach($pictures as $g)
														{
														?>
														<div class="image-box" id="cgid-<?php echo $g['picture_id']; ?>">
															<div class="image">		
																<img src="/images/media/thumb/<?php echo $g['picture']; ?>" />
															</div>
															<a href="javascript:void(0);" cgid="<?php echo $g['picture_id']; ?>" class="deleteGallery" >delete</a>
														</div>
														<?php
														}
													}
													?>
													<div class="clr"></div>
												</div>
											</div>
                                            
                                            
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                </div>
            </div>
        </div>
        <div class="buy_theme_popup ">
	        <a target="_blank " href="/contact-us/" class="buy_button ">Book Now</a>
	    </div>
	    <script type="text/javascript ">
        jQuery(document).ready(function ($) {
            var page_height = $('html').height() / 4;
            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop() + $(window).height();
                if (page_height <= scroll && scroll != $(document).height()) {
                    $(".buy_theme_popup ").addClass('active');
                }
                if (scroll == $(document).height()) {
                    $(".buy_theme_popup ").removeClass('active');
                }
            });
        });
    	</script>
	    <script type='text/javascript' src='/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
	    <script type='text/javascript'>
	        /* <![CDATA[ */
	        var _wpcf7 = {
	            "loaderUrl ": "http:\/\/amber.stylemixthemes.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif ",
	            "sending ": "Sending ... ",
	            "cached ": "1 "
	        };
	        /* ]]> */
	    </script>
	    <script type='text/javascript' src='/js/contact-scripts.js'></script>
	    
	    <script type='text/javascript' src='/js/bootstrap.min.js?ver=2.0'></script>
	  	<script type='text/javascript' src='/js/owl.carousel.min.js?ver=2.0'></script>
	    <script type='text/javascript' src='/js/jquery.fancybox.js?ver=2.0'></script>
	    <script type='text/javascript' src='/js/theme-scripts.js?ver=2.0'></script>
	    <script type='text/javascript' src='/js/SmoothScroll.min.js?ver=3.13.2'></script>
	    <script type='text/javascript' src='/js/vhparallax.min.js?ver=4.2.5'></script>
	
		<script type='text/javascript' src='/js/js_composer_front.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/core.min.js?ver=1.11.4'></script>
		<script type='text/javascript' src='/js/widget.min.js?ver=1.11.4'></script>
		<script type='text/javascript' src='/js/tabs.min.js?ver=1.11.4'></script>
		<script type='text/javascript' src='/js/jquery-ui-tabs-rotate.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/accordion.min.js?ver=1.11.4'></script>
		<script type='text/javascript' src='/js/imagesloaded.pkgd.min.js?ver=4.2.5'></script>
		<script type='text/javascript' src='/js/underscore.min.js?ver=1.6.0'></script>
		<script type='text/javascript' src='/js/waypoints.min.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/vc_grid_style_all.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/vc_grid_style_load_more.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/vc_grid_style_lazy.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/vc_grid_style_pagination.js?ver=4.6.2'></script>
		<script type='text/javascript' src='/js/vc_grid.js?ver=4.6.2'></script>
    				</div>
		</body>
	</html>
    