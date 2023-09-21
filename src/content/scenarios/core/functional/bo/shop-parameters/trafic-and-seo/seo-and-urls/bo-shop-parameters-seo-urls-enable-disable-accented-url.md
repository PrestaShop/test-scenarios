---
title: "BO - Shop Parameters - SEO & URLs - Enable, disable accented URL"
weight: 4
---

# BO - Shop Parameters - SEO & URLs - Enable, disable accented URL
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1108

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
| Go down to *Set up URLs* section  > switch  *Accented URL button* to No > Click *Save* button | Message "Update successful" is displayed |
