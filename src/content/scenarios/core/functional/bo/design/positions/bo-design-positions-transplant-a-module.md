---
title: "BO - Design - Positions - Transplant a module"
weight: 1
---

# BO - Design - Positions - Transplant a module
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-952

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  BO > Design > Positions | Position page is well displayed |
| Click on the button *Hook a module* | Hook a module page is well displayed |
| Select a module | The choosen module is well selected |
| Select an option for 'Hook to' | The chosen option is well selected |
| Select an option for Exceptions 'addresses' | The chosen exceptions is well selected |
| Click on Save button | A success message shoud be displayed 'The module transplanted successfully to the hook.' |
| Go to FO | See the banner displayed before the Image slider |
| Log into your account > Click on Adresses | The banner isn't displayed |
| Go back to BO > Design > Position > Search for Banner in Show field | Hooks displayHome and displayWrapperTop are displayed and highlighted |
| In displayWrapperTop > Click 3-dot button > Click Unhook | The module was successfully removed from the hook |
