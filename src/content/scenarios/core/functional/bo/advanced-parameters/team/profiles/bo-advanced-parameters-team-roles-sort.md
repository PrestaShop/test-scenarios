---
title: "BO - Advanced parameters - Team - Roles - Sort"
weight: 4
---

# BO - Advanced parameters - Team - Roles - Sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1159
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/roles/04_sortRoles.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/team-employees/profiles

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Roles page | title contains 'Roles'<br><br>profiles list is well displayed |
| Reset all filters | All filters are reset , the Roles are  displayed |
| Sort  by ID asc | Roles  list are sorted by ID (1-> 2 ->3 ...) |
| Sort  by ID desc | Roles  list are sorted by ID (3-> 2 ->1...) |
| Sort  by name asc | Roles  list are sorted by name (a-> b ->c ...) |
| Sort  by name desc | Roles  list are sorted by name (c-> b ->a...) |
