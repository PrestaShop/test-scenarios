---
title: "BO - Advanced parameters - Team - Roles - pagination and Bulk Actions"
weight: 3
---

# BO - Advanced parameters - Team - Roles - pagination and Bulk Actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > Team > Profiles | Profile page is displayed |
| Create 10 roles | Successful creation alert is displayed<br>Number of profiles = Total of profiles + 10 |
| Change the items number to 10 per page | The number of pages should be displayed <br><br>(page 1 / 2) |
| Click on next | The page number should be displayed <br><br>(page 2 / 2) |
| Click on previous | Page number should be displayed<br><br>(page 1 / 2) |
| Change the items number to 50 per page | Page number should be displayed <br><br>(page 1 / 1) |
| Select the new profile created > Click Bulk actions > Delete selected > Delete | Successful deletion alert is displayed<br><br>Total of profiles after reset = Total of profiles |
| Select all Profiles > Bulk Action > Delete selected > Delete | "You cannot delete your own profile" alert is displayed |
