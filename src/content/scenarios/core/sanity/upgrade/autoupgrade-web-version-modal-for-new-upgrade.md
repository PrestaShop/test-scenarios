---
title: "Autoupgrade - Web Version - modal for new Upgrade "
weight: 18
---

# Autoupgrade - Web Version - modal for new Upgrade 
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-12195

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 1.7.7.8 on php 7.1 | A selection between BO and FO is displayed |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the update assistant module and Install it | Module is correctly installed |
| Click on the Dashboard in the side menu | Dashboard menu is displayed with a modal :<br> * on the left : <br> ** "New available Minor" writted in black with a blue bacckground<br> ** "New features are available" in white, with the prestashop typo with a black background <br><br> * on the right : <br> ** Four part of text : "Description", "Version", "Type of improvements" and "Need help?"<br> ** Two CTA : "Remind me later" and "Update"<br> ** On description : "The minor releases introduce new backward-compatible features, security improvements and bug fixes. [See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" <br> ** On Version : "{test-param}Last_version_178{test-param} "<br> ** On Type of improvements : "Bugs, security patches, new features"<br> ** On Need help? : "If you're having trouble performing the update, consider seeking help from the community or a qualified developer. Find Support" |
| Click on "[See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" link on description part | New tab open with title : "PrestaShop {test-param}Last_version_178{test-param}  Is Available" |
| Click on "Find Support" link on Need help? part | New tab open with title "Get help with PrestaShop" |
| Close two differents new tab | Dashboard page is displayed with the modal |
| Click on "Update" CTA | "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.7.8/ Current PHP version: 7.1.xx<br> * Radio button : PrestaShop {test-param}Last_version_178{test-param}   (Minor) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Install A fresh 1.7.8.3 on php 7.1 | A selection between BO and FO is displayed |
| Go to BO | Dashboard is displayed |
| Go to Module Catalog" page" | Module Catalog page is displayed |
| Search for the update assistant module and Install it | Module is correctly installed |
| Click on the Dashboard in the side menu | Dashboard menu is displayed with a modal : <br> * on the left : <br> ** " New available Patch" writted in black with a blue bacckground<br> ** "New features are available" in white, with the prestashop typo with a black background <br><br> * on the right : <br> ** Four part of text : "Description", "Version", "Type of improvements" and "Need help?"<br> ** Two CTA : "Remind me later" and "Update"<br> ** On description : "The minor releases introduce new backward-compatible features, security improvements and bug fixes. [See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" <br> ** On Version : "{test-param}Last_version_178{test-param} "<br> ** On Type of improvements : "Bugs, security patches, new features"<br> ** On Need help? : "If you're having trouble performing the update, consider seeking help from the community or a qualified developer. Find Support" |
| Click on "Update" CTA | "Version choice" page is displayed : <br><br>  <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.3 / Current PHP version: 7.1.xx<br> * Radio button : PrestaShop {test-param}Last_version_178{test-param}   (Patch) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Click on Dashboard | Dashboard is displayed with no modal |
| Change your php to 7.4 | You php should be 7.4 now |
| Go to your phpmyadmin | All you database is displayed |
| Search for [prefix]_configuration | All different parameters of your shop is displayed |
| Click on Edit inline | A field is displayed to writte your research |
| Writte and clic on "Go"<br>{code:java}<br>SELECT * FROM `pls_configuration` WHERE name="PS_AUTOUPGRADE_LAST_CHECK";{code} | The parameter "PS_AUTOUPGRADE_LAST_CHECK" is the only one parameters displayed |
| Change the value part | Value is saved |
| Return on BO and reload the dashboard page | Dashboard menu is displayed with a modal :<br> * on the left : <br> ** "New available Major" writted in black with a blue bacckground<br> ** "New features are available" in white, with the prestashop typo with a black background <br><br> * on the right : <br> ** Four part of text : "Description", "Version", "Type of improvements" and "Need help?"<br> ** Two buttons : "Remind me later" and "Update"<br> ** On description : "The minor releases introduce new backward-compatible features, security improvements and bug fixes. [See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" <br> ** On Version : "{test-param}Last_version_8{test-param} "<br> ** On Type of improvements : "Bugs, security patches, new features"<br> ** On Need help? : "If you're having trouble performing the update, consider seeking help from the community or a qualified developer. Find Support" |
| Click on "[See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" link on description part | New tab open with title : "PrestaShop {test-param}Last_version_8{test-param}  Is Available" |
| Close new tab | Dashboard page is displayed with the modal |
| Click on "Update" button | "Version choice" page is displayed : <br> <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.3 / Current PHP version: 7.4.xx<br> * Radio button : PrestaShop {test-param}Last_version_8{test-param}    (Patch) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Install A fresh 8.0.3 and keep php 8.1 | A selection between BO and FO is displayed |
| Go to BO | Dashboard is displayed |
| Go to the Module Manager" page" | Module Catalog page is displayed |
| Search for the update assistant module and Install it | Module is installed |
| Click on the Dashboard on the side menu | Dashboard menu is displayed with a modal : <br> * on the left : <br> ** " New available Minor" writted in black with a blue bacckground<br> ** "New features are available" in white, with the prestashop typo with a black background <br><br> * on the right : <br> ** Four part of text : "Description", "Version", "Type of improvements" and "Need help?"<br> ** Two CTA : "Remind me later" and "Update"<br> ** On description : "The minor releases introduce new backward-compatible features, security improvements and bug fixes. [See the update|https://build.prestashop-project.org/news/2024/prestashop-1-7-8-11-maintenance-release/]" <br> ** On Version : "{test-param}Last_version_8{test-param} "<br> ** On Type of improvements : "Bugs, security patches, new features"<br> ** On Need help? : "If you're having trouble performing the update, consider seeking help from the community or a qualified developer. Find Support" |
| Click on Remind me later CTA | CTA is greyed and three new CTA are displayed : "7 days", "30 days" and "Until the next version" |
| Click on "7 days" | The modal is hidden |
| Go to your phpmyadmin | All you database is displayed |
| Search for [prefix]_configuration | All different parameters of your shop is displayed |
| Click on Edit inline | A field is displayed to writte your research |
| Writte and clic on "Go"<br>{code:java}<br>SELECT * FROM `pls_configuration` WHERE name="PS_AUTOUPGRADE_LAST_CHECK";{code} | The parameter "PS_AUTOUPGRADE_LAST_CHECK" is displayed with on value, timestamp equal to the timestamp for 7days on the "employeeID :1" |
| On the value, put "{color:#00875a}*0*{color}" into the value : "timestamp" next to "employeeID : 1" and press enter | The value is saved |
| Return on the BO and reload the page | Dashboard menu is displayed with update modal |
| {color:#FF0000}*GROUIIIIIIIIK*{color} |  |
| Click on Remind me later CTA | CTA is greyed and three new CTA are displayed : "7 days", "30 days" and "Until the next version" |
| Click on "30 days" | The modal is hidden |
| * Go to your phpmyadmin<br> * Search for your [prefix]_configuration<br> * Click on Edit inline<br> * Writte <br>{code:java}<br>SELECT * FROM `pls_configuration` WHERE name="PS_AUTOUPGRADE_LAST_CHECK";{code}<br><br> * Click on "Go" | * All you database should be showed<br> * You should have all different parameters of your shop<br> * You could writte something on it<br> * The field should be set<br> * You should only have the parameter "PS_AUTOUPGRADE_LAST_CHECK" with on value, timestamp equal to the timestamp for 30days on the "employeeID :1" |
| On the value, put a 0 into the value : "timestamp" next to "employeeID : 1" and press enter | The value should be saved |
| Return on the BO and reload the page | You should be on the dashboard menu with update modal |
| Click on Remind me later | The button should be greyed and three new button should be displayed : "7 days", "30 days" and "Until the next version" |
| Click on "Until the next version" | The modal should be hidden |
| * Go to your phpmyadmin<br> * Search for your [prefix]_configuration<br> * Click on Edit inline<br> * Writte <br>{code:java}<br>SELECT * FROM `pls_configuration` WHERE name="PS_AUTOUPGRADE_LAST_CHECK";{code}<br><br> * Click on "Go" | * All you database should be showed<br> * You should have all different parameters of your shop<br> * You could writte something on it<br> * The field should be set<br> * You should only have the parameter "PS_AUTOUPGRADE_LAST_CHECK" with on value, np mention of timestamp for the "employeeID :1" and you have ""versionChecked":"8.2.1"" |
| On the value, put a 0 into the value : "timestamp" and press enter | The value should be saved |
| Return on the BO and reload the page | You should be on the dashboard menu with no modal |
| Click on the icon of your employee session | You should have a modal with : <br> * Welcome back [nameOfYourEmployee]<br> * The picture of your employee<br> * a button with a pen on it and "Your profile" for the text <br> * A link with an icon of a clock and "Discover the latest releases" for the text<br> * A link sign out |
| Put your mouse over the link "Discover the latest release" | The background of the link should be blue and the text'll be white |
| Click on "Discover the latest release" | A new tab should be opened on a webpage with title "Articles about PrestaShop releases" |
| * Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events#9ad5X2HJqJ7y"<br> * set on filter the parameters | You should see : <br> * [SUE] Update modal displayed" <br> * [SUE] Update module opened following modal display" <br> * SUE] Update modal snoozed" <br><br>With the same Anonymous ID and php write like "X.X.XX"<br>and <br> * autoupgrade_version <br> * module<br> * php_version <br> * ps_version |
