<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT', PoP_ServerUtils::get_template_definition('blockgroup-tabpanel-tagmainallcontent'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT', PoP_ServerUtils::get_template_definition('blockgroup-tabpanel-tagallcontent'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS', PoP_ServerUtils::get_template_definition('blockgroup-tabpanel-taglinks'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS', PoP_ServerUtils::get_template_definition('blockgroup-tabpanel-tagwebposts'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS', PoP_ServerUtils::get_template_definition('blockgroup-tabpanel-tagsubscribers'));

class GD_Template_Processor_TagSectionTabPanelBlockGroups extends GD_Template_Processor_TagSectionTabPanelBlockGroupsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS,
		);
	}

	function get_blockgroup_blocks($template_id) {

		$ret = parent::get_blockgroup_blocks($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_LIST,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_LIST,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_LIST,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_LIST,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_LIST,
						// GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLLMAP,
					)
				);
				break;
		}

		// Allow Events Manager to add the Map format
		$ret = apply_filters('GD_Template_Processor_TagSectionTabPanelBlockGroups:blocks', $ret, $template_id);

		return $ret;
	}

	function get_panel_headers($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				$ret = array(
					GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_LIST,
					),
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT:

				$ret = array(
					GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_LIST,
					),
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS:

				$ret = array(
					GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_LIST,
					),
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS:

				$ret = array(
					GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_DETAILS => array(
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_LIST,
					),
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				$ret = array(
					GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_FULLVIEW => array(),
					GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_DETAILS => array(
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_LIST,
					),
					// GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLLMAP,
				);
				break;
		}

		if ($ret) {
			return apply_filters('GD_Template_Processor_TagSectionTabPanelBlockGroups:panel_headers', $ret, $template_id);
		}

		return parent::get_panel_headers($template_id, $atts);
	}

	function intercept($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				return true;
		}

		return parent::intercept($template_id);
	}

	protected function get_controlgroup_bottom($template_id) {

		switch ($template_id) {

			// Override parent value
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				return null;
		
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				return GD_TEMPLATE_CONTROLGROUP_SUBMENUUSERLIST;
		}

		return parent::get_controlgroup_bottom($template_id);
	}

	protected function get_blocksections_classes($template_id) {

		$ret = parent::get_blocksections_classes($template_id);

		switch ($template_id) {

			// Override parent value
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				$ret['controlgroup-top'] = 'right pull-right';
				break;
		}

		return $ret;
	}

	protected function get_controlgroup_top($template_id) {

		switch ($template_id) {

			// Override parent value
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				return GD_TEMPLATE_CONTROLGROUP_SUBMENUPOSTLISTMAIN;
		}

		return parent::get_controlgroup_top($template_id);
	}

	function get_filter_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT:
				
				return GD_TEMPLATE_FILTER_TAGWILDCARDPOSTS;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS:
				
				return GD_TEMPLATE_FILTER_TAGLINKS;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS:
				
				return GD_TEMPLATE_FILTER_TAGWEBPOSTS;
		
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:
		
				return GD_TEMPLATE_FILTER_WILDCARDUSERS;
		}
		
		return parent::get_filter_template($template_id);
	}

	function get_title($template_id) {

		switch ($template_id) {

			// Override parent value
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				return gd_navigation_menu_item(POPTHEME_WASSUP_PAGEPLACEHOLDER_HOME, true).__('Latest content', 'poptheme-wassup');
		
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:
		
				return GD_Template_Processor_CustomSectionBlocksUtils::get_tag_title();
		}
		
		return parent::get_title($template_id);
	}

	function get_submenu($template_id) {

		switch ($template_id) {

			// Override parent value
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:

				return null;
		}
		
		return parent::get_submenu($template_id);
	}

	function get_panel_header_fontawesome($blockgroup, $blockunit) {

		$details = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_DETAILS,
		);
		$simpleviews = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_SIMPLEVIEW,
		);
		$fullviews = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_FULLVIEW,
		);
		$thumbnails = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_THUMBNAIL,
		);
		$lists = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_LIST,
		);
		$maps = array(
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLLMAP,
		);

		if (in_array($blockunit, $details)) {

			return 'fa-th-list';
		}
		elseif (in_array($blockunit, $simpleviews)) {
			
			return 'fa-angle-right';
		}
		elseif (in_array($blockunit, $fullviews)) {
			
			return 'fa-angle-double-right';
		}
		elseif (in_array($blockunit, $thumbnails)) {
			
			return 'fa-th';
		}
		elseif (in_array($blockunit, $lists)) {
			
			return 'fa-list';
		}
		elseif (in_array($blockunit, $maps)) {
			
			return 'fa-map-marker';
		}

		return parent::get_panel_header_fontawesome($blockgroup, $blockunit);
	}
	function get_panel_header_title($blockgroup, $blockunit, $atts) {

		$details = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_DETAILS,
		);
		$simpleviews = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_SIMPLEVIEW,
		);
		$fullviews = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_FULLVIEW,
		);
		$thumbnails = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_THUMBNAIL,
		);
		$lists = array(
			GD_TEMPLATE_BLOCK_TAGMAINALLCONTENT_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGALLCONTENT_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGLINKS_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGWEBPOSTS_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLL_LIST,
		);
		$maps = array(
			GD_TEMPLATE_BLOCK_TAGSUBSCRIBERS_SCROLLMAP,
		);

		if (in_array($blockunit, $details)) {

			return __('Details', 'poptheme-wassup');
		}
		elseif (in_array($blockunit, $simpleviews)) {
			
			return __('Feed', 'poptheme-wassup');
		}
		elseif (in_array($blockunit, $fullviews)) {
			
			return __('Extended', 'poptheme-wassup');
		}
		elseif (in_array($blockunit, $thumbnails)) {
			
			return __('Thumbnail', 'poptheme-wassup');
		}
		elseif (in_array($blockunit, $lists)) {
			
			return __('List', 'poptheme-wassup');
		}
		elseif (in_array($blockunit, $maps)) {
			
			return __('Map', 'poptheme-wassup');
		}
		
		return parent::get_panel_header_title($blockgroup, $blockunit, $atts);
	}
	function get_panel_header_tooltip($blockgroup, $blockunit) {

		switch ($blockgroup) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:
				
				return $this->get_panel_header_title($blockgroup, $blockunit, $atts);
		}

		return parent::get_panel_header_tooltip($blockgroup, $blockunit);
	}

	function is_active_blockunit($blockgroup, $blockunit) {

		switch ($blockgroup) {

			// case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT:
			// case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT:
			// case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS:
			// case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				global $gd_template_settingsmanager;
				if ($page_id = GD_TemplateManager_Utils::get_hierarchy_page_id()) {
					return ($gd_template_settingsmanager->get_page_block($page_id, GD_SETTINGS_HIERARCHY_TAG) == $blockunit);
				}
				break;
		}
	
		return parent::is_active_blockunit($blockgroup, $blockunit);
	}

	function get_default_active_blockunit($template_id) {

		$pages_id = array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT => POP_COREPROCESSORS_PAGE_MAIN,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT => POP_WPAPI_PAGE_ALLCONTENT,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS => POPTHEME_WASSUP_PAGE_WEBPOSTLINKS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS => POPTHEME_WASSUP_PAGE_WEBPOSTS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS => POPTHEME_WASSUP_PAGE_SUBSCRIBERS,
		);
		if ($page_id = $pages_id[$template_id]) {

			global $gd_template_settingsmanager;
			return $gd_template_settingsmanager->get_page_block($page_id, GD_SETTINGS_HIERARCHY_TAG);
		}
	
		return parent::get_default_active_blockunit($template_id);
	}

	function init_atts_blockgroup_block($blockgroup, $blockgroup_block, &$blockgroup_block_atts, $blockgroup_atts) {

		global $gd_template_settingsmanager;

		// Set lazy for the blocks
		$active_blockunit = $this->get_active_blockunit($blockgroup, true);
		switch ($blockgroup) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				// Hide the Title, Controls, Filter
				$this->add_att($blockgroup_block, $blockgroup_block_atts, 'title', '');		
				$this->add_att($blockgroup_block, $blockgroup_block_atts, 'filter-hidden', true);	
				$this->add_att($blockgroup_block, $blockgroup_block_atts, 'show-controls', false);	

				// Do not load the content if not showing it initially
				if ($active_blockunit != $blockgroup_block) {

					$this->add_att($blockgroup_block, $blockgroup_block_atts, 'content-loaded', false);		
				}
				break;

		}

		return parent::init_atts_blockgroup_block($blockgroup, $blockgroup_block, $blockgroup_block_atts, $blockgroup_atts);
	}

	function init_atts($template_id, &$atts) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS:

				// Hide the tab title
				$this->append_att($template_id, $atts, 'class', 'pop-tabtitle-hidden');
				break;
		}

		$class = '';
		$feeds = array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGMAINALLCONTENT,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGALLCONTENT,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGLINKS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGWEBPOSTS,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_TAGSUBSCRIBERS,
		);
		if (in_array($template_id, $feeds)) {
			$class = 'feed';
		}
		if ($class) {
			$this->append_att($template_id, $atts, 'class', $class);
		}

		return parent::init_atts($template_id, $atts);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_TagSectionTabPanelBlockGroups();
