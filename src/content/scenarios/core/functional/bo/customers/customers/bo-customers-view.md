---
title: "BO - Customers - View"
weight: 8
---

# BO - Customers - View
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-855
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/08_viewCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers page | The Customers page is displayed correctly |
| Fill all information > Save Form | Customer is saved correctly<br><br>Message is displayed : Successful creation |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly<br><br>Page Title contains Information about customer<br><br>All information is correct<br><br>Customer has 0 Orders.<br>Customer has 0 Carts.<br>Customer has 0 Messages.<br>Customer has 0 Vouchers.<br>Customer has 3 Groups |
| Click View My shop | FO page opens on Homepage |
| Add the product to the cart | Product successfully added to your shopping cart |
| Click on "Proceed to checkout" button on popup > Click "Proceed to checkout" button on Order form | Order form is well displayed |
| Click on Sign In in Step 1 > Click Continue | The customer is logged successfully<br><br>The form is updated on Step 2 |
| On Step 2, add new address with fake values > Click Continue | Step 2 Addresses is well saved<br><br>The form is updated on Step 3 |
| On Step 3, choose a carrier > Add a comment > Click Continue | Step 3 Shipping method is well saved<br><br>The form is updated on Step 4 |
| On Step 4, choose the payment method (Payments by check) > Agree to Terms and conditions > Confirm the order | The Order confirmation page is displayed correctly |
| Close FO and go back to BO > Customers > Customers page | The Customers page is displayed correctly with the filter still on (Filter By Email. Criteria : firstName.lastName@prestashop.com) |
| View Customer | The Customer information page is displayed correctly.<br><br>Page Title contains Information about customer.<br><br>All information are correct.<br><br>Customer has 1 Orders.<br>Customer has 1 Cart.<br>Customer has 1 Viewed product.<br>Customer has 1 Message.<br>Customer has 0 Vouchers.<br>Customer has 2 Last emails.<br>Customer has 1 Last connections.<br>Customer has 3 Groups. |
| Check block Orders | The order information is displayed correctly.<br><br>Date is today.<br>Payment method is Payments by check.<br>Order status is Awaiting check payment.<br>Price is €0.00. |
| Check block Carts | The cart information is displayed correctly.<br><br>Date is today.<br>Final price is equal to total price of the cart. |
| In block Add private note > Fill form > Save | Private note is saved correctly.<br><br>Message is displayed : "Successful update" |
| Check block Messages | The message information is displayed correctly.<br><br>Status is open.<br>The message is correct.<br>Sent on date is today |
| Check block Last connections | The last connection information is displayed correctly.<br><br>Date is today.<br>The origin is the shop's name.<br>The IP address is correct. |
| Check block Groups | The groups information is displayed correctly.<br><br>All groups access are displayed. |
| Check block Addresses | The address information is displayed correctly.<br><br>First name and Last name are correct.<br>Address is correct.<br>Country is correct. |
| Click on Edit customer information (first block) | Form Edit Customer is displayed correctly.<br><br>Page Title contains Editing customer |
| Edit customer with other fake values > Save Form | Customer is saved correctly.<br><br>Message is displayed : Successful update.<br><br>Page Information about customer is displayed |
| Go to Customers list | See the Customer group is Visitor |
| Click on View Customer > View Order | View order page is displayed correctly. |
| Edit Order status to Shipped > Update Status | Order status is saved correctly.<br><br>Message is displayed : Successful update |
| Go to the Customers > Customers page > View Customer | The Customer information page is displayed correctly |
| Check Order status | The status is changed successfully (Shipped).<br><br>The final price is displayed successfully |
| In block Purchased product > Check Name and Quantity | The purchased product is correct.<br>The product purchased number is 1 |
| Click on edit Address button | Form edit address is displayed correctly. Page Title contains Edit |
| Edit address with fake values > Click on Save | Address is saved correctly.<br>Message is displayed : Successful update. |
| In block Addresses | The edited address is displayed correctly |
| Click on view Cart button | Form view cart is displayed correctly.<br>Page Title contains Cart |
| Go back to the Customers > Customers list | The Customers page is displayed correctly |
| Delete customer > Confirm deletion > Reset filter | Customer is deleted successfully, with message Successful deletion<br><br>List of customers is updated |
