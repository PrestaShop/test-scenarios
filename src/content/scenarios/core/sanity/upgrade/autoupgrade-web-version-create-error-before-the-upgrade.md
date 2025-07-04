---
title: "Autoupgrade - Web Version - Create error before the upgrade"
weight: 6
---

# Autoupgrade - Web Version - Create error before the upgrade
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-9699

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
| Go to the folder [yourshopname_folder] > modules > autoupgrade > upgrade. | Files named upgrade [...].php are present *and +none+ instead of install[...].php.* |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > Task > Update > Download.php. | File is opened. |
| In the function "public function run", add "throw new Exception("Brique");" and save the folder. | File saved with modifications. |
| * Click on the Update assistant button on the sideboard | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore shouldn't be disabled if you have a backup <br> ** A button "Get started" disabled |
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get started" should be Enabled |
| Click on the button "Get started" | * You should have an image that show the load on the button get started until the load of the next page <br> * You should be on a new page named "Version choice"<br> * You should have a stepper on top of the page set on "1 : Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** Prestashop 8.2.1[Minor version] With description "The maximum version of PrestaShop to which you can update your store, based on its PHP version. " and a button "Release note" <br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| * Clic on the "Next" Button | * You should be on the "Update option" page with : <br> ** The stepper set on 2 : Update options <br> ** 3 checkbox named " Deactivate non-native modules ",  "Regenerate email templates" , " Disable all overrides "  with details about them under there name <br> ** "Next" Button enabled |
| Clic on the "Next" Button | * You should be on the "Back up your store" page with : <br> ** The stepper should be on 3 : Backup<br> ** sub title "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Checkboxe : "Include images in your backup"<br> ** 2 buttons : "Update without backup" and "launch backup" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| * Click on "Start Backup" | * You should be on the page "Backup" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "{color:#0747a6}cutest rocket {color}Start update". | Update is launched but the update fail :<br> * Yellow warning alert : "Update failed", description : "Your store may not work properly anymore. Select the backup you want to use and restore it to avoid any data loss.", CTA "Restore"<br> * At "Step dowload" 3 errors :<br> ## "Exception: Brique"<br> ## "It seems there was an issue with the server. This type of error usually happens when [...]"<br> ## " HTTP request failed. Type: ERR_BAD_RESPONSE - HTTP Code: 500"<br> * Composant "Error Summary" with the 3 errors with a link "See error" for each<br> * 3 CTAs : "Download update logs", "Send error report" and "Restore" |
| Click on the link "See error" of the first error "Exception: Brique". | The error in the list is displayed and highlighted in a darker grey for 2 seconds. |
| Click on the CTA "Download update logs". | The download of the YYYY-MM-DD-HHMMSS-update.txt is launched by the browser. |
| Click on the CTA "Send error report". | Modal "Send error report?" is displayed :<br> * Title : "Send error report?"<br> * Text : "Help us improve the module by sending us this error report. For your information, the logs will be attached with your message. You can add more details in the description if you wish."<br> * Link : "Learn more about your data and your rights"<br> * 3 fields : <br> ** "Error message" (disabled)<br> ** "Email (optional)" (enabled)<br> ** "Description (optional)" (enabled)<br> * 2 CTAs : "Cancel" and "Send error report" |
| Click on the link "Learn more about your data and your rights". | Page "Data transparency" is displayed in a new tab. |
| Close the tab. | Module tab is displayed. |
| Click on the "Email (optional)" field. | The "Email (optional)" field is highlighted. |
| Click on the "Description (optional)" field. | * The "Email (optional)" field is not highlighted anymore<br> * The "Description (optional)" field is highlighted. |
| Click on :<br> * the cross<br> * or the CTA "Cancel"<br> * or outside the modal. | The modal is closed. |
| Click on the CTA "Send error report". | Modal "Send error report?" is displayed :<br> * Title : "Send error report?"<br> * Text : "Help us improve the module by sending us this error report. For your information, the logs will be attached with your message. You can add more details in the description if you wish."<br> * Link : "Learn more about your data and your rights"<br> * 3 fields : <br> ** "Error message" (disabled)<br> ** "Email (optional)" (enabled)<br> ** "Description (optional)" (enabled)<br> * 2 CTAs : "Cancel" and "Send error report" |
| * Fill "Email (optional)"<br> * Fill "Description (optional)" | Fields filled. |
| Click on the CTA "Send error report". | Modal is closed. |
| Open the link on a new tab : [https://prestashop.sentry.io/feedback/?feedbackSlug=autoupgrade-module%3A6504514401&mailbox=ignored&project=4507254110552064&referrer=feedback_list_page] | Sentry is opened on the page "User feedback" :<br> * The report sent is listed |
| Click on the report (user feedback). | The details of the error are displayed. |
| Open the link on a new tab : [https://eu.mixpanel.com/project/2828312/view/3362352/app/events#KoHua7f3PrJZ] | The error is listed with the same Anonymous ID and php written like "X.X.XX". |
| Close the 2 tabs. | Module tab is displayed. |
| Reload the module page. | Update is launched but the update fail :<br> * Yellow warning alert : "Update failed", description : "Your store may not work properly anymore. Select the backup you want to use and restore it to avoid any data loss.", CTA "Restore"<br> * At "Step dowload" 3 errors :<br> ## "Exception: Brique"<br> ## "It seems there was an issue with the server. This type of error usually happens when [...]"<br> ## " HTTP request failed. Type: ERR_BAD_RESPONSE - HTTP Code: 500"<br> * Composant "Error Summary" with the 3 errors with a link "See error" for each<br> * 3 CTAs : "Download update logs", "Send error report" and "Restore" |
| Click on the CTA "Restore" in the yellow warning alert. | "Backup Selection" page is displayed. |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > Task > Update > Download.php. | File is opened. |
| In the function "public function run", modify "throw new Exception("Brique");" by " exit(0) ";  and save the folder. | File saved with modifications. |
| * Click on the Update assistant button on the sideboard | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore shouldn't be disabled if you have a backup <br> ** A button "Get started" disabled |
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get started" should be Enabled |
| Click on the button "Get started" | * You should have an image that show the load on the button get started until the load of the next page <br> * You should be on a new page named "Version choice"<br> * You should have a stepper on top of the page set on "1 : Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** Prestashop 8.2.1[Minor version] With description "The maximum version of PrestaShop to which you can update your store, based on its PHP version. " and a button "Release note" <br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| * Clic on the "Next" Button | * You should be on the "Update option" page with : <br> ** The stepper set on 2 : Update options <br> ** 3 checkbox named " Deactivate non-native modules ",  "Regenerate email templates" , " Disable all overrides "  with details about them under there name <br> ** "Next" Button enabled |
| Clic on the "Next" Button | * You should be on the "Back up your store" page with : <br> ** The stepper should be on 3 : Backup<br> ** sub title "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Checkboxe : "Include images in your backup"<br> ** 2 buttons : "Update without backup" and "launch backup" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| * Click on "Start Backup" | * You should be on the page "Backup" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on get started and follow the different step until the update step. | * Upgrade is launched<br> * You quickly only have two red cross error : <br><br> ** It looks like there is no data received from the server. This can happen if: The server is temporarily unavailable. There's an issue with the network or connection.<br> ** HTTP request failed. Type: APP_ERR_RESPONSE_EMPTY - HTTP Code: 200 |
| Click on the CTA "Restore" (the one next to the CTA "Send error report"). | "Backup Selection" page is displayed. |
| Click on the CTA "Delete selection". | The modal "Delete backup" is displayed : <br><br>- text : "You are about to delete the *V8.0.4_YYYYMMDD-HHMMSS-randomnumber* backup made on *M/D/YY, H:MM A/PM*." |
| Click on the CTA "Delete". | Modal "Delete backup" is closed. |
| Click on the CTA "Delete selection" (with only one backup left). | The modal "Delete backup" is displayed : <br> - text : "You are about to delete the *V8.0.4_YYYYMMDD-HHMMSS-randomnumber* backup made on *M/D/YY, H:MM A/PM*. As it's your only backup, you will be redirected to the module's home page." |
| Click on the CTA "Delete". | Modal "Delete backup" is closed and "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > Task > Update > Download.php. | File is opened. |
| In the function "public function run", modify "exit(0);" by "while(true) {}" and save the folder. | File saved with modifications. |
| Launch a update without backup.<br><br>_{color:#ff8b00}créer test puis faire un appel ici.{color}_ |  |
| Reload the page during the update. | Navigateur modal is displayed : <br> * "This page is asking you to confirm that you want to leave — information you’ve entered may not be saved."<br> * 2 CTAs : "Stay on Page" and "Leave Page" |
| Click on the CTA "Leave Page". | Update is starting from the beginning. |
| Wait until the end of the upgrade load. | Update is launched but the update fail :<br> * Red danger alert : "Update failed", description : "You didn’t back up your store with the Update assistant module but you can restore using your own manual backup." (because there is no backup saved)<br> * At "Step dowload" 3 errors :<br> ## "Maximum execution time of [yourMaxExecutionTime] seconds exceeded"<br> ## "It seems there was an issue with the server. This type of error usually happens when [...]"<br> ## " HTTP request failed. Type: ERR_BAD_RESPONSE - HTTP Code: 500"<br> * Composant "Error Summary" with the 3 errors with a link "See error" for each<br> * 2 CTAs : "Download update logs", "Send error report" |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > Task > Update > Download.php. | File is opened. |
| In the function "public function run", delete "while(true) {}" and save the folder. | File saved with modifications. |
| Go to [admin_folder_name] and open a terminal in the folder. | New terminal appears ! |
| Type "sudo chmod 000 autoupgrade" and enter. | Command executed. |
| Reload the autoupdate page. | Error serveur : "500 Internal Server Error" |
| Enable the debug mode. | Debug mode enabled. |
| Reload the page. | Error : "Cannot write to the directory. Please ensure you have the necessary write permissions on "/var/www/html/pr_autoup/admin-dev/autoupgrade"." |
| On the terminal type "sudo chmod 777 autoupgrade" and enter. | Command executed. |
| Reload the update assistant page. | "Welcome to PrestaShop Update Assistant" page is displayed correctly :). |
| Change the URL of the BO from <br><br>[http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=f2a7a39f8608658c7d114813cfdc966e&route=home-page] <br><br>to <br><br>[http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=f2a7a39f8608658c7d114813cfdc966e&route=]<br><br>("home-page" delete) <br><br>and enter. | 404 error image :  <br> * Title :  "Something went wrong... "<br> * Text : "The requested page or resource could not be found. This might be due to:<br> ** A broken or outdated link.<br> ** The page being moved or deleted.<br> ** A typo in the URL." |
| Reload the update assistant page. | "Welcome to PrestaShop Update Assistant" page is displayed correctly :). |
| Select the "Update your Store" radio button. | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1.xx<br> * Radio button : PrestaShop LastVersion [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > UpgradeSelfCheck.php | File opened. |
| In :<br> * "public function getErrors(): array" <br> * "public function getWarnings(): array",<br><br>invert all the condition (check how to in datas) and save the folder. | Modifications saved. |
| Select "PrestaShop LastVersion" radio button. | The checking requirement should have 16 errors and 4 warnings : check screenshot attached. |
| Click on the link "developper documentation ". | "Update from the back office" page is opened in a new tab. |
| On the module tab, *ctrl + click* on the link "Shop parameters > General > Maintenance" (to open in a new tab). | General > Preferences page is displayed on the "General" tab. |
| On the module tab, *ctrl + click* on the link "Advanced parameters > Performance > Caching" (to open in a new tab). | Advanced parameters > Performance page is displayed on a new tab. |
| On the module tab, *ctrl + click* on the link "Modules > Module Manager > Updates" (to open in a new tab). | Module Manager > Updates > Module notification page is displayed on a new tab. |
