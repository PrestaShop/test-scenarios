---
title: "Consult credit slips list"
weight: 1
---

# Consult credit slips list
## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1 :*<br>Go to BO > Customer Service > Merchandise Returns > Enable returns | Message "The settings have been successfully updated." is displayed<br><br>Enable return is set to YES |
| Go to FO > Login to customer account > Go to Credit slips tab | Case 1 : You have no credit slip<br>Credit slips page is displayed with message alert-info "You have not received any credit slips." |
| Create an order (pre-condition) |  |
| Go to your account > Go to Order History | See 1 order with status "Awaiting bank wire payment" |
| Go to BO > Orders > Orders > Choose Order and change status to "Shipped" | Order is updated with new Order Status : Shipped |
| Go to FO > Order History tab > Refresh | Status of Order is refresh to Shipped |
| Click on Details of order > Check the product you want to return > Add a Merchandise Return message > Click on Request a return | Merchandise Return page is displayed<br><br>Package status is the following Waiting for confirmation |
| Go to BO >Customer Service > Merchandise Returns | See that one merchandise return is in the list with Status : Waiting for confirmation |
| Click on Merchandise return > Change status to Return completed > Save | Message "Successful update." is displayed<br><br>Status is updated to Return completed |
