---
title: "BO - Shop Parameters - SEO & URLs - Bulk actions"
weight: 3
---

# BO - Shop Parameters - SEO & URLs - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1109
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/01_seoAndUrls/07_bulkDeleteSeoPages.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo/add-or-edit-new-seo-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop PArameters > Traffic & SEO - SEO & URLs | *  SEO & URLs Page is displayed<br> * *Bulk actions* button is disabled |
| Clic on Set up a new page<br><br> <br><br>Click to Save | Successful creation notification |
| Check one Checkbox | The *Bulk actions* button is enabled |
| Click on *Bulk actions* button | *Delete selected* sub-button appears |
| Click on *Delete selected* button | A modal appears :<br><br>  !image-2023-09-01-10-18-14-213.png! |
| *Case 1 :*<br><br>Click on *Cancel* button | * The Modal disappears<br> * The SEO & URLs page is well displayed<br> * The selected item is still checked |
| *Case 2 :*<br><br>Click on *Delete* button | * This message is displayed :  "The selection has been successfully deleted."<br> * The SEO & URLs page is displayed<br> * The item selected  is not in the SEO & URLs list<br> * Bulk button is disabled |
