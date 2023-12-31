---
title: "BO - Shop Parameters - SEO & URLs - Enable, disable accented URL"
weight: 2
---

# BO - Shop Parameters - SEO & URLs - Enable, disable accented URL
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1108
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/02_setUpUrls/04_enableDisableAccentedURL.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the Product name field with specified data > click on Save button | Message displayed : "Successful update" |
| BO > Shop Parameters > Traffic & SEO | SEO & URLs page is displayed<br>SEO & URLs tab is selected by default |
| Scroll down to *Set up URLs* section  > switch  *Accented URL button* to Yes > Click *Save* button | Message "Update successful" is displayed |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Search product by name > click Search button | The displayed product contains "TESTURLÉ" as name<br><br>Reset button is enabled |
| Click Edit icon button | Product page is displayed<br>Product name is : "TESTURLÉ" |
| Click on SEO tab | SEO page is well dislayed<br>Friendly URL field contains : "testurle" |
| Click on *Reset* *URL* button | Friendly URL contains : "testurlé" |
| Click on *Save and publish* button | Message displayed "Successful update" |
| Go to FO > search for "testurlé"> click on product | The URL must contain "testurlé" |
| Back to BO >Catalog > Products | The filtered product still displayed<br>TESTURLÉ is displayed |
| Click on the three dots > Delete | A modal is displayed with two options : Cancel & Delete |
| Click on Delete button | Message displayed "Successful deletion" |
| Click on Reset button | All products are displayed |