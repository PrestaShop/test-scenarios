---
title: Change Filter Style
weight: 3
---

## Preconditions

The module should be installed
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Click on "Edit template" | The " New filters template" page is displayed |
| Try to change the filter style of the "Product weight filter" and "Product price filter" | This is impossible: the filter style is "Slider", cannot be changed |
| Try to change the filter style of the "Sub-categories" filter from Checkbox to **Radio button** and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO -> category page | The category page is displayed and the new style **Radio button** is displayed |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Click on "Edit template" | The " New filters template" page is displayed |
| Try to change the filter style of the "Sub-categories" filter from to **Drop-down list** and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO -> category page | The category page is displayed and the new style **Drop-down list** is displayed |
