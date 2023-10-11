---
title: "BO - Catalog Cart Rules - Bulk actions"
weight: 4
---

# BO - Catalog Cart Rules - Bulk actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-837

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog >discounts >catalog price rules | the catalog price rules page is well displayed |
| Go to BO > Catalog > Discounts > Cart Prices Rules tab | Catalog Price Rules page is well displayed |
| Click on "Add new catalog price rule" button | The Add new Catalog Price Rules page is displayed |
| Set the fields > Click on "Save" | The catalog price rule is well created and a green alert "Successful creation" is displayed |
| GO FO > Open product THE BEST IS YET TO COME' FRAMED POSTER | See the tag -€12.00 on the image product<br>See the new price displayed in orange : €22.80 SAVE €12.00 |
| Add product to cart > Proceed to checkout | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-€12.00*{color}<br>{color:#ffa500}€22.80{color} |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Change quantity of product in cart to 5 | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-20%*{color}<br>{color:#ffa500}€27.84{color} |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well edited and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Sign into customer account | See in the shopping cart the new price displayed like so :<br><br>-€34.80- {color:orange}*-20%*{color}<br>{color:#ffa500}€27.84{color} |
| Go back to BO > Delete your catalog price rule > Yes | The catalog price rule is well deleted and a green alert "Successful deletion" is displayed |
| create 2 price rules | the number of catalog price rules is =2 |
| select the two price rules with ID [1 , 2]  -> click on Bulk actions -> delete selected | the two price rules are well deleted  with a green message "The selection has been successfully deleted" |
