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

Beta 02 installation

Who has the old version already installed:

- replace the admin files

- upload and install the product info content modules and (IMPORTANT!) uncomment the complete options/attributes section in product_info.php
- upload all other files included in the "new files" directory
- replace all pad class files
- undo all modifications of the old version in:
   - includes/classes/orders.php
   - includes/functions/general.php
   - checkout_payment.php
   - checkout_confirmation.php
   - checkout_process.php
   
   use the files included in: "Modified files for 2.3.4 BS" or compare and apply the changes. (hook registry and hook calls)
   
   - keep the modifications in includes/application_top.php
   - keep the modifications in shopping_cart.php or use the included content module "product listing qtpro" instead of "product listing" for the modularized shopping cart.
   If you do not have the latest EDGE version with hooks support:
   Use the included application_top.php and copy: legacy/includes/classes/hooks.php

For new installations:

- instructions are not updated yet

follow the old instructions except

A.: don't modify  admin/includes/boxes/tools.php and reports.php, upload the new files instead

B.: upload and install the product info content modules and (IMPORTANT!) uncomment the complete options/attributes section in product_info.php instead to apply the mods

C.: apply only the modification to: 
    - includes/application_top.php
    - shopping_cart.php if not modularized or use the included content module "product listing qtpro" instead of "product listing" for the modularized shopping cart.

   use the files included in: "Modified files for 2.3.4 BS" or compare and apply the changes. (hook registry and hook calls)
   - checkout_payment.php
   - checkout_confirmation.php
   - checkout_process.php

   If you do not have the latest EDGE version with hooks support:
   Use the included application_top.php and copy: legacy/includes/classes/hooks.php   


Thanks and best regards

Rainer