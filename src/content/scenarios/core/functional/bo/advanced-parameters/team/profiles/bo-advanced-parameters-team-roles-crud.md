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
| go to 'Advanced parameters > Team > Profiles' page | title contains 'Profiles' |
| reset filter | Total of profiles > 0 |
| go to add new profile | title contains 'Add new' |
| create profile<br>Criteria :<br>name: faker.name.jobType() from faker | Successful message is displayed<br>Number of profiles = Total of profiles + 1 |
| Filter list by new name | Number of profiles < Total of profiles + 1<br>all rows column 'name' contain the new name |
| Go to edit profile page | title contains 'Edit' |
| update profile<br>Criteria :<br>name: faker.name.jobType() from faker | Successful update message is displayed |
| Filter list by new name | Number of profiles < Total of profiles + 1<br>all rows column 'name' contain the updated name |
| Delete profile | Successful message is displayed<br>Number of profiles = Total of profiles |
| reset filter | Total of profiles > 0 |
