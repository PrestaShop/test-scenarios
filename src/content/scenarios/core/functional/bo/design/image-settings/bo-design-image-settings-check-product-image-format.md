---
title: "BO - Design - Image Settings - Check product image format "
weight: 14
---

# BO - Design - Image Settings - Check product image format 
## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Design > Image settings<br> * Scroll down to have image generation option | * JPEG/PNG  should be checked <br> * You can't unchecked the JPEG/PNG format<br> * Base format should be : "Use PNG only if the base image is in PNG format" |
| Check the checkboxes next to Webp | The checkbox should be checked and the Webp is enabled |
| * Go to Catalog > Product <br> * Click on "Add new product"<br> * Select Standard product <br> * Click on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in PNG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in JPEG <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to Catalog > Product <br> * Clic on "Add new product"<br> * Select Standard product <br> * Clic on "Add New product | * You should have all your product <br> * A modal appear<br> * Standard product is Selected<br> * You have the page to create a product |
| * Set a product with a name and an image in Webp <br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The checkboxes is now green and it's writte : "Online" <br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your product png]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg and Webp<br> * The website should say that your image is on PNG |
| * Go to your folder [yourshop]/img/p/[id of your product JPEG]<br> * Drag and drop [id]_large_default.jpg on [https://www.checkfiletype.com/] | * There is many image on jpg and Webp<br> * The website should say that your image is on JPEG |
| * Go to your folder [yourshop]/img/p/[id of your product Webp]<br> * Drag and drop [id]_large_default.webp on [https://www.checkfiletype.com/] | * There is many image on jpg and Webp<br> * The website should say that your image is on Webp |
| * <br> * Go to FO <br> * Scrol down and clic on "All product"<br> * Right click on a product <br> * Select inspect<br> * Look at the end of the <source | * You'll see your shop<br> * You'll see many product with pagination<br> * you'll see many option <br> * you should see the details of product's image under a Picture tag<br> * You'll see in wich type of files, the picture tag will send the image |
