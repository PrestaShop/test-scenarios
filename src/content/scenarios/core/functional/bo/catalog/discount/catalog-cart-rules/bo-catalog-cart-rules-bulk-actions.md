---
title: "BO - Catalog Cart Rules - Bulk actions"
weight: 4
---

# BO - Catalog Cart Rules - Bulk actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-837

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog >discounts >catalog price rules | the catalog price rules page is well displayed |
| Go to Catalog > discounts > Cart rules | catalog cart rules is well diplayed |
| Click on "Add new cart rule " button | The Add new cart rule page is displayed |
| Set the fields > Click on "Save" | The price rule is well created and a green alert "Successful creation" is displayed |
| GO FO > choose a quick view product and click on ADD TO CART | a popup is displayed with message *Product successfully added to your shopping cart* |
| Click on CONTINUE SHOPPING and click on quick view of an other product | the product popup is displayed |
| Click on ADD TO CART | a popup is displayed with message *Product successfully added to your shopping cart* |
| Click on PROCEED TO CHECKOUT | The SHOPPING CART is displayed |
| Click on [Have a promo code?|http://127.0.0.1:8081/prestashop_8.1.0/8.1.0/en/cart?action=show#promo-code] and add the discount code generated | the result of discount is displayed |
| Go back to cart rules on BO and click on edit | an edit page is displayed with the title of cart rule |
| Change the name of the created cart rule to "new_test" | The cart rule  page is displayed and the green alert "Successful update" is displayed |
| Delete the cart rule  and confirm the deletion | The cart rule  is well deleted and the alert "Successful deletion" is displayed |
| create 2 price rules | the number of catalog price rules is =2 |
| select the two price rules with ID [1 , 2]  -> click on Bulk actions -> delete selected | the two price rules are well deleted  with a green message "The selection has been successfully deleted" |
