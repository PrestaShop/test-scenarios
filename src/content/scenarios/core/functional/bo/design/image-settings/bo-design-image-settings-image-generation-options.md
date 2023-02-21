---
title: "BO - Design - Image Settings - Image Generation options"
weight: 9
---

# BO - Design - Image Settings - Image Generation options
## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case : Your server doesn't support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG and WebP should be checked <br> * The checkbox of AVIF should be disable <br> * You'll see an error message next to the Avif : "Your server does not support Avif formar, for more infomation visit this link"<br> * JPEG should be greyed <br> * You can't unchecked the JPEG format |
| *Case : Your server support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG and WebP should be checked <br> * The checkbox of AVIF should be enable<br> * JPEG should be greyed <br> * You can't unchecked the JPEG format |
| Check the PNG checkbox ( you should have 3 checkboxes checked ) | You should have a message "Caution the selection of several image formats leads to a need for memory capacity greater and impact the perf during the generation" |
