---
title: "Category products module - Disable Mobile/Enable Mobile module"
weight: 2
---

# Category products module - Disable Mobile/Enable Mobile module
## Details
* **Component** : ps_categoryproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4210

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable Mobile" option | * After loading, a green message "Disable mobile action on module ps_categoryproducts succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Configure" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Reload the page > Click on a product | The product page should be displayed and if you scroll down, the "Other products in the same category :" block is not displayed |
| Go back to BO > Module list page with ps_categoryproducts module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module ps_categoryproducts succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page of the product | The "Other products in the same category :" block should be displayed on mobile screens |
