---
title: "BO - Design - Theme & Logo - Page Configuration - Configure module"
weight: 5
---

# BO - Design - Theme & Logo - Page Configuration - Configure module
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-929

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Theme & Logo | Theme & Logo page is displayed<br>Title contains Theme & Logo |
| Click on Pages Configuration tab | Pages Configuration is displayed<br><br>Homepage is selected by default |
| Click on *Menu* button | A dropdown list is displayed containing multiple modules<br> * Categories<br> * Content pages<br> * Brands ans Suppliers<br> * Main menu |
| Go to *Main menu* module in the dropdownlist > Click on *Configure* button | *Configure* page is displayed<br><br>Title contains : Configure Main menu |
| Go to *Menu Top Link* section > Selected items > Click on Art > Click on *Remove* button | The selected item is deleted from the list |
| Click on *Save* button | This message is displayed : "The settings have been updated." |
| Go to FO > Homepage | There is only two categories displayed in the header :<br> * CLOTHES<br> * ACCESSORIES |
| Back to *Configure Main menu* page in BO > Go to *Available items* section >Scroll down to *Categories* > select *Art* > Click on *Add* button | The item is added to Selected items list |
| Click *Save* button | Message displayed : "The settings have been updated." |
| Go to FO > Homepage | The header  contains three categories:<br> * CLOTHES<br> * ACCESSORIES<br> * ART |