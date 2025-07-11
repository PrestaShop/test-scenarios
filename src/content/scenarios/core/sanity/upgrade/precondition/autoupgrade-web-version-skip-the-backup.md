---
title: "Autoupgrade - Web Version - Skip the backup"
weight: 8
---

# Autoupgrade - Web Version - Skip the backup
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11305

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> ** Radio button : PrestaShop 1.7.8.xx [Patch version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Update without backup" | Modal "Start update?" is displayed : <br> * Text : "Before starting the update, make sure you have a complete and recent backup of your store (database, files, and images)."<br> * 2 CTAs : "Cancel" and "Start backup"<br> * A Checkbox "I have made my own backup and can restore it manually if a problem occurs."<br> * 2 CTAs : "Cancel" (enabled) and "Start update" (disabled) |
| Check the checkbox "I have made my own backup (...)". | The CTA "Start update" is enabled. |
| * Click on the CTA "Start update". | * The page "Update" is displayed :<br><br> ** Stepper on step 4 ("Update")<br> ** loading bar with the current process <br> ** details of the current process are listed |
