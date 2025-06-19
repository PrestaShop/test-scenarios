---
title: "FO - Contact us - Send a message while logged in"
weight: 3
---

# FO - Contact us - Send a message while logged in
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1223
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/05_contactUs/02_sendMessageWithCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/front-office/contact-us

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to module manager > Contact form module > configuration page and Enable Receive customers\' messages by email | Check success message |
| Enable Send confirmation email to your customers | Check success message |
| Go to FO > Log into your customer account created from the pre-condition step | You are logged into your customer account |
| Go to FO > In footer, click on Our Company > Contact us | * The contact form is displayed<br> * The Email address is not empty and it is the same email address of the customer created in the pre-condition<br> * The "Order reference" select list is not displayed |
| Fill the form > Send | Message "The message cannot be blank." is displayed |
| Fill the form > Send | Message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Customer Service > Customer Service page | * The Customer Service page is well displayed & the last message is well displayed<br> * The email is ok<br> * the Messages is ok |
| Go to FO > Sign in with John Doe | You are logged into your customer account |
| Click on "Contact us" in header | * The contact us page is well displayed<br> * The "Email address" is equal to "pub@prestashop.com"<br> * The "Order reference" list is well displayed |
| Fill the form again > Send | Message "Your message has been successfully sent to our team." is displayed |
| Check email received to the merchant to inform him of the message | in the email subject => 'Message from contact form' |
| Check email received to the customer to inform him the message has been sent successfully |  |
| Go to BO > Orders list page and filter the order reference | The number of orders === 1 |
| Click on View order | * The Order view page is well displayed<br> * In the message block: the message is well displayed |
| Go to BO > Customer Service page and Delete the messages | An alert "Successful deletion." is well displayed |
| Go to BO > Customers list page & delete the customer created in the pre-condition | The alert "Successful deletion." is well displayed |
