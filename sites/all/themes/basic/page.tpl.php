<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>

        <title>5050MKT Agencia Creativa</title>
        <?php print $head; ?>
        <?php print $styles; ?>
<!--        <script type="text/javascript" src="http://use.typekit.com/hxo2xpq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->
<!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie6.css"</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie7.css"</style><![endif]-->

    </head>

    <body class="<?php print $body_classes; ?>">
        <div id="skip"><a href="#content"><?php print t('Skip to Content'); ?></a> <a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>  


        <div id="page" style="<?php echo $day_night_sky_background; ?>">

            <!-- ______________________ HEADER _______________________ -->

            <div id="header" style="<?php echo $day_night_sky_santiago; ?>">

                <div id="header-content">
                    <?php if ($logo || $top_menu): ?>
                        <div id="menu-wrapper" class="round-corners">
                            <div id="header-region" class="round-corners">
                                <?php if (!empty($logo)): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                    </a>
                                <?php endif; ?>  
                                <?php print $top_menu; ?>

                                <div id="fecha-header">
                                    <p id="fecha-header-dia" >
                                        <span id="fecha-header-dia-numero" ><?php echo $fecha->dia_numero; ?></span>
                                        <span id="fecha-header-dia-texto" ><?php echo $fecha->dia_texto; ?></span>
                                    </p>
                                    <p id="fecha-header-mes-ano">
                                        <span id="fecha-header-mes" ><?php echo $fecha->mes; ?></span>
                                        <span id="fecha-header-ano" ><?php echo $fecha->ano; ?></span>
                                    </p>


                                </div>
    <!--                                <img alt="fechaHeader" id="fechaHeader" src="/sites/default/files/images/fechaHeader.png">   -->
                                <img alt="cortina" id="cortinaHeader" src="<?php echo base_path() . file_directory_path(); ?>/images/cortina.png">


                            </div>

                        </div>
                    <?php endif; ?>

                    <?php // Uncomment to add the search box.// print $search_box; ?>


                    <?php print $header; ?>


                </div>
            </div> <!-- /header -->

            <?php if ($is_front): ?>
                <div id="header-content-divisor">

                </div>
            <?php endif; ?>
            <!-- ______________________ MAIN _______________________ -->

            <div id="main" class="clearfix">




                <div id="content">
                    <div id="content-inner" class="inner column center">

                        <?php if ($content_top): ?>
                            <div id="content-top">
                                <?php print $content_top; ?>
                            </div> <!-- /#content-top -->
                        <?php endif; ?>


                        <?php if ($left): ?>
                            <div id="sidebar-first" class="column sidebar first">
                                <div id="sidebar-first-inner" class="inner">
                                    <?php print $left; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- /sidebar-left -->



                        <?php if ($right): ?>
                            <div id="sidebar-second" class="column sidebar second">
                                <div id="sidebar-second-inner" class="inner">
                                    <?php print $right; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- /sidebar-second -->



                        <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
                            <div id="content-header">

                                <?php print $breadcrumb; ?>

                                <?php print $messages; ?>

                                <?php print $help; ?> 

                                
                               
                                <?php

                                if (in_array('administrador', $user->roles) || $user->uid == '1') {
                                    print $tabs;
                                }
                                ?>
                                

                            </div> <!-- /#content-header -->
                        <?php endif; ?>

                        <div id="content-area">

                            <?php print $content; ?>
                        </div> <!-- /#content-area -->

                        <?php print $feed_icons; ?>

                        <?php if ($content_bottom): ?>
                            <div id="content-bottom">
                                <?php print $content_bottom; ?>
                            </div><!-- /#content-bottom -->
                        <?php endif; ?>

                    </div>


                </div> <!-- /content-inner /content -->


                
            </div> <!-- /main -->






            <!-- ______________________ FOOTER _______________________ -->
            <div id="content-footer-divisor">

            </div>


            <div id="footer">
                <?php if (!empty($footer_message) || !empty($footer_block)): ?>
                    <?php print $footer_message; ?>
                    <?php print $footer_block; ?>
                <?php endif; ?>
                <div id="footerContent">
                    <div id="cortinaFooterColumn">
                        <img alt="cortina" id="cortinaFooter" src="<?php echo base_path() . file_directory_path(); ?>/images/cortina.png">

                    </div>

                    <?php if ($secondary_links): ?>
                        <div id="secondary-links-container">
                            <?php print buildSecundaryLinks($secondary_links); ?>
                        </div>
                    <?php endif; ?>

                    <div id="newsletter">
                        <span class="museo-font">Newsletter</span>
                        <p class="museo-font">Recibe ofertas e informaciones sobre nuestros servicios</p>
                        <input id="newsletter-input" type="text" class="round-corners"> 
                            <a href="#javascript" class="no-decoration-anchor round-corners" id="newsletter-subscribe-button">Subscr&iacute;bete</a>
                    </div>

                </div>
                <img alt="mascota" id="mascota-footer" src="<?php echo base_path() . file_directory_path(); ?>/images/mascotaFooter.png">
            </div> <!-- /footer -->


        </div> <!-- /page -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <?php print $scripts; ?>

        <?php print $closure; ?>

    </body>
</html>