<div id="<?php echo GD_TEMPLATEID_PAGESECTIONGROUP_ID ?>" class="pop-pagesection-group pagesection-group active-top">
	<?php include POPTHEME_WASSUP_TEMPLATES.'/side.php' ?>
	<?php include POPTHEME_WASSUP_TEMPLATES.'/navigator.php' ?>
	<header class="header">
		<div id="<?php echo GD_TEMPLATEID_PAGESECTIONID_TOP ?>" data-offcanvas="top" class="offcanvas frame top topnav pop-merge <?php echo GD_TEMPLATE_PAGESECTION_TOPSIMPLE ?> navbar navbar-main navbar-inverse" role="navigation"><?php echo PoP_ServerSideRendering_Factory::get_instance()->render_pagesection(GD_TEMPLATE_PAGESECTION_TOPSIMPLE) ?></div>	
	</header>