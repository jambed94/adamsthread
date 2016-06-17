<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Adams Thread Online Newspaper</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$adamsthread_classes = array('adamsthread-class', 'my-class');
		else:
			$adamsthread_classes = array('not-adamsthread');
		endif;

	?>

	

	<body <?php body_class( $adamsthread_classes); ?>>

		<div class="container">
		
			<div class="row-nav">
				
				<div class="col-xs-12">
					
					<div class="navbar navbar-white navbar-static-top">
				    	<div class="container">
				         	<div class="navbar-header">
				            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/at_full.png" alt="Adams Thread" class="logo" href="Home"></img>
				            	<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				            	<span class="icon-bar"></span>
				            	<span class="icon-bar"></span>
				            	<span class="icon-bar"></span>
				            	</button>
				            </div>
				            <div class="collapse navbar-collapse navHeaderCollapse">
				            
				            	<ul class="nav navbar-nav navbar-right">
				            		<li class="menu"><a href="Home">Home</a></li>
				            		<li class="menu1""dropdown">
				                    	<a href="dropdown-toggle" data-toggle="dropdown">News<b class="caret"></b></a>
				                    	<ul class="dropdown-menu">
				                    		<li><a href="submenu">Local</a></li>
				                            <li><a href="submenu">National</a></li>
				                            <li><a href="submenu">International</a></li>   
				                    	</ul>
				                    </li>
				                    <li class="menu2"><a href="Politics">Politics</a></li>
				                    <li class="menu3"><a href="Crime">Crime</a></li>
				                    <li class="menu4"><a href="Technology">Technology</a></li>
				                    <li class="menu5"><a href="Sports">Sports</a></li>
				                    <li class="menu6"><a href="Environment">Environment</a></li>
				                    <li class="menu7"><a href="Culture">Culture</a></li>
				                    <li class="menu8"><a href="Opinion">Opinion</a></li>
				                </ul>            
				            </div>
				        </div>
				    </div>
				
				</div>

			</div>

		</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />