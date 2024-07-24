---
title: "BO - International - Locations - Countries - Enable / Disable Countries"
weight: 5
---

# BO - International - Locations - Countries - Enable / Disable Countries
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1017

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Internation > Locations > Countries > Filter by enabled countries | 2 countries are displayed : France and Unites States |
| Go to FO > Add any product to cart > Proceed to checkout until Step 2 > Country | In the Country field, you can choose France or United States. |
| Choose France > Proceed to checkout | Your order is confirmed |
| Go back to BO > Internation > Locations > Countries > Filter by enabled countries > Disable France | Message The status has been successfully updated. is displayed |
| Go to FO > Add any product to cart > Proceed to checkout until Step 2 > Country | In the Country field, you can only choose United States. |
| Choose United States > Proceed to checkout | Your order is confirmed |
