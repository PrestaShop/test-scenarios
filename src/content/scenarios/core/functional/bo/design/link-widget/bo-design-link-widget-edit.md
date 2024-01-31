---
title: "BO - Design - Link Widget - Edit"
weight: 3
---

# BO - Design - Link Widget - Edit
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-967

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Link List | The page 'Link List' is well displayed<br><br>The 'displayFooter Footer' table contains two items by default |
| Go to displayFooter Footer (2) table > Click on Edit icon for the first line (Products) | 'Edit the link block' section is displayed |
| Set up the block with the following data > Save | In BO :<br> * This message is displayed : Successful update.<br> * In page Link List there is two tables : displayFooter Footer  and  displayFooterBefore displayFooterBefore |
| Go to FO > Scroll down to footer | All added data is displayed in a section just before footer |
| Go to BO > Link list page > Edit the block Products section in displayFooterBefore > In Custom content > Click on Add with following data > Click Save | In BO, Message displayed : Successful update. |
| Go to Link list page > Edit the block Products section in displayFooterBefore > In Custom content field > Click on Delete button for the two custom content > Click Save button | In BO :<br>The two fields are deleted<br>The Delete button disappears<br>Message displayed : Successful update |
| Go to FO > Scroll down to footer | All deleted data is deleted in a section just before footer |
