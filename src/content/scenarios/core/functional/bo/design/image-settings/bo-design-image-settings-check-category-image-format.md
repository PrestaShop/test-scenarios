---
title: "BO - Design - Image Settings : Check category image format"
weight: 12
---

# BO - Design - Image Settings : Check category image format
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6018
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/14_checkCategoryImageFormat.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/image-settings/add-new-image-type

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Design > Image settings<br> * Scroll down to have image generation option | * JPEG/PNG  should be checked <br> * You can't unchecked the JPEG/PNG format<br> * Base format should be : "Use PNG only if the base image is in PNG format" |
| Check the checkboxes next to Webp | The checkbox should be checked and the Webp is enabled |
| * Go to Catalog > categories <br> * Clic on "Add new category" | * You should have all your categories <br> * You have the page to create a category |
| * Set a category with a name and three image in PNG <br> * Clic on "Save" | * You should have the name on the category name and the url of image on image selection <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > categories <br> * Clic on "Add new category" | * You should have all your categories <br> * You have the page to create a category |
| * Set a category with a name and three image in JPEG <br> * Clic on "Save" | * You should have the name on the category name and the url of image on image selection <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > categories <br> * Clic on "Add new category" | * You should have all your categories <br> * You have the page to create a category |
| * Set a category with a name and three image in WebP <br> * Clic on "Save" | * You should have the name on the category name and the url of image on image selection <br> * You have a green modal and it say : "Successful update" |
| Go to your folder [yourshop]/img/c | There is no image on Webp |
| Drag and drop [idofyour category PNG]_category_default.jpg on [https://www.checkfiletype.com/] | The website should say that your image is on PNG |
| Drag and drop [idofyour category JPEG]_category_default.jpg on [https://www.checkfiletype.com/] | The website should say that your image is on JPEG |
| Drag and drop [idofyour category WebP]_category_default.jpg on [https://www.checkfiletype.com/] | The website should say that your image is on JPEG |
| * Go to FO <br> * Scrol down and clic on "All product"<br> * Right click on a category <br> * Select inspect<br> * look at the end of the <source | * You'll see your shop<br> * You'll see on the top some category<br> * you'll see many option <br> * you should see the details of category's image under a Picture tag<br> * This will show you witch type of product it's selected |
| * Go to your folder [yourshop]/img/c | * Now there is some _category__default image on Webp |
