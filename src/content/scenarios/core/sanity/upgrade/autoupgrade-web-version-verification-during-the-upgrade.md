---
title: "Autoupgrade - Web Version - Verification during the upgrade"
weight: 5
---

# Autoupgrade - Web Version - Verification during the upgrade
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-9698

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the update assistant page | * You should see the configuration page of the module |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * You should have a loadbar started <br> * You should have an icon that turn clockwise |
| * During the installation, go to [yourShop]/[AdminDirectory]/autoupgrade/tmp folder<br> * Open one of this folder | * You should have three folder: files, modules, release and Two files : index.php and key.php<br> * It should have some files that'll be created during the installation |
| * During the installation, do a right click to click on inspect<br> * Clic on Network <br> * Click on a Post<br> * Click on Response on the Right <br> * In the "Filter properties", put "progressPercentage" and click on the arrow next to "Next param ..." | * You should see all the different section of the website<br> * You should see the different Post/Get In real time <br> * On the right you should see the Headers displayed<br> * You should see all the different information send on the POST <br> * You should see a parameters name : "progressPercentage" with a integer next to it |
| Clic on another POST | You should see another progressPercentage. If the Post is on top of the previous, it should be lower. If it's lower than the previous one, it should be higher |
| Close the inspect mode | You should see your upgrade with a higher resolution |
| Wait until the upgrade of modules | * The logs should say : "Module checked" instead of module update<br> * When it's the turn of modules, they should be cutted in /x different part of upgrade where x is the different part they need to upgrade<br> * After the upgrade of module, You should have the green notification for the end of the upgrade |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade folder<br> * Wait until the end of the upgrade | * You should have a config.var on the folder<br> * The config.var should be deleted |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade/logs folder | * You should have an update and a backup log txt on this folder |
| Open the update.txt | * It should have none word betwen "[" "]" like warning or anything else on this files <br> * It should have non "scandir" on this files |
