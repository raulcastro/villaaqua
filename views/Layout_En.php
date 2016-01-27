<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Framework/Tools.php';

class Layout_View
{
	private $data;
    private $autor 		= 'Where to GO';
    private $url 		= 'http://villaaqua.com/';
    private $siteName 	= 'Villa Aqua Rental';

	public function __construct($data)
	{
		$this->data = $data;
	}

	/**
	 * function printHTMLPage
	 *
	 * Prints the content of the whole website
	 *
	 * @param head 		(string) Is the head of the HTML structure
	 * @param header 	(string) Is the menu and logo section
	 * @param bodyType	(string) Is for CSS purposes
	 * @param body		(string) Content of the website
	 *
	 */

    public function printHTMLPage($section)
    {
    ?>
	<!DOCTYPE html>
	<html class='no-js' lang='en'>
		<head>
			<title>Villa Aqua Rental - <?php echo $this->data['title']; ?></title>
			<link rel="shortcut icon" href="favicon.ico" />
			<link rel="icon" type="image/gif" href="/images/favicon.png" />
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="<?php echo $this->data['description']; ?>">
        	<meta name="keywords" content="<?php echo $this->data['keywords']; ?>">
            <meta name="author" content="<?php echo $this->autor; ?>">
            <meta name="generator" content="By my great hand" />
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="<?php echo $this->siteName; ?>"/>
            <meta property="og:url" content="<?php echo $this->url; ?>" />
            <meta name="format-detection" content="telephone=no" />
			<?php
			switch ($section) {
				case 'index':
					echo self :: getHead();
				break;

				case 'overview':
					echo self :: getOverviewHead();
				break;

				case 'the-rooms':
					echo self :: getTheRoomsHead();
				break;
				
				case 'living':
					echo self :: getLivingHead();
				break;
				
				case 'pool':
					echo self :: getPoolAndOutdoorHead();
				break;
				
				case 'what':
					echo self :: getWhatToDoHead();
				break;
				
				case 'staff':
					echo self :: getStaffAndServicesHead();
				break;
				
				case 'included':
					echo self :: getIncludedHead();
				break;
				
				case 'extra':
					echo self :: getExtraHead();
				break;
					
				case 'arriving':
					echo self :: getArrivingHead();
				break;
				
				case 'riviera':
					echo self :: getRivieraHead();
				break;
				
				case 'out':
					echo self :: getOutHead();
				break;
				
				case 'culture':
					echo self :: getCultureHead();
				break;
				
				case 'contact':
					echo self :: getContactHead();
				break;
				
				case 'corporate':
					echo self :: getCorporateHead();
				break;
				
				case 'family':
					echo self :: getFamilyHead();
				break;
				
				case 'photo':
					echo self :: getPhotoHead();
				break;
				
				case 'private':
					echo self ::getPrivateHead();
				break;
				
				case 'weddings':
					echo self :: getWeddingsHead();
				break;
				
				case 'events':
					echo self :: getEventsHead();
				break;
				
				case 'faq':
					echo self :: getFaqHead();
				break;
				
				case 'testimonials':
					echo self :: getTestimonialsHead();
				break;
				
				case 'rental':
					echo self :: getRentalHead();
				break;
				
				case 'rules':
					echo self :: getRulesHead();
				break;
				
				case 'packages':
					echo self :: getPackagesHead();
				break;
				
				case 'gallery':
					echo self :: getGalleryHead();
				break;
				
				default:
				break;
			}
			?>
		</head>
		<body class="home page page-id-4 page-template-default outer-title_hide wpb-js-composer js-comp-ver-4.6.2 vc_responsive" id="site-start">
    		<div id="page" class="hfeed site">
			
			<?php
			echo self :: getHeader();

			switch ($section) {
				case 'index':
					echo self :: getIndexContent();
				break;

				case 'overview':
					echo self :: getOverviewContent();
				break;
				
				case 'the-rooms':
					echo self :: getTheRoomsContent();
				break;
				
				case 'living':
					echo self :: getLivingContent();
				break;
				
				case 'pool':
					echo self :: getPoolAndOutdoorContent();
				break;
				
				case 'what':
					echo self :: getWhatToDoContent();
				break;
				
				case 'staff':
					echo self :: getStaffAndServicesContent();
				break;
				
				case 'included':
					echo self :: getIncludedContent();
				break;

				case 'extra':
					echo self ::getExtraContent();
				break;
				
				case 'arriving':
					echo self :: getArrivingContent();
				break;
				
				case 'riviera':
					echo self :: getRivieraContent();
				break;
				
				case 'out':
					echo self :: getOutContent();
				break;
				
				case 'culture':
					echo self :: getCultureContent();
				break;
				
				case 'contact':
					echo self :: getContactContent();
				break;
				
				case 'corporate':
					echo self :: getCorporateContent();
				break;
				
				case 'family':
					echo self :: getFamilyContent();
				break;
				
				case 'photo':
					echo self :: getPhotoContent();
				break;
				
				case 'private':
					echo self :: getPrivateContent();
				break;
				
				case 'weddings':
					echo self :: getWeddingsContent();
				break;
				
				case 'events':
					echo self::getEventsContent();
				break;
				
				case 'faq':
					echo self::getFaqContent();
				break;
				
				case 'testimonials':
					echo self::getTestimonialsContent();
				break;
				
				case 'rental':
					echo self::getRentalContent();
				break;
				
				case 'rules':
					echo self::getRulesContent();
				break;
				
				case 'packages':
					echo self::getPackagesContent();
				break;
				
				case 'gallery':
					echo self :: getGalleryContent();
				break;
				
			}

			echo self :: getFooter();
			echo self :: getFooterCommonDocuments();
			?>
			</div>
		</body>
	</html>
    <?php
    }

    /**
     * getMainHeader
     *
     * This function returns the headeer of the index, by now, it can
     * receive params like js and css
     *
     * @param NULL
     * @return string $header an html string
     *
     */
    public function getHead()
    {
        ob_start();
        ?>
        
		<?php echo self :: getCommonDocuments(); ?>
		<?php echo self :: getGoogleAnalytics(); ?>
		<style type="text/css">
	        .info_box h4 a {
	        	color: #fff;
	        }
	        
	        .info_box h4 a:hover {
	        	color: #22BCB8;
	        	text-decoration:none;
	        }
	    </style>
		
		<?php
        $head = ob_get_contents();
        ob_end_clean();
        return $head;
    }

    public function getCommonDocuments()
    {
    	ob_start();
    	?>
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
	    
	    <script type='text/javascript' src='/js/greensock.js?ver=1.11.8'></script>
	    <script type='text/javascript' src='/js/jquery.js'></script>
	    <script type='text/javascript' src='/js/ultimate.min.js?ver=3.13.2'></script>
	    <script type='text/javascript' src='/js/jquery-migrate.min.js?ver=1.2.1'></script>
	    <script type='text/javascript' src='/js/layerslider.kreaturamedia.jquery.js?ver=5.4.0'></script>
	    <script type='text/javascript' src='/js/layerslider.transitions.js?ver=5.4.0'></script>
	    <link rel="shortcut icon" type="image/x-icon" href="" />

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
	    <?php
    	$documents = ob_get_contents();
    	ob_end_clean();
    	return $documents;
    }
    
    public function getFooterCommonDocuments()
    {
    	ob_start();
    	?>
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
    	<?php
    	$footerCommon = ob_get_contents();
    	ob_end_clean();
    	return $footerCommon;
    }

    public function getGoogleAnalytics()
	{
		ob_start();
		?>
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66495909-1', 'auto');
          ga('send', 'pageview');

        </script>
		<?php
		$google = ob_get_contents();
		ob_end_clean();
		return $google;
	}

    /**
     * getHeader
     *
     * it's the top and main navigation menu
     *
     * @return string
     */
    public function getHeader()
	{
		ob_start();
		?>
		<!--header-->
		<header id="masthead" class="site-header" role="banner">
			<div class="top-navbar navbar navbar-default">
			    <div class="container">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">English</a></li>
		                <li><a href="/es/">Espa&ntilde;ol</a></li>
					</ul>
				</div><!-- end .container -->
			</div>
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
                    	<div class="user-navbar">
                            <ul class="user-menu">
                                <li class="user-menu-item"><a class="login-button" href="/">English</a>
                                </li>
                                <li class="user-menu-item"><a class="singup-button" href="/es/">Espa&ntilde;ol</a>
                                </li>
                            </ul>
                        </div>
                        <ul id="menu-main_menu" class="nav navbar-nav  navbar-right">
                            <li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item">
                                <a href="/">Home</a>
                            </li>
                            
                            <li id="menu-item-843" class="dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                <a href="/overview/" class="dropdown-toggle">Overview</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/overview/">General Features</a></li>
                                    <li class="menu-item"><a href="/the-rooms/">The Rooms</a></li>
                                    <li class="menu-item"><a href="/living-spaces/">Living Spaces</a></li>
                                    <li class="menu-item"><a href="/pool-and-outdoor/">Pool &amp; Outdoor</a></li>
                                    <li class="menu-item"><a href="/what-to-do/">What to do in the villa</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="/staff-and-services/" class="dropdown-toggle">Staff &amp; Services</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                	<li class="menu-item"><a href="/included/">Included</a></li>
                                    <li class="menu-item"><a href="/at-extra-cost/">At extra cost</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/arriving-to-the-villa-playacar-playa-del-carmen/">Location Info</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                	<li class="menu-item"><a href="/arriving-to-the-villa-playacar-playa-del-carmen/">Arriving to the villa</a></li>
                                    <li class="menu-item"><a href="/arriving-to-the-villa-playacar-playa-del-carmen/#playacar" class="to-section">Playacar</a></li>
                                    <li class="menu-item"><a href="/arriving-to-the-villa-playacar-playa-del-carmen/#playadelcarmen" class="to-section">Playa del Carmen</a></li>
                                    <li class="menu-item"><a href="/riviera-maya/">Riviera Maya</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/out-and-about/">Out &amp; About</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/out-and-about/">Beaches</a></li>
                                    <li class="menu-item"><a href="/out-and-about/#water" class="to-section">In the water</a></li>
                                    <li class="menu-item"><a href="/out-and-about/#golf" class="to-section">Golf</a></li>
                                    <li class="menu-item"><a href="/out-and-about/#parks" class="to-section">Parks</a></li>
                                    <li class="menu-item"><a href="/out-and-about-dining-culture-shopping/">Culture</a></li>
                                    <li class="menu-item"><a href="/out-and-about-dining-culture-shopping/#dining" class="to-section">Dining</a></li>
                                    <li class="menu-item"><a href="/out-and-about-dining-culture-shopping/#shopping" class="to-section">Shopping</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/events/">Events</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/events-weddings/">Weddings</a></li>
                                    <li class="menu-item"><a href="/events-corporate-retreats/">Corporate retreats</a></li>
                                    <li class="menu-item"><a href="/events-family-friends-reunion/">Family &amp; Friends Reunion</a></li>
                                    <li class="menu-item"><a href="/events-private-events/">Private Events</a></li>
                                    <li class="menu-item"><a href="/events-photo-shoots/">Photo Shoots</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="/testimonials/" class="dropdown-toggle">Testimonials</a>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/reservation-rental-rates-and-process/">Reservations</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/reservation-rental-rates-and-process/">Reservation process</a></li>
                                    <li class="menu-item"><a href="/reservation-rental-rates-and-process/">Rental Rates</a></li>
                                    <li class="menu-item"><a href="/contact-us/">Contact Us</a></li>
                                    <li class="menu-item"><a href="/faq/">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end .container -->
            </div>
            <!-- end .main-navbar -->
        </header>
		<?php
		$header = ob_get_contents();
		ob_end_clean();
		return $header;
	}
	
    /**
     * getIndexContent
     *
     * returns the html for the index section, and only for the index section
     *
     * @return string html code
     */
    public function getIndexContent()
    {
    	ob_start();
    	?>
    	<div class="container vc-page-container" style="margin: 0 auto 110px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-4" class="post-4 page type-page status-publish hentry" >
                    	<?php echo self :: getIndexSlider(); ?>
                    	<?php echo self :: getIndexOverviewTeaser(); ?>
                    	<?php echo self :: getTestimonialsIndexTeaser(); ?>
                    	<?php echo self :: getStaffServicesIndexTeaser(); ?>
                    	<?php echo self :: getEventsIndexTeaser(); ?>
                    </article>
				</div>
			</div>
		</div>
		<?php
		$wideBody = ob_get_contents();
        ob_end_clean();
		return $wideBody;
    }
    
    public function getIndexSlider()
    {
    	ob_start();
    	?>
		<div class="vc_row wpb_row vc_row-fluid" >
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
				                                
					<div class="wpb_layerslider_element wpb_content_element">
						<div class="ls-wp-fullwidth-container" style="height:560px;">
							<div class="ls-wp-fullwidth-helper">
								<div id="layerslider_1" class="ls-wp-container" style="width:1170px;height:800px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
									<div class="ls-slide" data-ls=" transition2d: 5">
										<img src="/images/sliders/villa-aqua-slider-1.jpg" class="ls-bg" alt="Stay at Villa Aqua" />
										<h1 class="ls-l" style="top:280px;left:50%;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;offset:100%;durationin:900;delayin:300;easingin:easeInOutSine;offsetxout:0;durationout:200;showuntil:3000;easingout:easeInOutSine;">
											Stay at Villa Aqua
										</h1>
										<p class="ls-l" style="top:434px;left:50%;font-size:12px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;offset:100%;durationin:900;delayin:400;easingin:easeInOutSine;offsetxout:0;durationout:200;showuntil:3000;easingout:easeInOutSine;">
										<a href="#" class="btn">Book Now</a>
										</p>
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/villa-aqua-slider-2.jpg" class="ls-bg" alt="Villa Aqua" />
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/villa-aqua-slider-3.jpg" class="ls-bg" alt="Villa Aqua" />
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/Villa_Aqua_slider4.jpg" class="ls-bg" alt="Villa Aqua" />
									</div>
								</div>
							</div>
						</div>
					</div>
				  	<!-- /Slider -->
				</div>
			</div>
		</div>
    	<?php
    	$slider = ob_get_contents();
    	ob_end_clean();
    	return $slider;
    }
    
	public function getIndexOverviewTeaser()
	{
		ob_start();
		?>
		<div class="vc_row wpb_row vc_row-fluid vc_second-row">
			<!-- <div class="upb_row_bg vcpb-default" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="min-width: 1250px; left: -250px; width: 1850px; background-image: url(/images/Patt.png); background-attachment: scroll; background-color: rgb(40, 40, 40); background-size: initial; background-repeat: repeat;"></div> -->
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<div class="ult-just-icon-wrapper ">
						<div class="align-icon" style="text-align:center;">
							<a class="aio-tooltip 561be29538bc4" href="/overview/" target='' data-toggle="tooltip" data-placement="" title="">
								<div class="aio-icon none" style="color:#9d8f62;font-size:19px;display:inline-block;">
									<i class="icomoon-shell"></i>
								</div>
							</a>
						</div>
					</div>
					<div class="ult-spacer spacer-561be29538c67" data-id="561be29538c67" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="10" data-height-mobile-landscape="10" style="clear:both;display:block;"></div>
					<div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center">
						<span class="vc_sep_holder vc_sep_holder_l">
							<span style="border-color:#22BCB8;" class="vc_sep_line"></span>
						</span>
						<h2 style="font-weight: 300;">Villa Aqua</h2>
						<span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
					</div>
					
					<div class="ult-spacer spacer-561be29538f59" data-id="561be29538f59" data-height="12" data-height-mobile="12" data-height-tab="12" data-height-tab-portrait="12" data-height-mobile-landscape="12" style="clear:both;display:block;"></div>
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="fadeIn" data-animation-delay="0" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;">
						<div class="ult-spacer spacer-561be2953930d" data-id="561be2953930d" data-height="9" data-height-mobile="9" data-height-tab="9" data-height-tab-portrait="9" data-height-mobile-landscape="9" style="clear:both;display:block;"></div>
						<div class="wpb_text_column ">
							<div class="wpb_wrapper">
								<p style="text-align: center;">
									<span style="color: #525252;">
										Is an exclusive 5 bedroom private villa that offers luxurious, spacious and modern 
										accommodations with exceptional and personalized service.
									</span>
									<br /><br />
									<span style="color: #525252;">
										Nestled in the heart of Playa del Carmen, inside the tranquil gated community of Playacar, 
										just steps away from the famous "Quinta Avenida" and within walking distance to the pristine 
										white sandy beaches of the Riviera Maya.
									</span>
									<br /><br />
									<span style="color: #525252;">
										Rated one of the best luxury vacation rentals in the region, Villa Aqua is the perfect place 
										to enjoy a wonderful family vacation, friend's reunion, corporate retreat or even an 
										unforgettable honeymoon!
									</span>
								</p>
							</div>
						</div>
						<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
						<div class="vc_btn3-container vc_btn3-center">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/overview/" title="" target="_self">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		$teaser = ob_get_contents();
		ob_end_clean();
		return $teaser;
	}
	
	public function getStaffServicesIndexTeaser()
	{
		ob_start();
		?>
		<div class="vc_row wpb_row vc_row-fluid ">
			<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="fadeIn" data-animation-delay="0" data-animation-duration="1.5" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="ult-just-icon-wrapper ">
							<div class="align-icon" style="text-align:center;">
								<div class="aio-icon none " style="color:#22BCB8;font-size:45px;display:inline-block;">
									<i class="icomoon-seahorse"></i>
								</div>
							</div>
						</div>
						<div class="ult-spacer spacer-561be2953b20c" data-id="561be2953b20c" data-height="5" data-height-mobile="5" data-height-tab="5" data-height-tab-portrait="5" data-height-mobile-landscape="5" style="clear:both;display:block;"></div>
						<div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center">
							<span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
							<h2 style="color:#22BCB8;font-weight: 300;">Staff &amp; Services</h2>
							<span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
						</div>
						
						<div class="ult-spacer spacer-561be2953b411" data-id="561be2953b411" data-height="12" data-height-mobile="12" data-height-tab="12" data-height-tab-portrait="12" data-height-mobile-landscape="12" style="clear:both;display:block;"></div>
						<div class="ult-just-icon-wrapper ">
							<div class="align-icon" style="text-align:center;">
								<div class="aio-icon none " style="color:#9d8f62;font-size:13px;display:inline-block;">
								</div>
							</div>
						</div>
					</div>
					
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="fadeIn" data-animation-delay="0" data-animation-duration="3" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="rental-service_latest js-carousel">
							<div class="rental-service_item">
								<div class="rs-item_actions">
									<a class="rs-item_action_link" href="/included/">
										<i class="fa fa-eye"></i>
									</a>
								</div>
								
								<div class="rs-item_inner">
									<div class="rs-item_content"><img width="570" height="446" src="/images/Villa_Aqua_included.jpg" class="attachment-full wp-post-image" alt="Exellent-view" /></div>
								</div>
							</div>
							
							<div class="rental-service_item">
								<div class="rs-item_inner">
									<div class="rs-item_actions">
										<a class="rs-item_action_link" href="/at-extra-cost/">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="rs-item_content"><img width="570" height="446" src="/images/Villa_Aqua_not_included.jpg" class="attachment-full wp-post-image" alt="Strong-Wind" /></div>
								</div>
							</div>
							
							<div class="rental-service_item">
								<div class="rs-item_inner">
									<div class="rs-item_actions">
										<a class="rs-item_action_link" href="/events/">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="rs-item_content"><img width="570" height="446" src="/images/Villa_Aqua_services_events.jpg" class="attachment-full wp-post-image" alt="Berth" /></div>
								</div>
							</div>
						</div>
						<div class="ult-spacer spacer-561be2953b550" data-id="561be2953b550" data-height="9" data-height-mobile="9" data-height-tab="9" data-height-tab-portrait="9" data-height-mobile-landscape="9" style="clear:both;display:block;"></div>
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<p style="text-align: center;">
									<span style="color: #525252;">Villa Aqua exceptional services, modern amenities and dedicated staff will make a blast of your Luxury Vacation Villa Rental.</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
		<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
			<div class="vc_btn3-container vc_btn3-center "><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-block vc_btn3-color-chino " href="/staff-and-services/" title=" ">VIEW ALL SERVICES</a></div>
		</div>
		<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
		<div class="ult-spacer spacer-561be2953b81a" data-id="561be2953b81a" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
		<?php
		$teaser = ob_get_contents();
		ob_end_clean();
		return $teaser;
	}

	public function getTestimonialsIndexTeaser()
	{
		ob_start();
		
		?>
		<!-- Testimonials -->
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1426664924161 ">
			<div class="upb_row_bg vcpb-vz-jquery" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="min-width: 1261px; left: -220.5px; width: 1680px; background-image: url(/images/home/BG_QUOTE_07.jpg); background-attachment: scroll; background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% -17px; background-repeat: no-repeat;"></div>
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper ">
					<div class="ult-just-icon-wrapper ">
						<div class="align-icon " style="text-align:center; ">
							<div class="aio-icon none " style="color:#111;font-size:39px;display:inline-block; ">
								<i class="icomoon-Palm"></i>
							</div>
						</div>
					</div>
					<div class="ult-spacer spacer-561be2955779d " data-id="561be2955779d " data-height="19 " data-height-mobile="19 " data-height-tab="19 " data-height-tab-portrait="19 " data-height-mobile-landscape="19 " style="clear:both;display:block; "></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:1; " data-opacity_start_effect=" ">
						<div id="ult-carousel-984694667561be29557b29 " class="ult-carousel-wrapper bullets-white ult_horizontal " data-gutter="15 " data-rtl="false ">
							<div class="ult-carousel-slide">
								<?php 
								foreach ($this->data[0]['reviews'] as $review) 
								{
									?>
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>
											<?php echo $review['reviewShare']; ?>
										</p>
										<div class="author "><?php echo $review['name']; ?><br> <?php echo $review['city']; ?><br><?php echo Tools::formatMYSQLToFront($review['date']); ?></div>
									</div>
								</div>
									<?php
								}
								?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row Backgrounds -->
		<?php
		$teaser = ob_get_contents();
		ob_end_clean();
		return $teaser; 
	}
	
