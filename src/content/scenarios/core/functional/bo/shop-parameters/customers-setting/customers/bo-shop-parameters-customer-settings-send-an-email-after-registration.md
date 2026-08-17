---
title: "BO - Shop Parameters - Customer Settings - Send an email after registration"
weight: 6
---

# BO - Shop Parameters - Customer Settings - Send an email after registration
## Details
* **Status** : À faire
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7779
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/01_customers/02_sendEmailAfterRegistration.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Customer Settings | Customer settings page is displayed |
| Send an email after registration > NO > Save | Update successful alert is displayed |
| Go to FO > Click Sign in > Click No account? Create one here | Customer is created |
| Go to BO > Advanced parameters > E-mail | Welcome email is not present in list |
| Go to BO > Shop parameters > Customer Settings | Customer settings page is displayed |
| Send an email after registration > YES > Save | Successful message is displayed |
| Go to FO > Click Sign in > Click No account? Create one here | Customer is created |
| Go to BO > Advanced parameters > E-mail | Welcome email is present in list |
| Go to BO > Customers > Customers > Delete customers created from FO | Customers were deleted |
