---
title: "BO - International - Translations : Modify translations and check result"
weight: 3
---

# BO - International - Translations : Modify translations and check result
## Details
* **Status** : À faire
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7739
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
| _*Case 3: Front office Translations(with hummingbird theme)*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed<br><br>On develop there's a regression : https://github.com/PrestaShop/PrestaShop/issues/33521 |
| Click on *Blockwishlist* > *Shop* Link  from the left list > Scroll down to *Add to wishlist* field > Click on *Save* button | This message is displayed "Translations successfully updated" |
| BO > Design > Theme & Logo > Add new theme > Hummingbird > Click on *Use this theme* > Click on *Yes* button | Message displayed : Successful update |
| Go to FO > Select English (from the header) > Log into Customer account with Data > Add a product to your wishlist with *Wishlist button* | A modal appears with title " Add to wishlist Now" is displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1380/fo-humm1.png! |
| _*Case 4: Installed modules translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Select *Contactform* > *Admin* from the menu in the left > fill the *Contact form* field > Click on *Save button* | This message is displayed "Translations successfully updated" |
| BO > Modules > Module Manager > fill the searchbar > click on search button | The module is found and displayed with the new name (edited in previous step)<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1382/Module-manager-%E2%80%A2-trans2.png! |
| _*Case 5: Email translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Click on *Subject* in the left menu > edit values in *Welcome!*  field > Click on *Save* button | This message is displayed : "Translations successfully updated" |
| BO > Advanced Parameters > E-mail > | The E-mail page is well displayed<br><br>The mail Subject is : "*You're Welcome!*" (Added in step 16) |
| _*Case 6: Other translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Edit values in *If enabled, the voucher will not apply to products already on sale* field > Click on *Save* button | This message is displayed : Translations successfully updated |
| BO > Catalog > Discounts > Add new cart rule > Go to ACTIONS Tab > Hover the mouse on *Exclude discounted products* | "The voucher is available only for new products" message is displayed<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1384/Cart-Rules-Add-new-%E2%80%A2-Prest8-1-0.png|width=477,height=303! |
