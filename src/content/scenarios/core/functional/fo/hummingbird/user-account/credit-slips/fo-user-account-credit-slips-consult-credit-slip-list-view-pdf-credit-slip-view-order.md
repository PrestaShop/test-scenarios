---
title: "FO - User account - Credit Slips - Consult credit slip list & View PDF Credit slip & View order"
weight: 1
---

# FO - User account - Credit Slips - Consult credit slip list & View PDF Credit slip & View order
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8336

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Sign with default customer > Click on John doe on the top right corner > Credit slips | The Credit slip page is well displayed<br><br>The information alert "You have not received any credit slips." is displayed |
| Go to BO > Orders > Orders page > View the last order created from the pre-condition step | The Order details page is well displayed |
| Change the order status to "Payment accepted" > Update status | A "successful update" message is displayed<br>The order status is updated successfully |
| Click on "Partial refund" > set the quantity to 1 > click on the "Partial refund" button | The alert "A partial refund was successfully created." is well displayed<br>The credit slip is well created |
| Go back to FO > Refresh the credit slip page | See the new credit slip is displayed |
| Click on the pdf icon of the credit slip created | The PDF file is downloaded with all the right info |
| Go back to FO > Credit slips page > Click on the Order reference | The Order details page is well displayed |
| Click on "Home" link on the breadcrumb | Your Home page is well displayed |
