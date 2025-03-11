---
title: "BO - Cart rules - Actions - Send a free gift"
weight: 11
---

# BO - Cart rules - Actions - Send a free gift
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10327

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions" > Percentage  > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart > Click on Proceed to checkout | The gift is add to the cart <br><br>See in the cart:<br> <br>|2 items|€33.74|<br>|Discount(s)|- €22.27|<br>|Shipping|Free|<br>|Total (tax incl.)|€11.47|<br>|test cart rules| -€22.27 | |
| Go back to the BO>Click on Tab "Actions" > Amount  > Save | Success Message is displayed: "Successful update" |
| Go back to the shopping cart edition >Refresh | The gift is add to the cart <br><br>See in the cart:<br> <br>|2 items|€33.74|<br>|Discount(s)|- €20.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€12.94|<br>|test cart rules|-€20.80 | |
| Go back to the BO>Click on Tab "Actions" > Click on None  > Save | Success Message is displayed: "Successful update" |
| Go back to the shopping cart edition >Refresh | The gift is add to the cart <br><br>See in the cart:<br> <br>|2 items|€33.74|<br>|Discount(s)|- €20.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€12.94|<br>|test cart rules|-€20.80 | |
