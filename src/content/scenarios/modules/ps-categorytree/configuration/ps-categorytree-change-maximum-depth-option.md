---
title: "ps_categorytree - Change Maximum depth option"
weight: 2
---

# ps_categorytree - Change Maximum depth option
## Details
* **Component** : ps_categorytree
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-603

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Change Maximum depth option to 1 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link all product"." | All product page should be displayed and sub-category shouldn't be displayed |
| Go to BO change Maximum depth option to 0 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link all product"." | All product page should be displayed and all category and sub-category should be displayed |
| Go to BO change Maximum depth option to 2 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link all product"." | All product page should be displayed and category and the first sub-category should be displayed |
