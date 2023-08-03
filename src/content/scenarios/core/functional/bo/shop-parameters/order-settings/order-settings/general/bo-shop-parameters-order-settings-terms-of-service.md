---
title: "BO - Shop Parameters - Order Settings - Terms of service"
weight: 7
---

# BO - Shop Parameters - Order Settings - Terms of service
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1055

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > Disable "Terms of service" > Save | Terms of service = NO<br><br>Page for terms and conditions = None<br><br>Alert "Update successful" appears |
| Go to FO > Add product to cart > Proceed to checkout | Step 4 : no terms & conditions is requested to pursue order<br><br>Place order button can be clicked |
| Go to BO > Shop Parameters > Enable Terms of service > Save | Alert "Assign a valid page if you want it to be read." is displayed |
| Enable Terms of service > Choose Page for terms and conditions to display > Save | Message "Update successful" appears |
| Go to FO > Add product to cart > Proceed to checkout | At Step 4, a check need to be done in order to place the order<br><br>"I agree to the [terms of service|http://ps178:8888/en/content/3-terms-and-conditions-of-use] and will adhere to them unconditionally." |
| Click button Place Order | The button is grayed out and can't be clicked |
| Go to BO > Design > Pages > Add a new page > Fill fields > Save | New page is created<br><br>Message "Successful creation." |
| Go to BO > Shop Parameters > Order Settings > in dropdown of Page for terms and conditions, choose newly created page > Save | Message "Update successful" appears |
| Go to FO > Add a product to cart > Checkout until step 4 - Payment > Click link "Terms of service" | Popup opens with content of page "terms" |
| Close the popup > Tick the bock > Click Place Order button | Order is now confirmed |
