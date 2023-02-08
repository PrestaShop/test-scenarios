---
title: "BO - Design - Image Settings - Import Image type - feature not integrated -"
weight: 8
---

# BO - Design - Image Settings - Import Image type - feature not integrated -
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Clic on the "Generate theme image settings" button at the top right | A modal should be displayed |
| *Case : You don't have yml file for your theme with image type* <br> * Clic on the "import" button | * You'll have a red alert with the message " Your themes doesn't have image types configured" <br> * You still have 0 image type |
| *Case : You have yml file for your theme with image type* <br> * Clic on the "import" button | * You'll have a success message "The settings have been successfully updated" <br> * You'll have your image type |
| *Case : You have the same yml file for your theme with image type* <br> * Clic on the "import" button | * You'll have a red alert with the message " Your themes doesn't have image types configured" <br> * You still have the same image type |
| *Case : You have the same name on your image type but not the same size on your yml*  <br> * Clic on the "import" button | * You'll have a red alert with the message " Your themes doesn't have image types configured" <br> * You still have the same image type |
| *Case :* *You have the same size on your image type but not the same name on your yml*   <br> * Clic on the "import" button | * You'll have a success message "The settings have been successfully updated" <br> * You'll have twice your image type |
