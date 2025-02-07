---
title: "BO - Catalog - Categories - Edit home category"
weight: 3
---

# BO - Catalog - Categories - Edit home category
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-793

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > "Categories" page | Categories listing is displayed correctly |
| Go to edit home category page | Form Edit home Category is displayed correctly<br>Page Title contains "Editing category Home" |
| Edit category with other fake values and Save Form | Category is saved correctly<br>Message is displayed : "Successful update." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the Home category | The Home category exist in categories |
| Click on "Home" category | The Home category page is displayed<br><br>Check the description and the existence of the Category cover image |
| Reset to default values (For automated tests) | The values are well resetted |
