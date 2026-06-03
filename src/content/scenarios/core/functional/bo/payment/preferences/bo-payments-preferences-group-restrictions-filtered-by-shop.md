---
title: "BO - Payments - Preferences - Group restrictions filtered by shop"
weight: 5
---

# BO - Payments - Preferences - Group restrictions filtered by shop
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/10_payment/02_preferences/03_groupRestrictionsMultistore.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/payment/preferences

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Multistore > Enable multistore | Multistore is enabled |
| Add a new shop and set its URL | Successful creation message is displayed |
| Select the new shop in the multistore header | The new shop is the active context |
| Go to BO > Shop Parameters > Customer Settings > Groups > Add a new group > Save | Successful creation message is displayed (the group belongs to the new shop only) |
| Go to BO > Payment > Preferences > Scroll to the Group restrictions block | The newly created group is listed in the Group restrictions table |
| Select the default shop in the multistore header, then go to Payment > Preferences > Group restrictions block | The newly created group is NOT listed (only the default shop's groups appear) |
| Delete the created group, delete the created shop, disable multistore | Everything is cleaned up successfully |
