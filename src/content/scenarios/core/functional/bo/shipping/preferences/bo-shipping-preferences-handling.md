---
title: "BO - Shipping - Preferences - Handling"
weight: 1
---

# BO - Shipping - Preferences - Handling
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-976
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/02_preferences/01_handling/01_handlingCharges.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/shipping/preference

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings > Groups > Edit Customer group | Customer groups is displayed |
| Choose Price display method = Tax excluded > Save | Message Successful update is displayed |
| Go to Shipping > Carriers > Click Add a new carrier > Add the following data > Finish |  |
| Go to FO > Sign In with default customer > Add a product to cart > Proceed to checkout > In Step 3 - Shipping Method > Choose new carrier created | See the Shipping Method : Test - 2-3 weeks - €5.00 tax excl. |
| Click Continue > In Step 4 - Payment, choose any payment > Place order | YOUR ORDER IS CONFIRMED |
| Sign out of your customer account | You are now logged out |
| Go back to BO > Shipping > Preferences > Edit Handling charges = 10.00 > Save | Message Update successful is displayed |
| Go to Shipping > Carriers > Edit carrier Test > Enable : Add handling costs : YES > Click Finish | Message Update successful is displayed |
| Go to FO > Sign In with default customer > Add a product to cart > Proceed to checkout > In Step 3 - Shipping Method > Choose new carrier created | See the Shipping Method : Test - 2-3 weeks - €10.00 tax excl. |
| Click Continue > In Step 4 - Payment, choose any payment > Place order | YOUR ORDER IS CONFIRMED |
| Go back to BO > Shipping > Preferences > Edit Handling charges = 2.00 > Save | Message Update successful is displayed |
| Go to Shipping > Carriers > Delete carrier Test > YES | Successful deletion |
| Go to BO > Shop Parameters > Customer Settings > Groups > Edit Customer group > Choose Price display method = Tax included > Save | Message Successful update is displayed |
