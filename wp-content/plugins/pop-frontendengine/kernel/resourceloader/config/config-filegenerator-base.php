<?php
class PoP_ResourceLoader_ConfigFileGeneratorBase extends PoP_Engine_RendererFileGeneratorBase {

	function get_dir() {

		// The configuration depends on the 'theme' and 'thememode', so then store it under these values
		// Also add it under the pop_version, to make it easy to delete stale files from the repository
		$vars = GD_TemplateManager_Utils::get_vars();
		return POP_FRONTENDENGINE_CONTENT_DIR.'/resourceloader/'.pop_version().'/'.$vars['theme'].'/'.$vars['thememode'].'/'.$this->get_subfolder();
	}
	function get_url() {

		$vars = GD_TemplateManager_Utils::get_vars();
		return POP_FRONTENDENGINE_CONTENT_URI.'/resourceloader/'.pop_version().'/'.$vars['theme'].'/'.$vars['thememode'].'/'.$this->get_subfolder();
	}

	protected function get_subfolder() {

		return PoP_Frontend_ServerUtils::bundle_external_files() ? 'global' : 'local';
	}
}