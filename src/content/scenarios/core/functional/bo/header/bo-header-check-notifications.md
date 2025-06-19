---
title: "BO - Header - Check notifications"
weight: 5
---

# BO - Header - Check notifications
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-708
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/15_header/08_checkNotifications.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/common-components/back-office-header/bell-icon

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the notification icon | The notifications are listed |
| Refresh the page | The number next to the bell disappears |
| Go to the FO > Login as a customer > Go to the order history > Open an order | The order details page is displayed |
| Send a message regarding an item from the form at the bottom of the page | Message is sent successfully |
| Go to the BO > Refresh the page | A 1 appears next to the bell |
| Open the notification box, then click on Messages | The message created earlier appears |
| Open the notification | The message page is opened |
| Go to FO > Add a product to you cart > And continue the buying process as a Guest Customer | Order confirmation page will open |
| Go back to BO > Refresh the BO | See that you have 2 notifications.<br>1 for the order<br>1 for the customer |
| Click on both notifications | The Order detail page and the Customer detail page will open |
