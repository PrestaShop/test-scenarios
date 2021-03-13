---
title: Enable/Disable Show unavailable, out of stock last
weight: 8
---

## Preconditions

The module should be installed\
Edit the product "Mountain fox - Vector graphics" with demo_18 as a reference with quantity =0
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Enable "Show unavailable, out of stock last" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show unavailable, out of stock last" is enabled |
| Go to FO > Art category page | The category page is displayed and the product is displayed in the last position |
| Disable "Show unavailable, out of stock last" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Show unavailable, out of stock last" is disabled |
| Go to FO > Art category page | The category page is displayed and the product is displayed in the correct (4th) position (not the last one ) |
