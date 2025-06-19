---
title: "BO - International - Locations - Countries - Bulk actions"
weight: 3
---

# BO - International - Locations - Countries - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1015
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/03_bulkActionsCountries.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/countries

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Tab Countries | The Countries page is displayed correctly |
| On the bottom of the table click on the bulk action button. | The list of options will be  displayed and contain: <br> - Select all ( checked by default) <br> - Unselect all <br> - Enable selection <br> - Disable selection <br> - Delete selected<br> - Assign to a new zone |
| Click on the option Select all | All the existing countries in the page are selected |
| Click on Bulk action button > choose the option unselect all | All the existing countries in the page are unselected |
| Click on the button bulk action > choose the option Enable selection | An error message will be displayed contains : <br>_You must select at least one item to perform a bulk action._ |
| Click on the button bulk action > choose the option disable selection | An error message will be displayed contains : <br>_You must select at least one item to perform a bulk action._ |
| Create 2 new countries | 2 countries are created successfully |
| Select the 2 last displayed countries ( the 2 new created countries | The 2 choosen countries are selected |
| Click on the button bulk action > choose the option Enable selection | A success message contains : _The status has been successfully updated._ is displayed<br>The status of the selected tax rule are enabled |
| Click on the button bulk action > choose the option disable selection | A success message contains : _The status has been successfully updated._ is displayed<br>The status of the selected countries are disabled |
| Select the 2 last displayed countries ( the created ones ) > click on the button bulk actions > choose the option delete selected | A pop-up  is displayed to confirm the deletion action > click on OK button > a green message is displayed  contains<br>_The selection has been successfully deleted._<br> <br> - the selected countries  are deleted |
