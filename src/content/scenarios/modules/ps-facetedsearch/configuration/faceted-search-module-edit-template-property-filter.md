---
title: "Faceted search module - Edit template - Property filter"
weight: 13
---

# Faceted search module - Edit template - Property filter
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4224

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" block > Set "Feature : Property" switch button to disable > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can't filter by "Property" |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Check "Feature : Property" > Click on the field of property filter style and choose "radio button" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "property" only with one of them, you can't check many of them like previously |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of property filter style and choose "Drop down list" > Click on "Save" | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "property" only with one of them thank to a list, you can't choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of property filter style and choose "checkbox" > Click on "Save" | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "property" thank to different check, you can choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of property filter result limit and choose "2" > Click on "Save" | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "property" only with two different categories. |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of property filter result limit and choose "no limit" > Click on "Save" | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "property" with all property you created in your shop |