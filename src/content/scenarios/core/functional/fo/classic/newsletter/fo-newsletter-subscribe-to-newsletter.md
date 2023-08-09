---
title: "FO - Newsletter - Subscribe to newsletter"
weight: 2
---

# FO - Newsletter - Subscribe to newsletter
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1496
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/04_newsletter/01_subscribeNewsletter.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO on the Homepage | The FO homepage is displayed |
| In the newsletter form field, add a email address who is not yet a newsletter subscriber email and click on "subscribe"<br><br>!image-2021-04-06-16-20-27-389.png! | A confirmation message is displayed <br>!image-2021-04-06-16-19-48-272.png! |
| Go to the BO on the module manager page | Module manager page is displayed |
| Select the "newletter" module in the list and in the select list form click on "configure"<br><br>!image-2021-04-06-16-25-51-178.png!<br>!image-2021-04-06-16-26-51-597.png! | Redirected to the newsletter module configuration page<br> !image-2021-04-06-16-27-30-186.png! |
| In the "newsletter registration" section , in the table , search for the email address used in step 2 | The email address is in the list and the status is "subscribed"<br>!image-2021-04-06-16-31-47-908.png! |
| Go back to the FO and in the newsletter form field, use again the same email address than step 2<br>Then click on "subscribe" | A error message is displayed, it says that the email address is already used<br> !image-2021-04-06-16-33-37-842.png! |
