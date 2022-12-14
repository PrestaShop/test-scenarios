---
title: "BO - Shop Parameters - Order Settings - Terms of service"
weight: 7
---

# BO - Shop Parameters - Order Settings - Terms of service
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > Disable "Terms of service" > Save | Terms of service = NO<br><br>Page for terms and conditions = None<br><br>Alert "Update successful" appears |
| Go to FO > Add product to cart > Proceed to checkout | Step 4 : no terms & conditions is requested to pursue order<br><br>Place order can be clicked |
| Go to Shop Parameters > Enable Terms of service > Choose Page for terms and conditions to display > Save | Message "Update successful" appears |
| Go to FO > Add product to cart > Proceed to checkout | At Step 4, a check need to be done in order to place the order<br><br>"I agree to the [terms of service|http://ps178:8888/en/content/3-terms-and-conditions-of-use] and will adhere to them unconditionally." |
| Click button Place Order | The button is grayed out and can't be clicked |
| Click the link "terms of service" > close the popup > Tick the bock > Click Place Order button | Order is now confirmed |
