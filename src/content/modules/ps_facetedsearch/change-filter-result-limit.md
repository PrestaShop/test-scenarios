---
title: Change Filter result limit
weight: 4
---

## Preconditions

The module should be installed\
Create a product with 6 different combinations of color\
![](index.php?/attachments/get/83180)
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Click on "Edit template" | The " New filters template" page is displayed |
| Change the limit of "Attribute group: Color" to 2 and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO -> category page | The category page is displayed and there are only two colors |
| Click on "Edit template" | The " New filters template" page is displayed |
| Change the limit of "Attribute group: Color" to 5 and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO -> category page | The category page is displayed and there are only five colors |
| Click on "Edit template" | The " New filters template" page is displayed |
| Change the limit of "Attribute group: Color" to "No limit" and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO -> category page | The category page is displayed and all colors are displayed |
