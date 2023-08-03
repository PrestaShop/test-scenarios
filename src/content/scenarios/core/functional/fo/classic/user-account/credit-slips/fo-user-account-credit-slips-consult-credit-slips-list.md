---
title: "FO - User account - Credit Slips - Consult credit slips list"
weight: 1
---

# FO - User account - Credit Slips - Consult credit slips list
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1213

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1 : You have no credit slip*<br>Go to FO > Login to customer account > Go to Credit slips tab | Credit slips page is displayed with message alert-info "You have not received any credit slips." |
| Create an order (pre-condition) |  |
| Connect to BO (pre-condition) |  |
| Create a credit slip (pre-condition) |  |
| *Case 2 : You have credit slips*<br>Go to FO > Click on customer account page > Go to Credit slips tab | The list of Credit slips received is displayed successfully |
