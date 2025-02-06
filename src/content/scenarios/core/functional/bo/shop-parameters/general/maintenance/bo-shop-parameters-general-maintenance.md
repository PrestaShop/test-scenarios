---
title: "BO - Shop Parameters - General - Maintenance"
weight: 1
---

# BO - Shop Parameters - General - Maintenance
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1046

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General > Tab Maintenance | Maintenance page is displayed |
| Enable store = NO > Save | Message "Successful update." appears |
| Click "View my shop" | FO is displayed |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store for logged-in employees = NO > Save | Message "Successful update." appears |
| CLick "View my shop" | In FO, maintenance test is displayed:<br>We'll be back soon.<br>We are currently updating our shop and will be back really soon. Thanks for your patience. |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store for logged-in employees = YES > Save | Message "Successful update." appears |
| Click "View my shop" | FO is displayed |
| Open "View my shop" in incognito mode | In FO, maintenance test is displayed:<br>We'll be back soon.<br>We are currently updating our shop and will be back really soon. Thanks for your patience. |
| Go to BO > Advanced Parameters > General > Maintenance tab > Click on button Add my IP > Save | Message "Successful update." appears |
| Click "View my shop" | FO is displayed |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store for logged-in employees = NO > Maintenance IP = Erase it > Edit Custom maintenance text with "Lorem Ipsum" > Save | Message "Successful update." appears |
| Click "View my shop" | In FO, you shouldn't be able to see your site<br><br>Maintenance test displayed:<br>We'll be back soon.<br>lorem ipsum |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store = YES > Enable store for logged-in employees = YES > Edit Maintenance text : We are currently updating our shop and will be back really soon. Thanks for your patience. > Save | Message "Successful update." appears |
| Click "View my shop" | Home page is displayed successfully |
