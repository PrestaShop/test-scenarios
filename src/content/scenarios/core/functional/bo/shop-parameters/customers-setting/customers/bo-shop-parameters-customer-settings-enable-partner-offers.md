---
title: "BO - Shop Parameters - Customer Settings - Enable partner offers"
weight: 6
---

# BO - Shop Parameters - Customer Settings - Enable partner offers
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1088
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/01_customers/06_enablePartnerOffers.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customers Settings | See that Enable partner offers option is checked. |
| Click View my store > Add any product to your cart > Proceed to checkout > In Step 1 > In Order as guest section > Check the option "Receive offers from our partners" > Proceed to checkout until checkout is done | See message YOUR ORDER IS CONFIRMED |
| Proceed to checkout until checkout is done |  |
| Go back to BO > Shop Parameters > Customers Settings > Disable the option "Enable partner offers" > Save | See a red alert "Make sure partner offers are not set as required in the Customers section of the back office before disabling them. Otherwise, new customers won't be able to create an account and proceed to checkout."<br><br>See message Update successful |
| Click View my store > Add any product to your cart > Proceed to checkout > In Step 1 > In Order as guest section > The option "Receive offers from our partners" is not displayed > Proceed to checkout until checkout is done | See message YOUR ORDER IS CONFIRMED |
