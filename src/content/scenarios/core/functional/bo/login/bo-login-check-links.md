---
title: "BO - Login - Check links"
weight: 4
---

# BO - Login - Check links
## Details
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9461
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/00_login/04_checkLinks.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO - Login page | Login page is displayed |
| Click on your shop name on the top left corner | FO is displayed |
| Go back to BO - Login page | Login page is displayed |
| Click on "[© PrestaShop™ 2007-2024 - All rights reserved" | Link https://www.prestashop-project.org/ is opened in another tab |
| Go back to BO - Login page | Login page is displayed |
| Click on "X" icon | Link https://x.com/PrestaShop is opened in another tab |
| Go back to BO - Login page | Login page is displayed |
| Click on "facebook" icon | Link https://www.facebook.com/PrestaShopFR/ is opened in another tab |
| Go back to BO - Login page | Go back to BO - Login page |
| Click to "GitHub" icon | Link https://github.com/PrestaShop/PrestaShop is opened in another tab |
