---
title: "BO - Stocks - Movements - Filter by category, movement type, employee and period"
weight: 1
---

# BO - Stocks - Movements - Filter by category, movement type, employee and period
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Stock > Bulk edit quantity : + 120 > Apply new quantity | Alert Stock successfully updated |
| Go to Catalog > Stock management > Stock > Movement Tab | Movement Tab is well displayed<br><br>30 elements are displayed per page in Movements Tab |
| Click on Advanced filters > Click Filter by movement type dropdown | See 2 choices :<br>- None<br>- Employee Edition |
| Go to FO > Make an order with a product > Proceed to checkout | Order is confirmed |
| In BO > Orders > Change status of latest order to Delivered | Message Successful update is displayed |
| Go to Catalog > Stock management > Stock > Movement Tab > Click on Advanced filters > Click Filter by movement type dropdown | See 3 choices :<br> - None<br> - Employee Edition<br> - Customer Order |
| Choose Customer Order | The list is updated with 1 element<br> * ID : 2<br> * Name of the product : Hummingbird printed sweater<br> * Reference : demo_3 demo_3<br> * Type : Customer Order<br> * Quantity : 1<br> * Date & Time : order date and time<br> * Employee : Demo Prestashop |
| Click on the link : Customer Order | New tab is open with the order |
| Go back to Stock management > Stock > Movement Tab > Filter by Filter by movement type = None | List of elements is automatically updated |
| Use pre-condition 2 : TEST-2343 | Employee is well created |
| Log in with the new employee created > Go to BO > Catalog > Products > Edit product Mountain fox notebook > Combination Tab : add 10 quantity to 4 combinations > Save list > Save<br><br>And Go to Stock > Movements Tab | See latest modification of stock appear with the new Employee name |
| Filter by employee > In dropdown > Choose Newly created employee | List of elements is updated<br><br>Only product Mountain fox notebook is displayed |
| Filter by period > Choose a range of dates before today. | List of elements is updated.<br><br>See alert : No product matches your search. Try changing search terms. |
| Filter by period > Choose a range of dates | List of elements is updated |
| Filter by categories > Check Category Clothes | List of elements is updated.<br><br>See alert : No product matches your search. Try changing search terms. |
| Reset all filters | List of elements is updated.<br><br>All movements are displayed |
| Go to BO > Catalog > Products > Disable any product from product list | Product is well disabled<br><br>Alert The status has been successfully updated. is displayed |
| Go to Stock > Movements Tab > Filter by status : Disabled | List should be updated with only disabled products.<br><br>But there's this issue : https://github.com/PrestaShop/PrestaShop/issues/10813 |
