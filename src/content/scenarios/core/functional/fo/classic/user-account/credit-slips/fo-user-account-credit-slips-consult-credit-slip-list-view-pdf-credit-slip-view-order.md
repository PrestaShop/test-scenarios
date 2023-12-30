---
title: "FO - User account - Credit Slips - Consult credit slip list & View PDF Credit slip & View order"
weight: 3
---

# FO - User account - Credit Slips - Consult credit slip list & View PDF Credit slip & View order
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1215
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/01_creditSlips/01_consultCreditSlip.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Sign with default customer | The Home page is well displayed |
| Click on View my customer account | Your account page is displayed |
| Click on "Credit slips" | The  Credit slips page is well displayed and the information alert "_You have not received any credit slips."_  is displayed |
| Go to BO > Orders > Orders page & view the last order created from the pre-condition step | The Order view page is well displayed |
| Change the order status to "Payment accepted" or "Shipped" | * A "successful update" message is displayed<br> * The order status is updated successfully |
| Click on "Partial refund", set a quantity and click on the "Partial refund" button | * The alert "A partial refund was successfully created." is well displayed<br> * The credit slip is well created<br> * An email "New credit slip regarding your order" should be received which contains "A credit slip has been generated in your name for order with the reference" |
| Go to FO >  Click on customer account page > Go to Credit slips tab | * The list of Credit slips received is displayed successfully<br> * The Order reference is OK<br> * The Credit slip ID is ok<br> * The Date issued is ok |
| Choose a credit slip > Click on the pdf icon on the "View credit slip" column | The PDF file is downloaded |
| Click on the file in browser toolbar | The pdf file opens on a new tab and is displayed with all details |
| Go back to FO > Your account > Credit slip page | The credit slip page is well displayed |
| Click on the Order reference | The Order details is well displayed |
| Click on customer account page > Go to the Credit slips tab and click On "Back to your account" link | Your account page is well displayed |
| Click on customer account page > Go to the Credit slips tab and click On "Home" link | Your Home page is well displayed |