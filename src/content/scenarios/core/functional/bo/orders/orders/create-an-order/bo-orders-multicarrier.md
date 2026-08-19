---
title: "BO - Orders - Multicarrier"
weight: 9
---

# BO - Orders - Multicarrier
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8469
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/11_multiCarrier.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go on BO > Orders > Add new order. | New order page is displayed. |
| In the field "Search for a customer", fill with "Doe". | The customer card is displayed. |
| Click on the CTA "Choose" on the customer card. | The full page is displayed ("Cart" and "Addresses" blocs). |
| On the bloc "Cart", in the field "Search for a product", type "Assiette". | In the field "Product", the result for "Assiette" is displayed. |
| Select 3 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Assiette" in 3 quantity is in the cart. |
| On the bloc "Cart", in the field "Search for a product", type "Chaise". | In the field "Product", the result for "Chaise" is displayed. |
| Select 4 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Chaise" in 4 quantity is in the cart. |
| On the bloc "Cart", in the field "Search for a product", type "Table". | In the field "Product", the result for "Table" is displayed. |
| Select 2 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Table" in 2 quantity is in the cart. |
| In the "Shipping" bloc, check the carrier. | 2 choices are displayed : <br> * Voiture<br> * Fourgonnette |
| Select "Voiture". | "Voiture" is displayed. |
| In the bloc "Summary", choose "Cash on delivery" as payment method. | Method payment is selected. |
| In the bloc "Summary", choose "Payment accepted" as order status. | Order status is selected. |
| Click on the CTA "Create order". | Order is done, and detailed order page is displayed. |
| Check the 3 tabs. | 3 tabs are : <br> * "Status (1)"<br> * "Documents (1)"<br> * *"Shipments (2)"* |
| Click on the tab "Shipments". | "Shipments" tab is displayed, with the shipment table. |
| On the first raw (Shipment 1 line), click on the "..." CTA. | 2 options are displayed : <br> * Split<br> * Merge |
| Click on the CTA "Split". | "Split shipment" modal is displayed. |
| Select "Assiette" in 1 quantity. | Modal is refreshed. |
| Click on the "Select a carrier" drop down menu. | Choice "Voiture" is displayed. |
| Unselect "Assiette" and select "Chaise" in 1 quantity. | Modal is refreshed. |
| Click on the "Select a carrier" drop down menu. | Choices<br> * "Voiture"<br> * "Fourgonnette"<br><br>are displayed. |
| Click on "Fourgonette". | "Fourgonette" is selected and CTA "Split shipment" is enable. |
| Click on "Split shipment" CTA. | The modal is closed and the page is refreshed. |
| Click on the tab "Shipment". | A new raw is added with "Fourgonnette" as carrier and shipment number (last one + 1). |
| Go to FO > Login page > log in | Logged in. |
| Go to Main menu > Orders > Click on the last order "Details" | Order is displayed. |
| Check "Shipment tracking details". | 1 raw with carrier for Voiture carrier<br><br>1 raw with carrier for Fourgonnette carrier<br><br>1 raw with carrier for Fourgonnette carrier |
| Check product details table. | 1 raw : Assiette in 3 qty with Voiture carrier<br><br>2 raw : Chaise in 3 qty with Voiture carrier<br><br>3 raw : Table in 2 qty with Fourgonnette carrier<br><br>4 raw : Chaise in 1 qty with Fourgonnette carrier |
| On BO > On the last shipment raw, click on the "..." CTA. | Merge CTA is displayed. |
| Click on the "Merge" CTA. | "Merge shipment" modal is displayed. |
| Select Chaise and select the second shipment. | "Merge shipment" CTA is enabled. |
| Click on the "Merge shipment" CTA. | "Merge shipment" modal is closed and the page is refreshed. |
| Click on the "Shipment" tab. | Shipment tab with the table is displayed and the last shipment number is not displayed anymore (2 remaining shipments). |
| On FO > Go to Main menu > Orders > Click on the last order "Details" | Order is displayed. |
| Check "Shipment tracking details". | 1 raw with Voiture carrier <br><br>1 raw with Fourgonnette carrier |
| Check product details table. | 1 raw : Assiette in 3 qty with Voiture carrier<br><br>2 raw : Chaise in 3 qty with Voiture carrier<br><br>3 raw : Table in 2 qty with Fourgonnette carrier<br><br>4 raw : Chaise in 1 qty with Fourgonnette carrier |
| Go back to BO | The view order page is displayed |
| On the Carrier 1 line, click on the pen icon. | "Edit shipment" modal is displayed. |
| Add a tracking number. | Tracking number is added.<br><br> <br><br>{color:#505f79}_(FO verification is already done in multishipment FO scenario, no need to check in this test)_{color} |
| Click on the "Update" CTA. | "Edit shipment" modal is closed and the page is refreshed. |
| Click on the tab "Shipments". | "Shipments" tab is displayed, with the shipment table. The first line has the tracking number filled. |
| Click on the "..." CTA of the first shipment line. | "Split" and "Merge" CTA are displayed. |
| Click on the CTA "Split". | "Split shipment" modal is displayed with the alert : <br><br>"This shipment can't be modified because a tracking number has already been assigned, indicating that it has already been shipped." |
| Select a product and a carrier. | The CTA "Split shipment" stays disabled. |
| Close the modal. | Modal is closed, no refresh. |
| Click on the "..." CTA of the first shipment line. | "Split" and "Merge" CTA are displayed. |
| Click on the CTA "Merge". | "Merge shipment" modal is displayed with the alert : <br><br>"This shipment can't be modified because a tracking number has already been assigned, indicating that it has already been shipped." |
| Select a product. | Product selected. |
| Click on the "Select shipment" dropdown menu. | The shipment is enabled. |
| Select the shipment. | The shipment is selected, CTA "Merge shipment" is still disabled. |
| Close the modal. | Modal is closed, no refresh. |
| Click on the "..." CTA of the second shipment line. | "Split" and "Merge" CTA are displayed. |
| Click on the CTA "Merge". | "Merge shipment" modal is displayed. |
| Select a product and click on the "Select shipment" dropdown menu. | The shipment is disabled. |
| Close the modal. | Modal is closed, no refresh. |
