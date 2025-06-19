---
title: "BO - Customers - Set required fields"
weight: 4
---

# BO - Customers - Set required fields
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-851
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/05_setRequiredFields.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers/creating-a-new-customer

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Front Office. Click on Sign in". Click on "No account ? Create one here" | The Create an account page is displayed |
| Create an account with random informations. Leave the checkbox Receive offers from our partners" UNCHECKED. Click on "Save" | The account is successfully created. You are redirected on the homepage, logged in |
| Login to BO. Go to Customers > Customers | Customers page is shown |
| Click on Set required fields for this section" | the Required fields" block appears at the bottom of the page" |
| Check Partners Offers" and click "Save" | The field is now marked as required" |
| Click on View my shop" to go to the Front Office. Click on "Sign in". Click on "No account ? Create one here" | The Create an account" page is displayed" |
| Create an account with random informations. Leave the checkbox Receive offers from our partners" UNCHECKED. Click on "Save" | The form isn't submitted and it tells you to check the Receive offers from our partners" checkbox to continue" |
| Check the checkbox Receive offers from our partners". Click on "Save" | The account is successfully created. You are redirected on the homepage, logged in |
