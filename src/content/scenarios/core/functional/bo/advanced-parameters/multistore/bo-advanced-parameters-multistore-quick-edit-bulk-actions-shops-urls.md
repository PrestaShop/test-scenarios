---
title: "BO - Advanced Parameters - Multistore - Quick edit & bulk actions shops URLs"
weight: 6
---

# BO - Advanced Parameters - Multistore - Quick edit & bulk actions shops URLs
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1187
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/06_quickEditAndBulkActionsShopUrls.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on " Add new store " | add new  page is displayed |
| Fill the informations  of the new shop >save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| Click on _Click here to set a URL for this shop_ button of new shop added | Add new page is displayed |
| Go to Store URL> Virtual URL<br><br>add an URL | Successful creation message is displayed<br><br>New shop added page is displayed. |
| Filter list by the created URL | The shop URL is displayed |
| Disable shop URL | Shop URL is disabled successfully |
| Enable shop URL | Shop URL is enabled |
| Enable 'isThe main URL' | Is the main URL is enabled |
| Click on default button in Multistore tree | Multistore page is displayed<br><br>URL displayed of shops in multistore tree |
| Click on a URL in multistore tree<br><br>!image-2023-09-21-17-01-29-138.png! | Multistore table is displayed |
| Click on Bulk actions button | A dropdow menu is displayed with :<br> * Select all<br> * Unselect all<br> * Enable selection<br> * Disable selection |
| Click on select all | All new shop are selected |
| Click on disable selection | The status has been successfully updated. message is displayed |
| Go back to multistore table> click on select all | All new shop are selected |
| Click on enable selection | The status has been successfully updated. message is displayed |
