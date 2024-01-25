---
title: "BO - Shop Parameters - Customer Settings - Enable B2B mode"
weight: 4
---

# BO - Shop Parameters - Customer Settings - Enable B2B mode
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1086
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/01_customers/04_enableB2BMode.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Customer settings > Enable B2B mode > Save | Message Update successful is displayed |
| Click View my store > Add any product to your cart > Proceed to checkout | See in Step 1 - Personal Information : Company & Identification number fields are displayed as optional. |
| Add a Company & Identification number > Proceed to checkout | YOUR ORDER IS CONFIRMED |
| Go to BO > Customers > Customers | See a new column is displayed : Company |
| Go to BO > Customers > Customers > Click on latest customer created | See the following fields related to B2B option :<br>Company : PrestaShop<br>SIRET : 1234567890<br>APE :<br>Website :<br>Allowed outstanding amount :<br>Maximum number of payment days :<br>Risk rating : |
| Go back to BO > Shop parameters > Customer settings > Disable B2B mode > Save | Message Update successful is displayed |
| Click View my store > Add any product to your cart > Proceed to checkout | The fields Company and Identification number are not displayed anymore |
| Continue checkout | YOUR ORDER IS CONFIRMED |
| Go to BO > Catalog > Customers | The column Company is not displayed anymore |
| Go to BO > Catalog > Customers > Click on latest customer created | All the fields related to B2B are not displayed anymore. |
