---
title: "BO - Shop Parameters - Customer Settings - Re-display cart at login"
weight: 1
---

# BO - Shop Parameters - Customer Settings - Re-display cart at login
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Customer Settings | Customer settings page is displayed |
| Re-display cart at login > YES > Save | Update successful alert is displayed |
| Go to FO > Log into customer account > Add product to cart > Click Proceed to checkout > Click Sign out | Customer is logged out<br>Cart is empty |
| Login with customer account | Product added to cart is displayed in cart |
| Go back to BO > Shop parameters > Customer Settings > Re-display cart at login > NO > Save | Customer settings page is displayed |
| Go to FO > Log into customer account > Add product to cart > Click Proceed to checkout > Click Sign out | Customer is logged out<br>Cart is empty |
| Login with customer account | Product added to cart is not displayed in cart |
