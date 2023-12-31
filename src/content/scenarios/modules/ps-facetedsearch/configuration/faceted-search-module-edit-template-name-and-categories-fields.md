---
title: "Faceted search module - Edit template - Name and categories fields"
weight: 8
---

# Faceted search module - Edit template - Name and categories fields
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4209

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Edit" button on the same line of your template | The "New filters template" section is displayed |
| Change the field " Template name "  > Click on "Save" button | * It returns on the "Configure faceted search" page and you have a successful message " Your filter "Template 2.0" was updated successfully. "<br> * You can see that your only template have the name "Template 2.0" |
| Click on "Edit" button on the same line of your template | The "New filters template" section is displayed |
| In "Categories used for this template:" > Click on "Uncheck all" > Click on "Clothes" > Click on "Save" Button | * All the categories should be unchecked<br> * Clothes should be checked<br> * It returns on the "Configure faceted search" page and you have a successful message " Your filter "Template 2.0" was updated successfully. " |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can only see "Categories", "Brands" and "Suppliers" blocks on the left |
| Click on the "Clothes" category | Many product should be displayed and you can see at the bottom left many parameters to refine your research |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" section is displayed |
| In "Categories used for this template:" > Click on "Check all" > Click on "Save" Button | * All the categories should be checked<br> * It returns on the "Configure faceted search" page and you have a successful message " Your filter "Template 2.0" was updated successfully. " |
| Go to FO > Click on "my store" logo > Click on "All products" at the bottom of Popular products | Many product should be displayed and you can see at the bottom left many parameters to refine your research |