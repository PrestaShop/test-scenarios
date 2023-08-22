---
title: "BO - Design - Theme & Logo - Change Header logo / mail logo / invoice logo"
weight: 3
---

# BO - Design - Theme & Logo - Change Header logo / mail logo / invoice logo
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-917

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Theme & Logo | The Theme & Logo > Theme page is displayed |
| *For the Header logo* <br> * On Header logo part, Click on Browse button<br> * Select a SVG image <br> * Clic on Save button | * You folder should be opened to select an image<br> * It name should set on the field next to the Browse button<br> * The image should be set *only* for the header logo |
| * On Header logo part, Click on Browse button<br> * Select a any other image type<br> * Clic on Save button | * You folder should be open to select an image<br> * It name should set on the field next to the Browse button<br> * The image should be set for the header logo, the mail logo and the invoice logo |
| *For the Mail logo* <br> * In the square of Mail logo, Click on Browse button<br> * Select any image type<br> * Clic on Save button | * You folder should be open to select an image<br> * It name should set on the field next to the Browse button<br> * The image should be set *only* for the mail logo |
| *For the Invoice logo* <br> * Clic on Invoice logo <br> * In the square of Invoice logo, Click on Browse button<br> * Select any image type<br> * Clic on Save button | * Now Invoice logo is bold and underline and you have the image of invoice <br> * You folder should be open to select an image<br> * It name should set on the field next to the Browse button<br> * The image should be set *only* for the invoice logo |
| *For the Favicon* <br> * Clic on the link under the field of the favicon name <br> * Clic on upload picture <br> * Select a WebP picture<br> * Clic on Generate | * You'll be redirect to [https://addons.prestashop.com/en/create-favicon.php?pab=1] <br> * You folder is displayed <br> * It name should set on the field next to the Upload picture<br> * You'll have a red alert : "Something went wrong! Image format not recognized, allowed formats are: jpg, jpeg, png" |
| * Clic on upload picture <br> * Select a picture with more than 2 Mo<br> * Clic on Generate | * You folder is displayed <br> * It name should set on the field next to the Upload picture<br> * You'll have a red alert : "Something went wrong! Image is too large (5652 kB). Maximum allowed: 1953 kB" |
| * Clic on upload picture <br> * Select a picture with minus than 2 Mo<br> * Clic on Generate<br> * Connect with your account <br> * Clic on download your favicon | * You folder is displayed <br> * It name should set on the field next to the Upload picture<br> * The website will ask to connect to your account <br> * You'll have your favicon in your folder |
| * In the square of Favicon, Click on Browse button<br> * Select ico image type<br> * Clic on Save button | * You folder should be open to select an image<br> * It name should set on the field next to the Browse button<br> * The image should be set *only* for the favicon |
