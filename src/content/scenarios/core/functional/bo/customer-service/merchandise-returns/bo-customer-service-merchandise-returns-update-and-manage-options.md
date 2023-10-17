---
title: "BO - Customer Service - Merchandise returns - Update and manage options"
weight: 3
---

# BO - Customer Service - Merchandise returns - Update and manage options
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5412

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| Enable the returns of product and click on Save | The toggle is well enabled and a message "The settings have been successfully updated." is displayed |
| Click on the Time limit of validity and change the number of days as desired and click on Save | The new number is well-updated and a message "The settings have been successfully updated." is displayed |
| Click on the Returns prefix and change the prefix used for the downloadable pdf file | The new value is well-updated and a message "The settings have been successfully updated." is well displayed |
| Go to orders> orders<br><br>Choose an Oreder and click on _view_  button | The order details page is displayed |
| Click on Order status and change it to delivered<br><br>click on update status | _Successful update_ message is well displayed.<br><br>_Returned products_ button is enabled |
| Click on _Returned products_ button | The product details are displayed |
| Check the quantity and click on _Returned products_ button | The Order details page is displayed<br><br>*_The product was successfully returned_* message is displayed |
