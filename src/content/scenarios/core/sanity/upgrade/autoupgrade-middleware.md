---
title: "Autoupgrade - Middleware"
weight: 17
---

# Autoupgrade - Middleware
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-10778

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
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get starder" should be Enabled |
| Click on the button "Get started" | * You should have an image that show the load on the button get started until the load of the next page <br> * You should be on a new page named "Version choice"<br> * You should have a stepper on top of the page set on "1 : Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** Prestashop 8.2.1[Minor version] With description "The maximum version of PrestaShop to which you can update your store, based on its PHP version. " and a button "Release note" <br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Put a zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have a zip, an xml and an index.php files in your folder |
| * Put another zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have two zip, two xml and an index.php files in your folder |
| * Reload the update page | * It should have the local channel loaded |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the same page : Update "Version Choice" |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the same page : "Update Option" |
| Click on the previous button of your bowser | You should be redirected to Update "Version Choice" page with the online channel set |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-update-options" | You should be redirected to the same page : "Update Option" |
| * Delete the zip or the xml linked to version aimed from [yourshop]/[adminfolder]/autoupgrade/download<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with local channel set and with one of the xml or zip |
