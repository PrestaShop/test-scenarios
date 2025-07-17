---
title: "Autoupgrade - Middleware"
weight: 9
---

# Autoupgrade - Middleware
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-10778

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
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get starder" should be Enabled |
| Click on the button "Get started" | * You should have an image that show the load on the button get started until the load of the next page <br> * You should be on a new page named "Version choice"<br> * You should have a stepper on top of the page set on "1 : Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** Prestashop 8.2.1[Minor version] With description "The maximum version of PrestaShop to which you can update your store, based on its PHP version. " and a button "Release note" <br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Put a zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have a zip, an xml and an index.php files in your folder |
| * Put another zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have two zip, two xml and an index.php files in your folder |
| * Reload the update page | * It should have the local channel loaded |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the same page : Update "Version Choice" |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the page : "Update Option" |
| Click on the previous button of your bowser | You should be redirected to Update "Version Choice" page with the online channel set |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the same page : "Update Option" |
| * Delete the zip or the xml linked to version aimed from [yourshop]/[adminfolder]/autoupgrade/download<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with local channel set and with one of the xml or zip only |
| * Delete the "update_config.var" files  from [yourshop]/[adminfolder]/autoupgrade<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with none radio button selected |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the same page : Update "Version Choice" |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| Click on the previous button of your bowser twice | You should be redirected to Update "Version Choice" page with the online channel set |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| * Delete the "update_config.var" files  from [yourshop]/[adminfolder]/autoupgrade<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with none radio button selected |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| * Delete the zip or the xml linked to version aimed from [yourshop]/[adminfolder]/autoupgrade/download<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with none channel set because local channel aren't showed |
| Do the process of an upgrade until the end of the upgrade | You should have be on a new page with <br> * title : " Post-update checklist "<br> * Stepper should be on "5 : Post-update"<br> * A green notification : "Your store is up to date"<br> * Sub title : "Next step" and Troubleshooting <br> * A link : "Download update logs"<br> * 2 button : "Exit" and " Open developer documentation" |
| * Reload the page<br> * Set up your mail and password<br> * on the link of the page, replace "route=home-page" by "route=update-page-post-update" | * Prestashop should ask you to be loged in <br> * You should be redirected to the "Welcome to PrestaShop Update Assistant" page <br> * You should be redirected to the "Post-update checklist" |
| * Delete the last "[...]-update.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the "Welcome to PrestaShop Update Assistant" page |
| Do the process of an upgrade until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| * Click on the Update assistant on the sideboard<br> * Click on Restore from a backup<br> * Click on Get started | * You should be redirected to the "Welcome to PrestaShop Update Assistant" page<br> * The radio button should be checked next to the restore part and the button Get started should be enabled <br> * You should be redirected to the "Backup selection" page |
| * Click on the drop list<br> * Select the second backup<br> * Reload th page | * You should have two backup on the list <br> * The drop list should close and the name of the second backup should be on the drop list <br> * You should be redirected to "Backup selection" with the second backup on the drop list |
| * Delete the "restore_config.var" files  from [yourshop]/[adminfolder]/autoupgrade<br> * Reload the current page | * The file should be deleted<br> * You should be redirected to "Backup selection" with the first backup on the drop list |
| on the link of the page, replace "route=restore-page-backup-selection" by "route=restore-page-restore" | You should be redirected to the page : "Backup selection" |
| * Click on the drop list<br> * Select the second backup<br> * On the link of the page, replace "route=restore-page-backup-selection" by "route=restore-page-restore" | * You should have two backup on the list <br> * The drop list should close and the name of the second backup should be on the drop list <br> * You should be redirected to the page : "Restore" page |
| * Wait until the end of the Restore<br> * Reload the page | * You should be on the "Post-restore checklist" page<br> * You still be on the "Post-restore checklist" page |
| * Delete the last "[...]-restore.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the "Welcome to PrestaShop Update Assistant" page |
| * Click on Restore from a backup<br> * Click on Get started | * The radio button should be checked next to the restore part and the button Get started should be enabled <br> * You should be redirected to the "Backup selection" page |
| Delete the two different backup | You should have two different modal :<br> * One to inform you that you will delete the backup<br> * The other one to inform you that you will delete the backup and you'll be redirected to the welcome page<br><br>After the deletion, you'll be redirected to the "Welcome to PrestaShop Update Assistant" page |
| On the link of the page, replace "route=home-page" by "route=restore-page-backup-selection" | You should be redirected to "Welcome to PrestaShop Update Assistant" page |
