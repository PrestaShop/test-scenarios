---
title: "BO - Customers - Addresses - Set and verify required fields"
weight: 1
---

# BO - Customers - Addresses - Set and verify required fields
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-857

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Front Office. Click on Sign in". Login" | The Your account" page is displayed" |
| Click on the Addresses" block. Click on "Create a new address" link" | The New address" page is displayed" |
| Fill up the fields: First name. Last name. Address. Zip/postal code. City. Click on Save" | Address is saved. The Your addresses" page is displayed" |
| Login to BO Go to Customers > Addresses | Customers Addresses page is shown |
| Click on Set required fields for this section" | the Required fields" block appears at the bottom of the page" |
| Check Vat number" and click "Save" | The field is now marked as required" |
| Click on View my shop" to go to the Front Office. Click on "Sign in". Login" | The Your account" page is displayed" |
| Click on the Addresses" block. Click on "Create a new address" link" | The New address" page is displayed" |
| Fill up the fields: First name. Last name. Address. Zip/postal code. City. Click on Save" | Address is not saved. The form displays an error, saying the field Vat number" must be set" |
| Fill up the Vat number field. Click on Save" | Adress is saved. The Your address" page is displayed" |
