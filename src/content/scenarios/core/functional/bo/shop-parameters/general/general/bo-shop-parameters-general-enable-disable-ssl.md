---
title: "BO - Shop Parameters - General - Enable / disable SSL"
weight: 3
---

# BO - Shop Parameters - General - Enable / disable SSL
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1040

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General | Preferences page is well displayed<br>Two tabs are available : General and Maintenance<br><br>General tab is selected by default<br><br>Enable SSL on all pages toggle switch button is unlocked |
| Click on [*Please click here to check if your store supports HTTPS*. link|https://anis-shop.demo-hawks.prestashop.net/ps-admin/index.php/configure/shop/preferences/preferences?_token=xOempIq0JnM84CoWWAL1AeOIeD0KUwgr9z5lZWYOB8k] | Preferences page is refreshed<br><br>No error displayed |
| Switch *Enable SSL on all pages* toggle switch button to Yes > Click *Save* button | Message displayed : "Successful update" |
| Go to FO > check the address navbar | The home page is well displayed<br><br>In the navbar next to the URL address a locker symbol is displayed |
