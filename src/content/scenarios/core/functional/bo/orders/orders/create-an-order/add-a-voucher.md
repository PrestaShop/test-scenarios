---
title: "Add a voucher"
weight: 6
---

# Add a voucher
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click Add new order > Search for an existing customer like John Doe and Choose it | Customer John Doe is chosen |
| Search for the product "Mug The adventure begins" and click Add to cart | The product is well added to the cart, check that<br> # Image => ok<br> # Description => Mug The adventure begins<br> # Reference => demo_12<br> # Base price => 11.9<br> # Quantity => 1<br> # Price => 11.9 |
| Click Add a new voucher | Popup displays |
| Click on save | A red alert with the following message is displayed:<br>There are 2 errors.<br>An action is required for this cart rule.<br>The field name is required at least in English (English). |
| Close the alert message then click on save and stay | A red alert with the following message is displayed:<br>There are 2 errors.<br>An action is required for this cart rule.<br>The field name is required at least in English (English). |
| Fill the name with "Voucher" and Click on save | a red alert is displayed "An action is required for this cart rule." |
| Add a description<br>Click on Generate code | a toggle button Highlight is displayed and a code is generated |
| Fill fields of voucher and be sure to choose an action for Apply a discount (Amount or Percent) > Save | Popup disappears |
| Search for voucher just created > Choose the voucher | New line will appear with voucher added to the order |
| Scroll all the way down > Check voucher in the summary | The amount of discount should be updated in Summary |
| Click Remove | Voucher should be deleted |
| Scroll all the way down > Check voucher in the summary | The amount of discount should be updated in Summary to 0 |
