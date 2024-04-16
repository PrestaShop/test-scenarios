---
title: "BO - Shipping - Carriers - CRUD"
weight: 1
---

# BO - Shipping - Carriers - CRUD
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-970

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shipping >Carriers | Carriers page is well displayed <br><br>the carriers on the list  are : <br> * Click and collect <br> * My carrier <br> * My cheap carrier <br> * My light carrier |
| Click on add new carrier | a new page is well displayed with a title : View <br><br>the page is halved to two parts the first one is for the logo .<br><br>the header of the second one is for the process of creating a new carrier ( 4 steps ) :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight, and group access <br> # Summary <br><br>the content of the second part is the general settings |
| Fill the blank of the first step " General settings "  then click on next | the data is saved  , the logo part is updated with the new logo  . <br><br>the color of the first step is changed to green .<br><br>the content is changing to the second step "Shipping locations and costs " |
| Fill the blanks of the second step "Shipping locations and costs " then click on next | the data is saved  .<br><br>the color of the second   step is changed to green .<br><br>the content is changing to the third step "Size weight and group acces  " |
| Fill the blanks of the third step "Size weight and group acces  " then click on next | the data is saved  .<br><br>the color of the third    step is changed to green .<br><br>the content is changing to the fourth step "Summary  " where there are the informations of the carrier created <br><br>the status of the carrier is enabled . |
| Click on Finish | * A green alert "Successful creation " is displayed<br> * a new carrier is well displayed on the list<br> * Carriers (5) |
| Click on the button  of edit next to the new carrier | the page of editing is displayed with the logo  and on the first step . |
| Go to the first , third steps  and change some informations then click on Finish  . | * A green alert "Successful update" is displayed <br> * the informations of the carrier created are changed . |
| on the dropdown button click on delete next to the created carrier | a popup message is displayed : <br><br>Delete selected item? <br><br>Name : new_test <br><br>YES or NO buttons |
| click on YES | * carrierslist page is displayed<br> * "Successful deletion" message is displayed<br> * The carrier  is well removed<br> * Carriers (4) |
