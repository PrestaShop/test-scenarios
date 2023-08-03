---
title: "BO - Design - Image Settings - Image Generation options - Automated version"
weight: 10
---

# BO - Design - Image Settings - Image Generation options - Automated version
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5667

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case : Your server doesn't support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG/PNG  should be checked <br> * The checkbox of AVIF should be disable <br> * You'll see an error message next to the Avif : "Your server does not support Avif formar, for more infomation visit this link"<br> * JPEG/PNG should be greyed <br> * You can't unchecked the JPEG/PNG format |
