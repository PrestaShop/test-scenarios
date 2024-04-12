---
title: "FO - Product Page - Out-of-Stock behaviour"
weight: 11
---

# FO - Product Page - Out-of-Stock behaviour
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6984

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Add new product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Go to Tab Stocks > Add quantity 300 and save | Successful update message is displayed<br><br>In Header, stock is updated to 300<br>In Recent stock movements, see the Quantity added by Employee with the Date & Time |
| Click on View all stock movements link | A new tab Stock Management opens |
| Go back to stock tab and fill other fields in Stocks > Save and publish | Successful update message is displayed |
| In When out of stock block > Fill the following fields > Save and publish | Successful update message is displayed |
| Click on Preview button > Add product to cart | Product is added to cart<br><br>Below Add to cart button, see the label: IN STOCK |
| In When out of stock block > Check Deny orders > Subtract 300 to quantity > Save and publish | Successful update message is displayed<br><br>In Header, stock is updated to 0<br>In Recent stock movements, see the Quantity added by Employee with the Date & Time |
| Click Preview > Click on Add to cart button | Add to cart button is greyed out and can't be clicked<br><br>Below Add to cart button, see: Out-of-Stock |
| Go back to BO > Check Allow orders > Save and publish > Preview > Click Add to cart button | In BO, Successful update message is displayed<br><br>In FO, Product is added to cart<br><br>Below Add to cart button, see the label: OUT OF STOCK |
