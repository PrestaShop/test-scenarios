---
title: "BO - Design - Image Settings - Check stores image format "
weight: 13
---

# BO - Design - Image Settings - Check stores image format 
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6063
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/15_checkStoreImageFormat.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/image-settings/add-new-image-type

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Design > Image settings<br> * Scroll down to have image generation option | * JPEG/PNG  should be checked <br> * You can't unchecked the JPEG/PNG format<br> * Base format should be : "Use PNG only if the base image is in PNG format" |
| Check the checkboxes next to Webp | The checkbox should be checked and the Webp is enabled |
| * Go to Shop Parameters > Contact > Stores<br> * Clic on "Add new store" | * You should have all your stores <br> * You have the page to create a store |
| * Set a store with a name, address Zip code, City, Country, Latitude / Longitude and a picture in PNG <br> * Clic on "Save" | * You should have your store with all the required field set <br> * You have a green modal and it say : "Successful update" |
| * Go to Shop Parameters > Contact > Stores<br> * Clic on "Add new store" | * You should have all your stores <br> * You have the page to create a store |
| * Set a store with a name, address Zip code, City, Country, Latitude / Longitude and a picture in JPEG <br> * Clic on "Save" | * You should have your store with all the required field set <br> * You have a green modal and it say : "Successful update" |
| Go to your folder [yourshop]/img/st | There is no image on Webp |
| Drag and drop [idofyour store in PNG]_stores_default.jpg on [https://www.checkfiletype.com/] | The website should say that your image is on PNG |
| Drag and drop [idofyour store in JPEG]_store_default.jpg on [https://www.checkfiletype.com/] | The website should say that your image is on JPEG |
| * Go to FO <br> * Go at the bottom of the page and clic on "Store"<br> * Right click on a store s image <br> * Select inspect<br> * look at the end of the <source | * You'll see your shop<br> * You'll see all the different shop <br> * you'll see many option <br> * you should see the details of store's image under a Picture tag<br> * This will show you witch type of image it's selected |
| *If the source is on Webp* <br> * Go to your folder [yourshop]/img/st | * Now there is some _stores_default_ image on Webp |
