---
title: "BO - International - Locations - Countries - Enable / Disable Countries"
weight: 5
---

# BO - International - Locations - Countries - Enable / Disable Countries
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1017
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/05_enableDisableCountries.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/countries

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Internation > Locations > Countries > Filter by enabled countries | 2 countries are displayed : France and Unites States |
| Go to FO > Add any product to cart > Proceed to checkout until Step 2 > Country | In the Country field, you can choose France or United States. |
| Choose France > Proceed to checkout | Your order is confirmed |
| Go back to BO > Internation > Locations > Countries > Filter by enabled countries > Disable France | Message The status has been successfully updated. is displayed |
| Go to FO > Add any product to cart > Proceed to checkout until Step 2 > Country | In the Country field, you can only choose United States. |
| Choose United States > Proceed to checkout | Your order is confirmed |
