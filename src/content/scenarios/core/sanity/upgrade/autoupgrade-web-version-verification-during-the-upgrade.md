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
| Install a fresh 8.0.4 with php 8.1 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modal "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modal is closed<br> * Module manager page is displayed |
| Refresh the page. | Page is refreshed. |
| Search for "Update". | Update Assistant is displayed. |
| Check for the version. | * The version is the latest in prod. <br><br> * The lastest version in prod is displayed because it is the version available on the marketplace. |
| Go to the Shop Parameters > General. | General > Preferences page is displayed on the "General" tab. |
| Click on the "Maintenance" tab. | "Maintenance" tab is displayed. |
| Click on the toggle "Enable store" | Toggle is in "No" status. |
| Click on the CTA "Add my IP". | IP address is filled. |
| Click on the CTA "Save". | Shop is in maintenance mode. |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> ** Radio button : PrestaShop 1.7.8.xx [Patch version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| * Click on the CTA "Start Backup". | * The "Backup" page is displayed :<br><br> ** loading bar with the current process <br> ** details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Launch upgrade | * Upgrade is launched<br> * you shouldn't have the rollback option durring the installation<br> * You should have a loadbar started <br> * You should have an icon that turn clockwise |
| * During the installation, go to [yourShop]/[AdminDirectory]/autoupgrade/tmp folder<br> * Open one of this folder | * You should have three folder: files, modules, release and Two files : index.php and key.php<br> * It should have some files that'll be created during the installation |
| * During the installation, do a right click to click on inspect<br> * Clic on Network <br> * Click on a Post<br> * Click on Response on the Right <br> * In the "Filter properties", put "progressPercentage" and click on the arrow next to "Next param ..." | * You should see all the different section of the website<br> * You should see the different Post/Get In real time <br> * On the right you should see the Headers displayed<br> * You should see all the different information send on the POST <br> * You should see a parameters name : "progressPercentage" with a integer next to it |
| Clic on another POST | You should see another progressPercentage. If the Post is on top of the previous, it should be lower. If it's lower than the previous one, it should be higher |
| Close the inspect mode | You should see your upgrade with a higher resolution |
| Wait until the upgrade of modules | * The logs should say : "Module checked" instead of module update<br> * When it's the turn of modules, they should be cutted in /x different part of upgrade where x is the different part they need to upgrade<br> * After the upgrade of module, You should have the green notification for the end of the upgrade |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade folder<br> * Wait until the end of the upgrade | * You should have a config.var on the folder<br> * The config.var should be deleted |
| * Go to [yourShop]/[AdminDirectory]/autoupgrade/logs folder | * You should have an update and a backup log txt on this folder |
| Open the update.txt | * It should have none word betwen "[" "]" like warning or anything else on this files <br> * It should have non "scandir" on this files |
