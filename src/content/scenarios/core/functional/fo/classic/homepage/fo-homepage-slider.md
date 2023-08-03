---
title: "FO - Homepage - Slider"
weight: 1
---

# FO - Homepage - Slider
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1225
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/06_homePage/01_checkSlider.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > On Homepage > See slider and click on right arrow | The slider should slide to the right |
| Click on the left arrow | The slider should slide to the left |
| Click anywhere on the slider itself (except arrow column) | * The page should refreshed with the added link to the slide<br> * Example: [https://www.prestashop.com/en?utm_source=back-office&utm_medium=v17_homeslider&utm_campaign=back-office-EN&utm_content=download] |
