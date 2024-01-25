---
title: "BO - International - Tax Rules - quick edit & Bulk actions"
weight: 4
---

# BO - International - Tax Rules - quick edit & Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1032
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/02_taxRules/03_quickEditAndBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/taxes-rules-listing

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Taxes > Tax Rules tab | Tax Rules page is displayed |
| Change Enabled to "No" for first tax rules | Icon changed to disabled<br>Success notification displayed : <br>The status has been successfully updated. |
| Change Enabled to"Yes" for first tax rules | Icon changed to enabled<br><br>Success notification displayed : <br>The status has been successfully updated. |
| click on the button bulk action | List of options will be  displyed and contains : <br> - Select all ( checked by default) <br> - Unselect all <br> - Enable selection <br> - Disable selection <br> - Delete selected |
| Click on the option Select all | All the existing Tax rules in the page are selected |
| Click on Bulk action button > choose the option unselect all | All the existing Tax rules in the page are unselected |
| Click on the button bulk action > choose the option Enable selection | An error message will be displayed contains : <br>_You must select at least one item to perform a bulk action._ |
| Click on the button bulk action > choose the option disable selection | An error message will be displayed contains : <br>_You must select at least one item to perform a bulk action._ |
| Create 2 new tax rules | 2 new tax rules are created successfully |
| Select the 2 last displayed tax rules ( the 2 new created tax rules) | The 2 choosen taxe rules are selected |
| Click on the button bulk action > choose the option Enable selection | A success message contains : _The status has been successfully updated._ is displayed<br>The status of the selected tax rule are enabled |
| Click on the button bulk action > choose the option disable selection | A success message contains : _The status has been successfully updated._ is displayed<br>The status of the selected tax rule are disabled |
| Select the 2 last displayed tax rules ( the created ones ) > click on the button bulk actions > choose the option delete selected | A pop-up  is displayed to confirm the deletion action > click on OK button > a green message is displayed  contains<br>_The selection has been successfully deleted._<br> <br> - the selected tax rules are deleted |
