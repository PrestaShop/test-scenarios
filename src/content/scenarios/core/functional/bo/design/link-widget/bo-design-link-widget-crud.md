---
title: "BO - Design - Link Widget - CRUD"
weight: 2
---

# BO - Design - Link Widget - CRUD
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-967

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Link List | The page 'Link List' is well displayed<br><br>The 'displayFooter Footer' table contains two items by default |
| Click on "New block" > Set up the block > Click on Save | Successful message is displayed |
| Go to FO > Scroll down to footer | Footer contain block title 'Footer test block'<br>Links in footer contains all links created |
| Go to BO > Link List > displayFooter Footer (2) table > Click on Edit icon for the first line (Products) | 'Edit the link block' section is displayed |
| Set up the block with the following data > Save | In BO :<br> * This message is displayed : Successful update.<br> * In page Link List there is two tables : displayFooter Footer  and  displayFooterBefore displayFooterBefore |
| Go back to BO and delete the link Widget created | Successful message is displayed |
| Go to FO > Scroll down to footer | All added data is displayed in a section just before footer |
| Go to BO > Link list page > Edit the block Products section in displayFooterBefore > In Custom content > Click on Add with following data > Click Save | In BO, Message displayed : Successful update. |
| Go to Link list page > Edit the block Products section in displayFooterBefore > In Custom content field > Click on Delete button for the two custom content > Click Save button | In BO :<br>The two fields are deleted<br>The Delete button disappears<br>Message displayed : Successful update |
| Go to FO > Scroll down to footer | All deleted data is deleted in a section just before footer |
