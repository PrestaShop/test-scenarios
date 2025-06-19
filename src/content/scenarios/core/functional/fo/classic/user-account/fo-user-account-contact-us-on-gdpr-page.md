---
title: "FO - User account - Contact us on GDPR page"
weight: 6
---

# FO - User account - Contact us on GDPR page
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1204
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/06_contactUsOnGDPRPage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | "Your account" page is displayed |
| Go to "GDPR - Personal data" tab | GDPR - Personal data page is displayed |
| Click "contact page" link in "Rectification & Erasure requests" section | Contact form is displayed |
| Send a message through Contact Form | Success message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Customer service > Customer service | The "Customer Service" page is displayed |
| Click on "Customer service" block > Click on "XX New messages" | The message thread is displayed |
