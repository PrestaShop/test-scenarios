---
title: "BO - Catalog - Stocks - Display products below low stocks level first"
weight: 6
---

# BO - Catalog - Stocks - Display products below low stocks level first
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-843

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Fixing Low stock level in product page*<br>BO > Catalog > Products > Click on Edit > Stocks tab > Enable button "Receive a low stock alert by email" > set value in the field > Click Save and publish button | This message is displayed "Successful update" |
| BO > Catalog > Stock > check the "Display products below low stock level first" checkbox | The products below stock level are displayed in top list<br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/7808350375999045298/low%20level.png|width=1137,height=264! |
| Uncheck the "Display products below low stock level first" checkbox | The default order of products is displayed (sort based on ID)<br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/5421560101801734899/low%202.png|width=1449,height=523! |
