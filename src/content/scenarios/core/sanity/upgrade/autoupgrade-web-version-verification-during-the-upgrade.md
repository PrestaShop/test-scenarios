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
| Install A fresh 8.0.4 with php 8.1 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Manager " page" | Module Manager page is displayed correctly |
| * Search for the "update assistant" module.<br> * Install it | * Update assistant should have "The Update Assistant module helps you backup, update and restore your PrestaShop store. With just a few clicks, you can move to the latest version of PrestaShop with confidence." as description <br> * Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the update assistant page | * You should see the configuration page of the module with a little problem on UI |
| * Open a terminal in your folder [yourshop]/modules/autoupgrade<br> * launch the command : <br>{code:java}<br>cd _dev{code}<br><br> * Launch the command :<br>{code:java}<br>npm install{code}<br><br> * Launch the command :<br>{code:java}<br>npm run vite:build{code}<br><br> * Launch the command :<br>{code:java}<br>cd ..{code}<br><br> * Launch the command :<br>{code:java}<br>composer install{code} | * A terminal is open in the right folder <br> * You should be in the folder [yourshop]/modules/autoupgrade/_dev<br> * Npm should be installed in your folder with this last word : "Run `npm audit` for details."<br> * The terminal should say some files have been modified <br> * You should return on the folder [yourshop]/modules/autoupgrade/<br> * You terminal will say "Nothing to install, update or remove" |
| * Return on the "Updrate Assistant" page | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore should be disabled except if you have a backup <br> ** A button "Get started" disabled |
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get started" should be Enabled |
| Click on the button "Get started" | * You should have an image that show the load on the button get started until the load of the next page <br> * You should be on a new page named "Version choice"<br> * You should have a stepper on top of the page set on "1 : Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** Prestashop 8.2.1[Minor version] With description "The maximum version of PrestaShop to which you can update your store, based on its PHP version. " and a button "Release note" <br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| * Clic on the "Next" Button | * You should be on the "Update option" page with : <br> ** The stepper set on 2 : Update options <br> ** 3 checkbox named " Deactivate non-native modules ",  "Regenerate email templates" , " Disable all overrides "  with details about them under there name <br> ** "Next" Button enabled |
| Clic on the "Next" Button | * You should be on the "Back up your store" page with : <br> ** The stepper should be on 3 : Backup<br> ** sub title "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Checkboxe : "Include images in your backup"<br> ** 2 buttons : "Update without backup" and "launch backup" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| * Click on "Start Backup" | * You should be on the page "Backup" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| * Click on the Update assistant button on the sideboard | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore shouldn't be disabled if you have a backup <br> ** A button "Get started" disabled |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * You should have a loadbar started <br> * You should have an icon that turn clockwise |
| * During the installation, go to [yourShop]/[AdminDirectory]/autoupgrade/tmp folder<br> * Open one of this folder | * You should have three folder: files, modules, release and Two files : index.php and key.php<br> * It should have some files that'll be created during the installation |
| * During the installation, do a right click to click on inspect<br> * Clic on Network <br> * Click on a Post<br> * Click on Response on the Right <br> * In the "Filter properties", put "progressPercentage" and click on the arrow next to "Next param ..." | * You should see all the different section of the website<br> * You should see the different Post/Get In real time <br> * On the right you should see the Headers displayed<br> * You should see all the different information send on the POST <br> * You should see a parameters name : "progressPercentage" with a integer next to it |
| Clic on another POST | You should see another progressPercentage. If the Post is on top of the previous, it should be lower. If it's lower than the previous one, it should be higher |
| Close the inspect mode | You should see your upgrade with a higher resolution |
| Wait until the upgrade of modules | * The logs should say : "Module checked" instead of module update<br> * When it's the turn of modules, they should be cutted in /x different part of upgrade where x is the different part they need to upgrade<br> * After the upgrade of module, You should have the green notification for the end of the upgrade |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade folder<br> * Wait until the end of the upgrade | * You should have a config.var on the folder<br> * The config.var should be deleted |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade/logs folder | * You should have an update and a backup log txt on this folder |
| Open the update.txt | * It should have none word betwen "[" "]" like warning or anything else on this files <br> * It should have non "scandir" on this files |
