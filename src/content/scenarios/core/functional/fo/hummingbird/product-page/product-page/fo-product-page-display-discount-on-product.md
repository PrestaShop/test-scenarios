---
title: "FO - Product Page - Display discount on product"
weight: 12
---

# FO - Product Page - Display discount on product
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6980

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| Click on the "Pricing" tab > Set the Retail price (tax incl.) to 20 | * The pricing tab should be displayed<br> * The retail price (tex excl.) should be set |
| Click on the "Pricing" tab > Set the Retail price (tax incl.) to 20 > Click on "Add a specific price" > Enable "Apply a discount to the initial price" > Set to 2 € Tax included  > Click on save and publish > Click on Cancel | The specific price is displayed<br><br>Discount (tax incl.) = 	-€2.00 |
| Click on Save and publish | Successful update alert is displayed |
| Preview the product | The product page is displayed in a new tab<br><br>See a new tag is displayed with a white background on the product image : -€2.00 |
