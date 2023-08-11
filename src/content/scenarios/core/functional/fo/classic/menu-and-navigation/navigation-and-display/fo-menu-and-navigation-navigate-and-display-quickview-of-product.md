---
title: "FO - Menu and Navigation - Navigate and display - Quickview of product"
weight: 3
---

# FO - Menu and Navigation - Navigate and display - Quickview of product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1246
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/03_navigationAndDisplay/03_quickViewProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Homepage > Click quick view on HUMMINGBIRD PRINTED SWEATER product | A popup will appear with the product info (images, name, price, tax, description, combinations, quantity, add to cart button, share buttons) |
| Click Add to cart button | The Quick view popup will disappear and the Add to cart popup will appear |
| Click on Continue Shopping button | The popup will disappear |
| Click on the Quick view button of MUG THE ADVENTURE BEGINS product | A popup will appear with the product info (images, name, price, tax, description, quantity, add to cart button, share buttons) |
| Click the top right cross to close the popup | Quick view popup is closed |
| Click on quick view for CUSTOMIZABLE MUG product | A popup will appear with the product info (images, name, price, tax, description, quantity, add to cart button, share buttons)<br><br>Add to cart button is greyed out and can't be clicked |
| Click outside of the popup | Popup is closed, Homepage is displayed |
