---
title: "BO - Shop Parameters - Customer Settings - Ask for birth date"
weight: 5
---

# BO - Shop Parameters - Customer Settings - Ask for birth date
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1087

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings | See that Ask for birth date option is enabled by default |
| Click View my store > Add any product to your cart > Proceed to checkout | See in Step 1 - Personal Information : Birthdate field is displayed as optional. |
| Add a birthdate > Continue checkout | Message YOUR ORDER IS CONFIRMED |
| Go to BO > Orders > Last order made > Click on view full details in customer card | See the Age element is like : <br>Age<br>XX years old (birth date: 01/01/2000) |
| Go back to BO > Shop Parameters > Customer Settings > Disabled Ask for birth date option > Save | Message Update successful is displayed |
| Click View my store > Add any product to your cart > Proceed to checkout | See checkout process that the Birthdate field is not displayed anymore in Step 1 |
| Continue checkout | Message YOUR ORDER IS CONFIRMED |
| Go to BO > Orders > Last order made > Click on view full details in customer card | See Age element is Unknown |
