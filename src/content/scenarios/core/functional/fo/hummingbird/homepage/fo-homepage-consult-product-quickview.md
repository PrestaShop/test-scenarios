---
title: "FO - Homepage - Consult product quickview"
weight: 4
---

# FO - Homepage - Consult product quickview
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5101

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Product list > Click on the Quick View button for the 3rd product "The best is yet to come' Framed poster" | A modal is displayed<br><br>with the product details<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/637/Screenshot+2021-11-29+at+16.32.42.png|width=625,height=309! |
| Change combination of product | See that the price will be updated accordingly |
| Change quantity of product and Click add to cart | Modal "Product successfully added to your shopping cart" is displayed |
| Click on the "cross" button  or "Continue Shopping" button or out side | The modal is closed |
| Click Quick View on another simple product ( the 6th product "MUG THE BEST IS YET TO COME") | The modal is well displayed and the data is ok <br> * Images<br> * Title<br> * Price<br> * Tax<br> * Description<br> * Quantity<br> * Add to cart button |
| Change quantity of product and Click add to cart | Modal "Product successfully added to your shopping cart" is displayed |
| Click on Cross button | The modal is closed |
| Click on All products link | The Home 2 page is well displayed |
| Scroll down and click on the next page | The second page is well displayed |
| Click on Quick view for the last demo product "customized product" (CUSTOMIZABLE MUG) and click on Quick view | The modal is well displayed and the data is ok <br> * Images<br> * Title<br> * Price<br> * Tax<br> * Description<br> * Quantity<br> * Add to cart button "Add to cart" button is disabled |
| Click on Cross button | The modal is closed |
| Click on quick view on the last product (out of stock created in the pre-condition) and click on quick view | * Add to cart button is disabled<br> *  Out-of-Stock label is displayed |
| Close the modal by clicking outside of the modal | Quick view modal is now closed |
| Delete the product created in the pre-condition | The product is well deleted |