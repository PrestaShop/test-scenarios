---
title: "BO - Customers - View/edit voucher"
weight: 9
---

# BO - Customers - View/edit voucher
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Priority = 2<br> # Conditions:<br> ##  Limit to a single customer = John DOE (pub@prestashop.com)<br> ## Put a Valid date (From : currentDate-1, To : currentdate)<br> # Actions:<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to Customers | Manage your Customers page is well displayed |
| Filter By Email. Criteria : pub@prestashop.com | Customers list is filtered. Customers listed have pub@prestashop.com in their Email |
| View Customer | The Customer information page is displayed correctly<br><br>Page Title contains Information about customer |
| Check that the customer has the created voucher |  |
| Click on the pencil edit of the voucher | The cart rules page is displayed |
| Update the discription > save | Message is displayed : Update successful.<br>The page Information about customer J. DOE is displayed |
| Delete voucher > Confirm deletion | Voucher is deleted successfully, with message Successful deletion |
| Click on customer > Reset filter | List of customers is updated |
