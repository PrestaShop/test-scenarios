---
title: "BO - Cart rules - Actions - Apply a discount None"
weight: 5
---

# BO - Cart rules - Actions - Apply a discount None
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10321

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information > Click on Save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Click on "apply discount ":None  > Save | Error Message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Enable Free shipping  and Apply discount :None > Save | Success message :Successful creation |
| Click on View my store > Add a product to the cart | Shipping should be free. See in cart :<br> <br> <br>|1 item|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>|test cart rules|Free shipping| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
