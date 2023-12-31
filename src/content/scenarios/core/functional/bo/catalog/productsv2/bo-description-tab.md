---
title: "BO - Description Tab"
weight: 13
---

# BO - Description Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5209
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/10_descriptionTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Add multiple image to product > Select one product > Use as cover image > Add a caption > Save image settings | Alert Settings updated is displayed |
| Click on the magnifying glass > Image is zoomed > Click on the cross to close the image | Product page v2 is well displayed |
| Click on replace the selection button > Choose your image | Alert Image replaced is displayed |
| Click on the trash button > Delete | Alert The selection has been successfully deleted. is displayed |
| Select 1 image > Click on Select all button > Click the cross to close the window | Product page is still well displayed |
| Add a Summary and a Description > Click Save and publish | Message Successful update is displayed |
| In Categories > Click on Add categories button > Check Clothes > Open dropdown > Check Men > Click Apply | Categories Clothes and Men are added to the Categories<br><br>Clothes and Men categories can be deleted with the cross |
| Change Default category to Clothes > Click Save and publish | Home and Men categories can be deleted with the cross<br><br>Clothes Category does not have a cross<br><br>Message Successful update is displayed |
| In Brand > Choose the Brand Graphic Corner > Click Save and publish | Message Successful update is displayed |
| In Related Products > Search "shirt" > Click the first product that is shown (Hummingbird printed t-shirt) | Message Successful update is displayed |