---
title: "BO - Discount - Set a period "
weight: 2
---

# BO - Discount - Set a period 
## Details
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-11208

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>Discount list = 0 |
| Click to Create discount | Create cart discount displayed<br><br>Select period:<br><br>Starts on: Date of the creation (by default)<br><br>Ends on: 1 month after Start on date (by default) |
| Fill form and save | Error notification*{color:#FF0000}: Date invalid (à confirmer){color}* |
| Fill form and save | Error notification*: {color:#FF0000}Date invalid (à confirmer){color}* |
| Fill form and save | Error notification*: {color:#FF0000}Date invalid (à confirmer){color}* |
| Fill form and save | Error notification*: {color:#FF0000}Date invalid (à confirmer){color}* |
| Fill form and save | Error notification*: {color:#FF0000}Date invalid (à confirmer){color}* |
| Fill form and save/Disabled discount | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br> <br><br>Discount list = 1 |
| Check the discount page >the all tab >The presence of the discount | The discount will be displayed in the “All” tab |
| Check the discount page >the Active tab >The presence of the discount | Discount is displayed in “Active” tab |
| Check the discount page >the Scheduled tab >The presence of the discount | Discount isn't displayed in “Scheduled” tab |
| Check the discount page >the Expired tab >The presence of the discount | Discount isn't displayed in “Expired” tab |
| Click on View my store > Add  product to the cart > Click on the Proceed to checkout | See in cart :<br>|1 item|€22.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.68| |
| Enter discount code | Error Message:"This voucher is not valid yet" |
| Go back to Cart rule page > Click on the edit button> Click Save | The discount edit page is displayed |
| Fill form >Change expiration date > Save | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br> <br><br>Discount list = 1 |
| Check the discount page >the All tab >The presence of the discount | Discount is displayed in “All” tab |
| Check the discount page >the Active tab >The presence of the discount | Discount is not displayed in “Active” tab |
| Check the discount page >the Scheduled tab >The presence of the discount | Discount isn't displayed in “Scheduled” tab |
| Check the discount page >the Expired tab >The presence of the discount | Discount is displayed in “Expired” tab |
| Click on View my store > Go to cart | See in cart :<br><br>1 item	€22.68<br>Shipping	Free<br>Total (tax incl.)	€22.68 |
| Enter discount code | We have an error message: "This voucher has expired" |
| Go back to discount page > Click on delete button | Display of the confirmation modal |
| Confirm the deletion | Discount page displayed<br><br>Notification :<br><br>Successful deletion<br><br>The discount has been deleted<br><br>Discount list = 0 |
