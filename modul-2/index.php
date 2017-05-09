<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nguyen Duy Van - Modul-2</title>
	<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2.less', 'css/2.css');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/2.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
   <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<header>
	<div class="b-header-main">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<div class="b-logo">	
						<a href="http://pro-theme.com/wordpress/ismile/">
							<img src="http://pro-theme.com/wordpress/ismile/wp-content/themes/ismiler/images/logo.jpg" alt="">
							<div class="logo-desc"> </div>
						</a>				
					</div>
				</div>
				<div id="toggle-nav" class="col-xs-12 col-sm-10 col-md-8 col-lg-8 menu-wrapper clearfix">
					<div class="toggle-nav-btn">
						<button class="btn btn-menu"><i class="fa fa-bars fa-lg"></i></button>
					</div>
					<div class="b-header-menu pull-right">
						<ul id="main-menu" class="nav navbar-nav navbar-main list-inline"><li id="menu-item-2872" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2603 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2872 dropdown"><a href="http://pro-theme.com/wordpress/ismile/">Home</a>
							<div class="b-all-homes"><ul class="list-unstyled">
								<li id="menu-item-2867" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2603 current_page_item menu-item-2867"><a href="http://pro-theme.com/wordpress/ismile/">Home 1</a></li>
								<li id="menu-item-2868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2868"><a href="http://pro-theme.com/wordpress/ismile/home-2/">Home 2</a></li>
								<li id="menu-item-2881" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2881"><a href="http://pro-theme.com/wordpress/ismile/home-3/">Home 3</a></li>
							</ul></div>
						</li>
						<li id="menu-item-2873" class="full-width all-menu-open menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2873 dropdown"><a href="http://pro-theme.com/wordpress/ismile/shop/">shop</a>
							<div class="b-all-homes"><ul class="list-unstyled">
								<li id="menu-item-3009" class="full-width menu-item menu-item-type-post_type menu-item-object-staticblocks menu-item-3009 all-menu-open"><div class="vc_row_anchor js_stretch_anchor" style="width: 1349px; margin-left: -104.5px;"></div><div class="vc_row wpb_row vc_row-fluid vc_row-padding-both carousel-type-None"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_left">							
										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="360" height="300" src="images/all-menu1.jpg"></div>
										</figure>
									</div>
								</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">	<h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">FEATURED PHONES</h4>
								<div class="footer-top_container clearfix">							
									<ul>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">GALAXY S SERIES</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">GALAXY NOTE SERIES</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">APPLE IPHONE</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">SONY XPERIA SERIES</a></li>
									</ul>
								</div>	<h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">OPERATING SYSTEM</h4>
								<div class="footer-top_container clearfix">									
									<ul>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/"> GOOGLE ANDROID
										</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">APPLE IOS</a></li>
									</ul>
								</div></div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">	<h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">POPULAR BRANDS</h4>
								<div class="footer-top_container clearfix">								
									<ul>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">APPLE IPHONE</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">SAMSUNG</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">HTC</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">MICROSOFT / NOKIA</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">HUAWEI</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">MOTOROLA</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">LG ELECTRONICS</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">BLACKBERRY</a></li>
									</ul>
								</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">	<h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">POPULAR BRANDS</h4>
								<div class="footer-top_container clearfix">
									<ul>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">HOT DEALS</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">LATEST PRODUCTS</a></li>
										<li><a href="http://pro-theme.com/wordpress/ismile/shop/">CLEARANCE SALE</a></li>
									</ul>
								</div>
								<div class="wpb_single_image wpb_content_element vc_align_left">			
									<figure class="wpb_wrapper vc_figure">
										<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="190" height="142" src="images/all-menu2.jpg" sizes="(max-width: 190px) 100vw, 190px"></div>
									</figure>
								</div>
							</div></div></div></div></div></div></div></div></li>
						</ul></div>
					</li>
					<li id="menu-item-2875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2875 dropdown"><a href="http://pro-theme.com/wordpress/ismile/pages/">Pages</a>
						<div class="b-all-homes"><ul class="list-unstyled">
							<li id="menu-item-3061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3061 dropdown"><a href="http://pro-theme.com/wordpress/ismile/delivery-information/">Information</a>
								<div class="b-all-homes"><ul class="list-unstyled">
									<li id="menu-item-3064" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3064"><a href="http://pro-theme.com/wordpress/ismile/delivery-information/">Delivery Information</a></li>
									<li id="menu-item-3062" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3062"><a href="http://pro-theme.com/wordpress/ismile/return-policy/">Return Policy</a></li>
									<li id="menu-item-3063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3063"><a href="http://pro-theme.com/wordpress/ismile/terms-conditions/">Terms Conditions</a></li>
									<li id="menu-item-3067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3067"><a href="http://pro-theme.com/wordpress/ismile/typography/">Typography</a></li>
									<li id="menu-item-3069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3069"><a href="http://pro-theme.com/wordpress/ismile/thank-you-for-subscribe/">Thank you</a></li>
								</ul></div>
							</li>
							<li id="menu-item-2876" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2876 dropdown"><a href="http://pro-theme.com/wordpress/ismile/pages/custom-buttons/">Featured</a>
								<div class="b-all-homes"><ul class="list-unstyled">
									<li id="menu-item-3065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3065"><a href="http://pro-theme.com/wordpress/ismile/pages/custom-buttons/">Custom buttons</a></li>
									<li id="menu-item-2878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2878"><a href="http://pro-theme.com/wordpress/ismile/pages/tabs-toggles/">Tabs / Toggles</a></li>
									<li id="menu-item-2879" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2879"><a href="http://pro-theme.com/wordpress/ismile/pages/pie-charts/">Pie Charts</a></li>
								</ul></div>
							</li>
						</ul></div>
					</li>
					<li id="menu-item-2869" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2869"><a href="http://pro-theme.com/wordpress/ismile/blog/">Blog</a></li>
					<li id="menu-item-2874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2874"><a href="http://pro-theme.com/wordpress/ismile/contacts/">Contacts</a></li>
				</ul>                            
				<div class="header-search-icon"><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></div>
				<div class="header-search">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
								<div class="navbar-search">
									<form action="http://pro-theme.com/wordpress/ismile" method="get" id="search-global-form" class="search-global">
										<input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" id="searchQuery" class="search-global__input">
										<input type="hidden" name="post_type" value="product"> 
										<button class="search-global__btn"><i class="fa fa-search"></i></button>
										<div class="search-global__note">Begin typing your search above and press return to search.</div>
									</form>

								</div>
							</div>
						</div>
					</div>
					<button type="button" class="search-close search-form_close close"><i class="fa fa-times"></i></button>
				</div>                      
			</div>												
		</div>			
		<div id="cart-wrapper" class="col-xs-6 col-sm-12 col-md-2 col-lg-2">
			<div class="b-cart pull-right">
				<button id="cart" class="btn btn-default-color1 btn-sm">
					<span class="price"><i class="fa fa-shopping-bag"></i><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>0.00</span></span>
					<span class="counter-wrapper"><span class="counter">0</span></span>
				</button>																				
			</div>
		</div>
	</div>
</div>
</div>
</header>
<link rel='stylesheet' id='ismiler-master-css'  href='http://pro-theme.com/wordpress/ismile/wp-content/themes/ismiler/css/master.css?ver=4.5.8' type='text/css' media='all' />
<link rel='stylesheet' id='ismiler-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%7CRoboto+Slab%3A400%2C300%2C700&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://pro-theme.com/wordpress/ismile/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all' />
</body>
</html>
