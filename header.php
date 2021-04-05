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
<div id="logoSection">
<div class="container-xl">
   <div class="col-md-4">
   <div class="logo">
    <?php if ( get_theme_mod( 'site_logo' ) ) : ?>
        <a href="<?php echo site_url();?>"><img src="<?php echo get_theme_mod( 'site_logo' );?>" alt="Logo"/></a>
    <?php endif;?>
    </div>
   </div>
   <div class="col-md-8">
   
   </div>
</div>
</div>
<!--  Logo and Navigation Bar -->
<div class="mainMenu sticky">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
        <!--<a class="navbar-brand" href="#"><?php //echo get_theme_mod('sp_company_name');?></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
        </div>
    </div>
    </nav>
</div>
<!--  Logo and Navigation Bar -->
</header>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Standing on the frontline when the bombs start to fall. Heaven is jealous of our love, angels are crying from up above. Can't replace you with a million rings. Boy, when you're with me I'll give you a taste. There’s no going back. Before you met me I was alright but things were kinda heavy. Heavy is the head that wears the crown.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Playing ping pong all night long, everything's all neon and hazy. Yeah, she's so in demand. She's sweet as pie but if you break her heart. But down to earth. It's time to face the music I'm no longer your muse. I guess that I forgot I had a choice.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>
