---
title: "BO - Shop Parameters - General - Display brands / best sellers"
weight: 5
---

# BO - Shop Parameters - General - Display brands / best sellers
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1042

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Shop Parameters> General | Preferences page is displayed on General tab |
| disable Display brands, save | Successful update |
| Go to FO> All products | Home page is displayed |
| Click on Brand | The page you are looking for was not found. |
| Go back to BO>Shop Parameters> General,<br><br>Enable Display brands,<br><br>save. | Successful update |
| Go back to FO> All products | Home page is displayed |
| Click on Brand | The Studio Design brand page is well displayed. |
| Go to> Footer Container> Products> Best sellers | Best sellers page is displayed |
| Go back to BO>Shop Parameters> General,<br><br>Disable Display best sellers,<br><br>save. | Successful update |
| Go to> Footer Container | Best sellers is displayed not found. |
