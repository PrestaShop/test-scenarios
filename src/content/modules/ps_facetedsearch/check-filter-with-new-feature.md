---
title: Check Filter with new Feature
weight: 4
---

## Preconditions

The module should be installed
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Catalog -> Features page and click "Add new Feature" | There are 3 fields that must be displayed <br>URL<br>Meta Title<br>Indexable |
| Set all fields and save | The feature list page is displayed and a message should appear in green to indicate that the feature is well created |
| Click on Add new value | There are 2 fields that must be displayed <br>URL<br>Meta Title |
| Set all fields and save | The feature list page is displayed and a message should appear in green to indicate that the feature value is well created |
| Create two  products with this feature | the products are well created |
| Go to back office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Click on "Edit template" | The " New filters template" page is displayed |
| Enable the New Feature and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO > Home category page | The category page is displayed and the new feature is displayed |
| Select the feature value | Active filters = pfname: vfname<br>The URL is http://shop.com/2-home?q=ufname-ufvname<br>There are two products created |
| Delete the filter with icon-close | Filter should be cleared |
