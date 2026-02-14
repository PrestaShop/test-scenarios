---
title: "Autoupgrade - Web Version - Verification during the upgrade"
weight: 21
---

# Autoupgrade - Web Version - Verification during the upgrade
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-12781

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
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop {test-param}last version recommended enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Radio button : PrestaShop {test-param}last version enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop {test-param}last version recommended enabled{test-param} "<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "{color:#0747a6}_cutest rocket_ {color}Start update". | The page "Update" is displayed :<br> * Stepper on step 4 ("Update")<br> * loading bar with the current process <br> * details of the current process are listed |
| During the installation, go to folder [yourShop]/[AdminDirectory]/autoupgrade/tmp | There are three folder:<br> * files<br> * modules<br> * release<br><br>And two files :<br> * index.php <br> * key.php |
| Open folder "files" | Some files we'll be created during the installation |
| During the installation, do a right click and click on inspect | all the different section of the website are displayed on a list |
| Clic on tab Network | Different Post/Get are displayed one at a time |
| Click on a "Post" | On the right, the Headers is displayed |
| Click on "Response" on the Right | different information send on the POST are displayed |
| In the "Filter properties", put "progressPercentage" and click on the arrow next to "Next param ..." | a parameters name : "progressPercentage" with a integer next to it is displayed |
| Clic on another POST | another progressPercentage is displayed |
| Close the inspect mode | your upgrade is displayed with a higher resolution |
| Go to folder [yourShop]/[AdminDirectory]/autoupgrade | there is a config.var on the folder |
| Wait until the end of the upgrade | The config.var is deleted |
| Go to folder [yourShop]/[AdminDirectory]/autoupgrade/logs | There are a YYYY-MM-DD-HHMMSS-update.txt and a YYYY-MM-DD-HHMMSS-backup.txt  on this folder |
| Open the YYYY-MM-DD-HHMMSS-update.txt | * none word betwen "*[" "]*" like warning or anything else are on this files <br> * none "*{color:#de350b}scandir{color}*" are on this files |
| Verify the step order | Step are ordered like : <br> * Step UpdateInitialization<br> * Step Download<br> * Step Unzip<br> * Step DownloadModules<br> * Step UpdateFilles<br> * Step UpdateDatabase<br> * Step UpdateModules<br> * Step CleanDatabase<br> * Step UpdateComplete |
| Verify step DownloadModules | Modules update have : <br>" have been fetched from [https://api.addons.prestashop.com/] "<br><br>or <br><br>"have been fetched from https://api.prestashop-project.org/" |
| Verify the step : Step UpdateModules | * "*{color:#00875a}Module is up to date{color}*" is displayed instead of<br>"*{color:#de350b}Module updated{color}*"  <br> * When modules is updated,, they are cutted in /*{color:#0747a6}x{color}* different part of upgrade. |
