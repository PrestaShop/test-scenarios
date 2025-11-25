---
title: "BO - Catalog price Rules - CRUD - Reduction with or without taxes"
weight: 10
---

# BO - Catalog price Rules - CRUD - Reduction with or without taxes
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10337

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Click on "Add new catalog price rule" button | The Add new Catalog Price Rules page is displayed |
| Set the fields > Click on "Save" | The catalog price rule is well created and a green alert "Successful creation" is displayed |
| GO FO > Open product THE BEST IS YET TO COME' FRAMED POSTER | See the tag -€10.00 on the image product<br>See the new price displayed in orange : €24.80 SAVE €10.00 |
| Add product to cart > Proceed to checkout | See in the shopping cart the new price displayed like so :<br><br>€34.80 -€10.00<br>€24.80 |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See the tag -€12.00 on the image product<br>See the new price displayed in orange : €22.80 SAVE €12.00 |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See the tag -10% on the image product<br>See the new price displayed in orange : €31.32 SAVE 10% |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See the tag -10% on the image product<br>See the new price displayed in orange : €31.32 SAVE 10% |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Delete test Catalog Price Rules | The catalog price rule is well deleted and a green alert "Successful deletion" is displayed |
