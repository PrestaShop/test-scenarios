---
title: "BO - Design - Image Settings - Check base image format "
weight: 17
---

# BO - Design - Image Settings - Check base image format 
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-6094
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/16_checkBaseImageFormat.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Design > Image settings<br> * Scroll down to have image generation option | * JPEG/PNG  should be checked <br> * You can't unchecked the JPEG/PNG format<br> * Base format should be : "Use PNG only if the base image is in PNG format" |
| On "Base format" tab, Select "Use JPEG" | The radio point should be checked |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in PNG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your product png]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg <br> * The website should say that your image is on JPEG |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in JPEG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your product JPEG]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg and Webp<br> * The website should say that your image is on JPEG |
| * Go to BO > Design > Image settings<br> * On "Base format" tab, Select "Use PNG only if the base image is in PNG format" | * You can see all the format image used <br> * The radio point should be checked |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in PNG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in JPEG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg <br> * The website should say that your image is on PNG |
| * Go to your folder [yourshop]/img/p/[id of your new product JPEG]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg <br> * The website should say that your image is on JPEG |
| * Go to BO > Design > Image settings<br> * On "Base format" tab, Select "Use PNG" | * You can see all the format image used <br> * The radio point should be checked |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in PNG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in JPEG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg <br> * The website should say that your image is on PNG |
| * Go to your folder [yourshop]/img/p/[id of your new product JPEG]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg and Webp<br> * The website should say that your image is on PNG |
