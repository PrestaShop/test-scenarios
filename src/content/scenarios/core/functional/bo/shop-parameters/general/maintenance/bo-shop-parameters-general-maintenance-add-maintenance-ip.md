---
title: "BO - Shop Parameters - General - Maintenance - Add maintenance IP"
weight: 2
---

# BO - Shop Parameters - General - Maintenance - Add maintenance IP
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1047

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store = NO > Save | Message "Successful update." appears |
| Click "View my shop" | In FO, you shouldn't be able to see your site |
| Go to BO > Advanced Parameters > General > Maintenance tab > Click "Add my IP" > Save | Your IP is added to the list<br><br>Message "Successful update." appears |
| Click "View my shop" | Your FO should be displayed as usual |
| Go to BO > Advanced Parameters > General > Maintenance tab > Add your IP by copy-paste > Save | Message "Successful update." appears |
| Click "View my shop" | Your FO should be displayed as usual |
