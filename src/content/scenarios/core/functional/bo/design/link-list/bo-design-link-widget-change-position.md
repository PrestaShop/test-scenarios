---
title: "BO - Design - Link Widget - Change position"
weight: 1
---

# BO - Design - Link Widget - Change position
## Details
* **Component** : Core
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-966

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Design > Link List | * The 'Link List' page is displayed<br> * displayFooter Footer (2) table is displayed with two lines on it |
| Hover left just beside the ID column. | A new icon appears next to ID column<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1392/drag.png|width=543,height=217! |
| Click on the icon next to the first ID > drag and drop it to the second column | * The order changes : the two lines switches positions<br> * In Position column : The moved item changes his value also all the under lines corresponding to their positions in the table<br> * This message is displayed : Successful update<br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/5946460803108712136/switch-link.png|width=570,height=274! |
