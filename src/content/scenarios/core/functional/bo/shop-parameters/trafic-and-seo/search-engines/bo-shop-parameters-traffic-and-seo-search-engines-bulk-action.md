---
title: "BO - Shop Parameters - Traffic and SEO - Search Engines - Bulk action"
weight: 3
---

# BO - Shop Parameters - Traffic and SEO - Search Engines - Bulk action
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1119
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/02_searchEngines/03_bulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO - Shop Parameters - Traffic & SEO - Search Engines | * Search Engines Page is displayed<br> * *Bulk actions* button is disabled |
| Check one Checkbox | The *Bulk actions* button is enabled |
| Click on *Bulk actions* button | *Delete selected* sub-button appears |
| Click on *Delete selected* button | A modal appears :<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/7468014264247928276/bulk1.png|width=536,height=155! |
| *Case 1 :*<br><br>Click on *Cancel* button | * The Modal disappears<br> * The Search Engines page is well displayed<br> * The selected item is still checked (aol) |
| *Case 2 :*<br><br>Click on *Delete* button | * This message is displayed :  "The selection has been successfully deleted."<br> * The Search Engines page is displayed<br> * The item selected (aol) is not in the engines list<br> * Bulk button is disabled |
| Click on the checkbox to select all search Engines<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/6975361743330636649/bulk2.png|width=512,height=49! | All search engines in the page are checked<br><br>The *Bulk actions* button is enabled |
| Click on *Bulk actions* button > Click on *Delete selected* | A modal appears :<br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/7468014264247928276/bulk1.png|width=536,height=155! |
| *Case 1 :*<br><br>Click on *Cancel* button | * The Modal disappears<br> * The Search Engines page is well displayed<br> * The selected item still checked  (all the page items) |
| *Case 2 :*<br><br>Click on *Delete* button | * This message is displayed :  "The selection has been successfully deleted."<br> * The Search Engines page is empty<br> * *Bulk actions* button disappears |