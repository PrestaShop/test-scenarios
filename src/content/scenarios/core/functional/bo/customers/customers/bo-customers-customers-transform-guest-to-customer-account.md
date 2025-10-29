---
title: "BO - Customers - Customers : Transform guest to customer account"
weight: 10
---

# BO - Customers - Customers : Transform guest to customer account
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7392
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/11_transformGuestToCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product | The product is displayed |
| Click on ADD TO CART | The pop-up of PROCEED TO CHECKOUT is well displayed |
| Click on PROCEED TO CHECKOUT | The SHOPPING CART is well displayed |
| Click on PROCEED TO CHECKOUT | The PERSONAL INFORMATION is well displayed. |
| Fill the *Order as a guest* form without filling in the password and the birthdate<br><br>check :<br><br>_ Receive offers from our partners_<br>_ I agree to the terms and conditions and the privacy policy_<br>_Sign up for our newsletter_<br>_Customer data privacy_<br><br>and click on CONTINUE | The step 2 ADDRESSES page is displayed |
| Click Edit Step 1(PERSONAL INFORMATION) > Edit Firstname and Lastname and<br><br>check :<br><br>_ Receive offers from our partners_<br>_ I agree to the terms and conditions and the privacy policy_<br>_Sign up for our newsletter_<br>_Customer data privacy_<br><br> <br><br>CONTINUE | Step 2 is displayed |
| Fill the *ADDRESSES* form<br><br>and click on CONTINUE | The step 3 SHIPPING METHOD is well displayed. |
| Step 3 - *Shipping method* is displayed.<br><br>_Click and collect_ and _My carrier_ are displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping<br><br>And click on continue | Step 4 - Payment is displayed |
| Choose Payment by bank wire > Agree to the terms and conditions > Click on PLACE ORDER button | YOUR ORDER IS CONFIRMED |
| Check confirmation Email | Confirmation Email => [PrestaShop] Order confirmation<br><br>Payment confirmation email => [PrestaSHop]Awaiting bank wire payment |
| Go to BO > Customers page | Guest account exists in customers table and assigned to "Guest" Group |
| Go to BO > Customers > Customers | Customers page is displayed<br><br>The customers table is displayed with title : Manage your Customers +(total number of customers) |
| Click on *Group* dropdown button > Select *Guest* > Click *Search* button | The customer assigned to Guest group is well displayed<br><br>Reset button is dislayed |
| Click on the *three dots* in front of first line in the table > Click *View* button | New Customers page is displayed<br><br>Title contains : "Information about customer [your customer name]" |
| Go to top left section > Click on *Transform to a customer account* button | Message displayed : "Successful creation"<br><br>The button *Transform to a customer account* is not displayed |
| Check received email | I must receive an email confirming that my guest account has been turned into a customer account |
| Back to BO > Customers > Customers | The Customers table with filter guest is empty with mention : No record found |
| Click on *Reset* button | All customers are displayed<br><br>The edited guest is now registered as a *Customer* under *Group* column |
