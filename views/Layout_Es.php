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
					echo self :: getPrivateHead();
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
					echo self :: getEventsContent();
				break;
				
				case 'faq':
					echo self :: getFaqContent();
				break;
				
				case 'testimonials':
					echo self :: getTestimonialsContent();
				break;
				
				case 'rental':
					echo self :: getRentalContent();
				break;
				
				case 'rules':
					echo self :: getRulesContent();
				break;
				
				case 'packages':
					echo self :: getPackagesContent();
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
	        <a target="_blank " href="/es/contacto/" class="buy_button ">RESERVAR AHORA</a>
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

  ga('create', 'UA-71602794-1', 'auto');
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
							<li><a href="/">Ingl&eacute;s</a></li>
			                <li><a href="/es/">Spanish</a></li>
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
                                <li class="user-menu-item"><a class="login-button" href="#">English</a>
                                </li>
                                <li class="user-menu-item"><a class="singup-button" href="/es/">Español</a>
                                </li>
                            </ul>
                        </div>
                        <ul id="menu-main_menu" class="nav navbar-nav  navbar-right">
                            <li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item">
                                <a href="/es/">Home</a> 
                            </li>
                            
                            <li id="menu-item-843" class="dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                <a href="/es/overview/" class="dropdown-toggle">La Villa</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/es/overview/">Especificaciones Generales</a></li>
                                    <li class="menu-item"><a href="/es/las-habitaciones/">Las habitaciones</a></li>
                                    <li class="menu-item"><a href="/es/areas-comunes/">Áreas Comunes</a></li>
                                    <li class="menu-item"><a href="/es/piscina-y-exteriores/">Piscina y Exteriores</a></li>
                                    <li class="menu-item"><a href="/es/que-hacer-en-la-villa/">Qué hacer en la villa? </a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="/es/servicios-y-staff/" class="dropdown-toggle">Los Servicios</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                	<li class="menu-item"><a href="/es/incluidos/">Inclu&iacute;dos</a></li>
                                    <li class="menu-item"><a href="/es/con-costo-extra/">Con costo extra</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/es/info-del-destino/">El Destino</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                	<li class="menu-item"><a href="/es/info-del-destino/">Cómo llegar</a></li>
                                    <li class="menu-item"><a href="/es/info-del-destino/#playacar" class="to-section">Playacar</a></li>
                                    <li class="menu-item"><a href="/es/info-del-destino/#playadelcarmen">Playa del Carmen</a></li>
                                    <li class="menu-item"><a href="/es/riviera-maya/">Riviera Maya</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/es/out-and-about/">Actividades</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/es/out-and-about/">Playas</a></li>
                                    <li class="menu-item"><a href="/es/out-and-about/#actividadesacuaticas" class="to-section">Actividades Acuáticas</a></li>
                                    <li class="menu-item"><a href="/es/out-and-about/" class="to-section">Golf</a></li>
                                    <li class="menu-item"><a href="/es/out-and-about/" class="to-section">Parques</a></li>
                                    <li class="menu-item"><a href="/es/cultura/">Cultura</a></li>
                                    <li class="menu-item"><a href="es/cultura/#dining" class="to-section">Restaurants</a></li>
                                    <li class="menu-item"><a href="es/cultura/#shopping" class="to-section">Compras</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/es/eventos/">Eventos</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/es/bodas/">Bodas</a></li>
                                    <li class="menu-item"><a href="/es/retiros-corporativos/">Retiros corporativos</a></li>
                                    <li class="menu-item"><a href="/es/reuniones-de-familia-y-amigos/">Reuniones de familia y amigos</a></li>
                                    <li class="menu-item"><a href="/es/eventos-privados/">Eventos privados</a></li>
                                    <li class="menu-item"><a href="/es/locacion/ ">Locaci&oacute;n</a></li> 
                                </ul>
                            </li>
                            
                            <li class="dropdown menu-item">
                                <a href="/testimonials/" class="dropdown-toggle">Testimoniales</a>
                            </li>
                            
                            <li class="dropdown menu-item menu-item-object-page">
                                <a href="/es/proceso-de-reserva/">Reservas</a>
                                <b class="caret"></b>
                                <ul class="dropdown-menu">
                                    <li class="menu-item"><a href="/es/proceso-de-reserva/">El proceso de reserva</a></li>
                                    <li class="menu-item"><a href="/es/proceso-de-reserva/">Tarifas</a></li>
                                    <li class="menu-item"><a href="/es/contacto/">Formulario de contacto</a></li>
                                    <li class="menu-item"><a href="/es/faq/">Preguntas frecuentes</a></li>
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
											Disfruta de Villa Aqua
										</h1>
										<p class="ls-l" style="top:434px;left:50%;font-size:12px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;offset:100%;durationin:900;delayin:400;easingin:easeInOutSine;offsetxout:0;durationout:200;showuntil:3000;easingout:easeInOutSine;">
										<a href="/es/proceso-de-reserva/" class="btn">Reservar Ahora</a>
										</p>
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/villa-aqua-slider-2.jpg" class="ls-bg" alt="Villa Aqua - Luxury Villa For rent in Playa del Carmen" />
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/villa-aqua-slider-3.jpg" class="ls-bg" alt="Villa Aqua - Luxury Villa For rent in Playa del Carmen" />
									</div>
									
									<div class="ls-slide" data-ls=" transition2d: 5;">
										<img src="/images/sliders/Villa_Aqua_slider4.jpg" class="ls-bg" alt="Villa Aqua - Luxury Villa For rent in Playa del Carmen" />
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
										Villa Aqua es una hermosa villa privada que presume de un diseño 
                                        contemporáneo y a la vez acogedor. Sus 5 amplias y modernas habitaciones 
                                        ofrecen confort y lujo en un ambiente cálido con servicio personalizado, 
                                        simplemente excepcional. Su ubicación inmejorable en el corazón de Playa 
                                        del Carmen, dentro del exclusivo fraccionamiento privado Playacar, permite 
                                        a nuestros huéspedes realizar diversas actividades dentro y fuera de la villa, 
                                        ya que además de contar con amenidades increíbles, también se encuentra muy 
                                        cerca de la famosa “Quinta Avenida” y de las hermosas playas de arena blanca 
                                        y aguas cristalinas, azul turquesa, de la Riviera Maya.
									</span>
									<br /><br />
									<span style="color: #525252;">
										Si desea disfrutar de unas inolvidables vacaciones familiares, reuniones con
                                        amigos, viajes corporativos o una Luna de Miel de ensueño en la Riviera Maya, 
                                        Villa Aqua, en Playa del Carmen, es lo mejor en rentas vacacionales de lujo y 
                                        el lugar ideal para crear recuerdos que perduren.
									</span>
									
									
								</p>
							</div>
						</div>
						<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
						<div class="vc_btn3-container vc_btn3-center">
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/overview/" title="" target="_self">LEER MAS</a>
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
							<h2 style="color:#22BCB8;font-weight: 300;">Staff &amp; Servicios</h2>
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
									<a class="rs-item_action_link" href="/es/incluidos/">
										<i class="fa fa-eye"></i>
									</a>
								</div>
								
								<div class="rs-item_inner">
									<div class="rs-item_content"><img width="570" height="446" src="/images/HOME_Included_esp.jpg" class="attachment-full wp-post-image" alt="Exellent-view" /></div>
								</div>
							</div>
							
							<div class="rental-service_item">
								<div class="rs-item_inner">
									<div class="rs-item_actions">
										<a class="rs-item_action_link" href="/es/con-costo-extra/">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="rs-item_content"><img width="570" height="446" src="/images/HOME_Extracost_esp.jpg" class="attachment-full wp-post-image" alt="Strong-Wind" /></div>
								</div>
							</div>
							
							<div class="rental-service_item">
								<div class="rs-item_inner">
									<div class="rs-item_actions">
										<a class="rs-item_action_link" href="/es/eventos/">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="rs-item_content"><img width="570" height="446" src="/images/HOME_Events_esp.jpg" class="attachment-full wp-post-image" alt="Berth" /></div>
								</div>
							</div>
						</div>
						<div class="ult-spacer spacer-561be2953b550" data-id="561be2953b550" data-height="9" data-height-mobile="9" data-height-tab="9" data-height-tab-portrait="9" data-height-mobile-landscape="9" style="clear:both;display:block;"></div>
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<p style="text-align: center;">
									<span style="color: #525252;">Las excepcionales instalaciones de 
                                        Villa Aqua y sobre todo, nuestro atento y dedicado personal, 
                                        harán de su renta vacacional de lujo una experiencia única e 
                                        inolvidable.</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ult-spacer spacer-561be2953972e" data-id="561be2953972e" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
		<div class="ult-animation ult-animate-viewport ult-no-mobile " data-animate="fadeIn " data-animation-delay="0 " data-animation-duration="1.5 " data-animation-iteration="1 " style="opacity:0; " data-opacity_start_effect="95 ">
			<div class="vc_btn3-container vc_btn3-center "><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-block vc_btn3-color-chino " href="/es/servicios-y-staff/" title=" ">VER TODOS LOS SERVICIOS</a></div>
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
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>
											Perfect perfect perfect!
										</p>
										<div class="author ">Williams & Bell<br> Louisiana & Nevada, USA <br>August 2015</div>
									</div>
								</div>
								
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>
											We can not say enough. The staff was incredible. We enjoyed our stay 
											so much & can not wait to come back again. Truly was an incredible house, 
											stay & more!!!!
										</p>
										<div class="author ">Edmonton´s<br> Texas, USA<br>July 2015</div>
									</div>
								</div>
								                                                
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>
											Greatest and most helpful staff very warm and hard working, everytime 
											I'm in playa I'll be staying at the Villa Aqua. Nothing compares.
										</p>
										<div class="author ">Jimmy<br>Australia<br>December 2014</div>
									</div>
								</div>
								                                                
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>
											Everything about the villa is 10/10 don't think you will be able 
											to find a better villa in playa del Carmen. Thanks for everything :)
										</p>
										<div class="author ">Adam<br>Melbourne, Australia<br>December 2014</div>
									</div>
								</div>
								                                                
								<div class="ult-item-wrap " data-animation="animated no-animation ">
									<div class="stm-testimonial ">
										<p>A wonderful villa, great location, lovely staff. Many thanks!</p>
										<div class="author ">Jayne, Andy McGee & Family<br>British Isles<br>August 2014</div>
									</div>
								</div>
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
									font-style:normal; margin-bottom: 30px;">Eventos</h2>
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
											<a href="/es/bodas/">Bodas</a>
										</h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Todo lo que necesitas para hacer de tu boda en 
                                            el paraíso un evento absolutamente inolvidable!
                                        </p>
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
										<h4><a href="/es/retiros-corporativos/">Retiros Corporativos</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Cualquiera que sea la necesidad de tu equipo nosotros podemos ayudarte a resolverlo.
</p>
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
										<h4><a href="/es/reuniones-de-familia-y-amigos/">Reunión de familia y amigos</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>¡Reúne a los tuyos para unas vacaciones familiares perfectas!</p>
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
										<h4><a href="/es/eventos-privados/">Eventos Privados</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Celebra un aniversario, cumpleaños, un logro personal o 
                                            sólo una reunión con amigos especiales, y disfruta de unas 
                                            vacaciones increíbles.
                                        </p>
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
										<h4><a href="/es/locacion/">Sesiones de Foto & Producciones</a></h4>
										<div class="info-box_separator ">
											<div class="line "></div>
										</div>
										<p>Innumerables días soleados en una moderna locación privada.
                                        </p>
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
						            	<h2>Especificaciones Generales</h2>
						            </div>
						            <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    Su experiencia en el Caribe comienza desde el momento en que llega al 
                                                    aeropuerto y es recibido por nuestro representante para conducirlo a su 
                                                    transportación incluida, hasta el minuto en el que llega a la casa donde 
                                                    los esperan unas refrescantes margaritas.<br>
                                                    
                                                    <strong>Nuestro amable personal lo consentirá con su excelente y complaciente servicio. Todos, desde el 
                                                    chef privado hasta su anfitrión de villa - concierge bilingüe (español-inglés), 
                                                    darán lo mejor de sí para cumplir sus deseos y requerimientos.</strong> Usted sólo 
                                                    tendrá que relajarse y disfrutar de cada momento en la casa, así como en los 
                                                    increíbles lugares que rodean este maravilloso paraíso del cual nunca querrá partir.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    <strong>Villa Aqua está ubicada dentro de Playacar, un fraccionamiento privado, 
                                                    exclusivo, seguro y tranquilo en el centro de Playa del Carmen, en la 
                                                    Riviera Maya. Rodeado de un Campo de Golf profesional de 18 hoyos y a 
                                                    unos cuantos minutos caminando la playa y la “Quinta Avenida” en donde 
                                                    encontrará una gran variedad de tiendas, restaurantes y entretenimiento.</strong>

                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                    La casa cuenta con 5 espaciosas habitaciones de lujo,<strong> pudiendo alojar 10 
                                                    adultos o hasta 12 huéspedes, incluyendo niños menores de 12 años.</strong> Cada 
                                                    habitación cuenta con baño propio, aire acondicionado, modernas amenidades 
                                                    y cómodos interiores.

                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding">
                                                   Villa Aqua, su segundo hogar en la Riviera Maya, le espera a usted y a sus invitados 
                                                    para disfrutar de unas vacaciones inolvidables.

                                                </span>
                                            </p>
                                            
                                           
                                        </div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>HABITACIONES</strong></a></h3>
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
                                                                        			<li class="item-feature">5 habitaciones</li>
                                                                        			<li class="item-feature">6 ½ baños</li>
                                                                        			<li class="item-feature">Cuarto de juegos y Bar</li>
                                                                        			<li class="item-feature">Sala de TV – Biblioteca</li>
                                                                        			<li class="item-feature">Cocina Gourmet</li>
                                                                        			<li class="item-feature">Gimnasio privado y Cancha de Squash</li>
                                                                        			<li class="item-feature">Terraza y jardín con Parrilla de gas y horno de leña
</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Salas de estar al aire libre
</li>
	                                                                        		<li class="item-feature">Piscina
</li>
	                                                                        		<li class="item-feature">Jacuzzi Exterior
</li>
	                                                                        		<li class="item-feature">Jacuzzi Interior en la habitación principal
</li>
	                                                                        		<li class="item-feature">Cuarto de lavado</li>
	                                                                        		
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SERVICIOS INCLUIDOS:</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">1 Traslado aeropuerto-villa-aeropuerto (en rentas de 4 noches o más)</li>
                                                                        			<li class="item-feature">Anfitrión de Villa – concierge 24/7 (asistencia telefónica y visitas diarias)</li>
                                                                        			<li class="item-feature">Chef y Asistente de cocina (todos los días de 8am a 4pm) *No incluye servicio de bar tender / preparación de bebidas</li>
                                                                        			<li class="item-feature">Servicio de limpieza diario (de 9am a 4pm)</li>
                                                                        			<li class="item-feature">Mantenimiento (cuando se requiera)</li>
                                                                        			<li class="item-feature">Internet inalámbrico sin costo
</li>
                                                                        			<li class="item-feature">Llamadas locales, Nacionales, a Estados Unidos y Canadá gratis
</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SERVICIOS DISPONIBLES CON CARGO ADICIONAL:
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Alimentos y Bebidas
</li>
                                                                        			<li class="item-feature">Compra y entrega de alimentos</li>
                                                                        			<li class="item-feature">Servicios de chef y asistente para la cena</li>
                                                                        			<li class="item-feature">Bar tender</li>
                                                                        			<li class="item-feature">Mesero</li>
                                                                        			<li class="item-feature">Servicios de Spa
</li>
                                                                        			<li class="item-feature">Personal de servicio extra</li>
                                                                        		</ul>
                                                                        		
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Servicio de Lavandería y Tintorería</li>
                                                                        			<li class="item-feature">Niñera 
</li>
                                                                        			<li class="item-feature">Chofer y renta de autos</li>
                                                                        			<li class="item-feature"><strong><a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Experiencias Épicas Villa Aqua
</a></strong></li>
                                                                        			<li class="item-feature">Entretenimiento</li>
                                                                        			<li class="item-feature">Tours y Actividades
</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        	<p><i>*Contacte a su  <a href="/contact-us/" target="_blank">Anfitrión de Villa</a> para obtener mayor información y precios.</i></p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>ALIMENTOS y BEBIDAS
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        
                                                                        
                                                                        
                                                                        







                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">Snack de Bienvenida de cortesía</li>
                                                                        			<li class="item-feature">Servicio de compra y surtido de alimentos previo a su llegada (costo de entrega del 20%)</li>
                                                                        			<li class="item-feature">Agua embotellada (incluida sólo el día de su llegada)</li>
                                                                        			<li class="item-feature">Surtido de vinos y licores (aplican cargos))</li>
                                                                        			<li class="item-feature">Servicio de Bar de Honor</li>
                                                                        			<li class="item-feature"><strong> <a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Experiencias Épicas Villa Aqua</a></strong></li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>ENTRETENIMIENTO
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Televisores: 8 Pantallas planas en toda la villa.
</li>
	                                                                     			<li class="item-feature">Teatro en casa
