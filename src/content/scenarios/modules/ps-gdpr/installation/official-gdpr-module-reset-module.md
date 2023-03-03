---
title: "Official GDPR module - Reset module"
weight: 3
---

# Official GDPR module - Reset module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_gdpr | The module page list should be displayed and *GDPR* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset GDPR block module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module | The "Configure" page is displayed |
| Go to "Consent checkbox customization" tab > Delete text in second textarea "Consent request message" > Click on "Save" button at the bottom of the page | A successful message "Saved with success !" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on the user name link in the header (should be logged with pre-condition) | "Your account" page is displayed |
| Go to "Information" tab | * "Your personal information" page is displayed<br> * Checkbox with consent should not have label beside it |
| Go back to BO > Module list page with ps_gdpr module displayed > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module ps_gdpr should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "the reset action on the gdpr module was successful" is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * In "Consent checkbox customization" tab, the default text in second insert "Consent request message" is added |
| Go back to FO > Reload the page | Checkbox with consent should have the default label beside it |
