---
title: "BO - Discount - Trigger based on a supplier"
weight: 8
---

# BO - Discount - Trigger based on a supplier
## Details
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11562

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount | Create cart discount displayed |
| Fill form | Discount page displayed |
| Select a card condition > product segment >Save | We have errors messages: <br><br>"The field names is required at least in your default language."<br>"This value should not be blank."<br>"At least one product segment must be selected." |
| Select a card condition > product segment >Save | We have an error message:<br>At least one product segment must be selected. |
| Select a card condition > product segment >Save | We have an error message:<br>This value should be greater than or equal to 1. |
| Select a card condition > product segment >Save | We have an error message:<br>Reduction value "-10" is invalid. It must be greater than 0. |
| Select a card condition > product segment >Save | We have an error message:<br>This value should not be blank. |
| Select a card condition > product segment >Save | We have an error message:<br>This value should not be blank. |
| Select a card condition > product segment >Save | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br>Discount list = 1 |
| Go to the FO > add a product > enter the promo code | We have this:<br><br>1 item €14.28<br>Discount(s) - €10.00<br>Shipping Free<br>Total (tax incl.) €4.28<br>test -€10.00 |
| Go to the home page and add another product that is not part of supplier accessories >Go to shopping cart | We have this:<br>2 items €48.74<br>Discount(s) - €10.00<br>Shipping Free<br>Total (tax incl.) €38.74<br>test -€10.00 |
| Delete Mug The best is yet to come | The discount is automatically removed.<br><br>1 item €34.46<br>Shipping Free<br>Total (tax incl.) €34.46 |
| Go to the catalog > discount > edit discount > increase the minimum quantity of the product | We have a successful message: "Successful update" |
| Go back to FO> Add a product > apply discount | We have an error message: "You cannot use this voucher with these products" |
| Go to the catalog > discount > edit discount > Choose Create automatic discount with percent value | We have a successful message: "Successful update" |
