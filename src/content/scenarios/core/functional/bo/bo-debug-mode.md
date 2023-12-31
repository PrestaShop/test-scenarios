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
| Go to Orders > Invoices | Symfony toolbar is displayed at the bottom of the page |
| Toggle display of the toolbar | Toolbar is toggled on and off |
| Go in the files directory src/PrestaShopBundle/Controller/Admin/Sell/Order/<br>- Edit the fileOrderController.php" <br>- Change the value of the $orderKpiFactory variable. <br>- Go to "Orders > Orders" in the BO" | An exception is displayed |
| Fix the file and go to Orders > Orders" in the BO" | The page works fine |
| Go to BO > Check the top right corner > Debug mode > Hover on it | The debug mode link is highlighted in blue + a tooltip is displayed with a message |
| Click on the debug mode link | You are redirected to Performance Page |
| Disable debug mode and save | On the top right corner, the debug mode link is no longer displayed |
