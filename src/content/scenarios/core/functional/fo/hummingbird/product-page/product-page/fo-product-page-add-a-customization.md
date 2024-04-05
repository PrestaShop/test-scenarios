---
title: "FO - Product Page - Add a customization"
weight: 9
---

# FO - Product Page - Add a customization
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-6977

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Add Stock > Click Save | Successful update message is displayed |
| In detail tab > In Customization > Click Add a customization fields with following data x4 > Save and publish | Successful update message is displayed |
| Click on Preview button | The product page is well displayed on FO |
| Click on Add to cart button | Add to cart button is greyed out |
| Click on Save Customization | See the Text field lorem ipsum needs to be filles "Please fill in this field" |
| Write "Hello" in the field > Click Save Customization | Text field is well saved. See "Your customization: Hello"<br>See the File field lorem ipsum needs to be filled in "Please select a file" |
| Select a pdf file > Add it to the Customization > Save Customization | See warning displayed<br><br>https://github.com/PrestaShop/PrestaShop/issues/35623 |
| Click Previous on browser > Add a file with correct format > Save Customization | See that File customization is well saved.<br>The Preview image and the button Remove Image are displayed |
| Add product to cart > Click Proceed to checkout button > In cart, Click on Customized button | A modal is displayed with the info :<br>lorem ipsum : with the image<br>lorem ipsum : HELLO<br><br>https://github.com/PrestaShop/hummingbird/issues/612 |
| Close the modal > Click on the product > Add all 4 Product customization > Save Customization > Add to cart > Proceed to checkout | Shopping cart is displayed |
| Click on the Customized button of the latest product added | See all 4 fields are displayed |
| Close modal and Finish the process to checkout > Your order is confirmed > Click on Customized button on the Order details section | Modal is displayed with the product customization |
