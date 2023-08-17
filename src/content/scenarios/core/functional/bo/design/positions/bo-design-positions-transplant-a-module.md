---
title: "BO - Design - Positions - Transplant a module"
weight: 1
---

# BO - Design - Positions - Transplant a module
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-952

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  BO > Design > Positions | Position page is well displayed |
| Click on the button *Transplant a module* | Title  of the displayed page should be *Position* <br>The  title of displayed tab should be *Transplant a module* |
| Select a module | The choosen module is well selected |
| Select an option for ' Transplant to ' | The choosen option is well selected |
| Select an option for Exceptions 'address' | The choosen excpetions is well selected |
| Click on save button | A success message shoud be displayed 'The module transplanted successfully to the hook.' |
| In show modules select the module *banner* | Hook displayAdminEndContent is displayed and Banner is highlighted |
| In Search for a hook field > Search for displayAdminEndContent | * Hook displayAdminEndContent is displayed and highlighted<br> * You can see the banner under all the position displayed |
| Delete everything in the search hook field and in modules field select "All modules" | All hooks are displayed |
