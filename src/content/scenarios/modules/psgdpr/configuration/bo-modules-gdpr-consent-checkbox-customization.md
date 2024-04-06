---
title: "BO - Modules - GDPR - Consent checkbox customization"
weight: 3
---

# BO - Modules - GDPR - Consent checkbox customization
## Details
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7593

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to Tab 3 : Consent checkbox customization | Configure your checkboxes block is displayed |
| Edit the consent message for the Account creation form > Save | Saved with success ! alert is displayed |
| Click View my store > Sign In > No account? Create one here > Fill the fields with following data > Check the psgdpr checkbox : Lorem ipsum dolor sit amet, consectetur adipiscing elit & Customer data privacy > Save | You are logged in to your customer account |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for Customer account area > Save | Saved with success ! alert is displayed |
| Go to your customer account > Click on the block Information > Edit some info > Check the checkboxes Quis viverra nibh cras pulvinar. & Customer data privacy > Save | Information successfully updated. alert is displayed |
| Go back to BO > psgdpr > Tab 3 > Disable the checkboxes for Account creation form and Customer account area > Save | Saved with success ! alert is displayed |
| Click View my store > Go to your account > Information > Scroll to the checkboxes section | No checkbox "Quis viverra nibh cras pulvinar." |
| Sign out > Click on No account? Create one here > Scroll down to the checkboxes section | No checkbox "Lorem ipsum dolor sit amet, consectetur adipiscing elit" |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for the module Newsletter subscription > Save | Saved with success ! alert is displayed |
| View my store > Scroll down to the block Get our latest news and special sales | No consent message is displayed |
| Go back to the BO page > psgdpr > Click on Manage hook > Hook a module > Save | The module transplanted successfully to the hook. |
| Go back to FO > Refresh | See the checkbox" Mi proin sed libero enim sed faucibus." displayed |
| Add an email > Check the box > Subscribe | You have successfully subscribed to this newsletter. |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Disable Newsletter subscription > Save | Saved with success ! alert is displayed |
| View my store > Scroll down to Get our latest news and special sales | No consent message is displayed |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for the module Product comments > Save | Saved with success ! alert is displayed |
| View my store > Log into your customer account > Go to a product page > Click "Write your review" > Check the checkbox > Send | Your comment has been submitted and will be available once approved by a moderator. |
| Go back to BO > psgdpr > Tab 3 > Disable the checkboxes for Athe module Product comments > Save | Saved with success ! alert is displayed |
| Go back to your FO > Product page > Refresh | No consent message is displayed |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for the module Contact form > Save | Saved with success ! alert is displayed |
| Click View my store > Contact us > Add message > Check checkbox | Checkbox message is the following Eu augue ut lectus arcu bibendum at. |
| Click Send | Alert message is displayed : Your message has been successfully sent to our team. |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for the module Mail alerts > Save | Saved with success ! alert is displayed |
| Go to BO > Products > Edit Mug Today is a good day > Put stock to 0 > Save and publish | Successful update message is displayed |
| Preview the product | See the block for mail alert displayed with message "Netus et malesuada fames ac turpis egestas sed tempus." |
| Check the checkbox and Click Notify me later | Alert Request notification registered is displayed |
| Go back to your BO > psgdpr > Tab 3 : Consent checkbox customization > Edit the consent message for the module Mail alerts for FRENCH language > Save | Consent request message : FRENCH MESSAGE |
| Open back the page product for Mug Today is a good day > Sign out of your account jane@doe.com > Change language to Français | See the block for Mail alert is "FRENCH MESSAGE" |
