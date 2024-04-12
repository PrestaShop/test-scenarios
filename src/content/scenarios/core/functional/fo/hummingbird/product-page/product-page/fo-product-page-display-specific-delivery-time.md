---
title: "FO - Product Page - Display Specific delivery time"
weight: 10
---

# FO - Product Page - Display Specific delivery time
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6983

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click on "Add new product" > Standard product > Add new product | Product page edition mode is displayed |
| Add title > Switch to Online > Save and publish | Message Successful update is displayed |
| Go to Stock tab > In When out of stock section > Check Allow orders > Go to Shipping tab > In Delivery time section > Check Specific delivery time for this product > Add "HELLO" in section "Delivery time of out-of-stock products with allowed orders" > Save | Message Successful update is displayed |
| Click Preview | See "HELLO TEST" under the product price |
| Go back to BO > Go to Stock tab > Edit quantity to 100 > Add "delivered in less than a week" to "Delivery time of in-stock products" > Save | Message Successful update is displayed |
| Click Preview | See "delivered in less than a week" under the product price |
