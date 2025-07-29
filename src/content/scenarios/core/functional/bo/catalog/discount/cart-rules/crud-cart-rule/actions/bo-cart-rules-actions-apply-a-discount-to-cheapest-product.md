---
title: "BO - Cart rules - Actions - Apply a discount to Cheapest product"
weight: 8
---

# BO - Cart rules - Actions - Apply a discount to Cheapest product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10324
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/03_actions/08_applyDiscountToCheapestProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| In Information tab, enter a Name > Go to Actions tab | Actions tab is displayed |
| Check Percent (%) in Apply a discount > Check Cheapest product in Apply a discount to > Save and stay | Success Message is displayed: "Successful creation" |
| Click on View my store > Add 2 products to the cart > Click on Proceed to checkout | Discount is applied to Cheapest product<br><br>See in cart :<br> <br>|2 items|€51.48|<br>|Discount(s)|- €3.34|<br>|Shipping|Free|<br>|Total (tax incl.)|€48.14|<br>| Test| -€3.34 | |
| Go back to cart rule edition page > Apply a 100% discount with ‘Cheapest product' > Save and stay | Success Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is applied to Cheapest product<br><br>See in cart :<br>|2 items|€51.48|<br>|Discount(s)|- €16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>| Test| -€16.68 | |
| Delete Customizable Mug from cart | Discount is applied <br><br>See in cart :<br> <br>|1 item|€34.80|<br>|Discount(s)|-€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€00.00|<br>| Test|-€34.80 | |
| Change quantity of product to 2 | Discount is applied<br><br>See in cart :<br><br>|2 items|€69.60|<br>|Discount(s)|-€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>| Test|-€34.80 | |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
