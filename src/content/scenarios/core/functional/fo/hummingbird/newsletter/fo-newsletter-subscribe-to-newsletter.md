---
title: "FO - Newsletter - Subscribe to newsletter"
weight: 1
---

# FO - Newsletter - Subscribe to newsletter
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4986
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/04_newsletter/01_subscribeNewsletter.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO on the Homepage | The FO homepage is displayed |
| In the newsletter form field(in page bottom), add a email address who is not yet a newsletter subscriber email and click on "Subscribe" button<br><br> <br><br>!image-2023-06-15-16-31-15-437.png|width=888,height=115! | A confirmation message is displayed <br><br><br><br> <br><br>!image-2023-06-15-16-51-18-222.png! |
| Go to the BO on the module manager page | Module manager page is displayed |
| Select the "Newsletter" module in the list and in the select list form click on "Configure"<br><br><br>!image-2023-06-15-17-01-24-202.png! | Redirect to the "Newsletter subscription" page<br>!image-2023-06-15-17-05-24-885.png! |
| In the "Newsletter registrations" section , in the table , search for the email address used in step 2 | The email address is in the list and the status is "subscribed"<br><br><br><br>!image-2023-06-15-17-26-13-838.png! |
| Go back to the FO and in the newsletter form field, use again the same email address than step 2<br>Then click on "Subscribe" button | A error message is displayed:  "This email address is already registered."<br><br><br><br>!image-2023-06-15-17-28-22-654.png! |
