---
title: "Autoupgrade - Rollback and check the changes on mixpanel"
weight: 9
---

# Autoupgrade - Rollback and check the changes on mixpanel
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9679

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the 1-Click Upgrade page | * You should see the configuration page of the module |
| Launch upgrade | Upgrade is launched |
| Refresh the page. Check logged in status | User is logged out |
| Go to the BO login page. Log in with admin user. Check shop version | Admin user is connected. Version is upgraded |
| Go to the General Parameters > Maintenance" page. Put the shop out of maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is deactivated |
| Go to the FO homepage | Home page is displayed correctly |
| * Go to BO > 1-click upgrade <br> * Scroll down until the "Rollback" part | * You should see the configuration page of the module<br> * You should have :<br> ** the preselection " – Choose a backup to restore --" next to "Choose your backup:" <br> ** The blue notification "After upgrading your shop, you can rollback to the previous database and files. Use this function if your theme or an essential module is not working correctly. "<br> ** A button "Rollback" |
| * Click on "-- choose a backup to restore --"<br> * Click on the back up <br> * Click on the button "Rollback" | * You should have a back up with the name "v8.1.5_[the date of today in aaaammdd][The hours of the upgrade with hhmmss] [something else]" in a droplist<br> * The drop list should be lowed and the button Delete should appear <br> * The Rollback should be launched and when it's finished you should have the green notification with "<br>Your restoration is complete<br>Before continuing with your tasks, please review the following checklist to ensure smooth operation after recent recovery." |
| Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events?mp_source=intro-skip#AT81DAExGY1S" | You should see : <br> * Upgrade Launched<br> * Upgrade succeeded<br> * Rollback launched<br> * Rollback succeeded <br><br>With the same Distinct ID |
