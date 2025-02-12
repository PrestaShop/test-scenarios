---
title: "BO - Catalog Price Rules - Filter, sort and pagination"
weight: 2
---

# BO - Catalog Price Rules - Filter, sort and pagination
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-835

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Catalog price rule | The Catalog price rule page is well displayed |
| Filter by ID | Number of catalog price rules < Total of catalog price rules and the list contains the searched ID |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by Name | Number of catalog price rules < Total of catalog price rules and the list contains the searched Name |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by currency | Number of catalog price rules < Total of catalog price rules and the list contains the searched currency |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by country | Number of catalog price rules < Total of catalog price rules and the list contains the searched country |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by Group | Number of catalog price rules < Total of catalog price rules and the list contains the searched Group |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by From quantity | Number of catalog price rules < Total of catalog price rules and the list contains the searched Quanity |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Search by Reduction type | Number of catalog price rules < Total of catalog price rules and the list contains the searched reduction type |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by Reduction | Number of catalog price rules < Total of catalog price rules and the list contains the searched Reduction |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by Beginning | Number of catalog price rules < Total of catalog price rules and the list contains the searched beginning |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Filter by End | Number of catalog price rules < Total of catalog price rules and the list contains the searched End |
| Reset Filter | Number of catalog price rules = Total of catalog price rules |
| Sort by ID desc | The list is sorted by ID desc |
| Sort by Name asc | The list is sorted by name asc |
| Sort by Name desc | The list is sorted by name desc |
| Sort by Currency asc | The list is sorted by Currency asc |
| Sort by Currency desc | The list is sorted by Currency desc |
| Sort by Country asc | The list is sorted by Country asc |
| Sort by Country desc | The list is sorted by Country desc |
| Sort by Group asc | The list is sorted by group asc |
| Sort by Group desc | The list is sorted by group desc |
| Sort by From quantity asc | The list is sorted by  quanity asc |
| Sort by From quantity desc | The list is sorted by quantity desc |
| Sort by Reduction type asc | The list is sorted by reduction type asc |
| Sort by Reduction type desc | The list is sorted by Reduction type desc |
| Sort by Reduction asc | The list is sorted by reduction asc |
| Sort by Reduction desc | The list is sorted by Reduction desc |
| Sort by Beginning asc | The list is sorted by Begining asc |
| Sort by Beginning desc | The list is sorted by Beginning desc |
| Sort by End asc | The list is sorted End asc |
| Sort by End desc | The list is sorted by End desc |
| Sort by ID asc | The list is sorted by ID asc |
| Change pagination for 20 per page | only 20 catalog price rules are displayed |
| Click to page 2 | Only 1 catalog price rules is displayed |
| Click to previous page | Only 20 catalog price rules is displayed |
| Change pagination for 20 per page | all 20 catalog price rules are displayed |
| Bulk action > Select all | All catalog price rules are selected |
| Bulk action > Unselect all | All catalog price rules are unselected |
| Select All catalog price rules created, delete with bulk action and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
