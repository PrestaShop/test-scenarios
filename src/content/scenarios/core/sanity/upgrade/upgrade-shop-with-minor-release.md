---
title: "Upgrade Shop with minor release"
weight: 2
---

# Upgrade Shop with minor release
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9176

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the 1-Click Upgrade page<br> * On Expert mode part, select the "Minor release" and click on "Save" button | * You should see the configuration page of the module <br> * You should have a blue notification with "Configuration successfully updated. This page will now be reloaded and the module will check if a new version is available." <br> * You should have the version "8.1.5"  next to Version number<br> * You should have the version " 8.1 stable - (8.1.7) " next to "Latest official version for minor channel :" |
| Launch upgrade | Upgrade is launched |
| Refresh the page. Check logged in status | User is logged out |
| Go to the BO login page. Log in with admin user. Check shop version | Admin user is connected. Version is upgraded |
| Go to the General Parameters > Maintenance" page. Put the shop out of maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is deactivated |
| Go to the FO homepage | Home page is displayed correctly |
