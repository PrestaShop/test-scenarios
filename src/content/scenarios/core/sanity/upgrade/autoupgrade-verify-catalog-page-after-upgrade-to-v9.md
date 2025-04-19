---
title: "Autoupgrade - Verify catalog page after upgrade to V9"
weight: 2
---

# Autoupgrade - Verify catalog page after upgrade to V9
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9500

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| * Go to Catalog > Product<br> * Clic on the Hummingbird notebook <br> * Clic on Details tab <br> * Change the "GTIN (EAN, JA, ITF or UCC code) and Click on Save and Publish | * The product page should be displayed with all the different product<br> * The product page of "Hummmingbird notebook" should be displayed<br> * You should have the possibility  to change the Reference / Features / Attached Files / Display condition on product page / Customization<br> * You should have a red notification under GTIN :"12345678901234" is invalid. This value is too long. It should have 13 character or less. |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the 1-Click Upgrade page<br> * On Expert mode part, select the "Local archive" and click on "Save" button | * You should see the configuration page of the module <br> * You should have a blue notification with "You need to enter the version number associated with the archive." |
| * Put a develop zip and xml on [yourshop]/admin-dev/autoupgrade/download (you can find the last develop on [https://nightly.prestashop-project.org/)] <br> * Click on save button | * You should have a blue notification with "Configuration successfully updated. This page will now be reloaded and the module will check if a new version is available." <br> * You should have the version "N/A" next to "Latest official version for archive channel :" |
| Launch upgrade | Upgrade is launched |
| Refresh the page. Check logged in status | User is logged out |
| Go to the BO login page. Log in with admin user. Check shop version | Admin user is connected. Version is upgraded |
| Go to the General Parameters > Maintenance" page. Put the shop out of maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is deactivated |
| Go to the FO homepage | Home page is displayed correctly |
| Go to Catalog > Stock | The Stock page should be well displayed with all the different product on it |
| * Go to Catalog > Product<br> * Clic on the Hummingbird notebook <br> * Clic on Details tab <br> * Change the "GTIN (EAN, JA, ITF or UCC code) and Click on Save and Publish | * The product page should be displayed with all the different product<br> * The product page of "Hummmingbird notebook" should be displayed<br> * You should have the possibility  to change the Reference / Features / Attached Files / Display condition on product page / Customization<br> * You should have a green notification with "Successful update" |
| * Change the "GTIN (EAN, JA, ITF or UCC code) and Click on Save and Publish | * You should have a red notification under GTIN :"123456789012345" is invalid. This value is too long. It should have 14 character or less. |
