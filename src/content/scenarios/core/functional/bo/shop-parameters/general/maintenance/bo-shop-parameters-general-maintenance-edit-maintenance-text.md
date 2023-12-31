---
title: "BO - Shop Parameters - General - Maintenance - Edit maintenance text"
weight: 3
---

# BO - Shop Parameters - General - Maintenance - Edit maintenance text
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1048

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > General > Maintenance tab > Enable store = NO > Save | Message "Successful update." appears |
| Click "View my shop" | In FO, you shouldn't be able to see your site.<br><br>The maintenance text is the default one |
| In Custom maintenance text, edit your text > Save | Message "Successful update." appears |
| Click "View my shop" | In FO, see that your maintenance message is updated with your data |
