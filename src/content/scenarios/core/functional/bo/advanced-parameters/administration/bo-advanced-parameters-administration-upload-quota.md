---
title: "BO - Advanced Parameters - Administration - Upload quota"
weight: 2
---

# BO - Advanced Parameters - Administration - Upload quota
## Steps
| Step Description | Expected result |
| ----- | ----- |
| With a fresh install<br><br>BO > Advanced Parameters > Administration > Upload quota | The page is will displayed showing default values for *Upload quota* section :<br> *  Maximum size for attached files : 8<br> * Maximum size for a downloadable product : 2<br> * Maximum size for a product's image : 2 |
| Set the size in *Maximum size for attached files* field  >  Click *Save* button | * Update successful message is displayed<br><br> * Under the field *Maximum size for attached files* this message is written : Set the maximum size allowed for attachment files (in megabytes). This value has to be lower than or equal to the maximum file upload allotted by your server (currently: 3 MB). |
| *Case 1 : _The uploaded file is over the size limit configured_*<br><br>BO > Catalog > Files > Click on *Add new file* button > Add data > Click on *Save* button | Error message is displayed :<br>Upload error. Please check your server configurations for the maximum upload size allowed. |
| *Case 2 : _The uploaded file is under/equals the size limit configured_*<br><br>BO > Catalog > Files > Click on *Add new file* button > Add data > Click on *Save* button | This message is displayed :  "Successful creation"<br><br>Files page is well dislayed, showing a table with 4 cells  containing your uploaded file informations:<br> * ID :<br> * Name : <br> * File :<br> * Size :<br> * Products : |
| Set the size in  *Maximum size for a downloadable product* field  >  Click *Save* button | * Update successful message is displayed<br><br> * Under the field *Maximum size for a downloadable product* this message is written : Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: 2 MB). |
