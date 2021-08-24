---
title: "CRUD Taxes In BO"
weight: 2
---

# CRUD Taxes In BO
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO | Login page is displayed |
| Sign in to Bo | Dashboard page is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Go to add new Tax Page | Add new Tax page is displayed |
| Fill all information and click on save<br>Criteria <br>Rate : Random integer between 1 and 100<br>name : 'TVA Test %rate%'<br>enabled : Yes | Tax is created<br>Successful message is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Filter By name of tax created | Tax created is displayed |
| Click on edit | Edit page is displayed |
| Change all information and save Tax<br>Criteria <br>Rate : Random integer between 1 and 100<br>name : 'TVA Test %rate%'<br>enabled : Yes | Tax is edited <br>Successful message is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Filter By name of tax edited | Tax created is displayed |
| delete Tax | Dialog listener is displayed |
| Accept dialog listener | Tax is deleted |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