	public function getEventsIndexTeaser()
	{
		ob_start();
		?>
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1427803088111">
			<div class="upb_row_bg vcpb-default" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="min-width: 1256px; left: -43px; width: 1256px;  background-attachment: scroll; background-color: rgb(34, 188, 184); background-size: initial; background-repeat: repeat;"></div>
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="slideInLeft" data-animation-delay="0" data-animation-duration="1.5" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="wpb_call_to_action wpb_content_element vc_clearfix cta_align_right style-2">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1427803471819">
			<div class="upb_row_bg" data-bg-override="ex-full" style="min-width: 1256px; left: -220px; width: 1686px; background: rgb(99, 98, 98);"></div>
			<div class="style-1 vc_col-sm-4 wpb_column vc_column_container ">
				<div class="wpb_wrapper"></div>
			</div>
			
			<div class="vc_col-sm-12 wpb_column vc_column_container events-teaser ">
				<div class="wpb_wrapper ">
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1" style="opacity:1;" data-opacity_start_effect=" ">
						<div class="ult-spacer spacer-561be295502ea " data-id="561be295502ea " data-height="0 " data-height-mobile="0 " data-height-tab="0 " data-height-tab-portrait="0 " data-height-mobile-landscape="0 " style="clear:both;display:block; "></div>
						<div class="vc_custom_heading vc_custom_1425470118379 ">
							<h2 style="color: #FFF;text-align: left; font-weight:300;
									font-style:normal; margin-bottom: 30px;">Events</h2>
						</div>
						<div class="ult-spacer spacer-561be29550c48 " data-id="561be29550c48 " data-height="44 " data-height-mobile="44 " data-height-tab="44 " data-height-tab-portrait="44 " data-height-mobile-landscape="44 " style="clear:both;display:block; "></div>
					</div>
					                                    
					<div class="vc_row wpb_row vc_inner vc_row-fluid ">
						<div class="wpb_column vc_column_container vc_col-sm-4 ">
							<div class="wpb_wrapper ">
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:0; ">
									<div class="info_box ">
										<div class="info-box_img " style="font-size:36px "><img src="/images/home/events-icons/Icon_wedding.svg " alt="Brilliant creative design " /></div>
										<h4>
											<a href="/events-weddings/">Weddings</a>
										</h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Anything you need to make your wedding in paradise an absolutely unforgettable one!</p>
									</div>
								</div>
								<div class="ult-spacer spacer-561be29552cde " data-id="561be29552cde " data-height="32 " data-height-mobile="32 " data-height-tab="32 " data-height-tab-portrait="32 " data-height-mobile-landscape="32 " style="clear:both;display:block; "></div>
							</div>
						</div>
						
						<div class="wpb_column vc_column_container vc_col-sm-4 ">
							<div class="wpb_wrapper ">
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:0; ">
									<div class="info_box ">
										<div class="info-box_img " style="font-size:36px "><img src="/images/home/events-icons/Icon_corporate.svg " alt="Brilliant creative design " /></div>
										<h4><a href="/events-corporate-retreats/">Corporate retreats</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Whatever you think your team needs, we can help you out!</p>
									</div>
								</div>
								<div class="ult-spacer spacer-561be29552cde " data-id="561be29552cde " data-height="32 " data-height-mobile="32 " data-height-tab="32 " data-height-tab-portrait="32 " data-height-mobile-landscape="32 " style="clear:both;display:block; "></div>
							</div>
						</div>
						
						<div class="wpb_column vc_column_container vc_col-sm-4 ">
							<div class="wpb_wrapper ">
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:0; ">
									<div class="info_box ">
										<div class="info-box_img " style="font-size:36px "><img src="/images/home/events-icons/Icon_family.svg " alt="Brilliant creative design " /></div>
										<h4><a href="/events-family-friends-reunion/">Family & Friends Reunion</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Join your crowd for the perfect family vacation!</p>
									</div>
								</div>
								<div class="ult-spacer spacer-561be29552cde " data-id="561be29552cde " data-height="32 " data-height-mobile="32 " data-height-tab="32 " data-height-tab-portrait="32 " data-height-mobile-landscape="32 " style="clear:both;display:block; "></div>
							</div>
						</div>
					</div>
					
					<div class="vc_row wpb_row vc_inner vc_row-fluid " style="margin-top: 40px;">
						<div class="wpb_column vc_column_container vc_col-sm-4 ">
							<div class="wpb_wrapper ">
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:0; ">
									<div class="info_box ">
										<div class="info-box_img " style="font-size:36px "><img src="/images/home/events-icons/Icon_private.svg" alt="Brilliant creative design " /></div>
										<h4><a href="/events-family-friends-reunion/">Private Events</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Celebrate your anniversary, birthday, personal achievement or just to gather special 
										friends and enjoy an amazing vacation!</p>
									</div>
								</div>
								<div class="ult-spacer spacer-561be29552cde " data-id="561be29552cde " data-height="32 " data-height-mobile="32 " data-height-tab="32 " data-height-tab-portrait="32 " data-height-mobile-landscape="32 " style="clear:both;display:block; "></div>
							</div>
						</div>
						
						<div class="wpb_column vc_column_container vc_col-sm-4 ">
							<div class="wpb_wrapper ">
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:0; ">
									<div class="info_box ">
										<div class="info-box_img " style="font-size:36px "><img src="/images/home/events-icons/Icon_photo.svg" alt="Brilliant creative design " /></div>
										<h4><a href="/events-photo-shoots/">Photo shoots</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Countless days of sun in a private contemporary location.</p>
									</div>
								</div>
								<div class="ult-spacer spacer-561be29552cde " data-id="561be29552cde " data-height="32 " data-height-mobile="32 " data-height-tab="32 " data-height-tab-portrait="32 " data-height-mobile-landscape="32 " style="clear:both;display:block; "></div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!-- Row Backgrounds -->
		
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1427803088111">
			<div class="upb_row_bg vcpb-default" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="min-width: 1256px; left: -43px; width: 1256px;  background-attachment: scroll; background-color: rgb(34, 188, 184); background-size: initial; background-repeat: repeat;"></div>
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="slideInLeft" data-animation-delay="0" data-animation-duration="1.5" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="wpb_call_to_action wpb_content_element vc_clearfix cta_align_right style-2">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		$teaser = ob_get_contents();
		ob_end_clean();
		return $teaser;
	}
	
    public function getOverviewHead()
    {
    	ob_start();
    	?>
    	<?php echo self::getCommonDocuments(); ?>
    	<?php echo self::getGoogleAnalytics(); ?>
		<?php
        $head = ob_get_contents();
		ob_end_clean();
		return $head;
    }

    public function getOverviewContent()
    {
    	ob_start();
    	echo self::getOverviewHeader();
    	?>
       	<div class="container vc-page-container" style="margin: 35px auto 45px auto">
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-4" class="post-4 page type-page status-publish hentry" >
                    
                    	<div class="vc_row wpb_row vc_row-fluid  horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
						            	<h2>General Features</h2>
						            </div>
						            <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    Your amazing Villa Aqua Caribbean holiday experience begins at the moment you 
                                                    arrive to Cancun airport and get greeted by our representative, who will drive 
                                                    you to the villa in Playa del Carmen, where our attentive staff will welcome you 
                                                    with a refreshing Margarita.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    Featuring <strong>modern and luxurious accommodations for up to 10 guests (or 
                                                    12 including children)</strong>, the villa has 5 spacious air-conditioned bedrooms 
                                                    that offer en suite bathrooms, modern amenities and comfortable interiors. 
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    Villa Aqua has a <strong>privileged location, inside a safe, tranquil, gated community 
                                                    surrounded by a professional 18 hole Golf Course and just 10-15 minutes walking 
                                                    distance to the beach and to "La Quinta", the heart of Playa</strong>, where you 
                                                    will find great shopping, dining and entertainment.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    <strong>You will be pampered until the last minute by our staff, who provides 
                                                    utmost and outstanding service, from the private chef to your bilingual 
                                                    (English-Spanish) personal concierge or Villa Host</strong>, everyone will do their 
                                                    best to fulfill all your desires and requirements so that you will enjoy every 
                                                    moment when inside the villa or when visiting the amazing places surrounding this 
                                                    incredible paradise. You will never want to leave!
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    We are looking forward to welcome you and your guests at this luxury home away 
                                                    from home.
                                                </span>
                                            </p>
                                        </div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ACCOMMODATIONS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <div class="wpb_wrapper">

                                                                    </div>
                                                                </div>
                                                                <div class="ult-spacer spacer-562665424585b" data-id="562665424585b" data-height="14" data-height-mobile="14" data-height-tab="14" data-height-tab-portrait="14" data-height-mobile-landscape="14" style="clear:both;display:block;"></div>
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">5 bedrooms</li>
                                                                        			<li class="item-feature">6 ½ bathrooms</li>
                                                                        			<li class="item-feature">Family room & bar</li>
                                                                        			<li class="item-feature">TV room – Library</li>
                                                                        			<li class="item-feature">Gourmet kitchen</li>
                                                                        			<li class="item-feature">Private gym & squash court</li>
                                                                        			<li class="item-feature">Alfresco dining with gas grill</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Wood fired oven</li>
	                                                                        		<li class="item-feature">Outdoor living areas</li>
	                                                                        		<li class="item-feature">Pool</li>
	                                                                        		<li class="item-feature">Outdoor Jacuzzi</li>
	                                                                        		<li class="item-feature">Indoor Jacuzzi in master bedroom</li>
	                                                                        		<li class="item-feature">Laundry room</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>INCLUDED SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">1 Complimentary round trip Airport Transfer (with rentals of 4+ nights)</li>
                                                                        			<li class="item-feature">24/7 Concierge service (telephone assistance and daily visits)</li>
                                                                        			<li class="item-feature">Chef & kitchen assistant (daily from 8am to 4pm)  *No beverage service (bar tending) is provided</li>
                                                                        			<li class="item-feature">Daily housekeeping (from 9am to 4pm)</li>
                                                                        			<li class="item-feature">Maintenance (when required)</li>
                                                                        			<li class="item-feature">Wireless Internet free of charge</li>
                                                                        			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SERVICES AVAILABLE FOR AN EXTRA COST</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Food & Beverage</li>
                                                                        			<li class="item-feature">Grocery Shopping (20% delivery fee)</li>
                                                                        			<li class="item-feature">Chef Services for dinner</li>
                                                                        			<li class="item-feature">Bartender</li>
                                                                        			<li class="item-feature">Waiter</li>
                                                                        			<li class="item-feature">Spa Services</li>
                                                                        			<li class="item-feature">Extra maid</li>
                                                                        		</ul>
                                                                        		
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Laundry & Dry Cleaning Service</li>
                                                                        			<li class="item-feature">Babysitter</li>
                                                                        			<li class="item-feature">Transportation services</li>
                                                                        			<li class="item-feature"><strong><a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Villa Aqua Epic Experiences</a></strong></li>
                                                                        			<li class="item-feature">Entertainment</li>
                                                                        			<li class="item-feature">Tours & Activities</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        	<p><i>*Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more info and pricing</i></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>FOOD & BEVERAGE</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">Complimentary Welcome Snack</li>
                                                                        			<li class="item-feature">Pre-stock and Grocery Shopping service (20% delivery fee)</li>
                                                                        			<li class="item-feature">Bottled water, for a fee (2 bottles per room complimentary on arrival day)</li>
                                                                        			<li class="item-feature">Wine and Liquor supply (charges apply)</li>
                                                                        			<li class="item-feature">Honor Bar</li>
                                                                        			<li class="item-feature"><strong> <a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Villa Aqua Epic Experiences</a></strong></li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>ENTERTAINMENT</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">TV features: 8 Flat Screen TVs throughout the villa.</li>
	                                                                     			<li class="item-feature">2 home theaters</li>
	                                                                     			<li class="item-feature">IPod docks</li>
	                                                                     			<li class="item-feature">Game Consoles</li>
	                                                                     			<li class="item-feature">Apple TV with Netflix</li>
	                                                                     			<li class="item-feature">Cable TV in every bedroom</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">CNN and ESPN channels available </li>
	                                                                     			<li class="item-feature">CD Stereo</li>
	                                                                     			<li class="item-feature">Music (CD library)</li>
	                                                                     			<li class="item-feature">Movies (DVD library)</li>
	                                                                     			<li class="item-feature">Board Games</li>
	                                                                     			<li class="item-feature">Books and Magazines</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES & COMMUNICATION</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Top brand toiletries</li>
	                                                                     			<li class="item-feature">Bathrobes & slippers</li>
	                                                                     			<li class="item-feature">Extra pillows</li>
	                                                                     			<li class="item-feature">Welcome vanity package</li>
	                                                                     			<li class="item-feature">Welcome bottled water in every room.</li>
	                                                                     			<li class="item-feature">2 phone lines</li>
	                                                                     			<li class="item-feature">Free domestic and U.S. / Canada calls</li>
	                                                                     			<li class="item-feature">Wireless Internet free of charge</li>
	                                                                     			<li class="item-feature">Fax and Packaging services (ask your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a>)</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>ENVIRONMENTAL RESPONSIBILITY AND SUSTAINABILITY</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                     	<p>We are dedicated to improving the villa's sustainability and have implemented many actions to ensure our ecological stewardship by creating the healthiest environment possible for our guests while also maintaining Playa del Carmen's beauty for future generations to experience and enjoy.</p>
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Non-smoking environment</li>
	                                                                     			<li class="item-feature">Garbage Recycling</li>
	                                                                     			<li class="item-feature">Compost</li>
	                                                                     			<li class="item-feature">Towel and sheet Re-use Program to reduce water and detergent consumption</li>
	                                                                     			<li class="item-feature">Energy-efficient lighting</li>
	                                                                     			<li class="item-feature">Water filtration and purification to reduce bottled water use</li>
	                                                                     			<li class="item-feature">Bicycles are provided for green transportation</li>
	                                                                     			<li class="item-feature">We serve organic and locally-grown food, if desired</li>
	                                                                     			<li class="item-feature">Encourage our guest not to use disposable dishes/cups</li>
	                                                                     		</ul>
	                                                                     	</div>
	                                                                     	<p>And we are working on many more.</p>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_Aqua_general_overview.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Overview" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="wpb_wrapper top-margin">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_Aqua_general_overview_02_new.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    	<!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
						<!-- /General Features -->
						
						<!-- The Rooms -->
						<div class="vc_row wpb_row vc_row-fluid  top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_Aqua_bedrooms.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Rooms" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper vc_left_middle">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">The rooms</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/the-rooms/" title="" target="_self">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						<!-- /The Rooms -->
						
						<!-- Living Spaces -->
						<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper vc_right_middle">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Living Spaces</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/living-spaces/" title="" target="_self">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_aqua_living_spaces.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						<!-- /Living Spaces -->
						
						<!-- Pool and Outdoors -->
						<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_Aqua_pool_outdoor.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Pool and Outdoor" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper vc_left_middle">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Pool & Outdoor</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/pool-and-outdoor/" title="" target="_self">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						<!-- /Pool and Outdoors -->
						
						<!-- What to do -->
						<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper vc_right_middle">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">What to do in the villa </h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/what-to-do/" title="" target="_self">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/overview/Villa_aqua_What_to_do_inside.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
						<!-- /What to do -->
					</article>
    			</div>
    		</div>
    	</div>
    	<?php
    	$wideBody = ob_get_contents();
        ob_end_clean();
    	return $wideBody;
	}
	
	public function getOverviewHeader()
	{
		ob_start();
		?>
		<div class="page-header" style="background-image:url(/images/overview/Overview_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Overview</h2>
                    </div>
                </div>
            </div>
        </div>
		<?php 
		$header = ob_get_contents();
		ob_end_clean();
		return $header;
	}
	
	public function getTheRoomsHead()
	{
		ob_start();
		?>
    	<?php echo self::getCommonDocuments(); ?>
    	<?php echo self::getGoogleAnalytics(); ?>
		<?php
        $head = ob_get_contents();
		ob_end_clean();
		return $head;
    }
	
