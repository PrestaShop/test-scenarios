---
title: "BO - Header"
weight: 11
---

# BO - Header
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5207
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/productV2/functional/08_header.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Edit an existing product | Product page is well displayed |
| Edit product name > Click Save and publish | Successful update message is displayed |
| Switch language to FR > Edit the product name > Click Save and publish | Successful update message is displayed |
| Go to Pricing Tab > Edit Retail price > Click Save and publish | Successful update message is displayed<br><br>Price in header is updated: <br>€116.67 tax excl.<br>€140.00 tax incl. (tax rule: 20%) |
| Go to Stocks tab > Add 10 items > Click Save and publish | Successful update message is displayed<br><br>Stock in header is updated:<br>310 in stock |
| Subtract 75 items > Click Save and publish | Successful update message is displayed<br><br>Stock in header is updated:<br>235 in stock |
| Go to Description Tab > Add Image > Select Image > Use as cover image > Add caption > Save Image Settings > Refresh page | Alert Settings updated is displayed<br><br>Image in header is updated |
| Click on Standard product > Choose Virtual product > Change Product Type > Confirm Change Product Type | Successful update message is displayed<br><br>In header the product type has changed<br><br>In tabs, a new tab is displayed "Virtual product" |
| Go to Details Tab > Change reference > Add a MPN > Add a UPC barcode > Add a EAN-13 or JAN barcode > Add ISBN > Save and publish | Successful update message is displayed<br><br>In header:<br>Reference is updated<br>MPN is added<br> UPC barcode is added<br> EAN-13 or JAN barcode is added <br>ISBN is added |
| Switch to Offline > Click Save and Publish | Successful update message is displayed |
