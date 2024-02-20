---
title: "BO - Design - Image Settings - Image Generation on creation"
weight: 9
---

# BO - Design - Image Settings - Image Generation on creation
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5513
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/11_imageGenerationOnCreation.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/image-settings/add-new-image-type

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Design > Image Setttings and scroll down to image generation options<br> * Check WebP format | * JPEG/PNG should be checked <br> * JPEG/PNG should be greyed <br> * You can't unchecked the JPEG/PNG format<br> * Webp should be checked |
| * Go to catalog > Product<br> * Create a product with image | You should have images on jpg and Webp on the folder   [yourshop]/img/p/[idof your product] |
| * Go to catalog > Categories<br> * Clic on " Add a new Category" | You should have different images' format on the same name on the folder  [yourshop]/img/c/[idofyourcategories] |
