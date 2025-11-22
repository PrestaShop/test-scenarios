---
title: "BO - Catalog price Rules - CRUD - Country"
weight: 5
---

# BO - Catalog price Rules - CRUD - Country
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10332

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > International > Localization | Localization page displayed |
| Import Localization pack of United States and save | Localization pack imported successfully. |
| Import Localization pack of United Arab Emirates and save | Localization pack imported successfully. |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Click on "Add new catalog price rule" button | The Add new Catalog Price Rules page is displayed |
| Set the fields > Click on "Save" | The catalog price rule is well created and a green alert "Successful creation" is displayed |
| GO FO > Open product THE BEST IS YET TO COME' FRAMED POSTER | See the tag -€10.00 on the image product<br>See the new price displayed in orange : €24.80 SAVE €10.00 |
| Add product to cart > Proceed to checkout | See in the shopping cart the new price displayed like so :<br><br>-€34.80- -€10.00<br>€24.80 |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See no reduction is displayed |
| Go to your cutomer account | Your account page displayed |
| Click to Addresses | Your addresses page displayed |
| Click to Update | Update your addresses page displayed |
| Update your Country and Save | * Address successfully updated. |
| Go back to your cart > Refresh | See in the shopping cart the new price displayed like so :<br><br>-€34.80- -€10.00<br>€24.80 |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See in the shopping cart the new price displayed like so :<br><br>-€34.80- -€10.00<br>€24.80 |
| Update your Country and Save | * Address successfully updated. |
| Go back to your cart > Refresh | See in the shopping cart the new price displayed like so :<br><br>-€34.80- -€10.00<br>€24.80 |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
