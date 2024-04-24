---
title: "FO - Product Page - Change image"
weight: 3
---

# FO - Product Page - Change image
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6972
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/03_changeImage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products page is displayed |
| Click on button Add new product > Standard product > Add new product | The product configuration page should be displayed |
| Set up the Product name > Click on the switch to put the product Online > Save | Successful update message is displayed |
| Click on the camera icon > Add 7 images | The 7 images are displayed in the image dropzone.<br>1 cover image and 6 normal images |
| Click View my store > Search for "Test" > Press Enter | Your product Test is displayed |
| Click on "Test" product | The product page should be displayed with :<br>- Your cover image<br>- All your images listed in a smaller size<br>- The 7 images are displayed on 2 lines |
| Click on the magnifying glass | The image is displayed in full screen mode |
| Click on the arrow right | The images scroll to the right |
| Click on the grey area to close the full screen mode | Modal is closed |
| Click on the arrow left | The images scroll to the left |
| Click on the last image of the product | The last image is displayed.<br>In the listing of images the last image is selected with a blue border. |
