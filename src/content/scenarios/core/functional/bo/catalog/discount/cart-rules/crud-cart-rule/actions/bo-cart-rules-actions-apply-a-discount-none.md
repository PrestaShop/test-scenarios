---
title: "BO - Cart rules - Actions - Apply a discount None"
weight: 5
---

# BO - Cart rules - Actions - Apply a discount None
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10321

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information > Click on Save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Check None for Apply a discount option > Save | Error Message is displayed: "An action is required for this cart rule." |
| Enable Free shipping > Save | Success message : Successful creation |
| Click on View my store > Add a product to the cart | Shipping should be free. See in cart:<br> <br> <br>|1 item|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>|test cart rules|Free shipping| |
| Click on Proceed to checkout > Sign in to your account > Choose your Address > Click Continue |  |
| Go back to BO > Cart rules page > Delete Cart rule | Success message: "Successful deletion" |
