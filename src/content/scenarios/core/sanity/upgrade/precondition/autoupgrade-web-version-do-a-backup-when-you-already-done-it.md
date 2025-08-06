---
title: "Autoupgrade - Web Version - Do a backup when you already done it"
weight: 10
---

# Autoupgrade - Web Version - Do a backup when you already done it
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-11488

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> * <br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" <br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop [last version enabled] [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
