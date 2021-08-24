---
title: "Bulk actions"
weight: 4
---

# Bulk actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The cart rule page is well displayed |
| Filter by Name "Todelete" | The list contains the searched Name |
| Select all cart rules and disable cart rules with bulk action | {color:#ff0000}There is no alert {color:#172b4d}=> [https://github.com/PrestaShop/PrestaShop/issues/23756]{color}{color}<br><br>{color:#ff0000}{color:#172b4d}Check that cart rules are disabled{color}{color} |
| Select all cart rules and enable them with bulk action | {color:#ff0000}There is no alert => [https://github.com/PrestaShop/PrestaShop/issues/23756]{color}<br><br>Check that cart rules are enabled |
| Select all cart rules, delete them and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
| Reset filter | Total cat rules = 0 |
