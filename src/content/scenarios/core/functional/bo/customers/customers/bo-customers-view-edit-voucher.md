---
title: "BO - Customers - View/edit voucher"
weight: 9
---

# BO - Customers - View/edit voucher
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-856

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount and click on Save | An alert "Successful creation." is displayed |
| Go to BO > Customers > Customers | Manage your Customers page is well displayed |
| Filter By Email. Criteria : pub@prestashop.com | Customers list is filtered. Customers listed have pub@prestashop.com in their Email |
| View Customer | The Customer information page is displayed correctly<br><br>Page Title contains Information about customer |
| Check that the customer has the created voucher |  |
| Click on the pencil edit of the voucher | The cart rules page is displayed |
| Update the description > save | Message is displayed : Update successful.<br>The page Information about customer J. DOE is displayed |
| Click to Vouchers Actions "..." => Delete | Modale displayed : <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click on Delete | Voucher is deleted successfully, with message Successful deletion |
| Click on customer > Reset filter | List of customers is updated |
