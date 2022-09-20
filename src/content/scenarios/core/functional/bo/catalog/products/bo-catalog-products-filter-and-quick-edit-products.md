---
title: "BO - Catalog - Products - Filter And Quick Edit Products"
weight: 1
---

# BO - Catalog - Products - Filter And Quick Edit Products
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to Catalog>products page | Title page contains 'Products •' |
| Reset all filters and get number of products | Total of products > 0 |
| Filter product by product id<br>Criteria : Min '1' Max: '3' | Number of products < Total of products<br>All products id are between 1 and 3 |
| Reset filters | Number of products = Total of products |
| Filter product by product name<br>Criteria : 'Customizable mug' | Number of products < Total of products<br>All products name contains 'Customizable mug' |
| Reset filters | Number of products = Total of products |
| Filter product by product reference<br>Criteria : 'demo_3' | Number of products < Total of products<br>All products reference contains 'demo_3' |
| Reset filters | Number of products = Total of products |
| Filter product by product name_category<br>Criteria : 'Art' | Number of products < Total of products<br>All products name_category contains 'Art' |
| Reset filters | Number of products = Total of products |
| Filter product by product price<br>Criteria : Min '23.90' Max '35.90' | Number of products < Total of products<br>All products prices are between '23.90' and '35.90' |
| Reset filters | Number of products = Total of products |
| Filter product by product quantity<br>Criteria : Min '1500' Max '2400' | Number of products < Total of products<br>All products quantities are between '1500' and '2400' |
| Reset filters | Number of products = Total of products |
| Filter product by product enabled status<br>Criteria : 'Yes' | Number of products < Total of products<br>All products enabled column contains check |
| Reset filters | Number of products = Total of products |
| Filter product by product name<br>Criteria : 'Hummingbird printed sweater' | Number of products < Total of products<br>All products name contains 'Hummingbird printed sweater' |
| Disable product | Product is disabled<br>Successful message is displayed |
| Enable product | Product is enabled<br>The successful message is displayed |
