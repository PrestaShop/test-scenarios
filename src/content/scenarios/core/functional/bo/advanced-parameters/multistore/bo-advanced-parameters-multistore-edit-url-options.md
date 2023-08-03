---
title: "BO - Advanced Parameters - Multistore - Edit URL options"
weight: 8
---

# BO - Advanced Parameters - Multistore - Edit URL options
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1189

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Multistore | Multistore page opens |
| * Click on your shop 1 url in Multitsore Tree <br> * Click button Edit<br> * Disable option "Is it the main URL for this shop?" and Disable the shop<br> * click on "save" button | An error message will appear : <br><br>There are 2 errors.<br> # You cannot change a main URL to a non-main URL. You have to set another URL as your Main URL for the selected shop.<br> # You cannot disable the Main URL. |
| * Click on the group's name of your shop<br> * Click on the url of your main Shop<br> * Click on the checkmark to disable the main shop | An error message will appear : <br> "You cannot disable the Main URL." |
| Click on the checkmark for option "Is it the main URL?" in main shop | An error message will appear : <br> "You cannot change a main URL to a non-main URL. You have to set another URL as your Main URL for the selected shop." |
| * Click on "Add new url"<br> * On "shop url" set the virtual url<br> * Clic on "Save" button in the "shop url" part | * "Add new" page is displayed <br> * You should have what you writte on virtual url at the end of final url<br> * You will return on your shop of multistore with a green notification" Successful creation " |
| Click on the checkmark to disable your shop url 2 | A success message will appear :<br><br>"The status has been successfully updated."<br><br>and you have a red cross checkmark on it |
| Click on the checkmark of your shop url 2 named "Is it the main URL?" | An succes message will appear : <br> "Succesful update."<br><br>and you have a green checkmark on it |
| Click on the checkmark to enable your shop url 2 ( the new main URL ) | A success message will appear :<br><br>"The status has been successfully updated."<br><br>and you have a green checkmark |
