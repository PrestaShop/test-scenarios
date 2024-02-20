---
title: "BO - Shipping Tab"
weight: 16
---

# BO - Shipping Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5215
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/16_shippingTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product > Add a title to your product > Switch to Online > Add a quantity = 10 > Click Save | Successful update message is displayed |
| Go to Shipping Tab > Edit the Package Dimension : <br>Width : 12 cm<br>Height : 12 cm<br>Depth : 12 cm<br>Weight : 12 kg<br>> Click Save and publish | Successful update message is displayed |
| Edit Delivery Time > Check "None" > Save and publish | Successful update message is displayed |
| Click on footer 3-dot button > Preview | See that no delivery time is displayed |
| Edit Delivery Time > Check Default delivery time: N/A - N/A > Save and publish | Successful update message is displayed |
| Click on footer 3-dot button > Preview | See that no delivery time is displayed |
| Click on "Edit delivery time" link | A new tab "Product Settings" is displayed directly on "Delivery time of in-stock products"<br>The field for Delivery time of in-stock products is highlighted |
| Edit "Delivery time of in-stock products" = "Delivered within 3-4 days" > Save | Update successful |
| Go back to FO on the product page > Refresh | See under the price : "Delivered within 3-4 days" |
| Edit Delivery Time > Check : Specific delivery time to this product > Save and publish | Successful update message is displayed |
| Click on Preview | FO is displayed<br><br>"1 Day" is displayed |
| In Tab Stocks > Edit Product Quantity = 0 > When out of stock block > Allow Orders > Save and publish | Successful update message is displayed |
| Click on Preview | FO is displayed<br><br>"12 Days" is displayed |
| In Shipping fees block = 10€ > Save and publish > Preview > Add product to cart > Follow checkout process | See Step 3 - Shipping Method = 20.40€ instead of 8.40€ |
| Go back to Product edition page > Available carriers > Click All carriers > Check "1 - Click and collect (Pick up in-store)" > Save and publish | 1 - Click and collect (Pick up in-store) is the Only selected carriers (1) |
| Go back to FO checkout page > Refresh page | Only Click and collect is available |
