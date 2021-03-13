---
title: Enable/Disable Show products only from default category
weight: 4
---

## Preconditions

The module should be installed\
Create a product with the associated categories Home & Men (Men is the category by default)\
![](index.php?/attachments/get/83184)\
Check that this product is well displayed in the FO > Clothes category
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Enable "Show products only from default category" | The "Show products from subcategories" option is disabled and hidden |
| Save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show products only from default category" is enabled |
| Go to FO > Clothes category | The category page is well displayed & doesn't contain any product |
| Disable "Show products only from default category" | The "Show products from subcategories" option is disabled and **not** hidden |
| Save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show products only from default category" is disabled |
| Go to FO > Clothes category | The category page is displayed and two products are displayed (new product is not displayed) |
