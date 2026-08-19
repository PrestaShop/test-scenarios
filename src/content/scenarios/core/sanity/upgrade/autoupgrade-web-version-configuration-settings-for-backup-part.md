---
title: "Autoupgrade - Web Version - Configuration settings for backup part "
weight: 21
---

# Autoupgrade - Web Version - Configuration settings for backup part 
## Details
* **Component** : Core
* **Status** : [TEST] IN PROGRESS
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-5648

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop {test-param}last version recommended enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Radio button : PrestaShop {test-param}last version enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop {test-param}last version recommended enabled{test-param} "<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> * <br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules"(enabled), "Regenerate email templates"(enabled) , "Disable all overrides" (disabled)  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on Toggle "Include images in your backup" | Include image in your backup is disabled |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files and database,will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to Catalog > product | All product from the shop is displayed |
| Clic on Customizable mug | Description tab is displayed from Customizable mug |
| Delete the current images of the product and add another one | There is only one image for customizable mug |
| Go to Catalog > product | Customizable mug have a new thumbnail |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Restore from a backup" | * "Restore from a backup" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Backup Selection" page is displayed : <br><br> ** Stepper on step one ("1 : Backup Selection")<br> ** Paragraph with "Select the backup you want to restore"<br> ** Droplist with selected " MM/DD/AA,HH/MM [AM/PM] - V8.0.3_AAAAMMDD-HHMMSS-[random number] <br> ** 2 CTA : "Delete selection" and "Restore" |
| Click on CTA Restore | Modal "Restore from a backup?" is displayed with :<br> * a text description : You are about to restore *[PrestashopVersion]* using the backup from *[MM/DD/AA, HH/MM].*  <br> * 2 CTA : "Cancel" and "Restore"(bg:blue) |
| Click on blue CTA Restore | The page "Restore" is displayed :<br><br>* Stepper on step 2 ("Restore")<br>* Loading bar with the current process <br>* Details of the current process are listed |
| Wait until the end of the restore | The page "Post-restore checklist" is displayed : <br><br> * Stepper on step 3 ('Post-restore")<br> * Success Alert : "Your restoration is complete"<br> * Subtitle : "Next step" and Troubleshooting <br> * A link : "Download restore logs"<br> * 2 CTAs : "Exit" and " Open developer documentation" |
| Click on the CTA "Exit" | Redirection to "[admin_folder]/index" |
| Go to Catalog > product | Customizable mug can have it previous images or an undefines images |
| Do a hard refresh of the page | Customizable mug thumbnail is an undefine images |
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
