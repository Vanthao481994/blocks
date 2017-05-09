<html>
<head>
	<meta charset="UTF-8">
	<title>Nguyen Duy Van - Modul-1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	if (!class_exists('lessc')) {
		include ('./libs/lessc.inc.php');
	}
	$less = new lessc;
	$less->compileFile('less/1.less', 'css/1.css');
	?>
	<link href="css/1.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="b-top-line ">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="b-top-options pull-left">
							<div class="nav">
								<ul class="list-inline">
									<li class="dropdown">
										<div class="btn-group">
											<ul id="menu-top-navigation-menu" class="nav navbar-nav navbar-main list-inline"><li id="menu-item-2859" class="fa fa-angle-down menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2859 dropdown"><a href="http://pro-theme.com/wordpress/ismile/my-account/">My Account</a>
												<div class="b-all-homes"><ul class="list-unstyled">
													<li id="menu-item-3219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3219"><a href="http://pro-theme.com/wordpress/ismile/my-account/">Account</a></li>
													<li id="menu-item-2860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2860"><a href="http://pro-theme.com/wordpress/ismile/checkout/">Checkout</a></li>
													<li id="menu-item-2861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2861"><a href="http://pro-theme.com/wordpress/ismile/cart/">Cart</a></li>
													<li id="menu-item-3220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3220"><a href="http://pro-theme.com/wordpress/ismile/delivery-information/">Information</a></li>
													<li id="menu-item-3217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3217"><a href="http://pro-theme.com/wordpress/ismile/return-policy/">Return Policy</a></li>
													<li id="menu-item-3218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3218"><a href="http://pro-theme.com/wordpress/ismile/terms-conditions/">Terms Conditions</a></li>
												</ul></div>
											</li>
										</ul>							
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="b-top-info pull-right">
						<div class="nav">
							<ul class="list-inline">
								<li>
									<span><i class="fa fa-phone"></i>345-3534-346</span>
								</li>
								<li>
									<span><i class="fa fa-envelope-o"></i>INFO@ISMILE.COM</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</header>
<link rel='stylesheet' id='ismiler-master-css'  href='http://pro-theme.com/wordpress/ismile/wp-content/themes/ismiler/css/master.css?ver=4.5.8' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://pro-theme.com/wordpress/ismile/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all' />
</body>
</html>
