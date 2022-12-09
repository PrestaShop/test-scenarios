---
title: "BO - Design - Image Settings - Delete actions"
weight: 7
---

# BO - Design - Image Settings - Delete actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Do the Precondition "BO - Image Settings - Create an Image type random" twice | You'll have two new image type |
| * Clic on the down arrow next to the first Image type create | * An other button should be dropped down |
| * Clic on the "Delete" button | * A new modal named "Are your sure you want to delete this image seeting?" should be dislpayed |
| * Clic on the red Delete button | * A progress bar wil be displayed during the deletion <br> * The first image should be deleted<br> * Image relative to this image type should not be removed |
| * Clic on the down arrow next to the last Image type create | * An other button should be dropped down |
| * Clic on the "Delete" button | * A new modal named "Are your sure you want to delete this image seeting?" should be dislpayed |
| * Check the box named "Delete the images linked to this image setting"<br> * Clic on the red Delete button | * A progress bar wil be displayed during the deletion <br> * The second image should be deleted<br> * Images relative to this image type are removed |