    public function getTheRoomsContent()
    {
    	ob_start();
    	echo self::getTheRoomsHeader();
    	?>
       	<div class="container vc-page-container" style="margin: 35px auto 45px auto">
            <div class="container-inner">
                <div class="content">
                    <article id="post-4" class="post-4 page type-page status-publish hentry" >
                    <!-- Master Bedroom -->
                    	<div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Master bedroom</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Maximum Occupancy: 2</li>
                                                                        			<li class="item-feature">1,292 sq. ft. / 129 m</li>
                                                                        			<li class="item-feature">Air-conditioned</li>
                                                                        			<li class="item-feature">Private terrace: 137 sq. ft. / 13 m</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">2 bathrooms (his and hers)</li>
	                                                                        		<li class="item-feature">Living / sitting area</li>
	                                                                        		<li class="item-feature">Windows may be opened</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BEDS & BEDDING</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">1 King size Sleep Number bed</li>
                                                                        			<li class="item-feature">Luxury Linens</li>
                                                                        			<li class="item-feature">Cribs permitted: 1 (upon request)</li>
	                                                                        		<li class="item-feature">Maximum cribs permitted in the villa: 2</li>
	                                                                        		<li class="item-feature">Featherbed and Duvet</li>
	                                                                        		<li class="item-feature">Extra Pillows</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BATHROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Jacuzzi</li>
                                                                        			<li class="item-feature">Shower</li>
                                                                        			<li class="item-feature">Top Brand Toiletries</li>
                                                                        			<li class="item-feature">Robes: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Slippers</li>
                                                                        			<li class="item-feature">Hair dryer</li>
                                                                        			<li class="item-feature">Make-up mirror</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">50" Led TV</li>
	                                                                     			<li class="item-feature">Cable TV</li>
	                                                                     			<li class="item-feature">DVD Player</li>
	                                                                     			<li class="item-feature">Apple TV with Netflix</li>
	                                                                     			<li class="item-feature">IPod dock</li>
	                                                                     			<li class="item-feature">Stereo with alarm clock</li>
	                                                                     			<li class="item-feature">Safe box</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Desk</li>
	                                                                     			<li class="item-feature">Laptop</li>
	                                                                     			<li class="item-feature">Chaise lounge</li>
	                                                                     			<li class="item-feature">Walk-in closet</li>
	                                                                     			<li class="item-feature">Dressing stool</li>
	                                                                     			<li class="item-feature">Body Mirror</li>
	                                                                     			<li class="item-feature">Iron and ironing board upon request</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMMUNICATION</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">3 Phones</li>
	                                                                     			<li class="item-feature">Phone features: Room to room, Domestic and International service (through VOIP)</li>
	                                                                     			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
	                                                                     			<li class="item-feature">Wireless Internet, free of charge</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>HOSPITALITY SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Afternoon turndown service</li>
	                                                                     			<li class="item-feature">Newspaper delivered to your room upon 
	                                                                     			request (Please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> one week prior to arrival with your 
	                                                                     			Newspaper preference to check availability).</li>
	                                                                     		</ul>
	                                                                     	</div>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['master-bedroom'])
                                        	{
                                        		foreach($this->data[0]['master-bedroom'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                    <!-- /Master Bedroom -->
                    
                    <!-- Bedroom 2 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['bedroom-two'])
                                        	{
                                        		foreach($this->data[0]['bedroom-two'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Bedroom 2</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ROOM FEATURES</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                     	<div class="stm_item-features_inner">
                                                                      		<ul class="item-features_list">
                                                                       			<li class="item-feature">Maximum Occupancy: 2</li>
                                                                       			<li class="item-feature">361 sq. ft. / 34m</li>
                                                                       		</ul>
                                                                       		<ul class="item-features_list">
	                                                                       		<li class="item-feature">Living / sitting area</li>
	                                                                       		<li class="item-feature">Windows may be opened</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BEDS & BEDDING</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                               <div class="wpb_wrapper">
                                                                  	 <div class="stm_item-features">
                                                                       	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">2 Double beds</li>
                                                                       			<li class="item-feature">Featherbed and Duvet</li>
                                                                       			<li class="item-feature">Luxury Linens</li>
                                                                       		</ul>
                                                                      		<ul class="item-features_list">
                                                                       			<li class="item-feature">Extra Pillows</li>
                                                                       			<li class="item-feature">Cribs permitted: 1 (upon request)</li>
	                                                                       		<li class="item-feature">Maximum cribs permitted in the villa: 2</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BATHROOM FEATURES</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">

                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">Shower</li>
                                                                       			<li class="item-feature">Top Brand Toiletries</li>
                                                                       			<li class="item-feature">Robes: 2</li>
                                                                       		</ul>
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">Slippers</li>
                                                                       			<li class="item-feature">Hair dryer</li>
                                                                       			<li class="item-feature">Make-up mirror</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

													<div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
	                                                                   			<li class="item-feature">46" Led TV</li>
	                                                                   			<li class="item-feature">Cable TV</li>
	                                                                   			<li class="item-feature">DVD Player</li>
	                                                                   		</ul>
	                                                                   		<ul class="item-features_list">
	                                                                   			<li class="item-feature">In room Safe</li>
	                                                                   			<li class="item-feature">IPod dock with alarm clock</li>
	                                                                   			<li class="item-feature">Iron and ironing board upon request</li>
	                                                                   		</ul>
                                                                      	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>

													<div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMMUNICATION</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                        	<div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list_extended">
	                                                                   			<li class="item-feature">1 Phone</li>
	                                                                   			<li class="item-feature">Phone features: Room to room, Domestic and International service (through VOIP)</li>
	                                                                   			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
	                                                                   			<li class="item-feature">Wireless Internet, free of charge</li>
	                                                                   		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                    	<h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>HOSPITALITY SERVICES</strong></a></h3>
                                                       	<div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
	                                                                  	<div class="stm_item-features_inner">
	                                                                   		<ul class="item-features_list_extended">
	                                                                   			<li class="item-feature">Afternoon turndown service</li>
	                                                                   			<li class="item-feature">Newspaper delivered to your room upon request (Please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> one week prior to arrival with your Newspaper preference to check availability).</li>
	                                                                     	</ul>
	                                                                   </div>
                                                                   	</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                    <!-- /Bedroom 2 -->
                    
                    <!-- Bedroom 3 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Bedroom 3</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Maximum Occupancy: 4</li>
                                                                        			<li class="item-feature">401 sq. ft. / 37m</li>
	                                                                        		<li class="item-feature">Air-conditioned</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Sitting area</li>
	                                                                        		<li class="item-feature">Windows may be opened</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BEDS & BEDDING</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 King + 2 twin beds (trundle)</li>
                                                                        			<li class="item-feature">Featherbed and Duvet</li>
                                                                        			<li class="item-feature">Luxury Linens</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Extra Pillows</li>
                                                                        			<li class="item-feature">Cribs permitted: 1 (upon request)</li>
	                                                                        		<li class="item-feature">Maximum cribs permitted in the villa: 2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BATHROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Shower</li>
                                                                        			<li class="item-feature">Top Brand Toiletries</li>
                                                                        			<li class="item-feature">Robes: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Slippers</li>
                                                                        			<li class="item-feature">Hair dryer</li>
                                                                        			<li class="item-feature">Make-up mirror</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">46" Led TV</li>
	                                                                     			<li class="item-feature">Cable TV</li>
	                                                                     			<li class="item-feature">DVD Player</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">In room Safe</li>
	                                                                     			<li class="item-feature">IPod dock with alarm clock</li>
	                                                                     			<li class="item-feature">Iron and ironing board upon request</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMMUNICATION</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">1 Phone</li>
	                                                                     			<li class="item-feature">Phone features: Room to room, Domestic and International service (through VOIP)</li>
	                                                                     			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
	                                                                     			<li class="item-feature">Wireless Internet, free of charge</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>HOSPITALITY SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Afternoon turndown service</li>
	                                                                     			<li class="item-feature">Newspaper delivered to your room upon request (Please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> one week prior to arrival with your Newspaper preference to check availability).
</li>
	                                                                     		</ul>
	                                                                     	</div>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['bedroom-three'])
                                        	{
                                        		foreach($this->data[0]['bedroom-three'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                    <!-- /Bedroom 3 -->
                    
                    <!-- Bedroom 4 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['bedroom-four'])
                                        	{
                                        		foreach($this->data[0]['bedroom-four'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Bedroom 4</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Maximum Occupancy: 2</li>
                                                                        			<li class="item-feature">246 sq. ft. / 23m</li>
	                                                                        		<li class="item-feature">Air-conditioned</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Access to terrace and pool</li>
	                                                                        		<li class="item-feature">Glass sliding doors</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BEDS & BEDDING</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 King bed</li>
                                                                        			<li class="item-feature">Featherbed and Duvet</li>
                                                                        			<li class="item-feature">Luxury Linens</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Extra Pillows</li>
                                                                        			<li class="item-feature">Cribs permitted: 1 (upon request)</li>
	                                                                        		<li class="item-feature">Maximum cribs permitted in the villa: 2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BATHROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Shower</li>
                                                                        			<li class="item-feature">Top Brand Toiletries</li>
                                                                        			<li class="item-feature">Robes: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Slippers</li>
                                                                        			<li class="item-feature">Hair dryer</li>
                                                                        			<li class="item-feature">Make-up mirror</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">32" Led TV</li>
	                                                                     			<li class="item-feature">Cable TV</li>
	                                                                     			<li class="item-feature">DVD Player</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Safe box</li>
	                                                                     			<li class="item-feature">IPod dock with alarm clock</li>
	                                                                     			<li class="item-feature">Iron and ironing board upon request</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMMUNICATION</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">1 Phone</li>
	                                                                     			<li class="item-feature">Phone features: Room to room, Domestic and International service (through VOIP)</li>
	                                                                     			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
	                                                                     			<li class="item-feature">Wireless Internet, free of charge</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>HOSPITALITY SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Afternoon turndown service</li>
	                                                                     			<li class="item-feature">Newspaper delivered to your room upon request (Please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> one week prior to arrival with your Newspaper preference to check availability).
</li>
	                                                                     		</ul>
	                                                                     	</div>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                    <!-- /Bedroom 4 -->
                    
                    <!-- Bedroom 5 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">Bedroom 5</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Maximum Occupancy: 2</li>
                                                                        			<li class="item-feature">220 sq. ft. / 20m</li>
	                                                                        		<li class="item-feature">Air-conditioned</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Access to terrace and pool</li>
	                                                                        		<li class="item-feature">Windows may be opened</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BEDS & BEDDING</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 King bed</li>
                                                                        			<li class="item-feature">Featherbed and Duvet</li>
                                                                        			<li class="item-feature">Luxury Linens</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Extra Pillows</li>
                                                                        			<li class="item-feature">Cribs permitted: 1 (upon request)</li>
	                                                                        		<li class="item-feature">Maximum cribs permitted in the villa: 2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BATHROOM FEATURES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Shared bathroom with pool / gym area</li>
                                                                        			<li class="item-feature">Shower</li>
                                                                        			<li class="item-feature">Top Brand Toiletries</li>
                                                                        			<li class="item-feature">Robes: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Slippers</li>
                                                                        			<li class="item-feature">Hair dryer</li>
                                                                        			<li class="item-feature">Make-up mirror</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">42" Led TV</li>
	                                                                     			<li class="item-feature">Cable TV</li>
	                                                                     			<li class="item-feature">Body Mirror</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Safe box</li>
	                                                                     			<li class="item-feature">IPod dock with alarm clock</li>
	                                                                     			<li class="item-feature">Iron and ironing board upon request</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMMUNICATION</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">1 Phone</li>
	                                                                     			<li class="item-feature">Phone features: Room to room, Domestic and International service (through VOIP)</li>
	                                                                     			<li class="item-feature">Free domestic, U.S. and Canada calls</li>
	                                                                     			<li class="item-feature">Wireless Internet, free of charge</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>HOSPITALITY SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Afternoon turndown service</li>
	                                                                     			<li class="item-feature">Newspaper delivered to your room upon request (Please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> one week prior to arrival with your Newspaper preference to check availability).
</li>
	                                                                     		</ul>
	                                                                     	</div>
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['bedroom-five'])
                                        	{
                                        		foreach($this->data[0]['bedroom-five'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    <!-- /Bedroom 5 -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
					    <div class="vc_btn3-container vc_btn3-center ">
					        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/living-spaces/" title="" target="_self">LEARN MORE</a>
					    </div>
					</div>
                </div>
            </div>
         </div>
         <?php 
         $content = ob_get_contents();
         ob_end_clean();
         return $content;
    }
    
    public function getTheRoomsHeader()
    {
    	ob_start();
    	?>
    	<div class="page-header" style="background-image:url(/images/overview/the-rooms/Villa_Aqua_rooms_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">The Rooms</h2>
                    </div>
                </div>
            </div>
        </div>
    	<?php 
    	$header = ob_get_contents();
    	ob_end_clean();
    	return $header;
    }
	
    public function getLivingHead()
    {
    	ob_start();
    	?>
        	<?php echo self::getCommonDocuments(); ?>
        	<?php echo self::getGoogleAnalytics(); ?>
    	<?php
        $head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    	
   	public function getLivingContent()
	{
        ob_start();
        echo self::getLivingHeader();
        ?>
        <div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Living Room</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													A wide front door swings open to its great room,<strong> an expansive air-conditioned area that creates the illusion 
													of being outdoors by means of its interior garden, 39ft /12mt high ceiling and curved glass wall windows cover 
													the entire side of the room with garden and pool views</strong>. The living room is the place to relax with your favorite music, 
													read a book or plan the next day activities with the rest of your group. The interior garden and fountain gives 
													this area a Zen touch that you will enjoy while sitting in the comfortable sofas.
	                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['living-room'])
                                        	{
                                        		foreach($this->data[0]['living-room'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['dining-room'])
                                        	{
                                        		foreach($this->data[0]['dining-room'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Dining Room</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Its circular design gives a<strong> 180 degree views of the surrounding pool and garden</strong>, 
												an inviting dining space full of light where you can enjoy an amazing breakfast or 
												lunch watching the full array of wildlife that visits the backyard, from colorful birds, 
												white tailed deer and iguanas to big Coati families or "Sereques", a small animal also called 
												"Agouti" which mainly feeds on fruits and seeds.
                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												At night, the dining room turns into a light show when the<strong> big modern chandelier reflects its lights in 
												all the windows</strong>. It is the perfect setting to savor all the chefs' specialties.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												<strong>The coffee bar is set all day long for enjoying your morning espresso or an afternoon tea.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Family Room &amp; Bar</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												This is one of our guest's favorite corners.<strong> With deep sofas, sunken bar and great entertainment amenities 
												that include a 75" Led TV, Bose home theater, Apple TV with Netflix, DVD and CD library, board games and more</strong>, 
												this area is perfect for a cocktail before dinner or to watch your favorite sports game or movie!
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												For your convenience we provide an<strong> "Honor bar" with a variety of open bottles </strong>from past guests or if you prefer to drink 
												your own, take advantage of the selection of wines and liquors that we offer, you just have to replace them or pay the 
												price before your leave.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['family-room'])
                                        	{
                                        		foreach($this->data[0]['family-room'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['library-room'])
                                        	{
                                        		foreach($this->data[0]['library-room'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Library &amp; TV Room</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												This cozy living room located on the first floor common area, is the perfect place to take a time off. 
												There is a small but interesting <strong>collection of books</strong>  that include top readings in different languages 
												and beautiful books about the culture, architecture, history and flora & fauna of Mexico.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												For the youngest in the group, here is where they can escape from all the nature and connect again 
												with technology with the<strong> X-box console and the DVD collection</strong> that include some titles for kids.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Guests can relax in this contemporary space with its comfortable furniture, air conditioning 
												and Wi-Fi access.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">Kitchen</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												Villa Aqua includes a<strong> fully equipped and efficient gourmet kitchen with all the appropriate 
												amenities and appliances for your dining needs.</strong>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Usually the chef takes care of all your meals but if you are a cook aficionado or just a food lover you can sit down and watch our chef 
												in action or even take a class and learn how to prepare your favorite Mexican dish!
                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for any questions or review our  <a href="/images/staff-and-services/menu-food-and-beverage.pdf" target="_blank">Food & Beverages Menu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['kitchen'])
                                        	{
                                        		foreach($this->data[0]['kitchen'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
					    <div class="vc_btn3-container vc_btn3-center ">
					        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/pool-and-outdoor/" title="" target="_self">LEARN MORE</a>
					    </div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
        <?php 
        $content = ob_get_contents();
        ob_end_clean();
		return $content;
    }
        
    public function getLivingHeader()
    {
       	ob_start();
       	?>
     	<div class="page-header" style="background-image:url(/images/overview/living-spaces/Living_spaces_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Living Spaces</h2>
                    </div>
                </div>
            </div>
        </div>
       	<?php 
       	$header = ob_get_contents();
       	ob_end_clean();
       	return $header;
	}
    
	public function getPoolAndOutdoorHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
	
	public function getPoolAndOutdoorContent()
	{
		ob_start();
		echo self::getPoolAndOutdoorHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Pool</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													The reason why we call the property Villa Aqua is our<strong> secluded, turquoise swimming pool, 
													which surrounds the house with its flowing curves and bathes the entire</strong> space with natural 
													blue-greenish light.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Certainly considered the location of serious action,<strong> the main patio with sun loungers shaded by umbrellas, 
													the comfortable living area and the BBQ gas grill & dining table</strong>, naturally allure guests together.
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
	                                            <div class="wpb_wrapper">
													<div class="stm_item-features">
	                                                	<div class="stm_item-features_inner">
	                                                		<ul class="item-features_list">
	                                                			<li class="item-feature">Swim lengths of 82ft / 25mts.</li>
	                                                			<li class="item-feature">Pool depth 4ft / 1.20mts</li>
	                                                		</ul>
	                                                		<ul class="item-features_list">
	                                                			<li class="item-feature">Not heated</li>
	                                                			<li class="item-feature">No pool lighting</li>
	                                                		</ul>
	                                                	</div>
	                                                </div>
	                                            </div>
	                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['pool'])
                                        	{
                                        		foreach($this->data[0]['pool'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['jacuzzy'])
                                        	{
                                        		foreach($this->data[0]['jacuzzy'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Jacuzzi</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Soak up the sun or enjoy the beautiful moon on our<strong> 10+ capacity heated Jacuzzi.</strong> During day it also 
												turns into a<strong> nice plunge pool for the kids!</strong> Or just grab your Margarita and relax with the bubbles 
												and massage after a great day on the beach!
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                   	<div class="vc_col-sm-12 wpb_column vc_column_container ">
                                    	<div class="wpb_wrapper">
											<div class="stm_item-features">
                                               	<div class="stm_item-features_inner">
                                               		<ul class="item-features_list_extended">
                                               			<li class="item-feature">Heated (max temperature 95ºF / 35ºC)</li>
                                               			<li class="item-feature">Lit up</li>
                                               		</ul>
                                               	</div>
                                           </div>
                                    	</div>
                                	</div>
                             	</div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Wood-Fired Oven</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												Ready for a Pizza Night? Choose your ingredients and put hands on to help the chef prepare fantastic 
												crunchy crust pizzas and have a fun time! Or maybe you prefer something more gourmet like slowly 
												cooked whole fish or an entire pig! Whatever you choose,<strong> you have to try our newest addition: 
												the Wood-fired oven</strong> and enjoy a nice al fresco dining experience under the stars!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['oven'])
                                        	{
                                        		foreach($this->data[0]['oven'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['gym'])
                                        	{
                                        		foreach($this->data[0]['gym'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Gym &amp; Sports</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												We want to help our guests maintain their fitness while staying at Villa Aqua by 
												taking advantage of our<strong> gym, squash court and sport gear</strong>.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												<strong>Trainers are available by request.</strong> You can book a session or arrange a sustained 
												personal fitness program during your stay. From private Yoga classes to Cross Fit 
												specialists, contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> to help you arrange your desired activity.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												We also offer many sports gear that will help you keep fit while enjoying family 
												fun and the amazing setting of this tropical Paradise!
                                            </p>
                                        </div>
                                        
                                        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
	                                   	<div class="vc_col-sm-12 wpb_column vc_column_container ">
	                                    	<div class="wpb_wrapper">
												<div class="stm_item-features">
	                                               	<div class="stm_item-features_inner">
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">4 bicycles (2 adult and 2 for children)</li>
	                                               			<li class="item-feature">Snorkeling gear (for 4, different sizes)</li>
	                                               			<li class="item-feature">Squash gear</li>
	                                               			<li class="item-feature">Free weights & bands</li>
	                                               			<li class="item-feature">Yoga mats</li>
	                                               			<li class="item-feature">Volley ball / badminton net and gear</li>
	                                               		</ul>
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">Basketball hoop and ball (on the street)</li>
	                                               			<li class="item-feature">Flag Football gear</li>
	                                               			<li class="item-feature">Bocce ball set (Petanque) </li>
	                                               			<li class="item-feature">Pool toys</li>
	                                               			<li class="item-feature">Soccer ball & more</li>
	                                               		</ul>
	                                               	</div>
	                                           </div>
	                                    	</div>
	                                	</div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">Squash</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												There is no other Villa within the Riviera Maya that has its<strong> own private 
												air-conditioned Squash Court</strong>. With laminated wood floors and glass doors it is 
												a good place to loose some of the extra pounds you may gain after eating all 
												the chef's delicacies.
                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Even though the court does not have the official size, it is perfect for learning, 
												practicing your skills or just have some fun and sweat!
                                            </p>
                                            <ul>
                                            	
                                            </ul>
                                        </div>
                                        
                                        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
	                                   	<div class="vc_col-sm-12 wpb_column vc_column_container ">
	                                    	<div class="wpb_wrapper">
												<div class="stm_item-features">
	                                               	<div class="stm_item-features_inner">
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">Racquets and balls are available</li>
                                            				<li class="item-feature">Air-conditioned and lit up</li>
	                                               			<li class="item-feature">W - 15.74 ft / 4.80 mts</li>
	                                               		</ul>
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">L - 32.80 ft / 10 mts</li>
	                                               			<li class="item-feature">H - 39.37 ft / 12 mts</li>
	                                               		</ul>
	                                               	</div>
	                                           </div>
	                                    	</div>
	                                	</div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['squash'])
                                        	{
                                        		foreach($this->data[0]['squash'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
					    <div class="vc_btn3-container vc_btn3-center ">
					        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/what-to-do/" title="" target="_self">LEARN MORE</a>
					    </div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	
	
	    
	public function getPoolAndOutdoorHeader()
	{
		ob_start();
	    ?>
	   	<div class="page-header" style="background-image:url(/images/overview/pool-and-outdoor/Villa_Aqua_pool_&_outdoor_HEADER.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Pool &amp; Outdoor</h2>
                    </div>
                </div>
            </div>
        </div> 	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
    
	public function getWhatToDoHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getWhatToDoContent()
	{
		ob_start();
		echo self::getWhatToDoHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
<!------------------- Master Bedroom  -------------------->                            
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2>Activities</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													There are so many things to do in Riviera Maya that sometimes it is hard 
													to find time to enjoy your villa, but if you are looking to relax and have 
													some restful time, then Villa Aqua can make your vacation without setting 
													your feet out!
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <div class="wpb_wrapper">
                                            	<div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                    
                                                    	<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>SPA SERVICES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">Delight yourself with the available treatments. <a href="/images/staff-and-services/menu_spa-services.pdf" target="_blank">Review our menu</a></li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    	<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>OUTDOOR ACTIVITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Bocce ball (Petanque)</li>
                                                                        			<li class="item-feature">Badminton / Volleyball</li>
                                                                        			<li class="item-feature">SCUBA Dive Introduction in the pool *</li>
                                                                        			<li class="item-feature">Sunken Trampoline</li>
                                                                        			<li class="item-feature">Flag football</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Basketball</li>
                                                                        			<li class="item-feature">Soccer</li>
	                                                                        		<li class="item-feature">Biking</li>
	                                                                        		<li class="item-feature">Ping pong</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>INDOOR ACTIVITIES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature"> Squash Court</li>
                                                                        			<li class="item-feature">Gym</li>
	                                                                        		<li class="item-feature">Large Flat screen TVs</li>
	                                                                        		<li class="item-feature">DVD players</li>
	                                                                        		<li class="item-feature">Movies (DVD) & Music (CD) Library</li>
	                                                                        		<li class="item-feature">Game Console</li>
	                                                                        		<li class="item-feature"> Books in different languages</li>
	                                                                        		<li class="item-feature">Board games</li>
	                                                                        		<li class="item-feature">Poker set</li>
	                                                                        		<li class="item-feature">Chess</li>
	                                                                        		<li class="item-feature">Ping pong</li>
	                                                                        		<li class="item-feature">Private Lessons
	                                                                        			<ul>
	                                                                        				<li class="item-feature">Exercise Instructors (Yoga, Cross fit, Pilates, etc.)</li>
	                                                                        				<li>Dance classes (Salsa, Merengue, Tango, Flamenco, etc.)</li>
	                                                                        				<li>Cooking Classes</li>
	                                                                        				<li>Spanish lessons</li>
	                                                                        			</ul>
	                                                                        		</li>
	                                                                        		<li class="item-feature">Live music entertainment (Mariachi, Trio, Marimba, guitar player, etc.)*</li>
	                                                                        		<li class="item-feature">Private celebrations (Weddings/ <a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Villa Aqua Epic Experiences</a> / Corporate Retreats, etc.) *</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        	</div>
                                            
                                            <p style="text-align: right; "><i>*extra fees apply</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['activities'])
                                        	{
                                        		foreach($this->data[0]['activities'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->

                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
					    <div class="vc_btn3-container vc_btn3-center ">
					        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/overview/" title="" target="_self">LEARN MORE</a>
					    </div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getWhatToDoHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/overview/what-to-do/header_what_to_do.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">WHAT TO DO IN THE VILLA</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getStaffAndServicesHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getStaffAndServicesContent()
	{
		ob_start();
		echo self::getStaffAndServicesHeader();
		?>
		<div class="container rental-services-container">
            <div class="container-inner">
                <div class="content">
                    <div class="rental-services_filter">
                        <div class="rs_filter-inner">
                            <a href="#" class="active" data-filter="all">All</a>
                            <a href="#" data-filter="included">Included</a>
                            <a href="#" data-filter="at-extra">At extra cost</a>
                        </div>
                    </div>
                    <div class="rental-services-grid">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/included/#villahost"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_villa_host.jpg" class="attachment-full wp-post-image" alt="Exellent-view" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Villa Host</div>
                                        <div class="rs-item_price">Included</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/included/#chef"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_chef.jpg" class="attachment-full wp-post-image" alt="Berth" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Chef</div>
                                        <div class="rs-item_price">Included</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/included/#housekeeping"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_housekeeping.jpg" class="attachment-full wp-post-image" alt="Big-Yacht" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Housekeeping</div>
                                        <div class="rs-item_price">Included</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/included/#maintenance"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_mantainance.jpg" class="attachment-full wp-post-image" alt="Villas-near-the-beach" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Maintenance</div>
                                        <div class="rs-item_price">Included</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/at-extra-cost/#foodandbeverage"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_not_included_food_&_beverage.jpg" class="attachment-full wp-post-image" alt="Over-the-Sea" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Food & Beverage </div>
                                        <div class="rs-item_price">At an extra cost</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/at-extra-cost/#spa"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_extra_cost_spa.jpg" class="attachment-full wp-post-image" alt="Above-the-clouds" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Spa</div>
                                        <div class="rs-item_price">At an extra cost</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/at-extra-cost/#transportation"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_not_included_transportation.jpg" class="attachment-full wp-post-image" alt="Ready-to-way" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Transportation</div>
                                        <div class="rs-item_price">At an extra cost</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/at-extra-cost/#entertainment"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_aqua_entertainment.jpg" class="attachment-full wp-post-image" alt="Stylish-convertible" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Entertainment</div>
                                        <div class="rs-item_price">At an extra cost</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getStaffAndServicesHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/staff-and-services/Villa_Aqua_staff_&_service_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Staff and Services</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getIncludedHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getIncludedContent()
	{
		ob_start();
		echo self::getIncludedHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
        	<div class="vc_custom_heading">
             	<h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Included Services</h2>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Villa Aqua exceptional services, modern amenities and dedicated staff</strong> will make a blast of your Luxury Vacation Villa Rental.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Whether you're here on a dream family vacation in the Caribbean, a luxury friends break, an inspiring corporate retreat, on a romantic beach holiday or, simply for a relaxed weekend away from work, our team is here to help you. 
                                                </span>
                                            </p>
                                            <br />
                                        </div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">1 Complimentary round trip Airport Transfer (with rentals of 4+ nights)</li>
                                                			<li class="item-feature">Complimentary Welcome Snack</li>
                                                			<li class="item-feature">Bottled water on arrival day (2 bottles per room)</li>
                                                			<li class="item-feature">Honor Bar (limited to open bottles)</li>
                                                			<li class="item-feature">Villa Host (Concierge 24/7 service: daily visits and telephone assistance during the night)</li>
                                                			<li class="item-feature">Chef & Kitchen Assistant * (daily from 8am to 4pm)</li>
                                                			<li class="item-feature">Daily housekeeping (from 9am to 4pm)</li>
                                                			<li class="item-feature">Property Maintenance Team (when required)</li>
	                                                 		<li class="item-feature">Wireless Internet free of charge</li>
	                                                 		<li class="item-feature">Free domestic, U.S. and Canada calls</li>
                                                		</ul>
                                                		<p><i>*No beverage service (bar tending) is provided</i></p>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_staff_&_service_general_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_staff_&_service_general_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_included_villa_host.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_included_villa_host.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container" id="villahost">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Villa Host</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    From the moment your reservation is completed, you will be assigned to your<strong> personal English/Spanish speaking Villa Host who will assist you with all</strong> your pre-arrival arrangements from meal planning to organizing activities and transportation, finding special requests or help planning your dream vacation. Our Villa Host will answer any questions you may have about the villa itself or the surroundings.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Your Host will welcome and assist you and your group with settling into Villa Aqua and will make sure that your vacation begins as quickly as possible, taking care of all your villa needs.</strong>
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Villa Aqua Host can give you <strong>guidance on the best restaurants, boutiques, guides and drivers.</strong> We can help you with water sports, fishing, boat charters, and suggest 1000 ideas to keep the children smiling, from zip-lining to kayaking. We want to share all that Mexico has to offer, including its unique culture, food, spectacular history and natural sites, to help you make the most of your Riviera Maya vacation.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Please contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_blank">Villa Aqua Host</a>, who is always at your service! 
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>             
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="chef">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Chef & Kitchen Assistance</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    At Villa Aqua we know meals are a crucial element to the enjoyment of your <strong> Luxury Vacation Rental</strong> experience and for that reason as our value guest, <strong> you are provided with Professional Chef Service and a kitchen assistant for breakfast and lunch (8am to 4pm).</strong> Discover a variety of fresh fish, seafood, beef and chicken cooked with savory herbs, regional spices, fruits and vegetables that the Mexican Caribbean has to offer.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    As many of our guests prefer to try all the dining options that Playa del Carmen has to offer,<strong> we do not include dinner service,</strong> but if you choose to stay home, we will be more than happy to serve any of the chef's specialties for an extra service fee. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    From casual barbecues under the stars to<strong><a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank"> epic dining experiences</a></strong> that include live music & entertainment, you will never regret of not going out!
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Please take in mind that the food service provided is<strong> "Family Style" where everyone eats from the same menu.</strong> It is very important that you communicate your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> and/or Chef about any food allergies, dietary restriction-preferences prior to your arrival in order to customize your meal preparations. 
                                                </span>
                                            </p>
                                           
                                           <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Check out our <a href="/images/staff-and-services/menu-food-and-beverage.pdf" target="_blank"> sample menu</a> which can be customized to your taste.  
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_included_chef.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_included_chef.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Villa host -->
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_included_housekeeping.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_included_housekeeping.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container " id="housekeeping">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Housekeeping Service</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    As we know how important it is for you to relax during your vacation, Villa Aqua <strong>provides daily housekeeping service</strong> to keep our guests' peace of mind.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    These efficient and important members of our staff are there to meticulously attend to all your accommodation needs and they will make sure that the villa is spotless.<strong> Late afternoon turn down service is provided as well.</strong> 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong> Laundry Service is offered for an extra fee.</strong> Dry Cleaning and press service is outsourced so take in mind it can take a couple of days to return your garments.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <!-- /Villa host -->
                        
                        <!-- Maintenance -->
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin" id="maintenance">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Maintenance</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    These part time members of Villa Aqua staff are responsible to<strong> maintain the villa in optimal 
                                                    conditions.</strong> Their activities go from taking care of the pool and Jacuzzi, to maintaining the 
                                                    landscape and garden impeccable.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    They are discreetly attending to any maintenance requirements that may arise, whether part of the daily 
                                                    schedule or unprompted, always assuring that everything in Villa Aqua works properly.
You can recognize our maintenance team for their uniform. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>If there is anything that does not work properly at the villa, please advice your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a></strong> 
                                                    and we will do our best to solve any problems immediately.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_included_mantainance.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_included_mantainance.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Maintenance -->
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/at-extra-cost/" title="" target="_self">MORE SERVICES</a>
			</div>
        </div>
        
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getIncludedHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/staff-and-services/Villa_Aqua_staff_&_service_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Staff and services</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getExtraHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getExtraContent()
	{
		ob_start();
		echo self::getExtraHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
        	<div class="vc_custom_heading">
             	<h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">At Extra Cost </h2>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">Food & Beverage</li>
                                                			<li class="item-feature">Wine and Liquor supply (charges apply)</li>
                                                			<li class="item-feature">Pre-stock and Grocery Shopping service (20% delivery fee)</li>
                                                			<li class="item-feature">Chef Services for dinner</li>
                                                			<li class="item-feature">Bartender</li>
                                                			<li class="item-feature">Waiter</li>
                                                			<li class="item-feature">Spa Services</li>
                                                			<li class="item-feature">Extra maid</li>
                                                 			<li class="item-feature">Laundry & Dry Cleaning Service</li>
                                                 			<li class="item-feature">Babysitter</li>
                                                 			<li class="item-feature">Car rental & Driver (transportation services)</li>
                                                 			<li class="item-feature"><strong><a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Villa Aqua Epic Experiences</a></strong></li>
                                                 			<li class="item-feature">Entertainment (music, lessons, shows, etc.)</li>
                                                 			<li class="item-feature">Tours & Activities</li>
                                                		</ul>
                                                		<p><i>*Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more info and pricing</i></p>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_aqua_food_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_aqua_food_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        
                        
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_not_included_food_&_beverage.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_not_included_food_&_beverage.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container" id="foodandbeverage">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Food & Beverage</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    The cost of food and beverage is not included with your<strong> Luxury Vacation Rental</strong>. If you have 
                                                    interest on visiting the local supermarkets and grocery shops you can bring whatever you like 
                                                    and ask the chef to prepare your favorite dish but If you want to enjoy your vacation at the most, 
                                                    we recommend you let the chef take care of everything, having the best providers for the 
                                                    freshest ingredients will make a big difference in your meals preparation.
                                                </span>
                                            </p>
                                        </div>
                                        
                                        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <div class="wpb_wrapper">
                                            	<div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>PRE-STOCK & GROCERY SHOPPING SERVICE</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        
                                                                        <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                   Take advantage of our grocery shopping service and let us stock your 
							                                                   kitchen for you. Just fill out the Grocery Shopping List and we will 
							                                                   pre-stock the villa before your arrival or during your stay. 
							                                                   A 20% surcharge will be added to your total and you can pay at the 
							                                                   end of your stay <strong>(we do not accept Credit Cards so please be prepared 
							                                                   to pay in cash)</strong>.
							                                                </span>
							                                            </p>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong style="text-transform: uppercase;">Organic & Local Produce</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Let the chef know if you are interested in healthy choices such as 
							                                                    organic products and local produce (fruit, herbs, vegetables, eggs 
							                                                    & chicken). Please just take in mind that these products may be 
							                                                    subject to availability.
							
							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">Allergies & Dietary Restrictions</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Please communicate your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> and/or chef about any allergies, 
							                                                    dietary restrictions or food preferences prior to your arrival in 
							                                                    order to customize your meal preparations. 
							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">Family Style Service</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h6></h6>
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Even though you have a professional chef at Villa Aqua, please take 
							                                                    in mind that this is a villa not a restaurant or hotel. We serve 
							                                                    "Family Style"; this means you choose the same menu for all in your
							                                                     party. We can make exceptions for children or people with allergies 
							                                                     or dietary restrictions. The chef and the kitchen assistant are in 
							                                                     charge of grocery shopping, food preparation, serving and cleaning.
							                                                      We make our best effort to attend our guests as they deserve but 
							                                                      we do not offer "formal serving". If you require this type of 
							                                                      service, please ask your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> about "waiter service" options 
							                                                      and fees.
							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">Beverages</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Villa Aqua is stocked with a wide variety of wines & spirits. You can 
							                                                    pay for the bottles that you open or simply replace the ones you took
							                                                     before your departure.
																					Even though the villa staff can prepare some cocktails randomly, 
																					during meal preparation it is very hard to attend the drinks.
																					 If you require bar service during your stay, we highly recommend 
																					 you to hire a bartender. Please contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more 
																					 info about service and fees. 
							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">Menu</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    <a href="/images/staff-and-services/menu-food-and-beverage.pdf" target="_blank">Follow the link</a> 
							                                                    to see a list of some of the different food options that the chef can prepare for you. 
							                                                    Usually we ask you to plan, at least, the meals for the first 2 days. Then, 
							                                                    upon arrival, you can sit down with your chef and discuss the rest of the meals.  
							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                        	</div>
                                    </div>
                                </div>
                            </div>
                        </div>             
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="spa">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">SPA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                               	 Just relax and treat yourself to a day of pampering with our signature services and treatments right from the 
                                               	 comfort of your Luxury Vacation Rental.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                               	 Villa Aqua <a href="/images/staff-and-services/menu_spa-services.pdf" target="_blank">SPA Menu</a> includes 
                                               	 facials, massages, manicures, pedicures and other beauty treatments that will enhance your overall experience. 
                                              
                                               	Whether you need to unwind after a day of fun & adventure in the Riviera Maya, or jump-start your vacation, 
                                               	our highly skilled professional providers can banish stress and tension. Both male and female therapists are 
                                               	available, with treatments that can be applied inside your bedroom or outdoors breathing the fresh air. From 
                                               	a Sport Massage, great for athletes, to restore and relax the sore muscles  leaving you feeling fit and ready 
                                               	to hit the gym again to a relaxing or invigorating massage with aromatherapy to help you indulge in the health 
                                               	and wellness you need.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                               	 Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more info and reservations. We recommend a<strong> minimum of 24 hour</strong> notice to guarantee 
                                               	 availability.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_extra_cost_spa.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_extra_cost_spa.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Villa host -->
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_Aqua_services_not_included_transportation.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_services_not_included_transportation.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container" id="transportation">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Transportation</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Villa Aqua offers a complimentary round trip airport transfer for your convenience (with rentals of 4+ nights). 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Moving around Playa del Carmen from Villa Aqua is very easy. We are located walking distance 
                                                    from downtown and the beach, getting a taxi just takes a call and a 15 min wait in the villa, 
                                                    but if you have plans of visiting the Riviera Maya and take advantage of the amazing things this 
                                                    wonderful paradise has to offer, then we highly recommend that you consider renting a car or hire 
                                                    a driver or private transfer for your day trips. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for options and pricing.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <!-- /Villa host -->
                        
                        <!-- Maintenance -->
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin" id="entertainment">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Entertainment</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Villa Aqua guests will never feel bored while staying with us! 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Starting with the IN villa entertainment that goes from private squash court, gym equipment, 
                                                    sunken trampoline, outdoor hot tub, volleyball, badminton, snorkeling gear, bicycles, 
                                                    indoor/outdoor surround sound, flat screen TVs and IPod docks in every room, Xbox and Wii 
                                                    consoles, Home Theater, movie and music library, fully stocked bar, board games and more. 
													Then you have a wide variety of activities in the wonderful surroundings, from water 
													activities, archeological sites, eco-parks, shopping & dining. We can even bring musicians, 
													entertainers or even teach you how to dance, cook Mexican food or speak some Spanish!
 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    The options are endless. Just think of something you would like to do and our <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> will try to get it for you!
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/staff-and-services/Villa_aqua_entertainment.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/staff-and-services/Villa_aqua_entertainment.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Maintenance -->
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/included/" title="" target="_self">MORE SERVICES</a>
			</div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getExtraHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/staff-and-services/Villa_Aqua_Header_spa_new.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Staff and services</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getArrivingHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getArrivingContent()
	{
		ob_start();
		echo self::getArrivingHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="vc_custom_heading">
                <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Arriving to Villa Aqua</h2>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Getting to the Riviera Maya is very easy. Cancun International Airport (code CUN) is 
                                                    located 52 km north of Villa Aqua (Playa del Carmen) and is served by all major International 
                                                    Airlines with direct or nonstop service from almost anywhere around the world.
                                                </span>
                                            </p>

                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Once you arrive to Cancun airport, we provide complimentary transportation to the villa 
                                                    (1 round trip for stays of 4 or more nights). 
                                                </span>
                                            </p>

                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Cozumel Airport (code CZM) may also be considered an international access to this region 
                                                    but it is on the island and you will need to take a 30 min ferry to Playa del Carmen where 
                                                    Villa Aqua is located and we can arrange your transportation from the dock to the house. 
                                                </span>
                                            </p>

                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Cancun International Airport: 
                                                    <br />
                                                    <a href="http://www.cancun-airport.com/" target="_blank">http://www.cancun-airport.com/</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                <img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_01.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span>
                                </div>
                            </div>
                        </div>


                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <?php 
                                        	if ($this->data[0]['playacar'])
                                        	{
                                        		foreach($this->data[0]['playacar'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container" id="playacar">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Playacar</h2>
                                    </div>

                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Villa Aqua is located just a few minutes walking distance to the beautiful beaches of 
                                                    Playacar Phase I and Playa del Carmen downtown.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Playacar is an upscale-gated community located just south of Playa del Carmen's main 
                                                    urban area. Playacar is approximately 40 minutes drive from Cancun International airport.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    The resort of Playacar is the ideal spot for families wanting a little bit of everything. 
                                                    It is divided into two phases, the first borders the ocean, the second, where Villa Aqua is 
                                                    located, lining the 18 hole golf course designed by Robert Von Hagge, and exposes luxury 
                                                    resorts, private homes and a couple of small shopping centers.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    The Xaman-Ha Aviary is also located within Playacar Phase II, and contains more than 200 
                                                    animals of 45 different species; besides birds they also have butterflies, iguanas and small mammals.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    You will also find some remains of Mayan Ruins along Playacar Phase I and Phase II. 
                                                </span>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span>
                                </div>
                            </div>
                        </div>

                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block"  id="playadelcarmen">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Playa del Carmen</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Situated right in the heart of the Riviera Maya, just 50 km south from Cancun's International 
                                                    Airport, Playa del Carmen is the region's top destination for shopping, dining and nightlife. 
                                                    Playa, as everybody calls it, provides everything one could wish for, in a Caribbean location: 
                                                    White sand beaches, amazing golf, water sports, nature adventure, cultural and recreational 
                                                    centers and much more.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    After your day at the beach, head into town and take a stroll along the pedestrian Fifth Avenue 
                                                    strip, locally known as Quinta Avenida. La Quinta is the place to see and be seen, with its 
                                                    cosmopolitan atmosphere of joy, security, and harmony, by day it's packed with people browsing 
                                                    the shops and boutiques; by night roving musicians entertain diners in the many restaurants and 
                                                    bars. Playa del Carmen is one of the Riviera Maya's top culinary destinations where you'll find 
                                                    everything from street tacos to five-star establishments serving up their own unique takes on 
                                                    traditional Mayan and international cuisine. As the evening progresses, La Quinta gyrates to the 
                                                    sounds of rock, salsa and reggae as people flock to the bars and nightclubs. The beach clubs get 
                                                    in on the action too, hosting dance parties that rage on until the early morning hours and Villa 
                                                    Aqua is just minutes walking distance to all this fun, right in Playacar, a high-end development 
                                                    complete with golf course, all-inclusive luxury resorts and gated residences. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Ferry service connects the Caribbean island of Cozumel with Playa del Carmen so you can easily 
                                                    enjoy a day trip out to the island for some scuba diving or snorkeling. You can also arrange day 
                                                    trips to visit ancient archaeological sites, ecological parks and cenotes.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Whether you are here to relax and unravel, or to immerse yourself in an abundance of cultural or 
                                                    adrenaline filled activities, the possibilities are endless and will definitely exceed your expectations. 
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                <img width="1140" height="676" src="/images/location-info/playacar_shopping_07.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                            
                                            <div class="vc_single_image-wrapper   vc_box_border_grey top-margin">
                                                <img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_05.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
			            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/riviera-maya/" title="" target="_self">LEARN MORE ABOUT RIVIERA MAYA</a>
						</div>
						<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
						<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
						
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                        <h5>Distance from Villa Aqua to: </h5>
                        <br />
                        	<div class="vc_col-sm-6 wpb_column vc_column_container ">
                        		<div class="wpb_wrapper">
	                                <div class="wpb_text_column wpb_content_element ">
	                                    <div class="wpb_wrapper">
	                                    	
	                                        <table class="table table-striped">
	                                            <thead>
	                                                <tr>
	                                                    <th>Destination</th>
	                                                    <th>Km</th>
	                                                    <th>Miles</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th>Cancun Airport</th>
	                                                    <td>53</td>
	                                                    <td>33</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Xpu-Ha</th>
	                                                    <td>34</td>
	                                                    <td>22</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Puerto Morelos</th>
	                                                    <td>33</td>
	                                                    <td>21.5</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Kantenah</th>
	                                                    <td>35</td>
	                                                    <td>23</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Punta Brava</th>
	                                                    <td>28</td>
	                                                    <td>16</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Aktunchen</th>
	                                                    <td>40</td>
	                                                    <td>26</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Playa Paraiso</th>
	                                                    <td>22</td>
	                                                    <td>14</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Chemuyil</th>
	                                                    <td>43</td>
	                                                    <td>28</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Punta Maroma</th>
	                                                    <td>21</td>
	                                                    <td>15</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Xcacel</th>
	                                                    <td>50</td>
	                                                    <td>32.5</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Punta Bete</th>
	                                                    <td>19</td>
	                                                    <td>11</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Xel-Há</th>
	                                                    <td>57</td>
	                                                    <td>37</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
                            	</div>
                        	</div>
                        	
                        	<div class="vc_col-sm-6 wpb_column vc_column_container ">
                        		<div class="wpb_wrapper">
	                                <div class="wpb_text_column wpb_content_element ">
	                                    <div class="wpb_wrapper">
	                                        <table class="table table-striped">
	                                            <thead>
	                                                <tr>
	                                                    <th>Destination</th>
	                                                    <th>Km</th>
	                                                    <th>Miles</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th>Xcalacoco</th>
	                                                    <td>1.8</td>
	                                                    <td>1.2</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Tulum</th>
	                                                    <td>64</td>
	                                                    <td>42</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Playa del Carmen</th>
	                                                    <td>1</td>
	                                                    <td>.6</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Cobá</th>
	                                                    <td>101</td>
	                                                    <td>66</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Xcaret</th>
	                                                    <td>6</td>
	                                                    <td>4</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Boca Paila</th>
	                                                    <td>89</td>
	                                                    <td>58</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Calica</th>
	                                                    <td>1.1</td>
	                                                    <td>.7</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Punta Allen</th>
	                                                    <td>114</td>
	                                                    <td>74.5</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Paamul</th>
	                                                    <td>26</td>
	                                                    <td>17</td>
	                                                </tr>
	                                                
	                                                <tr>
	                                                    <th>Chichen Itzá	</th>
	                                                    <td>214</td>
	                                                    <td>140</td>
	                                                </tr>
	                                                
	                                                <tr>
	                                                    <th>Puerto Aventuras</th>
	                                                    <td>33</td>
	                                                    <td>21.5</td>
	                                                </tr>
	                                                
	                                                <tr>
	                                                    <th>Mérida</th>
	                                                    <td>321</td>
	                                                    <td>210</td>
	                                                </tr>
	                                                
	                                            </tbody>
	                                        </table>
	
	                                    </div>
	                                </div>
                            	</div>
                        	</div>
                        	
                            
                        </div>


                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getArrivingHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/location-info/Villa_Aqua_location_info_HEADER_.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Location Info</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getRivieraHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getRivieraContent()
	{
		ob_start();
		echo self::getRivieraHeader();
		?>
		<div class="container posts-container posts-list-container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content">
                            <div class="posts-list">

                                <article id="post-295" class="view-for-list post-295 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-uncategorized has-thumbnail">
                                    <div class="wpb_wrapper">
                                    	<div class="vc_custom_heading">
                                        	<h2>Riviera Maya</h2>
                                    	</div>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <!-- .entry-header -->
                                    <div class="entry-holder">
                                        <div class="entry-content">
                                            The Riviera Maya, located in the State of Quintana Roo, Mexico, in the famous Yucatan Peninsula, geographically extends along the coast from Punta Brava to the town of Punta Allen south, about 120 km long, spanning the City of "Solidaridad" (Playa del Carmen) and Tulum. Bordered to the east by the turquoise waters of the Caribbean Sea and to the west by lush vegetation full of flora and fauna, unique geological formations and archaeological sites that hide remarkable vestiges of Mayan civilization, is the ideal place to enjoy a great vacation.
                                        </div>
                                        <!-- .entry-content -->
                                    </div>

                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>LANGUAGE</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				The official language of Mexico is Spanish. In this region the indigenous population speaks Mayan. But as the Riviera Maya is a popular touristic destination you won't have trouble finding English speaking almost all around and even other languages.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CURRENCY</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				The official currency is the Mexican Peso. The exchange rate is between 14 and 17 pesos per American dollar varying according to fluctuations in the foreign exchange market, but US Dollars and credit cards are accepted in most places. There are many exchange offices and banks where you can get pesos. The first generally give better exchange rate but you may have to wait in long lines and they usually ask for documents. Be aware that some only accept few currencies. If you need to change Euros, you must bring your passport.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>WEATHER</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				The average annual temperature in Riviera Maya is 24–25 °C (75–77 °F) but can reach 35-40 °C during summer months. Usually the weather is hot and humid but the higher temperatures are registered between the months of May and August with frequent night showers. The climate is dominated by a rainy season from May through November, and within the dry season there is a period dominated by northerly winds, which usually occurs in the months of January and February when the weather is sunny and cool. Groundwater and therefore "cenote" (sink holes) water temperatures are 25°C (77°F) year round. Coastal waters range from 26°C (79°F) in January to 29°C (84°F) in August.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                
                                                                
                                                                    
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>LOCAL TIME</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				In Riviera Maya applies the Eastern Standard Time EST UTC/GMT-5 hours or the same time of Miami, FL.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                    
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>WATER</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				The water that comes out of the sinks and showers at Villa Aqua is treated and desalinated. Please help to conserve local water by using only the water that you need. Even though the water in the villa is treated we do not recommend you drink it from the faucets as it has many minerals that your stomach may not tolerate. For drinking water please use bottle water or the blue large water jugs that we provide in the kitchen, it is complimentary.
					                                                			</li>
					                                                			
					                                                			<li class="item-feature">
					                                                				Almost all restaurants in Playa will only serve purified water and use purified ice so do not worry about dining out!
					                                                			</li>
					                                                			
					                                                			<li class="item-feature">
					                                                				If you are going to spend your day out on the beach or visiting the different attractions, we recommend you to bring a supply of bottled water and/or drink only bottled beverages.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ELECTRICITY</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Mexico uses the conventional 110/220 electrical powers, the same as the United States. Electricity is very precious here in the Riviera Maya, please remember to keep all doors and windows closed while using the air conditioning to maintain the villa cool and conserve electricity. If you are to open doors and windows please be aware of the fact that it will take time to cool the room and villa again.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                    
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>BUGS & FAUNA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Playa del Carmen is a tropical destination, with that comes sporadic rain showers and high humidity. It might be helpful to buy mosquito repellent because of the wet and humid conditions. We would also like you to note that there are all types of wildlife in our surroundings. Even though we are in a populated area you can still see large iguanas, squirrels, local mammals, exotic birds, as well as various tropical insects.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                    
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ATM'S</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				There are many ATMs throughout Playa del Carmen where you can receive Pesos but take in mind that sometimes you will be charge a double commission: the ATM's bank and yours! There are some ATMs that provide US dollars but have in mind that sometimes the commission can be up to 10% of the amount you retire.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				If you go on tours outside of the city remember to take plenty of cash with you because it is not common to find an ATM or even a place that will accept credit cards in rural areas.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
				                                                	</div>
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>PASSPORT & VISA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                    <h6>For USA citizens only:</h6> 
                                                                    <div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Since 2007, ALL persons, including U.S. citizens, traveling by air between the United States and Canada, Mexico, Central and South America, the Caribbean, and Bermuda will be required to present a valid passport, Air NEXUS card, or U.S. Coast Guard Merchant Mariner Document, or an Alien Registration Card, Form I-551, if applicable. If traveling by land or sea (including ferries), ALL persons, including U.S. citizens, may be required to present a valid passport or other documents as determined by the Department of Homeland Security.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                    <br />
                                                                    <br />
                                                                    <h6>Other Countries:</h6> 
                                                                    <div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				If you are a citizen of Andorra, Argentina, Australia, Austria, Belgium, Canada, Chile, Costa Rica, the Czech Republic, Denmark, Finland, France, Germany, Great Britain, Greece, Hungary, Iceland, Ireland, Israel, Italy, Japan, Liechtenstein, Luxembourg, Monaco, Netherlands, New Zealand, Norway, Poland, Portugal, Puerto Rico, San Marino, Singapore, Slovenia, Spain, South Korea, Sweden, Switzerland, United States of America, Uruguay or Venezuela, you don't need a visa to enter Mexico, although you must present a valid passport and fill out an immigration form for tourists and business trips, which can be obtained in travel agencies, airlines or at the point where you enter Mexico.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				The immigration officer at your point of entry into Mexico can also request that you demonstrate that you have sufficient funds and a return ticket to your country. If you are a citizen of any other country, you need to go to a Mexican consulate to request a visa.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				If you have a family member, friend or acquaintance in Mexico, he or she can do this at the INM.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Visa Airport Departure Tax is approximately $17.00 USD. Children under 2 years of age are exempt.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>TAX & TIPS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				In Riviera Maya, which belongs to the State of Quintana Roo, there is a 16% VAT (Value Added Tax) that is added to most products and services.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Tips are very common in Mexico. The amount you tip is at your discretion and should be based on the quality of service you received. Tips to service personnel (ie: Chef, kitchen assistant, housekeepers, server, maintenance, villa host, etc…) are not included in the cost of your villa rental.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                			
					                                                				To give you an idea of how much is usually tipped, and which service providers will expect a tip from you, here is a rundown of who and how much to tip in Mexico:
					                                                			</li>
					                                                		</ul>
					                                                	</div>
				                                                	</div>
                                                                
                                                                    <ul>
                                                                        <li>
                                                                            Waiters and Waitresses in Restaurants: it is customary to leave a tip equal to 10 to 20% of the total of the bill. In some restaurants service is included, particularly if you're part of a large group, but this is not usually the case. Always check the bill to see if service is included or if there are errors in the calculation. If a service charge is included, you may choose to tip extra for superior service.
                                                                            <br /> In bars and at all-inclusive resorts it is appropriate to tip the equivalent of one dollar per drink, or 10 to 15% of the total.
                                                                        </li>
                                                                        <li>
                                                                            Guides and Drivers: If you are pleased with your tour guide, it is appropriate to tip 10 to 20% of the cost of a day tour. For multi-day group tours, tip the tour leader a minimum of two or three dollars per day, and coach driver’s one dollar per day. It is not customary to tip taxi drivers, unless they assist you with your luggage, in which case $1 USD or its equivalent in pesos per suitcase is a good rule of thumb.
                                                                        </li>
                                                                        <li>
                                                                            Spa Service Providers: It is customary to tip spa service providers 15-20% of the cost of the spa treatment.
                                                                        </li>
                                                                        <li>
                                                                            Gas Station Attendants: Pemex stations in Mexico are full service. Gas station attendants are usually tipped, specially if they provide some extra service such as cleaning your windshield; 50 cents 1 USD or its equivalent in pesos is sufficient but if they also check the air in your tires or check the oil, you should tip more.
                                                                        </li>
                                                                        <li>
                                                                            Grocery Baggers: In grocery stores there are usually teens or seniors who will bag your purchases. These people do not receive any payment other than the tips they are given. Tip them a few pesos (1 or 2 pesos per shopping bag is a good rule of thumb) add on 1 USD or its equivalent in pesos more if they help you take the bags out to your car.
                                                                        </li>
                                                                        <li>
                                                                            Villa Staff: Tipping is personal, private and 100% up to your discretion. There are many people who have questions on how to tip the staff who worked hard to make their vacations ones to remember. As a basic guideline for general tipping we recommend a minimum of $10 to $15 USD per person staying in the villa per day.
                                                                            <br /> The total amount should be divided between the number of staff members that served you. The % for each staff is up to your discretion.
                                                                            <br /> Some important things to take into consideration when tipping:
                                                                            <ul>
                                                                                <li>
                                                                                    The quality of services that were provided.
                                                                                </li>
                                                                                <li>
                                                                                    Were there children? You should consider an additional amount due to the fact that children tend to be more disorderly, eat on specific schedules and from different menus.
                                                                                </li>
                                                                                <li>
                                                                                    The total number of days of your stay: if you stay in your villa for more than a week you should consider discounting 20% and for more than 2 weeks up to 30%.
                                                                                </li>
                                                                                <li>Hours of service – Were you provided with services outside of the normal hours offered?</li>

                                                                                <li>Were services arranged for you such as transportation and outings?</li>
                                                                            </ul>
                                                                            If for some reason you are unsatisfied with the service of any of our staff members, please report it immediately to your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a>. In case you prefer to contact the villa manager please e-mail rentals@villaaqua.com or call 044 (984) 8079475 from a local number or 1(866) 460 3159 from the US.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>TIPS FOR TIPPING </strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Plan ahead for tipping: include tips in your vacation budget.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Change can be hard to come by in Mexico. Use larger bills when making purchases and hang on to your change so that you’ll have it on-hand for tips.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Villa Aqua has no-tipping policies but most staff is happy to receive tips.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Leaving a tip is important, but a smile and a “gracias” can be just as important in showing your appreciation to someone who has provided you with a service
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Tips are voluntary, NOT an obligation. You will make the final decision on how you will compensate the service personal.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Please do not feel obligated to tip. This information is being provided because we have encountered a lot of questions about tipping and would like to leave this decision 100% private and up to your discretion.
					                                                			</li>
					                                                		</ul>
					                                                	</div>
				                                                	</div>
                                                                </div>
                                                                <!-- .entry-content -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
									<header class="entry-header">
                                        <div class="entry-thumb"><img width="840" height="500" src="/images/location-info/Villa_Aqua_Location_info_02.jpg" class="attachment-thumb-840x500 wp-post-image" alt="Family-Vacation">
                                        </div>
                                    </header>

                                    <!-- .entry-footer -->
                                </article>
                                <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
								<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
									<div class="vc_btn3-container vc_btn3-center ">
										<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/arriving-to-the-villa-playacar-playa-del-carmen/" title="" target="_self">LEARN MORE</a>
									</div>
								</div>
                                <!-- #post-## -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getRivieraHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/location-info/Villa_Aqua_location_info_HEADER_.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Riviera Maya</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getOutHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getOutContent()
	{
		ob_start();
		echo self::getOutHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
<!------------------- Master Bedroom  -------------------->                            
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Beaches & Beach Clubs</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<h6>PLAYACAR BEACH</h6>
                                        	<p class="paragraph ng-attr-widget">
												One of the most exclusive and beautiful beaches along the Riviera Maya is located right 
												in Playacar just a short walk from Villa Aqua (15-20 min). The beach at Playacar 
												Phase I is a stretch of soft white sand and turquoise waters protected by the coral 
												reef that runs along the coast and which is short distance off shore perfect for snorkeling.
                                            </p>
                                            <h6>BEACH CLUBS</h6>
                                            <p class="paragraph ng-attr-widget">
                                            	Playa del Carmen is famous for its stylish beach clubs. Offering a pampering alternative to 
												the public beaches, these clubs offer food and beverage services, a variety of spa treatments 
												and aquatic sports, plus access to restrooms, showers and pools. Usually fees apply for the use 
												of lounges and shade (umbrellas and palapas) or in some there is a minimum F&B consumption or 
												even Day Pass costs.
                                            </p>
                                        
                                        </div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
	                                            
	                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CORALINA</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Coralina Daylight Club is a private, exclusive and VIP beach club for adults over 18. With 
                                                                    		entertainment and music, beach and sea breeze this club is a little different than others in 
                                                                    		Playa Del Carmen. This is considered a “daylight club” which takes notes from places like Ibiza,
                                                                    		 Spain; where they started the party early and enjoy DJ’s and a club like atmosphere, only this 
                                                                    		 time when the sun is out. 
                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Coralina has upped the game and created a beach club that is less about being in the sand and 
                                                                    		more about being near the pool and drinking with friends while listening to electronica and 
                                                                    		dance music.
                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		There are private tent areas that you can rent for a more luxurious and private affair complete 
                                                                    		with champagne buckets.
                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		It is a place to be seen and see others. 
                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Ask your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> to help you place a reservation, which are highly recommended.
                                                                    	</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>MAMITAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	A treasure of Playa del Carmen, Mamitas Beach Club is the perfect blend of a glamorous setting, 
                                                                        	beautiful scenery and modern, chilled music. With an extensive stretch of sandy beaches, stylish 
                                                                        	canopy sunbeds and fantastic DJ mixes, Mamitas Beach Club gives another level to the beach lounge 
                                                                        	experience.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>INDIGO</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	At the heart of Playa del Carmen and the Caribbean Sea, Indigo Beach catches you with a different 
                                                                        	proposal, which converges delicate and casual atmosphere with its idyllic beach setting and the 
                                                                        	unique flavors; a conceptual menu based on a delicate fusion of Asian and Mexican cuisine, with 
                                                                        	special emphasis on seafood and the Italian touch of native Sicily.
                                                                        </p>
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	The evening goes off into the sunset, enlivened with tropical and "guapachoso" beats from our 
                                                                        	resident Djs in the comfort of our beach beds and lounges.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CANIBAL ROYAL</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	Come visit this new and unique club that offers stimulus for each of your 5 senses! Great tasting 
                                                                        	food and drinks, a different DJ every day, the best natural scenery that Playa del Carmen beach 
                                                                        	clubs have to offer! You will surely leave happy after an uniquely different day at this retro 
                                                                        	funky hot spot.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ZENZI</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	<p class="paragraph ng-attr-widget">
	                                                                        Zenzi Beach Club, Sports Bar and Restaurant has everything you could want for a great day or evening 
	                                                                        in Playa del Carmen. Bright Sunshine, the turquoise Caribbean Sea, gentle ocean breezes, International 
	                                                                        and Mexican Cuisine, live music, and a friendly relaxed atmosphere on one of the world's greatest beaches. 
	                                                                        And if that isn't enough, how about watching your favorite sporting event while enjoying the view.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>KOOL BEACH</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	<p class="paragraph ng-attr-widget">
	                                                                        Enjoy a worry free day at this full service beach club including a restaurant, 2 bars, lounge, pool, massages, 
	                                                                        sun deck, showers lockers and private restrooms! You will have all of your needs met and more at this hip & chic club!.
	                                                                    </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>REEF CLUB AT PLAYACAR</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
																			Just a couple of minutes driving from Villa Aqua you will find The Reef Playacar Club, a 
																			Resort that hosts the beach club for Playacar Community. You just need to present your VIP 
																			cards at the hotel's reception and then you can spend a nice day at the beach, which includes 
																			the usage of beach lounges, swimming pools, kids club, daily activities and more from 9am until 5pm.
							                                            </p>
							                                            
							                                            <p class="paragraph ng-attr-widget">Be aware that due to the fact that The Playacar Reef is 
							                                            actually an ALL INCLUSIVE Resort you cannot drink or eat a la carte so If you are willing to
							                                             take some drinks or eat something there is a Day pass for 50 usd per adult and 25usd per
							                                              children (which is a 50% discounted rate) for Playacar's VIP card holders.
							                                            </p>
							                                            <p class="paragraph ng-attr-widget">Some of the amenities and activities that the Day Pass may include from 9pm to 4pm are:</p>
							                                            <ul>
							                                            	<li>All meals, snacks, drinks </li>
							                                            	<li>2 Swimming pools</li>
							                                            	<li>1 Jacuzzi</li>
							                                            	<li>1 Kid's pool</li>
							                                            	<li>1 Kid´s Club (ages 4-12)</li>
							                                            	<li>Aerobics</li>
							                                            	<li>Aquaerobics</li>
							                                            	<li>Stretching</li>
							                                            	<li>Spanish lessons</li>
							                                            	<li>Dance lessons</li>
							                                            	<li>Water Basketball</li>
							                                            	<li>Beach Volleyball </li>
							                                            	<li>Waterpolo</li>
							                                            	<li>Board games</li>
							                                            	<li>Basic equipped Gym</li>
							                                            	<li>1 Tennis court (day use only)</li>
							                                            	<li>Reef Marina Dive Shop</li>
							                                            	<li>Sailboats</li>
							                                            	<li>Kayaking</li>
							                                            	<li>Scuba demo in pool</li>
							                                            	<li>Windsurfing</li>
							                                            	<li>Snorkeling gear</li>
							                                            	<li>Bicycles </li>
							                                            	<li>All tips and taxes</li>
							                                            </ul>
							                                            <p class="paragraph ng-attr-widget">
							                                            	<strong>Note: </strong>It may get very crowded in some seasons of the year, so we recommend other 
							                                            	beach clubs to receive a better service.
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <p class="paragraph ng-attr-widget">
                                                	Always heed beach warning flags, which alert visitors to undertows and jellyfish problems. It is important to know and respect the meaning of 
                                                	the colored flags that are on the beach and indicate the state of the tide:
                                                	<br />
                                                	<strong><span style="color: red;">Red</span>-<span style="color: black;">Black:</span></strong> danger <br>
													<strong><span style="color: orange;">Yellow:</span></strong> caution <br>
													<strong><span style="color: green;">Green</span> or <span style="color: blue;">Blue</span>:</strong> calm waters.<br>
                                                </p>
                                                <p class="paragraph ng-attr-widget"><strong>Never walk on the beach alone at night. </strong>
                                                	<br>
                                                	Years ago, topless sunbathing was a crime in Mexico, but the law is not enforced these days in Playa; however, women should be aware that 
                                                	provocative clothes or nudity might invite unwanted attention/comments in a country where nudism is not common.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_beaches.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                        
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey" style="margin-top: 75px;">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_beaches_2.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="water">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_in_water_06.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Rooms" />
                                            </div>
                                            
                                            <div class="vc_single_image-wrapper vc_box_border_grey" style="margin-top: 45px;">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_in_water_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Rooms" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!------------------- Bedroom 2 --------------------->
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">In the Water</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Hundreds of miles of spectacular beaches stretch along the coastline of the Riviera Maya. Backed by the crystal 
												clear turquoise waters of the Caribbean Sea, Mexico's Riviera Maya is an ideal destination for aquatic sports and 
												adventures both above and under the water.
                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												The Mexican Caribbean is catalogued world-class<strong> scuba diving and snorkeling destination</strong>. The world's second largest 
												coral reef system extends the length of the coastline and a stunning array of colorful corals; tropical fish and 
												marine life thrive just below the ocean's surface.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												You can also enjoy snorkeling and<strong> cave diving</strong> in the thousands of cenotes (underground sinkholes) that are scattered throughout 
												the region. Exploring this underground network of freshwater pools and rivers is one of the more unique things to do in Riviera Maya Mexico.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SNORKELING</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Snorkeling allows everyone, to explore the underwater world. This activity has become extremely popular 
                                                        		among tourists from all over the world. It is such safe aquatic sports that even kids can participate, 
                                                        		and makes it the perfect activity to enjoy with your family. Between the wonderful coral reef and 
                                                        		"cenotes" (sinkholes) in the region there is always an unexplored spot.
                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Snorkeling in Playa del Carmen is far better from a boat than off shore, so chartering a boat is recommended. 
                                                        		Trips out to some of the local reefs give snorkelers the chance to explore a variety of ocean life. 
                                                        		The reefs that can be explored when snorkeling in Playa are ideal for this activity because they have 
                                                        		a maximum depth of 15 feet, meaning that the best is near the surface.
                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>DIVING</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		The turquoise waters of the Caribbean Sea are great for scuba diving to experience underwater life on the Great 
                                                        		Mayan Reef. The coral formations extending along a large portion of the coast are an unforgettable sight, which 
                                                        		allows you to explore the largest coral reef in the Northern Hemisphere. The numerous subterranean rivers and 
                                                        		"cenotes", formed by water filtering through the limestone, provide another option for those who love diving. 
                                                        		Many locations within the jungle provide rental equipment as well as guides and instructors for cave diving.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		If you are interested on learning how to dive, we can organize some classes for you or even help you obtain 
                                                        		your certification. Just contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more information.
                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
	                                        
	                                        <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>YACHTING</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Enjoy a memorable day on the Caribbean waters sailing in a luxury yacht. The most recommended option for a 
                                                        		great day with family and friends. 
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Discover the extraordinary turquoise waters of the Riviera Maya Coast, all aboard a luxurious yacht, the perfect 
                                                        		place to have fun snorkeling, sun tanning, fishing or drinking margaritas with a luxurious lunch served in the 
                                                        		flybridge lounge area by your onboard chef.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Ask your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> about the different charter yacht tours that fit almost any budget, from "good-value-for-the-money" 
                                                        		tours that include excellent shrimp and fish ceviche or delicious cheeseburgers and an open bar, to "top-of-the-line" 
                                                        		VIP tours with your very own onboard chef, specialty menus, premium bar and bartender.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Note: Yacht trips depart from Puerto Aventuras. Transportation from Villa Aqua to the dock and back is not included but 
                                                        		can be arranged by your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a>.
                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>FISHING</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		The quality of deep-sea fishing in the Playa del Carmen area may come as a surprise to you. This area is perhaps more 
                                                        		famous for its fantastic diving and it's amazing Mayan ruins, but the truth is that fishing in the Riviera Maya is 
                                                        		an activity that draws thousands of visitors a year and ranked extremely high by serious anglers from all over 
                                                        		the world.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		After all, this is the Caribbean and many of the world's most wanted fish swim in the waters off the coast of Playa 
                                                        		del Carmen. Sailfish are particularly prevalent. Throughout the year there are frequent fishing tournaments held with 
                                                        		lovers of the sport.
                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SAILING & CATAMARAN TRIPS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Set sail on your own private catamaran charter. You can enjoy the morning breezes of the Mexican Caribbean or spend an 
                                                        		afternoon surrounded by your family and friends aboard. You can snorkel, swim, or just enjoy the tropical beauty of the 
                                                        		Riviera Maya. 
                                                        	</p>
                                                        	<p class="paragraph ng-attr-widget">
                                                        		If you like Sunsets, there's no better place to soak up the last rays of the tropical sun than a graceful catamaran as 
                                                        		you cruise up the Caribbean coastline.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		It is the perfect plan for<strong> family reunions, corporate events</strong>, and other occasions to remember such as<strong> weddings or 
                                                        		even memorial services.</strong>
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Tours leave from Puerto Aventuras or Cancun and generally last 4 hours.
                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>CENOTES</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		The natural wonders of this Region are innumerable and some of the most important and unusual are the Cenotes, 
                                                        		or sinkholes. It is estimated that there are more than 6000 in the Yucatan Peninsula, although only 2400 are
                                                        		 registered. The Mayans called them “dzonot”, which the conquering Spaniards translated as Cenote.
                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Cenotes are magical, enigmatic and unique in the world and were once the only resource for fresh, 
                                                        		sweet water in the local jungle. 
                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		They were the sacred places of the Mayas for that reason, but also because they represented the entrance to the 
                                                        		underworld. The stalactites and stalagmites that form inside are true natural works of art. In many, holes in the 
                                                        		ceiling allow the sunlight to filter, giving the scene a magical feeling. The Cenotes are a natural treasure that 
                                                        		should be seen by all, keeping in mind that they should be protected so that man does not destroy in a few days 
                                                        		what nature took millions of years to create. The many Cenotes that are in the Riviera Maya are a good choice for 
                                                        		swimming, snorkeling and, for the more experienced, even diving.
                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		<strong>Important:</strong> 
																Do not touch any of the funds and walls in the dive, and please do not use suntan lotion before the bath as they 
																can seriously pollute the pristine waters of the cenotes, destroying plant and animal species that are only found i
																n them.
                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		<strong>Recommendations:</strong>
																Bring: swimsuit, sandals or sneakers, towel, insect repellent (biodegradable), shirt and long pants if you are walking 
																through the jungle and snorkel if you don't want to rent it.
                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SWIM WITH DOLPHINS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		The Swimming with dolphins activity includes several activities such as jumping, hugging, kissing, markings, swirls, 
                                                        		foot push and free interaction. In addition, throughout the programs trainers outlined interesting information 
                                                        		about animal behavior, diet, health and care. Trainers should be always open to answer all questions about dolphin's 
                                                        		world.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		If you have done this before, maybe you would like to experience two types of Swimming with dolphins that are 
                                                        		entirely new and unique in the global market: one is called Dolphin Trek, a scuba diving with dolphins program 
                                                        		(no diving experience required and is totally safe), and the other, The One, which is a unique program where 
                                                        		you will live this experience only by yourself for an hour with a dolphin. And for the ones that are really 
                                                        		into the dolphin's world, maybe you would like to experience a day as a trainer!
                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SWIM WITH WHALE SHARKS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Swimming (snorkel only) with the ocean's largest fish the "whale shark" is one of the most exciting things 
                                                        		you'll do while in Riviera Maya and probably in your life! 
                                                        	</p> 
                                                        	 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		The annual migration of whale sharks, actually the largest such concentration in the world, begins in May as 
                                                        		the whale sharks return again for their summer feeding season here near the top tip of the Yucatan Peninsula. 
                                                        		They come every year to "eat" nature's buffet of algae, plankton, krill, fish eggs, & tiny brine shrimp. 
                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		While feeding on this bountiful buffet the whale sharks swim along the surface of the sea with "mouths wide open" 
                                                        		(mouths big enough to swallow a grown man in one gulp but...they're harmless "vegetarians" who are no threat to man, 
                                                        		woman or child). Kids from 4 yrs & up can swim; it is perfectly safe for the whole family! 
                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		If you stay in Villa Aqua between the months of May and September don't miss the opportunity to do this activity 
                                                        		which we are sure will be the "highlight of your vacation".
                                                        	</p> 
                                                        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>DIVE WITH BULL SHARKS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Dare to dive with these mysterious rulers of the sea! From November to February every year the Bull Sharks 
                                                        		come to Playa to feed and to breed. They are thought by many to be one of the most dangerous sharks. 
                                                        		See the other side to these magnificent fish, showing just how little there is to be feared and giving 
                                                        		you one of the most incredible experiences possible, up close and personal with the Bull Sharks.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		They are naturally curious animals and will pass within 2-3 feet sometimes in order to get a good look 
                                                        		at the divers. In order to participate in this experience, you need to be a certified diver with experience 
                                                        		and good buoyancy control and air consumption.
                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>KITEBOARDING</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Kiteboarding, or kitesurfing, is just about the coolest sport on the planet! This exhilarating sport 
                                                        		combines aspects of surfing, wakeboarding, paragliding, and more. Imagine being able to pull off all 
                                                        		your favorite wakeboard moves without the assistance of a boat. Ride wherever you want with only the 
                                                        		tranquil sound of the wind in your ears. Jump 30-feet off flat water without a ramp, surf more waves 
                                                        		in one day than you ever thought possible. Your age, weight, or past experiences are no-excuses. As 
                                                        		long as have the desire to learn, and are willing to follow recommendations then you'll be able to 
                                                        		learn Kite boarding and enjoy it!!!
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Normally the best period is from mid of November until the end of May but even summertime 
                                                        		(June/July/August) can give some very good windy kiteboarding days.
                                                        	</p>
                                                        	 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <br>
	                                    <p class="paragraph ng-attr-widget">Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more information, reservations, pricing and rates.</p> 
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="golf">
<!---------------- Bedroom 3 ------------------->                        
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Golf</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                            	If you love golf, we invite you to try the Mayan Trail.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                            	Experience the magnificent natural scenery located in tropical forests and bordering the 
                                            	Caribbean Sea, with beautiful lagoons, natural wells and mangrove swamps, all of them 
                                            	with their characteristic turquoise blue water color.
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	The existing courses extend from the Riviera Maya towards Cancun, including a Golf Course 
                                            	on the island of Cozumel, all of them designed by recognized architects like Jack Nicklaus, 
                                            	Greg Norman, Robert Trent Jones Jr., P.B. Dye, Tom Fazio, Tom Weiskopf and Robert Von Hagge, 
                                            	who have obtained the attention and respect of players of all levels and abilities.
                                            </p>
                                            
                                        </div>
                                        
                                        <br>
	                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>HARD ROCK GOLF CLUB RIVIERA MAYA (PLAYACAR GOLF CLUB)</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		The Golf Club at Playacar is a 7202 yards, par 72, championship golf course, designed and built by Robert Von Hagge. 
	                                                        		With a slope rating of 148 from the championship tees, 136 from the white tees, and 134 from the red tees, it is 
	                                                        		as challenging to play as it is beautiful to view. The Club has an innovative all-inclusive system where you will
	                                                        		 be treated with excellent service from your arrival to the Clubhouse until you leave the course. 
	                                                        		 Snack and beverage carts circulate the course for your convenience. 
	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		The Club provides a first class practice area, complete with a spectacular driving range, and a large putting 
	                                                        		green including chipping, pitching, and greenside bunker areas.
	                                                        	</p>
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Villa Aqua is located right between the 13th and 14th greens and just a couple of minutes driving distance 
	                                                        		from the Club House (transportation is included with your green fee). 
	                                                        	</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>EL CAMALEON - MAYAKOBA</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		A Greg Norman design, El Camaleón Golf Club boasts a spectacular layout winding about the tropical jungle 
	                                                        		and the mangrove before boldly stretching to the sea. Well reputed among golf's finest players, El Camaleón 
	                                                        		was the PGA TOUR site for the Mayakoba Classic, the only official PGA TOUR event held outside the U.S.A. or 
	                                                        		Canada. Here, golf enthusiasts of all skill levels can experience the essence of a pristine and natural 
	                                                        		landscape, recognized by the Audubon Society. 
	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Like the chameleon from which it takes its name, the course offers up ever-changing challenges and alluring 
	                                                        		vistas: fairways lined with sand dunes and mangroves, distinctive hazards such as cenotes (subterranean caves), 
	                                                        		crystal-clear lagoons, and greens perched on the edge of the Caribbean Sea. At 7,024 yards, PAR 72 and open daily 
	                                                        		from 6:30 a.m. to 6:00 p.m., El Camaleón offers a day filled with exhilarating play.
	                                                        	</p> 
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>GRAND CORAL GOLF RIVIERA MAYA</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Grand Coral Golf Club is a Nick Price's golfer-friendly creation where everyone will enjoy playing this 
	                                                        		18 hole; par 71 Course that is 7,043 yards long. It offers a modern Clubhouse and exclusive Beach Club. 
	                                                        		The Green fee includes: Round trip transportation, golf cart, 2 bottles of water, golf tees, divot 
	                                                        		repair tool, fresh towels, dressing room with lockers and safe deposit box.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>IBEROSTAR PLAYA PARAISO GOLF CLUB</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		In the proud tradition of the world-renowned Dye family golf courses, architect P.B. Dye's latest masterpiece: 
	                                                        		The Iberostar Playa Paraiso Golf Club, is truly unique.
	                                                        	</p> 
	                                                        	 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		On a landscape that is relatively flat, rises a golf course like no other in the Mexican Caribbean. 
	                                                        		Carved out of the ancient Mayan jungle, the Iberostar Playa Paraiso Golf Club has many of the traits 
	                                                        		of a typical Dye Design: narrow fairways, deep bunkers, extreme vertical movement and untraditional 
	                                                        		hazards such as a rock riverbed are facts that make the course distinctively different from others in the area.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>PUERTO AVENTURAS GOLF CLUB</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		The golf course of Puerto Aventuras is an exciting and challenging activity. A beautiful 36-hole course designed 
	                                                        		in 1991 by Thomas Leman and is still one of the best-kept secrets in this area. A smooth carpet of Bermuda grass, 
	                                                        		surrounded by palm trees, bougainvillea, tropical trees and lush foliage, covers all the Greens. In their daily 
	                                                        		rounds you may encounter iguanas, deer, various tropical birds and other wildlife. 
	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		The Golf course opens every day year round from 7:30 AM until dark. Golf Carts are not mandatory and no reservations 
	                                                        		are necessary.
	                                                        	</p>
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>MOON SPA & GOLF CLUB</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		It is perhaps here; in the executive golf course at El Manglar Vidanta Golf Riviera Maya that Jack Nicklaus 
	                                                        		developed the world's foremost golf course, in which his design firm achieves to project the creative, 
	                                                        		revolutionary, and cutting edge stamp that distinguished it. With 18 Holes – Par 54 in an area of 2,923 yards 
	                                                        		long filled with radiant white sand traps, dark tones of natural stone lining pristine lakes, deep lush hue of 
	                                                        		the greens, and waste bunkers, this course is a garden of delights for golf lovers.
	                                                        	</p> 
	                                                        	 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		The insignia of the course, the 17th —named Donna-Green—, boasts three bunkers on each side of the green and one 
	                                                        		more at its center, making it a one of a kind, so it is notoriously difficult to get out of it with a par.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
												
	                                        </div>
	                                    </div>
	                                    <br>
	                                    <p class="paragraph ng-attr-widget">Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for reservations, tee times and rates.</p> 
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_golf.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="parks">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_parks_adventure.jpg" class="vc_single_image-img attachment-full" alt="Pool and Outdoor" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

<!------------- Bedroom 4 ------------------->
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Parks & Adventure</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Quintana Roo is one of Mexico's wildest and most singular States within Mexico. It is the gateway 
												to amazing animal diversity, exuberant flowers and trees, and traces of the Mayan magnificent civilization. 
												Don’t miss the chance to explore many of these things, which you can find in the parks in the area.
                                            </p>
                                        </div>
                                        
                                        <br>
	                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        	<div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>ATV'S</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Ride an ATV through jungle paths, swim in a clear 60-foot deep Cenote, explore caves, 
	                                                        		climb ancient Mayan ruins on this 2-hour tour, just a few minutes drive from Villa Aqua.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>XCARET</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Xcaret, the largest and most impressive theme park in the Riviera Maya, offers a wide variety of 
	                                                        		activities and diversions in a spectacular natural setting. Here you can snorkel in an underground river, 
	                                                        		learn about marine life in a living aquarium, walk through a butterfly pavilion, see jaguars and pumas, 
	                                                        		swim with dolphins and manatees, and learn about sea turtles. If you are interested on Mexican culture, 
	                                                        		this is the place to find folk art expression  (art craft, shows, food, music and more…).
	                                                        	</p> 
	                                                        	 
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>XPLOR</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Xplor is a unique underground paradise, with 7 amazing circuits that invite you to rediscover your 
	                                                        		emotions and senses within nature.
	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Dare to ride the 13 zip lines among the Caribbean's lively nature and enjoy refreshing water landings 
	                                                        		and amazing suspension bridges; take a trip through the jungle on unstoppable amphibious vehicles, 
	                                                        		explore an underground paradise where you can swim surrounded by amazing stalactites and stalagmites, 
	                                                        		discover a matchless raft route across stunning subterranean caverns while paddling with your own hands, 
	                                                        		and to complete your feat, a nutritious and light buffet, that will recharge your energy.
	                                                        	</p> 
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>XEL-HA</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Xel-Ha is a natural aquarium park, where fresh water from underground rivers meets the saltwater 
	                                                        		of the ocean, forming a particularly diverse environment for snorkeling. Admire the impressive 
	                                                        		variety of brightly colored tropical fish, or enjoy tubing, biking or walking around the park. 
	                                                        		It's a wonderland of Cenotes, mangroves and lagoons where nature lovers will find plenty to do.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>XOXIMILCO</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		This magical place with an ambiance of fiesta, music and tradition captures the imagination of everyone 
	                                                        		who visits by conjuring up memories of Mexico in its golden age. Decorated with motifs from the 32 States 
	                                                        		of Mexico, the famous trajineras, that were once used for transporting flowers, fruits and vegetables grown 
	                                                        		in floating gardens, have become a means of transportation and a cause of joy for all those who come to 
	                                                        		Xoximilco searching for a unique moment they can only experience here, in a modern version of the legendary 
	                                                        		cruise through the canals, with the colors and the charm of those magical moments we hold dear. 
	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Park entrance includes: nighttime cruise on board a trajinera, dinner, open bar with tequila, beer, fruit 
	                                                        		flavored beverages and sodas, different ensembles playing traditional live music such as: mariachi, bolero trio, 
	                                                        		jarocho quartet and marimba. Approximate duration: 3 hours
	                                                        	</p> 
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>RIO SECRETO</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Río Secreto could very well be one of the great wonders of the world. Experience this stunning underground 
	                                                        		river with thousands of dramatic stalactites and stalagmites. It's like stepping back in time to witness 
	                                                        		something mysterious and truly spectacular.
	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		This system of caves, formed over centuries by an underground river, is located only a few miles from 
	                                                        		Villa Aqua. It is by far the longest partially flooded cave in the Yucatan Peninsula, but what makes 
	                                                        		Río Secreto even more special is the fact that it has more than 12 kilometers (7.5 miles) of semi-sunken 
	                                                        		cave mapped out with 15 natural outlets located in different areas. There's nothing else like it! 
	                                                        	</p>
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Keep in mind, this exotic and fragile geological formation requires an incredible amount of 
	                                                        		eco-awareness and sensitivity. The size of tour groups is limited to minimize impact on the cave. 
	                                                        		This will ensure that many generations get to see our planet's natural history carved in mineral 
	                                                        		substances.
	                                                        	</p>
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		A journey through Río Secreto is surreal, mystical and memorable. Whether you're an adventurer, 
	                                                        		world traveler, or simply a curious soul, you should experience one of the most intriguing natural 
	                                                        		attractions in the Riviera Maya. 
	                                                        		<br>
																	It is a great option for a rainy day!
	                                                        	</p>
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>THE JUNGLE MAYAN EXPEDITION (ALLTOURNATIVE)</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Live a great experience rappelling into a beautiful cenote and fly over the jungle's foliage on exciting 
	                                                        		zip-lines and participate in a traditional Mayan purification ceremony.
	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		A complete Mayan-adventure experience that you should not miss!
	                                                        	</p>  
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SIAN KA'AN BIOSPHERE RESERVE</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		At Sian Ka'an you can kayak through narrow canals between mangroves, climb an ancient pyramid, 
	                                                        		float in a crystal clear cenote, or try your hand at saltwater fly fishing, visit Muyil lagoon 
	                                                        		and its ruins, savor the sunrise here and you'll understand why the ancient Maya named this 
	                                                        		place Sian Ka'an, which in their language means, "where the sky is born." —all within a lush 
	                                                        		protected environment south of Playa del Carmen and Tulum.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SKY DIVE</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Jumping out of a plane with the Caribbean below will certainly be an electric and 
	                                                        		vivid memory that you will cherish forever.
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>TEMAZCAL</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		More of a cultural experience than a spa treatment, the Temazcal ceremony purifies your mind, body, 
	                                                        		and spirit. Dating back to pre-Hispanic times, the Temazcal is believed to have been used widely among the ancient Aztec and Mayan cultures in Mexico. The name Temazcal translates to "house of steam".
	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/out-and-about-dining-culture-shopping/" title="" target="_self">VIEW MORE ACTIVITIES</a>
			</div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getOutHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/out-and-about/Villa_Aqua_Out_&_about_HEADER.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Out and About</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getCultureHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getCultureContent()
	{
		ob_start();
		echo self::getCultureHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
<!------------------- Master Bedroom  -------------------->                            
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Culture & Archeology</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												The archaeological sites of Quintana Roo enclosed within its walls stories of the past, 
												transporting us back in time to imagine what daily life of the Maya used to be.
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	There are hundreds of Mayan settlements and ruins within the area, but these are the most 
                                            	important and worth to visit:
                                            </p>
                                        </div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
	                                            
	                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CHICHEN-ITZA</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
																			Easily the best known and well restored of all Mayan archaeological sites, Chichen Itza 
																			is a<strong> UNESCO World Heritage</strong> Site and was named one of the<strong> "New Seven Wonders of the World." </strong>
																			The ruins at Chichen Itza cover an area of 6.5 sq km (2.5 sq miles) and can be toured in a day.
							                                            </p>
							                                            
							                                            <p class="paragraph ng-attr-widget">
							                                            	You can visit these marvelous ruins on a day trip or tour. It takes a 3-4hr drive from Villa Aqua. 
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>TULUM</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Tulum holds the honor of being the most picturesque archaeological site in the Riviera Maya and 
                                                                    		the only one to have been built overlooking the ocean. A visit here offers spectacular views 
                                                                    		of the Caribbean Sea and surrounding coastal region. 
                                                                    	</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>COBA</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	Visitors who brave the steep climb up the highest pyramid in Mexico's Mayan world reap the reward 
                                                                        	of a breathtaking view. At more than 130 feet in height, Nohuch Mul, which means "large mound" in 
                                                                        	the Mayan language, is the tallest pyramid at Coba archaeological site and in the Yucatán Peninsula. 
                                                                        	Coba, an easy 45min. drive from Playa del Carmen, is well worth a visit.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>EK-BALAM</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	Witness the incredible decoration of temples and plazas, admire the unique sculptures in high relief 
                                                                        	that have surprised archaeologists, imagine the rituals that took place in the ball game (Pok Ta Pok) 
                                                                        	and walk through the false arch, one of the architectural icons of the Maya culture.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>XCARET MEXICO ESPECTACULAR (NIGHT SHOW)</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	More than 300 artists on stage will amaze you with a vibrant journey through the history of Mexico and Mayan 
                                                                        	culture bringing to life colorful Mexico traditions in the Gran Tlachco Theater at Xcaret eco theme park.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_archeology.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="dining">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_dining_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Rooms" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Dining</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Dining in Villa Aqua is a wonderful choice but if you prefer to enjoy something different and the exciting vibe of Playa 
												then you have a wide array of choices, from small local joints serving traditional regional food to fine dine restaurants 
												run by world-renown chefs.
                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												As Playa del Carmen has grown from tranquil village to world famous beach town, so have the number, diversity and quality 
												of its restaurants. Playa is now a city of the world as far as cuisine is concerned. The major international influence is 
												apparent in Playa's restaurants. You won't run the risk of being bored of the food when in town. You can go Mexican, 
												Mayan (Yucatecan), Italian, Thai, German, Japanese, Cuban, Chinese, Argentinean, Swedish, Spanish, Indian, Seafood, 
												Steaks and much more!
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Contact your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for a list of our favorite restaurants and for reservations.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block" id="shopping">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Shopping</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                            	In Playa del Carmen you'll come across everything from modern shopping malls to 
                                            	traditional and colorful markets, where you can buy all kind of souvenirs. La 
                                            	Quinta or 5th avenue is one of the most famous attractions; lined with shops, 
                                            	bars, restaurants, cafes, gellato shops, convenience stores, pharmacies and more.... 
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                            	This main strip is a pedestrian walkway that runs for about 5 kilometers (3 miles) 
                                            	through Playa del Carmen town and is continually expanding and getting longer. It 
                                            	is located 1 block west of the beach and just few minutes walking distance from Villa Aqua.
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	Shops here range from the name-brand Lacoste, and Hurley to flea market type stalls and 
                                            	now there are 3 small shopping malls:
                                            </p>
                                            <br>
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                             <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong style="text-transform: uppercase;">Paseo del Carmen</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<p>
					                                                				Paseo del Carmen minutes away from Villa Aqua, at the far south end past the ferry 
									                                            	dock and which includes shops such as Zara, Womens Secrets, Pull&Bear, Corte Fiel, 
									                                            	Ultrafemme and the official Harley Davidson store.
					                                                	
                                                             </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong style="text-transform: uppercase;">Quinta Alegria</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<p>
					                                                				Quinta Alegria, was the talk of the town when it opened in 2014 and it that includes a 
                                            										Forever 21, Victoria's Secret, L’Occitane, The Body Shop, American Eagle, BCBG and more. 
					                                                </p>
                                                             
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong style="text-transform: uppercase;">Calle Corazon</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<p>
					                                                				Calle Corazon, located in the Hot Spot of Playa del Carmen (right on 5th Avenue and 12th 
									                                            	St) this brand new shopping center is considered a Lifestyle retail that includes International 
									                                            	Fashion brands such as: H&M, Steve Madden, Vince Camuto, Sunglass Hut, Gran Vía, Hollister, 
									                                            	Bath & Body Works, Victoria's Secret, Swarovski, Sephora, Michael Kors, Puma, Onda de Mar 
									                                            	and many more.
					                                             </p>
                                                             
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                            <br>
                                            <p class="paragraph ng-attr-widget">
                                            	But if you are looking for something more traditional, there are flea market type stalls and 
                                            	stores selling handicrafts and knick-knacks the whole way along. Shops have also expanded into 
                                            	the surrounding areas, so you can also wonder to 1st Avenue and 10th Avenue to find many more options. 
                                            </p>
                                            
                                        </div>
                                        
                                        <br>
                                        <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                             <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>SOME IDEAS OF THE THINGS YOU CAN BUY AS SOUVENIR</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Tequila, the national Mexican drink is distilled from the agave plant. Beware: all tequilas are not created equal! Always Look for the 100% Agave" label.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Xtabentun (pronounced shta-ben-TUNE) makes a beautiful gift. The subtle, honey-based, anise-flavored liqueur made locally in the Yucatan, comes packaged in elegant glass bottles.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Silverwork is inexpensive and abundant in Playa. Look for the silver content indicated by the stamp,.925, which means that the metal is 92.5% pure.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Huipiles (cool, cotton dresses with colorful designs embroidered around the neck and hem).
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Guayaberas (short or long-sleeved shirts in white or pastels, usually made of cotton and linen).
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Hammocks made of natural or synthetic fiber.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Braided Palm Baskets
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Sarapes (multi-colored woven shawls)
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Sombreros (very wide-brimmed traditional hats)
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Nacimientos (terra-cotta nativity figurines)
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Painted Pottery
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Hand-Painted Ceramic Tiles
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Leather (stamped and plain)
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Perfumes in one of the Tax Free shops
					                                                			</li>
					                                                		</ul>
					                                                	</div>
				                                                	</div>
                                                             
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <div class="wpb_wrapper">
	                                        <p class="paragraph ng-attr-widget">
                                            	And if you are a serious shopper, and Playa del Carmen options are not your style, you may want 
                                            	to consider a<strong> day trip to Cancun, considered an Ultra Trendy shopper’s Paradise</strong> where you can 
                                            	find the latest designs in jewelry, gifts, accessories and fashion from brands such as 
                                            	Louis Vuitton, Bvlgari, Carolina Herrera, Cartier and more.
                                         	</p>
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_shopping.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                            <div class="vc_single_image-wrapper vc_box_border_grey top-margin">
                                            	<img width="1140" height="676" src="/images/out-and-about/Villa_Aqua_Out_&_about_shopping_04.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Living Spaces" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/out-and-about/" title="" target="_self">VIEW MORE ACTIVITIES</a>
			</div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getCultureHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/out-and-about/Villa_Aqua_Out_&_about_HEADER.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Out and About</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getContactHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
	    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.13.2'></script>
	    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	    <link rel="stylesheet" href="/css/estiloaqua.css">
	    <style>
		#arrival, #departure {
			background-image: url(../images/calicon.png);
    		background-position: 7px 7px;
    		background-repeat: no-repeat;
    		padding-left: 40px;
		}
		</style>
		<script>
		(function ($) {
		    
		    
		    	
		});

		</script>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getContactContent()
	{
		ob_start();
		echo self::getContactHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-323" class="post-323 page type-page status-publish hentry">
                        
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1441198852246">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center">
                                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
                                        <h2 style="color:#525252;font-weight: 300;">Contact Us</h2>
                                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
                                    </div>
                                    <div class="ult-spacer spacer-563bc65e386dc" data-id="563bc65e386dc" data-height="60" data-height-mobile="60" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
									<h5 style="color: #22BCB8; text-align: center;" >Thank you for your interest in reserving Villa Aqua!</h5>
                                    </div>
                                    <div class="ult-spacer spacer-563bc65e386dc" data-id="563bc65e386dc" data-height="60" data-height-mobile="60" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>

                                    <div class="ult-spacer spacer-563bc65e38c9e" data-id="563bc65e38c9e" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="30" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                                    <div role="form" class="wpcf7" id="wpcf7-f338-p323-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="/contact-us/#" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="338" />
                                                <input type="hidden" name="_wpcf7_version" value="4.2.2" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f338-p323-o1" />
                                                <input type="hidden" name="_wpnonce" value="b6526e6dad" />
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="City/Country" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap website"><input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Company" /></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Mobile" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <span class="wpcf7-form-control-wrap website"><input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="E-Mail *" /></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Arrival *" id="arrival" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Departure *" id="departure" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <span class="wpcf7-form-control-wrap website"><input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="No. of Adults *" /></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                    <span class="wpcf7-form-control-wrap website"><input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="No. of Children *" /></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Purpose of my trip"></textarea></span>
                                                    <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="I need more info about"></textarea></span>
                                                    <div class="wpcf7-submit_wrap">
                                                        <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ult-spacer spacer-563bc65e36d74" data-id="563bc65e36d74" data-height="52" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="10" data-height-mobile-landscape="10" style="clear:both;display:block;"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div id='wrap_map_563bc65e35a5c' class='ultimate-map-wrapper ' style='height:500px;'>
                                        <div id='map_563bc65e35a5c' data-map_override='ex-full' class='ultimate_google_map wpb_content_element page_margin_top_section' style='width:100%;height:500px;'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getContactHeader()
	{
		ob_start();
	    ?>
	    	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getCorporateHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getCorporateContent()
	{
		ob_start();
		echo self::getCorporateHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <!-- <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Pool</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                     -->
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													Looking to improve communication in your company? Promoting more creative 
													and expansive thinking? Reducing the distractions of day-to-day business 
													issues? Celebrating your year's success? Or just incentivizing your team 
													with a great change of scenery for your next achievement goal setting?
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													<strong>A retreat is the chance to see things from a different perspective.</strong> A 
													well-designed and run incentive program is one of the most effective ways 
													to reward great performers. After a few days of "business" in Villa Aqua, 
													we guarantee that your team will return home re-energized and focused, ready 
													to take on the future with your Company!
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													We can assist you in finding the perfect activities or excursions for your team, 
													whether it is to boost company morale or just take a load off after a very 
													stressful (poolside) workday. Who knows? Perhaps, zip lining through the jungle 
													is the key to success! Or going beyond their limits diving with Bull Sharks? 
													You can give them an experience of a lifetime by swimming with Whale Sharks or 
													reach their deepest fibers with a Mayan Ceremony inside a Temazcal.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													<strong>Whatever you think your team needs, we can help you out!</strong> What could be better 
													than to successfully hold your corporate event at an exceptionally unique location 
													in the Mexican Caribbean?
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													We welcome special guests and their groups: Trainers, Yoga Teachers, Artists, Speakers, Chefs, etc. 
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Contact us to plan your Corporate Event.
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            
                                            <p><i>*extra fees apply</i></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper ult-carousel">
                                	<?php 
                                        	if ($this->data[0]['corporate'])
                                        	{
                                        		foreach($this->data[0]['corporate'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?> 			
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
						<div class="vc_btn3-container vc_btn3-center ">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VIEW ALL</a>
						</div>
					</div>
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getCorporateHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/events/Header_corporate_retreats.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">CORPORATE RETREATS</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getFamilyHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getFamilyContent()
	{
		ob_start();
		echo self::getFamilyHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													If you are searching for the<strong> Perfect Family Vacation</strong> spot then Villa 
													Aqua is the answer you have been looking for.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Offering spaciousness to gather all the family together but allowing 
													everyone to have their private space too, you can accommodate up to 12 guests 
													(including children 12 and younger) and let your Villa Host plan wonderful activities
													 that will capture the whole family…maybe a simple bocce ball tournament or an 
													 amazing excursion that will fascinate the entire family.
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>*extra fees apply</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/events/Villa_Aqua_events_family_reunion.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
						<div class="vc_btn3-container vc_btn3-center ">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VIEW ALL</a>
						</div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getFamilyHeader()
	{
		ob_start();
	    ?>
	     <div class="page-header" style="background-image:url(/images/events/Header_friends_family_reunion.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">FAMILY & FRIENDS REUNION</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getPhotoHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getPhotoContent()
	{
		ob_start();
		echo self::getPhotoHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <!-- <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Pool</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                     -->
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													Villa Aqua is available to rent for films and photoshoots.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													With countless days of sun,<strong> contemporary interiors and full privacy</strong>, 
													your production is a guarantee success.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Whether you have a photo shoot combined with a film shoot or not, exterior and 
													interior locations are there with its many possibilities. <strong>Great spots and fantastic 
													natural light</strong> are a plus to the result you are looking for.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Villa Aqua <strong>offers bilingual assistance and contacts of crew for your production.</strong> 
													People who have worked for many years in Riviera Maya production projects from professional
													 photographers, make-up stylists, costume designers to catering services, transportation 
													 arrangements and everything you need to do your job easier.
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>*extra fees apply</i></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper ult-carousel">
                                <?php 
                                        	if ($this->data[0]['photoshoots'])
                                        	{
                                        		foreach($this->data[0]['photoshoots'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>            
                                            
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
						<div class="vc_btn3-container vc_btn3-center ">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VIEW ALL</a>
						</div>
					</div>
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getPhotoHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/events/Villa_Aqua_events_photo_shooot_HEADER.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Photo Shoots</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getPrivateHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getPrivateContent()
	{
		ob_start();
		echo self::getPrivateHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													Whether it is to celebrate your<strong> anniversary, a birthday, a personal achievement, 
													to surprise a client or, just to gather special friends</strong> and enjoy an amazing vacation,
													we can help you customize your private event and make lifetime memories for everyone.
	                                            </p>
	                                            
	                                            <h6 style="color: #22BCB8;">
	                                            	<a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">VILLA AQUA EPIC EXPERIENCES*</a> 
	                                            </h6>
	                                            <p class="paragraph ng-attr-widget">
													From simple kid's birthday celebrations with the classical "Piñata" to
													 exotic Mayan Rituals, we can organize many <strong>epic experiences that will 
													 remain on your guest's memories for a lifetime!</strong> 
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													<strong>Have fun and learn about the most famous Mexican beverage in our “Tequila 
													Tasting Experience” or discover Mexico through its gastronomy</strong>, which is World 
													Heritage, though our tasting menu including famous dishes from each region of 
													the Country<strong> with the sound of Mariachi</strong>. And if you are more adventurous,<strong> do not 
													miss Villa Aqua Molecular Dinner! A 19 course menu prepared by our chef Bernardo
													 Bautista.</strong>
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Ask your <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> for more information or contact us to share your ideas 
													and we'll do our best to make your wishes come true!
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>*extra fees apply</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<?php 
                                        	if ($this->data[0]['private-events'])
                                        	{
                                        		foreach($this->data[0]['private-events'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
						<div class="vc_btn3-container vc_btn3-center ">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VIEW ALL</a>
						</div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getPrivateHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/events/Header_Private_events.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Private Events</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getWeddingsHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getWeddingsContent()
	{
		ob_start();
		echo self::getWeddingsHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													Who hasn't dreamed on a beach wedding?
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													 It is almost sure you are picturing the soft white sand, cool ocean breeze and gorgeous 
													 sunset in the distance. But do your dreams include crowds of nosy onlookers? Or gusts of 
													 wind ruining your wedding hair and veil?
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Oceanfront affairs come with their own special set of considerations, so we have the perfect 
													answer for your Dream Caribbean Wedding!
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Even though Villa Aqua is not a<strong> beachfront property, we can arrange that you have a romantic 
													short ceremony in one of the most beautiful beaches in the world</strong>, but to avoid any of the 
													inconveniences of hosting a wedding reception in the sand we provide the most spectacular 
													set for your dreamed wedding: Villa Aqua premises!
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													So relax and enjoy your family and friends gathered together to share this special time 
													with you and let us take care of everything while you exchange vows on a private and exclusive 
													celebration with lots of style. Our<strong> Villa Host will assist you with anything you may need in 
													order to make of your event a complete success!</strong> From help you plan pre-wedding arrangements 
													such as your<strong> guests lodging, transportation and special amenities during their stay, to dinner 
													rehearsals, spa-wellness treatments</strong> and, of course, all the special details for your wedding 
													day such as<strong> catering, music, live performers, flowers, decoration, ceremony, paperwork, 
													professional photography & video, wedding cake, beauty salon services and even special rituals.</strong> 
													Anything you need to make sure your destination wedding in Paradise will be an absolutely unforgettable one.
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <p><i>*extra fees apply</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                
                                <div class="wpb_wrapper ult-carousel">
                                     <?php 
                                        	if ($this->data[0]['weddings'])
                                        	{
                                        		foreach($this->data[0]['weddings'] as $picture)
                                        		{
                                        			?>
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="<?php echo $picture['section_name']; ?>" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        			<?php
                                        		}
                                        	}
                                        	?>       
                            	</div>
                            </div>
                        </div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
					<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
						<div class="vc_btn3-container vc_btn3-center ">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VIEW ALL</a>
						</div>
					</div>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getEventsHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getEventsContent()
	{
		ob_start();
		echo self::getEventsHeader();
		?>
		<div class="container rental-services-container">
			
			<div class="entry-holder">
				<div class="entry-content">
					<p>Create a lasting impression by hosting group gatherings, small meetings or special events at Villa Aqua, a Contemporary Ambience with the most intimate space and comfort.
					<br>
					The Villa's elegant, modern areas and beautiful outdoor spaces are ideal venues for weddings, uncommon private affairs, receptions, parties, press events, photo shoots, sales presentations, outdoor cocktails, receptions and events for up to 80, featuring casual minimalist atmosphere around the vintage curved pool.
					<br>
					Villa Aqua is a state-of-the-art facility. Excellent location and impeccable service set the stage for the success of any group meeting or singular event.
					</p>
				</div>
			</div>
			
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="wpb_wrapper">
				<div class="vc_custom_heading">
					<h6 style="color: #22BCB8">SPACES</h6>
				</div>
			</div>
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="entry-holder">
				<div class="entry-content">
					<p>Our event indoor and outdoor spaces fitted with full modern facilities are designed for small intimate groups or larger formal events for up to 80 guests 
						<br>
						Impressive façade to welcome your guests
						<br>
						Vast lawn area with surrounding lush vegetation and golf course background.
						<br>
						Poolside Terrace ideal for a cocktail or as a dancing floor
						<br>
						Large indoor space with floor to ceiling window walls with beautiful views of the garden, perfect to use as Plan B (in case of bad weather) or as part of your even
						<br>
						Subtle and elegant ambient lighting.
					</p>
				</div>
			</div>
			
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="wpb_wrapper">
				<div class="vc_custom_heading">
					<h6 style="color: #22BCB8">SERVICES</h6>
				</div>
			</div>
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="entry-holder">
				<div class="entry-content">
					<p>As one of the best event venues in the Riviera Maya, Villa Aqua has a great relation 
					with the best event planners and has a vast list of trusted providers that work together 
					with our <a href="mailto:villahost@villaaqua.com?Subject=Contact%20from%20Villa%20Aqua" target="_top">Villa Host</a> to make of your event a complete success!
					<br>
					Check out: 
					</p>
					 <a href="http://www.corazon-mm.com" target="_blank" style="color: #22BCB8">CORAZON by Pasteleteria</a>   and <a href="http://www.gourmetevents.com.mx/the-events/" style="color: #22BCB8" target="_blank"> GOURMET EVENTS </a>
				</div>
			</div>
			
            <div class="container-inner">
                <div class="content">
                    <div class="rental-services-grid">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/events-weddings/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/events/Villa_Aqua_events_weddings.jpg" class="attachment-full wp-post-image" alt="Exellent-view" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Weddings</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/events-corporate-retreats/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/events/Villa_Aqua_events_corporate_retreats.jpg" class="attachment-full wp-post-image" alt="Berth" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Corporate Retreats</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/events-family-friends-reunion/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/events/Villa_Aqua_events_family_reunion.jpg" class="attachment-full wp-post-image" alt="Big-Yacht" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Family &amp; Frieds reunion</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/events-private-events/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/events/Villa_Aqua_private_events.jpg" class="attachment-full wp-post-image" alt="Villas-near-the-beach" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Private Events</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/events-photo-shoots/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/events/Villa_Aqua_photo_shooting_01.jpg" class="attachment-full wp-post-image" alt="Over-the-Sea" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Photo Shoots</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getEventsHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/events/Villa_Aqua_events_HEADER_general.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Events</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getWeddingsHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/events/Villa_Aqua_events_weddings_HEADER.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">WEDDINGS</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getFaqHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getFaqContent()
	{
		ob_start();
		echo self::getFaqHeader();
		?>
		<div class="container default-page-container">
            <div class="container-inner">
                <div class="content">
                    <article id="post-434" class="post-434 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row" data-rtl="false" data-row-effect-mobile-disable="true" style="position: relative;">
                            <div class="upb_row_bg" data-bg-override="0" style="min-width: 1140px; left: 0px; width: 1140px; background: rgb(255, 255, 255);"></div>
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">ABOUT THE EXPERIENCE</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header" style="text-transform:uppercase"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>What is a private luxury villa rental?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
															<p class="paragraph ng-attr-widget">
																It is your home away from home. It means exclusive! Villa Aqua is the ultimate of all Mexican Caribbean vacation rental options and experiences.
																<br>
							                                   	This means only you and your guests reside together at a stunning property benefiting from full access to all the features, amenities and services Villa Aqua has to offer. 
							                                	<br>
							                                	You don't need to worry about knowing who will be with you on your vacation.
																You will be pampered and served to your needs.
							                                	<br>
							                                	Everyone from families seeking adventure to friends and couples searching for that relaxing hideaway to newlyweds looking for romance, will find this Mexican vacation rental to stage their unforgettable experience.
							                                </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Traveling to Mexico, is it safe?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                    	<p class="paragraph ng-attr-widget">
	                                                    		The short answer is: YES! Although certain parts of the country have seen a rise in drug-related violence in the last few years and the gruesome news reports have done little to help the country's image in the minds of tourists, the fact is that most parts of Mexico are still safe to travel to and the Riviera Maya is known to be Mexico's Softer Side.
	                                                    	<br>
	                                                    		As with any foreign country you go to, it is important to be informed and to take appropriate safety precautions. By making informed decisions, taking simple precautions, and exercising common sense, travelers can continue to take advantage of all that Mexico has to offer. As one of the features of our numerous guest amenities we have supplied personal safes in each guestroom so please use them to keep your valuable belongings.
	                                                    	<br>
	                                                    		With its breathtaking beaches, historical landmarks, and rich culture, it's no wonder that so many people have an interest in visiting Mexico. The country's beauty and diversity of attractions has made it a consistent draw for resort-goers, outdoor-adventurers, and culture-seekers alike, and has helped cement it as one of the top international tourist destinations.
	                                                    	<br>
	                                                    		Mexico deserves its place on vacationer wish lists, and despite some troubled areas (mainly in the border with the U.S.), travelers need not avoid the country as a whole.
	                                                    	</p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do I need passport or Visa to visit Mexico?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Visitors who brave the steep climb up the highest pyramid in Mexico's Mayan world reap the reward 
	                                                        	of a breathtaking view. At more than 130 feet in height, Nohuch Mul, which means "large mound" in 
	                                                        	the Mayan language, is the tallest pyramid at Coba archaeological site and in the Yucatán Peninsula. 
	                                                        	Coba, an easy 45min. drive from Playa del Carmen, is well worth a visit.
	                                                        <br>
	                                                        	For USA citizens only:
	                                                        <br>
	                                                        	Since 2007, ALL persons, including U.S. citizens, traveling by air between the United States and Canada, 
	                                                        	Mexico, Central and South America, the Caribbean, and Bermuda will be required to present a valid passport, 
	                                                        	Air NEXUS card, or U.S. Coast Guard Merchant Mariner Document, or an Alien Registration Card, Form I-551, if applicable.
	                                                        
	                                                        	If traveling by land or sea (including ferries), ALL persons, including U.S. citizens, may be required to present 
	                                                        	a valid passport or other documents as determined by the Department of Homeland Security. 
	                                                        <br>
	                                                        	Other Countries:
	                                                        <br>
	                                                        	If you are a citizen of Andorra, Argentina, Australia, Austria, Belgium, Canada, Chile, Costa Rica, the Czech Republic, 
	                                                        	Denmark, Finland, France, Germany, Great Britain, Greece, Hungary, Iceland, Ireland, Israel, Italy, Japan, Liechtenstein, 
	                                                        	Luxembourg, Monaco, Netherlands, New Zealand, Norway, Poland, Portugal, Puerto Rico, San Marino, Singapore, Slovenia, Spain, 
	                                                        	South Korea, Sweden, Switzerland, United States of America, Uruguay or Venezuela, you don't need a visa to enter Mexico, 
	                                                        	although you must present a valid passport and fill out an immigration form for tourists and business trips, which can be 
	                                                        	obtained in travel agencies, airlines or at the point where you enter Mexico.
	                                                        
	                                                        	The immigration officer at your point of entry into Mexico can also request that you demonstrate that you have sufficient 
	                                                        	funds and a return ticket to your country.
																If you are a citizen of any other Country, you need to go to a Mexican Consulate to request a visa.
	                                                        </p>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do I need to speak/understand Spanish?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Please don't worry! Even though Spanish is the official language in Mexico, English is widely spoken in vacationing destinations such as Playa del Carmen and Riviera Maya.
	                                                        <br>
	                                                        	Villa Aqua has an English speaking concierge at your service 24/7 and also the chef speaks very well.
	                                                        <br>
	                                                        	We definitely appreciate people who make an effort to speak our language and are generally helpful in coaching you how to say words properly and if you are interested in learning more your concierge can even arrange for private Spanish classes!
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                    </div>
	                                </div>
                                    
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    
                                    
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">ABOUT VILLA AQUA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header" style="text-transform:uppercase"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>How many guests can Villa Aqua accommodate?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
															<p class="paragraph ng-attr-widget">
																Villa Aqua maximum capacity is 10 adults but if 2 or more in the group are younger than 12 years old, we can accept up to 12 guests. There are 5 guest rooms; 3 King size bed, 1 with 2 full size beds and 1 with King and a trundle with 2 twin size beds. In addition, the villa is equipped with 1 crib for babies. If you require more cribs or pack & play, please contact your concierge for rental options and pricing.
																<br>
							                                   	If your group is bigger than 12, please contact us for other Luxury Villa options in the area. 
							                                </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Is Villa Aqua suitable for children?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                    	<p class="paragraph ng-attr-widget">
	                                                    		Yes, absolutely! Although Villa Aqua has an architecture and design that do not seem as a kid friendly place, we love having families with kids stay with us and we do offer many amenities for our younger guests! From volleyball / badminton net, flag football, any sort of balls, a basketball hoop, pool floats and toys, Frisbee, many board games, X-box and Wii with games, TV w/Sat and much more…in addition to many excursions available to suit all ages.
	                                                    		<br>
	                                                    		We also provide complimentary: 1 crib, 1 car seat (booster) and 1 high chair. Pack and play, car seats and more baby equipment are available to rent with an external provider.
	                                                    	</p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>How far is the villa from the beach?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Villa Aqua is just a few minutes (10 to 20 min) walking distance to the amazing turquoise water and white sand beach of Playacar Phase I. There is a paved road but if you want to save a couple of minutes take the shortcut through an uneven pathway where you will find Mayan Ruins!
	                                                        </p>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Is Villa Aqua close to downtown and la 5ta Avenida?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Take a nice 15 minute walk and you will be right at the corner of the 2nd Street and 5ta Ave.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Is there access to a telephone?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Yes of course! Villa Aqua offers local and International calls (US and Canada and just landline calls to the other countries) for free. We provide our guests with a US number and a Toll Free US line where your friends and family can contact you. This service is provided through Vonage (VOIP) and Internet service is needed. We do not guarantee the quality or failure on this service. There is a local line too where you can make local calls for free but all long distance calls made through this line will be charged to your bill.
	                                                        	<br>
	                                                        	If you require service to your personal mobile then it is important that you verify with your service provider that you have the proper plan or coverage for our location. If you need further info please contact your Concierge.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Is there Wi-Fi and Ethernet Internet at the villa?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Yes. Villa Aqua provides free high speed Wi-Fi. All you need is a wireless connection or an Ethernet cable. Please consult your manual or an IT professional for configuration prior to arrival as no one at the villa is trained in these type of technical support issues. 
	                                                        	<br>
	                                                        	Even with several routers distributed throughout the different areas of the house, you may experience a variation of signal quality. We appreciate your understanding, as there are big concrete walls that affect communication.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Can I host a special event at the villa such as a wedding, anniversary or corporate retreat?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Sure! Villa Aqua is the perfect location for hosting that special event. We do have different policies and pricing. Please check our Events section for more information.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>What is the reservation policy?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Your reservation is confirmed when we receive your Rental Agreement filled and signed, together with copy of ID and deposit of 50% of the rental fee which should be made no more than 7 days after your booking request. The 50% balance of the rental must be paid 45 days prior to the arrival. Damage deposit is paid in cash upon your arrival to the Villa, if you prefer to put your Credit Card as damage guarantee, please fill out the proper information and send a copy of your plastic (front and back) together with your Rental Agreement and ID.
	                                                        	<br>
	                                                        	For reservations made less than 45 days before arrival then the booking is confirmed and guaranteed when the full (100%) payment is received within one week of your booking request.
	                                                        	<br>
	                                                        	Inland expenses such as transportation, tours, meals and other services must be paid in cash one day prior to your departure date.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>What is the cancellation policy?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	For cancellations 70 or more days prior to arrival date, a full refund shall be rewarded.
	                                                        	<br>
	                                                        	For cancellations 45-70 days prior to arrival date, a 30% of the weekly rental rate is forfeited.
	                                                       		<br>
	                                                        	For cancellations less than 45 days prior to arrival date, 100% of the weekly rental rate is forfeited.
	                                                        	<br>
	                                                        	No cancellations are permitted for HOLIDAY BOOKINGS or EVENTS, 100% of the rental rate is forfeited. If a cancellation is required a credit of any payments will be given towards a future rental if booked within the period of one year. 
	                                                        	<br>
	                                                        	All cancellations must be received in writing (fax / email are acceptable).
	                                                        	<br>
	                                                        	There will be no refunds for late arrivals or early departures.
	                                                        	<br>
	                                                        	If for any unseen reasons the villa becomes unavailable for your rental a full refund of any payments you have made will be provided.
	                                                        	<br>
	                                                        	If because of weather conditions (hurricane, flood or other) you have to leave the property before your departure date we will credit the unused nights for a future stay. No monetary refunds will be provided.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Are there any other additional costs to consider?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Yes, all your incidentals such as food & beverage costs, grocery shopping fees (20% of receipt), Spa services, laundry & dry cleaning, tours and excursions, transportation, etc… are not included in the rental costs.
	                                                        	<br>
	                                                        	Also consider that there is a 17% tax charge on top of the Villa Rates. 
	                                                        	<br>
	                                                        	Tips are not included but not mandatory. This is under each guest's consideration but is highly appreciated by the staff.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do you provide any discount for the length of stay or an early booking discount?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	The rates throughout the web are the same. But we guarantee that we will give you the BEST AVAILABLE RATE as this is the owner's direct website. Please inquire and any special rates or discount will be taking in consideration depending availability and dates.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do you accept credit cards for reservation or incidental expenses?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	We are sorry but we do not accept CC payments for the moment. For reservations a Wire Transfer to a US bank account is required. For incidentals and inland expenses you will need to pay in cash (US dollars and Mxn pesos are accepted). In case you do not want to carry too much cash or do not want to use the ATM's, which usually charge a high fee for foreign cards, we offer the option to send a Wire-Transfer of a fix amount to cover all your expenses. If at the end of your vacation there is a positive balance, we will send it back to your account. (There is a 25 usd charge for this service)
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do you provide towels and amenities?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Yes, all linens including bath and beach towels are provided. 
	                                                        	<br>
	                                                        	Top brand toiletries are also included: soap, shampoo, hair conditioner and moisturizer.
		                                                        <br>
	                                                        	Every bathroom is equipped with hair dryers and magnifying mirrors. 
	                                                        	<br>
	                                                        	This is a full service villa, similar to a boutique hotel. Daily room attendants will refresh your linens and amenities.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
                                    
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">FOOD & BEVERAGE</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Can I drink the water? </strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	At the villa: yes. Villa Aqua has purified, filtered water throughout the villa. We also provide complimentary bottled water for your arrival and unlimited purified water on the kitchen dispenser.
	                                                        	<br>
	                                                        	If you are going to spend your day out on the beach or visiting the different attractions, we recommend that you bring a supply of bottled water and-or drink only bottled beverages.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>How does the pre-stock and grocery shopping work?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	As soon as your reservation is confirmed, you will be contacted by the Villa Concierge who will help you with all your vacation planning, including your meals! It is very important that you let your concierge know about any allergies and / or dietary restrictions / preferences in your group with time so that the chef can take proper precautions. 
	                                                        <br>
	                                                        	We provide a Grocery Shopping List and a Sample Menu just as a guideline but take in mind that our chef is always open to special requests.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>How are alcohol beverages invoiced?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	We keep an inventory of wine and liquors, and you will be charged any bottles that you open. There is very little markup but if you prefer you can also replace them for new bottles. Bar Menu is available upon request. We can also pre-stock your favorite spirits (if available in the market) before your arrival.
	                                                        <br>
	                                                        	For your convenience, we have our Honor Bar, these are all opened bottles left by past guests. Maybe it is just you in the mood for drinking one tequila shot, If so; then you are more than welcome to grab it from the honor bar. 
	                                                        <br>
	                                                        	We encourage all our guests to keep this tradition by not emptying the entire honor bar and leaving your opened bottled for the next guests.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>Do the staff prepare beverages during our stay?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	This may occur randomly. As usually our chef and kitchen assistant are very busy with all the meal preparation, this includes shopping, food preparation, table setting, serving and cleaning, they cannot attend all your beverage requests so if you need this service please contact your concierge for Bartender service and pricing options.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>We know that the Chef working hours are from 8AM to 4PM, can he leave our dinner prepared and we reheat it later?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	This is possible just when you do not take lunch at the villa. If that is the case, the chef will use that time frame to prepare your dinner, otherwise you can request Dinner Chef Service (extra fees apply depending the number in your group) or choose any of our Epic Dinner Experiences which include delicious menus and entertainment.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>We are early risers, can the Chef serve us breakfast before 8AM?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	We always try to fulfill your needs. If you are early risers or have an early excursion, the chef can adjust the service schedule and move it a couple of hours. We need at least 24 hours notice and it is subject to consideration.
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
                                    
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    <div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
                                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#f4f4f4;" class="vc_sep_line"></span></span>
                                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#f4f4f4;" class="vc_sep_line"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->


                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getFaqHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/reservations/Villa_Aqua_Header_FAQ.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getTestimonialsHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
	    <style type="text/css">
	        .stm-testimonial p {
	        	color: #525252!important;
	        }
	    </style>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getTestimonialsContent()
	{
		ob_start();
		echo self::getTestimonialsHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <!-- Testimonials -->
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1426664924161 ">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper ">
                                    <div class="ult-just-icon-wrapper ">
                                        <div class="align-icon " style="text-align:center; ">
                                            <div class="aio-icon none " style="color:#111;font-size:39px;display:inline-block; ">
                                                <i class="icomoon-shell"></i>
                                            </div>
                                            <br>
                                            <br>
                                            
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-561be2955779d " data-id="561be2955779d " data-height="19 " data-height-mobile="19 " data-height-tab="19 " data-height-tab-portrait="19 " data-height-mobile-landscape="19 " style="clear:both;display:block; "></div>
                                    
                                    <div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeInUp " data-animation-delay="0 " data-animation-duration=".5 " data-animation-iteration="1 " style="opacity:1; " data-opacity_start_effect=" ">
                                        <div id="ult-carousel-984694667561be29557b29 " class="ult-carousel-wrapper bullets-white ult_horizontal " data-gutter="15 " data-rtl="false ">
                                            <div class="ult-carousel-slide">
                                            	<?php 
												foreach ($this->data[0]['reviews'] as $review) 
												{
													?>
												<div class="ult-item-wrap " data-animation="animated no-animation ">
													<div class="stm-testimonial ">
														<p>
															<?php echo $review['reviewShare']; ?>
														</p>
														<div class="author "><?php echo $review['name']; ?><br> <?php echo $review['city']; ?><br><?php echo Tools::formatMYSQLToFront($review['date']); ?></div>
													</div>
												</div>
													<?php
												}
												?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                        <div class="upb_bg_img " data-ultimate-bg="url(/images/BG_QUOTE.jpg) " data-image-id="272 " data-ultimate-bg-style="vcpb-vz-jquery " data-bg-img-repeat="no-repeat " data-bg-img-size="cover " data-bg-img-position=" " data-parallx_sense="30 " data-bg-override="ex-full " data-bg_img_attach="scroll " data-upb-overlay-color=" " data-upb-bg-animation=" " data-fadeout=" " data-bg-animation="left-animation " data-bg-animation-type="h " data-animation-repeat="repeat " data-fadeout-percentage="30 " data-parallax-content=" " data-parallax-content-sense="30 " data-row-effect-mobile-disable="true " data-img-parallax-mobile-disable="false " data-rtl="false " data-custom-vc-row=" " data-vc="4.6.2 " data-theme-support=" " data-overlay="false " data-overlay-color=" " data-overlay-pattern=" " data-overlay-pattern-opacity=" " data-overlay-pattern-size=" "></div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid ">
			<div class="vc_col-sm-12 wpb_column vc_column_container ">
				<div class="wpb_wrapper">
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="fadeIn" data-animation-delay="0" data-animation-duration="1.5" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="ult-spacer spacer-561be2953b20c" data-id="561be2953b20c" data-height="5" data-height-mobile="5" data-height-tab="5" data-height-tab-portrait="5" data-height-mobile-landscape="5" style="clear:both;display:block;"></div>
						<div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center">
							<span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
							<h2 style="color:#22BCB8;font-weight: 300;">Guest Book</h2>
							<span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
						</div>
						
						<div class="ult-spacer spacer-561be2953b411" data-id="561be2953b411" data-height="12" data-height-mobile="12" data-height-tab="12" data-height-tab-portrait="12" data-height-mobile-landscape="12" style="clear:both;display:block;"></div>
						<div class="ult-just-icon-wrapper ">
							<div class="align-icon" style="text-align:center;">
								<div class="aio-icon none " style="color:#9d8f62;font-size:13px;display:inline-block;">
								</div>
							</div>
						</div>
					</div>
					<div class="ult-animation  ult-animate-viewport  ult-no-mobile" data-animate="fadeIn" data-animation-delay="0" data-animation-duration="3" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
						<div class="rental-service_latest js-carousel-testimonials">
							<?php 
							foreach ($this->data[0]['testimonials'] as $testimonial)
							{
								$i = 0;
								?>
							
							<div class="rental-service_item">
                            	<div class="rs-item_inner">
                                	<div class="rs-item_actions">
                                		<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/media/original/<?php echo $testimonial['picture']; ?>"><i class="fa fa-search-plus"></i></a>
                                	</div>
                                	<div class="rs-item_content">
                                		<img width="1140" height="676" src="/images/media/thumb/<?php echo $testimonial['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                	</div>
                                </div>
                            </div>
								<?php 
								$i++;
							}
							?>
							
						</div>
						<div class="ult-spacer spacer-561be2953b550" data-id="561be2953b550" data-height="9" data-height-mobile="9" data-height-tab="9" data-height-tab-portrait="9" data-height-mobile-landscape="9" style="clear:both;display:block;"></div>
					</div>
				</div>
			</div>
		</div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getTestimonialsHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/testimonials/Villa_Aqua_Header_TESTIMONIALS.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getRentalHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getRentalContent()
	{
		ob_start();
		echo self::getRentalHeader();
		?>
		<div class="container default-page-container" style="margin: 35px auto 45px auto;">
            <div class="">
            <!-- <div class="container-inner"> --> 
                <div class="content">
                    <article id="post-434" class="post-434 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row" data-rtl="false" data-row-effect-mobile-disable="true" style="position: relative;">
                            <div class="upb_row_bg" data-bg-override="0" style="min-width: 1140px; left: 0px; width: 1140px; background: rgb(255, 255, 255);"></div>
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #525252;text-align: left;font-weight:300;font-style:normal">RENTAL RATES</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element  content-style">
                                        <div class="wpb_wrapper">
											<table class="table table-striped custom-table">
	                                            <thead>
	                                                <tr>
	                                                    <th><strong>Seasons</strong><br> 2015-2016 <br><br></th>
	                                                    <th><strong>Low </strong><br>May 09 <br>until <br>Dec 19</th>
	                                                    <th><strong>Thanksgiving </strong><br>Nov 21 <br> until<br>Nov 29</th>
														<th><strong>Christmas</strong><br> Dec 19<br> until<br> Dec 26</th>
														<th><strong>New Year</strong><br> Dec 26 <br> until<br>Jan 02</th>
														<th><strong>High </strong><br> Jan 02 <br> until<br>May 07</th>
														<th><strong>Easter 1</strong><br>  Mar 19 <br>until <br>Mar 26</th>
														<th><strong>Easter 2</strong><br>  Mar 26 <br>until <br>Apr 02</th>
														<th><strong>Summer</strong><br> May 07 <br> until<br>Dec 19</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th>1 Bedroom <br>(1-2 guests)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>2 Bedrooms <br>(2-3 guests)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>3 Bedrooms <br>(3-4 guests)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>4 bedrooms <br> (4-5 guests)</th>
	                                                    <td>$1,450</td>
	                                                    <td>$1,900</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,900</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,450</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>5 bedrooms <br>(5-6 guests)</th>
	                                                    <td>$1,600</td>
	                                                    <td>$2,050</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,600</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Minimum nights</th>
	                                                    <td>4</td>
	                                                    <td>4</td>
	                                                    <td>7</td>
	                                                    <td>7</td>
	                                                    <td>4</td>
	                                                    <td>7</td>
	                                                    <td>7</td>
	                                                    <td>4</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
                                        </div>
                                    </div>
                                    <br>
                                    <p>
                                    	Taxes are not included. (16% + 3%)<br>
										All rates are subject to change without notice.<br>
										Rates are for the entire villa rental per night based on a double occupancy per room.<br>
										If rent less bedrooms, the vacant rooms will remain locked.<br>
										Maximum occupancy: 10 adults (If there are 2 or more children 12 years old or yournger, we accept up to 12 guests)<br>
										No pets allowed.<br>
										No smoking inside property.<br>
                                    </p>
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    <div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
                                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
                                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
		<div class="container vc-page-container" style="margin: 15px auto 45px auto;">
        	<div class="vc_custom_heading">
             	<h2 style="color: #525252;text-align: left;font-weight:300;font-style:normal">HOW TO RESERVE</h2>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<h6>Reservation Process</h6>
                                        
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                	To place a reservation fill out our <a href="/contact-us/">contact form</a> whenever you feel ready.
                                                </span>
                                            </p>
                                            <div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">As soon as we receive your request, we will contact you with availability and pricing.</li>
                                                			<li class="item-feature">Once you agree, we will place a hold in our calendar and send all the paperwork and payment instructions. </li>
                                                			<li class="item-feature">Your reservation will be confirmed when we receive your Rental Agreement filled and signed, together with copy of your ID and the receipt of the 50% deposit of the rental fee which should be made no more than 7 days after your booking request. The 50% balance of the rental must be paid 45 days prior to your check in date. </li>
                                                			<li class="item-feature">Damage deposit is paid in cash upon arrival at the Villa; if you prefer to put your Credit Card as damage guarantee, please fill out the proper information on your Rental Agreement and send a copy of your plastic (front and back) together with your ID.</li>
                                                			<li class="item-feature">For reservations made less than 45 days before arrival, we require full (100%) payment to confirm the booking.</li>
                                                			<li class="item-feature">Inland expenses such as transportation, tours, meals and other services must be paid in<strong> cash</strong> one day prior to your departure date.</li>
                                                		</ul>
                                                	</div>
                                            </div>
                                                                                        
                                            <br />
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">

                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                            	<img width="1140" height="676" src="/images/staff-and-services/Villa_Aqua_staff_&_service_general_1.jpg" class="vc_single_image-img attachment-full" alt="Driving-yacht" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
						<!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
        
        
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getRentalHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/reservations/Villa_Aqua_Header_reservations_rental_rates.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Rates &amp; Reservation</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getRulesHead()
	{
		ob_start();
		?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
		
	public function getRulesContent()
	{
		ob_start();
		echo self::getRulesHeader();
		?>
		<div class="container default-page-container">
            <div class="container-inner">


                <div class="content">


                    <article id="post-434" class="post-434 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row" data-rtl="false" data-row-effect-mobile-disable="true" style="position: relative;">
                            <div class="upb_row_bg" data-bg-override="0" style="min-width: 1140px; left: 0px; width: 1140px; background: rgb(255, 255, 255);"></div>
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    
                                    <div class="vc_custom_heading">
                                        <!-- <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">VILLA RULES & POLICIES </h2> -->
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element  content-style">
                                        <div class="wpb_wrapper">
											<?php echo $this->data[0]['policy']['policy']; ?>
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    <div class="vc_separator wpb_content_element vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
                                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#f4f4f4;" class="vc_sep_line"></span></span>
                                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#f4f4f4;" class="vc_sep_line"></span></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
        </div>
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
	    
	public function getRulesHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/reservations/Header_RULES_&_POLICIES.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Villa Rules &amp; Policies</h2>
                    </div>
                </div>
            </div>
        </div>
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getPackagesHead()
	{
	ob_start();
	?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
			
	public function getPackagesContent()
	{
		ob_start();
		echo self::getPackagesHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
        	<div class="vc_custom_heading">
             	<h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Lorem ipsum dolor sit amet</h2>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
                <div class="content">
                    <article id="post-300" class="post-300 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Lorem ipsum dolor sit amet</strong> consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                                                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                     rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis 
                                                     eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac 
                                                </span>
                                            </p>
                                            <br />
                                        </div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">Aliquam lorem ante</li>
                                                			<li class="item-feature">dapibus in, viverra quis, feugiat a, tellus</li>
                                                			<li class="item-feature">Nam eget dui. Etiam rhoncus</li>
                                                			<li class="item-feature">Nam eget dui. Etiam rhoncus</li>
                                                		</ul>
                                                		<p><i>Maecenas tempus</i></p>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/packages/Villa_Aqua_packages_fill_grey.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/packages/Villa_Aqua_packages_fill_grey.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/packages/Villa_Aqua_packages_fill_turquoise.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/packages/Villa_Aqua_packages_fill_turquoise.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Lorem ipsum dolor </h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>             
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
						
                        <!-- Row Backgrounds -->
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Lorem ipsum dolor sit amet</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    onsectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/packages/Villa_Aqua_packages_fill_grey.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/packages/Villa_Aqua_packages_fill_grey.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Villa host -->
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/packages/Villa_Aqua_packages_fill_turquoise.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/packages/Villa_Aqua_packages_fill_turquoise.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Lorem ipsum dolor sit amet</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus  
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <!-- /Villa host -->
                        
                        <!-- Maintenance -->
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
							<div class="wpb_wrapper">
								<div class="stm-separator"><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span><span class="stm-separator_holder __icon"></span><span class="stm-separator_holder __line"><span class="stm-separator_line"></span></span></div>
							</div> 
						</div>
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <div class="vc_row wpb_row vc_row-fluid top-margin">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Lorem ipsum dolor sit amet</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. .
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/packages/Villa_Aqua_packages_fill_grey.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/packages/Villa_Aqua_packages_fill_grey.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Maintenance -->
                        
                        <!-- Row Backgrounds -->
                        <div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false" data-custom-vc-row="" data-vc="4.6.2" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                        <!-- Row Backgrounds -->
                    </article>
                    <!-- #post-## -->
                </div>
            </div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="vc_btn3-container vc_btn3-center animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/at-extra-cost/" title="" target="_self">MORE SERVICES</a>
			</div>
        </div>
        
	    <?php 
	    $content = ob_get_contents();
	    ob_end_clean();
		return $content;
	}
		    
	public function getPackagesHeader()
	{
		ob_start();
	    ?>
	    <div class="page-header" style="background-image:url(/images/packages/Villa_Aqua_packages_header.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
	public function getGalleryHead()
	{
	ob_start();
	?>
	    <?php echo self::getCommonDocuments(); ?>
	    <?php echo self::getGoogleAnalytics(); ?>
		<?php
		$head = ob_get_contents();
		ob_end_clean();
		return $head;
	}
			
	public function getGalleryContent()
	{
		ob_start();
		echo self::getGalleryHeader();
		?>
		<div class="container vc-page-container" style="margin: 35px auto 45px auto;">
            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
            <div class="container-inner">
            	<div class="vc_col-sm-12 wpb_column vc_column_container ">
					<div class="wpb_wrapper">
						<div class="wpb_single_image wpb_content_element vc_align_center">
							<div class="wpb_wrapper">
							<?php 
                            if ($this->data[0]['master-bedroom'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['master-bedroom']);
                            	
                            	foreach($this->data[0]['master-bedroom'] as $picture)
                                {	
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                	$i++;
								}
							}
							
							if ($this->data[0]['bedroom-two'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['bedroom-two']);
                            	
                            	foreach($this->data[0]['bedroom-two'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                $i++;
								}
							}
							
							if ($this->data[0]['bedroom-three'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['bedroom-three']);
                            	
                            	foreach($this->data[0]['bedroom-three'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                $i++;
								}
							}
							
							if ($this->data[0]['bedroom-four'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['bedroom-four']);
                            	
                            	foreach($this->data[0]['bedroom-four'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                $i++;
								}
							}
							
							if ($this->data[0]['bedroom-five'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['bedroom-five']);
                            	
                            	foreach($this->data[0]['bedroom-five'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                $i++;
								}
							}
							
							if ($this->data[0]['living-room'])
                            {
                            	foreach($this->data[0]['living-room'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['dining-room'])
                            {
                            	foreach($this->data[0]['dining-room'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['family-room'])
                            {
                            	foreach($this->data[0]['family-room'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['library-room'])
                            {
                            	foreach($this->data[0]['library-room'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['kitchen'])
                            {
                            	foreach($this->data[0]['kitchen'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['pool'])
                            {
                            	foreach($this->data[0]['pool'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['jacuzzy'])
                            {
                            	foreach($this->data[0]['jacuzzy'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['oven'])
                            {
                            	foreach($this->data[0]['oven'] as $picture)
                                {
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
								}
							}
							
							if ($this->data[0]['gym'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['gym']);
                            	
                            	foreach($this->data[0]['gym'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                $i++;
								}
							}
							
							if ($this->data[0]['squash'])
                            {
                            	$i = 0;
                            	$limit = count($this->data[0]['squash']);
                            	
                            	foreach($this->data[0]['squash'] as $picture)
                                {
                                	if ($limit != ($i +1))
                                	{
                                	?>
	                               	<div class="vc_col-sm-3 wpb_column vc_column_container gal">
									    <div class="rental-service_item">
									        <div class="rs-item_inner">
									            <div class="rs-item_actions">
									                <a class="rs-item_action_zoom js-fancybox" rel="gallery" href="/images/media/original/<?php echo $picture['picture']; ?>"><i class="fa fa-search-plus"></i></a>
									            </div>
									            <div class="rs-item_content">
									                <img width="1140" height="676" src="/images/media/thumb/<?php echo $picture['picture']; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua" />
									            </div>
									        </div>
									    </div>
									</div>
                               	<?php
                                	}
                                	$i++;
								}
                            }
							?> 
							</div>
						</div>
					</div>
				</div>
        	</div>
        </div>
        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
		<?php 
	}

	public function getGalleryHeader()
	{
		ob_start();
		?>
	    <div class="page-header" style="background-image:url(/images/Villa_Aqua_Header_gallery.jpg);text-align:center">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-header_in">
                        <h2 class="page-title">Gallery</h2>
                    </div>
                </div>
            </div>
        </div>	
	    <?php 
	    $header = ob_get_contents();
	    ob_end_clean();
	    return $header;
	}
	
    /**
	 * getFooter
	 *
	 * returns an string with the footer content, this includes categories,
	 * location, contact info, and some description
	 *
	 * @return string
	 */
	public function getFooter()
	{
		ob_start();
		?>
		<footer id="colophon " class="site-footer " role="contentinfo ">
            <div class="container ">
                <div class="footer_widget-area ">
                    <div class="row ">
                        <aside id="contact_us-2 " class="widget widget_contact_us col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <h4 class="widget-title ">Get in touch</h4>
                            <ul class="contact-details_list left-icon ">
                                <li class="phone">Phone USA: 1 (866) 460 31 59</li>
                                <li class="phone">Phone USA: 1 (956) 465 44 59</li>
                                <li class="phone">Phone MX: +52 1 (984) 807 94 75</li>
                                <li class="phone">Phone MX: +52 1 (984) 803 27 19</li>
                                <li class="email">E-Mail: <a href="/contact-us/">rentals@villaaqua.com</a></li>
                            </ul>
                        </aside>
                        
                        <aside id="follow_us-3 " class="widget widget_follow_us col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <h4 class="widget-title ">Follow us</h4>
                            <p class="follow_fb "><span class="follow-icon_holder "><a href="https://www.facebook.com/villaaquamexico/" target="_blank"><i class="fa fa-facebook "></i></a></span><span class="follow_label ">Like us on Facebook</span>
                            </p>
                            <p class="follow_ins "><span class="follow-icon_holder "><a href="https://instagram.com/villaaquapdc/" target="_blank"><i class="fa fa-instagram "></i></a></span><span class="follow_label ">Follow us on Instagram</span>
                            </p>
                            <p class="follow_tw "><span class="follow-icon_holder "><a href="https://twitter.com/villaaqua" target="_blank"><i class="fa fa-twitter "></i></a></span><span class="follow_label ">Follow us on Twitter</span>
                            </p>
                        </aside>
                        
                        <aside id="recent-posts-3 " class="widget widget_recent_entries col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <h4 class="widget-title ">Important Info</h4>
                            <ul>
                            	<li>
                                    <a href="/gallery/">Photo Gallery</a>
                                </li>
                                <li>
                                    <a href="/villa-rules-and-policies/">Villa Rules & Policies </a>
                                </li>
                                <li>
                                    <a href="/riviera-maya/">Travel Tips </a>
                                </li>
                                <li>
                                    <a href="/faq/">FAQ</a>
                                </li>
                            </ul>
                        </aside>
                        
                        <aside id="stm_tweets-3 " class="widget widget_stm_tweets col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        	<h4 class="widget-title " style="text-align: center;">Weather</h4>
                            <div style="margin-top:20px">
								
								  <div id="plemx-root"></div> 
  
  <script type="text/javascript"> 

  var _plm = _plm || [];
  _plm.push(['_btn', 22073]); 
  _plm.push(['_loc','mxxx0099']);
  _plm.push(['location', document.location.host ]);

  (function(d,e,i) {
  if (d.getElementById(i)) return;
  var px = d.createElement(e);
  px.type = 'text/javascript';
  px.async = true;
  px.id = i;
  px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
  var s = d.getElementsByTagName('script')[0];

  var py = d.createElement('link');
  py.rel = 'stylesheet'
  py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css'

  s.parentNode.insertBefore(px, s);
  s.parentNode.insertBefore(py, s);
})(document, 'script', 'plmxbtn');</script>
								
								
								
							</div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="site-info ">
                    <p class="copyright ">Copyright © 2016 <a target="_blank " href="http://www.villaaquacom/ ">Villa Aqua</a>
                    </p>
                    <a href="#site-start " class="move-top"><span class="move-top_text">Back to top of page<i class="fa fa-angle-up "></i></span></a>
                </div>
            </div>
        </footer>
        <?php
        $footer = ob_get_contents();
        ob_end_clean();
        return $footer;
    }
}
