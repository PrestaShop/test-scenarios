---
title: "Add a discount"
weight: 11
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page and view last order created | The Order view page is well displayed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Value = invalid with characters => 10%<br><br>and click on "Add" | An alert "Discount value must be a number." |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Value > 100% => 500%<br><br>and click on Save | An alert "Percent value cannot exceed 100." |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Value < 0 => -2<br><br>and click on Save | Percent value must be greater than 0. |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Value<br><br>and click on Save | An alert "Successful update." alert is displayed and<br><br>Discounts = Total products - Value<br><br>A new line is added |
| Click on Remove to delete the discount | An alert "Successful update." is displayed<br>The line discount is removed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Type = Amount<br> # Value: invalid with characters<br><br>and click on Save | An alert "Discount value must be a number." is displayed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Type = Amount<br> # Value: < 0<br><br>and click on Save | An alert "Amount value must be greater than 0." is displayed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Type = Amount<br> # Value: > Total order<br><br>and click on Save | An alert "Discount value cannot exceed the total price of this order." is displayed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Type = Amount<br> # Value<br><br>and click on Save | An alert "Successful update." alert is displayed and<br><br>Discounts = Total products - Value<br><br>A new line is added |
| Go to BO > Catalog > Discounts page | check that the cart rule is well displayed with same name |
| Go back to the last Order and Click on Remove to delete the discount | An alert "Successful update." is displayed<br>The line discount is removed |
| Click Add new discount | A pop up "Add new cart rule" is displayed and the "Add" button is disabled |
| Set these fields:<br> # Name<br> # Type = ree shipping<br><br>and click on Save | An alert "Successful update." alert is displayed and<br><br>Discounts = fees of  shipping<br><br>A new line is added |
| Click on the Carriers Tab and click on Edit | A pop up: "Edit shipping details"  is displayed |
| Select another carrier and click on Update | An alert "Successful update." is displayed and check in the discount block, the *value* of free shipping is updated |
| Click on Remove to delete the discount | An alert "Successful update." is displayed<br>The line discount is removed |
