---
title: "Autoupgrade - Verify the New UI (it\'ll be change)"
weight: 15
---

# Autoupgrade - Verify the New UI (it\'ll be change)
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-10136

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Manager " page" | Module Manager page is displayed correctly |
| Search for the "update module" module. Install it | Module is correctly installed |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the 1-Click Upgrade page | * You should see the configuration page of the module |
| * Open a terminal in your folder [yourshop]/modules/autoupgrade<br> * launch the command : <br>{code:java}<br>cd _dev{code}<br><br> * Launch the command :<br>{code:java}<br>npm install{code}<br><br> * Launch the command :<br>{code:java}<br>npm run vite:build{code}<br><br> * Launch the command :<br>{code:java}<br>cd ..{code}<br><br> * Launch the command :<br>{code:java}<br>composer install{code} | * A terminal is open in the right folder <br> * You should be in the folder [yourshop]/modules/autoupgrade/_dev<br> * Npm should be installed in your folder with this last word : "Run `npm audit` for details."<br> * The terminal should say some files have been modified <br> * You should return on the folder [yourshop]/modules/autoupgrade/<br> * You terminal will say "Nothing to install, update or remove" |
| * Return on the "Updrate Assistant" page | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore should be disabled except if you have a backup <br> ** A button "Get started" disabled |
| Clic on the radio button next to "Update your store" | * Your radio button should be checked <br> * the button "Get starder" should be Enabled |
| Click on the button "Get started" | * You should be on a new page named "Version choice"<br> * In the page, it should be : <br><br> * <br> **  a paragraph with "A more recent version is available / Current PrestaShop version: 8.1.5 / Current PHP version: [your php version]<br><br> * <br> ** Two radio button with : "Prestashop [last major/minor version]" and "Local Archive"<br> *** if you don't have a local archive set, you didn't have a radio button and you should have a blue notification with " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/"* **<br> ** A button named "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have all maube some warning and the button "Next" should be enabled |
| * Clic on the "Next" Button | * You should be on the "Update option" page with : <br> ** 3 checkbox named " Deactivate non-native modules ",  "Regenerate email templates" , " Disable all overrides "  with details about them under there name <br> ** "Next" Button enabled |
| Clic on the "Next" Button | * You should be on the "Back up your store" page with : <br> ** sub title "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Checkboxe : "Include images in your backup"<br> ** 2 buttons : "Update without backup" and "launch backup" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| Click on the cross or elsewhere the module | The modal should be close and you 'll be on the page "Back up your store" |
| Click on "Update without backup" | You should have a modal with <br> * title : " Start update? "<br> * Sub title : "Before starting the update, make sure you have a complete and recent backup of your store (database, files, and images)."<br> * a Check box : "I have made my own backup and can restore it manually if a problem occur."<br> * 2 button : "Cancel" and " Start update", the last one is disabled |
| * Click on the checkbox "I have made my own backup (...)" <br> * Click on the cross or elsewhere the module | * The button "Start Update" should be enabled <br>* The modal should be close and you 'll be on the page "Back up your store" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| * Click on "Start Backup" | * You should be on the page "Backup" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| Click on "Start Update" | You should have a modal with <br> * title : " Start Update ? "<br> * Sub title : "You are about to launch the update, do you want to continue?"<br> * 2 button : "Cancel" and " Start Update " |
| * Click on "Start Update" | * You should be on the page "Update" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the update | You should have be on a new page with <br> * title : " Post-update checklist "<br> * A green notification : "Your store is up to date"<br> * Sub title : "Next step" and Troubleshooting <br> * A link : "Download update logs"<br> * 2 button : "Exit" and " Open developer documentation" |
| Click on the button "Exit" | * You should be redirected to "[admin_folder]/index"<br> * Prestashop ask you to log in |
| * Set your connection information <br> * click on log in | * Your information should be set up <br> * You should be on the dashboard with the new version number of prestashop in the top left, just after the word Prestashop |
