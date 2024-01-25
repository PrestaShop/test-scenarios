---
title: "BO - International - Locations - Zones - CRUD"
weight: 2
---

# BO - International - Locations - Zones - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1010
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/01_zones/02_CRUDZone.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/add-new-or-edit-zone

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> Zones | the zones page is displayed |
| Click on Add new zone | Add new Zone Page is displayed correctly |
| Fill all information > Click on save | New zone is saved correctly.<br><br>Message is displayed "Successful creation"<br><br>Redirection to Zone page |
| Filter by Zone = " test" | Filter is succeeded<br><br>Zone test is displayed |
| Click on Zone test | Edit Zone Page is displayed correctly.<br><br>Page title contains  test |
| Edit the name of the Zone by ZoneNAME > Click on save | New zone is saved correctly.<br><br>Message is displayed "Update successful"<br><br>Redirection to Zone page |
| Click to "..." > Delete | A modale should appear:<br><br> <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click to Delete | Message is displayed : "Successful deletion"<br><br>No records found |
| Reset filter | All zones are displayed |
