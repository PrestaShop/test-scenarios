---
title: CRUD Profile
weight: 2
---

## Preconditions

PrestaShop installed\
Login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Profiles' page | title contains 'Profiles' |
| reset filter | Total of profiles > 0 |
| go to add new profile | title contains 'Add new' |
| create profile<br>Criteria :<br>name: faker.name.jobType() from faker | Successful message is displayed<br>Number of profiles = Total of profiles + 1 |
| Filter list by new name | Number of profiles < Total of profiles + 1<br>all rows column 'name' contain the new name |
| Go to edit profile page | title contains 'Edit' |
| update profile<br>Criteria :<br>name: faker.name.jobType() from faker | Successful message is displayed<br>Number of profiles = Total of profiles + 1 |
| Filter list by new name | Number of profiles < Total of profiles + 1<br>all rows column 'name' contain the updated name |
| Delete profile | Successful message is displayed<br>Number of profiles = Total of profiles |
| reset filter | Total of profiles > 0 |
