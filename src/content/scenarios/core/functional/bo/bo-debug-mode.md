---
title: "BO - Debug mode"
weight: 1
---

# BO - Debug mode
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-705

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders | Order page is displayed with Symfony toolbar is displayed at the bottom of the page |
| Go in the files directory src/PrestaShopBundle/Controller/Admin/Sell/Order/ > Edit the file OrderController.php" > Comment the value of the $orderKpiFactory > Save | File is saved |
| Go back to BO > Orders > Refresh | Exception is displayed |
| Click on the symfony toolbar | See the profiler is displayed |
| Uncomment the variable > Save | File is saved |
| Go back to BO > Orders > Refresh | Order page is displayed without exception |
| Go to BO > Check the top right corner > Debug mode > Hover on it | The debug mode link is highlighted in blue + a tooltip is displayed with a message |
| Click on the debug mode link | You are redirected to Performance Page |
| Disable debug mode and save | On the top right corner, the debug mode link is no longer displayed |
