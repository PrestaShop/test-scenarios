---
title: "BO - Cart rules - Condition - Case 2 bis - Invalid Date Time"
weight: 3
---

# BO - Cart rules - Condition - Case 2 bis - Invalid Date Time
## Details
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-12099

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name : TEst<br> # Conditions:<br>1. Set the "From" = 2025-05-14 & "To" = 2024-05-14<br> # Actions :<br>1. Discount = 1 Euro tax included<br><br>and click on Save and stay | Error : <br>The voucher cannot end before it begins. |
| Modify the date :<br><br> <br><br>"From" = 2025-05-14 12:00:00 <br><br>"To" = 2025-05-14 11:00:00 <br><br> <br><br>Save and stay | The voucher cannot end before it begins. |
| Click to cancel | Cart Rules page diplayed <br><br>The cart rule has not been created |
