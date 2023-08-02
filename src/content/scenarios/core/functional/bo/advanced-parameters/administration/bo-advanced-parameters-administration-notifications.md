---
title: "BO - Advanced Parameters - Administration - Notifications"
weight: 3
---

# BO - Advanced Parameters - Administration - Notifications
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Advanced Parameters> Administration> Notifications form | The notifications are enabled for new orders, new customers, and new messages |
| Disabled all notifications and click on save button | Update successful message is displayed and the bell icon is gone |
| Enable the notifications for new customers and click on save button | Update successful message is displayed and the bell icon is displayed with customers notifications |
| Go to FO > Click on top right "Sign In" button link | "Log in to your account" page is displayed |
| Click on "No account? Create one here" link at the bottom fo the block | Create an account page is displayed |
| Fill the form with your personal information > Click Save | * You are now logged into your account<br> * Redirection automatically to the homepage<br> * An email "Welcome!" should be received |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |
| Go to notification> Customers(1) | notification : test test - registered xx/xx/xxxx |
| Disabled the notifications for new customers<br><br>Enable the notifications for new orders and new messages<br><br>Click on save. | Update successful message is displayed and the bell icon is displayed with orders and messages notifications |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed |
| choose product with quantity = 4 and add it to cart | The product table is displayed, the Shipping block is displayed and the summary block is displayed |
| Choose delivery method (free) | Delivery method is selected |
| Choose Payment method | Payment method is selected |
| Choose order status | Order status is selected |
| Click on "Create the order" | The order details page is displayed with exact data:<br><br># Order status<br># Order Price<br># Shipping Address<br># Invoice Address<br># Product name |
| Go to notification> Orders(1) | notification : test test - registered xx/xx/xxxx |
| Enable all notifications  and click on save button. | Update successful message is displayed and the bell icon is displayed with orders, customers and messages notifications |
| Go to FO > Log into your customer account created from the pre-condition step | You are logged into your customer account |
| Go to FO > In footer, click on Our Company > Contact us | * The contact form is displayed<br> * The Email address is not empty and it is the same email address of the customer created in the pre-condition<br> * The "Order reference" select list is not displayed |
| Fill the form > Send | Message "The message cannot be blank." is displayed |
| Fill the form > Send | Message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Customer Service > Customer Service page | * The Customer Service page is well displayed & the last message is well displayed<br> * The email is ok<br> * the Messages is ok |
| Go to FO > Sign in with John Doe | You are logged into your customer account |
| Click on "Contact us" in header | * The contact us page is well displayed<br> * The "Email address" is equal to "pub@prestashop.com"<br> * The "Order reference" list is well displayed |
| Fill the form again > Send | Message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Orders list page and filter the order reference | The number of orders === 1 |
| Click on View order | * The Order view page is well displayed<br> * In the message block: the message is well displayed |
| Go to BO > Customer Service page and Delete the messages | An alert "Successful deletion." is well displayed |
| Go to BO > Customers list page & delete the customer created in the pre-condition | The alert "Successful deletion." is well displayed |
| Go to notification> Messages(1) | notification : new message |
