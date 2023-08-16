---
title: "BO - Design - Image Settings - Images generation options"
weight: 3
---

# BO - Design - Image Settings - Images generation options
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-962

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1 : Using JPEG base image(with high resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product *jpg*]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * Image size = 238.3 KB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1395/Desktop-screenshot.png|width=543,height=390! |
| *Using JPEG base image(with low resolution)*<br>**<br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 25.8 kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1398/Desktop-screenshot%20(1).png|width=575,height=268! |
| *Case 2 : Using WebP base image (with High resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 40.6kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1405/webP-prop.png|width=598,height=259! |
| *Using WebP base image(with low resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 7.3kB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1410/webP2-prop.png|width=548,height=250! |
| *Case 3 : Using PNG base image(with High resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 1MB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1414/Desktop-screenshot%20(2).png! |
| *Using PNG base image (with Low resolution)*<br><br>*Bo* > *Design* > *Image Settings* > Go to *Images generation options* section > Put the specified data > Click on *Save* button | * Image Settings page is well displayed<br> * Message displayed : 'The settings have been successfully updated.' |
| BO > Catalog > Products > Click on New product button > Standard product > Add new product | * You should have the name on the product name and an image on the image selection <br> * The Online button is enabled<br> * You have a green modal and it say : "Successful update" |
| * Go to your folder [yourshop]/img/p/[id of your new product png]<br> * Right Click on image > Click on  properties | * The Image extension is  .jpg<br> * Image properties are well displayed <br> * The image size = 57.4 KB<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1435/Desktop-screenshot.png! |
| *Product Customization pictures*<br><br>BO > Design > Image Settings > Images generation options section > Put the specified data > Click on Save button | This message is well displayed : "The settings have been successfully updated." |
| BO > Catalog > Products > click on any standard product > Details tab > Customization > put the specified data > Click on Save and publish button | This message is displayed : "Successful update" |
| FO > Click on product edited in previous step > Click on CHOOSE FILE button > Add an image > Click on SAVE CUSTOMIZATION button | * The image added is well displayed in *Product customization* area<br> * Romove Image link is displayed |
| Go to your folder [yourshop]/img/p/[id of your new product png] | * The image number in folder is doubled (11 image files .jpg)<br> * Every image is duplicated with new name  .....*2x*.jpg<br> * The image resolution in new added files is doubled |
