<?php
/*
  $Id$

  for modularized product info by @kymation
  
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class cm_pi_qtpro_options {
    var $code;
    var $group;
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_TITLE;
      $this->description = MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_DESCRIPTION;
      $this->description .= '<div class="secWarning">' . MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION . '</div>';

      if ( defined('MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_STATUS') ) {
        $this->sort_order = MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_STATUS == 'True');
      }
    }

    function execute() {
      global $oscTemplate, $product_info, $languages_id;
      
      $content_width = (int)MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_CONTENT_WIDTH;

      if (isset($product_info) && $product_info->product_exists() === true && $product_info->has_options() === true ) {
        $products_id=(preg_match("/^\d{1,10}(\{\d{1,10}\}\d{1,10})*$/", $_GET['products_id']) ? $_GET['products_id'] : (int)$_GET['products_id']); 
        require('includes/classes/pad_' . MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_PLUGIN . '.php');
        $class = 'pad_' . MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_PLUGIN;
        $pad = new $class($products_id);
        $qtpro_options = $pad->draw();
        
        ob_start();
        include('includes/modules/content/' . $this->group . '/templates/qtpro_options.php');
        $template = ob_get_clean();

        $oscTemplate->addContent($template, $this->group);
      }
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_STATUS');
    }

    function install() {
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable QTPRO Options Module', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_STATUS', 'True', 'Should this module be shown on the product info page?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Width', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_CONTENT_WIDTH', '6', 'What width container should the content be shown in?', '6', '1', 'tep_cfg_select_option(array(\'12\', \'11\', \'10\', \'9\', \'8\', \'7\', \'6\', \'5\', \'4\', \'3\', \'2\', \'1\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Product Info Attribute Display Plugin', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_PLUGIN', 'multiple_dropdowns', 'The plugin used for displaying attributes on the product information page', '6', '0', 'tep_cfg_select_option(array(\'base\', \'multiple_dropdowns\', \'sequenced_dropdowns\', \'single_dropdown\', \'single_radioset\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Show Out of Stock Attributes', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_SHOW_OUT_OF_STOCK', 'True', '<strong>If True:</strong> Attributes that are out of stock will be displayed.<br /><br /><b>If False:</b> Attributes that are out of stock will <b><em>not</em></b> be displayed.</b><br /><br /><b>Default is True.', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Mark Out of Stock Attributes', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_MARK_OUT_OF_STOCK', 'Right', 'Controls how out of stock attributes are marked as out of stock.', '6', '0', 'tep_cfg_select_option(array(\'None\', \'Right\', \'Left\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Display Out of Stock Message Line', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_OUT_OF_STOCK_MSGLINE', 'True', '<strong>If True:</strong> If an out of stock attribute combination is selected by the customer, a message line informing on this will displayed.', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Prevent Adding Out of Stock to Cart', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_NO_ADD_OUT_OF_STOCK', 'True', '<strong>If True:</strong> Customer will not be able to ad a product with an out of stock attribute combination to the cart. A javascript form will be displayed.', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Use Actual Price Pull Downs', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_ACTUAL_PRICE_PULL_DOWN', 'False', '<font color=\"red\"><strong>NOTE:</strong></font> This can only be used with a satisfying result if you have only one option per product.<br><strong>If True:</strong> Option prices will displayed as a final product price.<br><strong>Default is false.</strong>', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_STATUS', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_CONTENT_WIDTH', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_PLUGIN', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_SHOW_OUT_OF_STOCK', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_MARK_OUT_OF_STOCK', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_OUT_OF_STOCK_MSGLINE', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_NO_ADD_OUT_OF_STOCK', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_ATTRIBUTE_ACTUAL_PRICE_PULL_DOWN', 
                   'MODULE_CONTENT_PRODUCT_INFO_QTPRO_OPTIONS_SORT_ORDER');
    }
  }
  