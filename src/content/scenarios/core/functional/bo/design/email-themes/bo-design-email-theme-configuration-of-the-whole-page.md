---
title: "BO - Design - Email Theme - Configuration of the whole page"
weight: 2
---

# BO - Design - Email Theme - Configuration of the whole page
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-940
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/https://github.com/PrestaShop/PrestaShop/blob/develop/tests/UI/campaigns/functional/BO/08_design/03_emailTheme/04_configurationOfTheWholePage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/email-theme

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Email theme > Scroll down to Email theme block > Click on magnifying glass for classic theme | Previewing theme classic page is displayed |
| Click on the HTTPS button for the email "account" | A new tab is displayed with the *email template* for account in classic theme<br><br>See the title of the email is :<br>HI FIRSTNAME LASTNAME,<br>THANK YOU FOR CREATING A CUSTOMER ACCOUNT AT SHOPNAME. |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Raw HTML | A new tab is displayed with the email account in *Raw HTML* form |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Text | A new tab is displayed with the email account in *Text* form |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Send a text mail | Cannot send test email for theme classic because it is not your current theme |
| Scroll down > Click on Back to configuration > Choose Default theme in Configuration block : classic > Save | Email theme configuration saved successfully |
| In Generate emails block > Generate emails | Successfully overwrote email templates for theme classic with locale en |
| Scroll down to Email theme block > Click on magnifying glass for classic theme | Previewing theme classic page is displayed |
| Click on 3-dots button for account email theme > Send a text mail | Test email for layout account was successfully sent to demo@prestashop.com |
| Check your emails | Test email account is sent in classic theme |
| In Email theme page > Scroll down to email template customer_qty for Module ps_emailalerts > Click on HTTP button | A new tab is displayed with the email template for customer_qty in classic theme<br><br>See the title of the email is :<br><br>HI,<br><br>{product} is now available. |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Raw HTML | A new tab is displayed with the email followup_1 in *Raw HTML* form |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Text | A new tab is displayed with the email followup_1 in *Text* form |
| Close the new tab | Tab is closed |
| Scroll down > Click on Back to configuration > Choose Default theme in Configuration block : modern > Save | Email theme configuration saved successfully |
| In Generate emails block > Generate emails | Successfully overwrote email templates for theme modern with locale en |
| Scroll down to Email theme block > Click on magnifying glass for modern theme | Previewing theme modern page is displayed |
| Click on the HTTPS button for the email "backoffice_order" | A new tab is displayed with the email template for backoffice_order in modern theme<br><br>See the title of the email is :<br><br>Hi First name Lastname,<br>A new order has been generated on your behalf. |
| Close the new tab | Tab is closed |
| Click on 3-dots button > Send a text mail | Test email for layout backoffice_order was successfully sent to demo@prestashop.com |
| Check your emails | See the email backoffice_order is sent in modern theme |
| Scroll down to bottom of the page > Click on Back to configuration button | Email theme page is displayed |
| In Translate emails block > Choose French > Click Translate emails | Translation page is displayed |
| Search for "Thank you for creating a customer account at SHOPNAME." > Edit the translation > Click on Save | Toast Translations successfully updated is displayed |
| Go back to Design > Email theme > Edit Generate emails block > Generate emails | Successfully generated email templates for theme modern with locale fr |
| Click on Your Profile in top right corner > Edit your language to French > Save | Successful update |
| Go to Apparence > Email theme > Bloc Thèmes d'e-mail > Click on magnifying glass for modern theme > Click on 3-dot button : Envoyer un e-mail test for account | L'e-mail de test du format account a été envoyé à demo@prestashop.com avec succès |
| Check your emails | See your email is in French with title : Merci d'avoir créé votre compte client sur SHOPNAME.Bonjour |
