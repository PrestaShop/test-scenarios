---
title: "BO - Shipping - Preferences - Handling"
weight: 1
---

# BO - Shipping - Preferences - Handling
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-976

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Preferences | Preferences pages is displayed<br><br>In Handling block, see the following :<br>Handling charges : 2€ (tax excl.)<br>Free shipping starts at 0€<br>Free shipping starts at 0 |
| Go to BO > Shipping > Carriers > Edit Click and collect > Go to Step 2 : Shipping locations and costs > Disable Free shipping > Finish | See that Add handling cost is enabled<br><br>Alert Successful update is displayed |
| Go to FO > Add a product to cart > Proceed to checkout until Step 3 - Shipping Method | See that Click and collect carrier is not free anymore, now it is 2.40€ |
| Proceed to checkout until the end | Shipping and handling cost is 2.40€ (tax incl.) |
| Go back to BO > Shipping > Carriers > Edit Click and collect > Step 2 > Free shipping Enable > Finish | Alert Successful update is displayed |