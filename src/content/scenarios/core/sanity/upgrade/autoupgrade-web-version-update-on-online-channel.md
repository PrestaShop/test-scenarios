---
title: "Autoupgrade - Web Version - Update on online channel"
weight: 9
---

# Autoupgrade - Web Version - Update on online channel
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-10136

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 1.7.8.9 on php 7.1 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed<br> * Modale "Welcome to your shop" displayed |
| Click on the cross of the modale. | * Modale is closed<br> * Dashboard is displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modale "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modale is closed<br> * Module manager page is displayed |
| Refresh the page. | Page is refreshed. |
| Search for "Update". | Update Assistant is displayed. |
| Check for the version. | The version is the latest in prod. <br><br>The lastest version in prod is displayed because it is the version available on the marketplace. |
| Go to the Shop Parameters > General. | General > Preferences page is displayed on the "General" tab. |
| Click on the "Maintenance" tab. | "Maintenance" tab is displayed. |
| Click on the toggle "Enable store" | Toggle is in "No" status. |
| Click on the CTA "Add my IP". | IP address is filled. |
| Click on the CTA "Save". | Shop is in maintenance mode. |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> * Radio button : PrestaShop 1.7.8.xx [Patch version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Change the php version from 7.1 to 7.4.<br><br> <br><br>{color:#ff8b00}_(find a way to explain how)_{color} | Php version is modified. |
| Reload the page "Version choice". | * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.4.xx<br> * Radio button : PrestaShop 8.2.x [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" |
| Click on the link "Release note". | A new tab is opened "PrestaShop 8.2.x Is Available. The first patch for branch 8.2.x is available". |
| Close this tab. | The module page is displayed on "Version choice" (nothing changed). |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Reload the page. | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Go to the folder " [yourshop]/[admin_folder]/autoupgrade and delete the file "update_config.var". | The file is deleted. |
| Reload the page "Version choice". | The "Version choice" page is reload with no radio button selected. |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Modify any file from the folder of PrestaShop and save it. | File modified and modifications saved. |
| Reload the page. | Checking requirement is launched then is finished :<br> * Warning is displayed : " Some core files have been altered or removed. Any changes made to these files may be overwritten during the update. [See the list of changes|http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=fbdd55ff78e286be12d8bbe287cd7bef&route=update-page-version-choice#update-step-version-choice-core-tempered-files-dialog]. " <br> * CTA "Next" is enabled |
| Click on the link "See the list of changes". | Modale "List of core alterations" is displayed (skeleton while loading) with the list of files changed. The modified file is listed. |
| Close the modal. | Modal is closed. |
| Click on the CTA "Check requirement again". | Checking requirement is launched then is finished :<br> * Warning is displayed : " Some core files have been altered or removed. Any changes made to these files may be overwritten during the update. [See the list of changes|http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=fbdd55ff78e286be12d8bbe287cd7bef&route=update-page-version-choice#update-step-version-choice-core-tempered-files-dialog]. " <br> * CTA "Next" is enabled |
| Click on the CTA "Next". | "Update options" page is displayed :  <br> * Stepper on step 2 ("Update options")<br> * 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> * CTA "Next" enabled |
| Click on the CTA "Next". | "Back up your store" page is displayed :  <br> * Stepper on step 3 ("Backup")<br> * Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> * Toggle : "Include images in your backup" on Yes status<br> * 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the cross or elsewhere on the module. | The modal is closed and the page "Back up your store" is displayed. |
| Click on the CTA "Update without backup" | Modal "Start update?" is displayed : <br> * Text : "Before starting the update, make sure you have a complete and recent backup of your store (database, files, and images)."<br> * 2 CTAs : "Cancel" and "Start backup"<br> * A Checkbox "I have made my own backup and can restore it manually if a problem occurs."<br> * 2 CTAs : "Cancel" (enabled) and "Start update" (disabled) |
| Check the checkbox "I have made my own backup (...)". | The CTA "Start update" is enabled. |
| Click on the cross or elsewhere on the module. | The modal is closed and the page "Back up your store" is displayed. |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup. | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Click on the CTA "Download backup logs". | The download of the YYYY-MM-DD-HHMMSS-backup.txt is launched by the browser. |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "Cancel". | The modal is closed. |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "{color:#0747a6}_cutest rocket_ {color}Start update". | The page "Update" is displayed :<br> * Stepper on step 4 ("Update")<br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the update. | The page "Post-update checklist" is displayed : <br> * Stepper on step 5 ("Post-update")<br> * Success alert : "Your store has been updated to PrestaShop version 8.2.x"<br> * Subtitles : "Next step" and "Troubleshooting"<br> * Two links : "Download update logs" and "Module Manager"<br> * 2 CTAs : "Exit" and "Open developer documentation" |
| Click on the link "Download update logs". | The download of the YYYY-MM-DD-HHMMSS-update.txt is launched by the browser. |
| Click on the CTA "Open developper documentation". | A new tab is opened : "Post-update checklist". |
| Close the tab. | The module tab is displayed. |
| Click on the link "Module Manager". | The modal "Access to the Module Manager?" is displayed :<br> * Text : "To reach the module manager, you will be logged out of your session and will have to log in again. Do you want to continue?"<br> * Two CTAs : "Cancel" and "Go to Module Manager" |
| Click on :<br> * the CTA "Cancel"<br> * OR on the cross<br> * OR outside to the Modal<br> * OR do escape from the keyboard | The modal is closed. |
| Click on the CTA "Exit". | Redirection to "[admin_folder]/index" (BO login page). |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed |
