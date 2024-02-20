---
title: "BO - Options Tab"
weight: 19
---

# BO - Options Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5218
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/19_optionsTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Check Catalog only > Click Save and publish > Preview > Click the Category related to the product in breadcrumb (in FO) | See the created product in the catalog |
| Check Search only > Save and publish > Preview > Click the Category related to the product in breadcrumb (in FO) | The product created is not available in catalog |
| Check Nowhere > Save and publish > Preview > Click the Category related to the product in breadcrumb (in FO) | The product created is not available in catalog |
| In FO > Search the product with its name | Search result page is displayed. The created product is not displayed. |
| Go back to Product page > Add a quantity 100 > In Options tab, check Everywhere > Disable Available for order option > Save and publish > Preview | Message Successful update is displayed<br><br>In FO, the Add to cart button is greyed out. |
| Disable Show price > Save and publish | Message Successful update is displayed<br><br>In FO, the price is not displayed |
| Enable Show price > Enable Web only (not sold in your retail store) > Save and publish | Message Successful update is displayed<br><br>In FO, on the product page, see the tag Online Only displayed on the product image. |
| In Suppliers block > Check Accessories supplier > Save and publish | 2 new blocks are displayed:<br>- Default supplier<br>- Supplier reference(s) |
