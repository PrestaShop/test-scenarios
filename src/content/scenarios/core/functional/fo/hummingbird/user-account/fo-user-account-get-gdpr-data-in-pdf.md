---
title: "FO - User account - Get GDPR Data in PDF"
weight: 4
---

# FO - User account - Get GDPR Data in PDF
## Details
* **Component** : Core
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-4978

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | Home page is displayed |
| Click on your username link in the header > Go to "GDPR - Personal data" tab > Click on "Get my data to PDF" button | * The file is downloaded on your computer<br> * Name of the file is personalData-[_date_of_the_day_].pdf |
| Open the file > Check the datas | * Header with logo, date and name<br> * General info with the informations saved in your account<br> * Addresses with all addresses saved in your account<br> * Orders with all orders ordered with your account<br> * Carts with all carts linked to your account<br> * Messages with all messages of your account<br> * Last connections with all your connections of your account<br> * Module Newsletter subscription / Product comments / Mail alerts with all your informations of your account<br><br>All those informations should be the same as saved in your account |
| Go to FO > Place an order | Once the order process is done, a recap of the order is displayed with message "YOUR ORDER IS CONFIRMED" |
| Go back to your account by clicking on your username in the header > "Go to GDPR - Personal data" tab > Click on "Get my data to PDF" button | * The file is downloaded on your computer<br> * Name of the file is personalData-[_date_of_the_day_].pdf |
| Open the file > Check the "Order" datas | You have a new order in the "Order" table |
| Go to FO > Add products in your cart > Click on "Continue shopping" button > Go back to your account by clicking on your username in the header > "Go to GDPR - Personal data" tab > Click on "Get my data to PDF" button | * The file is downloaded on your computer<br> * Name of the file is personalData-[_date_of_the_day_].pdf |
| Open the file > Check the "Cart" datas | "Cart" table has been updated with the products added to the cart |
| Go to FO > Go back to your account by clicking on your username in the header > "Go to GDPR - Personal data" tab > Click on "Contact page" link in "Rectification & Erasure requests" block | "Contact us" page is displayed |
| Fill the form > Click on "Send" button | Success message "Your message has been successfully sent to our team." is displayed |
| Go back to your account by clicking on your username in the header > "Go to GDPR - Personal data" tab > Click on "Get my data to PDF" button | * The file is downloaded on your computer<br> * Name of the file is personalData-[_date_of_the_day_].pdf |
| Open the file > Check the "Messages" datas | "Messages" table has been updated with the newly sent message |
| Click on "Sign out" link in the header and click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | Home page is displayed |
| Click on your username link in the header > Go to "GDPR - Personal data" tab > Click on "Get my data to PDF" button | * The file is downloaded on your computer<br> * Name of the file is personalData-[_date_of_the_day_].pdf |
| Open the file > Check the "Last connections" datas | "Last connections" table has been updated with the latest connection data |
