---
title: "ps_viewedproduct - Configure Settings"
weight: 1
---

# ps_viewedproduct - Configure Settings
## Details
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7267

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> choose a product | The product page is displayed |
| Go to BO> Modules> Module Manager | Module Manager page is well displayed |
| Search _viewedproduct_ module | Viewed products block module is displayed in _Design & Navigation_ result |
| Click on Configure module button | Configure / Viewed products block page is well displayed |
| Edit Products to display,<br><br>save. | The settings have been updated. message is well displayed |
| Go to FO> choose a product | The product page is displayed |
| choose an other product | The product page is displayed |
| Go to the bottom of the product on _Viewed products_ | only one product is displayed. |
| Go back to Configure module button> Edit Products to display,<br><br>save. | The settings have been updated. message is well displayed |
| Go to FO> choose a product | The product page is displayed |
| Go to the bottom of the product on _Viewed products_ | 3 products are displayed. |
