---
title: "BO - Catalog price Rules - CRUD - Currency"
weight: 4
---

# BO - Catalog price Rules - CRUD - Currency
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10331

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
| Change the currency | See in the shopping cart the new price displayed like so :<br><br>-$40.14- -$10.00<br>$30.14 |
| Change the currency | See no reduction is displayed |
| Go back to BO > Edit the catalog price rule > Save | The catalog price rule is well updated and a green alert "Successful update" is displayed |
| Go back to your cart > Refresh | See in the shopping cart the new price displayed like so :<br><br>-AED147.43- -AED42.37<br>AED105.06 |
| Change the currency | See in the shopping cart the new price displayed like so :<br><br>-€34.80- -€10.00<br>€24.80 |
| Change the currency | $40.14- -$11.53<br>$28.61 |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Delete test Catalog Price Rules | The catalog price rule is well deleted and a green alert "Successful deletion" is displayed |
