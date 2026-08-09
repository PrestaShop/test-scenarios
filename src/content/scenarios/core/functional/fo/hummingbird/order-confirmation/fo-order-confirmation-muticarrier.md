---
title: "FO - Order confirmation - Muticarrier "
weight: 3
---

# FO - Order confirmation - Muticarrier 
## Details
* **Component** : Core
* **Status** : [TEST] IN PROGRESS
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8489
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/https://github.com/PrestaShop/PrestaShop/pull/40584.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On the FO, go to cart. | Cart page is displayed. |
| Continue checkout until shipping page. | Shipping page is displayed with a combination of shipping method : <br><br>Carrier 1 and carrier 2 |
| Select combination carrier 1 and carrier 2. | Combination selected. |
| Click on the CTA "Continue to payment". | Payment page of the checkout + final summary is displayed. |
| Check the final summary part. | Products concerned by the carrier are listed under it : <br><br>Carrier for product 1 : product 1 in 3 quantities<br><br>Carrier for product 2 & 3 : product 2 in 3 quantities<br><br>Virtual product(s) (No delivery service) : product v in 1 quantities<br><br>Shipping cost : 1e |
| Go to my account > order history > order detail page | Page title = Order details |
| Check the carriers table | row 1 : first carrier <br><br>row 2 : second carrier |
| Check product details table | row 1 : first product<br><br>row 2 : second product<br><br>row 3: third product<br><br>row 4 : virtual product |
| Go back to BO > Orders > First order in the list | The created order page is opened <br>page title = Orders > Order |
| Click on the new tab 'Shipments' | The tab is opened<br>2 lines in the table |
| Click on edit shipment link of the first shipment | A modal is visible |
| Add a tracking number and save | The modale is not visible |
| Go back to the FO > order history > order details page | page title = Order details |
| Check the tracking number in the carriers table | Row 1 , column 5 = <br><br>TN12345678 |
| Post-condition :<br><br>Delete the created products<br><br>Delete the created carriers<br><br>Disable final summary |  |
