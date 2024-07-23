---
title: "BO - Design - Image Settings - Images generation options"
weight: 3
---

# BO - Design - Image Settings - Images generation options
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-962

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1 : Using JPEG base image(with high resolution)*<br> * *Bo* > *Design* > *Image Settings* > Go to *Images generation options* section<br> * Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Add new product > Standard product > Add new product | A new product page is displayed |
| Set a product with a name and an image in *JPEG*  : use attached image for exemple | The image is uploaded |
| Go to your folder [yourshop]/img/p/[id of your new product *jpg*] > Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * Image size = 238.3 KB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1395/Desktop-screenshot.png|width=543,height=390! |
| *Using JPEG base image(with low resolution)*<br> * *Bo* > *Design* > *Image Settings* > Go to *Images generation options* section <br> * Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Add New product > Standard product > Add new product | A new product page is displayed |
| * Set a product with a name and an image in *JPEG*  : use attached image for exemple<br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 25.8 kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1398/Desktop-screenshot%20(1).png|width=575,height=268! |
| *Case 2 : Using WebP base image (with High resolution)*<br> * *Bo* > *Design* > *Image Settings* <br> * Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | A new product page is displayed |
| * Set a product with a name and an image in *Webp*  : use attached image for exemple<br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 40.6kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1405/webP-prop.png|width=598,height=259! |
| *Using WebP base image(with low resolution)*<br> * *Bo* > *Design* > *Image Settings* <br> * Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | A new product page is displayed |
| * Set a product with a name and an image in *Webp*  : use attached image for exemple<br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 7.3kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1410/webP2-prop.png|width=548,height=250! |
| *Case 3 : Using PNG base image(with High resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | A new product page is displayed |
| * Set a product with a name and an image in *PNG*  : use attached image for exemple<br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 1MB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1414/Desktop-screenshot%20(2).png! |
| *Using PNG base image (with Low resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | A new product page is displayed |
| * Set a product with a name and an image in *PNG*, use attached image for exemple<br> * Put it online <br> * Clic on "Save" | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 57.4 KB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1435/Desktop-screenshot.png! |
| *Product Customization pictures & high resolution images*<br><br>BO > Design > Image Settings > Images generation options section > Put the specified data > Click on Save button | This message is well displayed : "The settings have been successfully updated." |
| * BO > Catalog > Products <br> * Click on any standard product<br> * Details tab > Customization > Add a customization field <br> * Set up the customisation with the provided Data <br> * Click on "Publish and Save" | * Product should be displayed <br> * Details of this product is displayed<br> * You have some new field to set up to have customisation <br> * The different field is set up <br> * This message is displayed : "Successful update" |
| * Go to FO > Click on product edited in previous step<br> * Click on CHOOSE FILE button > Add an image<br> * Click on SAVE CUSTOMIZATION button | * The product is well displayed<br> * The name of your image is set up in the field <br> * The image added is well displayed in *Product customization* area and Romove Image link is displayed |
| Go to your folder [yourshop]/img/p/[id of the product you visit] | * The image number in folder is doubled (11 image files .jpg)<br> * Every image is duplicated with new name  .....*2x*.jpg<br> * The image resolution in new added files is doubled |
