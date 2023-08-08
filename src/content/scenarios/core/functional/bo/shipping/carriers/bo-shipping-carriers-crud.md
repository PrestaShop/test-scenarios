---
title: "BO - Shipping - Carriers - CRUD"
weight: 1
---

# BO - Shipping - Carriers - CRUD
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-970

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shipping >Carriers | Carriers page is well displayed <br><br>the carriers on the list  are : <br> * Click and collect <br> * My carrier <br> * My cheap carrier <br> * My light carrier |
| Click on add new carrier | a new page is well displayed with a title : View <br><br>the page is halved to two parts the first one is for the logo .<br><br>the header of the second one is for the process of creating a new carrier ( 4 steps ) :<br> # General setteings <br> # Shipping locations and costs <br> # Size weight and group access <br> # Summary <br><br>the content of the second part is the general setteings . |
| Fill the blank of the first step " General settings "  then click on next | the data is saved  , the logo part is updated with the new logo  . <br><br>the color of the first step is changed to green .<br><br>the content is changing to the second step "Shipping locations and costs " |
