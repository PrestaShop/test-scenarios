---
title: "Faceted search module - Show products from subcategories\'s field configuration"
weight: 2
---

# Faceted search module - Show products from subcategories\'s field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4133

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product > Clic on " + New Product" | "New product" page is displayed |
| Setup the name the quantity, put the product online and save it | A blue notice with "Settings updated" is displayed |
| In "Categories" section of the "Basic settings" tab, check "Clothes" and uncheck "Home" > Click on "Save" button. | * "Settings updated" message is displayed<br> * When you click on "Clothes", it'll be added to the "associated categories"<br> * When you click on home it will be delete from the same place. |
| Go to Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on the switch named "Show products from subcategories" to disable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can see at the bottom left, in the category part, you'll  see the "Clothes (- 1)'. |
| Go back to BO > "Configure Faceted search" page > Click on the switch named "Show products from subcategories" to enable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Go to FO > Reload the page | Many product should be displayed and you can see at the bottom left, in the category part, you'll  see the "Clothes". |
