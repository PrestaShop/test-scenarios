---
title: "FO - Product Page - Download attachment"
weight: 5
---

# FO - Product Page - Download attachment
## Details
* **Component** : Core
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-6974

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "Add new product" button on the top right of the page > Choose "Virtual product" block in the modal > Click on "Add new product" button | New product page is displayed |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Edit quantity of the product | The content is added |
| Switch to YES for "Add downloadable file" | 5 new fields are displayed :<br>File<br>Filename<br>Number of allowed downloads<br>Expiration date<br>Number of days |
| Click on Browse button for File > Add any image > Add Number of allowed downloads = 1 > Save | A green alert "Successful update" is displayed |
| Go to "Pricing" tab > Edit "Retail price (tax incl.)" = 18 > Switch to Online > Click Save and publish | Successful update alert is displayed |
| Click on "Preview" button >Add product to cart > Process to checkout > Sign in with John Doe account > Finosh the checkout process | Your order is confirmed |
| Go to Bo > Orders > Orders > Click view on the latest Order > Update Status of the order to Payment accepted | An alert "Successful update" should be displayed |
| Go back in the FO > Click on your account name > Order History and Details > Click on Details | Order details page of the order is displayed |
| Scroll Down and you can click on "Download" at the bottom of the product name | Issue : https://github.com/PrestaShop/hummingbird/issues/611 |
