---
title: "BO - Design - Image Settings - Image Generation options - Automated version"
weight: 7
---

# BO - Design - Image Settings - Image Generation options - Automated version
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5667
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/09_imageGenerationOptions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/image-settings/add-new-image-type

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case : Your server doesn't support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG/PNG  should be checked <br> * The checkbox of AVIF should be disable <br> * You'll see an error message next to the Avif : "Your server does not support Avif formar, for more infomation visit this link"<br> * JPEG/PNG should be greyed <br> * You can't unchecked the JPEG/PNG format |
