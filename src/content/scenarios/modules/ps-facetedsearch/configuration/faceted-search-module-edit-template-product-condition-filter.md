---
title: "Faceted search module - Edit template - Product condition filter"
weight: 16
---

# Faceted search module - Edit template - Product condition filter
## Details
* **Component** : ps_facetedsearch
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4241
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_facetedsearch/02_configuration/16_editTemplateProductConditionFilter.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product > Click on a product to edit it | The product page is displayed |
| Go to the "Details" tab > Check "Display condition on product page" checkbox >  Change the value of "Condition" field from "New" to "Used" > Click on "Save" button | * "Condition" is changed in the drop list <br> * "Display condition on product page" is checked <br> * You have a blue modal with "Settings updated" |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" block > Set "Product condition filter" switch button to disable > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can't filter by "condition" |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Check "Product condition filter" > Click on the field of property filter style and choose "radio button" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "condition" only with one of them, you can't check many of them like previously |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of condition filter style and choose "Drop down list" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "condition" only with one of them thank to a list, you can't choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of condition filter style and choose "checkbox" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "condition" thank to different check, you can choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of condition filter result limit and choose "2" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "condition" only with two different categories. |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of condition filter result limit and choose "no limit" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "condition" with all brand you created in your shop |
