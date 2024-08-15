---
title: "Autoupgrade - Report after a fail of autoupgrade"
weight: 10
---

# Autoupgrade - Report after a fail of autoupgrade
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9680

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to [Yourshopfolder] > admin_folder > autoupgrade<br> * Create a folder named "modules" and enter on it <br> * put the folder in attachment in this files | * You should have only the folder <br> ** backup<br> ** download<br> ** latest<br> ** tmp<br> * You should have none files in it <br> * You should have ps_banner on the files |
| * Go to BO > 1-Click Upgrade page | * You should see the configuration page of the module |
| Launch upgrade | * Upgrade is launched<br> * Your upgrade should display an error when the modules are upgrade<br> * The button "Reports a bug" should be displayed |
| * Clic on "Report a bug" <br> * Setup your answer and clic on "Send a bug report"<br> * Go to "https://prestashop.sentry.io/user-feedback/?project=4507254110552064" | * A new modal "Give feedback" should be displayed with "Email" and "Description" field and "Cancel" and "Send a bug report" button <br> * The field Email shouldn't have Email in grey in it and Description field doesn't have "Give us details about the error" in grey <br> * You should see all the different error send to sentry |
| *On the rollback part*<br> * Click on "-- choose a backup to restore --"<br> * Click on the back up <br> * Click on the button "Rollback" | * You should have a back up with the name "v8.1.5_[the date of today in aaaammdd][The hours of the upgrade with hhmmss] [something else]" in a droplist<br> * The drop list should be lowed and the button Delete should appear <br> * The Rollback should be launched and when it's finished you should have the green notification with "<br>Your restoration is complete<br>Before continuing with your tasks, please review the following checklist to ensure smooth operation after recent recovery." |
| Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events?mp_source=intro-skip#AT81DAExGY1S" | You should see : <br> * Upgrade Launched<br> * Upgrade failed<br> * Rollback launched<br> * Rollback succeeded <br><br>With the same Distinct ID |
