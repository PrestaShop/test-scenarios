---
title: "BO - Design - Image Settings - Delete actions"
weight: 6
---

# BO - Design - Image Settings - Delete actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4940
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/06_deleteActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/image-settings/add-new-image-type

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Do the Precondition "BO - Image Settings - Create an Image type random" twice<br> * Scroll down and click on "Regenerate thumbnails"<br> * Clic on "Regenerate" on the modal | * You'll have two new image type<br> * You'll have a new modal <br> * You'll have products on the new format in [nameofyourshop]/img/p if you setup your image type for product |
| * Clic on the down arrow next to the first Image type create | * An other button should be dropped down |
| * Clic on the "Delete" button | * A new modal named "Are your sure you want to delete this image seeting?" should be dislpayed |
| * Clic on the red Delete button | * A progress bar wil be displayed during the deletion <br> * The first image should be deleted<br> * Image relative to this image type should not be removed |
| * Clic on the down arrow next to the last Image type create | * An other button should be dropped down |
| * Clic on the "Delete" button | * A new modal named "Are your sure you want to delete this image seeting?" should be dislpayed |
| * Check the box named "Delete the images linked to this image setting"<br> * Clic on the red Delete button | * A progress bar wil be displayed during the deletion <br> * The second image should be deleted<br> * Images relative to this image type are removed |
