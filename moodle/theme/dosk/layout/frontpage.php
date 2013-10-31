<?php

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
$showsidepost = $hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT);

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
$bodyclasses[] = 'content-only';

if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
//echo $PAGE->heading 
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <meta name="description" content="<?php p(strip_tags(format_text($SITE->summary, FORMAT_HTML))) ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">


<!-- START OF HEADER -->
    <div id="page-header" class="clearfix">
        <h1 class="headermain"><img src="<?php echo $OUTPUT->pix_url('logo', 'theme'); ?>" alt="dobreOSK"></h1>
		  <div class="logotxt">
		  	Profesjonalne kursy dla kierowców	
			</div>	
		  <div class="mainlink">
		  	  <a href="<?php echo $CFG->wwwroot; ?>">	<img src="<?php echo $OUTPUT->pix_url('home', 'theme'); ?>" alt="">Platforma szkoleniowa dla OSK </a>
			</div>	
        <div class="headermenu"><?php
            echo $OUTPUT->login_info();
            //echo $OUTPUT->lang_menu();
            echo $PAGE->headingmenu;
        ?></div>
        
			<?php 
			/*
		  <div class="menutop">	
				<table>
					<tbody><tr>
						<td>
							<a href="<?php echo $CFG->wwwroot; ?>">&gt; Strona główna</a><br>
							<a href="<?php echo $CFG->wwwroot; ?>/mod/page/view.php?id=5">&gt; O Nas</a><br>
							<a href="<?php echo $CFG->wwwroot; ?>/mod/page/view.php?id=29">&gt; Kontakt</a>
						</td>
						<td>
							<a href="http://sklep.sphcredo.pl/" target="_blank">&gt; Sklep online</a><br>
							<a href="http://portalnaukijazdy.pl/forum_new/" target="_blank">&gt; Forum</a><br>
							<a href="<?php echo $CFG->wwwroot; ?>/mod/page/view.php?id=26">&gt; Infolinia ekspercka</a>
						</td>
					</tr>
				</tbody></table>
			</div>
			*/ ?>
			
			
    </div>
	 
	 <?php if ($hascustommenu) { ?>
    	<div id="menu">
	     <div id="custommenu"><?php echo $custommenu; ?></div>
		</div>
    <?php } ?>
	 
	 <?php if ($hasnavbar) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
    <?php } ?>
			
<!-- END OF HEADER -->


<!-- START OF LEFT -->
 <?php if ($hassidepre) { ?>
 	<div id="region-pre" class="block-region clearfix">
   	<div class="region-content">
				<?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
      </div>
   </div>
 <?php } ?>
<!-- END OF LEFT -->


<!-- START OF CONTENT -->
    <div id="page-content" class="clearfix">
              <div class="region-content">
                   <?php echo $OUTPUT->main_content(); ?>
              </div>
    </div>
<!-- END OF CONTENT -->
	 
<!-- START OF RIGHT -->
	<?php if ($hassidepost OR (right_to_left() AND $hassidepre)) { ?>
   	<div id="region-post" class="block-region clearfix">
      	<div class="region-content">
         	<?php  echo $OUTPUT->blocks_for_region('side-post'); ?>
         </div>
      </div>
   <?php } ?>
<!-- END OF RIGHT -->
	 
	 
<!-- START OF FOOTER -->
    <div id="page-footer" class="clearfix">
	
	
	<?php 
			  /*
				<div id="menua">
					
				 	<a href="<?php echo $CFG->wwwroot;?>">Strona główna</a>
					 <a href="<?php echo $CFG->wwwroot;?>/mod/page/view.php?id=5">O nas</a>
					 <a href="<?php echo $CFG->wwwroot;?>/mod/page/view.php?id=29">Kontakt</a>
					 <a href="http://portalnaukijazdy.pl/forum_new/" target="_blank">Forum</a>
					 <a href="http://sklep.sphcredo.pl/" target="_blank">Sklep on-line</a>
					 <a href="">Mapa strony</a>
					 
					 <a href="<?php echo $CFG->wwwroot;?>/mod/page/view.php?id=4">Regulamin</a>
					 <a href="">Reklama</a>
					 <a href="<?php echo $CFG->wwwroot;?>/mod/page/view.php?id=6">Pressroom</a>
					 <a href="mailto:kontakt@ekurs.eu?subject=Błąd na stronie" style="color: red;">Zgłoś błąd na stronie</a>
				 </div>
				 <div id="foottext">
				 	&copy; Copyright 2012 ekurs.eu. Wszelkie prawa zastrzeżone. | Design by StudioSzahal & SPH Credo | Powered by SPH Credo
				 </div>
	 			*/ ?>
	 
	 
        		<div class="footer-left">

		            
		            
		        </div>

		        <div class="footer-right">
		            
		        </div>

        <?php echo $OUTPUT->standard_footer_html(); ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- END OF FOOTER -->

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>