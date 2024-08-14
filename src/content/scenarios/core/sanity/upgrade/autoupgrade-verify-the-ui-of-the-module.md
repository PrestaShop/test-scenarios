---
title: "Autoupgrade - Verify the UI of the module"
weight: 8
---

# Autoupgrade - Verify the UI of the module
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9677

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.0.5 in english | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in english <br> * All the checklist should be green |
| Scroll down and check the "start your uprgrade" part | On the "Latest official version for minor channel." you should have the number "*8 stable - (8.1.x)*" where x is the latest version of 8.1.x release (currently 8.1.7) |
| Look at the Sidebar of Prestashop | You should see an icon with an up arrow instead of a puzzle piece |
| Look at the bottom | You should see the footer with the privacy policy that are a linked with https://www.prestashop-project.org/data-transparency/ |
| * Go to BO > International > Localization <br> * Import the Czech republic language<br> * import the germany language<br> * Import the spainish language<br> * Import the french language<br> * Import the italian language<br> * Import the poland language<br> * Import the russian language | * You should have the localization tab <br> * You should have all the different language imported |
| * Go to your profile<br> * Change the language to Czech republic and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in czech |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in czech <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to Germany and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in german |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in german <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to spanish and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in spanish |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in spanish <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to french and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in french |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in french <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to italian and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in italian |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in italian <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to poland and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in poland |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in poland <br> * All the checklist should be green |
| * Go to your profile<br> * Change the language to russian and clic on save | * You should see your profile on the employee tab <br> * Your employee tab should be in russian |
| Go to the 1-Click Upgrade page | * You should see the configuration page of the module in russian <br> * All the checklist should be green |
