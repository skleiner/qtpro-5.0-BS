# qtpro-5.1-BS

Changes versus QTpro 5.0 BS
- stock check fix in shopping cart module
- added option to combine untracked options in single dropdown and single radio

Update from:
QTpro 5.0 BS

1. Uninstall: Admin =>Modules => Content[product_info] => QTPRO Options
2. Upload and replace:

includes/classes/pad_base.php
includes/classes/pad_single_dropdown.php
includes/classes/pad_single_radioset.php
includes/modules/content/product_info/cm_pi_qtpro_options.php

If you are using modular shopping cart:
includes/modules/content/shopping_cart/cm_sc_product_listing_qtpro.php
3. Reinstall: Admin =>Modules => Content[product_info] => QTPRO Options
4. New option:
Combine untracked options:
For single drop down or singel radio: combine also options which stock is not tracked.


qtpro-5.0-BS
New version based on QTpro for osc 2.3 version 4.6.1 plus newr updates and fixes.

Planned Changes:
- coding updates for latest 2.3.4 BS EDGE Community version with hardcoded filenames, database table names, paths and superglobals
- content modules for product info, shopping cart
- hooked modifications or separate functions where possible to avoid core file changes (stock checks etc in checkout pages)
- final product prices shown in option/attribute combinations on product info page also for more than one option/combinations
- general code clean up
- language constants/definitions for all texts for full multilanguage support

To do list:
- <strike>update qtprodoctor.php</strike>
  <strike>hardcoded stuff, superglobals</strike>
  <strike>language constants/definitions</strike>
- <strike>update stats_low_stock_attrib.php
  hardcoded stuff, superglobals
  language constants/definitions</strike>
- <strike>update stock.php
  hardcoded stuff, superglobals
  language constants/definitions</strike>
- <strike>replace mods in admin/boxes/tools.php by separate file</strike>
- <strike>replace mods in admin/boxes/reports.php by separate file</strike>
- <strike>avoid mods in admin/includes/functions/general.php</strike> => not possible
  <strike>load function file in modules</strike>=> not possible
  <strike>replace core function mods by own functions?</strike> => not possible
- <strike>modularize product info options</strike>
- <strike>modularize product info stock table</strike>
- <strike>Integrate database changes in product info module</strike>
- <strike>versions for Modular Product Page by kymation</strike>
- <strike>alternative product listing module for modularized shopping cart</strike>
- <strike>order class extension to avoid mods in core order class</strike>
- <strike>replace all mods in checkout_process.php by hooks</strike>
- <strike>Move stock checks in checkout_payment.php and checkout_confirmation.php to ht module</strike>
- <strike>add spanish and german translations</strike>
- <strike>Add installation checks to all modules</strike>
- <strike>Merge standard and modular product info product listing module by kymation into one universal module</strike>
- <strike>check compatibility with ajax attribute manager</strike>
- <strike>add support for attribute sort order</strike>
- <strike>add support for paypal standard</strike>
- <strike>update instructions</strike>

It would be great if there appear testers for the mods.

Beta 06 installation and update instructions included

Beta 06 is condidered final pre release


Thanks and best regards

Rainer
