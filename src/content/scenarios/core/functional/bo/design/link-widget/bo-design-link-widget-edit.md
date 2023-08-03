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
| go to BO > Design > Link List | The page 'Link List' is well displayed<br><br>The 'displayFooter Footer' table contains two items by default |
| Go to displayFooter Footer (2) table > Click on Edit icon for the first line (Products ) | 'Edit the link block'  section is displayed |
| Set up the block <br><br>and clic kon Save | In BO :<br> * This message is displayed : Successful update.<br> * In page Link List there is two tables : displayFooter Footer  and  displayFooterBefore displayFooterBefore<br><br>In FO : All added data is displayed in a section just before footer<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/4773896337896299335/Link.png|width=840,height=296! |
| Go to  Link list page > displayFooterBefore displayFooterBefore > Click on Edit icon <br><br>In Custom content field > click on Add button > Click Save button | In BO :<br> * Message displayed : Successful update.<br><br>In FO:<br> * In PRODUCTS SECTION (just before footer) : The HOME IN FOOTER  and  HOME IN FOOTER 2 are well displayed |
| Go to  Link list page > displayFooterBefore displayFooterBefore > Click on Edit icon <br><br>In Custom content field > click on Delete button for the two section> Click Save button | In BO :<br> * The two fields  : Title : Home in Footer    &    URL  : url of your FO    are deleted<br> * The Delete button disappears.<br><br>In FO:<br> * In PRODUCTS SECTION (just before footer) : The HOME IN FOOTER link and HOME IN FOOTER 2 are deleted |
| Go to  Link list page > displayFooterBefore displayFooterBefore > Click on Edit icon  > Click Cancel button (in bottom left corner of Link List page) | Edit page is closed<br><br>Link List page is displayed |
