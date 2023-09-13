---
title: "BO - Shop Parameters - Order Settings - Enable / disable reordering option"
weight: 3
---

# BO - Shop Parameters - Order Settings - Enable / disable reordering option
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1051

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Order Settings | Page Order Settings is displayed<br><br>Disable reordering option : NO |
| Go to FO > Log into your customer account | Your account page is displayed |
| Click on Order history and details | See all the orders made by the customer<br>See that the column Reorder is displayed |
| Click on Reorder button for the order KHWLILZLL | FO > Step 2 is displayed |
| Choose the address is France > Proceed to checkout > Place order | YOUR ORDER IS CONFIRMED |
| Go back to BO > Shop parameters > Order Settings > Disable reordering option : Choose YES > Save | Message Update successful is displayed |
| Go to FO > In Customer Account > Click on Order history and details | The latest order made is displayed in the table.<br>The column Reorder is not displayed. |
