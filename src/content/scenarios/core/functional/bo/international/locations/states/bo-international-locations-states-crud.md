---
title: "BO - International - Locations - States - CRUD"
weight: 2
---

# BO - International - Locations - States - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1019
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/03_states/02_CRUDState.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> States | the States  page is displayed |
| Click on Add new state | Add new state Page is displayed correctly |
| Fill all information > Click on save | New state is saved correctly.<br><br>Message is displayed "Successful creation"<br><br>Redirection to state  page |
| Filter states by new state's added Name and search | States > filter by Name dispalyed 1 result with the new state added |
| Click on *Edit* button | Edit:test page is dispalyed |
| Edit the state information and click on *Save* button | _*Successful update*_ message is diplayed |
| Click on dropdown-menu and click on *Delete* button | Delete selected item?<br><br>Name: test_edited |
| Click on *Yes* | _*Successful deletion*_ message is dispalyed |