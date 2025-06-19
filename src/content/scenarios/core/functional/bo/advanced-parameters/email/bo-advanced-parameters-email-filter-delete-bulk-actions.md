---
title: "BO - Advanced parameters - Email - Filter + Delete + Bulk actions"
weight: 2
---

# BO - Advanced parameters - Email - Filter + Delete + Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1145
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/04_email/01_filterDeleteAndBulkActionsEmails.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/e-mail

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO | The home page is opened successfully |
| Change the shop language to EN | The home page is in English |
| Add the first product to the cart | There is one product in the cart |
| Click on Proceed to checkout button | The Shopping cart is displayed correctly |
| Sign in with the default account pub@prestashop.com | The customer is logged successfully |
| Go to Address step | Address step is displayed correctly |
| Go to the delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Logout from the FO and close the page | The customer is disconnected successfully |
| Go to BO Advanced parameters > E-mail page | The page name is 'Email' |
| Filter by ID | Email list is filtered<br>Emails listed have "1" in their ID |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Recipient | Emails list is filtered<br>Emails listed have "pub@prestashop.com" in their email |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Template | Emails list is filtered<br>Emails listed have "order_conf" in their template |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Language | Emails list is filtered<br>Emails listed have "English" in their language |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Subject | Emails list is filtered<br>Emails listed have "Bank wire" in their subject |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by date sent 'From' and 'To' | Emails list is filtered<br>Emails listed have Today in their date |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Subject | Emails list is filtered<br>Emails listed have "bank wire" in their subject |
| Delete first email log | A validation message is displayed : "The selection has been successfully deleted." |
| Reset all filters | All filters are reset<br>The email number is decremented by 1 |
| Delete emails by bulk actions | A validation message is displayed : The selection has been successfully deleted. |
