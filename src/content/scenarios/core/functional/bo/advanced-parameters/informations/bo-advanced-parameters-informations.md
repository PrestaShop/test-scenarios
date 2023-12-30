---
title: "BO - Advanced Parameters - Informations"
weight: 1
---

# BO - Advanced Parameters - Informations
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1133

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Bo to  BO > Configure > Advanced Parameters > Information | The Information page should display correctly |
| Click on *Help* button on top right corner | Help card is displayed from the right side of the page |
| *Case1*<br><br>Click on *{color:#4c9aff}x{color}* button in the Help card header<br><br>*Case 2*<br><br>Click any where in Profiles page<br><br>*Case 3* <br><br>Click on *Help* button | The Help card disappears |
| Check that all the following blocks are well displayed | Configuration information<br>- Server information<br>- Database information<br>- Store information<br>- Mail configuration<br>- Your information<br>- Check your configuration |
| Check the block List of overrides | The following alert is displayed : No overrides have been found. |
| Check the block List of changed files | The following alert is displayed : No change has been detected in your files. |