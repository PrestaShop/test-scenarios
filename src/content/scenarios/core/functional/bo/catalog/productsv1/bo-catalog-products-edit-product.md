---
title: "BO - Catalog - Products - Edit Product"
weight: 6
---

# BO - Catalog - Products - Edit Product
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-785

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click on the Pen of an existing product | Edit product page opens in tab Basic Settings |
| *In Basic Settings*<br><br>Edit name of product - reference - price - images - description > Click Save | Info updated<br><br>Message Settings updated. appears |
| Add Feature > Pre-defined value > Save | Message Settings updated. appears |
| Add Feature > Add Customized value > Add your value > Save | Message Settings updated. appears |
| Go to FO product page > Click on Product Detail | See in Data sheet the Features updated |
| Delete Brand > Yes > Click Add a Brand > Choose a brand > Save | Message Settings updated. appears |
| Search and Add a related Product > Type product name > Product should appear in dropdown > Choose product to add > Save | Message Settings updated. appears |
| Click on the cross to delete the related product > Click the Trash icon to delete all related product > YES > Save | Message Settings updated. appears |
| In Category section > Search for a category and add it | You will see it in Associated Category<br><br>Expand all categories and see that the new category is checked |
| Choose another main category > Save | Message Settings updated. appears |
| Create a new category > Choose a name > Choose a parent > Click Create | The new category will be present is Associated Categories block and checked in category tree |
| Go to Category page > See your new category in the parent category | New category is listed in Category page |
| *In Virtual Product*<br><br>Edit Quantity - Minimum quantity for sale > Save | Quantities are updated<br><br>Message Settings updated. appears. |
| Associated File > Check YES > Add an associated file > Add 1 to number of Number of allowed downloads> Click Save for File > Click Save for the entier product<br><br>Go to FO > Add product to cart > Pay<br><br>Go back to BO > Payment status of Order should be considered as paid | In the customer account > Go to Order history and Details > Click on your product to download it > Virtual product is downloaded > Click once again on the product to download it<br><br>Message You have reached the maximum number of downloads allowed. appears<br><br>Homepage shop displays |
| *In Combinations*<br><br>Choose several attributes in right column (Size, Color, etc) > Click Generate | Combination are generated and Message Settings updated. appears |
| Add a quantity to the newly created combination > Click the pen to Edit it | Message Settings updated. appears<br><br>A popup will appear with all info regarding combination<br><br>Prev combination and Next combination buttons appear on top |
| Set min quantity for sale and add a reference > Save >  Click Preview to see product FO | See that minimal quantity is met with the edited combination |
| In Availability preferences > Deny Orders > Click Preview | Try to add product to the cart > Can't be added<br><br>Can't push button Add to Cart<br><br>Message _Product available with different options_ appears |
| In Availability preferences > Allow Orders > Click Preview | Add product to the cart > Product is added to cart |
| Add a label for option "Label when in stock" > Go to FO > Choose product combination with stock | Label is displayed |
| Add a label for option "Label when out of stock (and back order allowed)" > Go to FO > Choose product combination without stock | Label is displayed |
| *In Shipping*<br><br>Add Width - Height - Depth - Weight > Save | Message Settings updated. appears |
| In Delivery Time > Choose None | Message Settings updated. appears<br><br>In FO > There's no change on the product sheet |
| In Delivery Time > Choose Default delivery time > Click on the link provided | New page opens with Advanced Parameters > Product Settings |
| In Delivery Time > Choose Specific delivery time to this product > Add info in both fields | In FO > Delivery time is displayed next to the price |
| Add Shipping fee > Save | Message Settings updated. appears<br><br>Go to FO > Add product to cart > in checkout process step 3 > See that shipping in increases |
| Check one carrier that is disabled | Message Settings updated. appears<br><br>Go to FO > Add product to cart > in checkout process step 3 > See that there's no shipping available |
| *In Pricing*<br><br>Edit the Retail price (tax incl.) of your product > Add a Retail price per unit (tax excl.) and the unit > Save | Go to FO > See price is updated + new line with price per unit is displayed |
| Add a Specific Price > Add a min quantity > Add a discount > Apply > Save > Click Preview | Message Settings updated. appears<br><br>In FO > New table is displayed with Volume Discounts |
| Add to cart a product to get Volume Discount > Continue Checkout Process | In Shopping cart, see the price discount |
| *In Options*<br><br>Click Dropdown And choose option | Message Settings updated. appears<br><br>Everywhere > Product is displayed everywhere (search, categories, home, etc)<br><br>Catalog Only > Product can only be found in the shop (no search)<br><br>Search Only > Product can only be found via search bar<br><br>Nowhere > Product can only be found via link (no search, no display in shop) |
| Add a Condition and display it in the product sheet<br><br>Add References with digits | Reference can only contains digits, if letters are added a message appears : Unable to update settings. + This value is not valid.<br><br>Message Settings updated. appears<br><br>Go to FO > Product details > Specific references and condition are updated |
| Add a customisation possibility > Add Label > Choose Type > Choose Required > Save > Preview | In FO > Product Customization block appears > Product can't be added unless Customization is added |