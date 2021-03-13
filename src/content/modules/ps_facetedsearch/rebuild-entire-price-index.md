---
title: Rebuild entire price index
weight: 2
---

## Preconditions

The module should be installed\
Go to back-office -> Localization -> Currencies page, create manually a new currency \
Go to FO -> a category page -> Select the new currency > check that the Price filter is missing
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | Redirection to the module configuration page |
| Click on "Rebuild entire price index" | A message should appear in green to indicate that the Price indexing finished |
| Click on "Clear cache" | A message should appear in green to indicate that the Attribute indexing finished |
| Go to front office -> category page and select the new currency | The category page is well displayed and the price filter is displayed with the new currency |
