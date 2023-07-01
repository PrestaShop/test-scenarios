---
title: "BO - Advanced parameters - Team - Profiles - Sort pagination"
weight: 4
---

# BO - Advanced parameters - Team - Profiles - Sort pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Profiles' page | title contains 'Profiles'<br><br>profiles list is well displayed |
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
| create 20 new profiles | profiles page is well displayed<br><br>the profiles table  = 20 |
| Reset all filters | All filters are reset , the profiles are  displayed |
| Sort  by ID asc | profiles  list are sorted by ID (1-> 2 ->3 ...) |
| Sort  by ID desc | profiles  list are sorted by ID (3-> 2 ->1...) |
| Sort  by name asc | profiles  list are sorted by name (a-> b ->c ...) |
| Sort  by name desc | profiles  list are sorted by name (c-> b ->a...) |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
