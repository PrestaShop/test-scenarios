---
title: Debug mode
weight: 4
---

## Preconditions

Login to BO\
Shop MUST BE in debug mode
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Orders > Invoices" | Symfony toolbar is displayed at the bottom of the page |
| Toggle display of the toolbar | Toolbar is toggled on and off |
| Go in the files directory   (src/PrestaShopBundle/Controller/Admin/Sell/Order/) and edit the file"OrderController.php" Change the value of the $orderKpiFactory variable. Go to "Orders > Orders" in the BO | An exception is displayed |
| Fix the file and go to "Orders > Orders" in the BO | The page works fine |
