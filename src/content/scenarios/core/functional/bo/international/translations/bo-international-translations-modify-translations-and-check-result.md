---
title: "BO - International - Translations : Modify translations and check result"
weight: 1
---

# BO - International - Translations : Modify translations and check result
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1034
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/04_translations/01_modifyTranslation.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/translation

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > International > Translations | The Translations page is well displayed.<br><br>Modify translations section is displayed with two input fields :<br> * Type of translation<br> * Select your language |
| _*Case 1: Back office translations*_<br><br>Go to *Modify translations* section > Use following data.<br><br>Click on *Modify* button | Translations page is well displayed |
| Scroll down the list to Generate field<br><br>Click on *Save* button | A message is displayed "Translations successfully updated" |
| BO > Catalog > Discounts > Click on *Add new cart rule* button | The button to generate a code is now named : *Generate Code* |
| _*Case 2: Front office Translations*_<br><br>Click on *International* > *Translations* > Go to *Modify translations* section > Select values with following data > Click on *Modify* button | Translations page is well displayed |
| Click on *Labels* Link from the left list > Scroll down to *Email address* field > Click on Save button<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1376/FO-class1.png! | This message is displayed "Translations successfully updated" |
| Go to FO > Select English (from the header) > Click on *Contact us* link | The field name : "Valid Email address" is well displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1377/fo-class2.png! |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click to "Add new theme" | You should be able to choose to import from your computer, Import from the web, Import from FTP |
| Import from your computer<br><br>Click to Browse and select your theme.<br><br>Click to save | Theme should be added<br><br>and The & logo page is displayed |
| Go to _My theme for prestashop shop_ and click on delete button of new theme added | Delete popup is displayed |
| Click on YES to delete theme | Successful deletion message is displayed and the theme is deleted |
| Click to "Add new theme" | Theme import page is displayed |
| Go to Import from the web<br><br>Click to input and indicate the complete URL to an online.zip<br><br>Click to save | Theme should be added |
| Go to _My theme for prestashop shop_ and click on delete button of new theme added | Delete popup is displayed |
| Click on YES to delete theme | Successful deletion message is displayed and the theme is deleted |
| Click to "Add new theme" | Theme import page is displayed |
| Go to Import from FTP<br><br>Select .zip files that you uploaded in the /themes folder<br><br>Click to save | Theme should be added |
| _*Case 3: Front office Translations(with hummingbird theme)*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed<br><br>On develop there's a regression : https://github.com/PrestaShop/PrestaShop/issues/33521 |
| Click on *Blockwishlist* > *Shop* Link  from the left list > Scroll down to *Add to wishlist* field > Click on *Save* button | This message is displayed "Translations successfully updated" |
| BO > Design > Theme & Logo > Add new theme > Hummingbird > Click on *Use this theme* > Click on *Yes* button | Message displayed : Successful update |
| Go to FO > Select English (from the header) > Log into Customer account with Data > Add a product to your wishlist with *Wishlist button* | A modal appears with title " Add to wishlist Now" is displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1380/fo-humm1.png! |
| _*Case 4: Installed modules translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Select *Contactform* > *Admin* from the menu in the left > fill the *Contact form* field > Click on *Save button* | This message is displayed "Translations successfully updated" |
| BO > Modules > Module Manager > fill the searchbar > click on search button | The module is found and displayed with the new name (edited in previous step)<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1382/Module-manager-%E2%80%A2-trans2.png! |
| _*Case 5: Email translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Click on *Subject* in the left menu > edit values in *Welcome!*  field > Click on *Save* button | This message is displayed : "Translations successfully updated" |
| Go to FO > Click on top right "Sign In" button link | "Log in to your account" page is displayed |
| Click on "No account? Create one here" link at the bottom fo the block | Create an account page is displayed |
| Fill the form with your personal information > Click Save | * You are now logged into your account<br> * Redirection automatically to the homepage<br> * An email "Welcome!" should be received |
| Check the welcome Email | Email received with the subject => [PrestaShop] Welcome |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |
| BO > Advanced Parameters > E-mail > | The E-mail page is well displayed<br><br>The mail Subject is : "*You're Welcome!*" (Added in step 16) |
| _*Case 6: Other translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Edit values in *If enabled, the voucher will not apply to products already on sale* field > Click on *Save* button | This message is displayed : Translations successfully updated |
| BO > Catalog > Discounts > Add new cart rule > Go to ACTIONS Tab > Hover the mouse on *Exclude discounted products* | "The voucher is available only for new products" message is displayed<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1384/Cart-Rules-Add-new-%E2%80%A2-Prest8-1-0.png|width=477,height=303! |
