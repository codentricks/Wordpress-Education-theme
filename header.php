<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php if(is_home()) { echo bloginfo("name");  } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php  $settings = get_option( "sp_theme_settings" );?>
	<?php if ( get_theme_mod( 'sp_logo' ) ) : ?>
	<link rel="shortcut icon" href="<?php echo get_theme_mod( 'sp_favicon' ); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_theme_mod( 'sp_favicon' ); ?>" type="image/x-icon">
    <?php endif; ?>
	
	<?php wp_head(); ?>

</head>
<body >
<header>
<!--  top bar -->
<div class="topbar">

</div>
<!--  top bar -->

<!--  Logo and Navigation Bar -->
<div class="mainMenu">

</div>
<!--  Logo and Navigation Bar -->
</header>
