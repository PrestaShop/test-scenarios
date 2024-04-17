---
title: "BO - Shipping - Carriers - CRUD"
weight: 1
---

# BO - Shipping - Carriers - CRUD
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-970

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page is well displayed <br><br>The carriers on the list are : <br> * Click and collect <br> * My carrier <br> * My cheap carrier <br> * My light carrier |
| Click on Add new carrier | A new page is well displayed with a title : Add new<br>ISSUE RELATED : <br><br>Logo is displayed<br><br>4 tabs are displayed :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight, and group access <br> # Summary |
| Fill the blank of the first tab "General settings" > Click on Next | The data is saved<br>The logo is updated with the new logo. <br><br>The color of the first tab has changed to green.<br><br>You are now on Tab 2 : Shipping locations and costs |
| Fill the blank of the second tab "Shipping locations and costs" > Click on Next | The data is saved<br><br>The color of the second tab has changed to green.<br><br>You are now on Tab 3 : Size, weight and group access |
| Fill the blanks of the third tab "Size weight and group access" > Click on Next | The data is saved<br><br>The color of the third tab has changed to green.<br><br>You are now on Tab 4 : Summary<br><br>Carrier name : test<br>Enabled : YES |
| Click on Finish | A green alert "Successful creation" is displayed<br>A new carrier is well displayed on the list<br>Carriers = 5 |
| Click on View my store > Add any product to cart > Proceed to checkout > Fill in Step 1 and 2 > Continue | In Step 3, see 3 carriers : Click and collect, test and My carrier |
| Go back to Carriers page > Click on the button Edit next to the "test" carrier | Editing page of carrier is displayed with title : "Edit: test"<br>ISSUE RELATED : |
| Click on the Trash icon next to the logo > Click OK | Logo is deleted, see a truck placeholder image |
| On the first Tab > Edit the data > Click on the third Tab | Tab 3 is displayed : Size, weight and group access |
| On the third Tab > Edit the data > Click on Finish | Successful update message is displayed |
| on the dropdown button click on delete next to the created carrier | a popup message is displayed : <br><br>Delete selected item? <br><br>Name : new_test <br><br>YES or NO buttons |
| click on YES | * carrierslist page is displayed<br> * "Successful deletion" message is displayed<br> * The carrier  is well removed<br> * Carriers (4) |
