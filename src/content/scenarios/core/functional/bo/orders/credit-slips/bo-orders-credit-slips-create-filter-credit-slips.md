---
title: "BO - Orders - Credit Slips - Create Filter Credit Slips"
weight: 1
---

# BO - Orders - Credit Slips - Create Filter Credit Slips
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-766

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Click on "Partial refund" to add the first partial refund | Partial refund is added successfully<br>A new document is created for the credit slips |
| Add the second partial refund | The message "A partial refund was successfully created" is displayed<br>A new document is created for the credit slips |
| Click on "View delivery slip" | The file with "DE000001" name is generated successfully with the correct data |
| Go to Orders > "Credit slips" page | Credit slips page is opened successfully |
| Reset all filters and get the credit slips number | All filters are reset<br>All credit slips are displayed<br>The credit slips number is equal 2 |
| Filter By id_credit_slip<br>Criteria : 1" | Credit slips list is filtered<br>Credit slips listed have 1" in their id_credit_slip" |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_order<br>Criteria : 4" | Credit slips list is filtered<br>Credit slips listed have 4" in their id_order |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter by date From and To<br>Criteria : today | Credit slips list is filtered<br>Credit slips listed have the date of today in their date |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_credit_slip<br>Criteria : 1" | Credit slips list is filtered<br>Credit slips listed have 1" in their id_credit_slip" |
| Download the Credit Slip | The file exist in the disk |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_credit_slip<br>Criteria : 2" | Credit slips list is filtered<br>Credit slips listed have 2" in their id_credit_slip" |
| Download the Credit Slip | The file exist in the disk |
