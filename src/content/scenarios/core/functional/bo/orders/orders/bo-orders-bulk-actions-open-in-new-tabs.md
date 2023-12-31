---
title: "BO - Orders - Bulk actions - Open in new tabs"
weight: 7
---

# BO - Orders - Bulk actions - Open in new tabs
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1613
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/06_bulkOpenInNewTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| From BO > Go to the Orders > Orders page | Orders listing is displayed correctly |
| Select more than one order from the list, click on the Bulk actions button and Click on "Open in new Tabs" | The last order is displayed in a new tab |
| Come back to Orders page | An alert "It looks like you have exceeded the number of tabs allowed. Check your browser settings to open multiple tabs." is displayed |
| Accept the pop up to open multiple tabs<br>{color:red}NO popoup on automated tests{color} -> Check the scond tab | All the orders selected are displayed in different tabs |
