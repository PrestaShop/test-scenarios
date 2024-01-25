---
title: "BO - Shop Parameters - Customer Settings - Groups - CRUD"
weight: 2
---

# BO - Shop Parameters - Customer Settings - Groups - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1090
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/02_groups/02_CRUDGroups.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings > Groups | The page should be displayed correctly |
| Click "Add new group" | The "Add new" page should be displayed correctly |
| Create a new Customer group > Save | Message "Successful creation" is displayed |
| Click on "Tester" | The detail page is displayed correctly |
| Click on the tab "Groups" | The groups page is displayed correctly<br><br>Visitor/Guest/Customer/Tester |
| Click on Edit for Tester groups | The Edit page will be displayed correctly |
| Modify this Customer group > Save | Message "Successful update" is displayed |
| Delete "To be deleted" group > Click Yes | Message "Successful deletion" is displayed<br><br>Group "To be deleted" is deleted<br><br>3 groups are displayed in the list : Visitor, Guest and Customer |
