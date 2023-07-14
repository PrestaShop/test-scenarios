---
title: "BO - International - Translations - Modify translations and check result"
weight: 1
---

# BO - International - Translations - Modify translations and check result
## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > International >Translations | The Translations page is well displayed, Modify translations section is displayed with two input fields :<br> * Type of translation<br> * Select your language |
| _*Case 1:Back office translations*_<br><br>Go to *Modify translations* section<br><br>Click on *Modify* button | Translations page is well displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/6826979431127903391/BO-trans%201.png|width=1266,height=566! |
| Scroll down the list to Generate field<br><br>Click on *Save* button | A message is displayed "Translations successfully updated" |
| BO > Catalog> Discounts > Click on *Add new cart rule* button | The button name is : *Generate Code* (as set in previous step)<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/8901507420964499272/BO-trans3.png! |
| _*Case 2:Front office Translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Search translations page is well displayed |
| Click on *Labels* Link  from the left list > scroll down to *Email address* field > Click on Save button<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1376/FO-class1.png! | This message is displayed "Translations successfully updated" |
| Go to Fo > Select English (from the header) > Click on *Contact us* link | The field name : "Valid Email address" is well displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1377/fo-class2.png! |
| _*Case 3:Front office Translations(with hummingbird theme)*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Click on *Blockwishlist* > *Shop* Link  from the left list > Scroll down to *Add to wishlist* field > Click on *Save* button | This message is displayed "Translations successfully updated" |
| BO > Design > Theme & Logo > Hymmingbird > Click on *Use this theme* > Click on *Yes* button | Message displayed : Successful update |
| Go to Fo > Select English (from the header) > Click on *Wishlist button* | A modal appears with title " Add to wishlist Now" is displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1380/fo-humm1.png! |
| _*Case 4: Installed modules translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Select *Contactform* > *Admin* from the menu in the left > fill the *Contact form* field > Click on *Save button* | This message is displayed "Translations successfully updated" |
| BO > Modules > Module Manager > fill the searchbar > click on search button | The module is found and displayed with the new name (edited in previous step)<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1382/Module-manager-%E2%80%A2-trans2.png! |
| _*Case 5: Email translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Click on *Subject* in the left menu > edit values in *Welcome!*  field > Click on *Save* button | This message is displayed : "Translations successfully updated" |
| Go to FO > Click on top right "Sign In" button link | "Log in to your account" page is displayed |
| Click on "No account? Create one here" link at the bottom fo the block | Create an account page is displayed |
| Fill the form with your personal information > Click Save | * You are now logged into your account<br> * Redirection automatically to the homepage<br> * An email "Welcome!" should be received |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |
| BO > Advanced Parameters > E-mail > | The E-mail page is well displayed<br><br>The mail Subject is : "*You're Welcome!* " ( Added in step 16)<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/9179784382882985102/E-mail-%E2%80%A2-Prest8-1-0.png|width=1220,height=241! |
| _*Case 6: Other translations*_<br><br>Click on *International*  > *Translations* > Go to *Modify translations* section > Select values > Click on *Modify* button | Translations page is well displayed |
| Edit values in *If enabled, the voucher will not apply to products already on sale* field > Click on *Save* button | This message is displayed : Translations successfully updated |
| BO > Catalog > Discounts > ACTIONS > Hover the mouse on *Exclude discounted products* | "The voucher is available only for new products" message is displayed<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1384/Cart-Rules-Add-new-%E2%80%A2-Prest8-1-0.png|width=477,height=303! |
