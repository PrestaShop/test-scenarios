---
title: "BO - Order details - Customer block"
weight: 1
---

# BO - Order details - Customer block
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-736
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/01_customerBlock.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders -> open last Order page | The Order details page is displayed.<br><br>The customer panel displayed on the left of the product list has: <br><br># The customer's title<br># The customer's name<br># The customer's last name<br># The customer's customer reference.<br># Email address<br># The number of validated orders<br># The Shipping address<br># The Invoice Address<br># A closed private note<br><br><br>{quote}<br>"Account registered" & "Total spent since registration" are not displayed because it is guest account<br>{quote} |
| Click on "View full details" button | Redirection to customer page |
| Click on the "Address mail" | The Email page is displayed and the email on a “mailto” link |
| Click on the  dropdown button in the shipping address | A drop-down is displayed |
| Click on "Edit existing address" | A modal "customer_address" is opened |
| Update required fields and save<br><br># First name<br># Last name<br># Address<br># Zip/postal code<br># City | The modal is closed, the order details page is displayed and the shipping address is updated |
| Click on the dropdown button in the shipping address | A drop-down is displayed |
| Click on "Select another address" | The modal "Select another address"  is opened |
| Choose the address & Click on "Select" button | A green alert "Successful update." is displayed and the new address is displayed in the Shipping address block |
| Click on the dropdown button in the Invoice address | A drop-down is displayed |
| **Click on "Edit existing address" | A modal "customer_address" is opened |
| Update required fields and save<br> # First name<br> # Last name<br> # Address<br> # Zip/postal code<br> # City | The modal is closed, the order details page is displayed and the invoice address is updated |
| Click on the dropdown button in the invoice address | A drop-down is displayed |
| Click on "Select another address" | Modal is opened |
| Select an address & click on "Select" | A green alert "Successful update." is displayed and the invoice address is updated |
| Check the Private note text area | The private note text area is not visible by default |
| Click on "+" button | The private note text area is visible |
| Got to BO > Orders > Order list page and View first Order created by John Doe | The Orders page is displayed and the Order details page  1 is displayed |
| Press the "+" button to add private note, set a private note and save | A green alert "Successful update." is displayed |
| Got to BO > Orders > Order list page and View the Order created by new customer | The Orders page is displayed, the Order details page is displayed and the private doesn't exist |
| Got to BO > Orders > Order list page and View second Order created by John Doe | The Orders page is displayed, the Order details page 2 is displayed and the private note is displayed |
| Delete private not and click on "Save" | A "Successful update." alert is displayed |
