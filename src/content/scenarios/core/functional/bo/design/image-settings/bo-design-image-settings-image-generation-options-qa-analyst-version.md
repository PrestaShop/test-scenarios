---
title: "BO - Design - Image Settings - Image Generation options - QA Analyst version"
weight: 9
---

# BO - Design - Image Settings - Image Generation options - QA Analyst version
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5176

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case : Your server support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG/PNG should be checked <br> * The checkbox of AVIF should be enable<br> * JPEG/PNG should be greyed <br> * You can't unchecked the JPEG/PNG format |
| Check the Webp checkbox ( you should have 3 checkboxes checked ) | You should have a message "Caution the selection of several image formats leads to a need for memory capacity greater and impact the perf during the generation" |
