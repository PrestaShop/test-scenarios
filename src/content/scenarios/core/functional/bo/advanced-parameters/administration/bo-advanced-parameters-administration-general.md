---
title: "BO - Advanced Parameters - Administration - General"
weight: 1
---

# BO - Advanced Parameters - Administration - General
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1141

## Steps
| Step Description | Expected result |
| ----- | ----- |
| With a fresh install<br><br>BO > Advanced Parameters > Administration > General | The page should display correctly |
| Click on the switch button "Check the cookie's IP address | The switch button must be on No |
| Click to "Save" | "Update successful" notification |
| Click on the switch button "Check the cookie's IP address | The switch button must be on Yes |
| Click to "Save" | "Update successful" notification |
| Modify the Lifetime of front office cookies<br><br>And click to Save | "Update successful" notification<br><br>Lifetime of front office cookies = 500 hours |
| Modify the Lifetime of back office cookies<br><br>And click to Save | "Update successful" notification<br><br>Lifetime of back office cookies = 500 hours |
| Change Cookie SameSite to Strict<br><br>Click to Save | "Update successful"<br><br>Cookie SameSite = Strict |
| Change Cookie SameSite to None<br><br>Click to Save | "The SameSite=None is only available in secure mode"<br><br>Cookie SameSite = Strict |
| Change Cookie SameSite to Lax<br><br>Click to Save | "Update successful"<br><br>Cookie SameSite = Lax |
