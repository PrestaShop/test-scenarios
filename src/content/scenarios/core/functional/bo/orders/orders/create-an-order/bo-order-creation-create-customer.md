---
title: "BO - Order creation - Create customer"
weight: 2
---

# BO - Order creation - Create customer
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-750

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on "Add new Order" | Create order page is displayed |
| Click on "Add new customer" | A modal for adding new customer is displayed |
| Clic to Guest account switch button | Password field = Disabled<br><br>Enabled field = Disabled<br><br>Group access field = Disabled<br><br>Default customer group field = Disabled |
| Clic to Guest account switch button | Password field = Enabled<br><br>Enabled field = Enabled<br><br>Group access field = Enabled<br><br>Default customer group field = Enabled |
| Clic to save | Tooltips diplayed "Veuillez renseigner ce champ" for First name field. |
| Set these fields:<br> * Social title<br> * First name<br><br>and click on "Save" | Tooltips diplayed "Veuillez renseigner ce champ" for Last name field. |
| Set this field:<br> * Last name<br><br>and click on "Save" | Tooltips diplayed "Veuillez renseigner ce champ" for Email field. |
| Set this field:<br> * Email<br><br>and click on "Save" | Tooltips diplayed "Veuillez renseigner ce champ" for Password field. |
| Set this field:<br> * Email<br> * Birthday<br><br>and click on "Save" | The customer search display the new customer as a result |
| Go to BO > Customers page and search by email | The Customer list page is displayed and the new customer is displayed |
| Click to Delete the customer and confirm the deletion | A green alert "Successful deletion." is displayed and the new customer is well removed |
| Click on "Reset" | The filter is cleared |
