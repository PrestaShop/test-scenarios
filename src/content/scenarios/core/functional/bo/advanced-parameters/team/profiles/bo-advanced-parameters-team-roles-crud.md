---
title: "BO - Advanced parameters - Team - Roles - CRUD"
weight: 2
---

# BO - Advanced parameters - Team - Roles - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1157
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/roles/02_CRUDRoles.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/team-employees/add-new-edit-profile

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Roles page | title contains 'Roles' |
| reset filter | Total of Roles > 0 |
| go to add new Role | title contains 'New Role' |
| create Role<br>Criteria :<br>name: faker.name.jobType() from faker | Successful message is displayed<br>Number of Roles = Total of Roles + 1 |
| Filter list by new name | Number of Roles < Total of Roles + 1<br>all rows column 'name' contain the new name |
| Go to edit Roles page | title contains 'Editing' |
| update Role<br>Criteria :<br>name: faker.name.jobType() from faker | Successful update message is displayed |
| Filter list by new name | Number of Roles < Total of Roles + 1<br>all rows column 'name' contain the updated name |
| Delete Role | Successful message is displayed<br>Number of Roles = Total of Roles |
| reset filter | Total of Roles > 0 |
