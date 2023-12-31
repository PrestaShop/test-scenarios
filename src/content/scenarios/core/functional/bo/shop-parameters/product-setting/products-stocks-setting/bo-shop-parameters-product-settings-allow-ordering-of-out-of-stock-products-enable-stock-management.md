---
title: "BO - Shop Parameters - Product Settings - Allow ordering of out-of-stock products & Enable stock management"
weight: 1
---

# BO - Shop Parameters - Product Settings - Allow ordering of out-of-stock products & Enable stock management
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1074
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/01_enableStockManagement.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go in BO > Catalog > Product | Product page displayed |
| Click on a quantity of a product | Quantities page of product displayed |
| Set the Quantity to 0 and Save | Notification "Settings updated" is showed |
| Click to preview | Product page of this product displayed on FO<br><br>You can't click on "Add to cart"<br><br>There is a logo and the message "Out of stock" |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br>Enable "Allow ordering of out-of-stock products" and Save | "Update successful" is displayed in green notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product is displayed <br><br>You can click on "Add to cart" |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br> <br><br>Disable "Allow ordering of out-of-stock products"<br><br>Disable "Enable stock management"<br><br> <br><br>Save | Update successful Notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product page of this product displayed<br><br> <br><br>ADD TO CART button is available |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br> <br><br>Enable "Enable stock management"<br><br>Disable "Allow ordering of out-of-stock products"<br><br> <br><br> <br><br>Save | Update successful Notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product page of this product displayed<br><br>You can't click on "Add to cart"<br><br>There is a logo and the message "Out of stock" |
| Go in BO > Catalog > Product | Product page displayed |
| Click on a quantity of a product | Quantities page of product displayed |
| Modify quantity and click on save | Settings updated. notification |
