---
title: Enable/Disable Show products from subcategories
weight: 3
---

## Preconditions

The module should be installed\
Create a product with the associated categories Home & Men (Men is the category by default)\
![](index.php?/attachments/get/83183)\
Check that this product is well displayed in the FO > Clothes category
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Disable "Show products from subcategories" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show products from subcategories" is disabled |
| Go to FO > Clothes category | The category page is well displayed & the product is not displayed |
| Enable "Show products from subcategories" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show products from subcategories" is enabled |
| Go to FO > Clothes category | The category page is well displayed & the product is well displayed |
