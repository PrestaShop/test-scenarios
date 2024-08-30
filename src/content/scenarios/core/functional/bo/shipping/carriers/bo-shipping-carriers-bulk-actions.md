---
title: "BO - Shipping - Carriers - Bulk actions"
weight: 3
---

# BO - Shipping - Carriers - Bulk actions
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-971

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page is displayed |
| Select all checkbox | All Carriers are selected |
| Click Bulk Actions > Click Disable selection | Message The status has been successfully updated. is displayed<br><br>All filters are reset.<br>All carriers are displayed and disabled |
| Click View my store > Add product to cart > Proceed to checkout > Fill in Step 1 and 2 > Click Continue | In Step 3 - Shipping method, see Unfortunately, there are no carriers available for your delivery address. |
| Select all checkbox | All Carriers are selected |
| Click Bulk Actions > Click Enable selection | Message The status has been successfully updated. is displayed<br><br>All filters are reset.<br>All carriers are displayed and enabled |
| Go back to FO > Refresh the page | See in step 3 - Shipping method, all 4 carriers are displayed |
| Click Bulk Actions > Click Select all > Click Bulk Actions > Click Unselect All | All filters are reset. |
| Click Add new carrier with following data > Click Finish for creation of carrier | Message Successful creation is displayed |
| Go back to FO > Refresh the page | See in step 3 - Shipping method, 5 carriers are now displayed |
| Select test > Click Bulk Actions > Click Delete selected > Click OK | Message "The selection has been successfully deleted." is displayed |
| Go back to FO > Refresh the page | See in step 3 - Shipping method, 4 carriers are now displayed |
