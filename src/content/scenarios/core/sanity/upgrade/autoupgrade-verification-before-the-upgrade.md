---
title: "Autoupgrade - Verification before the upgrade"
weight: 12
---

# Autoupgrade - Verification before the upgrade
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9699

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
| Go to your folder [yourshopname_folder] > module > Autoupgrade > Upgrade | Some files should be named upgrade [...].php instead of install[...].php |
| * Go to your folder [yourshopname_folder] > module > Autoupgrade > classes > Task > Upgrade > Download.php<br> * At line 49, in "public function run", put "throw new Exception("Brique");" and save the folder | * You should see the diffenrent fonction in this php files<br> * The files should be saved |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * at the "Step download", you should have an exception |
| * Click on 1-click Upgrade <br> * Click on "Leave the page" | * A modal should appear to ask if you really want to leave the page <br> * You should be redirected to 1-Click Upgrade |
| Return at the Download.php files and replace "throw new Exception("Brique");" by "exit(0);" and save | The files should be saved |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * You quickly have an error that showed : "Javascript error (parseJSON) detected for action [download]." |
| * Click on 1-click Upgrade <br> * Click on "Leave the page" | * A modal should appear to ask if you really want to leave the page <br> * You should be redirected to 1-Click Upgrade |
| Return at the Download.php files and replace "exit(0);" by "while(true) {}" and save | The file should be saved |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * After a long time, you should have an AJAX error about passing time |
| * Click on 1-click Upgrade <br> * Click on "Leave the page" | * A modal should appear to ask if you really want to leave the page <br> * You should be redirected to 1-Click Upgrade |
| Return at the Download.php files and delete "while(true) {}" and save | The file should be saved |
| * Go to your [admin_folder_name]> autoupgrade <br> * open a terminal in this folder<br> * On the terminal, launch "set chmod 000" | * You should have "backup", "download", "latest" and "tmp" folder <br> * A new terminal appears ! <br> * you should have a new line to enter |
