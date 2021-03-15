---
title: Check Filter with new attribute
weight: 3
---

## Preconditions

The module should be installed
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Catalog -> Attribute page and click "Add new Attribute" | There are 3 fields that must be displayed <br>URL<br>Meta Title<br>Indexable |
| Set all fields and save | The attribute list page is displayed and a message should appear in green to indicate that the attribute is well created |
| Click on Add new value | There are 2 fields that must be displayed <br>URL<br>Meta Title |
| Set all fields and save | The attribute list page is displayed and a message should appear in green to indicate that the attribute value is well created |
| Create two  products with one combination (the last attribute is selected) | The products are well created |
| Go to back office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Click on "Edit template" | The " New filters template" page is displayed |
| Enable the New Attribute Group and save | The configuration page is displayed and a message should appear in green to indicate that the template is updated "Your filter "My template - yyyy-mm-dd" was updated successfully. |
| Go to FO > Home category page | The category page is displayed and the new attribute is displayed |
| Select the attribute value | Active filters = pname: vname<br>The URL is http://shop.com/2-home?q=uname-uvname<br>There are two products created |
| Delete the filter with icon-close | Filter should be cleared |
