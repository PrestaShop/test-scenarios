---
title: "BO - Discount - Select a free gift product "
weight: 3
---

# BO - Discount - Select a free gift product 
## Details
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-11264

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount | Create cart discount displayed |
| Fill form and Do not include the name of the discount. | Error message: "The field names is required at least in your default language." |
| Fill form and Do not include free gift | We have 2 messages: "This value should not be blank."<br>and "No product selected" |
| Fill form and Do not include generate discount code | An error message is displayed:<br>"This value should not be blank." |
| Fill form and save | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br>Discount list = 1 |
| Click on view my store, add the product, and enter the discount code. | We have this result:<br><br>|2 items|€21.60|<br>|Discount(s)|-€10.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€10.80|<br>|test|-€10.80| |
| Remove the product from the cart > add another product > click to proceed to checkout > add the discount code | We have this: <br><br><br>|2 items| €25.08|<br>|Discount(s)|-€10.80|<br>| Shipping | Free |<br>|Total (tax incl.)|€14.28|<br>| test |-€10.80| |
| Go back to BO>Catalog>product>Edit>Disabled product>Save | We have a message:The status has been successfully updated. |
| Catalog>Discount>Add discount>Free Gift>Create discount | The discount form is displayed. |
| fill form and save | We can select the product and the discount is created with a sucessfull message: Successful creation |
| Go back to FO>Remove all items from the cart>Add an item to the cart>Click on proceed to checkout>Enter the discount code | We have this: <br><br><br>| 2 items |€49.08|<br>|Discount(s)|-€14.28 |<br>|Shipping| Free|<br>|Total (tax incl.)|€34.80|<br>|free gift|-€14.28| |
| Go back to BO>Catalog>product>Edit product>Set product stock to 0>Save | We have a message:Successful update |
| Catalog>Discount>Edit discount "Free gift" | The discount form is displayed. |
| Fill form and save | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br>Discount list = 2 |
| Go back to FO>Remove all items from the cart>Add an item to the cart>Click on proceed to checkout>Enter the discount code | We have this: <br><br><br>| 2 items |€49.08|<br>|Discount(s)|-€14.28 |<br>|Shipping| Free|<br>|Total (tax incl.)|€34.80|<br>|free gift|-€14.28| |
