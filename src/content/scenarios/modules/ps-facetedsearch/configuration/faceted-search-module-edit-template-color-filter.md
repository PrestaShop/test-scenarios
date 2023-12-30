---
title: "Faceted search module - Edit template - Color filter"
weight: 11
---

# Faceted search module - Edit template - Color filter
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4221

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" block > Set "Attribute group : Color" switch button to disable > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can't filter by "Color" |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Check "Attribute group : color" > Click on the field of color filter style and choose "radio button" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "color" only with one of them, you can't check many of them like previously |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of color filter style and choose "Drop down list" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "color" only with one of them thank to a list, you can't choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the field of color filter style and choose "checkbox" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "color" thank to different check, you can choose many of them |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of color filter result limit and choose "2" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "color" only with two different categories. |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Click on the drop down list of color filter result limit and choose "no limit" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "color" with all color you created in your shop |