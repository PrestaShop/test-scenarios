---
title: "BO - Shop Parameters - Customer Settings - Groups - Default groups options"
weight: 3
---

# BO - Shop Parameters - Customer Settings - Groups - Default groups options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1091
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/02_groups/03_defaultGroupsOptions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO >  Shop parameters > Customer Settings  >  Groups | Customers - Groups page is well displayed |
| Check that the default value selected for the visitor group is *Visitor* | The default value selected for the visitor group is *Visitor* |
| Click on the dropdown list *Visitors group* | The drop-down list Vistors groups contains :<br> * Visitor<br> * Guest<br> * Customer |
| Check that the default value selected for the Guests group is *Guest* | The default value selected for the gustes group is *Guest* |
| Click on the dropdown list *Guests group* | The drop-down list Guests groups contains :<br> * Visitor<br> * Guest<br> * Customer |
| Check that the default value selected for the *Customers group* is *Customer* | The default value selected for the Customers group is *Customer* |
| Click on the drop-down list *Customers group* | The drop-down list Customers groups contains :<br> * Visitor<br> * Guest<br> * Customer |
| Select the option Visitor | The option Visitior is well selected |
| Click on save button | A success message contains ' The settings have been successfully updated.'  is well displayed |
