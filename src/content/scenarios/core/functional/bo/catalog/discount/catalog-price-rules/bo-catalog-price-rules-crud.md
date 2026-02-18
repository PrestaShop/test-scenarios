---
title: "BO - Catalog price Rules - CRUD"
weight: 1
---

# BO - Catalog price Rules - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-834
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/02_catalogPriceRules/01_CRUDCatalogPriceRule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-catalog-price-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Click on "Add new catalog price rule" button | The Add new Catalog Price Rules page is displayed |
| Set the fields > Click on "Save" | The catalog price rule is well created and a green alert "Successful creation" is displayed |
| GO FO > Click on All products | The root category is well displayed |
| Go to the product THE BEST IS YET TO COME' FRAMED POSTER | See the tag -€12.00 on the image product<br>See the new price displayed in orange : €22.80 SAVE €12.00 |
| Add product to cart > Proceed to checkout | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-€12.00*{color}<br>{color:#ffa500}€22.80{color} |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Change quantity of product in cart to 5 | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-20%*{color}<br>{color:#ffa500}€27.84{color} |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Sign into customer account | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-20%*{color}<br>{color:#ffa500}€27.84{color} |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| BO > Discounts > Catalog Price Rules > Edit the catalog price rules and save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See reduction is displayed |
| Go back to BO > International > Localization > Currencies | Currencies page displayed |
| Add new currency and save | Successful creation notification |
| BO > Discounts > Catalog Price Rules > Edit the catalog price rules and save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Go back to BO > Delete your catalog price rule > Yes | The catalog price rule is well deleted and a green alert "Successful deletion" is displayed |
