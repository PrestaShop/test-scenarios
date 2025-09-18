---
title: "Autoupgrade - Web Version - Verification during backup part"
weight: 15
---

# Autoupgrade - Web Version - Verification during backup part
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11315

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 1.7.8.9 on php 7.4 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed<br> * Modale "Welcome to your shop" displayed |
| Click on the cross of the modale. | * Modale is closed<br> * Dashboard is displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modal "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modal is closed<br> * Module manager page is displayed |
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
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.4.xx<br> * Radio button : PrestaShop 8.2.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
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
