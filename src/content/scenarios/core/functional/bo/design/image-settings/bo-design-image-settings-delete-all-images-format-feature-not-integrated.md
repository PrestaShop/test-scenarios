---
title: "BO - Design - Image Settings - Delete all images format -  feature not integrated -"
weight: 10
---

# BO - Design - Image Settings - Delete all images format -  feature not integrated -
## Details
* **Component** : Core
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-5514

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Clic on the "Bulk actions" Button<br> * Clic on "Select all"<br> * Clic on the "Delete selected" button | * You'll have three other selection on the slide up "Select all", "Unselect all" and "Delete selected"<br> * A new modal named "Are your sure you want to delete this image seeting?" should be dislpayed |
| * Check the box named "Delete the images linked to this image setting"<br> * Clic on the red Delete button | * A progress bar wil be displayed during the deletion <br> * All images type should be deleted<br> * Images relative to this image type are removed |
| * Go to your shop <br> * Select a product | This product should be shown with no image on it |
