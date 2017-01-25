<?php
/*
      QT Pro Version 4.0
  
      stock.php language file
  
      Contribution extension to:
        osCommerce, Open Source E-Commerce Solutions
        http://www.oscommerce.com
     
      Copyright (c) 2004 Ralph Day
      Released under the GNU General Public License
  
      Based on prior works released under the GNU General Public License:
        QT Pro prior versions
          Ralph Day, October 2004
          Tom Wojcik aka TomThumb 2004/07/03 based on work by Michael Coffman aka coffman
          FREEZEHELL - 08/11/2003 freezehell@hotmail.com Copyright (c) 2003 IBWO
          Joseph Shain, January 2003
        osCommerce MS2
          Copyright (c) 2003 osCommerce
          
      Modifications made:
        11/2004 - none in this version
  
*******************************************************************************************
  
  
*/
define('HEADING_TITLE','Stock de productos');

define('TABLE_HEADING_QUANTITY','Cantidad');
define('TABLE_HEADING_QTPO_DOCTOR','QTPro Doctor');
define('TABLE_HEADING_LINKS','Links');
define('TEXT_LINK_EDIT_PRODUCT','Editar producto');
define('TEXT_LINK_LOW_STOCK_REPORT','Ir al informe de stock');
define('TEXT_LINK_GO_TO_PRODUCT','Ir a este producto en: ');
define('WARNING_NO_PRODUCT','Atención! Este producto no parece existir en ninguna categoría. Sus clientes no lo encontrarán.');

define('QTPRO_OPTIONS_WARNING', '<strong>El Módulo de contenido QT Pro Product Info</strong> no está instalado. Es requerido.');
define('QTPRO_OPTIONS_INSTALL_NOW', '<u>Instalar Ahora el módulo QT Pro Product Info</u>');
define('QTPRO_HT_WARNING', '<strong>El Módulo QT Pro Header Tag</strong> no está instalado o no está habilitado. Es requerido.');
define('QTPRO_HT_INSTALL_NOW', '<u>Instalar Ahora el módulo QT Pro Header Tag</u>');

define('BUTTON_ADD','Añadir');
define('BUTTON_UPDATE','Actualizar');

// detailed product inverstigation used in qtpro_doctor_formulate_product_investigation function
define('TEXT_DETAILED_STOCK_MATCH_TRUE','<span style="color:green; font-weight: bold; font-size:1.2em;">The stock quantity summary is ok</span><br>
				This means that the current summary of this products quantity, which is in the database, is the value we get if we calculates it from scratch right now.<br>
				<b>The Summary stock is: %s </b><br><br>');
define('TEXT_DETAILED_STOCK_MATCH_FALSE','<span style="color:red; font-weight: bold; font-size:1.2em;">The stock quantity summary is NOT ok</span><br>
				This means that the current summary of this products quantity, which is in the database, isn\'t the value we get if we calculates it from scratch right now.<br>
				<b>The current summary stock is: %s </b><br>
				<b>If we calculates it we get: %s </b><br><br>');
define('TEXT_DETAILED_STOCK_ENTRIES_HEALTHY','<span style="color:green; font-weight: bold; font-size:1.2em;">The options stock is ok</span><br>
				This means that the database entries for this product looks the way they should. No options are missing in any row. No option exist in any row where it should not.<br>
				<b>Total number of stock entries this product has: %s </b><br>
				<b>Number of messy entries: %s </b><br>');
define('TEXT_DETAILED_STOCK_ENTRIES_NOT_HEALTHY','<span style="color:red; font-weight: bold; font-size:1.2em;">The options stock is NOT ok</span><br>
				This means that at least one of the database entries for this product is messed up. Either options are missing in rows or options exist in rows they should not.<br>
				<b>Total number of stock entries this product has: &s </b><br>
				<b>Number of messy entries: %s</b><br><br>');
define('TEXT_DETAILED_STOCK_AUTOMATIC_SOLUTIONS_AVAILABLE','<p><span style="color:blue; font-weight: bold; font-size:1.2em;">Soluciones automáticas disponibles:</span><br>');
define('TEXT_DETAILED_STOCK_SOLUTIONS_STOP_TRACKING','<span style="color:blue; font-weight: bold;">Possible solutions: </span>Delete the corresponding row(s) from the database or stop tracking the stock for that option.<br><br>');
define('TEXT_DETAILED_STOCK_OPTIONS_SHOULD_NOT_EXIST','<br><b>These options exists in row(s) although they should not:</b><br>');
define('TEXT_DETAILED_STOCK_SOLUTIONS_START_TRACKING','<span style="color:blue; font-weight: bold;">Possible solutions: </span>Delete the corresponding row(s) from the database or start tracking the stock for that option.<br><br>');
define('TEXT_DETAILED_STOCK_LINK_AMPUTATION','Amputation (Deletes all messy rows)');
define('TEXT_DETAILED_STOCK_LINK_SET_SUMMARY','Set the summary stock to: %s');
