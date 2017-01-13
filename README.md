# qtpro-5.0-BS
New version based on QTpro for osc 2.3 version 4.6.1 plus newr updates and fixes.

Planned Changes:
- coding updates for latest 2.3.4 BS EDGE Community version with hardcoded filenames, database table names, paths and superglobals
- content modules for product info, shopping cart
- hooked modifications or separate functions where possible to avoid core file changes (stock checks etc in checkout pages)
- final product prices shown in option/attribute combinations on product info page also for more than one option/combinations
- general code clean up
- language constants/definitions for all texts for full multilanguage support

To do list:
- update qtprodoctor.php
  hardcoded stuff, superglobals
  language constants/definitions
- update stats_low_stock_attrib.php
  hardcoded stuff, superglobals
  language constants/definitions
- update stock.php
  hardcoded stuff, superglobals
  language constants/definitions
- replace mods in admin/boxes/tools.php by separate file
- replace mods in admin/boxes/reports.php by separate file
- avoid mods in admin/includes/functions/general.php
  load function file in module?
  replace core function mods by own functions?
- modularize product info options
- modularize product info stock table
- versions for Modular Product Page by kymation
- alternative product listing module for modularized shopping cart
- order class extension to avoid mods in core order class
- replace all mods in checkout files by hooks?

It would be great if there appear testers for the mods.

Who has the old version already installed:

- replace the admin files

- upload and install the product info content modules and (IMPORTANT!) uncomment the complete options/attributes section in product_info.php

- replace all pad class files

For new installations:

- instructions are not updated yet

follow the old instructions except

A.: don't modify  admin/includes/boxes/tools.php and reports.php, upload the nwe files instead

B.: upload and install the product info content modules and (IMPORTANT!) uncomment the complete options/attributes section in product_info.php instead to apply the mods

Most important for now are the changes in the product info option modules to show final prices according to the option selection even if there are muliple option combinations (single drop down and single radios)

 

Thanks and best regards

Rainer
