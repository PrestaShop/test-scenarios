---
title: "BO - Shop Parameters - Product Settings - Allow ordering of out-of-stock products & Enable stock management"
weight: 1
---

# BO - Shop Parameters - Product Settings - Allow ordering of out-of-stock products & Enable stock management
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go in BO > Catalog > Product | Product page displayed |
| Click on a quantity of a product | Quantities page of product displayed |
| Click to preview | Product page of this product displayed on FO<br><br> <br><br>ADD TO CART button is grayed out<br><br>Logo and Out-of-Stock message |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br> <br><br>Enable "Allow ordering of out-of-stock products"<br><br> <br><br>Save | Update successful Notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product page of this product displayed<br><br> <br><br>ADD TO CART button is available |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br> <br><br>Disable "Allow ordering of out-of-stock products"<br><br>Disable "Enable stock management"<br><br> <br><br>Save | Update successful Notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product page of this product displayed<br><br> <br><br>ADD TO CART button is available |
| Go to BO > Shop Parameters > Product Settings | Product Settings Displayed |
| In Products stock :<br><br> <br><br>Enable "Enable stock management"<br><br>Disable "Allow ordering of out-of-stock products"<br><br> <br><br> <br><br>Save | Update successful Notification |
| On FO > [Mug Today is a good day|http://localhost/ps803/admin-dev/index.php/sell/catalog/products/14?_token=ErJX8fVB37ENkoShx8tL1Ss9Q3Yho-kp0V34a0xUMM8#tab-step1] product page | Product page of this product displayed<br><br>ADD TO CART button is grayed out<br><br>Logo and Out-of-Stock message |
| Go in BO > Catalog > Product | Product page displayed |
| Click on a quantity of a product | Quantities page of product displayed |
| Modify quantity and click on save | Settings updated. notification |
