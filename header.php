<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name') ?> - <?php the_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Average|Didact+Gothic" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container" id="fixed-top">
            <div class="container" id="topbar">
                <div class="topbar-title">
                    <a href='/'><img src="/wp-content/uploads/2017/06/topbar-logo.png" class='topbar-logo' /><h1 id='sitename'><?php bloginfo('name') ?></h1></a>
                </div>
                <div class="topbar-contact">
                    <a href='https://www.facebook.com/teddingtonosteopaths' target='_blank'><i class="fa fa-facebook-square white social" aria-hidden="true"></i></a>
                    <a href='http://twitter.com/TW11Osteopaths' target='_blank'><i class="fa fa-twitter-square white social" aria-hidden="true"></i></a>
                </div>  
                <div class="topbar-contact">
                    <a href='tel:02089773295'><img src='/wp-content/uploads/2017/06/call-us.png' class='call-us'/><h3 id='tel'>020 8977 3295</h3></a>
                </div>
                <div class="topbar-contact">
                    <a href='/contact-us/'><img src='/wp-content/uploads/2017/06/email-us.png' class='email-us'/><h3 id='email'>Email</h3></a>
                </div>
                <div class="topbar-contact">
                    <a href='/contact-us#map'><img src='/wp-content/uploads/2017/06/find-us.png' class='find-us'/><h3  id='find'>Find us</h3></a>
                </div>          
            </div>
            <div class="navbar navbar-inverse sitewide-nav">
                <div class="navbar-inner">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                                <?php wp_nav_menu("main"); ?>
                            <div class="clearfix"></div>
                        </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>