<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Helix Framework   
# ---------------------------------------------------------------
# Template Name - Shaper Helix
# Template Version 1.9.0
# ---------------------------------------------------------------
# Author - JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2013 JoomShaper.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# license - CSS  - JS - IMAGE files  are Copyrighted material 
# Websites: http://www.joomshaper.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/helix.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
	<?php
		$helix->loadHead();
		$helix->addCSS('template.css,joomla.css,custom.css,modules.css,typography.css,css3.css');
		if ($helix->isRTL()) $helix->addCSS('template_rtl.css');
		$helix->getStyle();
	?>
</head>
<?php $helix->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $helix->direction . ' ' . $helix->style ?> clearfix">
	<div class="sp-wrap main-bg clearfix">
		<?php $helix->addFeatures('toppanel'); ?>
		<div id="header" class="clearfix">
			<?php 
				$helix->addFeatures('logo,fontsizer');
				$helix->addModules("search");
			?>
		</div>		
		<?php
			$helix->addFeatures('hornav'); //Main navigation
			$helix->addModules("slides"); //position slides
			$helix->addModules('user1, user2, user3, user4, user5, user6', 'sp_flat', 'sp-userpos'); //positions user1-user6 
		?>
		<div class="clearfix">
			<?php $helix->loadLayout(); //mainbody ?>
		</div>
		<?php 
			$helix->addModules("breadcrumbs"); //breadcrumbs
			$helix->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'sp_flat', 'sp-bottom', '',true); //positions bottom1-bottom6 
		?>		
		<div id="sp-footer" class="clearfix">
			<div class="sp-inner">
				<?php $helix->addFeatures('helixlogo'); /*--- Helix logo ---*/?>	
				<div class="cp">
					<?php $helix->addFeatures('copyright,brand,jcredit,validator') /*--- copyright, brand, jcredit, validator feature---*/ ?>
					<!-- You need to purchase copyright removal license from http://www.joomshaper.com/pricing?tab=copyright in order to remove brand/www.joomshaper.com link. -->					
				</div>
				<?php 
					$helix->addFeatures('totop');			
					$helix->addModules("footer-nav"); 
				?>
			</div>
		</div>
	</div>
	
	<?php 
		$helix->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery and ieonly features ---*/
		$helix->compress(); /* --- Compress CSS and JS files --- */
		$helix->getFonts(); /*--- Standard and Google Fonts ---*/
	?>
	<jdoc:include type="modules" name="debug" />
</body>
</html>