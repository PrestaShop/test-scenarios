---
title: "Consult credit slips list"
weight: 1
---

# Consult credit slips list
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Login to customer account > Go to Credit slips tab | Case 1 : You have no credit slip<br>Credit slips page is displayed with message alert-info "You have not received any credit slips." |
| Create an order (pre-condition) |  |
| Go to your account > Go to Order History | See 1 order with status "Awaiting bank wire payment" |
| Go to BO > Orders > Orders > Choose Order and change status to "Shipped" | Order is updated with new Order Status : Shipped |
| Go to FO > Order History tab > Refresh | Status of Order is refresh to Shipped |
| Click on Details of order > Check the product you want to return > Add a Merchandise Return message > Click on Request a return | Merchandise Return page is displayed<br><br>Package status is the following Waiting for confirmation |
| Go to BO >Customer Service > Merchandise Returns | See that one merchandise return is in the list with Status : Waiting for confirmation |
| Click on Merchandise return > Change status to Return completed > Save | Message "Successful update." is displayed<br><br>Status is updated to Return completed |
| Go to FO > Mechandise returns tab > Refresh | Status of "Package status" is refresh to Return Completed |
| Go to BO -> Orders -> Orders -> Choose order and click on "View" button | Order detail page is displayed |
| Click on Return products tab | List of products ordered is displayed |
| Choose the product and click on the Quantity checkbox | The quantity of the product is set to 1 / 1<br><br>Case 1: Generate a credit slip checkbox is already checked |
| Click on Return products button | Back to the list of products ordered<br><br>Message "The product was successfully returned." is displayed<br><br>Refunded column of the chosen product is filled by "1 (€XX Refunded)" text |