</li>
	                                                                     			<li class="item-feature">Bases para IPod</li>
	                                                                     			<li class="item-feature">Consola de videojuegos (Xbox)</li>
	                                                                     			<li class="item-feature">Apple TV - Netflix</li>
	                                                                     			<li class="item-feature">TV por Cable en las 5 habitaciones</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Estéreo con CD</li>
	                                                                     			<li class="item-feature">Reproductor DVD</li>
	                                                                     			<li class="item-feature">Música (biblioteca de CDs)</li>
	                                                                     			<li class="item-feature">Películas (biblioteca de DVDs)</li>
	                                                                     			<li class="item-feature">Juegos de mesa</li>
	                                                                     			<li class="item-feature">Libros y Revistas</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        


														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENIDADES Y COMUNICACIÓN
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">










                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
	                                                                     			<li class="item-feature">Batas para baño y pantuflas</li>
	                                                                     			<li class="item-feature">Almohadas extra</li>
	                                                                     			<li class="item-feature">Espejos de aumento</li>
	                                                                     			<li class="item-feature">Agua embotellada de cortesía en cada habitación (el día de llegada)</li>
	                                                                     			<li class="item-feature">Teléfonos: 2 líneas (local + internacional)</li>
	                                                                     			<li class="item-feature">Servicio telefónico: Servicio Local/Nacional y Llamadas gratuitas a Estados Unidos y Canadá a través de servicio VOIP (voz sobre IP)</li>
	                                                                     			<li class="item-feature">Internet inalámbrico sin costo</li>
	                                                                     			<li class="item-feature">Servicios de Fax y Paquetería.  <a href="/es/contacto/">(Consulte con su Anfitrión de Villa)</a>)</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>RESPONSABILIDAD AMBIENTAL Y SUSTENTABILIDAD:
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                     	<p>En Villa Aqua nos preocupamos por cuidar el medio ambiente, 
                                                                            por lo que trabajamos día a día para lograr que la casa sea 
                                                                            sustentable. Es por esto que hemos implementado varias 
                                                                            acciones ecológicas para asegurarnos de que nuestra administración 
                                                                            de los recursos en la villa sea lo más amigable posible con la 
                                                                            naturaleza. De esta manera también garantizamos que nuestros 
                                                                            huéspedes disfruten de un ambiente saludable y al mismo tiempo 
                                                                            mantenemos la belleza de Playa del Carmen, para las futuras 
                                                                            generaciones.
                                                                        </p>
                                                         
                                                                            
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Espacios libres de humo</li>
	                                                                     			<li class="item-feature">Reciclaje de desechos</li>
	                                                                     			<li class="item-feature">Composta</li>
	                                                                     			<li class="item-feature">Programa de reutilización de blancos (es opcional, con el objetivo de reducir el consumo de agua y detergente)</li>
	                                                                     			<li class="item-feature">Iluminación eficiente (LED)</li>
	                                                                     			<li class="item-feature">Filtración y purificación de agua para reducir el uso del agua embotellada</li>
	                                                                     			<li class="item-feature">Bicicletas disponibles para una transportación ecológica.</li>
	                                                                     			<li class="item-feature">Contamos con servicio de compra de alimentos orgánicos / cultivados en la localidad (bajo solicitud).</li>
	                                                                     			<li class="item-feature">Vajilla de cerámica, cristal y acrílico para evitar el uso de desechables. </li>
	                                                                     		</ul>
	                                                                     	</div>
	                                                                     	<p>Y seguimos trabajando en muchas cosas más…</p>
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Las Habitaciones</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/las-habitaciones/" title="" target="_self">LEER MAS</a>
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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">Áreas comunes </h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/areas-comunes/" title="" target="_self">LEER MAS</a>
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Piscina y Exteriores</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/piscina-y-exteriores/" title="" target="_self">LEER MAS</a>
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
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">Que hacer en La Villa </h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/que-hacer-en-la-villa/" title="" target="_self">LEER MAS</a>
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
                        <h2 class="page-title">La Villa</h2>
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Master Suite</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CARACTERÍSTICAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Máxima ocupación: 2 personas</li>
                                                                        			<li class="item-feature">129 m2 / 1,292 pies2</li>
                                                                        			<li class="item-feature">Aire acondicionado</li>
                                                                        			<li class="item-feature">Terraza privada: 13 m2/ 137 pies2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">2 Baños (para él y para ella)</li>
	                                                                        		<li class="item-feature">Sillón</li>
	                                                                        		<li class="item-feature">Se pueden abrir las ventanas</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>CAMAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">1 cama King size </li>
                                                                        			<li class="item-feature">Sábanas de lujo</li>
                                                                        			<li class="item-feature">Cunas permitidas: 1 (bajo solicitud)</li>
	                                                                        		<li class="item-feature">Máximo de cunas permitidas en la Villa: 2</li>
	                                                                        		<li class="item-feature">Colchón de plumas y edredón</li>
	                                                                        		<li class="item-feature">Variedad de Almohadas </li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BAÑO
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Ducha </li>
                                                                        			<li class="item-feature">jacuzzi</li>
                                                                        			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
                                                                        			<li class="item-feature">Batas: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Pantuflas</li>
                                                                        			<li class="item-feature">Secadora de cabello</li>
                                                                        			<li class="item-feature">Espejo de aumento</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENIDADES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Televisor Led de 55”</li>
	                                                                     			<li class="item-feature">TV por cable</li>
	                                                                     			<li class="item-feature">Reproductor de DVD</li>
	                                                                     			<li class="item-feature">Apple TV - Netflix</li>
	                                                                     			<li class="item-feature">Base para IPod con reloj despertador</li>
	                                                                     			<li class="item-feature">Stereo with alarm clock</li>
	                                                                     			<li class="item-feature">Caja de seguridad</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Escritorio</li>
	                                                                     			<li class="item-feature">Laptop</li>
	                                                                     			<li class="item-feature">2 Camastros en la terraza</li>
	                                                                     			<li class="item-feature">Vestidor</li>
	                                                                     			<li class="item-feature">Taburete en el vestidor</li>
	                                                                     			<li class="item-feature">Espejo de cuerpo entero</li>
	                                                                     			<li class="item-feature">Plancha y tabla para planchar, bajo solicitud</li>
	                                                                     		</ul>
                                        
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMUNICACIÓN
</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature"> Teléfonos: 3</li>
	                                                                     			<li class="item-feature">Servicio telefónico: De habitación a habitación, servicio local, nacional e internacional (a través de VOIP).</li>
	                                                                     			<li class="item-feature">Llamadas locales, nacionales y a Estados Unidos y Canadá gratis.</li>
	                                                                     			<li class="item-feature">Internet Inalámbrico sin costo.</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                      
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>SERVICIOS EN LA HABITACIÓN</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Servicio de cortesía nocturna
</li>
	                                                                     			<li class="item-feature">Entrega de periódico a la habitación,                                                                                                             bajo solicitud(Favor de informar a su                                                                                                               Anfitrión de Villa sobre el periódico de                                                                                                            su preferencia, con una semana de
                                                                                                            anticipación a su llegada, para                                                                                                                 verificar la disponibilidad del mismo).</li>
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_12_4ta_posicion.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_12_4ta_posicion.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                             
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_10_5ta_pos.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_10_5ta_pos.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_2da_bano.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_2da_bano.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_15_3era_bano.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_15_3era_bano.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_14_ultima.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_14_ultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_6.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_6.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                    <!-- /Master Bedroom -->
                    
                    <!-- Bedroom 2 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.2.2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.2.2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">HABITACIÓN 2</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CARACTERÍSTICAS</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                     	<div class="stm_item-features_inner">
                                                                      		<ul class="item-features_list">
                                                                       			<li class="item-feature">Máxima ocupación: 2 personas</li>
                                                                       			<li class="item-feature">34 m2/ 361 pies2</li>
                                                                       		</ul>
                                                                       		<ul class="item-features_list">
	                                                                       		<li class="item-feature">Aire acondicionado</li>
	                                                                       		<li class="item-feature">Se pueden abrir las ventanas</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>CAMAS</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                               <div class="wpb_wrapper">
                                                                  	 <div class="stm_item-features">
                                                                       	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">2 Camas matrimoniales</li>
                                                                       			<li class="item-feature">Colchón de plumas y edredón</li>
                                                                       			<li class="item-feature">Sábanas de lujo</li>
                                                                       		</ul>
                                                                      		<ul class="item-features_list">
                                                                       			<li class="item-feature">Variedad de Almohadas</li>
                                                                       			<li class="item-feature">Cunas permitidas: 1 (bajo solicitud)</li>
	                                                                       		<li class="item-feature">Máximo de cunas permitidas en la villa: 2</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BAÑO</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">

                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">Ducha</li>
                                                                       			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
                                                                       			<li class="item-feature">Batas: 2</li>
                                                                       		</ul>
                                                                       		<ul class="item-features_list">
                                                                       			<li class="item-feature">Pantuflas</li>
                                                                       			<li class="item-feature">Secadora de cabello</li>
                                                                       			<li class="item-feature">Espejo de aumento</li>
                                                                       		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

													<div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENIDADES</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list">
	                                                                   			<li class="item-feature">Televisor Led de 46”</li>
	                                                                   			<li class="item-feature">TV por cable</li>
	                                                                   			<li class="item-feature">Reproductor de DVD</li>
	                                                                   		</ul>
	                                                                   		<ul class="item-features_list">
	                                                                   			<li class="item-feature">Caja de seguridad en la habitación</li>
	                                                                   			<li class="item-feature">Base para IPod con reloj despertador</li>
	                                                                   			<li class="item-feature">Plancha y tabla para planchar, bajo solicitud</li>
	                                                                   		</ul>
                                                                      	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>

													<div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMUNICACIÓN</strong></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                        	<div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
                                                                      	<div class="stm_item-features_inner">
                                                                       		<ul class="item-features_list_extended">
	                                                                   			<li class="item-feature">Teléfonos: 1</li>
	                                                                   			<li class="item-feature">Servicio telefónico: De habitación a habitación, servicio local, nacional e internacional (a través de VOIP).</li>
	                                                                   			<li class="item-feature">Llamadas locales, nacionales y a Estados Unidos y Canadá gratis.</li>
	                                                                   			<li class="item-feature">Internet Inalámbrico sin costo.</li>
	                                                                   		</ul>
                                                                       	</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                    	<h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>SERVICIOS EN LA HABITACIÓN</strong></a></h3>
                                                       	<div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="stm_item-features">
	                                                                  	<div class="stm_item-features_inner">
	                                                                   		<ul class="item-features_list_extended">
	                                                                   			<li class="item-feature">Servicio de cortesía nocturna</li>
	                                                                   			<li class="item-feature">Entrega de periódico a la habitación, bajo                                                                                      solicitud (Favor de informar a su anfitrión de villa sobre su                                                                                          periódico de preferencia para verificar la disponibilidad del                                                                                        mismo)
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
                    <!-- /Bedroom 2 -->
                    
                    <!-- Bedroom 3 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">HABITACIÓN 3</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CARACTERÍSTICAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Máxima ocupación: 4 personas</li>
                                                                        			<li class="item-feature">37 m2/ 401 pies2</li>
	                                                                        		<li class="item-feature">Aire acondicionado</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Escritorio y silla</li>
	                                                                        		<li class="item-feature">Se pueden abrir las ventanas</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>CAMAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 cama King size + 2 camas individuales (litera baja)</li>
                                                                        			<li class="item-feature">Cama de plumas y edredón</li>
                                                                        			<li class="item-feature">Sábanas de lujo</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Almohadas adicionales</li>
                                                                        			<li class="item-feature">Cunas permitidas: 1 (bajo solicitud)</li>
	                                                                        		<li class="item-feature">Máximo de cunas permitidas en la Villa:  2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>BAÑOS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Ducha</li>
                                                                        			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
                                                                        			<li class="item-feature">Batas: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Pantuflas</li>
                                                                        			<li class="item-feature">Secadora de cabello</li>
                                                                        			<li class="item-feature">Espejo de aumento</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>AMENIDADES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Televisor Led de 42”</li>
	                                                                     			<li class="item-feature">Televisión por cable</li>
	                                                                     			<li class="item-feature">Reproductor de DVD</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Caja de seguridad</li>
	                                                                     			<li class="item-feature">Base para IPod con reloj despertador</li>
	                                                                     			<li class="item-feature">Plancha y tabla para planchar, bajo solicitud</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>COMUNICACIÓN</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Teléfonos: 1</li>
	                                                                     			<li class="item-feature">Servicio telefónico: De habitación a habitación, servicio local, nacional e internacional (a través de VOIP).</li>
	                                                                     			<li class="item-feature">Llamadas locales, nacionales y a Estados Unidos y Canadá gratis.</li>
	                                                                     			<li class="item-feature">Internet Inalámbrico sin costo.</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>SERVICIOS EN LA HABITACIÓN</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Servicio de cortesía nocturna</li>
	                                                                     			<li class="item-feature">Entrega de periódico a la habitación,                                                                                         bajo solicitud (Favor de informar a su anfitrión de villa                                                                                           sobre el periódico de su preferencia, con una semana de                                                                                             anticipación a su llegada, para verificar la disponibilidad                                                                                         del mismo. 
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_3.1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_3.1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_3.2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_3.2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_3.4_antes_mapa.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_3.4_antes_mapa.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_3.3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_3.3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                    <!-- /Bedroom 3 -->
                    
                    <!-- Bedroom 4 -->
                    	<div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new_02.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new_03.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_4_new_03.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        	
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_4.1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_4.1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_4.2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_4.2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">HABITACIÓN 4</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>Características</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Máxima ocupación: 2 personas</li>
                                                                        			<li class="item-feature">23 m2/ 246 pies2</li>
	                                                                        		<li class="item-feature">Aire acondicionado</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Acceso a la terraza y piscina</li>
	                                                                        		<li class="item-feature">Puertas de vidrio corredizas</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                          

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>Camas</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 cama King size</li>
                                                                        			<li class="item-feature">Cama de plumas y edredón</li>
                                                                        			<li class="item-feature">Sábanas de lujo</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Almohadas adicionales</li>
                                                                        			<li class="item-feature">Cunas permitidas: 1 (bajo solicitud)</li>
	                                                                        		<li class="item-feature">Máximo de cunas permitidas en la Villa: 2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        







                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Baños</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Ducha</li>
                                                                        			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
                                                                        			<li class="item-feature">Batas: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Pantuflas</li>
                                                                        			<li class="item-feature">Secadora de cabello</li>
                                                                        			<li class="item-feature">Espejo de aumento</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Amenidades</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Televisor Led de 32”</li>
	                                                                     			<li class="item-feature">Televisión por cable</li>
	                                                                     			<li class="item-feature">Reproductor de DVD</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Caja de seguridad</li>
	                                                                     			<li class="item-feature">Base para IPod con reloj despertador</li>
	                                                                     			<li class="item-feature">Plancha y tabla para planchar, bajo solicitud</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Comunicación</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Teléfonos: 1</li>
	                                                                     			<li class="item-feature">Servicio telefónico: De habitación a habitación, servicio local, nacional e internacional (a través de VOIP).</li>
	                                                                     			<li class="item-feature">Llamadas locales, nacionales y a Estados Unidos y Canadá gratis.</li>
	                                                                     			<li class="item-feature">Internet Inalámbrico sin costo.</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                       
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Servicios en la habitación</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Servicio de cortesía nocturna</li>
	                                                                     			<li class="item-feature">Entrega de periódico a la habitación,                                                                                         bajo solicitud (Favor de informar a su anfitrión de villa                                                                                           sobre el periódico de su preferencia, con una semana de                                                                                             anticipación a su llegada, para verificar la disponibilidad                                                                                         del mismo).
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
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">HABITACIÓN 5</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>Características</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Máxima ocupación: 2 personas</li>
                                                                        			<li class="item-feature">20 m2/ 220 pies2</li>
	                                                                        		<li class="item-feature">Aire acondicionado</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
	                                                                        		<li class="item-feature">Acceso a la terraza y la piscina</li>
	                                                                        		<li class="item-feature">Se pueden abrir las ventanas</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>Camas</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">1 cama King size</li>
                                                                        			<li class="item-feature">Cama de plumas y edredón</li>
                                                                        			<li class="item-feature">Sábanas de lujo</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Almohadas adicionales</li>
                                                                        			<li class="item-feature">Cunas permitidas: 1 (bajo solicitud)</li>
	                                                                        		<li class="item-feature">Máximo de cunas permitidas en la Villa: 2</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Baños</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Baño compartido con area de piscina/gimnasio</li>
                                                                        			<li class="item-feature">Ducha</li>
                                                                        			<li class="item-feature">Artículos de tocador de las mejores marcas</li>
                                                                        			<li class="item-feature">Batas: 2</li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">Pantuflas</li>
                                                                        			<li class="item-feature">Secadora de cabello</li>
                                                                        			<li class="item-feature">Espejo de aumento</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Amenidades</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Televisor Led de 42”</li>
	                                                                     			<li class="item-feature">Televisión por cable</li>
	                                                                     			<li class="item-feature">Espejo de cuerpo entero</li>
	                                                                     		</ul>
	                                                                     		<ul class="item-features_list">
	                                                                     			<li class="item-feature">Caja de seguridad</li>
	                                                                     			<li class="item-feature">Base para IPod con reloj despertador</li>
	                                                                     			<li class="item-feature">Plancha y tabla para planchar, bajo solicitud</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Comunicación</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature">Teléfonos: 1</li>
	                                                                     			<li class="item-feature">Servicio telefónico: De habitación a                                                                                                                 habitación, servicio local, nacional e                                                                                                               internacional (a través de VOIP).
                                                                                    </li>
	                                                                     			<li class="item-feature">Llamadas locales, nacionales y a                                                                                                                      Estados Unidos y Canadá gratis.
                                                                                    </li>
	                                                                     			<li class="item-feature">Internet Inalámbrico sin costo.</li>
	                                                                     		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>Servicios en la habitación</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
	                                                                     	<div class="stm_item-features_inner">
	                                                                     		<ul class="item-features_list_extended">
	                                                                     			<li class="item-feature"> Servicio de cortesía nocturna</li>
	                                                                     			<li class="item-feature">Entrega de periódico a la habitación,                                                                                             bajo solicitud (Favor de informar a su anfitrión de villa                                                                                           sobre el periódico de su preferencia, con una semana de                                                                                             anticipación a su llegada, para verificar la                                                                                                         disponibilidad del mismo)
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_5.3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_5.3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_5.1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_5.1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_2.1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_2.1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_5.4_antes_mapa.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_5.4_antes_mapa.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_bedroom_5.2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_bedroom_5.2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                    <!-- /Bedroom 5 -->
                    </article>
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
                        <h2 class="page-title">HABITACIONES</h2>
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">SALA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													La gran puerta exterior se abre para dar acceso al amplio y armonioso  
                                                    espacio en donde se alberga la sala. <strong>El jardín interior, sus inmensos 
                                                    ventanales con vista a la alberca y los jardines, así como su triple 
                                                    altura (12m / 39 pies) nos hacen sentir que estamos afuera, pero con 
                                                    la comodidad del aire acondicionado. </strong>

	                                            </p>
                                                
                                                <p class="paragraph ng-attr-widget">
													La sala de Villa Aqua es el lugar ideal para relajarse escuchando su música 
                                                    favorita, leyendo un libro o simplemente planeando, junto a su familia o 
                                                    amigos, las actividades del día siguiente.<strong> Déjese atrapar por el toque zen 
                                                    que sus espacios y el sonido de la fuente le regalan</strong> , mientras disfruta 
                                                    de la vista desde los confortables sofás.

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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_6.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_6.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/living-spaces/Villa_Aqua_living_room_7_ultima.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_living_room_7_ultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_9_antes_mascaras.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_9_antes_mascaras.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr2" href="/images/overview/living-spaces/Villa_Aqua_dining_room_6.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_dining_room_6.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">COMEDOR</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												<strong>Con un diseño circular vanguardista y espectacular que permite vistas 
                                                de 180° hacia la piscina y el jardín</strong>, este luminoso espacio en Villa Aqua, 
                                                invita a sentarse y deleitarse, junto a su familia y amigos,  los deliciosos 
                                                desayunos y comidas que su chef privado les preparará durante su estancia, 
                                                mientras ven pasar desde coloridas aves tropicales hasta venados de cola 
                                                blanca, iguanas, familias de Coatíes o “Sereques” quienes visitan el jardín 
                                                para alimentarse de frutos y semillas.

                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												Por las noches, el <strong>efecto del moderno candelabro evoca un espectáculo de 
                                                luces que se refleja en las ventanas creando el escenario perfecto para 
                                                saborear una cena inigualable con las especialidades del chef.</strong>


                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												También podrá disfrutar de la barra de café, disponible durante todo 
                                                el día, ya sea para un café espresso por la mañana o bien un relajante 
                                                té por la tarde.
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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">CUARTO DE JUEGOS Y BAR</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												¡Este es uno de los rincones favoritos de nuestros huéspedes!<strong> Por sus 
                                                cómodos sillones, el bar ampliamente surtido y un sinnúmero de amenidades 
                                                para su entretenimiento: comenzando por el Televisor Led de 75”, el teatro 
                                                en casa marca “Bose”, la biblioteca de DVDs y CDs , los juegos de mesa</strong> y 
                                                mucho más, acompañados de la vista a la piscina y los jardines. Este es 
                                                el lugar perfecto para ver los deportes entre amigos, una película en 
                                                familia o bien degustar un cóctel antes de la cena.
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Villa Aqua lo invita a continuar la tradición de nuestro <strong>“Bar de Honor” 
                                                un programa en el que nuestros huéspedes pasados dejan las botellas que 
                                                no se terminaron para que los huéspedes posteriores puedan disfrutar o 
                                                probar un trago.</strong> O bien si prefiere abrir sus propias botellas, contamos 
                                                con una amplia selección de vinos y licores los cuales puede reemplazar 
                                                por una botella igual o pagar las que consuma.
 
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/overview/living-spaces/Villa_Aqua_family_room_bar_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_family_room_bar_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/overview/living-spaces/Villa_Aqua_family_room_new.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_family_room_new.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/overview/living-spaces/Villa_Aqua_family_room_bar_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_family_room_bar_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/overview/living-spaces/Villa_Aqua_family_room_bar_5_4ra_posicion.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_family_room_bar_5_4ra_posicion.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/overview/living-spaces/Villa_Aqua_family_room_bar_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_family_room_bar_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr4" href="/images/overview/living-spaces/Villa_Aqua_library_tv_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_library_tv_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr4" href="/images/overview/living-spaces/Villa_Aqua_library_tv_5_2da_pos.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_library_tv_5_2da_pos.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr4" href="/images/overview/living-spaces/Villa_Aqua_library_tv_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_library_tv_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr4" href="/images/overview/living-spaces/Villa_Aqua_library_tv_4_4ta.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_library_tv_4_4ta.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr4" href="/images/overview/living-spaces/Villa_Aqua_library_tv_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_library_tv_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">SALA DE TV Y BIBLIOTECA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Sin duda uno de los espacios más acogedores de Villa Aqua. 
                                                Relájese en su cómoda sala en donde encontrará una pequeña 
                                                pero interesante <strong>colección de libros</strong> en diferentes idiomas, 
                                                tanto obras literarias como libros acerca de la cultura, 
                                                arquitectura, historia, y la flora y fauna de México.

                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Para los más jóvenes (y a veces no tan jóvenes), este lugar será un 
                                                refugio, ya que podrán escapar un rato de la naturaleza para conectarse 
                                                de nuevo con la tecnología, jugando un poco de X-box o viendo alguna de 
                                                las películas de <strong>nuestra colección de DVDs</strong>, que incluye algunos títulos 
                                                para niños.

                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Nuestros huéspedes encontrarán el lugar ideal para relajarse en este <strong>espacio 
                                                de diseño contemporáneo con aire acondicionado y acceso Wi-Fi.</strong>

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
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">COCINA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												Villa Aqua cuenta con una <strong>cocina gourmet totalmente equipada con 
                                                todos los utensilios, instrumentos y aparatos para sus necesidades culinarias.</strong>

                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Normalmente nuestro chef privado es quien se ocupará de la preparación 
                                                de sus alimentos, pero si usted es un cocinero aficionado o simplemente 
                                                un amante de la comida, lo invitamos ya sea a observar al chef en acción, 
                                                o bien,  aprender una des sus recetas favoritas en una  clase particular 
                                                de cocina.

                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Contacte a su
<a href="/contact-us/" target="_blank">Anfitrión de Villa</a>  para mayor información sobre nuestros Servicios 
                                                de Alimentos, Bebidas y 
                                                <a href="/images/staff-and-services/menu-food-and-beverage.pdf" target="_blank">Menús.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr5" href="/images/overview/living-spaces/Villa_Aqua_kitchen_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_kitchen_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr5" href="/images/overview/living-spaces/Villa_Aqua_kitchen_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_kitchen_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr5" href="/images/overview/living-spaces/Villa_Aqua_kitchen_5_penultima.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_kitchen_5_penultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr5" href="/images/overview/living-spaces/Villa_Aqua_kitchen_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/living-spaces/Villa_Aqua_kitchen_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">Áreas comunes</h2>
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">PISCINA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													<strong>El color cristalino de nuestra piscina privada, 
                                                    es en realidad la razón por la que decidimos llamar 
                                                    a la villa: “Villa Aqua”; ya que su diseño curvo, rodea 
                                                    la casa y adorna cada espacio con una luz natural de 
                                                    tonos azul turquesa.</strong> <br>
                                                    Por sus dimensiones es ideal para dar unas buenas brazadas 
                                                    o bien relajarse por horas y disfrutar de su agua templada 
                                                    casi todo el año!

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Considerada la zona de más acción de la casa, todos se reúnen alrededor 
                                                    de la piscina, ya sea para tomar el sol en los camastros; 
                                                    relajarse en la sala exterior bajo la sombra o bien disfrutar 
                                                    de una rica parrillada al aire libre…
                                                </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
	                                            <div class="wpb_wrapper">
													<div class="stm_item-features">
	                                                	<div class="stm_item-features_inner">
	                                                		<ul class="item-features_list">
	                                                			<li class="item-feature">Longitud de nado 25 m /82 pies</li>
	                                                			<li class="item-feature">Profundidad de la piscina 1.20 m / 4 pies</li>
	                                                		</ul>
	                                                		<ul class="item-features_list">
	                                                			<li class="item-feature">No cuenta con calefacción</li>
	                                                			<li class="item-feature">No cuenta con iluminación subacuática</li>
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_5_penultima.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_5_penultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_6_ultima.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_pool_6_ultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_outdoor_jacuzzi_4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">JACUZZI</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Disfruta del sol o relájate bajo la luz de la luna, 
                                                en el inmenso Jacuzzi con capacidad para 10 personas y calefacción. 
                                                Durante el día, deja que los niños se diviertan convirtiéndolo 
                                                en su chapoteadero personal o simplemente relájense todos con un 
                                                burbujeante masaje después de un intenso día de playa.

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
                                               			<li class="item-feature">Cuenta con iluminación
</li>
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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">HORNO DE LEÑA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												¿Listos para una noche de pizza? Elige tus ingredientes y 
                                                pon manos en la masa o bien deja que el chef se encargue de 
                                                todo para preparar unas deliciosas y crujientes pizzas y pasar 
                                                una noche divertida! O tal vez se les antoje más algo más gourmet, 
                                                como un pescado a la sal o un lechón cocinado lentamente. 
                                                <strong>Cualquiera que sea su antojo, tienen que probar nuestro horno de 
                                                leña y disfrutar de una cena fantástica bajo la luz de las estrellas.</strong>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_wood_fire_oven_new_02.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_wood_fire_oven_new_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_wooden_oven_new.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_wooden_oven_new.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_aqua_outdoor_oven.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_aqua_outdoor_oven.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_gym_new.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_gym_new.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_aqua_fitness.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_aqua_fitness.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_gym_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_gym_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/GYM.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/GYM.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">GIMNASIO Y DEPORTES
</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												En Villa Aqua queremos ayudar a nuestros huéspedes a mantenerse en forma, 
                                                es por eso que ponemos a su disposición nuestro <strong>gimnasio privado con 
                                                cancha de squash</strong>, así como equipo deportivo suficiente para complementar 
                                                una rutina de ejercicios. <br>
                                                Así mismo, contamos con entrenadores profesionales ya sea para una sesión 
                                                única o bien, un programa completo de acondicionamiento 
                                                físico durante su estancia. Podrá relajarse con unas clases privadas de 
                                                yoga o ejercitarse intensamente con nuestro especialista de Crossfit, 
                                                contacte a su <a href="/contact-us/" target="_blank">Anfitrión de Villa</a> para 
                                                programar sus actividades.

                                            </p>
                                            
                                            
                                            
                                            <p class="paragraph ng-attr-widget">
												También contamos con equipo deportivo para divertirse en familia mientras 
                                                disfruta de este paraíso tropical.

                                            </p>
                                        </div>
                                        
                                        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
	                                   	<div class="vc_col-sm-12 wpb_column vc_column_container ">
	                                    	<div class="wpb_wrapper">
												<div class="stm_item-features">
	                                               	<div class="stm_item-features_inner">
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">4 bicicletas (2 para adultos y 2 para niños)</li>
	                                               			<li class="item-feature">Equipo para hacer snorkel (4 tamaños diferentes)</li>
	                                               			<li class="item-feature">Equipo de squash</li>
	                                               			<li class="item-feature">Pesas y bandas elásticas </li>
	                                               			<li class="item-feature">Tapetes para yoga</li>
	                                               			<li class="item-feature">Red y equipo de voleibol y bádminton</li>
	                                               		</ul>
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">Canasta y balón de básquetbol (en el exterior de la casa)</li>
	                                               			<li class="item-feature">Equipo para jugar tocho bandera </li>
	                                               			<li class="item-feature">Petanca</li>
	                                               			<li class="item-feature">Juguetes y accesorios para la piscina </li>
	                                               			<li class="item-feature">Pelotas de fútbol soccer y más…</li>
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
                                        <h2 style="color: #333; font-weight:300;font-style:normal; text-align: right;">SQUASH</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
												No existe otra villa en toda la Riviera Maya que cuente con su 
                                                propia <strong>Cancha de Squash</strong> con aire acondicionado y no hay mejor 
                                                lugar en Villa Aqua, para perder los kilos extras que seguramente 
                                                ganarán tras probar las delicias que nuestro chef privado les preparará!
                                                

                                            </p>
                                            <p class="paragraph ng-attr-widget">
												Aun cuando la cancha no cuenta con las medidas oficiales, es perfecta 
                                                para aprender a jugar, practicar sus habilidades o sólo divertirse 
                                                y sudar.
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
	                                               			<li class="item-feature">Raquetas y pelotas disponibles</li>
                                            				<li class="item-feature">Cuenta con aire acondicionado e iluminación</li>
	                                               			<li class="item-feature">Ancho: 4.80 m / 15.74 pies</li>
	                                               		</ul>
	                                               		<ul class="item-features_list">
	                                               			<li class="item-feature">Largo: 10 m / 32.80 pies</li>
	                                               			<li class="item-feature">Altura: 12 m / 39.37 pies</li>
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_squash_court_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_squash_court_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_squash_court_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_indoor_squash_court_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">Piscina &amp; Exteriores</h2>
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
                                        <h2> ¿QUÉ HACER EN LA VILLA?</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"></div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<p class="paragraph ng-attr-widget">
													Hay tantas cosas por hacer en la Riviera Maya que a 
                                                    veces es difícil encontrar el tiempo para disfrutar 
                                                    de su estancia en Villa Aqua, pero si lo que busca es 
                                                    relajarse y tener tiempo para descansar, entonces puede 
                                                    vacacionar sin poner un pie fuera de la casa.

	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <div class="wpb_wrapper">
                                            	<div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                    
                                                    	<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong>SPA</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">

                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">- Deléitate con los tratamientos  
 <a href="/images/staff-and-services/menu_spa-services.pdf" target="_blank">disponibles en el menú.</a></li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    	<div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>Actividades fuera de Villa Aqua</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	 <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">- Petanca</li>
                                                                        			<li class="item-feature">- Bádminton / Voleibol</li>
                                                                        			<li class="item-feature">- Trampolín hundido</li>
                                                                        			<li class="item-feature">- Tocho bandera (Tochito)</li>
                                                                        			<li class="item-feature">- Básquetbol </li>
                                                                        		</ul>
                                                                        		<ul class="item-features_list">
                                                                        			<li class="item-feature">- Soccer</li>
                                                                        			<li class="item-feature">- Ciclismo</li>
	                                                                        		<li class="item-feature">- Introducción de BUCEO en la piscina*</li>
                                                                        		</ul>
                                                                        	</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>Actividades dentro de Villa Aqua</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="stm_item-features">
                                                                        	<div class="stm_item-features_inner">
                                                                        		<ul class="item-features_list_extended">
                                                                        			<li class="item-feature">- Cancha de Squash</li>
                                                                        			<li class="item-feature">- Gimnasio</li>
	                                                                        		<li class="item-feature">- TVs de pantalla plana </li>
	                                                                        		<li class="item-feature">- Reproductores de DVD</li>
	                                                                        		<li class="item-feature">- Biblioteca de Películas (DVD) y Música (CD)</li>
	                                                                        		<li class="item-feature">- Consola de videojuegos</li>
	                                                                        		<li class="item-feature">- Libros en diferentes idiomas</li>
	                                                                        		<li class="item-feature">- Juegos de mesa</li>
	                                                                        		<li class="item-feature">- Set de póker</li>
	                                                                        		<li class="item-feature">- Ajedrez</li>
	                                                                        		
	                                                                        		<li class="item-feature">Clases privadas:*
	                                                                        			<ul>
	                                                                        				<li class="item-feature">- Instructores (Yoga, Crossfit, Pilates…) </li>
	                                                                        				<li>- Clases de baile (Salsa, Merengue, Tango, Flamenco…)</li>
	                                                                        				<li>- Clases de cocina</li>
	                                                                        				<li>- Clases de español</li>
	                                                                        			</ul>
	                                                                        		</li>
	                                                                        		<li class="item-feature">- Entretenimiento musical en vivo (Mariachi, Trio, Marimba, guitarristas…)*</li>
	                                                                        		<li class="item-feature">- Eventos privados (Bodas / Experiencias Épicas Villa Aqua/ Retiros Corporativos…) *</li>
                                                                                    <li class="item-feature">-Servicios de SPA</li>
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
                                            
                                            <p style="text-align: right; "><i>*Aplican costos extra</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper  ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_primera_pos.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_primera_pos.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_2da.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_2da.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_4.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_4.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/pool-and-outdoor/what-to-do/Villa_Aqua_gym_new.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/pool-and-outdoor/Villa_Aqua_gym_new.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                        
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_services_extra_cost_spa.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_services_extra_cost_spa.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_3.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_3.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_aqua_what_to_do_3.1.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_aqua_what_to_do_3.1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <!-- <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/what-to-do/Villa_Aqua_What_to_do_5.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/overview/what-to-do/Villa_Aqua_What_to_do_5.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                         -->
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
                        <h2 class="page-title"> Qué hacer en la villa? </h2>
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
                            <a href="#" class="active" data-filter="all">Todo</a>
                            <a href="#" data-filter="included">Incluido</a>
                            <a href="#" data-filter="at-extra">Con costo extra</a>
                        </div>
                    </div>
                    <div class="rental-services-grid">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/incluidos/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_villa_host.jpg" class="attachment-full wp-post-image" alt="Exellent-view" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">ANFITRIÓN DE VILLA</div>
                                        <div class="rs-item_price">Incluido</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/incluidos/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_chef.jpg" class="attachment-full wp-post-image" alt="Berth" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Chef</div>
                                        <div class="rs-item_price">Incluido</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/incluidos/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_housekeeping.jpg" class="attachment-full wp-post-image" alt="Big-Yacht" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">SERVICIO DE LIMPIEZA</div>
                                        <div class="rs-item_price">Incluido</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 included">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/incluidos/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_included_mantainance.jpg" class="attachment-full wp-post-image" alt="Villas-near-the-beach" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">MANTENIMIENTO</div>
                                        <div class="rs-item_price">Incluido</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/con-costo-extra/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_not_included_food_&_beverage.jpg" class="attachment-full wp-post-image" alt="Over-the-Sea" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">ALIMENTOS Y BEBIDAS </div>
                                        <div class="rs-item_price">Con costo Extra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/con-costo-extra/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_extra_cost_spa.jpg" class="attachment-full wp-post-image" alt="Above-the-clouds" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">Spa</div>
                                        <div class="rs-item_price">Con costo Extra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/con-costo-extra/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_Aqua_services_not_included_transportation.jpg" class="attachment-full wp-post-image" alt="Ready-to-way" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">TRANSPORTACIÓN</div>
                                        <div class="rs-item_price">Con costo Extra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 at-extra">
                            <div class="rental-service_item">
                                <div class="rs-item_inner">
                                    <div class="rs-item_actions">
                                        <a class="rs-item_action_link" href="/es/con-costo-extra/"><i class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="rs-item_content"><img width="570" height="446" src="/images/staff-and-services/Villa_aqua_entertainment.jpg" class="attachment-full wp-post-image" alt="Stylish-convertible" />
                                    </div>
                                    <div class="rs-item_caption">
                                        <div class="rs-item_title">ENTRETENIMIENTO</div>
                                        <div class="rs-item_price">Con costo Extra</div>
                                        
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
                        <h2 class="page-title">Servicios & Staff </h2>
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
             	<h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">SERVICIOS INCLUIDOS</h2> 
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
                                                    <strong>Villa Aqua es reconocida no solo por sus instalaciones 
                                                        de lujo y su arquitectura moderna, sino por sus servicios 
                                                        excepcionales y el personal atento y dedicado </strong> quienes 
                                                    harán de sus renta vacacional una experiencia única e inolvidable.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Ya sea  para ayudarle a vivir unas vacaciones familiares de ensueño en el 
                                                    Caribe, para escaparse con los amigos en un viaje lleno de lujos y excentricidades, 
                                                    un viaje corporativo inspirador, una escapada romántica a la playa o simplemente un 
                                                    fin de semana para alejarse de la monotonía del trabajo, nuestro equipo se ocupará 
                                                    de cada detalle y se encargará de consentirlos, para que disfruten aún más de sus 
                                                    vacaciones. 

                                            </p>
                                            <br />
                                                <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>SU RENTA EN VILLA AQUA INCLUYE:

                                                </span>
                                            </p>
                                        </div>

                                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
												<div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">1 Traslado Aeropuerto-villa-aeropuerto gratuito (con la renta de 4 o más noches)</li>
                                                			<li class="item-feature">Snack de Bienvenida de cortesía</li>
                                                			<li class="item-feature">Anfitrión de Villa / Conserje 24/7 (visitas diarias y asistencia telefónica durante la noche)</li>
                                                			<li class="item-feature">Chef Profesional y Asistente de cocina (todos los días de 8am a 4pm)*</li>
                                                			<li class="item-feature">Servicio de limpieza / 2 camaristas, diario (de 9 am a 4 pm)
</li>
                                                			<li class="item-feature">Servicio de Mantenimiento (cuando se requiera) 
</li>
                                                			<li class="item-feature">Internet inalámbrico sin costo
</li>
                                                			<li class="item-feature">Llamadas locales, Nacionales, a Estados Unidos y a Canadá gratis</li>
	                                                 		<li class="item-feature">Agua embotellada el día de su llegada (2 botellas por habitación) </li>
	                                                 		<li class="item-feature">Servicio de Bar de Honor (limitado a botellas abiertas)
</li>
                                                		</ul>
                                                		<p><i>*No incluye servicio de preparación de bebidas (bartender).
</i></p>
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
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">ANFITRIÓN DE VILLA</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Desde el momento en el que se completa el trámite de su reservación,<strong> se le 
                                                    asignará un Anfitrión de Villa bilingüe, quien le ayudará con todos los arreglos 
                                                    previos a su llegada, desde la planeación de los alimentos, organización de 
                                                    actividades y transportación hasta intentar cumplir solicitudes excéntricas o 
                                                    caprichos especiales, que convertirán en realidad sus vacaciones soñadas. </strong>
                                                    
                                                    Su Anfitrión de Villa responderá cualquier duda acerca de la villa y sus 
                                                    instalaciones, así como de Playa del carmen y sus alrededores. 

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Desde su llegada,  le ayudará a instalarse en Villa Aqua para asegurarse 
                                                        de que comience a disfrutar sus vacaciones tan pronto como sea posible.
                                                    </strong>
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>El Anfitrión de Villa Aqua lo orientará respecto a los mejores 
                                                        restaurantes, boutiques, guías y choferes en la zona.</strong> 
                                                    También podrá recomendarle los mejores lugares para realizar deportes 
                                                    acuáticos, pesca, paseos en Yate, además de sugerirle miles de ideas 
                                                    para mantener a los niños siempre felices; desde llevarlos a una tirolesa, 
                                                    hasta dar un paseo en Kayak.<br>
                                                    En Villa Aqua queremos compartir con usted todo lo que México tiene para 
                                                    ofrecer, incluyendo su increíble cultura, su espectacular historia, su 
                                                    comida y sus maravillas naturales; para que aproveche al máximo sus 
                                                    vacaciones en la Riviera Maya. 

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Contacte a su <a href="/contact-us/" target="_blank">Asistente de 
                                                    Villa</a>, quien le atenderá con gusto.
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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">CHEF Y ASISTENTE DE COCINA
</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    En Villa Aqua sabemos que los alimentos son parte esencial en la experiencia 
                                                    de una  <strong> renta vacacional de lujo, por esta razón, contamos con Servicio 
                                                    de Chef Profesional y Asistente de Cocina para el desayuno y el almuerzo 
                                                    (8am a 4pm). </strong> Descubra nuestra variedad de platillos preparados con 
                                                    ingredientes frescos de la región y cocinados con hierbas aromáticas, especias, 
                                                    vegetales y frutos del Caribe Mexicano.

                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Considerando que muchos de nuestros huéspedes prefieren explorar las múltiples 
                                                    propuestas gastronómicas que Playa del Carmen ofrece, decidimos no incluir el 
                                                    servicio de chef para cenas, sin embargo, si usted prefiere cenar en la villa, 
                                                    podemos ofrecerle este servicio con cargo adicional. Podrá disfrutar desde 
                                                    parrilladas bajo las estrellas hasta nuestras afamadas<strong>
                                                    <a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank"> 
                                                    Experiencias Épicas,</a></strong> las cuales incluyen música y entretenimiento; 
                                                    estamos seguros que no se arrepentirá de no haber salido de casa.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Por favor,<strong> considere que el servicio que ofrecemos es de 
                                                    “Estilo Familiar”, es decir, que a todos los comensales se les 
                                                    sirve el mismo menú.</strong> Es muy importante que comunique a su 
                                                    Anfitrión de Villa y/o chef sobre cualquier alergia o restricciones/preferencias 
                                                    alimenticias antes de su llegada, de esta forma personalizamos la preparación 
                                                    de sus alimentos.

                                                </span>
                                            </p>
                                           
                                           <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   Contacte a su <a href="/es/contacto/" target="_blank">                                                                                           Anfitrión de Villa</a> para cualquier duda sobre el servicio de alimentos.
  
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
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">SERVICIO DE LIMPIEZA</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   En Villa Aqua sabemos lo importante que es relajarse durante las 
                                                    vacaciones, por ello y para su comodidad,</strong> ofrecemos Servicio de Camarista diario.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   Nuestro eficiente personal de limpieza estará pendiente en todo momento de cubrir
                                                    meticulosamente las necesidades de nuestros huéspedes y se asegurará de que<strong>  
                                                    la villa esté impecable.</strong> Al final de la 
                                                    tarde, se proporciona el servicio de cortesía nocturna.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong> El Servicio de Lavandería tiene un costo extra.</strong> Tome en cuenta 
                                                    también que el Servicio de Tintorería es externo, por lo que sus prendas pueden 
                                                    tardar unos cuantos días en ser entregadas. 

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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">MANTENIMIENTO</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    El personal de mantenimiento de Villa Aqua es el responsable de 
                                                    mantener la casa en óptimas condiciones. Sus tareas van desde la 
                                                    limpieza de la piscina y el jacuzzi, hasta el mantenimiento de 
                                                    los jardines, para que todo esté impecable.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Ellos trabajan discretamente para cubrir las necesidades de mantenimiento 
                                                    de la propiedad; ya sea como parte de sus tareas diarias o situaciones 
                                                    imprevistas que pueden surgir, siempre asegurándose que todo en Villa 
                                                    Aqua funcione adecuadamente.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Todo nuestro personal cuenta con uniforme para que pueda reconocerlo

                                                </span>
                                            </p>
                                                
                                                
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    <strong>Si algo en la casa no funciona apropiadamente, favor de informar a 
                                                        su Anfitrión de Villa quien intentará resolver cualquier inconveniente lo 
                                                        antes posible.


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
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/con-costo-extra/" title="" target="_self">MAS SERVICIOS</a>
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
                        <h2 class="page-title">Servicios &  Staff</h2>
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
             	<h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">SERVICIOS CON COSTO EXTRA </h2>
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
                                                			<li class="item-feature"> Alimentos y Bebidas</li>
                                                			<li class="item-feature">Surtido de Vinos y licores (aplican cargos) </li>
                                                			<li class="item-feature">Servicio de compra y surtido de alimentos previo a su llegada y durante su estancia (cargo de entrega: 20%)</li>
                                                			<li class="item-feature">Servicios de chef para la cena </li>
                                                			<li class="item-feature">Bartender </li>
                                                			<li class="item-feature">Mesero</li>
                                                			<li class="item-feature">Servicios de Spa </li>
                                                			<li class="item-feature">Personal de servicio extra </li>
                                                 			<li class="item-feature">Servicio de Lavandería y Tintorería</li>
                                                 			<li class="item-feature">Niñera</li>
                                                 			<li class="item-feature">Chofer y renta de autos </li>
                                                            <li class="item-feature">Transportación privada y taxis </li>
                                                 			<li class="item-feature"><strong><a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">Experiencias Épicas Villa Aqua</a></strong></li>
                                                 			<li class="item-feature">Entretenimiento </li>
                                                 			<li class="item-feature">Tours y Actividades</li>
                                                		</ul>
                                                		<p><i>*Contacte a su <a href="/contact-us/" target="_blank">Villa Host</a> para más información y precios</i></p>
                                                        
       
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
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">ALIMENTOS Y BEBIDAS</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    El costo de alimentos y bebidas no está incluido en su Renta Vacacional 
                                                    de Lujo en Villa Aqua. Si usted prefiere visitar los supermercados locales 
                                                    y tiendas de autoservicio, puede traer sus compras y pedirle al chef que 
                                                    prepare su platillo favorito, pero si lo que busca es disfrutar de sus 
                                                    vacaciones al máximo, le recomendamos que permita que el chef se ocupe de 
                                                    todo, ya que el contar con los mejores proveedores de los ingredientes más 
                                                    frescos, hará una gran diferencia al momento de preparar sus alimentos.

                                            </p>
                                        </div>
                                        
                                        <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <div class="wpb_wrapper">
                                            	<div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>SERVICIO DE COMPRA Y SURTIDO DE VÍVERES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        
                                                                        <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                   Aproveche nuestro Servicio de compra de víveres y 
                                                                                permítanos surtir su alacena por usted. Lo único 
                                                                                que tiene que hacer es llenar la Lista de Compra de 
                                                                                Víveres y nosotros los compraremos y los llevaremos 
                                                                                a la villa antes de su llegada o durante su estancia. 
                                                                                Este servicio tiene un costo extra del 20%, mismo que 
                                                                                deberá pagar al final de su estancia. (Por el momento 
                                                                                <strong>no aceptamos Tarjetas de Crédito, por lo que le pedimos                                                                                             atentamente tener listo su pago en efectivo)
                                                                                </strong>

							                                                </span>
							                                            </p>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong style="text-transform: uppercase;">PRODUCTOS ORGÁNICOS Y LOCALES</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Si usted es alguien consciente de su alimentación y está                                                                                           interesado en opciones saludables con productos orgánicos 
                                                                                y de producción local (fruta, hierbas, vegetales, huevo, 
                                                                                carne y pollo), por favor comuníquelo al chef, quien intentará                                                                                      conseguir la mejor opción para usted. Por favor, tome en cuenta,                                                                                  que estos productos están sujetos a disponibilidad.

							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">ALERGIAS Y RESTRICCIONES ALIMENTICIAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                   Es de suma importancia que nos haga saber acerca de cualquier                                                                                      alergia, restricción o preferencia alimenticia antes de su llegada,                                                                                para poder personalizar la preparación de sus alimentos.
                                                                            </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">SERVICIO ESTILO FAMILIAR</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h6></h6>
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Aun cuando Villa Aqua cuenta con un chef profesional, es                                                                                           importante que considere que está en una “casa” no en un                                                                                           restaurante o un hotel. El servicio que ofrecemos es “Estilo                                                                                       Familiar”, donde usted elije un mismo menú para todos los 
                                                                                miembros comensales. Podemos hacer excepciones para los niños, o                                                                                   personas con alergias o restricciones alimenticias.
                                                                               <br>
                                                                                Tome en cuenta que el chef y el asistente de cocina están                                                                                         encargados tanto de comprar los víveres, preparar y servir los                                                                                     alimentos, así como de hacer la limpieza de lo que esto conlleva.                                                                                  Hacemos lo posible por atender a nuestros huéspedes como se                                                                                         merecen, sin embargo no contamos con un servicio formal. Si                                                                                     requiere de este tipo de servicio, por favor pregunte a su                                                                                          Anfitrión de Villa acerca de las opciones disponibles (mesero,                                                                                      bar tender, etc.) y costos.

                                                                            </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">BEBIDAS</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    Villa Aqua cuenta con una gran variedad de vinos y licores.                                                                                      Nuestros huéspedes pueden pagar por las botellas que abran y                                                                                        consuman, o bien, reemplazarlas antes de su partida.<br>

                                                                                Aun cuando el personal de la villa puede preparar cócteles en                                                                                     cierto momento, a veces resulta complicado, sobretodo durante el                                                                                   proceso de preparación de los alimentos. Si usted requiere                                                                                         servicio de bar personalizado durante su estancia, le recomendamos                                                                                 ampliamente, contrate el servicio de bartender. Por favor contacte                                                                                 a su Anfitrión de Villa para obtener mayor información acerca del                                                                                 servicio y sus costos.

							                                                </span>
							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#drag-drop-builder"><strong style="text-transform: uppercase;">MENÚ</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
							                                            <p class="paragraph ng-attr-widget">
							                                                <span class="ng-directive ng-binding" style="">
							                                                    <a href="/images/staff-and-services/menu-food-and-beverage.pdf" target="_blank">Este menú,</a> 
							                                                    es una muestra de algunos de los platillos que su 
                                                                                chef puede preparar durante su estancia en Villa Aqua.                                                                                              Generalmente recomendamos que nuestros huéspedes programen,                                                                                         por lo menos, el menú para los primeros dos días. A su llegada                                                                                      podrán planear el resto de sus alimentos junto con el chef.
                                                                                

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
                        <div class="vc_row wpb_row vc_row-fluid top-margin horizontal-block">
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
                                               	 En el menú de nuestro Spa encontrará masajes relajantes, faciales y otros tratamientos 
                                                de belleza.
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                               	 En el  <a href="/images/staff-and-services/menu_spa-services.pdf" target="_blank">menú de 
                                                 nuestro Spa</a> encontrará masajes relajantes, faciales y otros tratamientos 
                                                de belleza. 
                                                    
                                                Villa Aqua cuenta con terapeutas, tanto del sexo masculino como del sexo femenino, 
                                                que podrán aplicar los tratamientos que elija, desde la comodidad de su habitación 
                                                o bien al aire libre.

                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                               	 Contacte su <a href="/contact-us/" target="_blank">Anfitrión de Villa para más información
                                                o reservas.</a> Recomendamos ampliamente reservar con al menos 24 horas de anticipación para
                                                garantizar la disponibilidad de los servicios.
                                      
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
                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">TRANSPORTACIÓN</h2>
                                    </div>
                                    
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Villa Aqua ofrece 1 (un) traslado aeropuerto-villa-aeropuerto 
                                                    incluido en rentas de 4 noches o más para su comodidad.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Moverse alrededor de Playa del Carmen desde Villa 
                                                    Aqua es muy sencillo, ya que estamos a unos minutos 
                                                    caminando del centro y la playa, o bien, llamar a un taxi, 
                                                    demora unos 15 minutos en llegar a la villa, pero sí en sus 
                                                    planes está visitar la Riviera Maya y aprovechar todas las 
                                                    cosas increíbles que este paraíso tropical ofrece, entonces 
                                                    le recomendamos ampliamente que considere rentar un auto o 
                                                    contratar servicio de chofer con transportación privada para 
                                                    su estancia. 

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   Contacte a su <a href="/contact-us/" target="_blank">Anfitrión de Villa 
                                                    para conocer las </a> opciones y costos.
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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">ENTRETENIMIENTO</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   ¿Si le preocupa aburrirse durante su estancia en Villa Aqua? 
                                                    Despreocúpese! ya que contamos con una buena variedad de actividades 
                                                    tanto dentro, como fuera de la villa. Comenzando con la cancha privada 
                                                    de squash, un gimnasio totalmente equipado, el trampolín hundido, 
                                                    jacuzzi al aire libre, red de voleibol / bádminton, equipo para hacer 
                                                    snorkel, bicicletas, equipos de sonido en interior y exterior, pantallas 
                                                    planas y bases para IPod en cada habitación, consola de juegos (Xbox), 
                                                    Teatro en casa, Apple TV-Netflix, biblioteca de música y películas, 
                                                    un bar bien surtido, juegos de mesa y mucho más… <br>
                                                    Esto sin tomar en cuenta la infinidad de atracciones que encontrará en 
                                                    los alrededores de Playa del carmen, como actividades acuáticas únicas, 
                                                    visitas a sitios arqueológicos,  parques ecoturísticos, o simplemente 
                                                    salir a dar un paseo para ir de compras o a cenar a unos cuantos pasos 
                                                    de la casa. <br>
                                                    Y si esto no fuera suficiente… incluso podemos traer más diversión a 
                                                    Villa Aqua, ya que contamos con músicos, artistas diversos y hasta 
                                                    instructores que podrán enseñarle a bailar, cocinar comida mexicana 
                                                    y hasta bucear!

 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    ¡Las opciones son infinitas! ¡Usted sólo piense en lo que le gustaría 
                                                    hacer y nuestro  hará <a href="/contact-us/" target="_blank">Anfitrión 
                                                    de Villa</a> hasta lo imposible para hacer que suceda!
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
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/incluidos/" title="" target="_self">MAS SERVICIOS</a>
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
                        <h2 class="page-title">Servicios & Staff</h2>
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
                <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">CÓMO LLEGAR</h2>
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
                                                    Es muy fácil llegar a la Riviera Maya ya que el Aeropuerto Internacional de Cancún 
                                                    (código CUN) ubicado a 52 km al norte de Villa Aqua (Playa del Carmen), brinda 
                                                    servicio a la mayoría de las principales Aerolíneas Internacionales, con vuelos 
                                                    directos y continuos desde prácticamente todas las partes del mundo. 
                                                </span>
                                            </p>

                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    El Aeropuerto de Cozumel (código CZM) también puede considerarse para llegadas 
                                                    tanto nacionales como internacionales a esta región, pero se debe tomar en 
                                                    cuenta que se encuentra en la isla de Cozumel y será necesario hacer un viaje 
                                                    de 30 minutos (aprox.) en ferry para llegar a Playa del Carmen,  además de un 
                                                    taxi, que tomará otros 5 minutos, del muelle a Villa Aqua.

                                                </span>
                                            </p>

                                            

                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    AEROPUERTO INTERNACIONAL DE CANCÚN:
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
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_Playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_Playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/playacar-view_2.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/playacar-view_2.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_03_playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_03_playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_04_playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_04_playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_05_playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_05_playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_06_playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_06_playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/location-info/Villa_Aqua_Location_info_06.5_playacar.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/location-info/Villa_Aqua_Location_info_06.5_playacar.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
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
                                                    Playacar es un lujoso complejo residencial localizado justo al sur de 
                                                    Playa del Carmen, a unos 40 minutos del Aeropuerto Internacional 
                                                    de Cancún.

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
                                                   Playacar es el lugar ideal para los que desean tener un poco de todo en sus vacaciones. 
                                                    El fraccionamiento se encuentra dividido en dos fases: Fase I,  se encuentra frente 
                                                    al mar; mientras que la Fase II, en donde se encuentra Villa Aqua, rodea un campo 
                                                    de golf de 18 hoyos, diseñado por Robert Von Hagge, y aloja resorts de lujo, residencias
                                                    privadas y un par de centros comerciales.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    El aviario Xaman-Ha también está ubicado dentro de Playacar Fase II, y alberga 
                                                    a más de 200 animales de 45 especies diferentes, entre aves, mariposas, iguanas 
                                                    y pequeños mamíferos.

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                   También encontrará vestigios arqueológicos tanto en Playacar Fase I como en la II.
 
                                                </span>
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                  Villa Aqua se localiza muy cerca de las hermosas playas de Playacar Fase I y 
                                                    del centro de Playa del Carmen, por lo que nuestros huéspedes sólo tienen 
                                                    que dar un breve paseo caminando o bien tomar un taxi que los llevará en 
                                                    un par de minutos.
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
                                                    Ubicada en el corazón de la Riviera Maya a sólo 50 km al sur del Aeropuerto 
                                                    Internacional de Cancún, Playa del Carmen es reconocida como uno de los mejores 
                                                    destinos turísticos del mundo.  <br>
                                                    Playa, como todos le dicen, tiene todo lo que se necesita para pasar unas 
                                                    vacaciones inolvidables en el Caribe, desde playas de arena blanca, impresionantes 
                                                    campos de golf, infinidad de opciones de actividades acuáticas, tours ecoturísticos
                                                    y de aventura, centros recreativos y culturales, así como una amplia gama de 
                                                    restaurantes que ofrecen experiencias culinarias únicas, tiendas para ir de compras,
                                                    y por supuesto, su increíble vida nocturna.
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Después de pasar un día en la playa, no olvide dar un paseo por la Quinta Avenida, 
                                                    en donde siempre encontrará algo que ver, comprar o comer. La Quinta es un lugar 
                                                    muy seguro y su atmósfera cosmopolita, llena de vida y armonía, es adornada por 
                                                    las multitudes de visitantes y locales; por las tardes, en esta alegre calle se 
                                                    puede escuchar a los músicos que entretienen a los comensales en los múltiples 
                                                    restaurantes y bares que van desde los típicos tacos mexicanos, hasta restaurantes 
                                                    cinco estrellas que ofrecen desde comida internacional hasta cocina tradicional Maya.<br>
                                                    Conforme cae la noche, la Quinta se convierte en el escenario perfecto en el que el rock, 
                                                    la salsa y el reggae atrae mágicamente a los visitantes hacia los bares y clubes 
                                                    nocturnos. 
                                                    Los clubes de playa también entran en acción de noche organizando fiestas que duran 
                                                    hasta el amanecer.<br>
                                                    Villa Aqua se encuentra a sólo unos minutos de toda esta diversión, sólo hay 
                                                    que dar un paseo caminando desde Playacar, un lujoso complejo residencial con 
                                                    campo de golf, hoteles todo incluido y residencias privadas. 
                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Un viaje de media hora en ferry conecta a Playa del Carmen  con la isla de Cozumel, 
                                                    una excelente opción para pasar el día y en donde podrá bucear, practicar snorkel 
                                                    o visitar sitios arqueológicos, parques ecológicos y cenotes. 

                                                </span>
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                    Ya sea que desee relajarse, sumergirse en la abundancia cultural de la Riviera 
                                                    Maya o realizar actividades llenas de adrenalina, Playa del Carmen es una opción 
                                                    llena de posibilidades que definitivamente hará que sus vacaciones en el Caribe 
                                                    excedan sus expectativas.

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
							<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/riviera-maya/" title="" target="_self">CONOZCA MAS ACERCA DE LA RIVIERA MAYA</a>
						</div>
						<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
						<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
						
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                        <h5>Distancia desde Villa Aqua a: </h5>
                        <br />
                        	<div class="vc_col-sm-6 wpb_column vc_column_container "> 
                        		<div class="wpb_wrapper">
	                                <div class="wpb_text_column wpb_content_element ">
	                                    <div class="wpb_wrapper">
	                                    	
	                                        <table class="table table-striped">
	                                            <thead>
	                                                <tr>
	                                                    <th>Destino</th>
	                                                    <th>Km</th>
	                                                    <th>Miles</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th>Aeropuerto de Cancún</th>
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
	                                                    <th>Destino</th>
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
                        <h2 class="page-title">Información del destino</h2>
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
                                            La Riviera Maya se encuentra en el estado de Quintana Roo, México, 
                                            en la famosa Península de Yucatán. Se extiende a lo largo de la costa 
                                            de Punta Brava, hasta el pueblo de Punta Allen y recorre cerca de 120 
                                            km abarcando los Municipios de “Solidaridad” (Playa del Carmen) y Tulum. 
                                            Colinda al Este con las cristalinas aguas color turquesa del Mar Caribe 
                                            y al Oeste con la exuberante vegetación y la abundante y diversa fauna 
                                            de la región; sus formaciones geológicas y sitios arqueológicos, esconden 
                                            vestigios impresionantes de la ancestral civilización Maya, y son el lugar 
                                            ideal para disfrutar de las mejores vacaciones junto al mar.

                                        </div>
                                        <!-- .entry-content -->
                                    </div>

                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>IDIOMA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				El idioma oficial en México es el español. En esta 
                                                                                    región la población indígena habla la lengua maya, 
                                                                                    pero en la Riviera Maya, que es un destino turístico 
                                                                                    muy popular, es muy común que las personas hablen 
                                                                                    inglés e incluso otros idiomas.

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>MONEDA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				La moneda oficial de México es el peso mexicano. 
                                                                                    El tipo de cambio está entre los 14 y 17 pesos por 
                                                                                    dólar estadounidense, pero varía de acuerdo con las
                                                                                    fluctuaciones en el mercado de divisas extranjeras. Sin
                                                                                    embargo, la mayoría de los lugares y comercios en la 
                                                                                    Riviera Maya y Cancún, aceptan pagos con dólares 
                                                                                    americanos y tarjetas de crédito. <BR>
                                                                                    Cerca de Villa Aqua existen varias casas de cambio y 
                                                                                    bancos en donde cambiar divisas, generalmente las primeras
                                                                                    tienen un mejor tipo de cambio, pero es probable que haya 
                                                                                    que esperar un largo rato en la fila para ser atendido, y
                                                                                    usualmente solicitan documentación. También es importante
                                                                                    tener en cuenta que algunas casas de cambio no algún tipo de
                                                                                    monedas, por ejemplo, si necesita cambiar Euros, generalmente
                                                                                    deberá traer consigo su pasaporte.

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CLIMA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				La temperatura promedio en la Riviera Maya es de 
                                                                                    entre 24 y 25 °C (75-77 °F), pero puede alcanzar los 
                                                                                    35-40 °C durante el verano. Generalmente el clima es 
                                                                                    cálido y húmedo, y las temperaturas más altas, se 
                                                                                    registran entre los meses de mayo y agosto con frecuentes
                                                                                    lluvias por la noche. El clima es predominantemente lluvioso
                                                                                    en la temporada de mayo a noviembre, y en la temporada seca
                                                                                    predominan los vientos del norte, que usualmente se 
                                                                                    presentan en los meses de enero y febrero, cuando el clima 
                                                                                    es soleado y fresco.<BR>
                                                                                    Las aguas freáticas, y por lo tanto las aguas de los
                                                                                    “Cenotes”, tienen una temperatura de 25 °C (77 °F) durante
                                                                                    todo el año. Mientras que la temperatura de las aguas de la
                                                                                    costa va desde los 26 °C (79 °F) hasta  los 29 °C (84 °F) 
                                                                                    en agosto.
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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>HORA LOCAL</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				En la Riviera Maya aplica el Horario Estándar del Este 
                                                                                    o EST UTC/GMT-5 horas. El horario en la zona se adapta 
                                                                                    en base al ciclo solar, por lo que ha tenido cambios
                                                                                    constantes en los últimos años; por esta razón, recomendamos
                                                                                    informarse sobre el horario actual antes de realizar su 
                                                                                    viaje. 

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>AGUA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				El agua de la llave y las regaderas en Villa Aqua es agua
                                                                                    tratada y suavizada, sin embargo no recomendamos que la beba
                                                                                    directamente del grifo, ya que contiene muchos minerales que
                                                                                    su estómago podría no tolerar. Por favor, beba agua
                                                                                    embotellada o sírvase de los garrafones que proporcionamos en
                                                                                    la cocina de la villa (sin costo). Ayúdenos a cuidar el agua
                                                                                    de la región, no desperdiciando y usando sólo la necesaria.
                                                                            
					                                                			</li>
					                                                			
					                                                			<li class="item-feature">
					                                                				Si come fuera de la casa, no se preocupe, prácticamente todos
                                                                                    los restaurantes en Playa del Carmen sirven sólo agua
                                                                                    purificada y utilizan hielos con agua pura. Sin embargo, si 
                                                                                    va a pasar el día en la playa o visitando los diversos
                                                                                    atractivos turísticos de la región, le recomendamos que lleve
                                                                                    consigo agua embotellada o que compre y beba únicamente
                                                                                    bebidas en botella.
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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>ELECTRICIDAD</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				En México se utiliza el voltaje convencional de 110/220, 
                                                                                    igual que en Estados Unidos. La electricidad es muy costosa 
                                                                                    en la Riviera Maya, por lo que le rogamos procurar mantener
                                                                                    todas las puertas y ventanas cerradas mientras usa el aire
                                                                                    acondicionado. Si no sigue esta recomendación, tomará más
                                                                                    tiempo enfriar las habitaciones y la casa.

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>INSECTOS Y FAUNA LOCAL</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Playa del Carmen es un destino turístico tropical y eso
                                                                                    implica que haya mucha humedad y en  algunas épocas del año
                                                                                    proliferan los mosquitos, por lo que recomendamos siempre
                                                                                    tenga a la mano repelente. De igual manera, esta región cuenta
                                                                                    con una exuberante vida salvaje y aunque Villa Aqua está
                                                                                    ubicada en una zona poblada, todavía es posible encontrar
                                                                                    grandes iguanas, ardillas, mamíferos endémicos de la zona, 
                                                                                    así como aves exóticas y varios tipos de insectos.

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CAJEROS AUTOMÁTICOS (ATM)</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Playa del Carmen cuenta con varios cajeros automáticos 
                                                                                    (ATM) de diferentes bancos internacionales en donde podrá
                                                                                    retirar pesos mexicanos. Existen también algunos que disponen
                                                                                    de dólares americanos, pero tome en cuenta que en ocasiones
                                                                                    pueden cargarle doble comisión, una por parte del banco en
                                                                                    donde retire y otra por parte de su banco.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Si va a salir de la ciudad, considere llevar con usted
                                                                                    suficiente efectivo, ya que en las áreas rurales no es común
                                                                                    encontrar cajeros automáticos o incluso lugares o comercios
                                                                                    que acepten tarjetas de crédito.
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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>PASAPORTE & VISA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                    <h6>Sólo para los ciudadanos estadounidenses: :</h6> 
                                                                    <div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Desde el año 2007, TODAS las personas, incluyendo los
                                                                                    ciudadanos estadounidenses, que viajen por avión entre Estados
                                                                                    Unidos, Canadá, México, Centro América, América del Sur, el
                                                                                    Caribe y las Bermudas, deberán presentar un Pasaporte vigente,
                                                                                    una tarjeta Air NEXUS, una tarjeta de marino mercante del
                                                                                    Servicio de Guardacostas de los Estados Unidos o una tarjeta
                                                                                    de registro de extranjero, Forma I-551, en caso de ser
                                                                                    aplicable.<br> 
                                                                                    Si viaja por mar o por tierra (incluyendo ferris), TODAS las
                                                                                    personas, incluyendo ciudadanos estadounidenses, deberán
                                                                                    presentar un Pasaporte vigente u otro documento, tal como lo
                                                                                    determina el Departamento de Seguridad Nacional. 
					                                                			</li>
					                                                		</ul>
					                                                	</div>
					                                                </div>
                                                                  
                                                                    <h6>Otros Países: </h6> 
                                                                    <div class="stm_item-features">
					                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Si es ciudadano de Andorra, Argentina, Australia, Austria,
                                                                                    Bélgica, Canadá, Chile, Costa Rica, la República Checa,
                                                                                    Dinamarca, Finlandia, Francia, Alemania, Gran Bretaña, Grecia,
                                                                                    Hungría, Irlanda, isla, Israel, Italia, Japón, Liechtenstein,
                                                                                    Luxemburgo, Mónaco, Países Bajos, Nueva Zelanda, Noruega,
                                                                                    Polonia, Portugal, Puerto Rico, San Marino, Singapur,
                                                                                    Eslovenia, España, Corea del sur, Suecia, Suiza, Estados
                                                                                    Unidos, Uruguay o Venezuela, no necesita visa para entrar a
                                                                                    México, aunque deberá presentar un Pasaporte vigente y llenar
                                                                                    un formato de inmigración para turistas y viajes de negocios,
                                                                                    la cual puede obtener en las agencias de viajes, aerolíneas o
                                                                                    en el punto de entrada a México. 
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				El oficial de inmigración en el punto de entrada a México
                                                                                    también puede solicitar que demuestre que cuenta con fondos
                                                                                    suficientes para su estadía y un boleto de regreso a su país. 
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Si usted es ciudadano de cualquier otro país, necesitará ir al
                                                                                    Consulado mexicano para solicitar una visa.
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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>IMPUESTOS Y PROPINAS</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				En Riviera Maya, Quintana Roo, al igual que en el resto del
                                                                                    país, existe un impuesto IVA (impuesto al valor agregado) del
                                                                                    16%, que se añade a la mayoría de los productos y servicios.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Dar propinas es muy común en México. El monto o porcentaje es
                                                                                    totalmente opcional y debe basarse en la calidad del servicio
                                                                                    recibido. Las propinas para el personal de servicio de Villa
                                                                                    Aqua (chef, ayudante de cocina, camaristas, meseros,
                                                                                    mantenimiento, anfitrión de villa, etc...) no están incluidos
                                                                                    en el costo del alquiler de la casa.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                			
					                                                				A continuación encontrará una guía o sugerencia sobre montos 
                                                                                    o porcentajes estándar y el tipo de proveedores que esperan
                                                                                    recibir una gratificación por sus servicios:

					                                                			</li>
					                                                		</ul>
					                                                	</div>
				                                                	</div>
                                                                
                                                                    <ul>
                                                                        <li>
                                                                           Meseros en restaurantes: Se acostumbra dejar una propina del 10 al 20%
                                                                            sobre el total de la cuenta. En algunos restaurantes el servicio está
                                                                            incluido, especialmente si se es parte de un grupo grande, pero
                                                                            generalmente este no es el caso. Siempre revise su cuenta para
                                                                            verificar que esté correcta y confirmar si el servicio está incluido.
                                                                            Si el cargo por servicio está incluido, puede elegir dejar una propina
                                                                            extra si el servicio fue excelente. 

                                                                            <br /> Guías y choferes: Si está contento con el servicio del guía del
                                                                            tour, es apropiado dejar una propina del 10 al 20% con base en el
                                                                            costo del tour. No se acostumbra dar propinas a los taxistas a menos
                                                                            que le ayuden con el equipaje, en cuyo caso diez pesos o un dólar
                                                                            americano por maleta, es una cantidad adecuada.

                                                                        </li>
                                                                        <li>
                                                                            Terapeutas o masajistas: Se acostumbra dar una propina de entre 
                                                                            el 15-20% del costo del tratamiento o los servicios de Spa.
                                                                        </li>
                                                                        <li>
                                                                           Gasolineras: En las estaciones de gasolina en México, se brinda un
                                                                            servicio completo, por lo que usualmente se les da una propina a los
                                                                            despachadores de la estación, especialmente si proporcionan algún
                                                                            servicio extra como limpiar su parabrisas; una propina de 5 a 10 
                                                                            pesos o 1usd es suficiente, pero si también comprueban la presión del
                                                                            aire de sus neumáticos o revisan los niveles de aceite del auto, es
                                                                            adecuado agregar un poco más de propina.

                                                                        </li>
                                                                        <li>
                                                                            Empacadores de supermercados: En los supermercados generalmente hay
                                                                            adolescentes o personas mayores que ayudan a embolsar las compras.
                                                                            Estas personas no reciben un sueldo por su labor y su único ingreso
                                                                            son las propinas de los clientes. Puede darles unos cuantos pesos 
                                                                            (1 ó 2 pesos por bolsa generalmente es adecuado). También puede 
                                                                            añadir 10 pesos más, si le ayudan a llevar las bolsas a su coche.
                                                                        </li>
                                                                        
                                                                        <li>
                                                                            El Personal de Villa Aqua: Dejar propina es algo 100% personal y a
                                                                            discresión. A petición de varios huéspedes, quienes nos pidieron
                                                                            recomendaciones de cómo y cuánto dejar de propina al personal que 
                                                                            se esfuerza diariamente para atenderlos y lograr que sus vacaciones
                                                                            sean inolvidables, creamos estos parámetros que pueden servirle como
                                                                            guía general para mostrar su agradecimiento al personal de servicio.

                                                                            <br />Básicamente se recomienda dejar un mínimo de $10 a $15 dólares
                                                                            por huésped por día. Esta cantidad puede ser dividida como usted lo
                                                                            crea más conveniente , entre todo el staff que lo atendió durante su
                                                                            estancia.

                                                                            <br /> Algunos puntos importantes a tomar en cuenta cuando 
                                                                                    deje propina:

                                                                            <ul>
                                                                                <li>
                                                                                    ¿La calidad del servicio que recibió cumplió sus expectativas?

                                                                                </li>
                                                                                <li>
                                                                                    ¿Hay niños en su grupo o familia? Si viaja con niños, debe
                                                                                    considerar un extra en la propina ya que generalmente
                                                                                    representa más trabajo del personal al tener horarios y menús
                                                                                    especiales, así como ser más desordenados...

                                                                                </li>
                                                                                <li>
                                                                                    El total de noches de su estancia. Si se hospedó con nosotros
                                                                                    más de una semana, entonces puede descontar, por ejemplo, el
                                                                                    20% o bien si es por más de 15 días hasta un 30%.

                                                                                </li>
                                                                                <li>Horarios de Servicio - Si lo atendieron fuera de los 
                                                                                    horarios establecidos, deberá considerar un extra en la
                                                                                    propina.
                                                                                </li>

                                                                                <li>Servicios Extra- Si solicitó servicios externos como
                                                                                    transportación, reservas, excursiones y nuestro personal de
                                                                                    servicio le ayudó a organizarlo, puede ser un motivo para
                                                                                    incrementar la propina.
                                                                                </li>
                                                                            </ul>
                                                                            Si por alguna razón, el servicio que recibe de alguno de los miembros
                                                                            de nuestro staff no fuera satisfactorio, le agradeceremos lo reporte
                                                                            inmediatamente a su Anfitrión(a) de Villa (Villa Host). En caso que
                                                                            prefiera contactar al Administrador de la Villa, favor de escribir a:
                                                                            rentals@villaaqua.com o llamar al: tel: +521 984 807 94 75.

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
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>SUGERENCIAS PARA LAS PROPINAS: </strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <div class="entry-holder has-padd">
                                                                <div class="entry-content">
                                                                	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Planee con tiempo la propina e inclúyalo dentro de su
                                                                                    presupuesto de viaje.
                                                                                </li>
					                                                			<li class="item-feature">
					                                                				Villa Aqua no tiene ninguna política sobre propinas 
                                                                                    pero la mayoría del staff las agradece.
                                                                                </li>
					                                                			<li class="item-feature">
					                                                				La propina se aprecia mucho, sin embargo un simple 
                                                                                    “gracias” y una sonrisa pueden ser tan importantes y
                                                                                    significativos como muestra de agradecimiento para los 
                                                                                    que le sirvieron en sus vacaciones.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Las propinas son voluntarias y USTED es el único que 
                                                                                    puede decidir cómo compensar al personal por su servicio.
                                                                                </li>
					                                                			
					                                                			<li class="item-feature">
					                                                				Por favor no se sienta obligado a dejar propina, estos
                                                                                    parámetros únicamente son a modo informativo.

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
	    <div class="page-header" style="background-image:url(/images/location-info/Header_location_info.jpg);text-align:center">
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">Playas & Clubes de Playa</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<h6>LA PLAYA DE PLAYACAR</h6>
                                        	<p class="paragraph ng-attr-widget">
												A corta distancia de Villa Aqua (15-20 minutos caminando), se localiza una de 
                                                las más hermosas y exclusivas playas de la Riviera Maya, justo en Playacar 
                                                Fase I. Esta bella playa de arena blanca se extiende frente a las aguas turquesa 
                                                del Caribe mexicano y se encuentra protegida por un arrecife de coral que recorre 
                                                la costa y que está a pocos metros de la orilla, lo cual crea el ambiente perfecto 
                                                para practicar snorkel.

                                            </p>
                                            <h6>CLUBES DE PLAYA</h6>
                                            <p class="paragraph ng-attr-widget">
                                            	Playa del Carmen es famosa por sus modernos clubes de playa que ofrecen una 
                                                excelente alternativa para los que gustan de tomar el sol y nadar en el mar. 
                                                La mayoría de los clubes cuentan con servicio de alimentos y bebidas, 
                                                tratamientos de spa, opciones para realizar actividades acuáticas, además de 
                                                acceso a los servicios de baños, regaderas y piscina. Usualmente aplican un 
                                                cargo por el uso de camastros, palapas y sombrillas, y en algunos se maneja 
                                                un consumo mínimo de alimentos y bebidas o incluso un Day Pass.

                                            </p>
                                        
                                        </div>

                                        <div class="wpb_column vc_column_container ">
                                            <div class="wpb_wrapper">
	                                            
	                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>THE REEF PLAYACAR</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
																			Tan sólo a unos minutos de Villa Aqua se encuentra The Reef 
                                                                            Playacar, un Resort en el que se encuentra el club de playa del
                                                                            fraccionamiento. Sólo deberá presentar sus tarjetas VIP en la
                                                                            recepción del hotel para poder pasar el día en la playa. Esto 
                                                                            incluye el uso de camastros, las piscinas, el kids Club, las
                                                                            actividades de entretenimiento y mucho más. Abierto de 9 am a 
                                                                            5 pm.
							                                            </p>
							                                            
							                                            <p class="paragraph ng-attr-widget">Tome en cuenta que debido a que 
                                                                            The Reef Playacar es en realidad un hotel TODO INCLUIDO, no puede
                                                                            consumir bebidas y alimentos a la carta. Si lo desea, puede adquirir
                                                                            un Day Pass con un costo de 50 dólares por adulto y 25 dólares por
                                                                            niño presentando la tarjeta Playacar VIP.

							                                            </p>
							                                            <p class="paragraph ng-attr-widget">Algunas amenidades y actividades 
                                                                            que incluye el Day Pass de 9 am a 4 pm, son:</p>
							                                            <ul>
							                                            	<li>Alimentos, snacks, bebidas </li>
							                                            	<li>2 piscinas</li>
							                                            	<li>1 Jacuzzi</li>
							                                            	<li>1 Piscina para niños</li>
							                                            	<li>Kids Club (4-12 años de edad)</li>
							                                            	<li>Aquaerobics</li>
							                                            	<li>Aquaerobics</li>
							                                            	<li>Estiramientos (clases de stretching)</li>
							                                            	<li>Lecciones de español</li>
							                                            	<li>Lecciones de baile</li>
							                                            	<li>Básquetbol acuático</li>
							                                            	<li>Voleibol acuático </li>
							                                            	<li>Waterpolo</li>
							                                            	<li>Juegos de mesa</li>
							                                            	<li>Gimnasio con equipo básico</li>
							                                            	<li>1 Cancha de tenis (sólo durante el día)</li>
							                                            	<li>Reef Marina Dive Shop</li>
							                                            	<li>Veleros</li>
							                                            	<li>Kayaks</li>
							                                            	<li>Demostración de buceo en la piscina</li>
							                                            	<li>Windsurf</li>
							                                            	<li>Equipo de snorkel</li>
							                                            	<li>Bicicletas </li>
							                                            	<li>Todas las propinas e impuestos</li>
							                                            </ul>
							                                            <p class="paragraph ng-attr-widget">
							                                            	<strong>Note: </strong>Hay temporadas durante el año 
                                                                            en las que llegan muchos visitantes, por lo que le recomendamos
                                                                            asistir a otros clubes de playa para recibir un mejor servicio.

							                                            </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>CORALINA</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Coralina Daylight Club es un exclusivo club de playa sólo 
                                                                            para mayores de edad, que ofrece entretenimiento y música 
                                                                            con la playa y la brisa marina de fondo. Este club es un 
                                                                            poco diferente a los demás en Playa del Carmen, pues se le 
                                                                            considera un “Club a la luz del día”, concepto que proviene 
                                                                            de lugares como Ibiza, España, en donde la fiesta comienza 
                                                                            desde temprano disfrutando de la música de los DJs y de un 
                                                                            ambiente parecido al de un club nocturno, sólo que durante 
                                                                            el día y bajo el sol.

                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Coralina, ha cambiado los estereotipos creando un club en 
                                                                            donde la playa no es el actor principal, sino la piscina, 
                                                                            donde se reúnen todos a tomar un trago y disfrutar la música
                                                                            electrónica y dance, así como en las zonas privadas con 
                                                                            carpas que se pueden rentar para obtener una experiencia 
                                                                            más exclusiva y lujosa, acompañada con botellas de champaña.

                                                                    	</p>
                                                                    	<p class="paragraph ng-attr-widget">
                                                                    		Coralina es “El Lugar” para admirar y ser admirado…
                                                                            Recomendamos ampliamente que solicite a su Anfitrión 
                                                                            de Villa lo asista para hacer una reservación.

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
                                                                        	Mamita’s Beach Club es, sin duda alguna, uno de los mejores 
                                                                            lugares para disfrutar la belleza de Playa del Carmen. Con
                                                                            aproximadamente doscientos metros de la mejor playa de la zona, 
                                                                            podrás deleitarte con los extraordinarios colores del Caribe 
                                                                            mexicano, su arena blanca y suave, y una increíble vista 
                                                                            panorámica hacia la isla de Cozumel.
                                                                            <br>
                                                                            En su restaurante, podrás disfrutar de un delicioso desayuno o
                                                                            almuerzo. Si prefieres, en su bar ofrecen una gran variedad de 
                                                                            bebidas nacionales e internacionales que podrás tomar a la orilla 
                                                                            del mar, escuchando la mejor música de los DJs residentes.   
                                                                            Puedes pasar el día tomando el sol, refrescándote en la alberca
                                                                            familiar o VIP, o simplemente relajándote con un masaje.   
                                                                            Además, en Mamita´s Beach Club encontrarás los mejores servicios, 
                                                                            como toallas para renta, regaderas, baños modernos y equipados 
                                                                            con aire acondicionado, y hasta una boutique.  
                                                                            Para tu comodidad también cuentan con servicio de Valet Parking,
                                                                            seguridad privada y WiFi.
                                                                            <br>
                                                                            El lounge de Mamita´s Beach Club, es un área exclusiva pensada para
                                                                            divertirse y pasarla realmente muy bien. Con elegantes camas de playa,
                                                                            camastros y sombrillas, podrás disfrutar de la alberca VIP al ritmo de
                                                                            la música electrónica de los mejores DJs. En sus renovadas y modernas
                                                                            instalaciones, cuenta con un restaurante que ofrece un nuevo menú de
                                                                            fusión asiática, fresca y frutal, ideal para la playa.  El lounge de
                                                                            Mamita’s Beach Club, es definitivamente el mejor lugar para tener una
                                                                            verdadera beach party.
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
                                                                        	En el corazón de Playa del Carmen, en el Mar Caribe, Indigo 
                                                                            Beach trae una nueva propuesta en la que convergen una atmósfera
                                                                            delicada y casual, una idílica playa y sabores únicos; con un menú
                                                                            conceptual basado en una fusión delicada de cocina asiática y
                                                                            mexicana, con énfasis especialmente en los mariscos y el toque
                                                                            italiano de Sicilia.

                                                                        </p>
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	La tarde se pierde en el atardecer para darle vida a los sonidos
                                                                            tropicales y “guapachosos” de los DJs residentes, mientras los 
                                                                            amantes de la noche disfrutan cómodamente en nuestros camastros y
                                                                            camas de playa.

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
                                                                        	Venga a visitar este peculiar club de playa que ofrece estimular 
                                                                            los 5 sentidos. Con deliciosa comida y bebidas, un DJ diferente 
                                                                            cada día y el mejor escenario natural que los clubes de Playa del
                                                                            Carmen pueden tener, le aseguramos que se irá feliz después de vivir
                                                                            una experiencia diferente en este increíble lugar estilo retro.

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
	                                                                        Zenzi Beach Club, Sports Bar y Restaurante tiene todo lo que 
                                                                            podría desear para tener un gran día o una tarde magnífica en 
                                                                            la playa. Permita que los cálidos rayos del sol, el turquesa 
                                                                            del Mar Caribe, la gentil brisa del mar y una atmósfera relajada 
                                                                            en una de las mejores playas del mundo, lo inunden y llenen 
                                                                            sus sentidos. Y si eso no fuera suficiente, ¿qué le parece 
                                                                            disfrutar todo esto viendo su deporte favorito?

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
	                                                                        Disfrute de un día libre de preocupaciones en este club de playa 
                                                                            con servicio completo que cuenta con un restaurante, 2 bares, sala
                                                                            lounge, piscina, servicio de masajes, solario, regaderas, lockers y
                                                                            sanitarios privados. Todo lo que necesite y más, al alcance de su
                                                                            mano, en este moderno club.

	                                                                    </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <br>
                                                <p class="paragraph ng-attr-widget">
                                                	Preste atención a las banderas de advertencia, pues estas dan aviso sobre 
                                                    corrientes de resaca y aguamalas. Es muy importante respetar y conocer el 
                                                    significado de los colores en las banderas que encontrará en la playa, ya 
                                                    que indican el estado de la marea:

                                                	<br />
                                                	<strong><span style="color: red;">Roja</span>-<span style="color: black;">Negra:</span>                                                            </strong> peligro
                                                    <br>
													<strong><span style="color: orange;">
                                                        Amarilla:</span></strong> precaución
                                                    <br>
													<strong><span style="color: green;">
                                                        Verde</span> or <span style="color: blue;">
                                                        Azul</span>:</strong> aguas en calma.

                                                    <br>
                                                </p>
                                                
                                                <p class="paragraph ng-attr-widget">Hace unos años, asolearse “top-less” (sin sostén) 
                                                    en las playas de México era un crimen, pero esta ley ya no se cumple hoy en día; 
                                                    sin embargo, las mujeres deben ser conscientes de que usar ropa provocativa o 
                                                    estar desnuda parcialmente puede atraer comentarios no deseados en un país en 
                                                    el que el desnudismo no es común.

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
                            <div class="vc_col-sm-6 wpb_column vc_column_container" id="actividadesacuaticas">
                                <div class="wpb_wrapper">
                                    <div class="vc_custom_heading ">
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">EN EL AGUA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												La Riviera Maya, en México, es el destino ideal para los amantes de los 
                                                deportes acuáticos y de la aventur. Kilómetros de espectaculares playas 
                                                se extienden a lo largo de la costa, con aguas cristalinas color turquesa 
                                                como escenario de fondo.

                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												El Caribe mexicano es catalogado como un destino turístico en el que se 
                                                puede practicar buceo de clase mundial, además, cuenta con el segundo 
                                                sistema de arrecife de coral más grande del mundo, mismo que se extiende 
                                                a lo largo de la costa y nos regala una impresionante variedad de corales 
                                                multicolor, peces tropicales y demás vida marina.

                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Y para los más aventureros, está el espeleobuceo en los miles de 
                                                cenotes (ríos subterráneos) que se encuentran por toda la región. 
                                                Esta es una de las actividades que no deben perderse al venir a la 
                                                Riviera Maya, explore las profundidades de esta red de ríos 
                                                subterráneos y piscinas de agua dulce y sumérjase en el esplendor 
                                                de la cultura Maya.

                                            </p>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>SNORKEL</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		La práctica del snorkel permite que cualquier persona pueda explorar el
                                                                maravilloso mundo submarino. Esta actividad se ha vuelto muy popular entre
                                                                los turistas de todas partes del mundo pues es un deporte acuático tan 
                                                                seguro que incluso los niños pueden participar, y es la actividad perfecta 
                                                                para disfrutar en familia. Explore el maravilloso mundo subacuático en el 
                                                                segundo arrecife de coral más grande del mundo; adéntrese en los místicos
                                                                "cenotes" de la región y déjese cautivar por las bellezas naturales.

                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Practicar snorkel en Playa del Carmen es mucho mejor desde un barco mar 
                                                                adentro que desde la playa, le recomendamos ampliemente, considere esta 
                                                                actividad como un “must” durante su estancia. Los arrecifes de Playa son 
                                                                ideales para esta actividad porque tienen una profundidad máxima de 4.5 
                                                                metros, lo que significa que la mejor vista está cerca de la superficie. 

                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BUCEO</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Las aguas turquesas del mar Caribe son excelentes para disfrutar 
                                                                de la vida submarina que habita en el Gran Arrecife Maya. 
                                                                Las formaciones de coral que se extienden a lo largo de gran parte 
                                                                de la costa son un espectáculo inolvidable, que le permite explorar 
                                                                el arrecife de coral más grande en el hemisferio norte. Los numerosos 
                                                                ríos subterráneos y "cenotes", formados por el agua que se filtra a 
                                                                través de la piedra caliza, ofrecen otra opción para los amantes del 
                                                                buceo. 

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Si usted está interesado en aprender a bucear, podemos organizar 
                                                                algunas clases o incluso ayudarle a obtener su certificación. 
                                                                Contacte a su Anfitrión de Villa para obtener más información 
                                                                sobre paseos e instructores de buceo y buceo en caverna (espeleobuceo).


                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
	                                        
	                                        <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>PASEOS EN YATE</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Disfrute de un día inolvidable en las aguas del Caribe abordo de un 
                                                                yate de lujo y pase momentos maravillosos en compañía de la familia 
                                                                y los amigos.
 
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Naveguen por las extraordinarias aguas turquesa de la costa de la Riviera 
                                                                Maya a bordo de un espectacular yate, el lugar perfecto para divertirse, 
                                                                practicar snorkel, broncearse en la cubierta, pescar o simplemente beber
                                                                margaritas acompañadas por un delicioso almuerzo servido por su chef 
                                                                personal.

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Consulte con su Anfitrión de Villa sobre las diferentes opciones y 
                                                                paseos en yate disponibles. Desde tours que incluyen ceviche o ricas 
                                                                hamburguesas y bar abierto; hasta tours VIP con chef personal a bordo, 
                                                                menús especiales, barra premium y bartender.

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Nota: Los paseos en yate salen de Puerto Aventuras. 
                                                                La transportación desde Villa Aqua no está incluida 
                                                                pero puede solicitar este servicio con su Anfitrión de Villa.

                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>PESCA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		La calidad de la pesca en Playa del Carmen definitivamente 
                                                                lo sorprenderá. Aun cuando esta zona es más reconocida por 
                                                                el fantástico buceo que se puede realizar en sus aguas y por 
                                                                sus impresionantes sitios arqueológicos Mayas, la realidad es 
                                                                que  también la pesca en la Riviera Maya es una actividad 
                                                                que atrae a miles de visitantes al año y es uno de los 
                                                                lugares favoritos de pescadores profesionales de todo el 
                                                                mundo.

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Después de todo, esto es el Caribe Mexicano y muchos de los 
                                                                peces más buscados del mundo nadan en las aguas de las costas 
                                                                de Playa del Carmen, por el ejemplo el pez vela, que predomina 
                                                                en el área. Los amantes de la pesca deportiva pueden disfrutar 
                                                                de torneos de pesca a lo largo del año.

                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>PASEOS EN VELERO Y CATAMARÁN</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Navegue por los mares en un charter privado en catamarán, 
                                                                ya sea para disfrutar la brisa del Caribe mexicano por la 
                                                                mañana o bien pasar una bella tarde sobre las olas rodeado 
                                                                de la familia y amigos. Desde el velero o catamarán puede 
                                                                practicar snorkel, nadar o simplemente disfrutar de la 
                                                                belleza tropical de la Riviera Maya.

                                                        	</p>
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Si le encantan las puestas de sol, no hay mejor lugar para 
                                                                disfrutar los últimos rayos del sol tropical, que a bordo de
                                                                un catamarán surcando las aguas caribeñas.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Es el plan perfecto para celebrar reuniones 
                                                                familiares, eventos corporativos y otras ocasiones 
                                                                especiales para recordar, tales como bodas o incluso 
                                                                homenajes póstumos.

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Los tours en catamaran y velero salen desde Puerto Aventuras o 
                                                                Cancún y generalmente duran 4 horas.

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
                                                        		Las maravillas naturales de esta región son innumerables y una de 
                                                                las más importantes y representativas son los Cenotes, palabra que 
                                                                viene del vocablo maya “dzonot” y que más tarde fue traducido por 
                                                                los españoles como cenote. Se estima que hay más de 6,000 en la 
                                                                península de Yucatán, aunque sólo están registrados 2,400. En 
                                                                tiempos ancestrales se creía que eran lugares mágicos pues fueron 
                                                                la única fuente de agua dulce de la selva en ese tiempo y por eso 
                                                                eran considerados como lugares sagrados para los Mayas, pero también 
                                                                porque representaban la entrada al inframundo. 

                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Las estalactitas y estalagmitas que se forman dentro son verdaderas 
                                                                obras de arte de la naturaleza. En muchos cenotes, los agujeros que 
                                                                hay en el techo permiten que la luz del sol se filtre, convirtiéndolos 
                                                                en un escenario maravilloso.
                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Cenotes son un tesoro natural que nadie debe perderse, teniendo siempre 
                                                                en cuenta que hay que cuidarlos para que el hombre no destruya en unos 
                                                                cuantos días, lo que a la naturaleza le ha tomado millones de años crear. 
                                                                Los diversos cenotes que hay en la Riviera Maya son una buena opción para 
                                                                nadar, practicar snorkel y para los más experimentados, incluso bucear.

                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		<strong>Importante:</strong> 
																No toque el fondo o las paredes durante su inmersión y no utilice bronceador
                                                                antes de nadar en el cenote ya que puede contaminar gravemente las aguas
                                                                cristalinas del mismo y propiciar la  destrucción de especies vegetales y 
                                                                animales que habitan únicamente ahí.

                                                        	</p>
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		<strong>Recommendaciones:</strong>
																Traer: traje de baño, sandalias o zapatos deportivos para el agua, toalla,
                                                                repelente contra insectos (biodegradable), camisa y pantalones largos si 
                                                                desea caminar por la selva y su equipo de snorkel si no quiere alquilarlo.

                                                        	</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>NADO CON DELFINES</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		El tour de nado con delfines incluye varias actividades que el delfín 
                                                                realiza tales como saltos,  tiernos abrazos y cariños, remolinos, foot 
                                                                push y nado libre. Además, a lo largo del programa, los entrenadores 
                                                                proporcionan información interesante acerca de la conducta, dieta, 
                                                                salud y cuidados de los delfines, y siempre contestan las preguntas que 
                                                                los participantes tengan sobre el increíble mundo de los delfines.
                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Si ya ha nadado con delfines antes, tal vez desee experimentar dos nuevos 
                                                                tipos de nado, únicos en el mundo: el primero se llama Dolphin Trek, y es 
                                                                un programa de buceo con delfines (no se necesita experiencia en buceo, ya 
                                                                que es totalmente seguro); y el segundo, The One, que es un programa exclusivo 
                                                                en el que se encontrarán únicamente usted y el delfín para vivir una 
                                                                experiencia inolvidable durante una hora. ¡Y para los que realmente son 
                                                                fanáticos del mundo de los delfines, tal vez les gustaría experimentar 
                                                                un día como un entrenador!

                                                        	</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>NADO CON TIBURONES BALLENA</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Nadar (sólo snorkel) con uno de los peces más grandes del océano, el 
                                                                "tiburón ballena" es una de las experiencias más emocionantes que puede
                                                                experimentar en la Riviera Maya y probablemente en toda su vida!

                                                        	</p> 
                                                        	 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		La migración anual de tiburones ballena, la concentración más grande 
                                                                de estos bellos animales en el mundo, comienza en mayo, cuando los 
                                                                tiburones ballena regresan para su temporada de alimentación en el 
                                                                verano, cerca de la punta de la península de Yucatán. Cada año vuelven 
                                                                para "comerse" el gran buffet de algas, plancton, kril, huevos de peces 
                                                                y pequeños camarones, que la naturaleza les regala.

                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Mientras se alimentan de este abundante festín, los tiburones ballena 
                                                                nadan sobre la superficie con la "boca abierta" (lo suficientemente 
                                                                grande como para tragarse a un adulto de un solo bocado, pero son 
                                                                inofensivos "vegetarianos" que no representan una amenaza para el 
                                                                hombre). Incluso los niños de 4 años en adelante pueden nadar con 
                                                                ellos, ya que es perfectamente seguro para toda la familia.

                                                        	</p> 
                                                        	
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Si se hospeda en Villa Aqua entre los meses de mayo y septiembre 
                                                                no puede perderse la oportunidad de realizar esta actividad que 
                                                                estamos seguros, será la “cereza del pastel” en sus vacaciones.

                                                        	</p> 
                                                            
                                                            <p class="paragraph ng-attr-widget">
                                                        		Contacte a su Anfitrión de Villa para obtener más información y precios.

                                                        	</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_accordion_section group">
                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>BUCEO CON TIBURONES TORO</strong></a></h3>
                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                        	<p class="paragraph ng-attr-widget">
                                                        		¡Atrévase a bucear con estos misteriosos “goliats” marinos! Los 
                                                                tiburones toro nos visitan en Playa del Carmen durante los meses 
                                                                de noviembre a febrero de cada año para alimentarse y reproducirse. 
                                                                Esta especie de tiburón es considerada por muchos como uno de los 
                                                                tiburones más peligrosos, por lo que conocer el otro lado de estos 
                                                                magníficos peces nos muestra que en realidad no hay mucho que temer, 
                                                                y  nos regala una de las experiencias más increíbles estando, cara a 
                                                                cara, con estos titanes del océano.

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Los tiburones toro son animales curiosos por naturaleza y suelen 
                                                                pasar a una distancia de entre 60 y 90 cm de los buzos para obtener 
                                                                un buen vistazo de ellos. Para participar en este tour, se necesita 
                                                                ser un buzo certificado con experiencia, buen control de flotación y 
                                                                de consumo de aire.

                                                        	</p> 
                                                            
                                                            <p class="paragraph ng-attr-widget">
                                                        		Contacte a su Anfitrión de Villa para obtener más información y precios.

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
                                                        		¡Kiteboarding o kite surf, es considerado uno de los deportes más 
                                                                geniales del planeta! Combina aspectos del surf, esquí acuático y 
                                                                parapente, entre otros. Imagine que es capaz de realizar todos sus 
                                                                movimientos favoritos de esquí acuático sin la ayuda de una lancha.<br>
                                                                Diríjase a donde quiera con sólo el tranquilo soplo del viento como 
                                                                guía. De un salto de casi 10 metros de altura sin necesidad de una 
                                                                rampa, surfee más olas de las que alguna vez soñó en un solo día.<br>
                                                                ¡La edad, el peso o las experiencias pasadas son simplemente excusas, 
                                                                ya que mientras tenga el deseo de aprender y esté dispuesto a seguir 
                                                                las recomendaciones del instructor, podrá aprender Kiteboarding y 
                                                                disfrutar al máximo de las olas del mar!!!

                                                        	</p> 
                                                        	<p class="paragraph ng-attr-widget">
                                                        		Generalmente la mejor época para practicar este deporte es 
                                                                desde mediados de noviembre hasta finales de mayo, pero incluso 
                                                                durante el verano (junio/julio/agosto) puede haber días buenos, 
                                                                con mucho viento para practicar este deporte.

                                                        	</p>
                                                        	 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <br>
	                                    <p class="paragraph ng-attr-widget">
                                                        		Contacte a su Anfitrión de Villa para obtener más información y precios.

                                                        	</p>
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
                                            	Si es un amante del golf, lo invitamos a probar la ruta maya. 
                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                            	Experimente el magnífico escenario natural enclavado en la selva tropical 
                                                y rodeado por el mar Caribe, con hermosas lagunas, cenotes y manglares, 
                                                todo en las caracteírsticas tonalidades azul de esta zona.

                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	Los diferentes campos de golf de la región se extienden por toda la Riviera Maya 
                                                hasta Cancún, incluyendo un campo de golf en la isla de Cozumel, todos diseñados 
                                                por reconocidos arquitectos como Jack Nicklaus, Greg Norman, Robert Trent Jones 
                                                Jr., P.B. Dye, Tom Fazio, Tom Weiskopf y Robert Von Hagge, por lo que han conseguido 
                                                ganarse la atención y el respeto de jugadores de todos los niveles, provenientes 
                                                de todas partes del mundo.

                                            </p>
                                            
                                        </div>
                                        
                                        <br>
	                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>HARD ROCK GOLF CLUB RIVIERA MAYA (CLUB DE GOLF PLAYACAR)</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		El Club de Golf Playacar es un campo de golf de 7144 metros, 
                                                                    par 72, diseñado y construido por Robert Von Hagge; con una 
                                                                    pendiente de 148 desde los tees de campeonato, 136 desde los 
                                                                    tees blancos y 134 desde los tees rojos. Este campo es tanto 
                                                                    un deleite a los ojos como un reto para cualquier jugador. El 
                                                                    Club cuenta con un innovador sistema todo incluido en el que 
                                                                    se le dará un servicio excelente desde que llegua a la Casa 
                                                                    Club, hasta que termina su juego. Hay carritos con snacks y 
                                                                    bebidas que circulan por el campo para que disfrute aún más.

	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		El Club dispone de una zona de práctica de primera categoría, 
                                                                    con un espectacular campo de prácticas y un putting green grande, 
                                                                    incluyendo áreas para practicar chips (golpes rodados), pitching 
                                                                    y una trampa de arena junto al green.
	                                                        	</p>
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Villa Aqua se encuentra entre los greens 13 y 14, y a sólo unos 
                                                                    minutos en auto de la Casa Club (el transporte está incluido en 
                                                                    la tarifa del green).

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
	                                                        		Diseñado por Greg Norman, El Camaleón Golf Club presume de espectaculares
                                                                    trazos serpenteantes que se abren paso entre la selva tropical y el manglar,
                                                                    extendiéndose audazmente hasta el mar. El Camaleón  se ha ganado una magnífica
                                                                    reputación entre los mejores golfistas del mundo ya que en él se llevaba a
                                                                    cabo el PGA TOUR del Mayakoba Classic, el único evento oficial  del PGA TOUR
                                                                    que se celebra fuera de los Estados Unidos o Canadá. Aquí, los amantes del
                                                                    golf de todos los niveles pueden experimentar la esencia de un paisaje
                                                                    prístino y natural, reconocido por la Sociedad Audubon.

	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Tal como sucede con el camaleón, animal del que toma su nombre, 
                                                                    este campo siempre tiene un nuevo reto para los jugadores al tiempo 
                                                                    que les regala vistas hipnotizantes con fairways bordeados por dunas 
                                                                    de arena y manglares, trampas peculiares tales como cenotes (cuevas
                                                                    subterráneas), lagunas de aguas cristalinas y greens a orillas del 
                                                                    mar Caribe. El Camaleón, con sus casi 6,500 m, par 72 y con un horario 
                                                                    de atención de 6:30 a 18:00 hr., todos los días, le brindará días enteros 
                                                                    de golf con el mar Caribe de fondo.

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
	                                                        		Grand Coral Golf Club es una creación que el afamado Nick Price 
                                                                    diseñó para los amantes del golf. En este hermoso campo con sus 
                                                                    casi 6,500 m, con par 71 y 18 hoyos los golfistas podrán disfrutar 
                                                                    tanto de juegos con interesantes retos, como de vistas maravillosas. 
                                                                    El campo también cuenta con una moderna Casa Club y un Club de Playa 
                                                                    exclusivo que satisface hasta los gustos más exigentes.
	                                                        	</p>
                                                                <p class="paragraph ng-attr-widget">
	                                                        		 El costo del green incluye: transportación, carrito de golf, 
                                                                    2 botellas de agua, tees de golf, herramienta de reparación divot, 
                                                                    toallas frescas, vestidor con lockers y caja de seguridad.

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
	                                                        		Entrando en la orgullosa tradición de la familia de renombrados 
                                                                    campos de golf diseñados por el arquitecto P.B. Dye, se encuentra 
                                                                    su última obra maestra, el Iberostar Playa Paraiso Golf Club, una 
                                                                    creación realmente única que encantará a aquellos que gustan de 
                                                                    pasar tardes enteras jugando este apasionante deporte.

	                                                        	</p> 
	                                                        	 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		En un paisaje relativamente plano, se levanta un campo de golf 
                                                                    sin precedente en el Caribe mexicano. Enclavado en la antigua 
                                                                    selva maya, el Iberostar Playa Paraiso Golf Club cuenta con 
                                                                    varios de los rasgos de diseño que Dye imprime en sus creaciones, 
                                                                    desde calles estrechas, profundas trampas de arena y movimientos 
                                                                    verticales extremos, hasta peligros poco convencionales como un 
                                                                    lecho de rocas, los cuales hacen de este campo, un lugar 
                                                                    particularmente diferente de los otros en el área.


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
	                                                        		El campo de golf de Puerto Aventuras presenta desafíos que hacen 
                                                                    que el golf se convierta en una emocionante actividad que todos 
                                                                    querrán realizar. Diseñado en 1991 por Thomas Leman, esta hermosa 
                                                                    creación de 36 hoyos aún es uno de los secretos mejor guardados de 
                                                                    la región.<br>
                                                                    Una suave alfombra de césped Bermuda cubre los greens y se 
                                                                    extiende sobre el campo rodeado de palmeras, buganvilias, árboles 
                                                                    tropicales y la exuberante vegetación que caracteriza el Caribe 
                                                                    mexicano. En sus rondas diarias podrá disfrutar de la fauna de la 
                                                                    zona y jugar entre iguanas, venados, diversos tipos de aves y otros 
                                                                    animales salvajes.

	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		El campo de golf abre todos los días del año, de 7:30 hasta el 
                                                                    anochecer. Los carritos de golf no son obligatorios y no se requiere 
                                                                    hacer reservación.

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
	                                                        		Es probablemente, El Manglar Vidanta Golf Riviera Maya, el campo 
                                                                    de golf ejecutivo en el que Jack Nicklaus logró desarrollar el más 
                                                                    importante de sus proyectos. Este campo es un reflejo de lo que 
                                                                    Nicklaus, en conjunto con su empresa de diseño, logra para proyectar 
                                                                    su distintivo sello creativo, revolucionario y vanguardista. Es un 
                                                                    jardín del edén para los amantes del golf ya que cuenta con 18 
                                                                    hoyos, par 54, en un área de poco más de 2,500 m de longitud llena 
                                                                    de trampas de arena blanca, lagos prístinos, greens con matices 
                                                                    exuberantes y áreas rústicas de arena (waste areas). 

	                                                        	</p> 
	                                                        	 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		La insignia del campo es el hoyo 17, llamado Donna Green, 
                                                                    y cuenta con tres trampas de arena a cada lado del green y una 
                                                                    más en el centro, convirtiéndolo en un hoyo único entre los demás 
                                                                    ya que es difícil salir de él con un par.


	                                                        	</p> 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
												
	                                        </div>
	                                    </div>
	                                    <br>
	                                    <p class="paragraph ng-attr-widget">Contacte a su Anfitrión de Villa para obtener información 
                                            sobre horarios, tarifas y reservas.
                                        </p> 
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">PARQUES Y AVENTURA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Quintana Roo es uno de los Estados más hermosos y singulares de México. Es la 
                                                puerta de entrada para disfrutar de la increíble diversidad de fauna y flora 
                                                exuberante, y por supuesto, el lugar en el que residen los vestigios de la 
                                                magnífica civilización Maya. No se pierda la oportunidad de vivir y explorar  
                                                este mágico lugar, en los parques que podrá encontrar en la zona.

                                            </p>
                                        </div>
                                        
                                        <br>
	                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                        <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        	<div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>TOUR DE ATVs (VEHÍCULOS TODO TERRENO)</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Conduzca un ATV a toda velocidad a través de los sinuosos senderos de 
                                                                    la selva, nade en un Cenote de aguas cristalinas con una profundidad 
                                                                    de 18 m, explore cuevas labradas por la naturaleza, y disfrute de las 
                                                                    zonas arqueológicas mayas en este tour de 2 horas, a pocos minutos de 
                                                                    Villa Aqua. 

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
	                                                        		Xcaret, el parque temático más grande e impresionante de la 
                                                                    Riviera Maya, ofrece una amplia variedad de actividades y mucha 
                                                                    diversión en un entorno natural espectacular. Aquí podrá practicar 
                                                                    snorkel en un río subterráneo, aprender sobre la vida marina en un 
                                                                    acuario viviente, caminar a través de un mariposario, ver jaguares 
                                                                    y pumas, nadar con delfines y manatíes y aprender sobre las tortugas 
                                                                    marinas. Si lo que le interesa es la cultura mexicana, este es el 
                                                                    lugar ideal para encontrar bellas expresiones del arte popular 
                                                                    mexicano (artesanía, espectáculos, comida, música y más...)
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
	                                                        		Xplor es un paraíso subterráneo único, que cuenta con 7 
                                                                    circuitos increíbles que lo invitan a redescubrir sus 
                                                                    emociones y sentidos para estar en contacto con la naturaleza.

	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Atrévase a deslizarse por 13 divertidas y emocionantes tirolesas, 
                                                                    ubicadas entre la vívida naturaleza del Caribe y disfrute de refrescantes
                                                                    acuatizajes e increíbles puentes colgantes; dé un paseo por la selva en 
                                                                    los imparables vehículos anfibios, explore en un paraíso subterráneo en 
                                                                    el que podrá nadar rodeado de impresionantes estalactitas y estalagmitas;
                                                                    descubra una ruta incomparable sobre una balsa que lo llevará a través de
                                                                    impresionantes cavernas subterráneas mientras rema con sus propias manos y
                                                                    para finalizar la proeza, deleite su paladar con un nutritivo, ligero pero
                                                                    abundante buffet que recargará sus energías.

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
	                                                        		Xel-Há es un parque ecoturístico en el que el agua dulce 
                                                                    de los ríos subterráneos se une con el agua salada del 
                                                                    océano, formando un entorno lleno de diversidad, ideal para 
                                                                    practicar snorkel.<BR>
                                                                    Admire la impresionante variedad de coloridos peces tropicales 
                                                                    o disfrute de la vista paseando por el río en llantas inflables, 
                                                                    dé un paseo en bicicleta o recorra el parque en una agradable caminata.<BR>
                                                                    Xel há es la tierra de los cenotes, manglares y lagunas, ahí, los
                                                                    amantes de la naturaleza encontrarán muchas actividades divertidas y
                                                                    relajantes.

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
	                                                        		Este mágico lugar nos regala un ambiente de fiesta, música y 
                                                                    tradición, evocando a la perfección los recuerdos de la época 
                                                                    dorada de México para el deleite de todos sus visitantes. 
                                                                    Decoradas con motivos de los 32 Estados de la República Mexicana, 
                                                                    las famosas trajineras que una vez fueron utilizados para el 
                                                                    transporte de flores, frutas y vegetales cultivados en jardines 
                                                                    flotantes conocidos como “chinampas”, se han convertido en un 
                                                                    medio de transporte y una causa de alegría para todos aquellos 
                                                                    que vienen a Xoximilco buscando pasar un rato agradable y único.
	                                                        	</p> 
	                                                        	
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Este paseo en trajinera es una versión moderna del legendario 
                                                                    viaje a través de canales que se realizaba en la época 
                                                                    prehispánica y que continuó años más tarde con fines comerciales, 
                                                                    sólo que aquí en Xoximilco los colores y el ambiente alegre son 
                                                                    el ingrediente especial que crea momentos mágicos para los paseantes.<BR>
                                                                    
                                                                    La entrada al parque incluye: Un paseo a bordo de una trajinera, cena, 
                                                                    bar abierto con tequila, cerveza, aguas de fruta y refrescos, diferentes
                                                                    grupos de música en vivo, tales como mariachis, trío de bolero, cuarteto
                                                                    jarocho, marimba y más. Duración aproximada: 3 horas.

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
	                                                        		Río Secreto bien podría ser una de las nuevas maravillas del mundo 
                                                                    y usted puede disfrutar de este impresionante río subterráneo con 
                                                                    miles de espectaculares estalactitas y estalagmitas en la Riviera Maya.
                                                                    <br>
                                                                    Imagine retroceder en el tiempo para ser testigo de los misterios de
                                                                    la creación de este espectacular milagro de la naturaleza.

	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Este sistema de cavernas se ha ido formando durante siglos gracias 
                                                                    a la erosión de las aguas de un río subterráneo, se encuentra a pocos
                                                                    kilómetros de Villa Aqua y es por mucho, la caverna parcialmente inundada, 
                                                                    más larga en la Península de Yucatán. Pero lo que hace de Río Secreto un 
                                                                    lugar más especial, es el hecho de que cuenta con más de 12 km (7,5 millas) 
                                                                    de cuevas semi-inundadas trazadas con 15 salidas naturales ubicadas en
                                                                    distintos puntos. ¡Nadar en él es simplemente una experiencia impresionante!

	                                                        	</p>
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Tome en cuenta que esta exótica pero frágil formación geológica requiere de
                                                                    una conciencia ecológica y sensible. Por esta razón, el tamaño de los grupos
                                                                    de visitantes es limitado para minimizar el impacto ambiental en la caverna.                                                                        <br>
                                                                    Esto permitirá que muchas generaciones puedan constatar la historia de 
                                                                    nuestro planeta a través de sus maravillas naturales.

	                                                        	</p>
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		El viaje a través de Río Secreto es una experiencia surreal, mística e
                                                                    inolvidable. Si usted es un aventurero, viajero del mundo o simplemente
                                                                    un alma curiosa, no puede perderse la oportunidad de explorar uno de los
                                                                    atractivos naturales más fascinantes de la Riviera Maya.

	                                                        		<br>
																	¡Además, es una gran opción para un día de lluvia!

	                                                        	</p>
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>EXCURSIÓN A LA SELVA MAYA (ALLTOURNATIVE)</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		Viva una experiencia increíble haciendo rappel en un hermoso cenote
                                                                    y vuele sobre la exuberante selva en una aventura extrema de tirolesas 
                                                                    para luego relajarse participando en una tradicional ceremonia maya 
                                                                    de purificación.<br>
                                                                    

	                                                        	</p> 
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		¡Una aventura extrema, en la jungla maya, que no se debe perder!
	                                                        	</p>  
	                                                        	 
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="wpb_accordion_section group">
	                                                <h3 class="wpb_accordion_header ui-accordion-header"><a href="#optimised-for-speed"><strong>RESERVA DE LA BIÓSFERA DE SIAN KA'AN</strong></a></h3>
	                                                <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                    <div class="wpb_text_column wpb_content_element ">
	                                                        <div class="wpb_wrapper">
	                                                        	<p class="paragraph ng-attr-widget">
	                                                        		En la hermosa biósfera de Sian Ka’an tendrá la oportunidad de practicar 
                                                                    kayak a través de los canales angostos que atraviesan los manglares, 
                                                                    subir una antigua pirámide, nadar en un cenote de aguas cristalinas;o 
                                                                    probar la pesca con mosca. Visite la zona arqueológica de Muyil y su 
                                                                    laguna, disfrute del amanecer en este bello lugar y entenderá por 
                                                                    qué los antiguos Mayas lo nombraron Sian Ka’an, que significa “donde 
                                                                    nace el cielo”.  Todo esto y más, dentro de un ambiente seguro y tranquilo 
                                                                    al sur de Playa del Carmen y Tulum.

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
	                                                        		Salte desde un avión con el Caribe mexicano como escenario, 
                                                                    le aseguramos que será una experiencia que avivará sus sentidos 
                                                                    y permanecerá en su memoria por siempre.

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
	                                                        		El baño de temazcal es más una experiencia cultural que 
                                                                    un tratamiento de spa, pues se trata de una ceremonia en 
                                                                    la que se purifica el cuerpo, la mente y el espíritu. <br>
                                                                    Este antiguo ritual data de tiempos prehispánicos y se 
                                                                    cree que se utilizaba mucho entre las culturas Azteca y 
                                                                    Maya, en México. La palabra temazcal significa “casa de vapor”.

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
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/cultura/" title="" target="_self">VEER MAS ACTIVIDADES</a>
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
                        <h2 class="page-title">Actividades</h2> 
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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">CULTURA Y ARQUEOLOGÍA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Las paredes de los sitios arqueológicos de Quintana Roo encierran 
                                                historias enigmáticas del pasado, que nos transportan tiempo atrás para 
                                                imaginar cómo vivían los Mayas día a día.
                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	Existen cientos de asentamientos y zonas arqueológicas mayas en la región, 
                                                pero estas son las más recomendables:

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
																			Chichen Itzá es sin duda uno de los sitios arqueológicos mayas 
                                                                            más conocidos y mejor conservados en la región, y fue nombrado
                                                                            Patrimonio Mundial por la UNESCO y una de las “Nuevas 7 Maravillas 
                                                                            del Mundo”. La zona arqueológica de Chichen Itzá abarca un área de 
                                                                            6.5 km2 (2.5 sq miles) por lo que es posible recorrerla en un solo
                                                                            día.

							                                            </p>
							                                            
							                                            <p class="paragraph ng-attr-widget">
							                                            	Puede visitar este maravilloso lugar contratando un tour de un 
                                                                            día. Actualmente cuenta con un sorprendente show de luz y sonido 
                                                                            al anochecer. <br>
                                                                            Chichen Itzá queda a 3-4 horas en auto desde Villa Aqua.
                                                                            Contacte a su Anfitrión de Villa para más información y opciones.
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
                                                                    		Tulum es el sitio arqueológico más pintoresco de la Riviera Maya 
                                                                            y el único que fue construido frente al mar. Visite este enigmático 
                                                                            y bello lugar y disfrute de vistas espectaculares del Caribe y 
                                                                            la playa.
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
                                                                        	Los visitantes que tengan el valor de subir la pirámide más 
                                                                            alta que los Mayas hayan construido en México se llevarán como
                                                                            recompensa las vistas más hermosas de la región. Nohuch Mul se
                                                                            encuentra a más de 30 metros de altura; su nombre significa 
                                                                            "montículo grande" en lengua maya, y es la pirámide más alta en 
                                                                            el sitio arqueológico de Cobá y en la península de Yucatán.<br> 
                                                                            Es muy sencillo llegar a Cobá, ya que se encuentra a 45 minutos 
                                                                            de Playa del Carmen en auto. Le aseguramos que vale la pena 
                                                                            visitar este mágico lugar.

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
                                                                        	Sea testigo de la increíble forma en la que los Mayas decoraban 
                                                                            sus templos y plazas, admire las únicas esculturas en alto relieve y
                                                                            descubra la razón por la que estas obras de arte han sorprendido a 
                                                                            los arqueólogos; visualice los rituales que los Mayas llevaban a 
                                                                            cabo durante el juego de pelota (Pok Ta Pok) y atraviese el Arco
                                                                            Falso (Arco Maya), uno de los iconos arquitectónicos de esta
                                                                            misteriosa y cautivadora cultura.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="wpb_accordion_section group">
                                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>XCARET MÉXICO ESPECTACULAR (ESPECTÁCULO NOCTURNO)</strong></a></h3>
                                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	Más de 300 artistas en escena lo sorprenderán con un 
                                                                            vibrante recorrido por la historia de la cultura de México 
                                                                            y la magia de los Mayas, dándole vida a las coloridas tradiciones 
                                                                            de México, en el teatro Gran Tlachco, ubicado en el ecoparque Xcaret.

                                                                        </p>
                                                                        <p class="paragraph ng-attr-widget">
                                                                        	Pregunte a su Anfitrión de Villa sobre la opción del show + cena.


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
                                        <h2 style="color: 333;text-align: left;font-weight:300;font-style:normal">RESTAURANTES</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed585bd" data-id="56253aed585bd" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                        	<p class="paragraph ng-attr-widget">
												Comer en Villa Aqua es una excelente elección pero si prefiere disfrutar de 
                                                algo diferente y desea pasar un rato agradable en el emocionante ambiente de 
                                                Playa, entonces prepárese para conocer la amplia gama de opciones culinarias 
                                                que el Caribe le presenta, desde los pequeños restaurantes que sirven comida 
                                                tradicional de la región, hasta lugares trendy atendidos por chefs de renombre 
                                                mundial.

                                            </p>
	                                            
	                                        <p class="paragraph ng-attr-widget">
												La influencia internacional en los restaurantes de la zona es evidente y 
                                                podemos asegurarle que no se aburrirá de la comida, pues siempre tendrá una 
                                                opción diferente para elegir; desde comida mexicana, tradicional maya (yucateca), 
                                                italiana, alemana, tailandesa, japonesa, cubana, china, argentina, sueca, 
                                                española, hasta carnes, mariscos y mucho más.

                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
												Contacte a su Anfitrión de Villa para conocer la lista de nuestros restaurantes 
                                                favoritos y hacer sus reservaciones.

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
                                        <h2 style="color: #333;font-weight:300;font-style:normal; text-align: right;">COMPRAS</h2>
                                    </div>
                                    <div class="ult-spacer spacer-56253aed5c7a5" data-id="56253aed5c7a5" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="paragraph ng-attr-widget">
                                            	En Playa del Carmen encontrará una gran variedad de lugares para ir de compras, 
                                                desde modernos centros comerciales hasta los coloridos mercados tradicionales 
                                                donde se puede comprar todo tipo de souvenirs. La Quinta (5ta Avenida) es una 
                                                de las atracciones más famosas pues está repleta de tiendas, bares, restaurantes, 
                                                cafeterías, heladerías, tiendas de conveniencia, farmacias y más...

                                            </p>
                                            
                                            <p class="paragraph ng-attr-widget">
                                            	Esta calle principal es un paseo peatonal que abarca cerca de 5 kilómetros (3 millas) 
                                                a lo largo de Playa del Carmen y continuamente está en expansión, por lo que cada vez 
                                                es más larga. Se encuentra a 1 (una) cuadra al oeste de la playa y a pocos minutos de 
                                                Villa Aqua.

                                            </p>
                                            <p class="paragraph ng-attr-widget">
                                            	En Playa, encontrará todo tipo de tiendas, desde las que venden ropa de marca como 
                                                Lacoste, Hurley, Michael Kors, etc. hasta puestos estilo mercado de pulgas, y 3 
                                                centros comerciales pequeños:

                                            </p>
                                            <br>
                                            <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                             <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong style="text-transform: uppercase;">PASEO DEL CARMEN</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<p>
					                                              se encuentra a unos minutos de Villa Aqua, en el extremo sur, 
                                                                    pasando el puerto del ferry. Allí encontrará tiendas como Zara, 
                                                                    Womens Secrets, Pull&Bear, Corte Fiel, Ultrafemme y la tienda 
                                                                    oficial de Harley Davidson.
					                                                	
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
					                                              fue el lugar más famoso de Playa cuando abrió sus puertas en 2014; 
                                                                    aquí encontrará tiendas como Forever 21, Victoria’s Secret, L'Occitane, 
                                                                    The Body Shop, American Eagle, BCBG y más.

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
					                                             se localiza en la zona más concurrida de Playa del Carmen (en la 
                                                                    5ta con Calle 12). Este nuevo centro comercial es considerado como un
                                                                    “Lifestyle retail” ya que cuenta con tiendas con las marcas de moda 
                                                                    como son  H & M, Steve Madden, Vince Camuto, Sunglass Hut, Gran Vía,
                                                                    Hollister, Bath & Body Works, Victoria’s Secret, Swarovski, Sephora, 
                                                                    Michael Kors, Puma, Onda de Mar y muchas amenidades más.

					                                             </p>
                                                             
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                            <br>
                                            <p class="paragraph ng-attr-widget">
                                            	Si busca algo más tradicional, tipo mercado con puestos y tiendas de venta de artesanías y
                                                baratijas, éstas las podrá encontrar en los alrededores, sobre todo si va a la Avenida 1ª o 
                                                en la Avenida 10.

                                            </p>
                                            
                                        </div>
                                        
                                        <br>
                                        <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                             <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
                                                 <div class="wpb_accordion_section group">
                                                     <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>Estas son algunas ideas que puede comprar como souvenir:</strong></a></h3>
                                                     <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                         <div class="wpb_text_column wpb_content_element ">
                                                             <div class="wpb_wrapper">
                                                             	<div class="stm_item-features">
	                                                                	<div class="stm_item-features_inner">
					                                                		<ul class="item-features_list_extended">
					                                                			<li class="item-feature">
					                                                				Tequila, la bebida nacional por excelencia. Se trata de un
                                                                                    destilado de la planta de agave. Cuidado: No todos los
                                                                                    tequilas son iguales. Busque siempre el que tenga la etiqueta
                                                                                    con la leyenda “100% Agave ".

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Xtabentun (se pronuncia shta-ben-tun) siempre será un bonito                                                                                       detalle para regalar. Es un suave licor que proviene de la
                                                                                    combinación entre la miel de abeja y el anís; se elabora en
                                                                                    la península de Yucatán, y viene en botellas de vidrio muy
                                                                                    elegantes.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				La plata: es barata y abundante en Playa. Siempre busque la
                                                                                    etiqueta que indique la concentración de plata que debe ser 
                                                                                    de .925, lo que significa que el metal es 92.5% puro.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Huipiles: son vestidos frescos de algodón, con bordados
                                                                                    coloridos alrededor del cuello y del dobladillo.
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Guayaberas: se trata de camisas de manga corta o larga, en
                                                                                    color blanco o tonos pastel; generalmente están hechas de
                                                                                    algodón y lino y muy comunes en la vestimenta de esta región.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Hamacas hechas de fibra natural o sintética.

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Cestos de palma trenzada

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Sarapes (chales de tejido multicolor)

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Nacimientos 

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Sombreros (sombreros tradicionales de ala muy ancha)
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Cerámica pintada

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Azulejos de cerámica pintados a mano
					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Cuero (estampado y liso)

					                                                			</li>
					                                                			<li class="item-feature">
					                                                				Perfumes en una de las tiendas libres de impuestos.

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
                                            	Pero si usted es un comprador serio y las tiendas que hay en Playa del Carmen no 
                                                son su estilo, entonces puede que desee <strong>pasar un día en Cancún, una ciudad considerada 
                                                como el paraíso de la moda</strong>, donde podrá encontrar lo último en joyería de diseñador, 
                                                obsequios, accesorios y artículos de moda de marcas como Louis Vuitton, Bvlgari, 
                                                Carolina Herrera, Cartier y mucho más.

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
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/es/out-and-about/" title="" target="_self">VER MÁS ACTIVIDADES</a>
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
                        <h2 class="page-title">ACTIVIDADES</h2>
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
                                        <h2 style="color:#525252;font-weight: 300;">Contacto</h2>
                                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#22BCB8;" class="vc_sep_line"></span></span>
                                    </div>
                                    <div class="ult-spacer spacer-563bc65e386dc" data-id="563bc65e386dc" data-height="60" data-height-mobile="60" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
									<h5 style="color: #22BCB8; text-align: center;" >Gracias por su interes en Villa Aqua!</h5>
                                    </div>
                                    <div class="ult-spacer spacer-563bc65e386dc" data-id="563bc65e386dc" data-height="60" data-height-mobile="60" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>

                                    <div class="ult-spacer spacer-563bc65e38c9e" data-id="563bc65e38c9e" data-height="30" data-height-mobile="30" data-height-tab="30" data-height-tab-portrait="30" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                                    <div role="form" class="wpcf7" id="wpcf7-f338-p323-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="/contact-us/#wpcf7-f338-p323-o1" method="post" class="wpcf7-form" novalidate="novalidate">
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
                                                        <input type="submit" value="Enviar mensaje" class="wpcf7-form-control wpcf7-submit" />
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
													¿Busca mejorar la comunicación en su empresa? ¿Promover la creatividad y 
                                                    el pensamiento de mente abierta? ¿Reducir las distracciones de los problemas 
                                                    empresariales del día a día? ¿Celebrar años de éxito? ¿o sólo incentivar a 
                                                    su equipo para lograr sus próximos objetivos con un genial cambio de ambiente?

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													<strong>Los retiros son la oportunidad de ver las cosas desde otra perspectiva y un 
                                                    programa de incentivos bien diseñado es una de las maneras más efectivas de 
                                                    recompensar a los empleados más eficientes</strong>. Le aseguramos que después de unos 
                                                    cuantos días de “trabajo” en Villa Aqua, su equipo regresará a casa con energías 
                                                    renovadas, concentrado y listo para aceptar los retos del futuro para la compañía.

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Nosotros podemos asistirlo para encontrar las actividades perfectas para su equipo, 
                                                    ya sea para elevar la confianza de los empleados o únicamente para quitar el peso 
                                                    de un estresante día de trabajo (junto a la piscina)… quizá un paseo en tirolesa 
                                                    por la jungla sea el camino hacia el éxito; o ¿qué tal ir más allá de los límites 
                                                    nadando con Tiburones Toro? Puede darles la mejor experiencia de su vida al nadar 
                                                    con Tiburones Ballena, o tocar fibras profundas en una Ceremonia Maya dentro de un 
                                                    Temazcal.

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Sin importar lo que usted piense que su equipo necesita, <strong>nosotros podemos ayudarle a
                                                    conseguirlo. ¿Qué mejor que realizar exitosamente su evento corporativo en una locación
                                                    excepcionalmente única en el Caribe mexicano?</strong>

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Capacitadores, maestros de Yoga, artistas, oradores, chefs, etc., sea cual
                                                    sea el tipo de grupo que maneje, en Villa Aqua todos son ¡Bienvenidos! 

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													¡Contáctenos y le ayudaremos a planear su Retiro o Evento Corporativo!
	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            
                                            <p><i>* Aplican cargos por evento.</i></p>
                                            
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
								            <div class="vc_btn3-container vc_btn3-left animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VER TODO</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper ult-carousel">
                                			<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_corporate_retreats.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_corporate_retreats.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_corporate_retreats02.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_corporate_retreats02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_corporate_retreats03.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_corporate_retreats03.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">RETIROS Y EVENTOS CORPORATIVOS </h2>
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
													Si está planeando las <strong>perfectas Vacaciones Familiares</strong>, 
                                                    entonces Villa Aqua es la respuesta para usted.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Le ofrecemos amplios espacios para reunir a toda la familia, permitiendo 
                                                    que todos tengan su privacidad también, ya que puede hospedar hasta 10 adultos 
                                                    o bien 12 personas (cuando 2 o más son menores de 12 años) y dejar que su 
                                                    Anfitrión de Villa planeé maravillosas actividades que le encantarán a todo 
                                                    el grupo… desde un simple juego de vóley o un torneo de petanca , hasta una 
                                                    increíble excursión por la selva, que fascinará a toda la familia.

	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>*Aplíca costo extra</i></p>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
								            <div class="vc_btn3-container vc_btn3-left animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VER TODO</a>
											</div>
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
                        <h2 class="page-title">REUNIONES FAMILIARES Y DE AMIGOS</h2>
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
													Si busca una excelente locación para filmaciones y/o sesiones fotográficas, 
                                                    Villa Aqua es la opción. Su privacidad, sus espacios interiores contemporáneos, 
                                                    áreas exteriores llenas de color además del sinnúmero de días soleados en el 
                                                    año, garantizan el éxito de su producción. Cada rincón de Villa Aqua provee de 
                                                    una luz natural que sin duda le ayudará a conseguir los mejores resultados para 
                                                    su filmación y/o sesión fotográfica. 

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Villa Aqua ofrece <strong>asistencia bilingüe y cuenta con una lista de personal
                                                    altamente capacitado y con años de experiencia en todas las áreas de producción</strong>;
                                                    nuestros contactos han trabajado en proyectos importantes dentro de este rubro en la 
                                                    Riviera Maya; desde fotógrafos, estilistas, maquillistas, diseñadores de vestuario 
                                                    hasta servicios de catering, transportación y todo lo que necesite para desarrollar 
                                                    su proyecto.

	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>*cargos extras aplícan</i></p>
                                            
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
								            <div class="vc_btn3-container vc_btn3-left animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VER TODO</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                
                                <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_photo_shooting_01.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_photo_shooting_01.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_photo_shooting_02.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_photo_shooting_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">Locación</h2>
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
											     Ya sea para celebrar su <strong>aniversario, cumpleaños, un logro personal, 
                                                  sorprender a un cliente o sólo reunir a esos amigos especiales y 
                                                    disfrutar unas vacaciones increíbles</strong>, nosotros le ayudaremos a 
                                                    personalizar su evento privado* y crear recuerdos que permanezcan 
                                                    por siempre.

	                                            </p>
	                                            
	                                            <h6 style="color: #22BCB8;">
	                                            	<a href="/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank">EXPERIENCIAS ÉPICAS VILLA AQUA*</a> 
	                                            </h6>
	                                            <p class="paragraph ng-attr-widget">
													Desde sencillas celebraciones de cumpleaños, con la clásica “piñata”, 
                                                    hasta exóticos Rituales Mayas, en Villa Aqua organizamos <strong>“Experiencias 
                                                    Épicas” que permanecerán en la memoria de sus invitados por siempre.</strong>

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Diviértanse aprendiendo todo sobre la bebida mexicana más famosa del mundo 
                                                    en nuestra experiencia: <strong>“Cata de Tequila”, descubra México y su gastronomía,</strong> 
                                                    Patrimonio de la Humanidad, a través de nuestro menú degustación, el cual 
                                                    incluye platillos representativos de cada región, los cuales saboreara <strong>al 
                                                    son del Mariachi</strong>…o bien, si son más aventureros, no pueden perderse nuestra 
                                                    famosa <strong>“Cena Molecular Villa Aqua”, un menú de 19 tiempos preparado por nuestro 
                                                    chef Bernardo Bautista</strong>, usando las técnicas más vanguardistas para sorprender 
                                                    todos sus sentidos!
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Consulte a su Anfitrión de Villa para más información o cuéntenos sus ideas 
                                                    y haremos lo posible por cumplir todos sus caprichos.

	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            
                                            <p><i>* Aplican costos por evento.</i></p>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
								            <div class="vc_btn3-container vc_btn3-left animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VER TODO</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">

                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <div class="wpb_wrapper ult-carousel">
                                        	<div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_private_events.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_private_events.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            
                                            
                                            <div class="rental-service_item">
                                            	<div class="rs-item_inner">
                                            		<div class="rs-item_actions">
                                            			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_private_02.jpg"><i class="fa fa-search-plus"></i></a>
                                            		</div>
                                            		<div class="rs-item_content">
                                            			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_private_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">Eventos Privados</h2>
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
													¿Quién no ha soñado con una boda en la playa?
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													 Seguramente estés visualizando la suave arena blanca, la brisa fresca 
                                                    del océano y un atardecer precioso a la distancia… Pero, ¿tu sueño también 
                                                    incluye espectadores ruidosos que van pasando por ahí?, 
                                                    ¿o molestas ráfagas de viento arruinando tu velo y tu peinado? 
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Los eventos 
                                                    frente al mar siempre traen consigo todo un conjunto de consideraciones, 
                                                    por lo que Villa Aqua es la respuesta perfecta para tu Boda de Ensueño en el Caribe. 

	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Aunque Villa Aqua no está frente al mar, podemos hacer los arreglos 
                                                    necesarios para que tengan una hermosa ceremonia en una de las playas 
                                                    más bellas del mundo, pero para evitar los inconvenientes de una recepción 
                                                    en la arena, les ofrecemos el escenario más espectacular para la boda de 
                                                    sus sueños: Villa Aqua.
	                                            </p>
	                                            
	                                            <p class="paragraph ng-attr-widget">
													Sólo tendrán que relajarse y compartir este momento tan especial con su 
                                                    familia y amigos ya que nosotros nos haremos cargo de todo mientras ustedes 
                                                    intercambian sus votos en una celebración, con la exclusividad, lujo y estilo
                                                    que se merecen.<br>
                                                    Nuestro <strong>Anfitrión de Villa le ayudará con todo lo que necesite para que 
                                                    su evento sea un rotundo éxito. Desde afinar los detalles previos a la 
                                                    boda, tales como el alojamiento, transportación y amenidades especiales 
                                                    para sus invitados, hasta organizar un “día de spa” para la novia y sus 
                                                    damas o el ensayo para la recepción. Sin omitir, obviamente, todos los 
                                                    detalles para el Gran día: el catering, la música y entretenimiento, 
                                                    las flores, la decoración, fotografía y video profesionales, el pastel, 
                                                    maquillistas y peinadoras, los trámites para la ceremonia (juez) o incluso 
                                                    rituales especiales…</strong> Haremos lo posible para que su boda, en el Paraíso, 
                                                    sea absolutamente inolvidable.


	                                            </p>
                                            </div>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
                                            <p><i>*aplíca costo extra</i></p>
                                            <div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
								            <div class="vc_btn3-container vc_btn3-left animated fadeIn" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0s;animation-duration:1s;animation-iteration-count:1;test">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/events/" title="" target="_self">VER TODO</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_col-sm-6 wpb_column vc_column_container ">
                                
                                <div class="wpb_wrapper ult-carousel">
                                    <div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                       		</div>
                                      	</div>
                                	</div>
                                	
                                	<div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings_02.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings_02.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                       		</div>
                                      	</div>
                                	</div>
                                	
                                	<div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings_03.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings_03.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                       		</div>
                                      	</div>
                                	</div>
                                	
                                	<div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings_04.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings_04.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                       		</div>
                                      	</div>
                                	</div>
                                	
                                	<div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings_penultima.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings_penultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                       		</div>
                                      	</div>
                                	</div>
                                	
                                	<div class="rental-service_item">
                                      	<div class="rs-item_inner">
                                       		<div class="rs-item_actions">
                                       			<a class="rs-item_action_zoom js-fancybox" rel="gr3" href="/images/events/Villa_Aqua_events_weddings_ultima.jpg"><i class="fa fa-search-plus"></i></a>
                                       		</div>
                                       		<div class="rs-item_content">
                                       			<img width="1140" height="676" src="/images/events/Villa_Aqua_events_weddings_ultima.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
					<p>Villa Aqua es la locación ideal para realizar todo tipo de eventos, 
                        desde pequeñas reuniones, hasta eventos especiales. 

					<br>
					Su diseño contemporáneo con espacios modernos y elegantes, así como su 
                        bello y amplio jardín exterior, son el escenario perfecto para 
                        celebrar bodas, eventos privados, corporativos, recepciones y 
                        fiestas de cumpleaños; ruedas de prensa, sesiones fotográficas o 
                        presentaciones de ventas hasta para 80 invitados.
					<br>
					Su excelente ubicación, instalaciones vanguardistas, su piscina estilo 
                    vintage, y un servicio impecable le otorgan una atmósfera casual y 
                        única a sus reuniones y eventos, haciéndolos especiales e inolvidables. 
					</p>
				</div>
			</div>
			
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="wpb_wrapper">
				<div class="vc_custom_heading">
					<h6 style="color: #22BCB8">ESPACIOS</h6>
				</div>
			</div>
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="entry-holder">
				<div class="entry-content">
					<p>Los espacios interiores y exteriores cuentan con instalaciones 
                        modernas, diseñadas para albergar desde íntimas reuniones, hasta 
                        eventos formales para 80 invitados. 
 
						<br>
						La villa cuenta con una impresionante fachada que da una cálida bienvenida 
                        a los invitados; amplias áreas verdes con exuberante vegetación de la región 
                        y un campo de golf como escenario de fondo.  La terraza, a un costado de la 
                        piscina, es ideal para tener una reunión tipo cóctel e incluso como pista 
                        de baile.<BR>
                        El amplio espacio interior, con ventanas de piso a techo y maravillosas vistas 
                        al jardín, es perfecto como plan B en caso de mal tiempo o simplemente como 
                        otra área en la que sus invitados pueden disfrutar del evento. Asimismo, en 
                        Villa Aqua contamos con una iluminación ambiental elegante y sutil, para darle 
                        a sus reuniones y eventos un toque romántico y sofisticado.

				</div>
			</div>
			
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="wpb_wrapper">
				<div class="vc_custom_heading">
					<h6 style="color: #22BCB8">SERVICIOS</h6>
				</div>
			</div>
			<div class="ult-spacer spacer-56253aed4f277" data-id="56253aed4f277" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="25" data-height-mobile-landscape="25" style="clear:both;display:block;"></div>
			<div class="entry-holder">
				<div class="entry-content">
					<p>Al ser una de las mejores locaciones para eventos en la Riviera Maya, Villa 
                        Aqua cuenta con una vasta lista de proveedores profesionales y organizadores 
                        de eventos, quienes trabajarán en conjunto con nuestro anfitrión de villa 
                        para garantizar el éxito rotundo de su evento.

					<br>
					Visita: 
					</p>
					 <a href="http://www.corazon-mm.com" target="_blank" style="color: #22BCB8">CORAZON por Pasteleteria</a>  y <a href="http://www.gourmetevents.com.mx/the-events/" style="color: #22BCB8" target="_blank"> GOURMET EVENTS </a>
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
                                        <div class="rs-item_title">Bodas</div>
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
                                        <div class="rs-item_title">Retiros corporativos</div>
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
                                        <div class="rs-item_title">Reuniones de familia y amigos</div>
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
                                        <div class="rs-item_title">Eventos privados</div>
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
                                        <div class="rs-item_title">Locación</div>
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
                        <h2 class="page-title">Eventos</h2>
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
                        <h2 class="page-title">BODAS</h2>
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
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">ACERCA DE LA EXPERIENCIA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header" style="text-transform:uppercase"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>¿QUÉ ESPERAR DE LA RENTA DE UNA VILLA VACACIONAL DE LUJO? </strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
															<p class="paragraph ng-attr-widget">
																Rentar una villa Vacacional de lujo es sinónimo de exclusividad. 
                                                                Esto significa que solamente usted y sus invitados se hospedarán 
                                                                en la propiedad y podrán disfrutar de los beneficios, características, 
                                                                amenidades y servicios que la villa ofrece y sin preocuparse por saber 
                                                                con qué desconocidos tendrá que compartir sus vacaciones. Lo 
                                                                consentiremos y le brindaremos un servicio excelente, siempre de acuerdo 
                                                                con sus necesidades. Es como estar en su segundo hogar! 

																<br>
							                                   	Si desea pasar unas vacaciones en familia para vivir aventuras nuevas, 
                                                                viajar con amigos o con otras parejas en busca de relajación y de una 
                                                                escapada romántica, o si está recién casado y busca un poco de romance 
                                                                junto al mar, Villa Aqua es lo mejor en rentas vacacionales de villas de 
                                                                lujo en México y será el escenario perfecto para crear una experiencia 
                                                                única e inolvidable.

							                                	
							                                </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿ ES SEGURO VIAJAR A MÉXICO?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                    	<p class="paragraph ng-attr-widget">
	                                                    		La respuesta corta es: SÍ. Aunque algunas partes del país han presentado un
                                                                incremento en la violencia relacionada con la guerra contra el narco en los
                                                                últimos años y los reportes negativos de noticias han hecho poco para ayudar
                                                                a la buena imagen del país en la mente de los turistas, el hecho es que en la
                                                                mayor parte de México, aún es seguro viajar, y la Riviera Maya es conocida 
                                                                por ser uno de los destinos más seguros de México.

	                                                    	<br>
	                                                    		Tal como pasa cuando se viaja a cualquier otro país, es importante estar 
                                                                informado y tomar las medidas de seguridad necesarias. Al estar debidamente
                                                                informados, tomar simples precauciones y ejercer el sentido común, los viajeros
                                                                pueden aprovechar al máximo todo lo que México tiene para ofrecerles.

	                                                    	<br>
	                                                    		Como una de las características de nuestras numerosas amenidades, hemos colocado
                                                                cajas de seguridad en cada habitación, por lo que le pedimos usarlas para guardar
                                                                sus objetos de valor. 

	                                                    	<br>
	                                                    		Sin duda alguna, México es uno de los países más visitados gracias a sus
                                                                maravillosas playas, sus emblemáticos lugares históricos y su rica cultura.
                                                                La belleza del país y la diversidad de atracciones lo han convertido en uno
                                                                de los destinos turísticos favoritos en el mundo, tanto para quienes gustan
                                                                de relajarse en los grandes resorts, los que buscan aventuras en contacto 
                                                                con la naturaleza como para los amantes de la cultura. 
                                                            <br>
                                                                
                                                                México se ha ganado un lugar especial en la lista de lugares preferidos de
                                                                los vacacionistas, pues a pesar de tener zonas conflictivas (mayormente en
                                                                la frontera con Estados Unidos), las demás zonas del país son seguras y sin
                                                                duda, son sitios que los turistas no deben dejar de visitar.

	                                                    	</p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿NECESITO PASAPORTE O VISA PARA VISITAR MÉXICO?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	
	                                                        	Sólo para los ciudadanos estadounidenses:

	                                                        <br>
	                                                        	Desde el año 2007, TODAS las personas, incluyendo los ciudadanos 
                                                                estadounidenses, que viajen por avión entre Estados Unidos, Canadá, 
                                                                México, Centro América, América del Sur, el Caribe y las Bermudas, 
                                                                deberán presentar un Pasaporte vigente, una tarjeta Air NEXUS, una 
                                                                tarjeta de marino mercante del Servicio de Guardacostas de los Estados 
                                                                Unidos o una tarjeta de registro de extranjero, Forma I-551, en caso de 
                                                                ser aplicable.

	                                                        <br>
                                                                
                                                                Si viaja por mar o por tierra (incluyendo ferris), TODAS las personas, 
                                                                incluyendo ciudadanos estadounidenses, deberán presentar un Pasaporte 
                                                                vigente u otro documento, tal como lo determina el Departamento de 
                                                                Seguridad Nacional. 
                                                                
                                                             <br>

	                                                        	Otros Países:
	                                                        <br>
	                                                        	Si es ciudadano de Andorra, Argentina, Australia, Austria, Bélgica, 
                                                                Canadá, Chile, Costa Rica, la República Checa, Dinamarca, Finlandia, 
                                                                Francia, Alemania, Gran Bretaña, Grecia, Hungría, Irlanda, isla, Israel, 
                                                                Italia, Japón, Liechtenstein, Luxemburgo, Mónaco, Países Bajos, Nueva 
                                                                Zelanda, Noruega, Polonia, Portugal, Puerto Rico, San Marino, Singapur, 
                                                                Eslovenia, España, Corea del sur, Suecia, Suiza, Estados Unidos, Uruguay
                                                                o Venezuela, no necesita visa para entrar a México, aunque deberá presentar
                                                                un Pasaporte vigente y llenar un formato de inmigración para turistas y 
                                                                viajes de negocios, la cual puede obtener en las agencias de viajes, 
                                                                aerolíneas o en el punto de entrada a México.
                                                                <br>
                                                                El oficial de inmigración en el punto de entrada a México también puede 
                                                                solicitar que demuestre que cuenta con fondos suficientes para su estadía
                                                                y un boleto de regreso a su país.
                                                                <br>
                                                                Si usted es ciudadano de cualquier otro país, necesitará ir al Consulado 
                                                                mexicano para solicitar una visa.
	                                                        </p>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                       
	                                        
	                                    </div>
	                                </div>
                                    
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    
                                    
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">ACERCA DE VILLA AQUA</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header" style="text-transform:uppercase"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post"><strong>¿CUÁNTOS HUÉSPEDES PUEDEN HOSPEDARSE EN VILLA AQUA?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
															<p class="paragraph ng-attr-widget">
																La capacidad máxima en Villa Aqua es de 10 adultos, pero si 2 o más del grupo, 
                                                                son menores de 12 años, podemos aceptar hasta 12 huéspedes. La casa cuenta con 
                                                                5 habitaciones; 3 con cama King size, 1 con 2 camas matrimoniales y 1 con una 
                                                                cama king size  y una litera baja con dos camas individuales. <br>
                                                                Además, la casa cuenta con 1 cuna y otros accesorios para bebé que están a su
                                                                disposición sin cargo alguno. Si requiere más cunas o equipo especial, por favor
                                                                contacte a su Anfitrión de Villa para conocer opciones y precios en renta.

																<br>
							                                   	Si su grupo es mayor a 12 personas, por favor contáctenos para obtener 
                                                                información sobre otras opciones de Villas de lujo en la zona.

							                                </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿VILLA AQUA ES ADECUADA PARA NIÑOS?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                    	<p class="paragraph ng-attr-widget">
	                                                    		¡Sí, por supuesto! Aunque Villa Aqua tiene una arquitectura y diseño 
                                                                que no parece amigable para niños, a nosotros nos encanta recibir 
                                                                familias y ofrecemos varias amenidades para nuestros huéspedes más jóvenes.

	                                                    		<br>
	                                                    		Desde red de voleibol / bádminton, juegos de pelota, un aro de básquetbol,
                                                                flotadores y juguetes para la piscina hasta juegos de mesa, una consola 
                                                                X-box, TV satelital, películas, Apple TV (Netflix)  y mucho más… además 
                                                                de todas las excursiones y actividades ideales para todas las edades que 
                                                                su Anfitrión de Villa puede sugerirles.
                                                                <br>
                                                                
                                                                También proporcionamos gratuitamente: 1 cuna, 1 asiento de bebé para el 
                                                                auto y una silla alta para niños. Otro tipo de equipo y más accesorios 
                                                                para bebé,  están disponibles para su renta a través de un proveedor 
                                                                externo.
	                                                    	</p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿QUÉ TAN LEJOS ESTÁ LA VILLA DE LA PLAYA?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Villa Aqua está a sólo unos minutos caminando (10-20 min) de las 
                                                                increíbles aguas turquesa  y la arena blanca de las playas de 
                                                                Playacar Fase 1. Hay un camino pavimentado pero si quiere ahorrar 
                                                                unos cuantos minutos, tome el atajo a través de un camino de 
                                                                terracería en el que encontrará vestigios Mayas.

	                                                        </p>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿VILLA AQUA ESTÁ CERCA DEL CENTRO DE PLAYA DEL CARMEN Y DE LA QUINTA AVENIDA?
</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	¡Una linda y corta caminata de 15 minutos y estará justo en 
                                                                la esquina de la Calle 2 y la Quinta Avenida de donde empieza 
                                                                el corazón de Playa! 

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿TENGO ACCESO A LLAMADAS TELEFÓNICAS?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Sí, claro. Villa Aqua ofrece llamadas locales, nacionales e internacionales
                                                                (Estados Unidos y Canadá y sólo llamadas a teléfonos fijos a otros países) 
                                                                GRATIS.<br>
                                                                Nuestros huéspedes contarán con un número telefónico de Estados Unidos y 
                                                                una línea telefónica gratuita también de Estados Unidos en la que sus amigos
                                                                y familiares podrán contactarlos. Este servicio es proporcionado a través de
                                                                Vonage (VOIP) por lo que se requiere una conexión a internet. Dado lo anterior,
                                                                no garantizamos la calidad o falla del servicio. También tenemos una línea
                                                                telefónica local en la que puede realizar llamadas locales gratis, pero 
                                                                cualquier llamada de larga distancia, realizada a través de esta línea, 
                                                                será cargada a su cuenta.

	                                                        	<br>
	                                                        	Si requiere servicio para su teléfono móvil, es importante que verifique 
                                                                con su proveedor de servicios para que tenga cobertura o un plan apropiados
                                                                durante su estancia en México. Si necesita más información por favor contacte
                                                                a nuestro Anfitrión de Villa.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿HAY INTERNET EN LA VILLA?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Sí. Villa Aqua ofrece Wi-Fi de alta velocidad gratuito. Lo único que 
                                                                necesita es una conexión inalámbrica. Por favor, consulte el manual 
                                                                de su dispositivo o a un profesional en tecnología para realizar la 
                                                                configuración antes de su llegada, ya que no hay personal en la villa 
                                                                que esté capacitado para este tipo de asistencia técnica.

	                                                        	<br>
	                                                        	Por favor tome en cuenta que incluso con varios ruteadores dispuestos a 
                                                                lo largo de diferentes áreas de la casa, podría experimentar una variación 
                                                                en la calidad de la señal. Apreciamos su comprensión, ya que la villa 
                                                                tiene muros de concreto muy gruesos que afectan la conectividad.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿PUEDO RESERVAR EVENTOS ESPECIALES EN LA VILLA, TALES COMO BODAS, ANIVERSARIOS O RETIROS CORPORATIVOS?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	¡Seguro! Villa Aqua es el lugar perfecto para realizar ese evento tan 
                                                                especial. Tenemos diferentes políticas y precios. Por favor, revise 
                                                                nuestra sección de  <a href="http://villaaqua.com/es/eventos/"><strong>Bodas 
                                                                y Eventos</strong></a> para obtener mayor información. 

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿CUÁL ES LA POLÍTICA DE RESERVACIÓN?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Tan pronto como recibamos su solicitud, nos pondremos en contacto con 
                                                                usted para proporcionarle la información de disponibilidad y precios 
                                                                solicitados. Una vez que esté de acuerdo, reservaremos la fecha en 
                                                                nuestro calendario y enviaremos la documentación y las instrucciones 
                                                                de pago. Su reservación quedará confirmada una vez que recibamos su 
                                                                Contrato de Arrendamiento firmado junto con la copia de su identificación 
                                                                y el comprobante de pago del anticipo (50% del costo de la renta, el 
                                                                cual deberá efectuarse no más de 7 días después de su solicitud de 
                                                                reserva. El 50% restante deberá pagarse dentro de los 45 días previos 
                                                                a su fecha de llegada a la villa (check in). 

	                                                        	<br>
	                                                        	El depósito por garantía se pagará en efectivo a su llegada; si prefiere 
                                                                que su Tarjeta de Crédito quede en garantía del depósito de daños, por 
                                                                favor llene la información pertinente en su Contrato de Arrendamiento 
                                                                y envíe una copia de su tarjeta (frente y reverso) junto con su 
                                                                identificación. 
	                                                        	<br>
	                                                        	Para reservaciones hechas con menos de 45 días de anticipación, requerimos
                                                                la liquidación total del pago (100%) para confirmar la reserva. 
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿CUÁL ES LA POLÍTICA DE CANCELACIÓN?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	En cancelaciones con 70 días o más, previos a su llegada, se otorgará 
                                                                un reembolso total.

	                                                        	<br>
	                                                        	En cancelaciones con 45-70 días, antes de su llegada, habrá una sanción 
                                                                del 30% del costo total de la renta.

	                                                       		<br>
	                                                        	En cancelaciones de menos de 45 días antes de su llegada, se retendrá 
                                                                el 100% del monto de la renta.

	                                                        	<br>
	                                                        	No se permite cancelación en Reservas de EVENTOS o en TEMPORADAS ESPECIALES
                                                                (Navidad, Año Nuevo, Semana Santa, Thanksgiving, etc…), en este caso se 
                                                                retendrá el 100% del monto de la renta. Si llegara a ser una emergencia y
                                                                requiere de cancelación, se otorgará un crédito por el monto de los pagos ya
                                                                realizados para que el cliente lo utilice en una renta posterior, reservando
                                                                dentro de un período de un año. 

	                                                        	<br>
	                                                        	Todas las cancelaciones deberán realizarse por escrito 
                                                                (fax / correo electrónico)

	                                                        	<br>
	                                                        	No se otorgará ningún reembolso si el huésped llega después de 
                                                                su fecha de reserva (check-in) o si debe partir antes de la fecha 
                                                                de salida (check-out).

	                                                        	<br>
	                                                        	Si por alguna razón imprevista, la villa no estuviera disponible para 
                                                                la fecha en la que el huésped hizo su reservación, se le otorgará el 
                                                                reembolso total de los pagos que haya realizado.

	                                                        	<br>
	                                                        	Si el huésped debiera dejar la propiedad antes de su fecha de salida 
                                                                por causas de fuerza mayor (huracán, inundación, otros), se le otorgará 
                                                                un crédito por las noches que no haya usado para que lo utilice en futuras
                                                                estancias en la villa. No habrá reembolsos monetarios.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿HAY ALGÚN COSTO ADICIONAL QUE DEBA CONSIDERAR?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Sí, todos sus gastos secundarios tales como comida, bebidas, cargo 
                                                                por compra y entrega de alimentos (20% del recibo), Servicios de SPA, 
                                                                lavandería / tintorería, tours, excursiones, transportación, etc., 
                                                                no están incluidos en los costos de arrendamiento.

	                                                        	<br>
	                                                        	Las tarifas de renta NO incluyen los impuestos gubernamentales ni de hospedaje.
 
	                                                        	<br>
	                                                        	Las propinas NO están incluidas pero no son obligatorias. Esto es a 
                                                                consideración de cada huésped, sin embargo son sumamente apreciadas por 
                                                                el personal que trabaja arduamente en atenderlo como se merece.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿DAN ALGÚN DESCUENTO EN ESTANCIAS LARGAS O POR RESERVA ANTICIPADA?
</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Los costos que se muestran en la página web son los mismos. Pero 
                                                                garantizamos que le daremos la MEJOR TARIFA DISPONIBLE, ya que 
                                                                somos proveedor directo. Por favor, pregunte, cualquier descuento 
                                                                o tarifa especial será tomada en consideración dependiendo la 
                                                                disponibilidad y fechas. 

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿ACEPTAN TARJETAS DE CRÉDITO PARA HACER LA RESERVACIÓN O PARA GASTOS SECUNDARIOS?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Lo sentimos mucho, pero por el momento NO aceptamos pagos con tarjetas de 
                                                                crédito. Para reservar se requiere una transferencia electrónica. Para 
                                                                gastos secundarios y servicios durante su estancia, es necesario pagar 
                                                                en EFECTIVO (se aceptan dólares estadounidenses y pesos mexicanos). En 
                                                                caso de que no quiera traer mucho efectivo con usted o no desee usar 
                                                                los cajeros automáticos (ATM), los cuales generalmente cobran una tarifa 
                                                                alta para  tarjetas extranjeras o tipos de cambio muy castigados, le 
                                                                ofrecemos la opción de enviar, previo a su llegada, una transferencia 
                                                                electrónica con la cantidad que usted establezca para cubrir sus gastos 
                                                                de estancia. Si al final de sus vacaciones, hay un saldo positivo lo 
                                                                devolveremos a su cuenta. (aplica un cargo de 45 dólares por este servicio).

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿PROPORCIONAN TOALLAS Y AMENIDADES?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Sí. Todos los blancos, incluyendo toallas de baño y de playa están incluidos.

	                                                        	
		                                                        <br>
	                                                        	También contamos con artículos de tocador de las mejores marcas: jabón, 
                                                                champú, acondicionador y loción hidratante.
                                                                <br>
                                                                Cada baño está equipado con secadoras de cabello y espejos de aumento. 

 
	                                                        	<br>
	                                                        	Esta es una villa con servicio completo, similar a un hotel boutique. 
                                                                Nuestras camaristas cambiarán  la ropa de cama cada tercer día a menos 
                                                                que usted solicite un servicio diferente.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
                                    
                                    <div class="ult-spacer spacer-5633a4efa6329" data-id="5633a4efa6329" data-height="52" data-height-mobile="52" data-height-tab="52" data-height-tab-portrait="52" data-height-mobile-landscape="52" style="clear:both;display:block;"></div>
                                    
                                    <div class="vc_custom_heading">
                                        <h2 style="color: #333;text-align: left;font-weight:400;font-style:normal">ALIMENTOS Y BEBIDAS</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    
                                    <div class="wpb_accordion wpb_content_element  not-column-inherit" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
	                                    <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿PUEDO BEBER EL AGUA DEL GRIFO? </strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	En la villa: Sí. Villa Aqua cuenta con un sistema de purificado y filtrado 
                                                                de agua, sin embargo, en caso que usted prefiera tomar agua embotellada,
                                                                proporcionamos botellas de agua en cada habitación el día de su llegada 
                                                                (sin costo el primer día), y agua purificada ilimitada en el dispensador 
                                                                de la cocina.

	                                                        	<br>
	                                                        	Si va a pasar el día fuera en la playa o visitando diferentes atracciones,
                                                                le recomendamos que lleve su propia agua embotellada y/o beba solo bebidas
                                                                embotelladas.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿CÓMO FUNCIONA EL SERVICIO DE COMPRA Y SURTIDO DE VÍVERES/ALIMENTOS PREVIO Y DURANTE LA ESTANCIA?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Tan pronto como su reservación sea confirmada, nuestro Anfitrión de Villa
                                                                lo contactará y le ayudará con la planeación de sus vacaciones, incluyendo
                                                                sus alimentos. Es muy importante que nos notifique previamente acerca de 
                                                                cualquier alergia y /o restricción/preferencias alimenticias en su grupo, 
                                                                para que el chef pueda tomar las medidas necesarias. 

	                                                        <br>
	                                                        	Proporcionamos una Lista de Compra de Víveres y un Menú como referencia, 
                                                                pero tenga en cuenta que contamos con un chef profesional que siempre 
                                                                está abierto a peticiones especiales si el tiempo y los ingredientes lo 
                                                                permiten.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿CÓMO SE COBRAN LAS BEBIDAS ALCOHÓLICAS?</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget"> 
	                                                        	Tenemos un inventario de vinos y licores a su disposición; únicamente se le
                                                                cobrarán las botellas que abra. Los precios son muy accesibles pero si lo
                                                                prefiere, puede remplazar las botellas consumidas por otras de la misma 
                                                                marca y capacidad. El acceso a este inventario está disponible bajo solicitud.<br>
                                                                También podemos surtir previamente sus licores favoritos (de estar disponibles
                                                                en el mercado) antes de su llegada aplicando únicamente el cargo por entrega
                                                                (20%).

	                                                        <br>
	                                                        	Para su conveniencia, contamos con el servicio de Bar de Honor, que está 
                                                                compuesto por botellas abiertas que dejaron huéspedes anteriores. Alentamos
                                                                a todos nuestros huéspedes a que mantengan esta tradición, respetando el 
                                                                consumo medido del Bar de Honor y dejando en éste, las botellas que no se 
                                                                terminó para que los siguientes huéspedes puedan disfrutarlo también.
 
	                                                        
	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>¿EL PERSONAL PREPARA BEBIDAS DURANTE LA ESTANCIA?
</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Esto puede ocurrir aleatoriamente. Generalmente nuestro chef 
                                                                y el asistente de cocina están muy ocupados con la preparación 
                                                                de los alimentos, esto incluye hacer las compras, preparar la 
                                                                comida, poner la mesa, servir y limpiar, por lo que no pueden 
                                                                atender todas sus solicitudes de preparación de bebidas, así 
                                                                que si requiere de este servicio, por favor contacte a su 
                                                                Anfitrión de Villa para conocer las opciones y precios del servicio 
                                                                de Bartender.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>SABEMOS QUE EL HORARIO DE TRABAJO DEL CHEF ES DE 8AM A 4PM, 
                                                    ¿PUEDE DEJAR NUESTRA COMIDA PREPARADA Y NOSOTROS LA RE-CALENTEMOS DESPUÉS? </strong></a>
                                                </h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Esto es posible sólo cuando no se sirva almuerzo en la villa. Si ese es 
                                                                el caso, el chef usará ese período para preparar su comida, de otra manera 
                                                                puede solicitar el Servicio de Chef para la Cena (aplica cargo extra 
                                                                dependiendo del número de personas en su grupo) o elegir cualquiera de 
                                                                nuestras Experiencias Épicas Villa Aqua que incluyen deliciosos menús y
                                                                entretenimiento.

	                                                        </p>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        
	                                        <div class="wpb_accordion_section group">
	                                            <h3 class="wpb_accordion_header ui-accordion-header"><a href="#unique-featured-slider-for-pages-blog-and-portfolio-post" style="text-transform: uppercase;"><strong>NOS LEVANTAMOS TEMPRANO, ¿PUEDE EL CHEF SERVIRNOS EL DESAYUNO ANTES DE  LAS 8AM?
</strong></a></h3>
	                                            <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
	                                                <div class="wpb_text_column wpb_content_element ">
	                                                    <div class="wpb_wrapper">
	                                                        <p class="paragraph ng-attr-widget">
	                                                        	Siempre tratamos de cubrir sus necesidades. Si usted es un madrugador o 
                                                                irá a una excursión temprano, el chef puede ajustar el horario de servicio y
                                                                moverlo un par de horas. Es necesario que nos informe con al menos 24 horas 
                                                                de anticipación, asimismo, el servicio estará sujeto a consideración. Tome en
                                                                cuenta que al recorrer su horario de servicio para el desayuno, es probable 
                                                                que no pueda servir el almuerzo o comida o bien aplicar un cargo por horas extra.
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
                        <h2 class="page-title">PREGUNTAS FRECUENTES</h2>
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
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	Perfect perfect perfect!
                                                        </p>
                                                        <div class="author ">Williams & Bell<br> <span style="color: #525252;">Louisiana & Nevada, USA</span>  <br>August 2015</div>
                                                    </div>
                                                </div>
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>We can not say enough. The staff was incredible. We enjoyed our stay so much & can not wait to come back again. Truly was an incredible house, stay & more!!!!</p>
                                                        <div class="author ">Edmonton´s<br> <span style="color: #525252;">Texas, USA</span><br>July 2015</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>We had an amazing stay at Villa Aqua. We stayed with our family before our wedding ceremony. The villa is beyond words. The staff could not be friendlier and are such hard workers. The chef cooks delicious meals. Carolina could quite possibly be the kindest, most calming and positive host. Our stay was perfect. We stayed at an all inclusive after our stay at the villa and there was no way it could compare. We would love to come back. </p>
                                                        <div class="author ">Maggie Guilfoile<br><span style="color: #525252;">Chicago, USA</span><br>December 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>Greatest and most helpful staff very warm and hard working, everytime I'm in playa I'll be staying at the Villa Aqua. Nothing compares.</p>
                                                        <div class="author ">Jimmy<br><span style="color: #525252;">Australia</span><br>December 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>Everything about the villa is 10/10 don't think you will be able to find a better villa in playa del Carmen. Thanks for everything :)</p>
                                                        <div class="author ">Adam<br><span style="color: #525252;">Melbourne, Australia</span><br>December 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>A wonderful villa, great location, lovely staff. Many thanks!</p>
                                                        <div class="author ">Jayne, Andy McGee & Family<br><span style="color: #525252;">British Isles</span><br>August 2014</div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	Carolina was amazing - talk about someone who gets things done! The house was amazing for relaxing and hanging out. Anything you need, Carolina is on top of! We did not have to worry about the details on this trip!
                                                        </p>
                                                        <div class="author ">Drew Rippel<br><span style="color: #525252;">Denver, USA</span> <br>October 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	We had a reunion of cousins and close family friends at Villa Aqua - we had an incredible time. The chef is fantastic, the house is superb, facilities are top class, and it's a short walk to the beach. We really loved every aspect of this trip
                                                        </p>
                                                        <div class="author ">Pritesh<br><span style="color: #525252;">London, UK</span> <br>February 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	Loved the house!!! Total of 7 people stayed there. The service was amazing and the food was excellent. Everything we asked for we received. The beach was probably a 10 minute walk from the house and very safe. We will certainly stay here again. Thank you to all the staff, we are still talking about our crazy vacation…
                                                        </p>
                                                        <div class="author ">Carla Luig<br><span style="color: #525252;">USA </span><br>August 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	Villa Aqua is a perfect place for families to share a relaxing, fun filled week in paradise. The villa is well equipped and luxurious in its comforts. The staff made us feel like family and were attentive to all our needs. 
                                                        </p>
                                                        <div class="author ">Toni Lubetsky<br><span style="color: #525252;">New York, USA</span> <br>January 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	The villa is beautiful and well equipped for families. The amenities of the home - pool, gym, bar, squash court, technology / music equipment, etc. - are fully functioning and completely up to date. The concierge, chef and staff are top notch as well. They were there to help us every step of our vacation to ensure we had the best experience not just at the home but in Playa Del Carmen. Highly recommend this Villa to any families traveling to Playa!!
                                                        </p>
                                                        <div class="author ">Amish Tolia<br><span style="color: #525252;">Chicago, USA </span><br>July 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	If you're thinking of visiting Aqua Villa for a stay, stop thinking and just go. The location is ideal; the house, magical; and the staff, so incredibly gracious. The beds are incredibly comfortable. The house is as beautiful in person as it is in the professional photographs. The food that Bernardo the chef makes is indescribably good. And, if you choose to venture out for dinner or entertainment, Carolina takes care of every detail. You are left wanting for nothing.
                                                        </p>
                                                        <div class="author ">Billy Seiber<br> <span style="color: #525252;">USA</span><br>October 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	We stayed at Villa Aqua at the end of June 2014. We were a group of ten friends, three couples and 
                                                        	four singles which worked perfectly with the configuration of the bedrooms. We were celebrating one of 
                                                        	the couples just getting married and this was the perfect location. We don't have words to explain just 
                                                        	how amazing the experience was. It was our own little bit of luxury. 
                                                        </p>
                                                        <div class="author ">Jessica Nisselle<br><span style="color: #525252;">Melbourne, Australia </span><br>June 2014</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	We hosted a company offsite at Villa Aqua and it went great! A wonderful and quiet place to gather and work during the day—a lively atmosphere to gather, eat and drink in at night. I would recommend it to anyone who asked, it's the nicest place I saw in Carmen while I was there.
                                                        </p>
                                                        <div class="author ">Joshua<br><span style="color: #525252;">San Francisco, USA </span><br>December 2013</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	a) Can't wait to come back and have chef cook us a meal out of the new wood fired oven being built. 
															<br>b) Carolina made our trip even more spectacular than the house was. Knowledge of area and setting up trips for us. 	Never change the person that does the fishing trips and snorkelling trips for you....he's great.
															<br>c) We have stayed in villas like this in St Bart's, st John, st Martin, you guys were right there. Nothing lacking.
                                                        </p>
                                                        <div class="author ">Sonny Bonacio<br<span style="color: #525252;">>New York, USA </span><br>April 2015</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="ult-item-wrap " data-animation="animated no-animation ">
                                                    <div class="stm-testimonial ">
                                                        <p>
                                                        	Each December our three generation family, now ranging in age from 16 to 90, travels for warm waters, good food 
                                                        	and togetherness. This villa is one of the best we have ever been to in terms of decor, staff, cleanness 
                                                        	and cuisine. Everything we needed was either taken care of before we needed it or as soon as we asked. Carolina, 
                                                        	the Manager, is terrific, always available, always good-natured. 
                                                        </p>
                                                        <div class="author ">Jennie Kline<br><span style="color: #525252;">NYC, USA </span><br>December 2014</div>
                                                    </div>
                                                </div>
                                                
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
							foreach ($this->data['testimonials'] as $testimonial)
							{
								$i = 0;
								?>
							
							<div class="rental-service_item">
                            	<div class="rs-item_inner">
                                	<div class="rs-item_actions">
                                		<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/guest/<?php echo basename($testimonial); ?>"><i class="fa fa-search-plus"></i></a>
                                	</div>
                                	<div class="rs-item_content">
                                		<img width="1140" height="676" src="/<?php echo $testimonial; ?>" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
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
                        <h2 class="page-title">Testimoniales</h2>
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
                                        <h2 style="color: #525252;text-align: left;font-weight:300;font-style:normal">Tarifas</h2>
                                    </div>
                                    <div class="ult-spacer spacer-5633a4efa59d6" data-id="5633a4efa59d6" data-height="18" data-height-mobile="18" data-height-tab="18" data-height-tab-portrait="18" data-height-mobile-landscape="18" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element  content-style">
                                        <div class="wpb_wrapper">
											<table class="table table-striped custom-table">
	                                            <thead>
	                                                <tr>
	                                                    <th><strong>Temporada</strong><br> 2015-2016 <br><br></th>
	                                                    <th><strong>Baja </strong><br>May 09 <br>until <br>Dec 19</th>
	                                                    <th><strong>Accion de Gracias </strong>Nov 21 <br> until<br>Nov 29</th>
														<th><strong>Navidad</strong><br> Dec 19<br> until<br> Dec 26</th>
														<th><strong>Año Nuevo</strong><br> Dec 26 <br> until<br>Jan 02</th>
														<th><strong>Alta </strong><br> Jan 02 <br> until<br>May 07</th>
														<th><strong>Easter 1</strong><br>  Mar 19 <br>until <br>Mar 26</th>
														<th><strong>Easter 2</strong><br>  Mar 26 <br>until <br>Apr 02</th>
														<th><strong>Verano</strong><br> May 07 <br> until<br>Dec 19</th>
														<th><strong>Thanksgiving</strong><br> Nov 19 <br> until<br>Nov 26</th>
														<th><strong>Christmas</strong><br> Dec 19<br> until <br>Dec 26</th>
														<th><strong>New Year</strong><br> Dec 26<br> until <br>Jan 02</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <th>1 Recámara <br>(1-2 huéspedes)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>2 Recámara <br>(2-3 huéspedes)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>3 Recámaras <br>(3-4 Huespedes)</th>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,650</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,300</td>
	                                                    <td>$1,650</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>4 bedrooms <br> (4-5 Huespedes)</th>
	                                                    <td>$1,450</td>
	                                                    <td>$1,900</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$1,900</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,450</td>
	                                                    <td>$1,900</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>5 bedrooms <br>(5-6 Huespedes)</th>
	                                                    <td>$1,600</td>
	                                                    <td>$2,050</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$2,050</td>
	                                                    <td>$1,600</td>
	                                                    <td>$2,050</td>
	                                                    <td>$4,000</td>
	                                                    <td>$4,500</td>
	                                                </tr>
	                                                <tr>
	                                                    <th>Noches Mínimas</th>
	                                                    <td>4</td>
	                                                    <td>4</td>
	                                                    <td>7</td>
	                                                    <td>7</td>
	                                                    <td>4</td>
	                                                    <td>7</td>
	                                                    <td>7</td>
	                                                    <td>4</td>
	                                                    <td>4</td>
	                                                    <td>7</td>
	                                                    <td>7</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
                                        </div>
                                    </div>
                                    <br>
                                    <p>
                                    	Impuestos no incluidos (16% + 3%)<br>
										Todas las tarifas están sujetas a cambios sin previo aviso.<br>
										Los precios de renta son por toda la casa, por noche, en base a 
                                        ocupación doble por habitación.
                                        <br>
										Si se paga tarifa prorrateada, las habitaciones libres permanecerán 
                                        cerradas y no serán rentadas a otros huéspedes.
                                        <br>
										Máxima ocupación: 10 adultos (si hay  2 o más niños menores de 12 
                                        años de edad en el grupo, se aceptan hasta 12 personas)
                                        <br>
										No se permiten mascotas.<br>
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
             	<h2 style="color: #525252;text-align: left;font-weight:300;font-style:normal">CÓMO RESERVAR</h2>
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
                                        	<h6>Proceso de reservación</h6>
                                        
                                            <p class="paragraph ng-attr-widget">
                                                <span class="ng-directive ng-binding" style="">
                                                	Para hacer una reservación, dé click en el siguiente 
                                                    ícono cuando esté listo para llenar nuestro <a href="/contact-us/">Formato de Contacto:</a>
                                                </span>
                                            </p>
                                            <div class="stm_item-features">
                                                	<div class="stm_item-features_inner">
                                                		<ul class="item-features_list_extended">
                                                			<li class="item-feature">Tan pronto como recibamos su solicitud, nos 
                                                                pondremos en contacto con usted para proporcionarle la información 
                                                                de disponibilidad y precios solicitados..
                                                            </li>
                                                			<li class="item-feature">Una vez que esté de acuerdo, reservaremos la 
                                                                fecha en nuestro calendario y enviaremos la documentación y las 
                                                                instrucciones de pago. 
                                                            </li>
                                                			<li class="item-feature"> Su reservación quedará confirmada una vez 
                                                                que recibamos su Contrato de Arrendamiento firmado junto con la 
                                                                copia de su identificación y el comprobante de pago del anticipo 
                                                                (50% del costo de la renta, el cual deberá efectuarse no más de 
                                                                7 días después de su solicitud de reserva. El 50% restante deberá 
                                                                pagarse dentro de los 45 días previos a su fecha de llegada (check in).
                                                            </li>
                                                                
                                                			<li class="item-feature">El depósito de garantía se pagará en efectivo a 
                                                                su llegada; si prefiere que su Tarjeta de Crédito quede en garantía 
                                                                del depósito de daños, por favor llene la información pertinente en 
                                                                su Contrato de Arrendamiento y envíe una copia de su tarjeta 
                                                                (frente y reverso) junto con su identificación. 
                                                            </li>
                                                			<li class="item-feature">Para reservaciones hechas con menos de 45 días 
                                                                de anticipación, requerimos la liquidación total del pago (100%) para 
                                                                confirmar la reserva. 
                                                            </li>
                                                			<li class="item-feature">Otros gastos como transportación, tours, alimentos
                                                                y otros servicios deberán pagarse en efectivo, un día antes de su fecha 
                                                                de salida (check out).
                                                            </li>
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
                        <h2 class="page-title">Tarifas &amp; Reservaciones</h2>
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
                                            <p>En Villa Aqua invitamos a todos nuestros huéspedes a tratar la propiedad con 
                                                cortesía y responsabilidad, respetando las siguientes reglas básicas:
                                            </p>
                                            <p><strong>Hora de Check In: 3pm <br>	Hora de Check Out: 12 pm</strong></p>
                                            <h6>QUEDA ESTRICTAMENTE PROHIBIDO: </h6>
                                            <ul>
                                            	<li>Fumar dentro de la casa.</li>
                                            	<li>El uso de drogas dentro de la propiedad.</li>
                                            	<li>Hacer ruido después de las 11pm.</li>
                                            	<li>Deteriorar el mobiliario, la decoración o la propiedad. </li>
                                            	<li>Sustraer cualquier artículo, propiedad de Villa Aqua. </li>
                                            </ul>
                                            <h6>AMABLEMENTE LES PEDIMOS: </h6>
                                            <ul>
                                            	<li>Respetar el número máximo de ocupantes en la villa: 10 adultos o bien, 
                                                    hasta 12 huéspedes en caso de haber 2 o más niños menores de 12 años en el grupo. </li>
                                            	<li>Apagar las unidades de aire acondicionado mientras  permanezcan abiertas puertas/ventanas. </li>
                                            	<li>Mantener las puertas de acceso cerradas en todo momento. </li>
                                            	<li>Colocar sus artículos de valor en las cajas de seguridad. </li>
                                            	<li>Favor de no bloquear la calle o estacionarse en el césped. Use la cochera o puede estacionarse frente a la puerta de entrada.</li>
                                            	<li>No dejar objetos de valor en su auto.</li>
                                            </ul>
                                            <h6>REGLAS DE LA PISCINA: </h6>
                                            <ul>
                                            	<li>Los menores de edad deberán contar con supervisión de un adulto en la piscina.</li>
                                            	<li>Nade bajo su propia responsabilidad. </li>
                                            	<li>No hay guardavidas.</li>
                                            	<li>Ducharse antes de nadar.</li>
                                            	<li>No correr / No clavados</li>
                                            	<li>No se permiten juegos de forcejeo (caballito) dentro de la piscina.</li>
                                            	<li>No se permite ningún artículo de vidrio en las áreas de la piscina.</li>
                                            	<li>No se permite introducir objetos que puedan ensuciar o dañar la piscina / jacuzzi.</li>
                                            	<li>No se permite el uso de jabón para burbujas, shampoos o espumas en la piscina / jacuzzi.</li>
                                            </ul>
                                            <p>A su llegada se le informará sobre otras posibles reglas que deberá seguir durante su estancia. 
                                                El personal supervisará el cumplimiento de las mismas, por lo que solicitamos de su entera
                                                cooperación para mantener un ambiente armonioso y relajado para todos.
                                            </p>
                                            <p>Villa Aqua está ubicada dentro de un complejo residencial familiar, por lo que le pedimos 
                                                que respete a los vecinos y utilice adecuadamente las instalaciones, para que nuestros 
                                                próximos huéspedes puedan disfrutar de sus vacaciones de igual manera. El personal de 
                                                Villa Aqua tiene la autoridad para hacer cumplir dichas reglas y salvaguardar la integridad 
                                                física de los huéspedes, el personal y la propiedad, por lo que le sugerimos seguir las
                                                instrucciones que cualquier colaborador le proporcione.
                                            </p>

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
                        <h2 class="page-title">Reglas  &amp; Políticas de La Villa</h2>
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
				<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-chino" href="/at-extra-cost/" title="" target="_self">MÁS SERVICIOS</a>
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
                            <h4 class="widget-title ">Contactanos</h4>
                            <ul class="contact-details_list left-icon ">
                                <li class="phone">Teléfono USA: 1 (866) 460 31 59</li>
                                <li class="phone">Teléfono USA: 1 (956) 465 44 59</li>
                                <li class="phone">Teléfono MX: +52 1 (984) 807 94 75</li>
                                <li class="phone">Teléfono MX: +52 1 (984) 803 27 19</li>
                                <li class="email">E-Mail: <a href="/es/contacto/">rentals@villaaqua.com</a></li> 
                            </ul>
                        </aside>
                        
                        
                        <aside id="follow_us-3 " class="widget widget_follow_us col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <h4 class="widget-title ">Siguenos</h4>
                            <p class="follow_fb "><span class="follow-icon_holder "><a href="https://www.facebook.com/villaaquamexico/" target="_blank"><i class="fa fa-facebook "></i></a></span><span class="follow_label ">Siguenos en Facebook</span>
                            </p>
                            <p class="follow_ins "><span class="follow-icon_holder "><a href="https://instagram.com/villaaquapdc/" target="_blank"><i class="fa fa-instagram "></i></a></span><span class="follow_label ">Siguenos on Instagram</span>
                            </p>
                            <p class="follow_tw "><span class="follow-icon_holder "><a href="https://twitter.com/villaaqua" target="_blank"><i class="fa fa-twitter "></i></a></span><span class="follow_label ">Siguenos on Twitter</span>
                            </p>
                        </aside>
                        
                        <aside id="recent-posts-3 " class="widget widget_recent_entries col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                            <h4 class="widget-title ">Información Importante</h4>
                            <ul>
                            	<li>
                                    <a href="/gallery/">Foto Galería</a>
                                </li>
                                <li>
                                    <a href="/es/reglas-y-politicas-de-la-villa/">Reglas & Políticas de La Villa </a>
                                </li>
                                <li>
                                    <a href="/es/riviera-maya/">Tips de Viaje </a>
                                </li>
                                <li>
                                    <a href="/es/faq/">Preguntas Frecuentes</a>
                                </li>
                            </ul>
                        </aside>
                        
                        <aside id="stm_tweets-3 " class="widget widget_stm_tweets col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        	<h4 class="widget-title " style="text-align: center;">Clíma</h4>
                            <div style="margin-top:20px">
								<div id="ww_2">
								    <ul id="weather02_body_3531673" style="position: relative; width: 177px; height: 73px; margin: 0px auto 10px; list-style: none;">
								    	<li style="position:absolute; margin:0px auto 10px auto; left:10px;">
								    		<img width="60px" height="60px" src="http://www.weatherandtime.net/images/icons/5/10d.png">
								    	</li>
								    	<li style="position:absolute; margin:0px auto 10px auto; left:10px;">
								    		<img width="60px" height="60px" src="http://www.weatherandtime.net/images/icons/5/04d.png">
								    	</li>
								        <li id="weather02_t_3531673" class="weather02_t">+25°C</li>
								        <li id="weather02_city_3531673" class="weather02_city">Playacar, Mex.</li>
								        <li id="weather02_date_3531673" class="weather02_date">2015-12-19</li>
								    </ul>
								</div>
								<script type="text/javascript" src="http://www.weatherandtime.net/w_4.js?city=3531673&amp;lang=en&amp;cf=C&amp;icon=5"></script>
						      </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="site-info ">
                    <p class="copyright ">Copyright © 2015 <a target="_blank " href="http://www.villaaqua.com/ ">Villa Aqua - Luxury Villa For rent </a>
                    </p>
                    <a href="#site-start " class="move-top"><span class="move-top_text">Subir<i class="fa fa-angle-up "></i></span></a>
                </div>
            </div>
        </footer>
        <?php
        $footer = ob_get_contents();
        ob_end_clean();
        return $footer;
    }
}
