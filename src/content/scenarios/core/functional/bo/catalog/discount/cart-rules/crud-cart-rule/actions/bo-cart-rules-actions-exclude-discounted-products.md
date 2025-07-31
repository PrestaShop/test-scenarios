---
title: "BO - Cart rules - Actions - Exclude discounted products"
weight: 10
---

# BO - Cart rules - Actions - Exclude discounted products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10326
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/03_actions/10_excludeDiscountedProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rules page is displayed <br><br>Information tab is displayed |
| Entering data for in Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to cart > Click on Proceed to checkout > Click on "Have a promo code?"> Enter the code "Test" > Click on Add | See error message is displayed :"You cannot use this voucher on products on sale"<br>See in cart:<br>|1 item|€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94| |
| Delete the product in cart > Go to homepage > Add a product > Click on Proceed to checkout > Click on "Have a promo code?" > Enter the code "Test" > Click on Add | See in the cart:<br> <br>|1 item|€34.80|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€17.40|<br>|test cart rules|-€17.40| |
| Add another product to cart >Click on Proceed to checkout | See in the cart:<br> <br>|2 items|€57.74|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€40.34|<br>|Test|-€17.40| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
