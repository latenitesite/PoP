<?php
$modal_templates = array(
	GD_TEMPLATE_PAGESECTION_MODALS_HOME, 
	GD_TEMPLATE_PAGESECTION_MODALS_TAG, 
	GD_TEMPLATE_PAGESECTION_MODALS_PAGE, 
	GD_TEMPLATE_PAGESECTION_MODALS_SINGLE, 
	GD_TEMPLATE_PAGESECTION_MODALS_AUTHOR, 
	GD_TEMPLATE_PAGESECTION_MODALS_404
); 
?>
<div id="<?php echo GD_TEMPLATEID_PAGESECTIONID_MODALS ?>" data-frametarget="<?php echo GD_URLPARAM_TARGET_MODALS ?>" class="modals pop-merge <?php echo implode(' ', $modal_templates); ?>"><?php echo PoP_ServerSideRendering_Factory::get_instance()->render_pagesection(GD_TEMPLATEID_PAGESECTIONSETTINGSID_MODALS, GD_URLPARAM_TARGET_MODALS) ?></div>