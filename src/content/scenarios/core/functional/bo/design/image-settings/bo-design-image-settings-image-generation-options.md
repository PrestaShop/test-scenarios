---
title: "BO - Design - Image Settings - Image Generation options"
weight: 9
---

# BO - Design - Image Settings - Image Generation options
## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case : Your server doesn't support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG and WebP should be checked <br> * The checkbox of AVIF should be disable <br> * You'll see an error message next to the Avif : "Your server does not support Avif formar, for more infomation visit this link" |
| *Case : Your server support Avif* <br> * Go to BO > Design > Image Setttings and scroll down to image generation options | * JPEG and WebP should be checked <br> * The checkbox of AVIF should be enable |
| Check the JPEG checkbox ( you should have 3 checkboxes checked ) | You should have a message "Caution the selection of several image formats leads to a need for memory capacity greater and impact the perf during the generation" |
| *Case : Your server support Avif* <br> * Check The AVIF <br> * Uncheck All other image's format | * The checkbox of AVIF should be greyed<br> * You can't uncheck Avif<br> * The fallback should be AVIF |
| * Check The WebP <br> * Uncheck All other image's format | * The checkbox of WebP should be greyed<br> * You can't uncheck WebP<br> * The fallback should be WebP |
| * Check The JPEG <br> * Uncheck All other image's format | * The checkbox of JPEG should be greyed<br> * You can't uncheck JPEG<br> * The fallback should be JPEG |
| * Check The PNG <br> * Uncheck All other image's format | * The checkbox of PNG should be greyed<br> * You can't uncheck PNG<br> * The fallback should be PNG |
| * Check All other image's format<br> * Put the Fallback on PNG<br> * Uncheck The PNG <br> * Clic on the "Save" Button | The fallback should be JPEG |
| * Uncheck The JPEG <br> * Clic on the "Save" Button | * The fallback should be WebP |
| * Uncheck The WebP <br> * Clic on the "Save" Button | * The fallback should be AVIF |
