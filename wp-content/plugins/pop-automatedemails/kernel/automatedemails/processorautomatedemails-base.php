<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/
 
class PoP_ProcessorAutomatedEmailsBase extends PoP_AutomatedEmailsBase {

    protected function get_pagesection_settingsid() {
        
        return null;
    }

    protected function get_block_template() {
        
        $page_id = GD_TemplateManager_Utils::get_hierarchy_page_id();
        global $gd_template_settingsmanager;
        return $gd_template_settingsmanager->get_page_block($page_id);
    }
    
    protected function get_content() {

        return PoP_ServerSideRendering_Factory::get_instance()->render_block($this->get_pagesection_settingsid(), $this->get_block_template());
    }
    
    protected function has_results() {

        global $gd_template_processor_manager;
        $pagesection_settings_id = $this->get_pagesection_settingsid();
        $block_template = $this->get_block_template();
        $block_settings_id = $gd_template_processor_manager->get_processor($block_template)->get_settings_id($block_template);
        $json = PoP_ServerSideRendering_Factory::get_instance()->get_json();
        return !empty($json['dataset'][$pagesection_settings_id][$block_settings_id]);
    }
}

