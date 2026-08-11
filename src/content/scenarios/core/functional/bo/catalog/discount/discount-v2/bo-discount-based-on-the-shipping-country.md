---
title: "BO - Discount - based on the shipping country"
weight: 15
---

# BO - Discount - based on the shipping country
## Details
* **Status** : IN REVIEW
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8494

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount | Select discount page displayed |
| Choose type and click to "Create discount" | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Error Message: The field name is required at least in your default language. |
| Fill form and save | Discount page displayed<br><br>Error Message: You must select at least one country. |
| Fill form and save | Discount page displayed<br><br>Error Message: Reduction value "0" is invalid. It must be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Error Message: Reduction value "-20" is invalid. It must be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Successful Message: Successful update<br>Discount list = 1 |
| BO > International > Locations > Countries<br><br>Verify country list in discount form | All countries from International > Locations > Countries are present in the dropdown, including disabled ones |
| Click on "view my store" > Add a product to cart > Proceed to checkout > Enter promo code (without selecting an address) | Error message: You must choose a shipping address before applying this voucher to your order |
| Go back to checkout > Select a delivery address in a country NOT in the discount conditions (e.g. Spain) > Enter promo code | Error message: You cannot use this voucher in your country of delivery |
| Go back to checkout > Select a delivery address in France > Add a product > Enter promo code | We have this result:<br>2 items €69.26<br>Discount(s) -€10.00<br>Shipping Free<br>Total (tax incl.) €59.26<br>test-country -€10.00 |
| Go back to BO > Catalog > Discount > Click to edit button discount > Change delivery country condition | Successful message: Successful update |
| Click on "view my store" > Go to cart > Refresh page | We have this:<br>2 items €69.26<br>Shipping Free<br>Total (tax incl.) €69.26<br><br>(discount removed: delivery country no longer matches) |
| Go back to BO > Catalog > Discount > Click to edit button discount > Restore France in conditions | Successful message: Successful update |
| Click on "view my store" > Go to cart > Re-apply promo code > Refresh page | We have this:<br>2 items €69.26<br>Discount(s) -€12.00<br>Shipping Free<br>Total (tax incl.) €57.26<br>test-country -€12.00<br><br>(discount value updated to Tax excluded) |
| Go back to BO > Catalog > Discounts > Click to edit > Change delivery country to a disabled country (e.g. add a disabled country in conditions) | Successful message: Successful update<br><br>Disabled countries are selectable in the discount form |
| FO > Checkout > Select the disabled country address > Enter promo code | Discount is applied successfully (disabled in shop navigation but valid in discount conditions) |
| Go back to BO > Catalog > Discount > Click to delete button discount | Display of the confirmation modal |
| Click to Delete | Successful deletion notification |
| Go to FO > Go to shopping cart | We have this:<br>2 items €69.26<br>Shipping Free<br>Total (tax incl.) €69.26<br><br>(discount no longer applied) |
