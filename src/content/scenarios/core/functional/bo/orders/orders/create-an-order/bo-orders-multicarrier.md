---
title: "BO - Orders - Multicarrier"
weight: 12
---

# BO - Orders - Multicarrier
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11917

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go on BO > Orders > Add new order. | New order page is displayed. |
| In the field "Search for a customer", fill with "Doe". | The customer card is displayed. |
| Click on the CTA "Choose" on the customer card. | The full page is displayed ("Cart" and "Addresses" blocs). |
| On the bloc "Cart", in the field "Search for a product", type "Product 1". | In the field "Product", the result for "Product 1" is displayed. |
| Select 3 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Product 1" in 3 quantity is in the cart. |
| On the bloc "Cart", in the field "Search for a product", type "Product 2". | In the field "Product", the result for "Product 2" is displayed. |
| Select 4 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Product 2" in 4 quantity is in the cart. |
| On the bloc "Cart", in the field "Search for a product", type "Product 3". | In the field "Product", the result for "Product 3" is displayed. |
| Select 2 for the quantity. | Quantity selected. |
| Click on the CTA "Add to cart". | "Product 3" in 2 quantity is in the cart. |
| In the "Shipping" bloc, check the carrier. | 2 choices are displayed : <br> * Carrier 1 <br> * Carrier 2 |
| Select Carrier 1. | Carrier 1 is displayed. |
| In the bloc "Summary", choose "Cash on delivery" as payment method. | Method payment is selected. |
| In the bloc "Summary", choose "Payment accepted" as order status. | Order status is selected. |
| Click on the CTA "Create order". | Order is done, and detailed order page is displayed. |
| Check the 3 tabs. | 3 tabs are : <br> * "Status (1)"<br> * "Documents (1)"<br> * *"Shipments (2)"* |
| Click on the tab "Shipments". | "Shipments" tab is displayed, with the shipment table. |
| On the first line (Carrier 1 line), click on the "..." CTA. | 2 options are displayed : <br> * Split<br> * Merge |
| Click on the CTA "Split". | "Split shipment" modal is displayed. |
| Select product 1 in 1 quantity. | Modal is refreshed. |
| Click on the "Select a carrier" drop down menu. | Choice "Carrier 1" is displayed. |
| Unselect Product 1 and select Product 2 in 1 quantity. | Modal is refreshed. |
| Click on the "Select a carrier" drop down menu. | Choices<br> * "Carrier 1"<br> * "Carrier 2"<br><br>are displayed. |
| Click on "Carrier 2". | Carrier 2 is selected and CTA "Split shipment" is enable. |
| Click on "Split shipment" CTA. | The modal is closed and the page is refreshed. |
| Click on the tab "Shipment". | A new line is added with "Carrier 2" and shipment number (last one + 1). |
| On the Shipment number id 6 line, click on the "..." CTA. | Merge CTA is displayed. |
| Click on the "Merge" CTA. | "Merge shipment" modal is displayed. |
| Select Product 2 and select the second shipment. | "Merge shipment" CTA is enabled. |
| Click on the "Merge shipment" CTA. | "Merge shipment" modal is closed and the page is refreshed. |
| Click on the "Shipment" tab. | Shipment tab with the table is displayed and the last shipment number is not displayed anymore. |
| On the Carrier 1 line, click on the pen icon. | "Edit shipment" modal is displayed. |
| Add a tracking number. | Tracking number is added. |
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
