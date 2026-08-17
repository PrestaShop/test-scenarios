---
title: "BO - Discount - Set period "
weight: 17
---

# BO - Discount - Set period 
## Details
* **Status** : Automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8460
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/https://github.com/PrestaShop/PrestaShop/blob/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/03_discountV2/06_setPeriod.ts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>Discount list = 0 |
| Click to Create discount | Select discount type modal displayed |
| Select on cart amount and Click to create discount | Create cart discount displayed<br><br>Select period:<br><br>Starts on: Date of the creation (by default)<br><br>Ends on: 1 month after Start on date (by default) |
| Fill form and save | Error notification: "The expiration date must be after start date" |
| Fill form and save | The start date will automatically set today's date, and we get an error message: “The expiration date must be after start date” |
| Fill form and save | The end date field is deleted and we have a success message for the creation of the discount.<br>The discount has been created<br><br> <br><br>Discount list = 1 |
| Check the discount page >the all tab >The presence of the discount | The discount will be displayed in the “All” tab |
| Check the discount page >the Active tab >The presence of the discount | Discount is displayed in “Active” tab |
| Check the discount page >the Scheduled tab >The presence of the discount | Discount isn't displayed in “Scheduled” tab |
| Check the discount page >the Expired tab >The presence of the discount | Discount isn't displayed in “Expired” tab |
| Click on View my store > Add  product to the cart > Click on the Proceed to checkout | See in cart :<br>|1 item|€22.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.68| |
| Enter discount code | Error Message:"You cannot use this voucher with these products" |
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
