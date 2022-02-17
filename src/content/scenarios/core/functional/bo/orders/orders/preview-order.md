---
title: "Preview order"
weight: 3
---

# Preview order
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page | The Orders page is well displayed |
| Click on the icon loop to preview the last order created | The row order-preview-content is displayed<br><br>Check that data are ok:<br> # The Carrier informations<br> # Tracking number = empty<br> # Status of Order is correct<br> # Product details<br> # Customer details<br> # Messages block is well displayed<br> # Payment block is well displayed |
| click on "js-preview-more-products-btn" (... x more)" | all the list of products is well displayed.<br><br>Check that<br><br>Product name => ok<br><br>Product reference => ok<br><br>Product quantity => ok<br><br>Product total => ok |
| Click on "Open details" | The Order Details page is well displayed |
| Edit the Order:<br> # Edit Shipping address<br> # Edit Invoice address<br> # Edit the quantity of the first product<br> # Edit the price of the second product<br> # Remove the third product<br> # Add another product<br> # Change carrier<br> # Add a tracking number | Successful update. |
| Go back to the BO > Order > Order list page and click on the icon to preview the last order created again | The row order-preview-content is displayed<br><br>Check that data are well updated:<br> # Carrier<br> # Tracking number = not empty<br> # Shipping details<br> # Email<br> # Invoice details<br> # Number of products<br> # Reference of each product<br> # quantity of each product<br> # Total |
