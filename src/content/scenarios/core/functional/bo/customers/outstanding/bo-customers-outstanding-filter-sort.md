---
title: "BO - Customers - Outstanding - Filter & Sort"
weight: 5
---

# BO - Customers - Outstanding - Filter & Sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3734
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/03_outstanding/05_sortFilterOutstanding.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders list page | The Orders list page is well displayed |
| Change the status of all orders created from the pre-condition step to payment accepted | The alert "Successful update." is well displayed |
| Go to BO > Customers > Oustanding page | The Outstanding page is well displayed |
| Reset all filters and get the number of outstanding | The outstanding number > 0 |
| Filter outstanding by ID | Number of outstanding < Total of outstandings<br>The outstanding id result is equal to the searched ID |
| Reset all filters | Number of outstanding = Total of outstanding |
| Filter outstanding by Customer | Number of outstanding < Total of outstanding<br>All outstanding customer contains the searched customer |
| Reset all filters | Number of outstanding = Total of outstanding |
| Filter outstanding by Company | Number of outstanding < Total of outstanding<br>All outstanding Company contains the searched Company |
| Reset all filters | Number of outstanding = Total of outstanding |
| Filter outstanding by Risk | Number of outstanding < Total of outstanding<br>All outstanding Risk contains the searched Risk |
| Reset all filters | Number of outstanding = Total of outstanding |
| Filter outstanding by Outstanding allowance | Number of outstanding < Total of outstanding<br>All outstanding Outstanding allowance contains the searched Outstanding allowance |
| Reset all filters | Number of outstanding = Total of outstanding |
| Filter outstanding by Date From To | Number of outstanding < Total of outstanding<br>All outstanding date contains the searched date |
| Reset all filters | Number of outstanding = Total of outstanding |
| Sort by ID ASC | The outstanding are sorted by ID ASC |
| Sort by ID DESC | The outstanding are sorted by ID DESC |
| Sort by Date ASC | The outstanding are sorted by Date ASC |
| Sort by Date DESC | The outstanding are sorted by Date DESC |
| Sort by Customer ASC | The outstanding are sorted by Customer ASC |
| Sort by Customer DESC | The outstanding are sorted by Customer DESC |
| Sort by Customer DESC | The outstanding are sorted by Customer DESC |
| Sort by Company ASC | The outstanding are sorted by Company ASC |
| Sort by Company DESC | The outstanding are sorted by Company DESC |
| Sort by Outstanding allowance ASC | The outstanding are sorted by Outstanding allowance ASC |
| Sort by Outstanding allowance DESC | The outstanding are sorted by Outstanding allowance DESC |
| Go to BO >  Customers > Customers page & delete all customers created in the pre-condition | The alert Delete successful is well displayed |
| Go to BO > Shop Parameters > Customer Settings and Disable B2B | The alert Update successful is well displayed |
