---
title: "Preview order"
weight: 3
---

# Preview order
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page | The Orders page is well displayed |
| Click on the icon loop to preview the last order created | The order preview page is displayed |
| Check that data are ok:<br> # The Carrier informations<br> # Tracking number = empty<br> # Status of Order is correct<br> # Product details<br> # Customer details<br> # Messages block is well displayed<br> # Payment block is well displayed | The data are correctly displayed and consistent |
| Check the *pagination* in the list products block (*number of products >= 10*) | *Pagination* is well displayed |
| Try to click on all paginations *buttons* | The *pagination* worked well |
| Try to edit a product *quantity* in the *second* page , then *save* | the quantity is well updated, even when we move to *another* page (in the product list block) |
| Select *20* as value for *Items per page*: | all the 20 or less products are displayed and no pagination is displayed |
| Select *8* as value for *Items per page* | only *8 products* will be *displayed* in the first page |
| Try to *delete* a product | the product *has been deleted* successfully and the *number of products* has been *decreased by one* |
| Edit the *price* of the *second* product | the *price* is successfully updated |
| *Add* another product to the list/cart/order | the product is successfully *added* and the number of product has been *increased* by one |
| Edit the order adresses:<br> # Edit *Shipping* address<br> # Edit *Invoice* address | The addresses are Successfully updated |
| Edit the carrier:<br> # Change *carrier*<br> # Add a *tracking number* | The carried has been successfully *changed* and the *tracking number* has been *saved* |
| Change the *status of order* | the *status* has been successfully *changed* |
| # Go back to the BO > Order > Order list page<br> # click on the icon to preview the last order created again | The order preview page is displayed |
| Check that data are well updated:<br> # Carrier<br> # Tracking number = not empty<br> # Shipping details<br> # Email<br> # Invoice details<br> # Number of products<br> # Reference of each product<br> # quantity of each product<br> # Total | Data are correctly displayed and updated |
