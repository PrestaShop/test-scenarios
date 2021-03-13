---
title: Enable/Disable Use tax
weight: 6
---

## Preconditions

The module should be installed\
Go to BO > International > Taxes page > Disable Tax
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Disable "Use tax to filter price" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Use tax to filter price" is disabled |
| Click on "Rebuild entire price index" | A message should appear in green to indicate that the Price indexing finished |
| Click on "Clear cache" | A message should appear in green to indicate that the Attribute indexing finished |
| Go to front office -> Clothes category page | The category page is displayed and check that the price filter is displayed without Tax |
| Enable "Use tax to filter price" and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" and "Use tax to filter price" is enabled |
| Click on "Rebuild entire price index" | A message should appear in green to indicate that the Price indexing finished |
| Click on "Clear cache" | A message should appear in green to indicate that the Attribute indexing finished |
| Go to front office -> Clothes category page | The category page is displayed and check that the price filter is displayed with Tax |
