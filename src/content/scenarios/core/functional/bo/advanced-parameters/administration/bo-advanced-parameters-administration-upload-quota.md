---
title: "BO - Advanced Parameters - Administration - Upload quota"
weight: 2
---

# BO - Advanced Parameters - Administration - Upload quota
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1142
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/03_administration/02_uploadQuota.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/administration

## Steps
| Step Description | Expected result |
| ----- | ----- |
| With a fresh install<br><br>BO > Advanced Parameters > Administration > Upload quota | The page is will displayed showing default values for *Upload quota* section :<br> *  Maximum size for attached files : 8<br> * Maximum size for a downloadable product : 2<br> * Maximum size for a product's image : 2 |
| Set the size in *Maximum size for attached files* field  >  Click *Save* button | * Update successful message is displayed<br><br> * Under the field *Maximum size for attached files* this message is written : Set the maximum size allowed for attachment files (in megabytes). This value has to be lower than or equal to the maximum file upload allotted by your server (currently: 3 MB). |
| *Case 1 : _The uploaded file is over the size limit configured_*<br><br>BO > Catalog > Files > Click on *Add new file* button > Add data > Click on *Save* button | Error message is displayed :<br>Upload error. Please check your server configurations for the maximum upload size allowed. |
| *Case 2 : _The uploaded file is under/equals the size limit configured_*<br><br>BO > Catalog > Files > Click on *Add new file* button > Add data > Click on *Save* button | This message is displayed :  "Successful creation"<br><br>Files page is well dislayed, showing a table with 4 cells  containing your uploaded file informations:<br> * ID :<br> * Name : <br> * File :<br> * Size :<br> * Products : |
| BO > Advanced Parameters > Administration > Upload quota<br><br>Set the size in  *Maximum size for a downloadable product* field  >  Click *Save* button | * Update successful message is displayed<br><br> * Under the field *Maximum size for a downloadable product* this message is written : Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: 2 MB). |
| Go to BO > Catalog > Products > Click Add new product > Choose Virtual Product  >  Click Save button | This message is displayed : Successful update |
| *Case 1 :* *_The uploaded file is over the size limit configured_*<br><br>Click on Virtual product tab > Switch Add downloadable file ON > Add data > Click on Save and publish button | * Error message is displayed<br> * The button Save and publish is disabled<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1387/size-down.png|width=365,height=170! |
| *Case 2 :* *_The uploaded file is under the size limit configured_*<br><br>Click on Virtual product tab > Switch Add downloadable file ON > Add data > Click on Save and publish button | * This message is displayed : Successful update<br> * The button Save and publish is disabled |
| BO > Advanced Parameters > Administration > Upload quota<br><br>Set the Maximum size for a product's image > Click Save button | This message is displayed : Update successful<br><br>Under the field this sentence is displayed : Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: 1 MB). |
| *Case 1 : The product image size is over the limit configured*<br><br>BO > Catalog > Products > Click New product button > choose Standard product >  Click on Add new product > click on image field  and add any image | This error message is displayed in the top right corner : Max file size allowed is "1048576" bytes |
| *Case 2 : The product image size is under the limit configured*<br><br>BO > Catalog > Products > Click New product button > choose Standard product >  Click on Add new product > click on image field  and add any image | The image is well added and displayed in product description |
