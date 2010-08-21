<?php
// $Id: page.tpl.php,v 1.11 2008/01/24 09:42:51 goba Exp $
//if($user->uid == 1):
//print_r($template_files);
//endif;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
  <!--[if lte IE 6]>
	  <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie6-and-below.css";</style>
	<![endif]-->
    <!--[if IE 7]>
	  <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie7.css";</style>
	<![endif]-->
</head>
    <body class="<?php print $body_classes; ?>">
        <div id="container">
            <div id="header">
                <div class="header-wrapper">
                    <div id="dbrand">
                        <div id="logo">
                          <?php if ($logo): ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php endif; ?>
                        </div>
                          <?php if($site_slogan): ?>
                            <div class="site-slogan">
                              <?php print $site_slogan; ?>
                            </div>
                          <?php endif; ?>
                        <div class="clear-block"></div>
                    </div>
                    <!--<div id="header-right">-->
                        <?php //if($topcontact):?>
                        <!--<div id="topcontact"><?php //print $topcontact; ?></div>-->
                        <?php //endif; ?>
                        <!--<div id="search"></div>-->
                        
                    <!--</div>-->
                    <div id="site-menu">
                            <div class="menu">
                              <?php
                                if ($primary_menu) :
                                  //print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist'));
                                  print $primary_menu;
                                endif;
                              ?>
                            </div>

                    </div>
                </div>
                <div><?php print $header ?></div>
            </div>

            <!-- content starts -->
            <div id="content">
                    <?php if($show_messages or $messages): print $messages;  endif; ?>
                <div class="major">
                    <div class="front-headline"><?php if($event_update): print $event_update; endif ?></div>
                    <div class="front-pix-gallery"></div>
                </div>
                <div class="clear"></div>
                <div id="front_content_center">
                    <table border="0">
                        <thead>
                            <tr>
                                <th><h2 class="title"><?php print t('Schedule');?></h2></th>
                                <th><h2 class="title"><?php print t('News');?></h2></th>
                                <th><h2 class="title"><?php print t('Sponsors');?></h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td valign="top"><?php if($schedule): print $schedule; endif; ?></td>
                                <td valign="top"><?php if($news): print $news; endif; ?></td>
                                <td valign="top"><?php if($sponsors): print $sponsors; endif; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="stayinformed">
                        <h2 class="title"><?php print t('Stay Informed');?></h2>
                        <div id="social">
                            <div class="subscribe"><?php if($subscribe): print $subscribe; endif; ?></div>
                            <div class="follow"><?php if($follow): print $follow; endif; ?></div>
                        </div>
                    </div>
                </div>
            </div><!-- content ends -->

            <!-- footer starts -->
            <div id="footer" class="clearfix">
                <div class="copyright"><?php print $footer_message; ?></div>
                <div class="footer_follow"><?php if($footer_follow): print $footer_follow; endif; ?></div>
            </div><!-- footer ends -->
        </div>
        <?php print $closure ?>
    </body>
</html>